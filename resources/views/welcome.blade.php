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
                        {{ config('app.name') }}

                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="{{ url('/') }}">Home</a></li>
                        <li><a href="{{ url('/people') }}">People</a></li>
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

<div backgroun-colour="#3498DB" class="container" style="color:#F2E2CD">
  <div class="row">
    <div class="col-sm-4">
      <h3><u>About to the Programme</u></h3>
      <h4><li>It is highly rewarding and an accelerated learning vehicle to develop Skills at fast pace..</li><br>
      <li>At ASDP- the Company, Learner, Instructor and the third party supporters are the mutually beneficial partners..</li><br> 
      <li>ASDP believes unemployed youth can become employable to the software companies etc., by providing them a structured and efficient way of training by rewarding practice.</li><br>
      <li>Skill development happens here through practice and guidance but not through spoon feeding and giving blackboard lectures...</li><br>
      <li>ASDP assumes every student already have the knowledge enough to start simple tasks on the path to becoming skilled proffessional.</li><br>
      <li>At ASDP, we think it is not meant for the individuals who wants to learn by listening lectures...</li><br>
      <li>Here the only measure of Skill development is how quickly one completes a task/ assignment/project /workshop successfully, quality of the work and how he/she thinks/helps for the development of others.</li></h4>
     
    </div>
    <div class="col-sm-4">
      <h3><u>Credit System<u></h3>
      <h4><li>Each learner will get rewarded with credits on every occation he successfully completes a task/assignment/project /workshop. The number of credits to be given will be decided by reviewer and/or the body of reviewers and director..</li><br>
      <li>Each Teacher will get rewarded for the efficient guidance they provided to the learner to successfully complete work.This depends on student's feedback along with the student proposed credits. Decision will be taken by the the body of reviewers and/or director.</li><br>
      <li>Credit points are dynamic. Which means rules may change on how many credits points each work carries....</li><br>
      <li>Credit points means they are not only the measure of the Skill but also many things. One among them is direct money. Live credits will get translated to real cash. Every month ending it will be decided by the ASL owners on the money each credit point amounts to..</li><br>
      <li>After every end of month, the credit points lose the power of being converted into money. But they are more than that and they are the ones which would apeal to recruiters..</li><br>
      <li>The amount of money each credit carries will grossly dependent on the earnings of ASL, useally a percentage (morethan 10%) which is decided by the director/promoters of the company..</li><br>
      <li>Each Ameyen (Learner, Instructor and the third party supporter) can also earn credits upon successful referal, once the refered person mentions the same while becoming the part of ASDP..</li><br>
      <li>In future it will become more efficent to measure the contribution of each member in growth of company and society..</li><br>
      <li>So start spreading the greatness of ASDP from the day 1.</li></h4> 
      
    </div>
    <div class="col-sm-4">
      <h3><u>Skills and Programs available at present</u></h3> 
      <h4><dt>Web Designer</dt> 
      <dd>- HTML, CSS, (Graphics design)</dd>
      <br> 
      <dt>Web Developer</dt>
      <dd>- Front-end : JavaScript, JQuery</dd>
      <dd>- Back-end : PhP, Python, Node.js</dd>
      <dd>- Data store : MySQL</dd>
      <dd>- Agile collaboration and devops tools : Github</dd>
      <dd>- Modern software techniques : RESTful APIs</dd>
      <br>
      <dt>Software Developer</dt>
      <dd>-C/C++, Java, C#, Python</dd>
      <br> 
      <dt>Mobile app developer</dt>
      <dd>- Android</dd>
      <br> 
      <dt>Embedded systems/Iinternet of Things</dt>
      <dd> - Embedded: C/C++, Embedded C, Mechine code &amp; Assembly language, Embedded Python, Arduino IDE, Raspberry pi</dd></h4> 



    </div>
  </div>
</div>
 



    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>          
    </body>
</html>
