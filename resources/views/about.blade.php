<!DOCTYPE html><html lang="en">

    <head>

        <meta charset="utf-8">

    <title>About - SLE - simplicity and lack of exces</title>

    <meta name="description" content="Description">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=2">
        
    <link rel="icon" href="{{ asset('assets/img/favicon/favicon-32x32.png') }}" sizes="32x32"/>
    <link rel="icon" href="{{ asset('assets/img/favicon/favicon-192x192.png') }}" sizes="192x192"/>
    <link rel="apple-touch-icon" href="{{ asset('assets/img/favicon/favicon-180x180.png') }}"/>

    <link rel="stylesheet" href="{{ asset('assets/css/flickity.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/flickity-fade.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/lightgallery.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/lg-thumbnail.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/lg-video.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    {{-- Font preloads - Uncomment when font files are added --}}
    {{-- <link rel="preload" href="{{ asset('assets/fonts/source-sans-pro-v21-latin/source-sans-pro-v21-latin-regular.woff2') }}" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="{{ asset('assets/fonts/source-sans-pro-v21-latin/source-sans-pro-v21-latin-700.woff2') }}" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="{{ asset('assets/fonts/montserrat-v25-latin/montserrat-v25-latin-700.woff2') }}" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="{{ asset('assets/fonts/montserrat-v25-latin/montserrat-v25-latin-600.woff2') }}" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="{{ asset('assets/fonts/montserrat-v25-latin/montserrat-v25-latin-500.woff2') }}" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="{{ asset('assets/fonts/playfair-display-v30-latin/playfair-display-v30-latin-regular.woff2') }}" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="{{ asset('assets/fonts/playfair-display-v30-latin/playfair-display-v30-latin-italic.woff2') }}" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="{{ asset('assets/fonts/playfair-display-v30-latin/playfair-display-v30-latin-900.woff2') }}" as="font" type="font/woff2" crossorigin> --}}
    
    {{-- Alternative: Use Google Fonts CDN --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;700&family=Montserrat:wght@500;600;700&family=Playfair+Display:ital,wght@0,400;0,900;1,400&display=swap" rel="stylesheet">

    </head>

<body>
<script>
// Set first two items visible immediately on about page (before any other scripts)
(function() {
    if (window.location.pathname === '/about' || window.location.pathname.includes('/about')) {
        // Set visibility immediately when DOM is ready
        function setFirstItemsVisible() {
            const brandSection = document.querySelector('.section.brand-in-numbers');
            if (brandSection) {
                const largeItem = brandSection.querySelector('.bin-item-large');
                const firstSmallItem = brandSection.querySelector('.bin-list .bin-item:first-child');
                
                if (largeItem) {
                    largeItem.style.opacity = '1';
                    largeItem.style.transform = 'translateY(0)';
                    largeItem.style.visibility = 'visible';
                    const largeNumb = largeItem.querySelector('[data-numb] span');
                    if (largeNumb) {
                        const numb = largeItem.querySelector('[data-numb]')?.getAttribute('data-numb');
                        if (numb) largeNumb.textContent = numb;
                    }
                }
                
                if (firstSmallItem) {
                    firstSmallItem.style.opacity = '1';
                    firstSmallItem.style.transform = 'translateY(0)';
                    firstSmallItem.style.visibility = 'visible';
                    const firstNumb = firstSmallItem.querySelector('[data-numb] span');
                    if (firstNumb) {
                        const numb = firstSmallItem.querySelector('[data-numb]')?.getAttribute('data-numb');
                        if (numb) firstNumb.textContent = numb;
                    }
                }
            }
        }
        
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', setFirstItemsVisible);
        } else {
            setFirstItemsVisible();
        }
    }
})();
</script>

	<main class="main">

		<header class="header">
    <div class="container">
        <div class="row gy-0 justify-content-between justify-content-md-start">
            <div class="col col-md-1_3">
                <!-- Begin header brand -->
                <div class="header-brand">
                    <!-- Begin menu button -->
                    <div class="mnu-btn absolute-left crm h-amin">
                        <svg width="32" height="32" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
                        <rect x="9" y="9" height="2" width="18"></rect>
                        <rect x="5" y="15" height="2" width="22"></rect>
                        <rect x="5" y="21" height="2" width="14"></rect>
                        </svg>
                    </div><!-- End menu button -->
                    <!-- Begin logo -->
                    <a href="{{ route('home') }}" class="logo h-amin crs" title="SLE">
                        <img src="{{ asset('images/wordmark white@2x.png') }}" alt="SLE">
                    </a><!-- End logo -->
                </div><!-- End header brand -->
            </div>
            <div class="col-md-1_3 hf-col b-none b-md-block">
                <!-- Begin brand id -->
                <div class="header-brand-is hf-amin">
                    Simplicity — <br> and lackless
                </div><!-- End brand id -->
            </div>
            <div class="col-auto col-md-1_3 hf-col">
                <!-- Begin header nav -->
                <nav class="header-nav">
                    <div class="lang-outer hf-amin">
                        <div class="lang">
                            <div class="lang-current crs">
                                <span>En</span>
                                <svg width="11" height="7" viewBox="0 0 11 7" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.71667 -5.60963e-08L11 1.32432L5.5 7L-5.78881e-08 1.32432L1.28333 -4.24729e-07L5.5 4.35135L9.71667 -5.60963e-08Z" fill-rule="evenodd" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <ul class="lang-list">
                                <li><a href="#!" class="crs">Uk</a></li>
                                <li><a href="#!" class="crs">It</a></li>
                                <li><a href="#!" class="crs">Fr</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="secondary-mnu-outer hf-amin b-none b-md-block">
                        <ul class="secondary-mnu">
                            <li>
                                <a href="{{ route('about') }}" class="nav-link crs"><span>About</span></a>
                            </li>
                            <li>
                                <a href="{{ route('contact') }}" class="nav-link crs"><span>Contact</span></a>
                            </li>
                        </ul>
                    </div>
                </nav><!-- End header nav -->
            </div>
        </div>
    </div>
</header>
		
		<article class="main-body">

			<section class="section brand-in-numbers anim-1_1-items">
				<div class="container">
					<div class="row">
						<div class="col-md-2_3 offset-md-1_3">
							<div class="section-headline">
								<h1>About</h1>
								<hr>
								<p>Our company has been developing <span class="accent-color">high-quality</span> and <span class="accent-color">fast websites</span> for corporate needs since 2021. We are <span class="accent-color">renowned professionals</span> of website development.</p>
							</div>
						</div>
					</div>
				</div>
				<div class="brand-in-numbers-container">
					<div class="container">
						<div class="row gy-3 align-items-md-center">
							<div class="col-md-2_3">
								<div class="bin-item bin-item-large anim-1_1-item">
									<div class="el-collection"><span></span></div>
									<div class="el-collection-content">
										<div class="bin-item-numb" data-numb="10"><span>10</span></div>
										<div class="bin-item-heading">Years Of Experience</div>
									</div>
									<div class="bin-item-counter">01</div>
								</div>
							</div>
							<div class="col-md-1_3">
								<ul class="list-style-none bin-list gy-3">
									<li class="bin-item anim-1_1-item">
										<div class="el-collection"><span></span></div>
										<div class="el-collection-content">
											<div class="bin-item-numb" data-numb="28"><span>28</span></div>
											<div class="bin-item-heading">Apps <br> Developed</div>
										</div>
										<div class="bin-item-counter">02</div>
									</li>
									<li class="bin-item anim-1_1-item">
										<div class="el-collection"><span></span></div>
										<div class="el-collection-content">
											<div class="bin-item-numb" data-numb="40"><span>40</span></div>
											<div class="bin-item-heading">Consultans</div>
										</div>
										<div class="bin-item-counter">03</div>
									</li>
									<li class="bin-item anim-1_1-item">
										<div class="el-collection"><span></span></div>
										<div class="el-collection-content">
											<div class="bin-item-numb" data-numb="160"><span>160</span></div>
											<div class="bin-item-heading">Employers</div>
										</div>
										<div class="bin-item-counter">04</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="marquee marquee-absolute-center">
						<div class="marquee-item" data-dir='left'>
							<div class="marquee-row">SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — </div>
							<div class="marquee-row">SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — </div>
						</div>
					</div>
				</div>
			</section>

			<section class="section team anim-1_4-items">
    <div class="container">
        <div class="row">
            <div class="col-md-2_3 offset-md-1_3">
                <div class="section-headline">
                    <h2>Team</h2>
                    <hr>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-1_4 col-md-1_3 col-sm-1_2">
                <div class="team-member-item tmi-collection anim-1_4-item">
                    <div class="tmi-photo-collection">
                        <div class="el-collection"></div>
                        <div class="tmi-photo aspect-ratio _3x4 crh">
                            <img src="{{ asset('assets/img/t1.jpg') }}" class="lazy _cover ar-abs" alt="">
                            <ul class="social-links tmi-sl-bordered">
                                <li>
                                    <a href="#!" aria-label="Facebook" rel="noopener nofollow">
                                        <svg width="32" height="32" viewBox="0 0 320 512"><use xlink:href="{{ asset('assets/img/sprite.svg') }}#facebook-icon"></use></svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!" aria-label="Instagram" rel="noopener nofollow">
                                        <svg width="32" height="32" viewBox="0 0 448 512"><use xlink:href="{{ asset('assets/img/sprite.svg') }}#instagram-icon"></use></svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!" aria-label="Linkedin" rel="noopener nofollow">
                                        <svg width="32" height="32" viewBox="0 0 448 512"><use xlink:href="{{ asset('assets/img/sprite.svg') }}#linkedin-icon"></use></svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!" aria-label="Instagram" rel="noopener nofollow">
                                        <svg width="32" height="32" viewBox="0 0 512 512"><use xlink:href="{{ asset('assets/img/sprite.svg') }}#twitter-icon"></use></svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tmi-details">
                        <div class="tmi-heading item-heading text _row">Mary Lee</div>
                        <div class="tmi-position text _row">Software Developer</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1_4 col-md-1_3 col-sm-1_2">
                <div class="team-member-item tmi-collection anim-1_4-item">
                    <div class="tmi-photo-collection">
                        <div class="el-collection"></div>
                        <div class="tmi-photo aspect-ratio _3x4 crh">
                            <img src="{{ asset('assets/img/t2.jpg') }}" class="lazy _cover ar-abs" alt="">
                            <ul class="social-links tmi-sl-bordered">
                                <li>
                                    <a href="#!" aria-label="Facebook" rel="noopener nofollow">
                                        <svg width="32" height="32" viewBox="0 0 320 512"><use xlink:href="{{ asset('assets/img/sprite.svg') }}#facebook-icon"></use></svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!" aria-label="Instagram" rel="noopener nofollow">
                                        <svg width="32" height="32" viewBox="0 0 448 512"><use xlink:href="{{ asset('assets/img/sprite.svg') }}#instagram-icon"></use></svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!" aria-label="Linkedin" rel="noopener nofollow">
                                        <svg width="32" height="32" viewBox="0 0 448 512"><use xlink:href="{{ asset('assets/img/sprite.svg') }}#linkedin-icon"></use></svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!" aria-label="Instagram" rel="noopener nofollow">
                                        <svg width="32" height="32" viewBox="0 0 512 512"><use xlink:href="{{ asset('assets/img/sprite.svg') }}#twitter-icon"></use></svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tmi-details">
                        <div class="tmi-heading item-heading text _row">Ryan Wilson</div>
                        <div class="tmi-position text _row">CEO</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1_4 col-md-1_3 col-sm-1_2">
                <div class="team-member-item tmi-collection anim-1_4-item">
                    <div class="tmi-photo-collection">
                        <div class="el-collection"></div>
                        <div class="tmi-photo aspect-ratio _3x4 crh">
                            <img src="{{ asset('assets/img/t3.jpg') }}" class="lazy _cover ar-abs" alt="">
                            <ul class="social-links tmi-sl-bordered">
                                <li>
                                    <a href="#!" aria-label="Facebook" rel="noopener nofollow">
                                        <svg width="32" height="32" viewBox="0 0 320 512"><use xlink:href="{{ asset('assets/img/sprite.svg') }}#facebook-icon"></use></svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!" aria-label="Instagram" rel="noopener nofollow">
                                        <svg width="32" height="32" viewBox="0 0 448 512"><use xlink:href="{{ asset('assets/img/sprite.svg') }}#instagram-icon"></use></svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!" aria-label="Linkedin" rel="noopener nofollow">
                                        <svg width="32" height="32" viewBox="0 0 448 512"><use xlink:href="{{ asset('assets/img/sprite.svg') }}#linkedin-icon"></use></svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!" aria-label="Instagram" rel="noopener nofollow">
                                        <svg width="32" height="32" viewBox="0 0 512 512"><use xlink:href="{{ asset('assets/img/sprite.svg') }}#twitter-icon"></use></svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tmi-details">
                        <div class="tmi-heading item-heading text _row">Sam Robinson</div>
                        <div class="tmi-position text _row">Senior Developer</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1_4 col-md-1_3 col-sm-1_2">
                <div class="team-member-item tmi-collection anim-1_4-item">
                    <div class="tmi-photo-collection">
                        <div class="el-collection"></div>
                        <div class="tmi-photo aspect-ratio _3x4 crh">
                            <img src="{{ asset('assets/img/t4.jpg') }}" class="lazy _cover ar-abs" alt="">
                            <ul class="social-links tmi-sl-bordered">
                                <li>
                                    <a href="#!" aria-label="Facebook" rel="noopener nofollow">
                                        <svg width="32" height="32" viewBox="0 0 320 512"><use xlink:href="{{ asset('assets/img/sprite.svg') }}#facebook-icon"></use></svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!" aria-label="Instagram" rel="noopener nofollow">
                                        <svg width="32" height="32" viewBox="0 0 448 512"><use xlink:href="{{ asset('assets/img/sprite.svg') }}#instagram-icon"></use></svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!" aria-label="Linkedin" rel="noopener nofollow">
                                        <svg width="32" height="32" viewBox="0 0 448 512"><use xlink:href="{{ asset('assets/img/sprite.svg') }}#linkedin-icon"></use></svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="#!" aria-label="Instagram" rel="noopener nofollow">
                                        <svg width="32" height="32" viewBox="0 0 512 512"><use xlink:href="{{ asset('assets/img/sprite.svg') }}#twitter-icon"></use></svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tmi-details">
                        <div class="tmi-heading item-heading text _row">Jill Peterson</div>
                        <div class="tmi-position text _row">Project Manage</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
			<section class="section brands anim-1_1-items">
    <div class="container">
        <div class="row">
            <div class="col-md-2_3 offset-md-1_3">
                <div class="section-headline">
                    <h2>Brands</h2>
                    <hr>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2_3 offset-md-1_3"> 
                <div class="brands-carousel-outer brands-carousel-left-nav anim-1_1-item">
                    <div class="brands-carousel">
                        <div class="brands-carousel-item">
                            <div class="brand-item aspect-ratio">
                                <img class="ar-abs" data-flickity-lazyload="{{ asset('assets/img/brands/brand-white1.svg') }}" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                            </div>
                            <div class="brand-item aspect-ratio">
                                <img class="ar-abs" data-flickity-lazyload="{{ asset('assets/img/brands/brand-white2.svg') }}" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                            </div>
                        </div>
                        <div class="brands-carousel-item">
                            <div class="brand-item aspect-ratio">
                                <img class="ar-abs" data-flickity-lazyload="{{ asset('assets/img/brands/brand-white5.svg') }}" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                            </div>
                            <div class="brand-item aspect-ratio">
                                <img class="ar-abs" data-flickity-lazyload="{{ asset('assets/img/brands/brand-white6.svg') }}" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                            </div>
                        </div>
                        <div class="brands-carousel-item">
                            <div class="brand-item aspect-ratio">
                                <img class="ar-abs" data-flickity-lazyload="{{ asset('assets/img/brands/brand-white7.svg') }}" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                            </div>
                            <div class="brand-item aspect-ratio">
                                <img class="ar-abs" data-flickity-lazyload="{{ asset('assets/img/brands/brand-white8.svg') }}" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                            </div>
                        </div>
                        <div class="brands-carousel-item">
                            <div class="brand-item aspect-ratio">
                                <img class="ar-abs" data-flickity-lazyload="{{ asset('assets/img/brands/brand-white3.svg') }}" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                            </div>
                            <div class="brand-item aspect-ratio">
                                <img class="ar-abs" data-flickity-lazyload="{{ asset('assets/img/brands/brand-white4.svg') }}" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                            </div>
                        </div>
                        <div class="brands-carousel-item">
                            <div class="brand-item aspect-ratio">
                                <img class="ar-abs" data-flickity-lazyload="{{ asset('assets/img/brands/brand-white1.svg') }}" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                            </div>
                            <div class="brand-item aspect-ratio">
                                <img class="ar-abs" data-flickity-lazyload="{{ asset('assets/img/brands/brand-white2.svg') }}" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                            </div>
                        </div>
                        <div class="brands-carousel-item">
                            <div class="brand-item aspect-ratio">
                                <img class="ar-abs" data-flickity-lazyload="{{ asset('assets/img/brands/brand-white5.svg') }}" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                            </div>
                            <div class="brand-item aspect-ratio">
                                <img class="ar-abs" data-flickity-lazyload="{{ asset('assets/img/brands/brand-white6.svg') }}" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                            </div>
                        </div>
                        <div class="brands-carousel-item">
                            <div class="brand-item aspect-ratio">
                                <img class="ar-abs" data-flickity-lazyload="{{ asset('assets/img/brands/brand-white7.svg') }}" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                            </div>
                            <div class="brand-item aspect-ratio">
                                <img class="ar-abs" data-flickity-lazyload="{{ asset('assets/img/brands/brand-white8.svg') }}" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                            </div>
                        </div>
                        <div class="brands-carousel-item">
                            <div class="brand-item aspect-ratio">
                                <img class="ar-abs" data-flickity-lazyload="{{ asset('assets/img/brands/brand-white3.svg') }}" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                            </div>
                            <div class="brand-item aspect-ratio">
                                <img class="ar-abs" data-flickity-lazyload="{{ asset('assets/img/brands/brand-white4.svg') }}" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                            </div>
                        </div>
                        <div class="brands-carousel-item">
                            <div class="brand-item aspect-ratio">
                                <img class="ar-abs" data-flickity-lazyload="{{ asset('assets/img/brands/brand-white1.svg') }}" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                            </div>
                            <div class="brand-item aspect-ratio">
                                <img class="ar-abs" data-flickity-lazyload="{{ asset('assets/img/brands/brand-white2.svg') }}" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                            </div>
                        </div>
                        <div class="brands-carousel-item">
                            <div class="brand-item aspect-ratio">
                                <img class="ar-abs" data-flickity-lazyload="{{ asset('assets/img/brands/brand-white5.svg') }}" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                            </div>
                            <div class="brand-item aspect-ratio">
                                <img class="ar-abs" data-flickity-lazyload="{{ asset('assets/img/brands/brand-white6.svg') }}" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                            </div>
                        </div>
                        <div class="brands-carousel-item">
                            <div class="brand-item aspect-ratio">
                                <img class="ar-abs" data-flickity-lazyload="{{ asset('assets/img/brands/brand-white7.svg') }}" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                            </div>
                            <div class="brand-item aspect-ratio">
                                <img class="ar-abs" data-flickity-lazyload="{{ asset('assets/img/brands/brand-white8.svg') }}" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                            </div>
                        </div>
                        <div class="brands-carousel-item">
                            <div class="brand-item aspect-ratio">
                                <img class="ar-abs" data-flickity-lazyload="{{ asset('assets/img/brands/brand-white3.svg') }}" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                            </div>
                            <div class="brand-item aspect-ratio">
                                <img class="ar-abs" data-flickity-lazyload="{{ asset('assets/img/brands/brand-white4.svg') }}" src="data:image/gif;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="slider-dots justify-content-center justify-content-md-start"></div>
                    <div class="slider-nav justify-content-center">
                        <div class="slider-btn slider-btn-prev crm">
                            <svg viewBox="0 0 18 14" width="18" height="14"><use xlink:href="{{ asset('assets/img/sprite.svg') }}#arrow-prev"></use></svg>
                        </div>
                        <div class="slider-btn slider-btn-next crm">
                            <svg viewBox="0 0 18 14" width="18" height="14"><use xlink:href="{{ asset('assets/img/sprite.svg') }}#arrow-next"></use></svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

			<section class="section brands-grid anim-1_1-items">
    <div class="container">
        <div class="row">
            <div class="col-md-2_3 offset-md-1_3">
                <div class="brands-grid-wrapper">
                    <div class="brands-grid-item anim-1_1-item">
                        <div class="brand-item aspect-ratio _1x1">
                            <img class="ar-abs" src="{{ asset('assets/img/brands/brand-white1.svg') }}" alt="DATABRAND">
                        </div>
                        <div class="brands-grid-item-content">
                            <div class="brands-grid-item-name">DATABRAND</div>
                            <div class="brands-grid-item-tagline">TAGLINE GOES HERE</div>
                        </div>
                    </div>
                    <div class="brands-grid-item anim-1_1-item">
                        <div class="brand-item aspect-ratio _1x1">
                            <img class="ar-abs" src="{{ asset('assets/img/brands/brand-white2.svg') }}" alt="GARDEN">
                        </div>
                        <div class="brands-grid-item-content">
                            <div class="brands-grid-item-name">GARDEN</div>
                        </div>
                    </div>
                    <div class="brands-grid-item anim-1_1-item">
                        <div class="brand-item aspect-ratio _1x1">
                            <img class="ar-abs" src="{{ asset('assets/img/brands/brand-white3.svg') }}" alt="ACACIA">
                        </div>
                        <div class="brands-grid-item-content">
                            <div class="brands-grid-item-name">ACACIA</div>
                        </div>
                    </div>
                    <div class="brands-grid-item anim-1_1-item">
                        <div class="brand-item aspect-ratio _1x1">
                            <img class="ar-abs" src="{{ asset('assets/img/brands/brand-white4.svg') }}" alt="nature">
                        </div>
                        <div class="brands-grid-item-content">
                            <div class="brands-grid-item-name">nature</div>
                            <div class="brands-grid-item-tagline">creative symbol</div>
                        </div>
                    </div>
                    <div class="brands-grid-item anim-1_1-item">
                        <div class="brand-item aspect-ratio _1x1">
                            <img class="ar-abs" src="{{ asset('assets/img/brands/brand-white5.svg') }}" alt="BUSINESS NAME">
                        </div>
                        <div class="brands-grid-item-content">
                            <div class="brands-grid-item-name">BUSINESS NAME</div>
                            <div class="brands-grid-item-tagline">SLOGAN</div>
                        </div>
                    </div>
                    <div class="brands-grid-item anim-1_1-item">
                        <div class="brand-item aspect-ratio _1x1">
                            <img class="ar-abs" src="{{ asset('assets/img/brands/brand-white6.svg') }}" alt="PARIATUR">
                        </div>
                        <div class="brands-grid-item-content">
                            <div class="brands-grid-item-name">PARIATUR</div>
                        </div>
                    </div>
                    <div class="brands-grid-item anim-1_1-item">
                        <div class="brand-item aspect-ratio _1x1">
                            <img class="ar-abs" src="{{ asset('assets/img/brands/brand-white7.svg') }}" alt="COMPANY">
                        </div>
                        <div class="brands-grid-item-content">
                            <div class="brands-grid-item-name">COMPANY</div>
                            <div class="brands-grid-item-tagline">TAGLINE HERE</div>
                        </div>
                    </div>
                    <div class="brands-grid-item anim-1_1-item">
                        <div class="brand-item aspect-ratio _1x1">
                            <img class="ar-abs" src="{{ asset('assets/img/brands/brand-white8.svg') }}" alt="COFFEE CORNER">
                        </div>
                        <div class="brands-grid-item-content">
                            <div class="brands-grid-item-name brands-grid-item-name-stacked">
                                <span>COFFEE</span>
                                <span>CORNER</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

			<section class="section contacts">
    <div class="container">
        <div class="row align-items-md-end">
            <div class="col-md-1_3 b-none b-md-block">
                <div class="text-circle contacts-text-circle">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 500 500">
                        <path d="M 250, 250m -250, 0a 250,250 0 0,1 500,0a 250,250 0 0,1 -500,0" fill="none" id="contacts-textcircle"></path>
                        <text dy="40" textLength="300%"><textPath xlink:href="#contacts-textcircle" textLength="300%">Don't worry, it's will be WOW.</textPath></text>
                    </svg>
                </div>
            </div>
            <div class="col-md-2_3">
                <div class="section-headline">
                    <h1>Get in <br> touch</h1>
                    <hr>
                    <p>Text to us and tell us all your wishes <br> as your closest friend.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2_3 offset-md-1_3">
                <div class="row section-trigger">
                    <div class="col-1">
                        <div class="btn-arrows btn-arrows-contacts">
                            <div class="btn-default btn-center">
                                <div class="btn-arrow btn-arrow-animate btn-arrow-prev">
                                    <svg viewBox="0 0 103 85" height="0"><use xlink:href="{{ asset('assets/img/sprite.svg') }}#arrow-right"></use></svg>
                                </div>
                                <div class="btn btn-popup-open crm mc" data-popup-id="#popup-contacts"><span>Get in touch</span></div>
                                <div class="btn-arrow btn-arrow-animate btn-arrow-next">
                                    <svg viewBox="0 0 103 85" ><use xlink:href="{{ asset('assets/img/sprite.svg') }}#arrow-right"></use></svg>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
                <div class="giy gy-3"></div>
                <div class="row">
                    <div class="col-sm-1 col-lg-1_3">
                        <div class="contacts-item">
                            <div class="ci-heading">Address:</div>
                            <ul class="list-style-none ci-list">
                                <li>
                                    <a href="https://goo.gl/maps/Zh61f9uBZH6RXeZj6" class="crs" rel="noopener">
                                        4730 Crystal Springs Dr, <br> Los Angeles, CA
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-1_2 col-lg-1_3">
                        <div class="contacts-item">
                            <div class="ci-heading">Phones:</div>
                            <ul class="list-style-none ci-list">
                                <li><a href="tel:+13239134688" class="formingHrefTel crs">+1 323-913-4688</a></li>
                                <li><a href="tel:+13238884554" class="formingHrefTel crs">+1 323-888-4554</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-1_2 col-lg-1_3">
                        <div class="contacts-item">
                            <div class="ci-heading">Emails:</div>
                            <ul class="list-style-none ci-list">
                                <li><a href="mailto:mail@example.com" class="crs">mail@example.com</a></li>
                                <li><a href="mailto:info@example.com" class="crs">info@example.com</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

		</article>

		<!-- Begin footer -->
<footer class="footer footer-fixed">
    <div class="footer-container">
        <nav class="social-links-nav">
            <ul class="social-links">
                <li>
                    <a href="#!" class="crm" aria-label="Twitter" rel="noopener nofollow">
                        <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"></path></svg>
                    </a>
                </li>
                <li>
                    <a href="#!" class="crm" aria-label="Facebook" rel="noopener nofollow">
                        <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path></svg>
                    </a>
                </li>
                <li>
                    <a href="#!" class="crm" aria-label="Linkedin" rel="noopener nofollow">
                        <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path></svg>
                    </a>
                </li>
            </ul>
        </nav>
        <div class="copyright">© 2023 - SLE</div>
    </div>
</footer><!-- End footer -->

<div class="lines">
    <div class="container">
        <div class="row gy-0">
            <div class="col"></div>
            <div class="col"></div>
            <div class="col"></div>
        </div>
    </div>
</div>

<div class="preloader active"><div></div></div>

<div class="cursor hide"></div>

<div class="grained-bg"><canvas id="grained-bg"></canvas></div>

<div class="cookie-message-outer">
    <div class="container">
        <div class="cookie-message">
            <div class="cm-content content">
                <h5 class="cmc-title">Cookies</h5>
                <p>We use cookies to understand how you use our website, to personalize content and to improve your experience. By continuing to use our site, you accept our use of cookies and revised. <a href="{{ route('privacy') }}">Privacy Policy</a></p>
            </div>
            <div class="cookie-btn btn-default btn-min">
                <a href="#!" class="btn crm mc"><span>+</span></a>
            </div>
        </div>
    </div>
</div>

<div class="go-to-top crs">
    <svg width="14" height="28" viewBox="0 0 14 28" xmlns="http://www.w3.org/2000/svg">
        <path d="M6.98737 0.71562L10.1316 3.93524L10.4893 3.5859L10.1316 3.93524C11.0944 4.92114 11.9706 5.82031 12.6065 6.47473C12.9012 6.77797 13.1441 7.02841 13.32 7.21048C13.2399 7.29488 13.1481 7.3902 13.0501 7.49043L12.8067 7.73935L10.7094 5.59204L8.25464 3.07872L7.39694 2.20057L7.39694 3.42808L7.39694 10.7141L7.39694 27.5L7.00424 27.5L6.61155 27.5L6.61155 10.7141L6.61155 3.42808L6.61155 2.20057L5.75385 3.07872L3.29907 5.59204L1.20178 7.73935L0.958488 7.49054L0.601169 7.83993L0.958481 7.49053C0.856018 7.38575 0.75991 7.28589 0.676586 7.19798C0.850696 7.01583 1.09206 6.7652 1.38571 6.46154C2.01821 5.80748 2.89104 4.90981 3.85141 3.9265L3.49371 3.57714L3.85141 3.9265L6.98737 0.71562ZM0.409728 6.90624L0.409871 6.9064L0.409728 6.90624Z"/>
                                    </svg>
</div>

        <nav class="spf main-menu main-menu-transition">
    <div class="mm-container">
        <div></div>
        <div class="mm-body">
            <div class="container">
                <div class="row gy-0">
                    <div class="col-md-2_3">
                        <div class="mm-outer">
                            <ul class="mm-list">
                                <li>
                                    <a data-title="Home" href="{{ route('home') }}" class="crs">
                                        <span>Home</span>
                                        <div class="mmi-btn crs">
                                            <svg width="0" height="0" viewBox="0 0 29 32" xmlns="http://www.w3.org/2000/svg"><path d="M6.14959 13.9297L0.999999 18.6432L14.5 31L28 18.6433L22.8504 13.9298L18.1418 18.2397L18.1418 1L10.8583 0.999999L10.8583 18.2397L6.14959 13.9297Z"/></svg>
                                        </div>
                                    </a>
                                    <ul>
                                        <li><a href="{{ route('home.index') }}" class="crs">Home 1</a></li>
                                        <li><a href="{{ route('home.index2') }}" class="crs">Home 2</a></li>
                                        <li><a href="{{ route('home.index3') }}" class="crs">Home 3</a></li>
                                        <li><a href="{{ route('home.index4') }}" class="crs">Home 4</a></li>
                                        <li><a href="{{ route('home.index5') }}" class="crs">Home 5</a></li>
                                        <li><a href="{{ route('home.index6') }}" class="crs">Home 6</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a data-title="About" href="{{ route('about') }}" class="crs"><span>About</span></a>
                                </li>
                                <li>
                                    <a data-title="Services" href="{{ route('services') }}" class="crs">
                                        <span>Services</span>
                                        <div class="mmi-btn crs">
                                            <svg width="0" height="0" viewBox="0 0 29 32" xmlns="http://www.w3.org/2000/svg"><path d="M6.14959 13.9297L0.999999 18.6432L14.5 31L28 18.6433L22.8504 13.9298L18.1418 18.2397L18.1418 1L10.8583 0.999999L10.8583 18.2397L6.14959 13.9297Z"/></svg>
                                        </div>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="{{ route('services') }}" class="crs">Services of nubmers: Type 1</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('services2') }}" class="crs">Services of nubmers: Type 2</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('services3') }}" class="crs">Services of nubmers: Type 3</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('services4') }}" class="crs">Services of nubmers: Type 4</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('services.icons') }}" class="crs">Services icons: Type 1</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('services.icons2') }}" class="crs">Services icons: Type 2</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('services.icons3') }}" class="crs">Services icons: Type 3</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('services.single') }}" class="crs">Single service</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a data-title="Sections" href="#!" class="crs">
                                        <span>Sections</span>
                                        <div class="mmi-btn crs">
                                            <svg width="0" height="0" viewBox="0 0 29 32" xmlns="http://www.w3.org/2000/svg"><path d="M6.14959 13.9297L0.999999 18.6432L14.5 31L28 18.6433L22.8504 13.9298L18.1418 18.2397L18.1418 1L10.8583 0.999999L10.8583 18.2397L6.14959 13.9297Z"/></svg>
                                        </div>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="{{ route('sections.intro') }}" class="crs">Intro</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('sections.intro-slider') }}" class="crs">Intro Slider</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('sections.image-items') }}" class="crs">Image items</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('sections.items-of-numbers') }}" class="crs">Items of numbers</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('sections.icon-items') }}" class="crs">Icon items</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('sections.brand-in-numbers') }}" class="crs">Brand in numbers</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('sections.team') }}" class="crs">Team</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('sections.gallery-classic') }}" class="crs">Gallery Classic</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('sections.gallery-masonry') }}" class="crs">Gallery Masonry</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('sections.pricing') }}" class="crs">Pricing</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('sections.testimonials') }}" class="crs">Testimonials</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('sections.brands') }}" class="crs">Brands</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('sections.tabs-accordions') }}" class="crs">Tabs & Accordions</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('sections.marquee') }}" class="crs">Marquee: scrolling area of text</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('sections.content') }}" class="crs">Content</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('sections.404') }}" class="crs">404</a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a data-title="Features" href="{{ route('features.ui') }}" class="crs">
                                        <span>Features</span>
                                        <div class="mmi-btn crs">
                                            <svg width="0" height="0" viewBox="0 0 29 32" xmlns="http://www.w3.org/2000/svg"><path d="M6.14959 13.9297L0.999999 18.6432L14.5 31L28 18.6433L22.8504 13.9298L18.1418 18.2397L18.1418 1L10.8583 0.999999L10.8583 18.2397L6.14959 13.9297Z"/></svg>
                                        </div>
                                    </a>
                                    <ul>
                                        <li><a href="{{ route('features.ui') }}" class="crs">UI elements</a></li>
                                        <li><a href="{{ route('features.docs') }}" class="crs">Documentation</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a data-title="News" href="{{ route('news') }}" class="crs">
                                        <span>News</span>
                                        <div class="mmi-btn crs">
                                            <svg width="0" height="0" viewBox="0 0 29 32" xmlns="http://www.w3.org/2000/svg"><path d="M6.14959 13.9297L0.999999 18.6432L14.5 31L28 18.6433L22.8504 13.9298L18.1418 18.2397L18.1418 1L10.8583 0.999999L10.8583 18.2397L6.14959 13.9297Z"/></svg>
                                        </div>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="{{ route('news') }}" class="crs">News list: Type 1</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('news2') }}" class="crs">News list: Type 2</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('news3') }}" class="crs">News list: Type 3</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('news.grid') }}" class="crs">News grid: Type 1</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('news.post') }}" class="crs">News post</a>
                                        </li>
                                    </ul>
                        </li>
                                <li>
                                    <a data-title="Contact" href="{{ route('contact') }}" class="crs">
                                        <span>Contact</span>
                                        <div class="mmi-btn crs">
                                            <svg width="0" height="0" viewBox="0 0 29 32" xmlns="http://www.w3.org/2000/svg"><path d="M6.14959 13.9297L0.999999 18.6432L14.5 31L28 18.6433L22.8504 13.9298L18.1418 18.2397L18.1418 1L10.8583 0.999999L10.8583 18.2397L6.14959 13.9297Z"/></svg>
                                        </div>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="{{ route('contact') }}" class="crs">Contact</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('contact.offices') }}" class="crs">Contact – Offices</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('contact2') }}" class="crs">Contact 2</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('contact2.offices') }}" class="crs">Contact 2 – Offices</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('contact3') }}" class="crs">Contact 3</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('contact3.offices') }}" class="crs">Contact 3 – Offices</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('contact4') }}" class="crs">Contact 4</a>
                                        </li>
                                        <li>
                                            <a href="{{ route('contact4.offices') }}" class="crs">Contact 4 – Offices</a>
                                        </li>
                                    </ul>
                        </li>
                    </ul>
                        </div>
                    </div>
                    <div class="col-md-1_3">
                        <div class="mm-contacts">
                            <div class="mmc-item">
                                <div class="mmc-label">Address:</div>
                                <ul class="mmc-list">
                                    <li><a href="https://goo.gl/maps/zDnHrjo5hUooH84t7" class="crs" rel="noopener nofollow">4730 Crystal Springs Dr, Los Angeles, CA</a></li>
                                </ul>
                            </div>
                            <div class="mmc-item">
                                <div class="mmc-label">Phones:</div>
                                <ul class="mmc-list">
                                    <li><a href="#!" class="formingHrefTel crs">+1 323-913-4688</a></li>
                                    <li><a href="#!" class="formingHrefTel crs">+1 323-888-4554</a></li>
                                </ul>
                            </div>
                            <div class="mmc-item">
                                <div class="mmc-label">Emails:</div>
                                <ul class="mmc-list">
                                    <li><a href="mailto:mail@example.com" class="crs">mail@example.com</a></li>
                                    <li><a href="mailto:info@example.com" class="crs">info@example.com</a></li>
                                </ul>
                            </div>
                            <div class="mmc-item">
                                <ul class="social-links mm-social">
                                    <li>
                                        <a href="#!" class="crm" aria-label="Twitter" rel="noopener nofollow">
                                            <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"></path></svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!" class="crm" aria-label="Facebook" rel="noopener nofollow">
                                            <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path></svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#!" class="crm" aria-label="Linkedin" rel="noopener nofollow">
                                            <svg width="32" height="32" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path></svg>
                            </a>
                        </li>
                    </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mm-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-2_3">
                        <div class="mmf-container">
                            <ul class="mnuf-list">
                                <li>
                                    <a href="{{ route('terms') }}" class="crs">Terms and Conditions</a>
                                </li>
                                <li>
                                    <a href="{{ route('privacy') }}" class="crs">Privacy policy</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="lines">
            <div class="container">
                <div class="row gy-0">
                    <div class="col"></div>
                    <div class="col"></div>
                    <div class="col"></div>
                </div>
            </div>
        </div>
    </div>
