<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('/public/css/app.css') }}" rel="stylesheet">

 <!--    <link rel="stylesheet" type="text/css" href="{{ asset('/public/front/css/bootstrap.min.css') }}"> -->
    <link rel="stylesheet" type="text/css" href="{{ asset('/public/front/css/slick.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/public/front/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('/public/front/css/style.css') }}">
</head>

<body>
    
    <div id="app">
        <?php 
            //use Illuminate\Support\Facades\Route;
            $currentPath = Route::getFacadeRoot()->current()->uri();
            if(!($currentPath == 'login' || $currentPath == 'register' || $currentPath == 'password/reset')):
        ?>
        <!-- Header Start -->
        <header class="main-header">
            <div class="container">
                <div class="row">
                    <div class="col-sm-3">
                        <div class="logo">
                            <h1>R<span>OAD</span> LINK<!-- <img src="../images/logo.png" alt="" class="img-responsive" /> --></h1>
                            <p class="tag-line">Lorem ipsum <span>sit consectetur</span></p>
                        </div>
                    </div>
                    <div class="col-sm-9">
                        <div class="top-header">                            
                            <i class="fa fa-clock-o"></i> Mon - Fri: 7:30am - 5:30pm 
                            <!-- Right Side Of Navbar -->
                           <ul class="nav navbar-nav navbar-right">
                            <!-- Authentication Links -->
                                @if (Auth::guest())
                                    <li><a href="{{ route('login') }}">Login</a></li>
                                    <li><a href="{{ route('register') }}">Register</a></li>
                                @else
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                        <ul class="dropdown-menu" role="menu">
                                            <li>
                                                <a href="{{ route('logout') }}"
                                                    onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                                    Logout
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                @endif
                            </ul> 
                        </div>
                        <!--  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                            <span class="sr-only">Toggle Navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button> -->
                        <nav class="site-nav-wrap">
                            <ul class="nav">
                                <li><a href="javascript:;" title="How it works?">How it works?</a></li>
                                <li><a href="javascript:;" title="Why us?">Why us?</a></li>
                                <li><a href="javascript:;" title="Contact">Contact</a></li>
                                <li><a href="javascript:;" title="Book Service">Book Service</a></li>
                            </ul>                           
                        </nav>
                    </div>
                </div>
            </div>
        </header>
       <?php endif ?>




        <?php /*
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Laravel') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav> */ ?>

        @yield('content')

        <?php if(!($currentPath == 'login' || $currentPath == 'register' || $currentPath == 'password/reset')):?>
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="about-ft-sec">
                            <h3 class="header-typ3">About <span>Us</span></h3>
                            <div class="ft-detail">
                                <address>Sed porttitor lectus nibh. Donec sollicitudin molestie<br />sollicitudin  Ahmedabad-382201</address>
                                <div class="other-details">
                                    <div class="row">
                                        <div class="col-md-3 col-xs-4">Mobile:</div><div class="col-md-9 col-xs-8"><a href="tel:0123456789">0123456789</a></div>
                                        <div class="col-md-3 col-xs-4">E-mail:</div><div class="col-md-9 col-xs-8"><a href="mailto:abc@abc.com">abc@abc.com</a></div>
                                    </div>
                                </div>
                                <div class="social-links">
                                    <a href="javascript:;" target="_blank"><i class="fa fa-facebook"></i></a>
                                    <a href="javascript:;" target="_blank"><i class="fa fa-twitter"></i></a>
                                    <a href="javascript:;" target="_blank"><i class="fa fa-instagram"></i></a>
                                    <a href="javascript:;" target="_blank"><i class="fa fa-pinterest"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="about-ft-sec">
                            <h3 class="header-typ3"><span>Quick</span> Links</h3>
                            <div class="ft-detail">
                                <ul id="menu-quick-links" class="menu">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Cookie Policy</a></li>
                                    <li><a href="#">Privacy Policy</a></li>
                                    <li><a href="#">Terms and Conditions</a></li>
                                    <li><a href="#">Services</a></li>       
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="about-ft-sec">
                            <h3 class="header-typ3">Working <span>Hours</span></h3>
                            <div class="ft-detail">
                                <ul class="list simple">
                                    <li><span>Monday:</span>7:30am - 5:30pm</li>
                                    <li><span>Tuesday:</span>7:30am - 5:30pm</li>
                                    <li><span>Wednesday:</span>7:30am - 5:30pm</li>
                                    <li><span>Thursday:</span>7:30am - 5:30pm</li>
                                    <li><span>Friday:</span>7:30am - 5:30pm</li>
                                    <li><span>Saturday:</span>7:30am - 3:00pm</li>
                                    <li><span>Sunday:</span>Closed</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <div class="copyright">     
            © Copyright 2018 Roadlink  
        </div>
    </div>
   <?php endif ?>
    <!-- Scripts -->
    <script src="{{ asset('/public/js/app.js') }}"></script>

    <script type="text/javascript" src="{{ asset('/public/front/js/jquery.min.js') }}"></script>
    <!-- <script type="text/javascript" src="{{ asset('/public/front/js/bootstrap.min.js') }}"></script> -->
    <script type="text/javascript" src="{{ asset('/public/front/js/slick.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/public/front/js/main.js') }}"></script>

</body>
</html>
