// Main Custom JavaScript for SLE Template
// Handles initialization, menu, and general interactions

document.addEventListener('DOMContentLoaded', function() {
    // Remove preloader after page loads
    const preloader = document.querySelector('.preloader');
    if (preloader) {
        // Wait for images and content to load
        window.addEventListener('load', function() {
            setTimeout(() => {
                preloader.classList.remove('active');
            }, 300);
        });
        
        // Fallback: remove after 2 seconds even if load event doesn't fire
        setTimeout(() => {
            if (preloader.classList.contains('active')) {
                preloader.classList.remove('active');
            }
        }, 2000);
    }

    // Initialize lazy loading
    if (typeof lozad !== 'undefined') {
        const observer = lozad('.lazy', {
            loaded: function(el) {
                el.classList.add('loaded');
            }
        });
        observer.observe();
    }

    // Menu functionality
    const menuBtn = document.querySelector('.mnu-btn');
    const mainMenu = document.querySelector('.main-menu, .spf');
    const menuClose = document.querySelector('.popup-close, .mm-close');
    
    // Close menu functionality
    function closeMenu() {
        document.body.classList.remove('mm-open');
        document.documentElement.classList.remove('mm-open');
        document.body.style.overflow = '';
    }
    
    if (menuBtn) {
        menuBtn.addEventListener('click', function(e) {
            e.preventDefault();
            e.stopPropagation();
            
            // Toggle menu - if already open, close it; otherwise open it
            if (document.body.classList.contains('mm-open')) {
                closeMenu();
            } else {
                // Add mm-open class to body to show menu
                document.body.classList.add('mm-open');
                document.documentElement.classList.add('mm-open');
                document.body.style.overflow = 'hidden';
            }
        });
    }

    if (menuClose) {
        menuClose.addEventListener('click', function(e) {
            e.preventDefault();
            closeMenu();
        });
    }

    // Close menu on outside click (clicking on the menu background)
    if (mainMenu) {
        mainMenu.addEventListener('click', function(e) {
            // Check if clicking directly on the menu container (not on content)
            if (e.target === mainMenu || e.target.classList.contains('mm-container')) {
                closeMenu();
            }
        });
    }

    // Close menu on Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && document.body.classList.contains('mm-open')) {
            closeMenu();
        }
    });

    // Popup functionality
    const popupTriggers = document.querySelectorAll('[data-popup-id]');
    const popups = document.querySelectorAll('.popup');
    const popupCloses = document.querySelectorAll('.popup-close');

    popupTriggers.forEach(trigger => {
        trigger.addEventListener('click', function(e) {
            e.preventDefault();
            const popupId = this.getAttribute('data-popup-id');
            const popup = document.querySelector(popupId);
            if (popup) {
                popup.classList.add('active');
                document.body.style.overflow = 'hidden';
            }
        });
    });

    popupCloses.forEach(close => {
        close.addEventListener('click', function() {
            const popup = this.closest('.popup');
            if (popup) {
                popup.classList.remove('active');
                document.body.style.overflow = '';
            }
        });
    });

    // Cookie message
    const cookieMessage = document.querySelector('.cookie-message-outer');
    const cookieBtn = document.querySelector('.cookie-btn a');
    
    if (cookieBtn && cookieMessage) {
        cookieBtn.addEventListener('click', function(e) {
            e.preventDefault();
            cookieMessage.style.display = 'none';
            localStorage.setItem('cookieAccepted', 'true');
        });

        // Check if already accepted
        if (localStorage.getItem('cookieAccepted') === 'true') {
            cookieMessage.style.display = 'none';
        }
    }

    // Go to top button
    const goToTop = document.querySelector('.go-to-top');
    if (goToTop) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 300) {
                goToTop.classList.add('active');
            } else {
                goToTop.classList.remove('active');
            }
        });

        goToTop.addEventListener('click', function() {
            if (typeof gsap !== 'undefined' && typeof ScrollToPlugin !== 'undefined') {
                gsap.to(window, {
                    duration: 1,
                    scrollTo: { y: 0 },
                    ease: 'power2.inOut'
                });
            } else {
                window.scrollTo({ top: 0, behavior: 'smooth' });
            }
        });
    }

    // Initialize Flickity carousels
    if (typeof Flickity !== 'undefined') {
        const carousels = document.querySelectorAll('.testimonials-carousel, .carousel');
        carousels.forEach(carousel => {
            new Flickity(carousel, {
                cellAlign: 'left',
                contain: true,
                prevNextButtons: true,
                pageDots: true,
                wrapAround: true,
                autoPlay: 4000
            });
        });
    }

    // Initialize LightGallery
    if (typeof lightGallery !== 'undefined') {
        const galleries = document.querySelectorAll('.lightgallery');
        galleries.forEach(gallery => {
            lightGallery(gallery, {
                plugins: [lgThumbnail, lgVideo],
                speed: 500,
                download: false
            });
        });
    }

    // Language switcher
    const langCurrent = document.querySelector('.lang-current');
    const langList = document.querySelector('.lang-list');
    
    if (langCurrent && langList) {
        langCurrent.addEventListener('click', function(e) {
            e.preventDefault();
            langList.classList.toggle('active');
        });

        document.addEventListener('click', function(e) {
            if (!langCurrent.contains(e.target) && !langList.contains(e.target)) {
                langList.classList.remove('active');
            }
        });
    }

    // Smooth scroll for anchor links
    const anchorLinks = document.querySelectorAll('a[href^="#"]');
    anchorLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            if (href !== '#' && href !== '#!') {
                const target = document.querySelector(href);
                if (target) {
                    e.preventDefault();
                    if (typeof gsap !== 'undefined' && typeof ScrollToPlugin !== 'undefined') {
                        gsap.to(window, {
                            duration: 1,
                            scrollTo: { y: href, offsetY: 0 },
                            ease: 'power2.inOut'
                        });
                    } else {
                        target.scrollIntoView({ behavior: 'smooth' });
                    }
                }
            }
        });
    });

    // Header fade in/out on scroll (but keep menu icon and brand name visible)
    const header = document.querySelector('.header');
    const headerBrand = document.querySelector('.header-brand');
    const headerBrandIs = document.querySelector('.header-brand-is');
    const headerNav = document.querySelector('.header-nav');
    
    if (header) {
        let lastScrollTop = 0;
        let scrollThreshold = 100; // Minimum scroll distance before hiding
        let ticking = false;

        function handleScroll() {
            if (!ticking) {
                window.requestAnimationFrame(function() {
                    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
                    
                    // Only hide/show if scrolled past threshold
                    if (Math.abs(scrollTop - lastScrollTop) > 5) {
                        if (scrollTop > lastScrollTop && scrollTop > scrollThreshold) {
                            // Scrolling down - fade out header parts (but keep menu icon and brand)
                            if (headerBrandIs) {
                                headerBrandIs.style.opacity = '0';
                                headerBrandIs.style.pointerEvents = 'none';
                                headerBrandIs.style.transition = 'opacity 0.3s ease-in-out';
                            }
                            if (headerNav) {
                                headerNav.style.opacity = '0';
                                headerNav.style.pointerEvents = 'none';
                                headerNav.style.transition = 'opacity 0.3s ease-in-out';
                            }
                            // Keep header-brand (menu icon and logo) always visible
                            if (headerBrand) {
                                headerBrand.style.opacity = '1';
                                headerBrand.style.pointerEvents = 'auto';
                            }
                        } else if (scrollTop < lastScrollTop) {
                            // Scrolling up - fade in header parts
                            if (headerBrandIs) {
                                headerBrandIs.style.opacity = '1';
                                headerBrandIs.style.pointerEvents = 'auto';
                                headerBrandIs.style.transition = 'opacity 0.3s ease-in-out';
                            }
                            if (headerNav) {
                                headerNav.style.opacity = '1';
                                headerNav.style.pointerEvents = 'auto';
                                headerNav.style.transition = 'opacity 0.3s ease-in-out';
                            }
                            // Keep header-brand always visible
                            if (headerBrand) {
                                headerBrand.style.opacity = '1';
                                headerBrand.style.pointerEvents = 'auto';
                            }
                        }
                        
                        lastScrollTop = scrollTop;
                    }
                    
                    ticking = false;
                });
                
                ticking = true;
            }
        }

        window.addEventListener('scroll', handleScroll, { passive: true });
        
        // Show all header parts at top of page
        if (window.pageYOffset <= scrollThreshold) {
            if (headerBrandIs) {
                headerBrandIs.style.opacity = '1';
                headerBrandIs.style.pointerEvents = 'auto';
            }
            if (headerNav) {
                headerNav.style.opacity = '1';
                headerNav.style.pointerEvents = 'auto';
            }
            if (headerBrand) {
                headerBrand.style.opacity = '1';
                headerBrand.style.pointerEvents = 'auto';
            }
        }
    }

    console.log('Custom JS initialized');
});
