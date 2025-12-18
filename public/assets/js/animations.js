// GSAP Animations for SLE Template
// This file handles all scroll-triggered animations

// Wait for GSAP to be available
function initAnimations() {
    // Check if GSAP is loaded
    if (typeof gsap === "undefined") {
        console.warn("GSAP is not loaded. Retrying...");
        setTimeout(initAnimations, 100);
        return;
    }

    // Register GSAP plugins
    if (typeof ScrollTrigger !== "undefined") {
        gsap.registerPlugin(ScrollTrigger);
    }
    if (typeof ScrollToPlugin !== "undefined") {
        gsap.registerPlugin(ScrollToPlugin);
    }

    // Check if we're on the about page
    const isAboutPage =
        window.location.pathname === "/about" ||
        window.location.pathname.includes("/about");

    // Helper function to check if element is in first section on about page
    function shouldTriggerImmediately(element) {
        if (!isAboutPage) return false;
        const section = element.closest(".section");
        if (!section) return false;
        const firstSection = document.querySelector(
            ".main-body > .section:first-child"
        );
        return section === firstSection;
    }

    // Animation for elements with anim-1_1-items class
    const anim1Items = document.querySelectorAll(
        ".anim-1_1-item, .anim-1_1-items > *"
    );
    anim1Items.forEach((item, index) => {
        const animationConfig = {
            opacity: 0,
            y: 50,
            duration: 1,
            ease: "power3.out",
            delay: index * 0.1,
        };

        // On about page, only trigger immediately for first 2 items (10 Years and 28 Apps)
        if (
            isAboutPage &&
            item.closest(".section")?.classList.contains("brand-in-numbers")
        ) {
            // Check if it's the large item (10 Years) or first small item (28 Apps)
            const isLargeItem = item.classList.contains("bin-item-large");
            const binList = item.closest(".bin-list");
            const isFirstSmallItem =
                binList &&
                item.classList.contains("bin-item") &&
                !item.classList.contains("bin-item-large") &&
                Array.from(binList.querySelectorAll(".bin-item")).indexOf(
                    item
                ) === 0;

            if (isLargeItem || isFirstSmallItem) {
                // Keep first two items visible immediately - no animation, just set to visible
                gsap.set(item, { opacity: 1, y: 0 });
            } else {
                // Use scroll trigger for rest (40 Consultants, 160 Employers)
                // Start animation as soon as element enters viewport from bottom
                // Near-instant animation (milliseconds)
                animationConfig.duration = 0.15;
                animationConfig.delay = 0;
                animationConfig.ease = "power1.out";
                animationConfig.scrollTrigger = {
                    trigger: item,
                    start: "top bottom",
                    toggleActions: "play none none reverse",
                    once: true, // Only animate once
                };
                gsap.from(item, animationConfig);
            }
        } else {
            // Use scroll trigger for other pages
            animationConfig.scrollTrigger = {
                trigger: item,
                start: "top 80%",
                toggleActions: "play none none reverse",
            };
            gsap.from(item, animationConfig);
        }
    });

    // Animation for elements with anim-1_2-items class
    const anim2Items = document.querySelectorAll(
        ".anim-1_2-item, .anim-1_2-items > *"
    );
    anim2Items.forEach((item, index) => {
        gsap.from(item, {
            opacity: 0,
            x: index % 2 === 0 ? -50 : 50,
            duration: 1,
            ease: "power3.out",
            scrollTrigger: {
                trigger: item,
                start: "top 80%",
                toggleActions: "play none none reverse",
            },
            delay: index * 0.15,
        });
    });

    // Animation for elements with anim-1_3-items class
    const anim3Items = document.querySelectorAll(
        ".anim-1_3-item, .anim-1_3-items > *"
    );
    anim3Items.forEach((item, index) => {
        const animationConfig = {
            opacity: 0,
            scale: 0.8,
            duration: 1,
            ease: "back.out(1.7)",
            delay: index * 0.1,
        };

        if (
            isAboutPage &&
            item.closest(".section")?.classList.contains("brand-in-numbers")
        ) {
            gsap.from(item, animationConfig);
        } else {
            animationConfig.scrollTrigger = {
                trigger: item,
                start: "top 80%",
                toggleActions: "play none none reverse",
            };
            gsap.from(item, animationConfig);
        }
    });

    // Animation for elements with anim-1_4-items class (team section)
    const anim4Items = document.querySelectorAll(
        ".anim-1_4-item, .anim-1_4-items > *"
    );
    anim4Items.forEach((item, index) => {
        const animationConfig = {
            opacity: 0,
            y: 50,
            duration: 1,
            ease: "power3.out",
            delay: index * 0.1,
        };

        // On about page, trigger immediately for team section
        if (
            isAboutPage &&
            item.closest(".section")?.classList.contains("team")
        ) {
            gsap.from(item, animationConfig);
        } else {
            animationConfig.scrollTrigger = {
                trigger: item,
                start: "top 80%",
                toggleActions: "play none none reverse",
            };
            gsap.from(item, animationConfig);
        }
    });

    // Split text animations for headings
    if (typeof SplitText !== "undefined") {
        const headings = document.querySelectorAll(
            ".section-headline h1, .section-headline h2, .intro-heading h2"
        );
        headings.forEach((heading) => {
            const split = new SplitText(heading, { type: "words,chars" });
            const animationConfig = {
                opacity: 0,
                y: 50,
                rotationX: -90,
                transformOrigin: "50% 50% -50",
                stagger: 0.02,
            };

            // On about page, trigger immediately for first section headings
            if (
                isAboutPage &&
                heading
                    .closest(".section")
                    ?.classList.contains("brand-in-numbers")
            ) {
                gsap.from(split.chars, animationConfig);
            } else {
                animationConfig.scrollTrigger = {
                    trigger: heading,
                    start: "top 80%",
                    toggleActions: "play none none reverse",
                };
                gsap.from(split.chars, animationConfig);
            }
        });
    }

    // Number counter animations
    const counterContainers = document.querySelectorAll(".bin-item-numb");
    counterContainers.forEach((container) => {
        const pelElements = container.querySelectorAll(".pel");
        if (pelElements.length > 0) {
            pelElements.forEach((pel, index) => {
                const text = pel.textContent.trim();
                const number = parseInt(text);
                if (!isNaN(number) && number > 0) {
                    // On about page, trigger immediately for first section counters
                    if (
                        isAboutPage &&
                        container
                            .closest(".section")
                            ?.classList.contains("brand-in-numbers")
                    ) {
                        gsap.to(pel, {
                            textContent: number,
                            duration: 2,
                            ease: "power2.out",
                            snap: { textContent: 1 },
                            delay: index * 0.1,
                            onUpdate: function () {
                                pel.textContent = Math.ceil(
                                    this.targets()[0].textContent
                                );
                            },
                        });
                    } else {
                        ScrollTrigger.create({
                            trigger:
                                container.closest(
                                    ".bin-item-line, .bin-item-bordered"
                                ) || container,
                            start: "top 80%",
                            onEnter: () => {
                                gsap.to(pel, {
                                    textContent: number,
                                    duration: 2,
                                    ease: "power2.out",
                                    snap: { textContent: 1 },
                                    delay: index * 0.1,
                                    onUpdate: function () {
                                        pel.textContent = Math.ceil(
                                            this.targets()[0].textContent
                                        );
                                    },
                                });
                            },
                        });
                    }
                }
            });
        }
    });

    // Handle data-numb attribute counters (used in about page)
    const dataNumbContainers = document.querySelectorAll("[data-numb]");
    dataNumbContainers.forEach((container) => {
        const number = parseInt(container.getAttribute("data-numb"));
        const span = container.querySelector("span");
        if (!isNaN(number) && number > 0 && span) {
            // On about page, only trigger immediately for first 2 items (10 and 28)
            if (
                isAboutPage &&
                container
                    .closest(".section")
                    ?.classList.contains("brand-in-numbers")
            ) {
                const parentItem = container.closest(".bin-item");
                const isLargeItem =
                    parentItem?.classList.contains("bin-item-large");
                const isFirstSmallItem =
                    parentItem?.classList.contains("bin-item") &&
                    !parentItem.classList.contains("bin-item-large") &&
                    parentItem
                        .closest(".bin-list")
                        ?.querySelectorAll(".bin-item").length > 0 &&
                    Array.from(
                        parentItem
                            .closest(".bin-list")
                            ?.querySelectorAll(".bin-item") || []
                    ).indexOf(parentItem) === 0;

                if (isLargeItem || isFirstSmallItem) {
                    // Keep first two items visible immediately - set number immediately, no animation
                    span.textContent = number;
                } else {
                    // Use scroll trigger for rest (40 Consultants, 160 Employers)
                    // Start animation as soon as element enters viewport from bottom
                    ScrollTrigger.create({
                        trigger: container,
                        start: "top bottom",
                        onEnter: () => {
                            // Near-instant number counter (milliseconds)
                            gsap.to(span, {
                                textContent: number,
                                duration: 0.3,
                                ease: "power1.out",
                                snap: { textContent: 1 },
                                onUpdate: function () {
                                    span.textContent = Math.ceil(
                                        this.targets()[0].textContent
                                    );
                                },
                            });
                        },
                    });
                }
            } else {
                ScrollTrigger.create({
                    trigger: container,
                    start: "top 80%",
                    onEnter: () => {
                        gsap.to(span, {
                            textContent: number,
                            duration: 2,
                            ease: "power2.out",
                            snap: { textContent: 1 },
                            onUpdate: function () {
                                span.textContent = Math.ceil(
                                    this.targets()[0].textContent
                                );
                            },
                        });
                    },
                });
            }
        }
    });

    // Button animations
    const buttons = document.querySelectorAll(
        ".btn-anim, .btn-scroll-to-next-section"
    );
    buttons.forEach((btn) => {
        btn.addEventListener("click", function (e) {
            if (this.classList.contains("btn-scroll-to-next-section")) {
                e.preventDefault();
                const nextSection =
                    this.closest("section")?.nextElementSibling ||
                    this.closest(".section")?.nextElementSibling;
                if (nextSection && typeof ScrollToPlugin !== "undefined") {
                    gsap.to(window, {
                        duration: 1,
                        scrollTo: {
                            y: nextSection,
                            offsetY: 0,
                        },
                        ease: "power2.inOut",
                    });
                } else if (nextSection) {
                    nextSection.scrollIntoView({ behavior: "smooth" });
                }
            }
        });
    });

    // Marquee animations
    const marquees = document.querySelectorAll(".marquee-item");
    marquees.forEach((marquee) => {
        const direction = marquee.dataset.dir || "left";
        const speed = direction === "left" ? -50 : 50;

        gsap.to(marquee, {
            x: speed + "%",
            duration: 20,
            ease: "none",
            repeat: -1,
        });
    });

    // Parallax effect for sections
    const parallaxSections = document.querySelectorAll(".section");
    parallaxSections.forEach((section) => {
        gsap.to(section, {
            yPercent: -50,
            ease: "none",
            scrollTrigger: {
                trigger: section,
                start: "top bottom",
                end: "bottom top",
                scrub: true,
            },
        });
    });

    // Parallax effect for decorative arrows on services page
    const decorativeArrows = document.querySelectorAll(
        ".section.items-of-numbers .ifn-decor"
    );
    decorativeArrows.forEach((arrows) => {
        gsap.to(arrows, {
            y: -100,
            ease: "none",
            scrollTrigger: {
                trigger: arrows.closest(".section"),
                start: "top bottom",
                end: "bottom top",
                scrub: true,
            },
        });
    });

    console.log("Animations initialized");
}

