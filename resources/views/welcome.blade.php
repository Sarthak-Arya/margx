<!DOCTYPE html><html lang="en">

    <head>

        <meta charset="utf-8">

    <title>SLE - simplicity and lack of exces</title>

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

			<section class="section intro intro-auto">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-2_3">
                <div class="block-padding-left-10-percent">
                    <div class="section-headline _mb-none intro-heading">
                        <h2>Simplicity <br> and lack of excess</h2>
                    </div>
                    <div class="intro-info intro-info-mt-min">
                        <p class="intro-desc" style="--max-width: 15em;"><strong class="intro-desc-anim">Also high performance, that <span>set you apart from the competition.</span></strong></p>
                    </div>
                </div>
            </div>
            <div class="col-md-1_3 col-gr">
                <div class="intro-details-right">
                    <div class="btn-outer btn-center intro-btn-waves-mob-right">
                        <div class="btn-waves btn-waves-top"><span></span><span></span><span></span></div>
                        <a href="#!" class="btn btn-main crh btn-icon-r45">
                            <div class="btn-icon"><svg class="cd-icon" width="85" height="103" viewBox="0 0 85 103" xmlns="http://www.w3.org/2000/svg"><path d="M31.5513 59.1895L31.5513 0.499998L53.4741 0.499999L53.4741 59.1895L53.4741 60.3953L54.3274 59.5433L68.7931 45.0989L84.2924 60.5754L42.5125 102.293L0.732602 60.575L16.2319 45.0985L30.698 59.5433L31.5513 60.3953L31.5513 59.1895Z"/></svg></div>
                            <span class="btn-text">Discover</span>
                            <svg class="sd-stroke" width="390" height="390"><circle class="cdb-circle" cx="50%" cy="50%" r="50%"/></svg>
                        </a>
                        <div class="btn-waves btn-waves-bottom"><span></span><span></span><span></span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
			<div class="section brand-in-numbers anim-1_2-items">
    <div class="container bin-container">
        <div class="marquee">
            <div class="marquee-item" data-dir='left'>
                <div class="marquee-row">SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — </div>
                <div class="marquee-row">SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — </div>
            </div>
        </div>
        <div class="row gy-3">
            <div class="col-lg-1_3 col-sm-1_2">
                <div class="bin-item-line anim-1_2-item">
                    <div class="bin-item-numb">
                        <span class="pel pel-1">10</span>
                        <span class="pel pel-2">10</span>
                        <span class="pel pel-3">10</span>
                    </div>
                    <div class="bin-item-heading">Years Of Experience</div>
                </div>
            </div>
            <div class="col-lg-1_3 col-sm-1_2">
                <div class="bin-item-line anim-1_2-item">
                    <div class="bin-item-numb">
                        <span class="pel pel-1">28</span>
                        <span class="pel pel-2">28</span>
                        <span class="pel pel-3">28</span>
                    </div>
                    <div class="bin-item-heading">Аpps Developed</div>
                </div>
            </div>
            <div class="col-lg-1_3 offset-lg-1_3 col-sm-1_2">
                <div class="bin-item-line anim-1_2-item">
                    <div class="bin-item-numb">
                        <span class="pel pel-1">40</span>
                        <span class="pel pel-2">40</span>
                        <span class="pel pel-3">40</span>
                    </div>
                    <div class="bin-item-heading">Consultans</div>
                </div>
            </div>
            <div class="col-lg-1_3 col-sm-1_2">
                <div class="bin-item-line anim-1_2-item">
                    <div class="bin-item-numb">
                        <span class="pel pel-1">160</span>
                        <span class="pel pel-2">160</span>
                        <span class="pel pel-3">160</span>
                    </div>
                    <div class="bin-item-heading">Employers</div>
                </div>
            </div>
        </div>
        <div class="marquee">
            <div class="marquee-item" data-dir='right'>
                <div class="marquee-row">SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — </div>
                <div class="marquee-row">SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — </div>
            </div>
        </div>
    </div>
