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

<body style="background-color:#2c3e50;">

 		<div class="panel panel-default">
			<div class="panel-heading"><h1>LOG IN&nbsp;<span class="glyphicon glyphicon-log-in"></span></h1></div>
			<div class="panel-body panel-hover">
			<p>&nbsp;</p>
<?php echo form_open('login/forget/activationOn','class="form-horizontal"') ?>
			  <div class="form-group">
				<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
				<div class="col-sm-10" style="height:71px;">
				  <input type="email" name="email" class="form-control" id="inputEmail3" placeholder="Email" value="<?=$this->session->userdata('tempemail')?>" readonly>
				</div>
			  </div>
			
			  <div class="form-group" style="min-height: 140px;">
				<div class="col-sm-offset-2 col-sm-3">
				  <a role="button" href="/index.php/login/forget/form" class="btn btn-default sub-btn" disabled="disabled">Reset password&nbsp;<span class="glyphicon glyphicon-refresh"></span></a> 
				  
				</div>
				 
					<div class="col-sm-7">
					<div style="padding: 10px;"></div>
					<div class="alert alert-success" role="alert">
						<p><span class="glyphicon glyphicon-info-sign"></span>&nbsp;&nbsp;Reset Password, Complete.</p> 
						<p>Reset password, send your email.</p> 
						<p>Please, Check your email.</p>
					</div>
					</div>
			   </div>
			</form>	 
		  </div>
 		</div>
 		<div class="panel panel-default">
			<div class="panel-heading"><h3>Forgot password</h3></div>
			<div class="panel-body">
				<p>Guest, join us.</p>
				<p>This part, Under the Construnction.</p>
			</div>
 		</div>	
 	

<div style="display:none;" id="change"><?=$change?></div>
<div style="display:none;" id="status"><?=$status?></div>
<div style="padding:10px;"></div>
<div style="padding:10px;"></div>
<div style="background-color: #25292D;color:white;padding-top:150px;padding-left:10px;">
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
      <ul class="nav navbar-nav">
        <li class="dropdown active"><a href="#"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Welcome<span class="sr-only">(current)</span><span class="caret"></a>
        <ul class="dropdown-menu">
            <li><a href="/index.php/welcome/">Welcome</a></li>
            <li><a href="#">LOG IN</a></li>
            <li><a href="/index.php/register/">Register</a></li>
        </ul>
        </li>
        <li><a href="/index.php/whereInformation/">Where Information</a></li>
		<li><a href="/index.php/planning/">Planning</a></li>
     	<li><a href="/index.php/claime/">Claime</a></li>
     	<li><a href="/index.php/diarly/">Diarly</a></li>
      </ul>
       <ul class="nav navbar-nav navbar-left">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Link <span class="caret"></span></a>
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
<script>
$('.panel').addClass('panel-info');
$('.panel-heading').css('background-color','#25292D').css('color','white');
	
$('.panel-hover').hover(function(){
	if($('.sub-btn').hasClass('btn-primary')){}else{
	$('.sub-btn').addClass('btn-info');}
});

$('.sub-btn').hover(function(){
	if($(this).hasClass('btn-primary')){}else{
	$(this).addClass('btn-info');
	}
});
$('.sub-btn').click(function(){
	$(this).removeClass('btn-info');
	$(this).addClass('btn-primary');
});
</script>
<script>
$(document).ready(function(){
	//alert($('#status').text());
});	
</script>
</body>
</html>


