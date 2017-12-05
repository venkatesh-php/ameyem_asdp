@extends('layouts.app2')

@section('content')
<!--<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div> --> 
<div class="container">
  <div class="row">
    <div class="col-sm-12" style="background-color:#F5EEF8; height: 50px;">
      <center><h3>Welcome to ASDP</h3></center>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-6" style="background-color:#EBF5FB;">
      <p>Asdp start date </p>
    </div>
    <div class="col-sm-6" style="background-color:#EBF5FB;">
      <p>Economy</p>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-6" style="background-color:#E8F6F3;">



    <div>
<div class="container"  style="height: 400px; width: 25%;float: left;">

<p>HTML</p>
  <div class="skills html">40%</div>
  <p>CSS</p>
    <div class="skills css">10%</div>
<p>JavaScript</p>
  <div class="skills js">0%</div>
<p>PHP</p>
  <div class="skills php">0%</div>
</div>
<div class="container" style="height: 400px; width: 25%;float: left;">
<p>Java</p>
  <div class="skills java">10%</div>
  <p>C++</p>
    <div class="skills cpp">0%</div>
<p>Python</p>
  <div class="skills python">0%</div>
<p>Android</p>
  <div class="skills android">0%</div>
</div>

</div>





      <p>Technical skills</p>
    </div>
    <div class="col-sm-6" style="background-color:#CCD1D1;">
      <p>work Graph</p>
      <div id="chartContainer" style="height: 400px; width: 50%;float: left;"></div>
    </div>
  </div>

    <div class="row">
    <h1> My Tasks Extends</h1> 
    <div class="col-sm-3">
        <button id="to_review" name="review" type="button" class="btn btn-primary">Works to be reviewed</button>
    </div>
    <div class="col-sm-3">
        <button id="to_start" name="null" type="button" class="btn btn-primary">Work to get started</button>
    </div>
    <div class="col-sm-3">
        <button id="Completed" name="approved" type="button" class="btn btn-primary">Works Completed</button>
    </div>
    <div class="col-sm-3">
        <button id="redo" name="redo" type="button" class="btn btn-primary">Works to be refined</button>
    </div>
    <!--<div class="col-sm-2">
         <button id="approve" name="approve" type="button" class="btn btn-primary">Works to be approved</button>
    </div>
    <div class="col-sm-2">
        <button id="drop" name="drop" type="button" class="btn btn-primary">Works to drop or dropped</button>
    </div> --> 
    <h2>Welcome to the work world</h2>
  </div>




    <div class="row">
        <div class="col-sm-12" style="background-color:#EAECEE;">
            <p>Ameyem Geo Solutions</p>
         </div>
    </div>


</div>
@endsection