</div>
			<section class="section icon-items">
    <div class="container">
        <div class="row">
            <div class="col-md-2_3 offset-md-1_3">
                <div class="section-headline">
                    <h2>Icon items</h2>
                    <hr>
                </div>
            </div>
        </div>
        <div class="row gy-3 iitems icon-items-counter">
            <div class="col-sm-1_2 col-lg-1_3">
                <div class="iitem">
                    <div class="iitem-center">
                        <div class="iitem-icon iitem-icon-accent svg-fill svg-accent-fill">
                            <svg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M10.9421 3.14492V4.69023H12.0398H13.1375V3.14492V1.59961H12.0398H10.9421V3.14492ZM5.6001 7.92461V9.00273H7.17343H8.74676V7.92461V6.84648H7.17343H5.6001V7.92461ZM10.9421 22.623V38.3996H23.0531H35.1641V27.1152V15.8309H30.5905H26.0168V11.3387V6.84648H18.4795H10.9421V22.623ZM28.2122 10.2605V13.6746H31.7061H35.2001L31.7247 10.2605C29.8132 8.38281 28.241 6.84648 28.2308 6.84648C28.2205 6.84648 28.2122 8.38281 28.2122 10.2605Z"/>
                            </svg>
                        </div>
                        <h3 class="item-heading-large">Corporate Solution</h3>
                        <p class="item-desc">We use top-notch hardware to develop the most efficient apps for our customers.</p>
                        <div class="iitem-numb-abs iitem-numb-abs-1"><span>1</span></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-1_2 col-lg-1_3">
                <div class="iitem">
                    <div class="iitem-center">
                        <div class="iitem-icon iitem-icon-accent svg-fill svg-accent-fill">
                            <svg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.33655 1.74327C8.56916 1.98898 8.28189 2.22539 6.14661 4.36797C4.04081 6.48094 3.60922 6.98114 2.98579 8.03071C0.762063 11.7744 1.23068 17.0369 4.27695 22.5324C7.49235 28.3331 13.0695 33.6681 18.8059 36.4306C20.539 37.2653 22.1198 37.8091 23.8403 38.1625C25.0517 38.4113 27.3288 38.4781 28.4156 38.2967C29.3435 38.1418 30.6727 37.7105 31.4167 37.3229C32.7953 36.6046 33.5277 35.9935 35.9625 33.5298C37.5521 31.9213 37.7571 31.6864 37.998 31.197C38.5017 30.1737 38.5184 29.1375 38.0472 28.1293C37.8416 27.6892 37.6111 27.4308 35.7978 25.6075C33.6523 23.4503 33.4076 23.2569 32.5381 23.03C31.7248 22.8179 30.855 22.9219 30.0007 23.3333C29.6779 23.4888 29.2283 23.8901 27.8434 25.2591L26.094 26.9884L25.6143 26.9787C22.9932 26.9257 18.3351 23.5159 15.3332 19.4527C13.9336 17.5583 13.1161 15.7994 13.0351 14.5081L12.9976 13.9098L14.65 12.2397C15.5589 11.3212 16.4001 10.4239 16.5194 10.2457C17.2007 9.22791 17.288 7.93774 16.7531 6.79311C16.5602 6.3802 16.2943 6.08293 14.5424 4.32051C13.4471 3.21866 12.3972 2.21819 12.2092 2.09714C11.4508 1.60868 10.2275 1.45796 9.33655 1.74327ZM23.1311 6.24467C22.3517 6.52797 22.0797 7.35826 22.5576 7.99535C22.8853 8.43218 22.9575 8.44536 25.0232 8.44536H26.8964V9.59316V10.741L25.0088 10.7633C23.1869 10.785 23.1121 10.7915 22.8567 10.9505C22.6998 11.0482 22.5306 11.2427 22.4407 11.4287C22.2938 11.7324 22.2897 11.8232 22.3097 14.3373C22.3296 16.8409 22.3356 16.9396 22.4807 17.1356C22.5635 17.2474 22.7382 17.4118 22.8689 17.5009C23.1047 17.6616 23.1275 17.6629 25.7396 17.6629C28.1656 17.6629 28.3924 17.6524 28.6233 17.5294C29.0009 17.3282 29.2096 16.922 29.1763 16.4537C29.1454 16.0202 28.9833 15.756 28.6146 15.5385C28.3902 15.4062 28.218 15.3927 26.4829 15.3721L24.5954 15.3498V14.2052V13.0606L26.5548 13.0394C28.7485 13.0156 28.7364 13.0183 29.0487 12.4682C29.1914 12.2171 29.1974 12.102 29.1974 9.63888C29.1974 7.22699 29.1889 7.05452 29.0558 6.79347C28.978 6.64059 28.7919 6.43939 28.6424 6.34628C28.3722 6.17806 28.355 6.17691 25.8897 6.16034C23.9093 6.14709 23.3529 6.16409 23.1311 6.24467ZM36.9484 6.20989C36.6122 6.31524 36.3369 6.56044 36.2166 6.8616C36.1206 7.10176 36.1005 7.46355 36.1005 8.95088V10.7497H34.9534H33.8062L33.7849 8.84654C33.7647 7.05466 33.7548 6.93174 33.6152 6.74465C33.3334 6.3668 33.1036 6.24899 32.649 6.24899C32.1942 6.24899 31.9644 6.36695 31.6827 6.74479C31.5391 6.93735 31.5344 7.0291 31.5344 9.63355C31.5344 12.25 31.5385 12.329 31.6848 12.5268C31.7676 12.6386 31.9423 12.8029 32.073 12.8921C32.3046 13.05 32.359 13.0541 34.2023 13.0541H36.0939L36.1152 14.9862L36.1365 16.9183L36.333 17.1762C36.8439 17.8466 37.8728 17.7615 38.2684 17.0159C38.3942 16.7788 38.4015 16.4995 38.3999 11.9391C38.3984 7.38988 38.3907 7.09621 38.2646 6.81825C38.0513 6.34794 37.4277 6.05967 36.9484 6.20989Z"/>
                            </svg>
                        </div>
                        <h3 class="item-heading-large">Call Center Solutions</h3>
                        <p class="item-desc">You can rely on our 24/7 tech support that will gladly solve any app issue you may have.</p>
                        <div class="iitem-numb-abs"><span>2</span></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-1_2 col-lg-1_3">
                <div class="iitem">
                    <div class="iitem-center">
                        <div class="iitem-icon iitem-icon-accent svg-fill svg-accent-fill">
                            <svg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M22.4099 6.4251C20.8605 6.59066 19.104 7.24761 17.6981 8.18752C16.8903 8.72757 15.4885 10.1545 14.9339 11.0013C14.6308 11.4641 14.4795 11.6351 14.3966 11.6087C14.3331 11.5884 14.0539 11.4909 13.776 11.392C11.294 10.5084 8.58401 11.4617 7.11566 13.735C6.59398 14.5426 6.29091 15.4562 6.21222 16.4584L6.16855 17.0142L5.51696 17.48C2.06483 19.9477 0.713444 24.3781 2.19503 28.3709C3.08862 30.779 5.15462 32.8747 7.52864 33.7811C8.99052 34.3392 9.62974 34.4004 14.0049 34.4004H17.6981V29.7304V25.0603H15.396H13.0938L16.52 20.4268C18.4043 17.8783 19.9704 15.7932 20.0001 15.7932C20.0298 15.7932 21.5958 17.8783 23.4802 20.4268L26.9063 25.0603H24.6042H22.302V29.7304V34.4004H25.9953C30.3704 34.4004 31.0096 34.3392 32.4715 33.7811C34.8512 32.8726 36.9095 30.7847 37.8051 28.3709C39.2868 24.378 37.9354 19.9477 34.4829 17.4798L33.831 17.0137L33.782 16.2758C33.4614 11.4489 30.119 7.55882 25.4672 6.59847C24.7317 6.44662 23.0832 6.35315 22.4099 6.4251Z"/>
                            </svg>                                        
                        </div>
                        <h3 class="item-heading-large">Cloud Development</h3>
                        <p class="item-desc">If you are not satisfied with our apps, we will return your money in the first 30 days.</p>
                        <div class="iitem-numb-abs"><span>3</span></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
			<div class="section brand-in-numbers anim-1_2-items">
    <div class="container">
        <div class="row align-items-lg-end">
            <div class="col-lg-1_3 col-g b-none b-lg-block">
                <div class="btn-outer btn-center btn-anim">
                    <div class="btn btn-main crh btn-scroll-to-next-section">
                        <div class="btn-icon">
                            <svg class="cd-icon" width="85" height="103" viewBox="0 0 85 103" xmlns="http://www.w3.org/2000/svg"><path d="M31.5513 59.1895L31.5513 0.499998L53.4741 0.499999L53.4741 59.1895L53.4741 60.3953L54.3274 59.5433L68.7931 45.0989L84.2924 60.5754L42.5125 102.293L0.732602 60.575L16.2319 45.0985L30.698 59.5433L31.5513 60.3953L31.5513 59.1895Z"/></svg>
                        </div>
                        <span class="btn-text">Scroll Down</span>
                        <svg class="sd-stroke" width="390" height="390"><circle class="cdb-circle" cx="50%" cy="50%" r="50%"/></svg>
                    </div>
                    <div class="btn-circle-spikes">
                        <svg viewBox="0 0 342 342"><use xlink:href="{{ asset('assets/img/sprite.svg') }}#circle-spikes"></use></svg>
                    </div>
                </div>
            </div>
            <div class="col-lg-2_3">
                <div class="row">
                    <div class="col-md-1_2">
                        <div class="bin-item-bordered bin-anim crh anim-1_2-item">
                            <div>
                                <div class="bin-item-numb-center">
                                    <div class="bin-item-numb">
                                        <span class="pel pel-1">10</span>
                                        <span class="pel pel-2">10</span>
                                        <span class="pel pel-3">10</span>
                                    </div>
                                </div>
                                <div class="bin-item-heading">Years Of <br> Experience</div>
                            </div>
                            <div class="bin-item-counter-anim">
                                <span>01.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1_2">
                        <div class="bin-item-bordered bin-anim crh anim-1_2-item">
                            <div>
                                <div class="bin-item-numb-center">
                                    <div class="bin-item-numb">
                                        <span class="pel pel-1">28</span>
                                        <span class="pel pel-2">28</span>
                                        <span class="pel pel-3">28</span>
                                    </div>
                                </div>
                                <div class="bin-item-heading">Аpps <br> Developed</div>
                            </div>
                            <div class="bin-item-counter-anim">
                                <span>02.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1_2">
                        <div class="bin-item-bordered bin-anim crh anim-1_2-item">
                            <div>
                                <div class="bin-item-numb-center">
                                    <div class="bin-item-numb">
                                        <span class="pel pel-1">40</span>
                                        <span class="pel pel-2">40</span>
                                        <span class="pel pel-3">40</span>
                                    </div>
                                </div>
                                <div class="bin-item-heading">Consultans</div>
                            </div>
                            <div class="bin-item-counter-anim">
                                <span>03.</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-1_2">
                        <div class="bin-item-bordered bin-anim crh anim-1_2-item">
                            <div>
                                <div class="bin-item-numb-center">
                                    <div class="bin-item-numb">
                                        <span class="pel pel-1">71</span>
                                        <span class="pel pel-2">71</span>
                                        <span class="pel pel-3">71</span>
                                    </div>
                                </div>
                                <div class="bin-item-heading">Employers</div>
                            </div>
                            <div class="bin-item-counter-anim">
                                <span>04.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
			<div class="container">
    <div class="marquee">
        <div class="marquee-item" data-dir='left'>
            <div class="marquee-row">SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — </div>
            <div class="marquee-row">SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — </div>
        </div>
        <div class="marquee-item" data-dir='right'>
            <div class="marquee-row"> — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE</div>
            <div class="marquee-row"> — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE</div>
        </div>
        <div class="marquee-item" data-dir='left'>
            <div class="marquee-row">SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — </div>
            <div class="marquee-row">SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — </div>
        </div>
    </div>
