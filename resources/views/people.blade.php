<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Ameyem Skill Labs</title>

        <!-- Fonts 
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">-->

        <!-- Styles -->





    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Ameyem') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">





        <style>
            html, body {
                background-color: #C0C0C0;
                color: #313233;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>

        
    </head>
    <body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse" aria-expanded="false">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Ameyem') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li><a href="{{ url('/') }}">Home</a></li>
                        <li class="active"><a href="{{ url('/people') }}">People</a></li>
                        <li><a href="{{ url('/tools') }}">Tools</a></li>
                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @guest
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu">
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
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
        <div class="jumbotron text-center">
        <h1>Ameyem Skill Development Programme</h1>
        <p>Powered By Ameyem Geo Solutions Private Limited</p> 
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h3><u>People At Ameyem Skill Labs</u></h3>
                         <ol>
                             <li> 
                                 <h4><a href="venkateswarlubio.html">Venkateswarlu, B-Tech(CSE)</a></h4> 
                             </li> 
                             <li> 
                                <h4><a href="VeeraPrasad.html.html">Veera Prasad, B-Tech(ECE)</a></h4>
                            </li> 
                        </ol>
                </div>

            </div>
                    
</div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
        <!--<div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">

                        <a href="{{ url('/') }}">Home</a>
                        <a href="{{ url('/people') }}">People</a>
                        <a href="{{ url('/tools') }}">Tools</a>
                        <a href="{{ url('/contact') }}">Contact</a>
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                    
                       
                    
                </div>
            @endif
            
            <div class="container">
                <div class="title m-b-md" style="width=100%; height=20%">   
                    Welcome to 
            <b>ASDP</b>
                </div>  

                <div class="links">
                    <a href="http://skills.ameyem.com/">Skills</a>
                    <a href="http://skills.ameyem.com/#skills">Why Us</a>
                    <a href="http://skills.ameyem.com/#pricing">Pricing</a>
                    <a href="http://skills.ameyem.com/#about-us">About Us</a>
                    <a href="http://skills.ameyem.com/#contact">Contact</a>
                </div> 
            </div>
        </div> --> 
    </body>
</html>
