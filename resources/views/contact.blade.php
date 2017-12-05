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
                background-color: #3498DB;
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
                        <li><a href="{{ url('/people') }}">People</a></li>
                        <li><a href="{{ url('/tools') }}">Tools</a></li>
                        <li class="active"><a href="{{ url('/contact') }}">Contact</a></li>
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

        <div class="container" style="color:#F2E2CD">
            <div class="row">
                <div class="col-sm-10">
                    
                         <iframe src="https://www.google.com/maps/d/embed?mid=1942UXH_MaFi2_joTTs4CxD1cEko" width="98%" height="480px"></iframe>
                     
                </div> 
                <div class="col-sm-4">
                     
                        <fieldset>
                            <h3><u>Contact us for any information</u></h3>
                                <!-- <p> Contact us for any information </p> -->
                            <h3><u> Ameyem Skill Labs </u></h3><p> House NO-40-6-9,2nd floor, <br> Park Road,Revenue Colony,<br> Sidhartha Nagar,Labbipet,<br> Vijayawada-520010<br> LandMark-SBI ATM.<br>Telephone: +91 9848041175<br> E-mail: <a href="#">skills@ameyem.com</a><br>  </p>
                            <p></p><h3><u>Ameyem Geo Solutions Pvt Ltd.</u></h3> <br> Plot 49, Road 5, <br> Satya Sagar Colony, <br> Vanastalipuram, <br> Telephone: +91 8800197778<br> E-mail: <a href="#">info@ameyem.com</a><br> 
                            <p></p>
                         </fieldset>
                    
                </div> 
            </div> 
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    </body>
</html>
