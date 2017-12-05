<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Ameyem') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
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
                    <a class="navbar-brand" href="/home">
                        {{ config('app.name', 'Ameyem') }}
                        
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <!--<li><a href="{{ url('/') }}">Home</a></li> -->
                        <li><a href="{{ url('/profile') }}">Profile</a></li>
                        <li><a href="{{ url('/skills') }}">Skills</a></li>
                        <li><a href="{{ url('/chat') }}">Chat</a></li>
                        <li><a href="{{ url('/assign_a_task') }}">Assign a Work</a></li> 
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">MY Tasks <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                            <li><a href="#">Works to be Reviewed</a></li>
                            <li><a href="#">Work to get Started</a></li>
                            <li><a href="#">Works Completed</a></li>
                            <li><a href="#">Works to be Refined</a></li>
                            </ul>
                        </li>
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



        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-1">
                    <div class="panel panel-default">
                        <div class="panel-heading">Skills</div>         
                            <div class="panel-body">
                                <form class="form-horizontal" method="POST" action="{{ route('skills') }}">
                                    {{ csrf_field() }}

                                    <div class="form-group"><label for="web_developer" class="col-md-4 control-label">WEB_DEVELOPER: </label> <label style="text-align:right" for="web_developer">  Nill(0) to Expert(10)</label> </div> 
                                    <div class="form-group"><label for="html" class="col-md-4 control-label">Html: </label> <input placeholder="0-10" name="html" id="html" value="0" min="0" max="10" type="number"> </div>
                                    <div class="form-group"><label for="css" class="col-md-4 control-label">Css: </label> <input placeholder="0-10" name="css" id="css" value="0" min="0" max="10" type="number"> </div> 
                                    <div class="form-group"><label for="php" class="col-md-4 control-label">Php: </label> <input placeholder="0-10" name="php" id="php" value="0" min="0" max="10" type="number"> </div>
                                    <div class="form-group"><label for="javascript" class="col-md-4 control-label">Javascript: </label> <input placeholder="0-10" name="javascript" id="javascript" value="0" min="0" max="10" type="number"> </div> 
                                    <div class="form-group"><label for="jquery" class="col-md-4 control-label">Jquery: </label> <input placeholder="0-10" name="jquery" id="jquery" value="0" min="0" max="10" type="number"> </div> 
                                    <div class="form-group"><label for="software_developer" class="col-md-4 control-label">SOFTWARE_DEVELOPER: </label> <label style="text-align:right" for="software_developer">  Nill(0) to Expert(10)</label> </div>
                                    <div class="form-group"><label for="java" class="col-md-4 control-label">Java: </label> <input placeholder="0-10" name="java" id="java" value="0" min="0" max="10" type="number"> </div> 
                                    <div class="form-group"><label for="c++" class="col-md-4 control-label">C++: </label> <input placeholder="0-10" name="c++" id="c++" value="0" min="0" max="10" type="number"> </div> 
                                    <div class="form-group"><label for="C" class="col-md-4 control-label">C: </label> <input placeholder="0-10" name="C" id="C" value="0" min="0" max="10" type="number"> </div>
                                    <div class="form-group"><label for="python" class="col-md-4 control-label">Python: </label> <input placeholder="0-10" name="python" id="python" value="0" min="0" max="10" type="number"> </div> 
                                    <div class="form-group"><label for="c#" class="col-md-4 control-label">C#: </label> <input placeholder="0-10" name="c#" id="c#" value="0" min="0" max="10" type="number"> </div>
                                    <div class="form-group"><label for="matlab" class="col-md-4 control-label">Matlab: </label> <input placeholder="0-10" name="matlab" id="matlab" value="0" min="0" max="10" type="number"> </div> 
                                    <div class="form-group"><label for="mobapp_developer" class="col-md-4 control-label">MOBAPP_DEVELOPER: </label> <label style="text-align:right" for="mobapp_developer">  Nill(0) to Expert(10)</label> </div>
                                    <div class="form-group"><label for="android" class="col-md-4 control-label">Android: </label> <input placeholder="0-10" name="android" id="android" value="0" min="0" max="10" type="number"> </div>
                                    <div class="form-group"><label for="ios" class="col-md-4 control-label">Ios: </label> <input placeholder="0-10" name="ios" id="ios" value="0" min="0" max="10" type="number"> </div>
                                    <div class="form-group"><label for="windows" class="col-md-4 control-label">Windows: </label> <input placeholder="0-10" name="windows" id="windows" value="0" min="0" max="10" type="number"> </div> 
                                    <div class="form-group"><label for="embedded_systems" class="col-md-4 control-label">EMBEDDED_SYSTEMS: </label> <label style="text-align:right" for="embedded_systems">  Nill(0) to Expert(10)</label> </div> 
                                    <div class="form-group"><label for="embedded_c" class="col-md-4 control-label">Embedded_c: </label> <input placeholder="0-10" name="embedded_c" id="embedded_c" value="0" min="0" max="10" type="number"> </div>
                                    <div class="form-group"><label for="embedded_python" class="col-md-4 control-label">Embedded_python: </label> <input placeholder="0-10" name="embedded_python" id="embedded_python" value="0" min="0" max="10" type="number"> </div>
                                    <div class="form-group"><label for="assembly" class="col-md-4 control-label">Assembly: </label> <input placeholder="0-10" name="assembly" id="assembly" value="0" min="0" max="10" type="number"> </div>
                                    <div class="form-group"><label for="microcontroller" class="col-md-4 control-label">Microcontroller: </label> <input placeholder="0-10" name="microcontroller" id="microcontroller" value="0" min="0" max="10" type="number"> </div>
                                    <div class="form-group"><label for="ide" class="col-md-4 control-label">IDE: </label> <label style="text-align:right" for="ide">  Nill(0) to Expert(10)</label> </div> 
                                    <div class="form-group"><label for="eclipse" class="col-md-4 control-label">Eclipse: </label> <input placeholder="0-10" name="eclipse" id="eclipse" value="0" min="0" max="10" type="number"> </div> 
                                    <div class="form-group"><label for="netbeans" class="col-md-4 control-label">Netbeans: </label> <input placeholder="0-10" name="netbeans" id="netbeans" value="0" min="0" max="10" type="number"> </div> 
                                    <div class="form-group"><label for="visual_studio" class="col-md-4 control-label">Visual_studio: </label> <input placeholder="0-10" name="visual_studio" id="visual_studio" value="0" min="0" max="10" type="number"> </div> 
                                    <div class="form-group"><label for="arduino" class="col-md-4 control-label">Arduino: </label> <input placeholder="0-10" name="arduino" id="arduino" value="0" min="0" max="10" type="number"> </div> 
                                    <div class="form-group"><label for="avr_studio" class="col-md-4 control-label">Avr_studio: </label> <input placeholder="0-10" name="avr_studio" id="avr_studio" value="0" min="0" max="10" type="number"> </div> 
                                    <div class="form-group"><label for="concepts_advance_tech" class="col-md-4 control-label">CONCEPTS_ADVANCE_TECH: </label> <label style="text-align:right" for="concepts_advance_tech">  Nill(0) to Expert(10)</label> </div> 
                                    <div class="form-group"><label for="agility" class="col-md-4 control-label">Agility: </label> <input placeholder="0-10" name="agility" id="agility" value="0" min="0" max="10" type="number"> </div> 
                                    <div class="form-group"><label for="project_management" class="col-md-4 control-label">Project_management: </label> <input placeholder="0-10" name="project_management" id="project_management" value="0" min="0" max="10" type="number"> </div>
                                    <div class="form-group"><label for="crud" class="col-md-4 control-label">Crud: </label> <input placeholder="0-10" name="crud" id="crud" value="0" min="0" max="10" type="number"> </div>
                                    <div class="form-group"><label for="restful_api" class="col-md-4 control-label">Restful_api: </label> <input placeholder="0-10" name="restful_api" id="restful_api" value="0" min="0" max="10" type="number"> </div>
                                    <div class="form-group"><label for="analytics" class="col-md-4 control-label">Analytics: </label> <input placeholder="0-10" name="analytics" id="analytics" value="0" min="0" max="10" type="number"> </div>
                                    <div class="form-group"><label for="big_data" class="col-md-4 control-label">Big_data: </label> <input placeholder="0-10" name="big_data" id="big_data" value="0" min="0" max="10" type="number"> </div> 
                                    <div class="form-group"><label for="networking" class="col-md-4 control-label">Networking: </label> <input placeholder="0-10" name="networking" id="networking" value="0" min="0" max="10" type="number"> </div> 
                                    <div class="form-group"><label for="machine_learning" class="col-md-4 control-label">Machine_learning: </label> <input placeholder="0-10" name="machine_learning" id="machine_learning" value="0" min="0" max="10" type="number"> </div> 
                                    <div class="form-group"><label for="artificial_intelligence" class="col-md-4 control-label">Artificial_intelligence: </label> <input placeholder="0-10" name="artificial_intelligence" id="artificial_intelligence" value="0" min="0" max="10" type="number"> </div>
                                    <div class="form-group"><label for="natural_lang_processing" class="col-md-4 control-label">Natural_lang_processing: </label> <input placeholder="0-10" name="natural_lang_processing" id="natural_lang_processing" value="0" min="0" max="10" type="number"> </div>
                                    <div class="form-group">
                                        <div class="col-md-6 col-md-offset-4">
                                            <button type="submit" class="btn btn-primary">
                                                Submit
                                            </button>
                                        </div>
                                     </div>
                                </form>
                            </div> 
                        </div> 
                    </div>
                </div> 
            </div>
        </div> 
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
