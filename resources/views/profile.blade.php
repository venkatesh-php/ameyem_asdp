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
                        <div class="panel-heading">Profile</div>

                            <div class="panel-body">
                            <form class="form-horizontal" method="POST" action="{{ route('profile') }}">
                            {{ csrf_field() }}                     
                            
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="fullname" class="col-md-4 control-label">Full Name</label>

                            <div class="col-md-6">
                                <input id="fullname" type="text" class="form-control" name="fullname" value="{{ old('name') }}" required>
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                            </div> 

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="mobile_number" class="col-md-4 control-label">Mobile Number</label>
                                <div class="col-md-6">
                                <input id="mobile_number" type="text" class="form-control" name="mobile_number" required> 
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif                           
                            </div>
                            </div> 

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="fathername" class="col-md-4 control-label">Father Name</label>

                            <div class="col-md-6">
                                <input id="fathername" type="text" class="form-control" name="fathername" required>   
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif                         
                            </div>
                            </div>

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="mothername" class="col-md-4 control-label">Mother Name</label>
                                <div class="col-md-6">
                                <input id="mothername" type="text" class="form-control" name="mothername" required> 
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif                           
                            </div>
                            </div> 

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="date_of_birth" class="col-md-4 control-label">Date_of_birth</label>
                                <div class="col-md-6">
                                <input id="date_of_birth" type="text" class="form-control" name="date_of_birth" required> 
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif                           
                            </div>
                            </div>

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="qualification" class="col-md-4 control-label">Qualification</label>
                                <div class="col-md-6">
                                <input id="qualification" type="text" class="form-control" name="qualification" required> 
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif                           
                            </div>
                            </div>

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="cource_specialization" class="col-md-4 control-label">Cource_specialization</label>
                                <div class="col-md-6">
                                <input id="cource_specialization" type="text" class="form-control" name="cource_specialization" required> 
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif                           
                            </div>
                            </div>

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="marks_grade" class="col-md-4 control-label">Marks_grade</label>
                                <div class="col-md-6">
                                <input id="marks_grade" type="text" class="form-control" name="marks_grade" required> 
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif                           
                            </div>
                            </div>

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="date_of_completion1" class="col-md-4 control-label">Date_of_completion</label>
                                <div class="col-md-6">
                                <input id="date_of_completion1" type="text" class="form-control" name="date_of_completion1" required> 
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif                           
                            </div>
                            </div>

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="grade_10th" class="col-md-4 control-label">Grade_10th</label>
                                <div class="col-md-6">
                                <input id="grade_10th" type="text" class="form-control" name="grade_10th" required> 
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif                           
                            </div>
                            </div>

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="date_of_completion2" class="col-md-4 control-label">Date_of_completion</label>
                                <div class="col-md-6">
                                <input id="date_of_completion2" type="text" class="form-control" name="date_of_completion2" required> 
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif                           
                            </div>
                            </div>

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="grade_inter" class="col-md-4 control-label">grade_inter</label>
                                <div class="col-md-6">
                                <input id="grade_inter" type="text" class="form-control" name="Grade_inter" required> 
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif                           
                            </div>
                            </div>

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="date_of_completion3" class="col-md-4 control-label">Date_of_completion</label>
                                <div class="col-md-6">
                                <input id="date_of_completion3" type="text" class="form-control" name="date_of_completion3" required> 
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif                           
                            </div>
                            </div>

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="marks_bachler_degree" class="col-md-4 control-label">Marks_bachler_degree</label>
                                <div class="col-md-6">
                                <input id="marks_bachler_degree" type="text" class="form-control" name="marks_bachler_degree" required> 
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif                           
                            </div>
                            </div>

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="date_of_completion4" class="col-md-4 control-label">Date_of_completion</label>
                                <div class="col-md-6">
                                <input id="date_of_completion4" type="text" class="form-control" name="date_of_completion4" required> 
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif                           
                            </div>
                            </div>


                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="heard_of_asdp_by" class="col-md-4 control-label">Heard Of ASDP By</label>
                                <div class="col-md-6">
                                <input id="heard_of_asdp_by" type="text" class="form-control" name="heard_of_asdp_by" required> 
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif                           
                            </div>
                            </div>

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="refered_by" class="col-md-4 control-label">Refered By</label>
                                <div class="col-md-6">
                                <input id="refered_by" type="text" class="form-control" name="refered_by" required> 
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif                           
                            </div>
                            </div>

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="college_highest" class="col-md-4 control-label">College Highest</label>
                                <div class="col-md-6">
                                <input id="college_highest" type="text" class="form-control" name="college_highest" required> 
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif                           
                            </div>
                            </div>

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="college_address" class="col-md-4 control-label">College Address</label>
                                <div class="col-md-6">
                                <input id="college_address" type="text" class="form-control" name="college_address" required> 
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif                           
                            </div>
                            </div>

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="collage_name" class="col-md-4 control-label">Collage Name</label>
                                <div class="col-md-6">
                                <input id="collage_name" type="text" class="form-control" name="collage_name" required> 
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif                           
                            </div>
                            </div>


                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="city_town_c" class="col-md-4 control-label">City_town</label>
                                <div class="col-md-6">
                                <input id="city_town_c" type="text" class="form-control" name="city_town_c" required> 
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif                           
                            </div>
                            </div>

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="manda_c" class="col-md-4 control-label">Mandal</label>
                                <div class="col-md-6">
                                <input id="mandal_c" type="text" class="form-control" name="mandal_c" required> 
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif                           
                            </div>
                            </div>

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="district_c" class="col-md-4 control-label">District</label>
                                <div class="col-md-6">
                                <input id="district_c" type="text" class="form-control" name="district_c" required> 
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif                           
                            </div>
                            </div>

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="state_c" class="col-md-4 control-label">State</label>
                                <div class="col-md-6">
                                <input id="state_c" type="text" class="form-control" name="state_c" required> 
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif                           
                            </div>
                            </div>

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="home_address" class="col-md-4 control-label">Home_Address</label>
                                <div class="col-md-6">
                                <input id="home_address" type="line" class="form-control" name="home_address" required> 
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif                           
                            </div>
                            </div>

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="city_town" class="col-md-4 control-label">City_town</label>
                                <div class="col-md-6">
                                <input id="city_town" type="text" class="form-control" name="city_town" required> 
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif                           
                            </div>
                            </div>

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="mandal" class="col-md-4 control-label">Mandal</label>
                                <div class="col-md-6">
                                <input id="mandal" type="text" class="form-control" name="mandal" required> 
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif                           
                            </div>
                            </div>

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="district" class="col-md-4 control-label">District</label>
                                <div class="col-md-6">
                                <input id="district" type="text" class="form-control" name="district" required> 
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif                           
                            </div>
                            </div>

                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="state" class="col-md-4 control-label">State</label>
                                <div class="col-md-6">
                                <input id="state" type="text" class="form-control" name="state" required> 
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif                           
                            </div>
                            </div>

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
        
        
        
        
        
        
        
        <!--<div class="container">
            <div class="row">
                <div class="col-md-6">          
                     
                         <form id="frm1"> 
                            <fieldset>
                                <legend>Add Your details </legend>   
                                <div class="tableContainer">
                                    <div class="tableRow"> <label for="General"  class="col-md-4 control-label">GENERAL: </label> <label for="General">-------------------------------</label> </div> 
                                    <div class="tableRow"> <label for="Userid">Userid: </label> <label for="Userid">venkat508</label> </div> 
                                    <div class="tableRow"> <label for="Username">Username: </label> <label for="Username">venkateswarlu</label></div>
                                    <div class="tableRow"> <label for="Prifile_name"  class="col-md-4 control-label">Prifile_name: </label> <input name="Prifile_name" id="[object Object]" type="text" class="form-control"> </div> 
                                    <div class="tableRow"> <label for="Father">Father: </label> <input name="Father" id="[object Object]" type="text"> </div> 
                                    <div class="tableRow"> <label for="Mother">Mother: </label> <input name="Mother" id="[object Object]" type="text"> </div> 
                                    <div class="tableRow"> <label for="Association_as">Association_as: </label> <select name="Association_as"><option value="Student">Student</option><option value="Teaching_assistant">Teaching Assistant</option><option value="Skill_developer">Skill Developer</option><option value="head_programme">Programme Head </option><option value="Pramotor">Promotor</option>   </select> </div>
                                    <div class="tableRow"> <label for="Date_of_birth">Date_of_birth: </label> <input name="Date_of_birth" id="[object Object]" type="date"> </div>
                                    <div class="tableRow"> <label for="Qualification">Highest Qualification: </label> <select name="Qualification"><option value="btech">B.Tech.</option><option value="mtech">M.Tech.</option> </select> </div>
                                    <div class="tableRow"> <label for="Cource_specialization">Cource_specialization: </label> <input name="Cource_specialization" id="[object Object]" type="text"> </div> 
                                    <div class="tableRow"> <label for="Marks_grade">Marks_grade: </label> <input name="Marks_grade" id="[object Object]" type="number"> </div> 
                                    <div class="tableRow"> <label for="Date_of_completion">Date_of_completion: </label> <input name="Date_of_completion" id="[object Object]" type="date"> </div>
                                    <div class="tableRow"> <label for="Grade_10th">Grade_10th: </label> <input name="Grade_10th" id="[object Object]" type="number"> </div> 
                                    <div class="tableRow"> <label for="Date_of_completion_10th">Date_of_completion_10th: </label> <input name="Date_of_completion_10th" id="[object Object]" type="date"> </div>
                                    <div class="tableRow"> <label for="Grade_inter">Grade_inter: </label> <input name="Grade_inter" id="[object Object]" type="number"> </div> 
                                    <div class="tableRow"> <label for="Date_of_completion_inter">Date_of_completion_inter: </label> <input name="Date_of_completion_inter" id="[object Object]" type="date"> </div> 
                                    <div class="tableRow"> <label for="Marks_bachler_degree">Marks_bachler_degree: </label> <input name="Marks_bachler_degree" id="[object Object]" type="number"> </div> 
                                    <div class="tableRow"> <label for="Date_of_completion_be">Date_of_completion_be: </label> <input name="Date_of_completion_be" id="[object Object]" type="date"> </div>
                                    <div class="tableRow"> <label for="Heard_of_asdp_by">Heard_of_asdp_by: </label> <input name="Heard_of_asdp_by" id="[object Object]" type="text"> </div>
                                    <div class="tableRow"> <label for="Refered_by">Refered_by: </label> <input name="Refered_by" id="[object Object]" type="text"> </div> 
                                    <div class="tableRow"> <label for="College_highest">COLLEGE_HIGHEST: </label> <label for="College_highest">-------------------------------</label> </div> 
                                    <div class="tableRow"> <label for="Address_c">ADDRESS_C: </label> <label for="Address_c">-------------------------------</label> </div> 
                                    <div class="tableRow"> <label for="Collage_name">Collage_name: </label> <input name="Collage_name" id="[object Object]" type="text"> </div> 
                                    <div class="tableRow"> <label for="City_town_c">City_town: </label> <input name="City_town_c" id="[object Object]" type="text"> </div> 
                                    <div class="tableRow"> <label for="District_c">District: </label> <input name="District_c" id="[object Object]" type="text"> </div> 
                                    <div class="tableRow"> <label for="State_c">State: </label> <input name="State_c" id="[object Object]" type="text"> </div> 
                                    <div class="tableRow"> <label for="Lattitue_c">Lattitue: </label> <input name="Lattitue_c" id="[object Object]" type="text"> </div>
                                    <div class="tableRow"> <label for="Longitude_c">Longitude: </label> <input name="Longitude_c" id="[object Object]" type="text"> </div> 
                                    <div class="tableRow"> <label for="Home">HOME: </label> <label for="Home">-------------------------------</label> </div> 
                                    <div class="tableRow"> <label for="Address">ADDRESS: </label> <label for="Address">-------------------------------</label> </div>
                                    <div class="tableRow"> <label for="Village_city_town">Village_city_town: </label> <input name="Village_city_town" id="[object Object]" type="text"> </div>
                                    <div class="tableRow"> <label for="Mandal">Mandal: </label> <input name="Mandal" id="[object Object]" type="text"> </div> 
                                    <div class="tableRow"> <label for="District">District: </label> <input name="District" id="[object Object]" type="text"> </div>
                                    <div class="tableRow"> <label for="State">State: </label> <input name="State" id="[object Object]" type="text"> </div>
                                    <div class="tableRow"> <label for="Lattitue">Lattitue: </label> <input name="Lattitue" id="[object Object]" type="text"> </div> 
                                    <div class="tableRow"> <label for="Longitude">Longitude: </label> <input name="Longitude" id="[object Object]" type="text"> </div>
                                </div> 
                            </fieldset> 
                        </form> 
                        <input onclick="myFunction()" id="submit" value="submit" type="submit"> 
                </div>
                    
                    
               
            </div> 
        </div>
    </div> --> 



</div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
