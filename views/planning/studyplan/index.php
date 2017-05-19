<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<!--study, bootstrap. http://getbootstrap.com/css/ -->
<html>
<head>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Information System for work</title>
<link rel="stylesheet" href="https://necolas.github.io/normalize.css/6.0.0/normalize.css"><!--imporved-cross-browser rendering-->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"><!--http://www.w3school.com, w3.css-->
<link href="/views/css/bootstrap.min.css" rel="stylesheet"><!--basic template, bootstrap-->
<link rel="stylesheet" href="/views/css/styles.css"> 
</head>

<body>
<div class="container-fluid">
 <div class="row">
 	<div class="col col-sm-6 col-md-6">
 		<div class="panel panel-default">
			<div class="panel-heading"><h1>WORK PLANNING</h1></div>
			<div class="panel-body">
				<h4>On Diary, Choose work.</h4>
				<h4>Design work plan to yourself.</h4>
			</div>
 		</div>
 	</div>
 	<div class="col col-sm-6 col-md-6">
 		<div class="panel panel-default">
			<div class="panel-heading"><h2>STUDY PLAN</h2></div>
			<div class="panel-body">
				<p>Check time, study and leisure time.</p>
				<p>Check the study plan. and choose your leisure time.</p>
			</div>
 		</div>	
 	</div>
</div>
</div><!--end, container-fluid-->
<div style="background-color: #25292D;color:white;padding-top:150px;">
<p>Desingned and built, <a href="https://twitter.com/eecncn_choi">@eecncn_choi</a>.</p>
<p>Code Licensed, <a href="https://github.com/ee32320/InformationSystem">Github</a>, <a href="https://github.com/ee32320/InformationSystem/blob/master/LICENSE">MIT</a></p>
<p>Docs Licensed, <a href="https://creativecommons.org/licenses/by/4.0/">CC BY 4.0</a></p>
</div>
<br/><br/><br/> 
 
<nav class="navbar navbar-default navbar-fixed-bottom"><!--http://getbootstrap.com/components/#navbar-->
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Information system for work</a>
    </div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <?php if($this->session->userdata('logged_in')):?>
		  <ul class="nav navbar-nav">
			<li class="dropdown"><a href="#"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Welcome<span class="sr-only">(current)</span><span class="caret"></a>
			<ul class="dropdown-menu">
				<li style="padding: 5px 0px;"><a href="/index.php/welcome/">Welcome</a></li>
				<li><a href='/index.php/login/'><?=$this->session->userdata('useremail')?></a></li>
			</ul>
			</li>
			<li><a href="/index.php/whereInformation/">Where information</a></li>
			  <li class="active"><a href="/index.php/planning/">Planning</a></li>
			<li><a href="/index.php/claime/">Claime</a></li>
			<li><a href="/index.php/diarly/">Diarly</a></li>
		  </ul>
	   <?php else : ?>
		  <ul class="nav navbar-nav">
			<li class="dropdown"><a href="#"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Welcome<span class="sr-only">(current)</span><span class="caret"></a>
			<ul class="dropdown-menu">
				<li style="padding: 5px 0px;"><a href="/index.php/welcome/">Welcome</a></li>
				<li><a href='/index.php/login/'>LOG IN</a></li>
				<li><a href='/index.php/register/'>Registeration</a></li>
			</ul>
			</li>
			<li><a href="/index.php/whereInformation/">Where information</a></li>
			  <li class="active"><a href="/index.php/planning/">Planning</a></li>
			<li><a href="/index.php/claime/">Claime</a></li>
			<li><a href="/index.php/diarly/">Diarly</a></li>
		  </ul>
	   <?php endif; ?>
       <ul class="nav navbar-nav navbar-left">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Link<span class="caret"></span></a>
          <ul class="dropdown-menu">
           	<li><p>This website, Under the Construction. VERSION 17-2.</p></li>
      		<li><a href="https://github.com/ee32320/InformationSystem">Move a github, https://github.com/ee32320/InformationSystem</a></li>
          </ul>
        </li>
      </ul>
      
    </div><!-- /.navbar-collapse -->
      
  </div>
</nav>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script><!--basic template -->
<script src="/views/js/bootstrap.min.js"></script>	
</body>
</html>

