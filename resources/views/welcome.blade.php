<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
        html {
            line-height: 1.15;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        a {
            background-color: transparent
        }

        [hidden] {
            display: none
        }

        html {
            font-family: system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
            line-height: 1.5
        }

        *,
        :after,
        :before {
            box-sizing: border-box;
            border: 0 solid #e2e8f0
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        svg,
        video {
            display: block;
            vertical-align: middle
        }

        video {
            max-width: 100%;
            height: auto
        }

        .bg-white {
            --bg-opacity: 1;
            background-color: #fff;
            background-color: rgba(255, 255, 255, var(--bg-opacity))
        }

        .bg-gray-100 {
            --bg-opacity: 1;
            background-color: #f7fafc;
            background-color: rgba(247, 250, 252, var(--bg-opacity))
        }

        .border-gray-200 {
            --border-opacity: 1;
            border-color: #edf2f7;
            border-color: rgba(237, 242, 247, var(--border-opacity))
        }

        .border-t {
            border-top-width: 1px
        }

        .flex {
            display: flex
        }

        .grid {
            display: grid
        }

        .hidden {
            display: none
        }

        .items-center {
            align-items: center
        }

        .justify-center {
            justify-content: center
        }

        .font-semibold {
            font-weight: 600
        }

        .h-5 {
            height: 1.25rem
        }

        .h-8 {
            height: 2rem
        }

        .h-16 {
            height: 4rem
        }

        .text-sm {
            font-size: .875rem
        }

        .text-lg {
            font-size: 1.125rem
        }

        .leading-7 {
            line-height: 1.75rem
        }

        .mx-auto {
            margin-left: auto;
            margin-right: auto
        }

        .ml-1 {
            margin-left: .25rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mr-2 {
            margin-right: .5rem
        }

        .ml-2 {
            margin-left: .5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .ml-4 {
            margin-left: 1rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .ml-12 {
            margin-left: 3rem
        }

        .-mt-px {
            margin-top: -1px
        }

        .max-w-6xl {
            max-width: 72rem
        }

        .min-h-screen {
            min-height: 100vh
        }

        .overflow-hidden {
            overflow: hidden
        }

        .p-6 {
            padding: 1.5rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .pt-8 {
            padding-top: 2rem
        }

        .fixed {
            position: fixed
        }

        .relative {
            position: relative
        }

        .top-0 {
            top: 0
        }

        .right-0 {
            right: 0
        }

        .shadow {
            box-shadow: 0 1px 3px 0 rgba(0, 0, 0, .1), 0 1px 2px 0 rgba(0, 0, 0, .06)
        }

        .text-center {
            text-align: center
        }

        .text-gray-200 {
            --text-opacity: 1;
            color: #edf2f7;
            color: rgba(237, 242, 247, var(--text-opacity))
        }

        .text-gray-300 {
            --text-opacity: 1;
            color: #e2e8f0;
            color: rgba(226, 232, 240, var(--text-opacity))
        }

        .text-gray-400 {
            --text-opacity: 1;
            color: #cbd5e0;
            color: rgba(203, 213, 224, var(--text-opacity))
        }

        .text-gray-500 {
            --text-opacity: 1;
            color: #a0aec0;
            color: rgba(160, 174, 192, var(--text-opacity))
        }

        .text-gray-600 {
            --text-opacity: 1;
            color: #718096;
            color: rgba(113, 128, 150, var(--text-opacity))
        }

        .text-gray-700 {
            --text-opacity: 1;
            color: #4a5568;
            color: rgba(74, 85, 104, var(--text-opacity))
        }

        .text-gray-900 {
            --text-opacity: 1;
            color: #1a202c;
            color: rgba(26, 32, 44, var(--text-opacity))
        }

        .underline {
            text-decoration: underline
        }

        .antialiased {
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale
        }

        .w-5 {
            width: 1.25rem
        }

        .w-8 {
            width: 2rem
        }

        .w-auto {
            width: auto
        }

        .grid-cols-1 {
            grid-template-columns: repeat(1, minmax(0, 1fr))
        }

        @media (min-width:640px) {
            .sm\:rounded-lg {
                border-radius: .5rem
            }

            .sm\:block {
                display: block
            }

            .sm\:items-center {
                align-items: center
            }

            .sm\:justify-start {
                justify-content: flex-start
            }

            .sm\:justify-between {
                justify-content: space-between
            }

            .sm\:h-20 {
                height: 5rem
            }

            .sm\:ml-0 {
                margin-left: 0
            }

            .sm\:px-6 {
                padding-left: 1.5rem;
                padding-right: 1.5rem
            }

            .sm\:pt-0 {
                padding-top: 0
            }

            .sm\:text-left {
                text-align: left
            }

            .sm\:text-right {
                text-align: right
            }
        }

        @media (min-width:768px) {
            .md\:border-t-0 {
                border-top-width: 0
            }

            .md\:border-l {
                border-left-width: 1px
            }

            .md\:grid-cols-2 {
                grid-template-columns: repeat(2, minmax(0, 1fr))
            }
        }

        @media (min-width:1024px) {
            .lg\:px-8 {
                padding-left: 2rem;
                padding-right: 2rem
            }
        }

        @media (prefers-color-scheme:dark) {
            .dark\:bg-gray-800 {
                --bg-opacity: 1;
                background-color: #2d3748;
                background-color: rgba(45, 55, 72, var(--bg-opacity))
            }

            .dark\:bg-gray-900 {
                --bg-opacity: 1;
                background-color: #1a202c;
                background-color: rgba(26, 32, 44, var(--bg-opacity))
            }

            .dark\:border-gray-700 {
                --border-opacity: 1;
                border-color: #4a5568;
                border-color: rgba(74, 85, 104, var(--border-opacity))
            }

            .dark\:text-white {
                --text-opacity: 1;
                color: #fff;
                color: rgba(255, 255, 255, var(--text-opacity))
            }

            .dark\:text-gray-400 {
                --text-opacity: 1;
                color: #cbd5e0;
                color: rgba(203, 213, 224, var(--text-opacity))
            }
        }
    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>

    <!-- Template -->
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Bootstrap, Landing page, Template, Business, Service">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="author" content="Grayrids">
    <title>Slick - Bootstrap 4 Template</title>
    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="img/2.png" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/LineIcons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nivo-lightbox.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">

</head>
<!-- Header Section Start -->
<header id="home" class="hero-area">
    <div class="overlay">
        <span></span>
        <span></span>
    </div>
    <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
        <div class="container">
            <a href="index.html" class="navbar-brand"><img src="img/logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="lni-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto w-100 justify-content-end">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#services">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#features">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#showcase">Showcase</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#pricing">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#team">Team</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#blog">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="#contact">Contact</a>
                    </li>
                    @guest
                    @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="{{ route('login') }}">Login</a>
                    </li>
                    @endif
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="{{ route('register') }}">Register</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                    <!-- <li class="nav-item">
                <a class="btn btn-singin" href="#">Download</a>
              </li> -->
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row space-100">
            <div class="col-lg-6 col-md-12 col-xs-12">
                <div class="contents">
                    <h2 class="head-title">Handcrafted Web Template <br>For Business and Startups</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab <br>dolores ea fugiat nesciunt quisquam.</p>
                    <div class="header-button">
                        <a href="#" class="btn btn-border-filled">Get Started</a>
                        <a href="#contact" class="btn btn-border page-scroll">Contact Us</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-xs-12 p-0">
                <div class="intro-img">
                    <img src="img/intro.png" alt="">
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header Section End -->


<!-- Services Section Start -->
<section id="services" class="section">
    <div class="container">

        <div class="row">
            <!-- Start Col -->
            <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="services-item text-center">
                    <div class="icon">
                        <i class="lni-cog"></i>
                    </div>
                    <h4>Bootstrap 4</h4>
                    <p>Share processes and data secure lona need to know basis Our team assured your web site is always safe.</p>
                </div>
            </div>
            <!-- End Col -->
            <!-- Start Col -->
            <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="services-item text-center">
                    <div class="icon">
                        <i class="lni-brush"></i>
                    </div>
                    <h4>Slick Design</h4>
                    <p>Share processes and data secure lona need to know basis Our team assured your web site is always safe.</p>
                </div>
            </div>
            <!-- End Col -->
            <!-- Start Col -->
            <div class="col-lg-4 col-md-6 col-xs-12">
                <div class="services-item text-center">
                    <div class="icon">
                        <i class="lni-heart"></i>
                    </div>
                    <h4>Crafted with Love</h4>
                    <p>Share processes and data secure lona need to know basis Our team assured your web site is always safe.</p>
                </div>
            </div>
            <!-- End Col -->

        </div>
    </div>
</section>
<!-- Services Section End -->



<!-- Business Plan Section Start -->
<section id="business-plan">
    <div class="container">

        <div class="row">
            <!-- Start Col -->
            <div class="col-lg-6 col-md-12 pl-0 pt-70 pr-5">
                <div class="business-item-img">
                    <img src="img/business/business-img.png" class="img-fluid" alt="">
                </div>
            </div>
            <!-- End Col -->
            <!-- Start Col -->
            <div class="col-lg-6 col-md-12 pl-4">
                <div class="business-item-info">
                    <h3>Crafted For Business, Startup and Agency Websites</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do <br> tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim <br> veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea <br> commodo consequat. Duis aute irure dolor in reprehenderit in voluptate <br> velit esse cillum dolore eu fugiat nulla pariatur.</p>

                    <a class="btn btn-common" href="#">download</a>
                </div>
            </div>
            <!-- End Col -->

        </div>
    </div>
</section>
<!-- Business Plan Section End -->



<!-- Cool Fetatures Section Start -->
<section id="features" class="section">
    <div class="container">
        <!-- Start Row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="features-text section-header text-center">
                    <div>
                        <h2 class="section-title">Services We Provide</h2>
                        <div class="desc-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do <br> eiusmod tempor incididunt ut labore et dolore.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- End Row -->
        <!-- Start Row -->
        <div class="row featured-bg">
            <!-- Start Col -->
            <div class="col-lg-6 col-md-6 col-xs-12 p-0">
                <!-- Start Fetatures -->
                <div class="feature-item featured-border1">
                    <div class="feature-icon float-left">
                        <i class="lni-coffee-cup"></i>
                    </div>
                    <div class="feature-info float-left">
                        <h4>Easy to Customize</h4>
                        <p>Producing long lasting organic SEO results for <br> brand of different kinds for more than a decade,<br> we understand that’s your.</p>
                    </div>
                </div>
                <!-- End Fetatures -->
            </div>
            <!-- End Col -->

            <!-- Start Col -->
            <div class="col-lg-6 col-md-6 col-xs-12 p-0">
                <!-- Start Fetatures -->
                <div class="feature-item featured-border2">
                    <div class="feature-icon float-left">
                        <i class="lni-briefcase"></i>
                    </div>
                    <div class="feature-info float-left">
                        <h4>Business Template</h4>
                        <p>Producing long lasting organic SEO results for <br> brand of different kinds for more than a decade,<br> we understand that’s your.</p>
                    </div>
                </div>
                <!-- End Fetatures -->
            </div>
            <!-- End Col -->

            <!-- Start Col -->
            <div class="col-lg-6 col-md-6 col-xs-12 p-0">
                <!-- Start Fetatures -->
                <div class="feature-item featured-border1">
                    <div class="feature-icon float-left">
                        <i class="lni-invention"></i>
                    </div>
                    <div class="feature-info float-left">
                        <h4>Clean & Trendy Design</h4>
                        <p>Producing long lasting organic SEO results for <br> brand of different kinds for more than a decade,<br> we understand that’s your.</p>
                    </div>
                </div>
                <!-- End Fetatures -->
            </div>
            <!-- End Col -->

            <!-- Start Col -->
            <div class="col-lg-6 col-md-6 col-xs-12 p-0">
                <!-- Start Fetatures -->
                <div class="feature-item featured-border2">
                    <div class="feature-icon float-left">
                        <i class="lni-layers"></i>
                    </div>
                    <div class="feature-info float-left">
                        <h4>Tons of Sections</h4>
                        <p>Producing long lasting organic SEO results for <br> brand of different kinds for more than a decade,<br> we understand that’s your.</p>
                    </div>
                </div>
                <!-- End Fetatures -->
            </div>
            <!-- End Col -->

            <!-- Start Col -->
            <div class="col-lg-6 col-md-6 col-xs-12 p-0">
                <!-- Start Fetatures -->
                <div class="feature-item featured-border3">
                    <div class="feature-icon float-left">
                        <i class="lni-reload"></i>
                    </div>
                    <div class="feature-info float-left">
                        <h4>Free Future Updates</h4>
                        <p>Producing long lasting organic SEO results for <br> brand of different kinds for more than a decade,<br> we understand that’s your.</p>
                    </div>
                </div>
                <!-- End Fetatures -->
            </div>
            <!-- End Col -->

            <!-- Start Col -->
            <div class="col-lg-6 col-md-6 col-xs-12 p-0">
                <!-- Start Fetatures -->
                <div class="feature-item">
                    <div class="feature-icon float-left">
                        <i class="lni-support"></i>
                    </div>
                    <div class="feature-info float-left">
                        <h4>Premier Support</h4>
                        <p>Producing long lasting organic SEO results for <br> brand of different kinds for more than a decade,<br> we understand that’s your.</p>
                    </div>
                </div>
                <!-- End Fetatures -->
            </div>
            <!-- End Col -->


        </div>
        <!-- End Row -->
    </div>
</section>
<!-- Cool Fetatures Section End -->


<!-- Recent Showcase Section Start -->
<section id="showcase">
    <div class="container-fluid right-position">
        <!-- Start Row -->
        <div class="row gradient-bg">
            <div class="col-lg-12">
                <div class="showcase-text section-header text-center">
                    <div>
                        <h2 class="section-title">Recent Works</h2>
                        <div class="desc-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
                            <p>eiusmod tempor incididunt ut labore et dolore.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- End Row -->
        <!-- Start Row -->
        <div class="row justify-content-center showcase-area">
            <div class="col-lg-12 col-md-12 col-xs-12 pr-0">
                <div class="showcase-slider owl-carousel">
                    <div class="item">
                        <div class="screenshot-thumb">
                            <img src="img/showcase/01.jpg" class="img-fluid" alt="" />
                            <div class="hover-content text-center">
                                <div class="fancy-table">
                                    <div class="table-cell">
                                        <div class="single-text">
                                            <p>Icon , Web</p>
                                            <h5>Redesign Slack</h5>
                                        </div>
                                        <div class="zoom-icon">
                                            <a class="lightbox" href="img/showcase/01.jpg"><i class="lni-zoom-in"></i></a>
                                            <a href="#"><i class="lni-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="item">
                        <div class="screenshot-thumb">
                            <img src="img/showcase/02.jpg" class="img-fluid" alt="" />
                            <div class="hover-content text-center">
                                <div class="fancy-table">
                                    <div class="table-cell">
                                        <div class="single-text">
                                            <p>Icon , Web</p>
                                            <h5>Redesign Slack</h5>
                                        </div>
                                        <div class="zoom-icon">
                                            <a class="lightbox" href="img/showcase/02.jpg"><i class="lni-zoom-in"></i></a>
                                            <a href="#"><i class="lni-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="screenshot-thumb">
                            <img src="img/showcase/03.jpg" class="img-fluid" alt="" />
                            <div class="hover-content text-center">
                                <div class="fancy-table">
                                    <div class="table-cell">
                                        <div class="single-text">
                                            <p>Icon , Web</p>
                                            <h5>Redesign Slack</h5>
                                        </div>
                                        <div class="zoom-icon">
                                            <a class="lightbox" href="img/showcase/03.jpg"><i class="lni-zoom-in"></i></a>
                                            <a href="#"><i class="lni-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="screenshot-thumb">
                            <img src="img/showcase/04.jpg" class="img-fluid" alt="" />
                            <div class="hover-content text-center">
                                <div class="fancy-table">
                                    <div class="table-cell">
                                        <div class="single-text">
                                            <p>Icon , Web</p>
                                            <h5>Redesign Slack</h5>
                                        </div>
                                        <div class="zoom-icon">
                                            <a class="lightbox" href="img/showcase/04.jpg"><i class="lni-zoom-in"></i></a>
                                            <a href="#"><i class="lni-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="screenshot-thumb">
                            <img src="img/showcase/05.jpg" class="img-fluid" alt="" />
                            <div class="hover-content text-center">
                                <div class="fancy-table">
                                    <div class="table-cell">
                                        <div class="single-text">
                                            <p>Icon , Web</p>
                                            <h5>Redesign Slack</h5>
                                        </div>
                                        <div class="zoom-icon">
                                            <a class="lightbox" href="img/showcase/05.jpg"><i class="lni-zoom-in"></i></a>
                                            <a href="#"><i class="lni-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="screenshot-thumb">
                            <img src="img/showcase/01.jpg" class="img-fluid" alt="" />
                            <div class="hover-content text-center">
                                <div class="fancy-table">
                                    <div class="table-cell">
                                        <div class="single-text">
                                            <p>Icon , Web</p>
                                            <h5>Redesign Slack</h5>
                                        </div>
                                        <div class="zoom-icon">
                                            <a class="lightbox" href="img/showcase/01.jpg"><i class="lni-zoom-in"></i></a>
                                            <a href="#"><i class="lni-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="item">
                        <div class="screenshot-thumb">
                            <img src="img/showcase/02.jpg" class="img-fluid" alt="" />
                            <div class="hover-content text-center">
                                <div class="fancy-table">
                                    <div class="table-cell">
                                        <div class="single-text">
                                            <p>Icon , Web</p>
                                            <h5>Redesign Slack</h5>
                                        </div>
                                        <div class="zoom-icon">
                                            <a class="lightbox" href="img/showcase/02.jpg"><i class="lni-zoom-in"></i></a>
                                            <a href="#"><i class="lni-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="screenshot-thumb">
                            <img src="img/showcase/03.jpg" class="img-fluid" alt="" />
                            <div class="hover-content text-center">
                                <div class="fancy-table">
                                    <div class="table-cell">
                                        <div class="single-text">
                                            <p>Icon , Web</p>
                                            <h5>Redesign Slack</h5>
                                        </div>
                                        <div class="zoom-icon">
                                            <a class="lightbox" href="img/showcase/03.jpg"><i class="lni-zoom-in"></i></a>
                                            <a href="#"><i class="lni-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="screenshot-thumb">
                            <img src="img/showcase/04.jpg" class="img-fluid" alt="" />
                            <div class="hover-content text-center">
                                <div class="fancy-table">
                                    <div class="table-cell">
                                        <div class="single-text">
                                            <p>Icon , Web</p>
                                            <h5>Redesign Slack</h5>
                                        </div>
                                        <div class="zoom-icon">
                                            <a class="lightbox" href="img/showcase/04.jpg"><i class="lni-zoom-in"></i></a>
                                            <a href="#"><i class="lni-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="screenshot-thumb">
                            <img src="img/showcase/05.jpg" class="img-fluid" alt="" />
                            <div class="hover-content text-center">
                                <div class="fancy-table">
                                    <div class="table-cell">
                                        <div class="single-text">
                                            <p>Icon , Web</p>
                                            <h5>Redesign Slack</h5>
                                        </div>
                                        <div class="zoom-icon">
                                            <a class="lightbox" href="img/showcase/05.jpg"><i class="lni-zoom-in"></i></a>
                                            <a href="#"><i class="lni-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="screenshot-thumb">
                            <img src="img/showcase/01.jpg" class="img-fluid" alt="" />
                            <div class="hover-content text-center">
                                <div class="fancy-table">
                                    <div class="table-cell">
                                        <div class="single-text">
                                            <p>Icon , Web</p>
                                            <h5>Redesign Slack</h5>
                                        </div>
                                        <div class="zoom-icon">
                                            <a class="lightbox" href="img/showcase/01.jpg"><i class="lni-zoom-in"></i></a>
                                            <a href="#"><i class="lni-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="item">
                        <div class="screenshot-thumb">
                            <img src="img/showcase/02.jpg" class="img-fluid" alt="" />
                            <div class="hover-content text-center">
                                <div class="fancy-table">
                                    <div class="table-cell">
                                        <div class="single-text">
                                            <p>Icon , Web</p>
                                            <h5>Redesign Slack</h5>
                                        </div>
                                        <div class="zoom-icon">
                                            <a class="lightbox" href="img/showcase/01.jpg"><i class="lni-zoom-in"></i></a>
                                            <a href="#"><i class="lni-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="screenshot-thumb">
                            <img src="img/showcase/03.jpg" class="img-fluid" alt="" />
                            <div class="hover-content text-center">
                                <div class="fancy-table">
                                    <div class="table-cell">
                                        <div class="single-text">
                                            <p>Icon , Web</p>
                                            <h5>Redesign Slack</h5>
                                        </div>
                                        <div class="zoom-icon">
                                            <a class="lightbox" href="img/showcase/01.jpg"><i class="lni-zoom-in"></i></a>
                                            <a href="#"><i class="lni-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="screenshot-thumb">
                            <img src="img/showcase/04.jpg" class="img-fluid" alt="" />
                            <div class="hover-content text-center">
                                <div class="fancy-table">
                                    <div class="table-cell">
                                        <div class="single-text">
                                            <p>Icon , Web</p>
                                            <h5>Redesign Slack</h5>
                                        </div>
                                        <div class="zoom-icon">
                                            <a class="lightbox" href="img/showcase/01.jpg"><i class="lni-zoom-in"></i></a>
                                            <a href="#"><i class="lni-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="screenshot-thumb">
                            <img src="img/showcase/05.jpg" class="img-fluid" alt="" />
                            <div class="hover-content text-center">
                                <div class="fancy-table">
                                    <div class="table-cell">
                                        <div class="single-text">
                                            <p>Icon , Web</p>
                                            <h5>Redesign Slack</h5>
                                        </div>
                                        <div class="zoom-icon">
                                            <a class="lightbox" href="img/showcase/01.jpg"><i class="lni-zoom-in"></i></a>
                                            <a href="#"><i class="lni-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="screenshot-thumb">
                            <img src="img/showcase/01.jpg" class="img-fluid" alt="" />
                            <div class="hover-content text-center">
                                <div class="fancy-table">
                                    <div class="table-cell">
                                        <div class="single-text">
                                            <p>Icon , Web</p>
                                            <h5>Redesign Slack</h5>
                                        </div>
                                        <div class="zoom-icon">
                                            <a class="lightbox" href="img/showcase/01.jpg"><i class="lni-zoom-in"></i></a>
                                            <a href="#"><i class="lni-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="item">
                        <div class="screenshot-thumb">
                            <img src="img/showcase/02.jpg" class="img-fluid" alt="" />
                            <div class="hover-content text-center">
                                <div class="fancy-table">
                                    <div class="table-cell">
                                        <div class="single-text">
                                            <p>Icon , Web</p>
                                            <h5>Redesign Slack</h5>
                                        </div>
                                        <div class="zoom-icon">
                                            <a class="lightbox" href="img/showcase/01.jpg"><i class="lni-zoom-in"></i></a>
                                            <a href="#"><i class="lni-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="screenshot-thumb">
                            <img src="img/showcase/03.jpg" class="img-fluid" alt="" />
                            <div class="hover-content text-center">
                                <div class="fancy-table">
                                    <div class="table-cell">
                                        <div class="single-text">
                                            <p>Icon , Web</p>
                                            <h5>Redesign Slack</h5>
                                        </div>
                                        <div class="zoom-icon">
                                            <a class="lightbox" href="img/showcase/01.jpg"><i class="lni-zoom-in"></i></a>
                                            <a href="#"><i class="lni-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="screenshot-thumb">
                            <img src="img/showcase/04.jpg" class="img-fluid" alt="" />
                            <div class="hover-content text-center">
                                <div class="fancy-table">
                                    <div class="table-cell">
                                        <div class="single-text">
                                            <p>Icon , Web</p>
                                            <h5>Redesign Slack</h5>
                                        </div>
                                        <div class="zoom-icon">
                                            <a class="lightbox" href="img/showcase/01.jpg"><i class="lni-zoom-in"></i></a>
                                            <a href="#"><i class="lni-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="screenshot-thumb">
                            <img src="img/showcase/05.jpg" class="img-fluid" alt="" />
                            <div class="hover-content text-center">
                                <div class="fancy-table">
                                    <div class="table-cell">
                                        <div class="single-text">
                                            <p>Icon , Web</p>
                                            <h5>Redesign Slack</h5>
                                        </div>
                                        <div class="zoom-icon">
                                            <a class="lightbox" href="img/showcase/01.jpg"><i class="lni-zoom-in"></i></a>
                                            <a href="#"><i class="lni-link"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
        </div>
        <!-- End Row -->
    </div>
</section>
<!-- Recent Showcase Section End -->

<!-- Our Pricing Plan Section Start -->
<section id="pricing" class="section">
    <div class="container">
        <!-- Start Row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="pricing-text section-header text-center">
                    <div>
                        <h2 class="section-title">Pricing Plans</h2>
                        <div class="desc-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
                            <p>eiusmod tempor incididunt ut labore et dolore.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- End Row -->
        <!-- Start Row -->
        <div class="row pricing-tables">
            <!--  Start Col -->
            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="pricing-table text-center">
                    <div class="pricing-details">
                        <h3>Free</h3>
                        <h1><span>$</span>00</h1>
                        <ul>
                            <li>Free Instalation</li>
                            <li>500MB Storage</li>
                            <li>Single User</li>
                            <li>5 GB Bandwith</li>
                            <li>Minimal Features</li>
                            <li>No Dashboard</li>
                        </ul>
                    </div>
                    <div class="plan-button">
                        <a href="#" class="btn btn-border">Purchase</a>
                    </div>
                </div>
            </div>
            <!--  End Col -->
            <!--  Start Col -->
            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="pricing-table text-center">
                    <div class="pricing-details">
                        <h3>standard</h3>
                        <h1><span>$</span>19.99</h1>
                        <ul>
                            <li>Free Instalation</li>
                            <li>2 GB Storage</li>
                            <li>Upto 2 users</li>
                            <li>50 GB Bandwith</li>
                            <li>All Features</li>
                            <li>Sales Dashboard</li>
                        </ul>
                    </div>
                    <div class="plan-button">
                        <a href="#" class="btn btn-common">Purchase</a>
                    </div>
                </div>
            </div>
            <!--  End Col -->
            <!--  Start Col -->
            <div class="col-lg-4 col-md-4 col-xs-12">
                <div class="pricing-table text-center">
                    <div class="pricing-details">
                        <h3>Business</h3>
                        <h1><span>$</span>29.99</h1>
                        <ul>
                            <li>Free Instalation</li>
                            <li>5 GB Storage</li>
                            <li>Upto 4 users</li>
                            <li>100 GB Bandwith</li>
                            <li>All Features</li>
                            <li>Sales Dashboard</li>
                        </ul>
                    </div>
                    <div class="plan-button">
                        <a href="#" class="btn btn-border">Purchase</a>
                    </div>
                </div>
            </div>
            <!--  End Col -->

        </div>
        <!-- End Row -->
    </div>
</section>
<!-- Our Pricing Plan Section End -->

<!-- Client Testimoninals Section Start -->
<section id="testimonial" class="section">
    <div class="container right-position">
        <!-- Start Row -->
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="video-promo-content text-center">

                    <a id="play-video" class="video-play-button video-popup" href="https://www.youtube.com/watch?v=Y4fodpIwal8&list=RDXCElIIYx_8s&index=13">
                        <span></span>
                    </a>

                </div>
            </div>
        </div>
        <!-- End Row -->
        <!-- Start Row -->
        <div class="row justify-content-center testimonial-area">
            <div class="col-lg-10 col-md-12 col-sm-12 col-xs-12 pr-20 pl-20" style="overflow: hidden;padding-bottom: 60px">
                <div id="client-testimonial" class="text-center owl-carousel">
                    <div class="item">
                        <div class="testimonial-item">
                            <div class="content-inner">
                                <p class="description">Appropriately implement one-to-one catalysts for change <br> vis-a-vis wireless catalysts for change. Enthusiastically architect <br> adaptive e-tailers after sustainable total linkage. Appropriately <br> implement one-to-one catalysts for change.</p>
                                <div class="author-info">
                                    <h5>Tahmina Anny ; <span> UIdeck Customer</span></h5>
                                </div>
                            </div>
                            <div class="client-thumb">
                                <img src="img/testimonial/01.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-item">
                            <div class="content-inner">
                                <p class="description">Appropriately implement one-to-one catalysts for change <br> vis-a-vis wireless catalysts for change. Enthusiastically architect <br> adaptive e-tailers after sustainable total linkage. Appropriately <br> implement one-to-one catalysts for change.</p>
                                <div class="author-info">
                                    <h5>Tahmina Anny ; <span> UIdeck Customer</span></h5>
                                </div>
                            </div>
                            <div class="client-thumb">
                                <img src="img/testimonial/01.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-item">
                            <div class="content-inner">
                                <p class="description">Appropriately implement one-to-one catalysts for change <br> vis-a-vis wireless catalysts for change. Enthusiastically architect <br> adaptive e-tailers after sustainable total linkage. Appropriately <br> implement one-to-one catalysts for change.</p>
                                <div class="author-info">
                                    <h5>Tahmina Anny ; <span> UIdeck Customer</span></h5>
                                </div>
                            </div>
                            <div class="client-thumb">
                                <img src="img/testimonial/01.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-item">
                            <div class="content-inner">
                                <p class="description">Appropriately implement one-to-one catalysts for change <br> vis-a-vis wireless catalysts for change. Enthusiastically architect <br> adaptive e-tailers after sustainable total linkage. Appropriately <br> implement one-to-one catalysts for change.</p>
                                <div class="author-info">
                                    <h5>Tahmina Anny ; <span> UIdeck Customer</span></h5>
                                </div>
                            </div>
                            <div class="client-thumb">
                                <img src="img/testimonial/01.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-item">
                            <div class="content-inner">
                                <p class="description">Appropriately implement one-to-one catalysts for change <br> vis-a-vis wireless catalysts for change. Enthusiastically architect <br> adaptive e-tailers after sustainable total linkage. Appropriately <br> implement one-to-one catalysts for change.</p>
                                <div class="author-info">
                                    <h5>Tahmina Anny ; <span> UIdeck Customer</span></h5>
                                </div>
                            </div>
                            <div class="client-thumb">
                                <img src="img/testimonial/01.png" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-item">
                            <div class="content-inner">
                                <p class="description">Appropriately implement one-to-one catalysts for change <br> vis-a-vis wireless catalysts for change. Enthusiastically architect <br> adaptive e-tailers after sustainable total linkage. Appropriately <br> implement one-to-one catalysts for change.</p>
                                <div class="author-info">
                                    <h5>Tahmina Anny ; <span> UIdeck Customer</span></h5>
                                </div>
                            </div>
                            <div class="client-thumb">
                                <img src="img/testimonial/01.png" alt="">
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- End Row -->
    </div>
</section>
<!-- Client Testimoninals Section End -->


<!-- Team section Start -->
<section id="team" class="section">
    <div class="container">
        <!-- Start Row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="team-text section-header text-center">
                    <div>
                        <h2 class="section-title">Team Members</h2>
                        <div class="desc-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
                            <p>eiusmod tempor incididunt ut labore et dolore.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- End Row -->
        <!-- Start Row -->
        <div class="row">
            <!-- Start Col -->
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="single-team">
                    <div class="team-thumb">
                        <img src="img/team/01.jpg" class="img-fluid" alt="">
                    </div>

                    <div class="team-details">
                        <div class="team-social-icons">
                            <ul class="social-list">
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-filled"></i></a></li>
                                <li><a href="#"><i class="lni-google-plus"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-inner text-center">
                            <h5 class="team-title">Patric Green</h5>
                            <p>Lead Designer</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Col -->

            <!-- Start Col -->
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="single-team">
                    <div class="team-thumb">
                        <img src="img/team/02.jpg" class="img-fluid" alt="">
                    </div>

                    <div class="team-details">
                        <div class="team-social-icons">
                            <ul class="social-list">
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-filled"></i></a></li>
                                <li><a href="#"><i class="lni-google-plus"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-inner text-center">
                            <h5 class="team-title">Celina D Cruze</h5>
                            <p>Front-end Developer</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Col -->

            <!-- Start Col -->
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="single-team">
                    <div class="team-thumb">
                        <img src="img/team/03.jpg" class="img-fluid" alt="">
                    </div>

                    <div class="team-details">
                        <div class="team-social-icons">
                            <ul class="social-list">
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-filled"></i></a></li>
                                <li><a href="#"><i class="lni-google-plus"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-inner text-center">
                            <h5 class="team-title">Daryl Dixon</h5>
                            <p>Content Writer</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Col -->

            <!-- Start Col -->
            <div class="col-lg-3 col-md-6 col-xs-12">
                <div class="single-team">
                    <div class="team-thumb">
                        <img src="img/team/04.jpg" class="img-fluid" alt="">
                    </div>

                    <div class="team-details">
                        <div class="team-social-icons">
                            <ul class="social-list">
                                <li><a href="#"><i class="lni-facebook-filled"></i></a></li>
                                <li><a href="#"><i class="lni-twitter-filled"></i></a></li>
                                <li><a href="#"><i class="lni-google-plus"></i></a></li>
                            </ul>
                        </div>
                        <div class="team-inner text-center">
                            <h5 class="team-title">Mark Parker</h5>
                            <p>Support Engineer</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Col -->


        </div>
        <!-- End Row -->
    </div>
</section>
<!-- Team section End -->


<!-- Blog Section -->
<section id="blog" class="section">
    <!-- Container Starts -->
    <div class="container">
        <!-- Start Row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="blog-text section-header text-center">
                    <div>
                        <h2 class="section-title">Latest Blog Posts</h2>
                        <div class="desc-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
                            <p>eiusmod tempor incididunt ut labore et dolore.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- End Row -->
        <!-- Start Row -->
        <div class="row">
            <!-- Start Col -->
            <div class="col-lg-4 col-md-6 col-xs-12 blog-item">
                <!-- Blog Item Starts -->
                <div class="blog-item-wrapper">
                    <div class="blog-item-img">
                        <a href="single-post.html">
                            <img src="img/blog/01.jpg" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="blog-item-text">
                        <h3><a href="single-post.html">How Slick Will Transform <br>Your Business</a></h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
                        <a href="" class="read-more">5 Min read</a>
                    </div>
                    <div class="author">
                        <span class="name"><i class="lni-user"></i><a href="#">Posted by Admin</a></span>
                        <span class="date float-right"><i class="lni-calendar"></i><a href="#">10 April, 2020</a></span>
                    </div>
                </div>
                <!-- Blog Item Wrapper Ends-->
            </div>
            <!-- End Col -->
            <!-- Start Col -->
            <div class="col-lg-4 col-md-6 col-xs-12 blog-item">
                <!-- Blog Item Starts -->
                <div class="blog-item-wrapper">
                    <div class="blog-item-img">
                        <a href="single-post.html">
                            <img src="img/blog/02.jpg" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="blog-item-text">
                        <h3><a href="single-post.html">Growth Techniques for <br>New Startups</a></h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
                        <a href="" class="read-more">5 Min read</a>
                    </div>
                    <div class="author">
                        <span class="name"><i class="lni-user"></i><a href="#">Posted by Admin</a></span>
                        <span class="date float-right"><i class="lni-calendar"></i><a href="#">10 April, 2020</a></span>
                    </div>
                </div>
                <!-- Blog Item Wrapper Ends-->
            </div>
            <!-- End Col -->
            <!-- Start Col -->
            <div class="col-lg-4 col-md-6 col-xs-12 blog-item">
                <!-- Blog Item Starts -->
                <div class="blog-item-wrapper">
                    <div class="blog-item-img">
                        <a href="single-post.html">
                            <img src="img/blog/03.jpg" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="blog-item-text">
                        <h3><a href="single-post.html">Writing Professional <br>Emails to Customers</a></h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
                        <a href="" class="read-more">5 Min read</a>
                    </div>
                    <div class="author">
                        <span class="name"><i class="lni-user"></i><a href="#">Posted by Admin</a></span>
                        <span class="date float-right"><i class="lni-calendar"></i><a href="#">10 April, 2020</a></span>
                    </div>
                </div>
                <!-- Blog Item Wrapper Ends-->
            </div>
            <!-- End Col -->

        </div>
        <!-- End Row -->
    </div>
</section>
<!-- blog Section End -->

<!-- Contact Us Section -->
<section id="contact" class="section">
    <!-- Container Starts -->
    <div class="container">
        <!-- Start Row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="contact-text section-header text-center">
                    <div>
                        <h2 class="section-title">Get In Touch</h2>
                        <div class="desc-text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
                            <p>eiusmod tempor incididunt ut labore et dolore.</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- End Row -->
        <!-- Start Row -->
        <div class="row">
            <!-- Start Col -->
            <div class="col-lg-6 col-md-12">
                <form id="contactForm">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Name" required data-error="Please enter your name">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" placeholder="Subject" id="msg_subject" class="form-control" name="msg_subject" required data-error="Please enter your subject">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control" id="email" name="email" placeholder="Email" required data-error="Please enter your Email">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" placeholder="Budget" id="budget" class="form-control" name="budget" required data-error="Please enter your Budget">
                                <div class="help-block with-errors"></div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea class="form-control" id="message" name="message" placeholder="Write Message" rows="4" data-error="Write your message" required></textarea>
                                <div class="help-block with-errors"></div>
                            </div>
                            <div class="submit-button">
                                <button class="btn btn-common" id="submit" type="submit">Submit</button>
                                <div id="msgSubmit" class="h3 hidden"></div>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- End Col -->
            <!-- Start Col -->
            <div class="col-lg-1">

            </div>
            <!-- End Col -->
            <!-- Start Col -->
            <div class="col-lg-4 col-md-12">
                <div class="contact-img">
                    <img src="img/contact/01.png" class="img-fluid" alt="">
                </div>
            </div>
            <!-- End Col -->
            <!-- Start Col -->
            <div class="col-lg-1">
            </div>
            <!-- End Col -->

        </div>
        <!-- End Row -->
    </div>
</section>
<!-- Contact Us Section End -->

<!-- Footer Section Start -->
<footer>
    <!-- Footer Area Start -->
    <section id="footer-Content">
        <div class="container">
            <!-- Start Row -->
            <div class="row">

                <!-- Start Col -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">

                    <div class="footer-logo">
                        <img src="img/footer-logo.png" alt="">
                    </div>
                </div>
                <!-- End Col -->
                <!-- Start Col -->
                <div class="col-lg-2 col-md-6 col-sm-6 col-xs-6 col-mb-12">
                    <div class="widget">
                        <h3 class="block-title">Company</h3>
                        <ul class="menu">
                            <li><a href="#"> - About Us</a></li>
                            <li><a href="#">- Career</a></li>
                            <li><a href="#">- Blog</a></li>
                            <li><a href="#">- Press</a></li>
                        </ul>
                    </div>
                </div>
                <!-- End Col -->
                <!-- Start Col -->
                <div class="col-lg-2 col-md-6 col-sm-6 col-xs-6 col-mb-12">
                    <div class="widget">
                        <h3 class="block-title">Product</h3>
                        <ul class="menu">
                            <li><a href="#"> - Customer Service</a></li>
                            <li><a href="#">- Enterprise</a></li>
                            <li><a href="#">- Price</a></li>
                            <li><a href="#">- Scurity</a></li>
                            <li><a href="#">- Why SLICK?</a></li>
                        </ul>
                    </div>
                </div>
                <!-- End Col -->
                <!-- Start Col -->
                <div class="col-lg-2 col-md-6 col-sm-6 col-xs-6 col-mb-12">
                    <div class="widget">
                        <h3 class="block-title">Download App</h3>
                        <ul class="menu">
                            <li><a href="#"> - Android App</a></li>
                            <li><a href="#">- IOS App</a></li>
                            <li><a href="#">- Windows App</a></li>
                            <li><a href="#">- Play Store</a></li>
                            <li><a href="#">- IOS Store</a></li>
                        </ul>
                    </div>
                </div>
                <!-- End Col -->
                <!-- Start Col -->
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
                    <div class="widget">
                        <h3 class="block-title">Subscribe Now</h3>
                        <p>Appropriately implement calysts for change visa wireless catalysts for change. </p>
                        <div class="subscribe-area">
                            <input type="email" class="form-control" placeholder="Enter Email">
                            <span><i class="lni-chevron-right"></i></span>
                        </div>
                    </div>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->
        </div>
        <!-- Copyright Start  -->

        <div class="copyright">
            <div class="container">
                <!-- Star Row -->
                <div class="row">
                    <div class="col-md-12">
                        <div class="site-info text-center">
                            <p>Crafted by <a href="http://uideck.com" rel="nofollow">UIdeck</a></p>
                        </div>

                    </div>
                    <!-- End Col -->
                </div>
                <!-- End Row -->
            </div>
        </div>
        <!-- Copyright End -->
    </section>
    <!-- Footer area End -->

</footer>
<!-- Footer Section End -->


<!-- Go To Top Link -->
<a href="#" class="back-to-top">
    <i class="lni-chevron-up"></i>
</a>

<!-- Preloader -->
<div id="preloader">
    <div class="loader" id="loader-1"></div>
</div>
<!-- End Preloader -->

<!-- jQuery first, then Tether, then Bootstrap JS. -->
<script src="js/jquery-min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="js/jquery.nav.js"></script>
<script src="js/scrolling-nav.js"></script>
<script src="js/jquery.easing.min.js"></script>
<script src="js/nivo-lightbox.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/main.js"></script>

</body>

</html>