// Set first two items visible immediately on about page (before animations initialize)
if (
    window.location.pathname === "/about" ||
    window.location.pathname.includes("/about")
) {
    function setFirstItemsVisible() {
        const brandSection = document.querySelector(
            ".section.brand-in-numbers"
        );
        if (brandSection) {
            const largeItem = brandSection.querySelector(".bin-item-large");
            const firstSmallItem = brandSection.querySelector(
                ".bin-list .bin-item:first-child"
            );

            if (largeItem) {
                gsap.set(largeItem, {
                    opacity: 1,
                    y: 0,
                    immediateRender: true,
                });
                const largeNumb = largeItem.querySelector("[data-numb] span");
                if (largeNumb) {
                    largeNumb.textContent =
                        largeItem
                            .querySelector("[data-numb]")
                            ?.getAttribute("data-numb") || "10";
                }
            }

            if (firstSmallItem) {
                gsap.set(firstSmallItem, {
                    opacity: 1,
                    y: 0,
                    immediateRender: true,
                });
                const firstNumb =
                    firstSmallItem.querySelector("[data-numb] span");
                if (firstNumb) {
                    firstNumb.textContent =
                        firstSmallItem
                            .querySelector("[data-numb]")
                            ?.getAttribute("data-numb") || "28";
                }
            }
        }
    }

    // Run immediately if GSAP is available, otherwise wait
    if (typeof gsap !== "undefined") {
        setFirstItemsVisible();
    } else {
        // Try to set visible as soon as GSAP loads
        const checkGSAP = setInterval(() => {
            if (typeof gsap !== "undefined") {
                setFirstItemsVisible();
                clearInterval(checkGSAP);
            }
        }, 10);
        // Stop checking after 2 seconds
        setTimeout(() => clearInterval(checkGSAP), 2000);
    }
}

// Initialize when DOM is ready
if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", initAnimations);
} else {
    // DOM is already ready
    setTimeout(initAnimations, 100);
}