</div>
			<section class="section pricing anim-1_3-items">
    <div class="container">
        <div class="row">
            <div class="col-md-2_3 offset-md-1_3">
                <div class="section-headline">
                    <h2>Pricing</h2>
                    <hr>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3_4 offset-xl-1_4">
                <div class="row nitems">
                    <div class="col-sm-1_2 col-lg-1_3">
                        <div class="pricing-item pricing-anim el-collection-hover anim-1_3-item">
                            <div class="el-collection-content">
                                <header class="pricing-item-header">
                                    <div class="pricing-item-heading">Basic</div>
                                    <div class="pricing-item-decor-line"></div>
                                    <div class="pricing-item-price"><small class="b-block">from</small> 899$</div>
                                </header>
                                <div class="pricing-item-h">
                                    <div class="pricing-item-content">
                                        <ul class="list-style-none pricing-item-list">
                                            <li class="active">
                                                <svg width="18" height="18" viewBox="0 0 18 19"><use xlink:href="{{ asset('assets/img/sprite.svg') }}#star2"></use></svg>
                                                Concept development
                                            </li>
                                            <li class="active">
                                                <svg width="18" height="18" viewBox="0 0 18 19"><use xlink:href="{{ asset('assets/img/sprite.svg') }}#star2"></use></svg>
                                                UI/UX design
                                            </li>
                                            <li>
                                                <svg width="18" height="18" viewBox="0 0 18 19"><use xlink:href="{{ asset('assets/img/sprite.svg') }}#star2"></use></svg>
                                                Configuration management
                                            </li>
                                            <li>
                                                <svg width="18" height="18" viewBox="0 0 18 19"><use xlink:href="{{ asset('assets/img/sprite.svg') }}#star2"></use></svg>
                                                Software quality assurance
                                            </li>
                                            <li>
                                                <svg width="18" height="18" viewBox="0 0 18 19"><use xlink:href="{{ asset('assets/img/sprite.svg') }}#star2"></use></svg>
                                                App integration
                                            </li>
                                        </ul>
                                    </div>
                                    <footer class="pricing-item-footer b-flex justify-content-center">
                                        <a href="#!" class="btn btn-border btn-middle crm mc">
                                            <span>Get Started</span>
                                        </a>
                                    </footer>
                                </div>
                            </div>
                            <div class="el-collection el-collection-close"><span></span></div>
                        </div>
                    </div>
                    <div class="col-sm-1_2 col-lg-1_3">
                        <div class="pricing-item pricing-item-accent pricing-anim el-collection-hover anim-1_3-item">
                            <div class="el-collection-content">
                                <div class="pricing-item-badge">Popular</div>
                                <header class="pricing-item-header">
                                    <div class="pricing-item-heading">Optimal</div>
                                    <div class="pricing-item-decor-line"></div>
                                    <div class="pricing-item-price"><small class="b-block">from</small> 1,500$</div>
                                </header>
                                <div class="pricing-item-h">
                                    <div class="pricing-item-content">
                                        <ul class="list-style-none pricing-item-list">
                                            <li class="active">
                                                <svg width="18" height="18" viewBox="0 0 18 19"><use xlink:href="{{ asset('assets/img/sprite.svg') }}#star2"></use></svg>
                                                Concept development
                                            </li>
                                            <li class="active">
                                                <svg width="18" height="18" viewBox="0 0 18 19"><use xlink:href="{{ asset('assets/img/sprite.svg') }}#star2"></use></svg>
                                                UI/UX design
                                            </li>
                                            <li class="active">
                                                <svg width="18" height="18" viewBox="0 0 18 19"><use xlink:href="{{ asset('assets/img/sprite.svg') }}#star2"></use></svg>
                                                Configuration management
                                            </li>
                                            <li class="active">
                                                <svg width="18" height="18" viewBox="0 0 18 19"><use xlink:href="{{ asset('assets/img/sprite.svg') }}#star2"></use></svg>
                                                Software quality assurance
                                            </li>
                                            <li>
                                                <svg width="18" height="18" viewBox="0 0 18 19"><use xlink:href="{{ asset('assets/img/sprite.svg') }}#star2"></use></svg>
                                                App integration
                                            </li>
                                        </ul>
                                    </div>
                                    <footer class="pricing-item-footer b-flex justify-content-center">
                                        <a href="#!" class="btn btn-border btn-middle crm">
                                            <span>Get Started</span>
                                        </a>
                                    </footer>
                                </div>
                            </div>
                            <div class="el-collection el-collection-close"><span></span></div>
                        </div>
                    </div>
                    <div class="col-sm-1_2 col-lg-1_3">
                        <div class="pricing-item pricing-anim el-collection-hover anim-1_3-item">
                            <div class="el-collection-content">
                                <header class="pricing-item-header">
                                    <div class="pricing-item-heading">Ultimate</div>
                                    <div class="pricing-item-decor-line"></div>
                                    <div class="pricing-item-price"><small class="b-block">from</small> 2,000$</div>
        </header>
                                <div class="pricing-item-h">
                                    <div class="pricing-item-content">
                                        <ul class="list-style-none pricing-item-list">
                                            <li class="active">
                                                <svg width="18" height="18" viewBox="0 0 18 19"><use xlink:href="{{ asset('assets/img/sprite.svg') }}#star2"></use></svg>
                                                Concept development
                                            </li>
                                            <li class="active">
                                                <svg width="18" height="18" viewBox="0 0 18 19"><use xlink:href="{{ asset('assets/img/sprite.svg') }}#star2"></use></svg>
                                                UI/UX design
                                            </li>
                                            <li class="active">
                                                <svg width="18" height="18" viewBox="0 0 18 19"><use xlink:href="{{ asset('assets/img/sprite.svg') }}#star2"></use></svg>
                                                Configuration management
                                            </li>
                                            <li class="active">
                                                <svg width="18" height="18" viewBox="0 0 18 19"><use xlink:href="{{ asset('assets/img/sprite.svg') }}#star2"></use></svg>
                                                Software quality assurance
                                            </li>
                                            <li class="active">
                                                <svg width="18" height="18" viewBox="0 0 18 19"><use xlink:href="{{ asset('assets/img/sprite.svg') }}#star2"></use></svg>
                                                App integration
                                            </li>
                                            <li class="active">
                                                <svg width="18" height="18" viewBox="0 0 18 19"><use xlink:href="{{ asset('assets/img/sprite.svg') }}#star2"></use></svg>
                                                Custom settings
                                            </li>
                                        </ul>
                                    </div>
                                    <footer class="pricing-item-footer b-flex justify-content-center">
                                        <a href="#!" class="btn btn-border btn-middle crm mc">
                                            <span>Get Started</span>
                                        </a>
                                    </footer>
                                </div>
                            </div>
                            <div class="el-collection el-collection-close"><span></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
			<section class="section testimonials anim-1_1-items">
    <div class="container">
        <div class="row">
            <div class="col-md-2_3 offset-md-1_3">
                <div class="section-headline">
                    <h2>Testimonials</h2>
                    <hr>
                </div>
            </div>
        </div>
        <div class="testimonials-carousel anim-1_1-item">
            <div class="testimonials-item">
                <div class="testimonials-item-photo">
                    <div class="el-waves el-waves-top"><span></span><span></span><span></span></div>
                    <img src="{{ asset('assets/img/t4.jpg') }}" class="lazy _cover" alt="">
                    <div class="el-waves el-waves-bottom"><span></span><span></span><span></span></div>
                </div>
                <div class="testimonials-item-details">
                    <div class="testimonials-item-person">
                        <div class="item-heading testimonials-item-name">Jill Peterson</div>
                        <div class="testimonials-item-position">Regular client</div>
                    </div>
                    <p class="testimonials-item-desc">When users decide what to do, where to go, or what to buy, they turn to Google. Your ad may appear when they are looking for the products or services that you offer. An ad displayed on a computer or mobile device can bring you valuable new customers.</p>
                </div>
            </div>
            <div class="testimonials-item">
                <div class="testimonials-item-photo">
                    <div class="el-waves el-waves-top"><span></span><span></span><span></span></div>
                    <img src="{{ asset('assets/img/t2.jpg') }}" class="lazy _cover" alt="">
                    <div class="el-waves el-waves-bottom"><span></span><span></span><span></span></div>
                </div>
                <div class="testimonials-item-details">
                    <div class="testimonials-item-person">
                        <div class="item-heading testimonials-item-name">Sam Robinson</div>
                        <div class="testimonials-item-position">The best client</div>
                    </div>
                    <p class="testimonials-item-desc">When users decide what to do, where to go, or what to buy, they turn to Google. Your ad may appear when they are looking for the products or services that you offer.</p>
                </div>
            </div>
            <div class="testimonials-item">
                <div class="testimonials-item-photo">
                    <div class="el-waves el-waves-top"><span></span><span></span><span></span></div>
                    <img src="{{ asset('assets/img/t3.jpg') }}" class="lazy _cover" alt="">
                    <div class="el-waves el-waves-bottom"><span></span><span></span><span></span></div>
                </div>
                <div class="testimonials-item-details">
                    <div class="testimonials-item-person">
                        <div class="item-heading testimonials-item-name">Ryan Wilson</div>
                        <div class="testimonials-item-position">Regular client</div>
                    </div>
                    <p class="testimonials-item-desc">When users decide what to do, where to go, or what to buy, they turn to Google. Your ad may appear when they are looking for the products or services that you offer. An ad displayed on a computer or mobile device can bring you valuable new customers.</p>
                </div>
            </div>
            <div class="testimonials-item">
                <div class="testimonials-item-photo">
                    <div class="el-waves el-waves-top"><span></span><span></span><span></span></div>
                    <img src="{{ asset('assets/img/t1.jpg') }}" class="lazy _cover" alt="">
                    <div class="el-waves el-waves-bottom"><span></span><span></span><span></span></div>
                </div>
                <div class="testimonials-item-details">
                    <div class="testimonials-item-person">
                        <div class="item-heading testimonials-item-name">Mary Lee</div>
                        <div class="testimonials-item-position">The best client</div>
                    </div>
                    <p class="testimonials-item-desc">When users decide what to do, where to go, or what to buy, they turn to Google. Your ad may appear when they are looking for the products or services that you offer.</p>
                </div>
            </div>
        </div>
        <div class="slider-nav justify-content-center anim-1_1-item">
            <div class="slider-btn slider-btn-prev crm">
                <svg viewBox="0 0 18 14" width="18" height="14"><use xlink:href="{{ asset('assets/img/sprite.svg') }}#arrow-prev"></use></svg>
            </div>
            <div class="slider-nav-counter">
                <span class="snc-current-slide">1</span>/<span class="snc-slides">1</span>
            </div>
            <div class="slider-btn slider-btn-next crm">
                <svg viewBox="0 0 18 14" width="18" height="14"><use xlink:href="{{ asset('assets/img/sprite.svg') }}#arrow-next"></use></svg>
            </div>
        </div>
    </div>
