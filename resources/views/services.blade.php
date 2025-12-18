<!DOCTYPE html><html lang="en">

    <head>

        <meta charset="utf-8">

    <title>Services - MargX - simplicity and lack of exces</title>

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
                    <a href="{{ route('home') }}" class="logo h-amin crs" title="MargX">
                        <img src="{{ asset('images/wordmark white@2x.png') }}" alt="MargX">
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

			<nav class="bread-crumbs">
				<div class="container">
					<div class="row">
						<div class="col offset-md-1_3">
							<ol class="bread-crumbs-list">
								<li>
									<a class="crs" href="{{ route('home') }}">
										<span>Home</span>
									</a>
								</li>
								<li><span>Services</span></li>
							</ol>
						</div>
					</div>
				</div>
			</nav>

			<section class="section items-of-numbers">
    <div class="container">
        <div class="row">
            <div class="col-md-2_3 offset-md-1_3">
                <div class="section-headline">
                    <h1>Services</h1>
                    <hr>
                </div>
            </div>
        </div>
        <div class="row decor-anim">
            <div class="col-md-1_3 col-d b-none b-md-block">
                <div class="ifn-decor">
                    <svg viewBox="0 0 167 297" width="160" height="284" xmlns="http://www.w3.org/2000/svg">
                        <path fill="currentColor" d="M87.3118 28.5592H86.3118V27.5592H87.3118V28.5592ZM101.051 28.5592V27.5592H102.054L102.051 28.562L101.051 28.5592ZM100.976 55.285L101.683 55.9921L99.969 57.7061L99.9759 55.2822L100.976 55.285ZM137.037 19.2239L136.33 18.5168L137.036 17.8111L137.743 18.5155L137.037 19.2239ZM147.087 29.2367L147.793 28.5283L148.503 29.2354L147.794 29.9438L147.087 29.2367ZM110.989 65.3354V66.3354H108.574L110.282 64.6283L110.989 65.3354ZM137.79 65.3354V64.3354H138.795L138.79 65.341L137.79 65.3354ZM137.714 78.9995L138.714 79.005L138.709 79.9995H137.714V78.9995ZM87.3118 78.9995V79.9995H86.3118V78.9995H87.3118ZM87.3118 27.5592H101.051V29.5592H87.3118V27.5592ZM102.051 28.562L101.976 55.2878L99.9759 55.2822L100.051 28.5564L102.051 28.562ZM100.269 54.5779L136.33 18.5168L137.744 19.931L101.683 55.9921L100.269 54.5779ZM137.743 18.5155L147.793 28.5283L146.382 29.9452L136.331 19.9324L137.743 18.5155ZM147.794 29.9438L111.696 66.0426L110.282 64.6283L146.38 28.5296L147.794 29.9438ZM110.989 64.3354H137.79V66.3354H110.989V64.3354ZM138.79 65.341L138.714 79.005L136.715 78.994L136.79 65.3299L138.79 65.341ZM137.714 79.9995H87.3118V77.9995H137.714V79.9995ZM86.3118 78.9995V28.5592H88.3118V78.9995H86.3118Z"/>
                        <path fill="currentColor" d="M87.3118 190.559H86.3118V189.559H87.3118V190.559ZM101.051 190.559V189.559H102.054L102.051 190.562L101.051 190.559ZM100.976 217.285L101.683 217.992L99.969 219.706L99.9759 217.282L100.976 217.285ZM137.037 181.224L136.33 180.517L137.036 179.811L137.743 180.516L137.037 181.224ZM147.087 191.237L147.793 190.528L148.503 191.235L147.794 191.944L147.087 191.237ZM110.989 227.335V228.335H108.574L110.282 226.628L110.989 227.335ZM137.79 227.335V226.335H138.795L138.79 227.341L137.79 227.335ZM137.714 241L138.714 241.005L138.709 242H137.714V241ZM87.3118 241V242H86.3118V241H87.3118ZM87.3118 189.559H101.051V191.559H87.3118V189.559ZM102.051 190.562L101.976 217.288L99.9759 217.282L100.051 190.556L102.051 190.562ZM100.269 216.578L136.33 180.517L137.744 181.931L101.683 217.992L100.269 216.578ZM137.743 180.516L147.793 190.528L146.382 191.945L136.331 181.932L137.743 180.516ZM147.794 191.944L111.696 228.043L110.282 226.628L146.38 190.53L147.794 191.944ZM110.989 226.335H137.79V228.335H110.989V226.335ZM138.79 227.341L138.714 241.005L136.715 240.994L136.79 227.33L138.79 227.341ZM137.714 242H87.3118V240H137.714V242ZM86.3118 241V190.559H88.3118V241H86.3118Z"/>
                        <path fill="currentColor" d="M87.3118 109.559H86.3118V108.559H87.3118V109.559ZM101.051 109.559V108.559H102.054L102.051 109.562L101.051 109.559ZM100.976 136.285L101.683 136.992L99.969 138.706L99.9759 136.282L100.976 136.285ZM137.037 100.224L136.33 99.5168L137.036 98.8111L137.743 99.5155L137.037 100.224ZM147.087 110.237L147.793 109.528L148.503 110.235L147.794 110.944L147.087 110.237ZM110.989 146.335V147.335H108.574L110.282 145.628L110.989 146.335ZM137.79 146.335V145.335H138.795L138.79 146.341L137.79 146.335ZM137.714 160L138.714 160.005L138.709 161H137.714V160ZM87.3118 160V161H86.3118V160H87.3118ZM87.3118 108.559H101.051V110.559H87.3118V108.559ZM102.051 109.562L101.976 136.288L99.9759 136.282L100.051 109.556L102.051 109.562ZM100.269 135.578L136.33 99.5168L137.744 100.931L101.683 136.992L100.269 135.578ZM137.743 99.5155L147.793 109.528L146.382 110.945L136.331 100.932L137.743 99.5155ZM147.794 110.944L111.696 147.043L110.282 145.628L146.38 109.53L147.794 110.944ZM110.989 145.335H137.79V147.335H110.989V145.335ZM138.79 146.341L138.714 160.005L136.715 159.994L136.79 146.33L138.79 146.341ZM137.714 161H87.3118V159H137.714V161ZM86.3118 160V109.559H88.3118V160H86.3118Z"/>
                        <path fill="currentColor" d="M13.3118 82.5592H12.3118V81.5592H13.3118V82.5592ZM27.0511 82.5592V81.5592H28.054L28.0511 82.562L27.0511 82.5592ZM26.9759 109.285L27.683 109.992L25.969 111.706L25.9759 109.282L26.9759 109.285ZM63.0369 73.2239L62.3298 72.5168L63.0356 71.8111L63.7427 72.5155L63.0369 73.2239ZM73.0874 83.2367L73.7931 82.5283L74.5029 83.2354L73.7945 83.9438L73.0874 83.2367ZM36.9886 119.335V120.335H34.5744L36.2815 118.628L36.9886 119.335ZM63.7898 119.335V118.335H64.7953L64.7898 119.341L63.7898 119.335ZM63.7145 133L64.7145 133.005L64.709 134H63.7145V133ZM13.3118 133V134H12.3118V133H13.3118ZM13.3118 81.5592H27.0511V83.5592H13.3118V81.5592ZM28.0511 82.562L27.9758 109.288L25.9759 109.282L26.0511 82.5564L28.0511 82.562ZM26.2687 108.578L62.3298 72.5168L63.744 73.931L27.683 109.992L26.2687 108.578ZM63.7427 72.5155L73.7931 82.5283L72.3816 83.9452L62.3312 73.9324L63.7427 72.5155ZM73.7945 83.9438L37.6957 120.043L36.2815 118.628L72.3803 82.5296L73.7945 83.9438ZM36.9886 118.335H63.7898V120.335H36.9886V118.335ZM64.7898 119.341L64.7145 133.005L62.7145 132.994L62.7898 119.33L64.7898 119.341ZM63.7145 134H13.3118V132H63.7145V134ZM12.3118 133V82.5592H14.3118V133H12.3118Z"/>
                        <path fill="currentColor" d="M13.3118 244.559H12.3118V243.559H13.3118V244.559ZM27.0511 244.559V243.559H28.054L28.0511 244.562L27.0511 244.559ZM26.9759 271.285L27.683 271.992L25.969 273.706L25.9759 271.282L26.9759 271.285ZM63.0369 235.224L62.3298 234.517L63.0356 233.811L63.7427 234.516L63.0369 235.224ZM73.0874 245.237L73.7931 244.528L74.5029 245.235L73.7945 245.944L73.0874 245.237ZM36.9886 281.335V282.335H34.5744L36.2815 280.628L36.9886 281.335ZM63.7898 281.335V280.335H64.7953L64.7898 281.341L63.7898 281.335ZM63.7145 295L64.7145 295.005L64.709 296H63.7145V295ZM13.3118 295V296H12.3118V295H13.3118ZM13.3118 243.559H27.0511V245.559H13.3118V243.559ZM28.0511 244.562L27.9758 271.288L25.9759 271.282L26.0511 244.556L28.0511 244.562ZM26.2687 270.578L62.3298 234.517L63.744 235.931L27.683 271.992L26.2687 270.578ZM63.7427 234.516L73.7931 244.528L72.3816 245.945L62.3312 235.932L63.7427 234.516ZM73.7945 245.944L37.6957 282.043L36.2815 280.628L72.3803 244.53L73.7945 245.944ZM36.9886 280.335H63.7898V282.335H36.9886V280.335ZM64.7898 281.341L64.7145 295.005L62.7145 294.994L62.7898 281.33L64.7898 281.341ZM63.7145 296H13.3118V294H63.7145V296ZM12.3118 295V244.559H14.3118V295H12.3118Z"/>
                        <path fill="currentColor" d="M13.3118 163.559H12.3118V162.559H13.3118V163.559ZM27.0511 163.559V162.559H28.054L28.0511 163.562L27.0511 163.559ZM26.9759 190.285L27.683 190.992L25.969 192.706L25.9759 190.282L26.9759 190.285ZM63.0369 154.224L62.3298 153.517L63.0356 152.811L63.7427 153.516L63.0369 154.224ZM73.0874 164.237L73.7931 163.528L74.5029 164.235L73.7945 164.944L73.0874 164.237ZM36.9886 200.335V201.335H34.5744L36.2815 199.628L36.9886 200.335ZM63.7898 200.335V199.335H64.7953L64.7898 200.341L63.7898 200.335ZM63.7145 214L64.7145 214.005L64.709 215H63.7145V214ZM13.3118 214V215H12.3118V214H13.3118ZM13.3118 162.559H27.0511V164.559H13.3118V162.559ZM28.0511 163.562L27.9758 190.288L25.9759 190.282L26.0511 163.556L28.0511 163.562ZM26.2687 189.578L62.3298 153.517L63.744 154.931L27.683 190.992L26.2687 189.578ZM63.7427 153.516L73.7931 163.528L72.3816 164.945L62.3312 154.932L63.7427 153.516ZM73.7945 164.944L37.6957 201.043L36.2815 199.628L72.3803 163.53L73.7945 164.944ZM36.9886 199.335H63.7898V201.335H36.9886V199.335ZM64.7898 200.341L64.7145 214.005L62.7145 213.994L62.7898 200.33L64.7898 200.341ZM63.7145 215H13.3118V213H63.7145V215ZM12.3118 214V163.559H14.3118V214H12.3118Z"/>
                    </svg>
                </div>
            </div>
            <div class="col-md-2_3">
                <div class="row gy-3 nitems nitemsStyle stairs-items">
                    <div class="col-lg-1_2">
                        <div class="nitem nitem-style stairs-item">
                            <div class="nitem-numb-abs nitem-numb-abs-1"><span>1</span></div>
                            <h2 class="item-heading-large">
                                <span class="nitem-arrow-decor">
                                    <svg viewBox="0 0 23 22" width="23" height="22" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" fill="currentColor" d="M0.0963812 8.98858L0.0888474 13.0029L14.5373 13.0037L9.17376 18.3673L11.9233 21.0867L22.0102 10.9999L11.9158 0.905566L9.16671 3.65467L14.5298 8.98858L0.0963812 8.98858ZM10.5824 3.65315L16.9537 9.98858H1.09451L1.09073 12.0037L16.9515 12.0037L10.5919 18.3634L11.9195 19.6764L20.5959 10.9999L11.9158 2.31978L10.5824 3.65315Z"/>
                                    </svg>
                                </span>
                                <a href="{{ route('services.single') }}" class="crs">Corporate <br> Solution</a>
                            </h2>
                            <p class="item-desc">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                        </div>
                    </div>
                    <div class="col-lg-1_2">
                        <div class="nitem nitem-style stairs-item">
                            <div class="nitem-numb-abs nitem-numb-abs-2"><span>2</span></div>
                            <h2 class="item-heading-large">
                                <span class="nitem-arrow-decor">
                                    <svg viewBox="0 0 23 22" width="23" height="22" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" fill="currentColor" d="M0.0963812 8.98858L0.0888474 13.0029L14.5373 13.0037L9.17376 18.3673L11.9233 21.0867L22.0102 10.9999L11.9158 0.905566L9.16671 3.65467L14.5298 8.98858L0.0963812 8.98858ZM10.5824 3.65315L16.9537 9.98858H1.09451L1.09073 12.0037L16.9515 12.0037L10.5919 18.3634L11.9195 19.6764L20.5959 10.9999L11.9158 2.31978L10.5824 3.65315Z"/>
                                    </svg>
                                </span>
                                <a href="{{ route('services.single') }}" class="crs">Call Center Solutions</a>
                            </h2>
                            <p class="item-desc">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it.</p>
                        </div>
                    </div>
                    <div class="col-lg-1_2">
                        <div class="nitem nitem-style stairs-item">
                            <div class="nitem-numb-abs nitem-numb-abs-3"><span>3</span></div>
                            <h2 class="item-heading-large">
                                <span class="nitem-arrow-decor">
                                    <svg viewBox="0 0 23 22" width="23" height="22" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" fill="currentColor" d="M0.0963812 8.98858L0.0888474 13.0029L14.5373 13.0037L9.17376 18.3673L11.9233 21.0867L22.0102 10.9999L11.9158 0.905566L9.16671 3.65467L14.5298 8.98858L0.0963812 8.98858ZM10.5824 3.65315L16.9537 9.98858H1.09451L1.09073 12.0037L16.9515 12.0037L10.5919 18.3634L11.9195 19.6764L20.5959 10.9999L11.9158 2.31978L10.5824 3.65315Z"/>
                                    </svg>
                                </span>
                                <a href="{{ route('services.single') }}" class="crs">Cloud Development</a>
                            </h2>
                            <p class="item-desc">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised word.</p>
                        </div>
                    </div>
                    <div class="col-lg-1_2">
                        <div class="nitem nitem-style stairs-item">
                            <div class="nitem-numb-abs nitem-numb-abs-4"><span>4</span></div>
                            <h2 class="item-heading-large">
                                <span class="nitem-arrow-decor">
                                    <svg viewBox="0 0 23 22" width="23" height="22" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" fill="currentColor" d="M0.0963812 8.98858L0.0888474 13.0029L14.5373 13.0037L9.17376 18.3673L11.9233 21.0867L22.0102 10.9999L11.9158 0.905566L9.16671 3.65467L14.5298 8.98858L0.0963812 8.98858ZM10.5824 3.65315L16.9537 9.98858H1.09451L1.09073 12.0037L16.9515 12.0037L10.5919 18.3634L11.9195 19.6764L20.5959 10.9999L11.9158 2.31978L10.5824 3.65315Z"/>
                                    </svg>
                                </span>
                                <a href="{{ route('services.single') }}" class="crs">IOS/MacOS <br> Apps</a>
                            </h2>
                            <p class="item-desc">Donec rutrum congue leo eget malesuada. Cras ultricies ligula sed magna dictum porta. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.</p>
                        </div>
                    </div>
                    <div class="col-lg-1_2">
                        <div class="nitem nitem-style stairs-item">
                            <div class="nitem-numb-abs nitem-numb-abs-5"><span>5</span></div>
                            <h2 class="item-heading-large">
                                <span class="nitem-arrow-decor">
                                    <svg viewBox="0 0 23 22" width="23" height="22" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" fill="currentColor" d="M0.0963812 8.98858L0.0888474 13.0029L14.5373 13.0037L9.17376 18.3673L11.9233 21.0867L22.0102 10.9999L11.9158 0.905566L9.16671 3.65467L14.5298 8.98858L0.0963812 8.98858ZM10.5824 3.65315L16.9537 9.98858H1.09451L1.09073 12.0037L16.9515 12.0037L10.5919 18.3634L11.9195 19.6764L20.5959 10.9999L11.9158 2.31978L10.5824 3.65315Z"/>
                                    </svg>
                                </span>
                                <a href="{{ route('services.single') }}" class="crs">Android Applications</a>
                            </h2>
                            <p class="item-desc">Cras ultricies ligula sed magna dictum porta. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit.</p>
                        </div>
                    </div>
                    <div class="col-lg-1_2">
                        <div class="nitem nitem-style stairs-item">
                            <div class="nitem-numb-abs nitem-numb-abs-6"><span>6</span></div>
                            <h2 class="item-heading-large">
                                <span class="nitem-arrow-decor">
                                    <svg viewBox="0 0 23 22" width="23" height="22" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd" fill="currentColor" d="M0.0963812 8.98858L0.0888474 13.0029L14.5373 13.0037L9.17376 18.3673L11.9233 21.0867L22.0102 10.9999L11.9158 0.905566L9.16671 3.65467L14.5298 8.98858L0.0963812 8.98858ZM10.5824 3.65315L16.9537 9.98858H1.09451L1.09073 12.0037L16.9515 12.0037L10.5919 18.3634L11.9195 19.6764L20.5959 10.9999L11.9158 2.31978L10.5824 3.65315Z"/>
                                    </svg>
                                </span>
                                <a href="{{ route('services.single') }}" class="crs">UI/UX <br> Design</a>
                            </h2>
                            <p class="item-desc">Cras ultricies ligula sed magna dictum porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus.</p>
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
                                <div class="btn btn-popup-open crm mc" data-popup-id="#popup-services"><span>Get in touch</span></div>
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
        <div class="copyright">© 2023 - MargX</div>
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
                                    <a data-title="Services" href="{{ route('services') }}" class="crs"><span>Services</span></a>
                                </li>
                                <li>
                                    <a data-title="Sections" href="#!" class="crs">
                                        <span>Sections</span>
                                    </a>
                                    <ul>
                                        <li><a href="{{ route('sections.intro') }}" class="crs">Intro</a></li>
                                        <li><a href="{{ route('sections.intro-slider') }}" class="crs">Intro Slider</a></li>
                                        <li><a href="{{ route('sections.image-items') }}" class="crs">Image items</a></li>
                                        <li><a href="{{ route('sections.items-of-numbers') }}" class="crs">Items of numbers</a></li>
                                        <li><a href="{{ route('sections.icon-items') }}" class="crs">Icon items</a></li>
                                        <li><a href="{{ route('sections.brand-in-numbers') }}" class="crs">Brand in numbers</a></li>
                                        <li><a href="{{ route('sections.team') }}" class="crs">Team</a></li>
                                        <li><a href="{{ route('sections.gallery-classic') }}" class="crs">Gallery Classic</a></li>
                                        <li><a href="{{ route('sections.gallery-masonry') }}" class="crs">Gallery Masonry</a></li>
                                        <li><a href="{{ route('sections.pricing') }}" class="crs">Pricing</a></li>
                                        <li><a href="{{ route('sections.testimonials') }}" class="crs">Testimonials</a></li>
                                        <li><a href="{{ route('sections.brands') }}" class="crs">Brands</a></li>
                                        <li><a href="{{ route('sections.tabs-accordions') }}" class="crs">Tabs & Accordions</a></li>
                                        <li><a href="{{ route('sections.marquee') }}" class="crs">Marquee: scrolling area of text</a></li>
                                        <li><a href="{{ route('sections.content') }}" class="crs">Content</a></li>
                                        <li><a href="{{ route('sections.404') }}" class="crs">404</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a data-title="Features" href="{{ route('features.ui') }}" class="crs">
                                        <span>Features</span>
                                    </a>
                                    <ul>
                                        <li><a href="{{ route('features.ui') }}" class="crs">UI elements</a></li>
                                        <li><a href="{{ route('features.docs') }}" class="crs">Documentation</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a data-title="News" href="{{ route('news') }}" class="crs">
                                        <span>News</span>
                                    </a>
                                    <ul>
                                        <li><a href="{{ route('news') }}" class="crs">News list: Type 1</a></li>
                                        <li><a href="{{ route('news2') }}" class="crs">News list: Type 2</a></li>
                                        <li><a href="{{ route('news3') }}" class="crs">News list: Type 3</a></li>
                                        <li><a href="{{ route('news.grid') }}" class="crs">News grid: Type 1</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a data-title="Contact" href="{{ route('contact') }}" class="crs"><span>Contact</span></a>
                                </li>
                                <li>
                                    <a data-title="Terms" href="{{ route('terms') }}" class="crs"><span>Terms</span></a>
                                </li>
                                <li>
                                    <a data-title="Privacy" href="{{ route('privacy') }}" class="crs"><span>Privacy</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>

    <script src="https://cdn.jsdelivr.net/npm/lozad@1.16.0/dist/lozad.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollToPlugin.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/pristinejs@0.1.9/dist/pristine.min.js"></script>
    <script src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
    <script src="https://unpkg.com/flickity-imagesloaded@2/flickity-imagesloaded.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/lightgallery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/plugins/thumbnail/lg-thumbnail.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/lightgallery@2.7.2/plugins/video/lg-video.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.youtube-background/1.4.0/jquery.youtube-background.min.js"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script src="{{ asset('assets/js/animations.js') }}"></script>
    <script src="{{ asset('assets/js/grained-background.js') }}"></script>
    <script src="{{ asset('assets/js/form.js') }}"></script>

</body>
</html>