</nav>

	</main>

	{{-- JavaScript Libraries from CDN --}}
	<script src="https://cdn.jsdelivr.net/npm/lozad@1.16.0/dist/lozad.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollToPlugin.min.js"></script>
	{{-- Note: SplitText and DrawSVGPlugin are premium GSAP plugins and require a license --}}
	{{-- For now, animations will work without them, but some advanced text effects may not work --}}
	<script>
		// Fallback for SplitText (premium plugin)
		if (typeof SplitText === 'undefined') {
			window.SplitText = function(el, options) {
				this.chars = Array.from(el.textContent).map(char => ({ textContent: char }));
				this.words = el.textContent.split(' ').map(word => ({ textContent: word }));
			};
		}
	</script>
	<script src="https://cdn.jsdelivr.net/npm/pristinejs@0.1.9/dist/pristine.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/flickity@2.3.0/dist/flickity.pkgd.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/flickity-imagesloaded@2.0.0/flickity-imagesloaded.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/lightgallery.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/plugins/thumbnail/lg-thumbnail.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/plugins/video/lg-video.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/isotope-layout@3.0.6/dist/isotope.pkgd.min.js"></script>
	{{-- jQuery is needed for youtube-background --}}
	<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/jquery-youtube-background@1.0.0/jquery.youtube-background.min.js"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
<script src="{{ asset('assets/js/animations.js') }}"></script>
<script src="{{ asset('assets/js/grained-background.js') }}"></script>
<script src="{{ asset('assets/js/form.js') }}"></script>

    </body>
</html>