</section>
			<section class="section seo anim-1_1-items">
    <div class="container">
        <div class="row">
            <div class="col-md-2_3 offset-md-1_3">
                <div class="section-headline -sm">
                    <div class="b-flex b-flex-nowrap align-items-center justify-content-between">
                        <h1>SEO Heading</h1>
                        <div class="seo-btn anim-1_1-item"><div class="btn btn-min crm mc"><div></div></div></div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2_3 offset-md-1_3">
                <div class="seo-content anim-1_1-item">
                    <div class="seo-content-visible article">
                        <p><strong>Whenever I’m TA for a introductory CS class where students learn some programming language, I have trouble coming up with good exercises. Problems from Project Euler and the like are usually much too difficult for beginners, especially if they don’t have a strong background in mathematics.</strong></p>
                        <p>This page is a collection of progressively more difficult exercises that are suitable for people who just started learning. It will be extended as I come up with new exercises. Except for the GUI questions, exercises are generally algorithmic and should be solvable without learning any libraries. The difficulty of the exercises of course somewhat depends on the programming language you use. The List exercises for example are more complicated in languages like C that don’t have build-in support for lists.</p>
                    </div>
                    <div class="seo-content-hidden" style="max-height: 0px;">
                        <div class="article">
                            <p>This is why you should try to test each sub task you identified during your task-breakdown by itself. Only after you’re confident that each part works as you expect you can attempt to plug them together. Make sure you test the complete program as well, errors can creep in in the way the different parts interact. You should try to automate your tests. The easier it is to test your program, the freer you are in experimenting with changes.</p>
                            <h2>Benefits Of ASync/Await In Programming</h2>
							<p>Learning to program means learning how to solve problems using code. Conceptually it is not very difficult to write a program that solves a problem that you can solve yourself. The skill you need to acquire is thinking very precisely about how you solve the problem and breaking it down into steps that are so simple that a computer can execute them. I encourage you to first solve a few instances of a problem by hand and think about what you did to find the solution. For example if the task is sorting lists, sort some short lists yourself.</p>
							<p>A reasonable method would be to find the smallest element, write it down and cross it out of the original list and repeat this process until you have sorted the whole list. Then you have to teach the computer 1) how to find the smallest element, 2) how to write it down, 3) how to cross it out, and wrap this in a loop. Then continue this task breakdown process until you’re confident you know how to write the necessary program.</p>
							<h3>ASync/Await In Programming</h3>
							<p>To make good progress in your programming task, you need to test your work as early and as thoroughly as possible. Everybody makes mistakes while programming and finding mistakes in programs consumes a very large part of a programmer’s work-day. Finding a problem in a small and easy piece of code is much simpler than trying to spot it in a large program. </p>
							<ul>
								<li>Consulting</li>
								<li>Customer Service</li>
								<li>Innovation</li>
							    <li>Management</li>
								<li>Ethics</li>
							</ul>
						    <p>To make good progress in your programming task, you need to test your work as early and as thoroughly as possible. Everybody makes mistakes while programming and finding mistakes in programs consumes a very large part of a programmer’s work-day. Finding a problem in a small and easy piece of code is much simpler than trying to spot it in a large program. </p>
                        </div>
                        <div class="seo-btn seo-content-btn"><div class="btn btn-min crm mc"><div></div></div></div>
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
                        <text dy="40" textLength="300%"><textPath xlink:href="#contacts-textcircle" textLength="300%">Don’t worry, it's will be WOW.</textPath></text>
                    </svg>
                </div>
            </div>
            <div class="col-md-2_3">
                <div class="section-headline">
                    <h2>Get in <br> touch</h2>
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
            </div>
        </div>
    </div>
</section>
			<div class="popup" id="popup-contacts">
    <div class="popup-container">
        <div class="container">
            <div class="row">
                <div class="col-md-2_3 offset-md-1_3">
                    <div class="popup-content popup-anim form-outer">
                        <div class="popup-header">
                            <div class="popup-subheading form-success-hidden">Get in touch</div>
                            <div class="popup-subheading form-success-visible" aria-hidden="true">Sent</div>
                        </div>
                        <div class="popup-body">
                            <h2 class="popup-heading form-success-hidden">Text to us</h2>
                            <h2 class="popup-heading form-success-visible" aria-hidden="true">Your request has been sent successfully</h2>
                            <form action="#!" method="post" class="popup-form" novalidate>
                                <input type="hidden" name="form_subject" value="Contact popup form">
                                <div class="row gy-3 form-success-hidden">
                                    <div class="col-sm-1_2">
                                        <div class="form-field">
                                            <label for="field-name" class="form-label">Name</label>
                                            <input type="text" class="form-control crs" name="Name" value="" id="field-name" required data-pristine-required-message="Please enter your name">
                                        </div>
                                    </div>
                                    <div class="col-sm-1_2">
                                        <div class="form-field">
                                            <label for="field-tel" class="form-label">Phone</label>
                                            <input type="tel" class="form-control crs" name="Phone" value="" id="field-tel" required data-pristine-required-message="Please enter your phone number">
                                        </div>
                                    </div>
                                    <div class="col-1">
                                        <div class="form-field">
                                            <label for="field-email" class="form-label">E-mail</label>
                                            <input type="email" class="form-control crs" name="Email" value="" id="field-email" required data-pristine-required-message="Please enter a valid email address" data-pristine-email-message="Please enter a valid email address">
                                        </div>
                                    </div>
                                    <div class="col-1">
                                        <div class="form-field">
                                            <label for="field-message" class="form-label">How can we help you?</label>
                                            <textarea name="Message" class="form-control crs" cols="30" rows="1" id="field-message" aria-label="How can we help you?"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-1">
                                        <div class="form-field form-field-checkbox">
                                            <div class="checkbox">
                                                <input type="checkbox" class="checkbox-input" name="PrivacyPolicy" id="field-privacy-policy" checked="checked" required data-pristine-required-message="You didn't agree to the Privacy Policy">
                                                <label for="field-privacy-policy" class="checkbox-label crs">
                                                    <span class="checkbox-ico">
                                                        <svg width="10" height="8" viewBox="0 0 10 8" xmlns="http://www.w3.org/2000/svg">
                                                            <path d="M6.58411 2.92042C7.85546 1.3772 8.94947 0.0847286 9.01522 0.0483892C9.08091 0.0119915 9.25364 -0.0083073 9.39904 0.00324196C9.61366 0.0202159 9.69101 0.0580131 9.81073 0.20407C9.99428 0.428056 10.0488 0.715446 9.95464 0.962355C9.91558 1.06472 8.66135 2.62924 7.16746 4.43909C4.1332 8.11503 4.2464 8.00297 3.57129 7.99889C3.29441 7.9972 3.14109 7.96418 2.98285 7.87208C2.86517 7.80354 2.14588 7.06503 1.38444 6.23092L0 4.71435L0.0247678 4.3887C0.0531199 4.01574 0.186749 3.81537 0.47669 3.71102C0.840078 3.58025 0.93059 3.64733 2.10233 4.91646C3.24193 6.15072 3.37604 6.25594 3.716 6.18181C3.80491 6.16244 3.96646 6.05202 4.07505 5.93641C4.18365 5.82086 5.3127 4.46365 6.58411 2.92042Z"/>
                                                        </svg>                                                
                                </span>
                                                    <span>I agree to the transfer of personal data in accordance with the <a href="{{ route('privacy') }}">Privacy Policy</a></span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="giy gy-3"></div>
                                <div class="row">
                                    <div class="col-1">
                                        <div class="row align-items-center">
                                            <div class="col-sm-1_2 order-2 order-sm-1">
                                                <nav class="social-links-nav contacts-social-links">
                                                    <ul class="social-links">
                                                        <li>
                                                            <a href="#!" class="crm" aria-label="Instagram" rel="noopener nofollow">
                                                                <svg width="32" height="32" viewBox="0 0 512 512"><use xlink:href="{{ asset('assets/img/sprite.svg') }}#twitter-icon"></use></svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#!" class="crm" aria-label="Facebook" rel="noopener nofollow">
                                                                <svg width="32" height="32" viewBox="0 0 320 512"><use xlink:href="{{ asset('assets/img/sprite.svg') }}#facebook-icon"></use></svg>
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="#!" class="crm" aria-label="Linkedin" rel="noopener nofollow">
                                                                <svg width="32" height="32" viewBox="0 0 448 512"><use xlink:href="{{ asset('assets/img/sprite.svg') }}#linkedin-icon"></use></svg>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </nav>
                                            </div>
                                            <div class="col-sm-1_2 order-1 order-sm-2">
                                                <div class="btn-default btn-waves-outer contact-btn-left form-success-hidden">
                                                    <div class="btn-waves btn-waves-top"><span></span><span></span><span></span></div>
                                                    <button type="submit" class="btn btn-border crm">
                                                        <span>Submit</span>
                                                    </button>
                                                    <div class="btn-waves btn-waves-bottom"><span></span><span></span><span></span></div>
                                                </div>
                                                <div class="btn-default contact-btn-left form-success-visible" aria-hidden="true">
                                                    <div class="btn crm">
                                                        <span>Thank you!</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="popup-marquee-outer b-none b-md-block">
            <div class="popup-marquee">
                <div class="container">
    <div class="marquee">
        <div class="marquee-item" data-dir='left'>
            <div class="marquee-row">SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — </div>
            <div class="marquee-row">SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — </div>
        </div>
        <div class="marquee-item" data-dir='right'>
            <div class="marquee-row"> — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE</div>
            <div class="marquee-row"> — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE</div>
        </div>
        <div class="marquee-item" data-dir='left'>
            <div class="marquee-row">SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — </div>
            <div class="marquee-row">SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — SLE — </div>
        </div>
    </div>
</div>
            </div>
        </div>
        <div class="popup-close popup-anim crm"></div>
    </div>
</div>

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
