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
				 
				 <div class="alert alert-info" role="alert">
					 <h4>Sendding Activation email.</h4>
					<h4>Please Check your email, and Activatig on. Thank you.</h4> 
					<br/> 
					<br/>
				</div>	
				  
			 
		  	</div>
 		
 	
  	
 		<div class="panel panel-default">
			<div class="panel-heading"><h3>Registry.</h3></div>
			<div class="panel-body">
				<p>Guest, join us.</p>
				<p>This part, Under the Construnction.</p>
			</div>
 		</div>	
 	
<div style="display:none" id="change-redirectAfter"><?=$change?></div>
<div style="display:none" id="status-redirectAfter"><?=$status?></div>
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
       <?php if($this->session->userdata('logged_in')):?>
		  <ul class="nav navbar-nav">
			<li class="dropdown active"><a href="#"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Welcome<span class="sr-only">(current)</span><span class="caret"></a>
			<ul class="dropdown-menu">
				<li style="padding: 5px 0px;"><a href="/index.php/welcome">Welcome</a></li>
				<li><a href='/index.php/login/'><?=$this->session->userdata('useremail')?></a></li>
			</ul>
			</li>
			<li><a href="/index.php/whereInformation/">Where information</a></li>
			  <li><a href="/index.php/planning/">Planning</a></li>
			<li><a href="/index.php/claime/">Claime</a></li>
			<li><a href="/index.php/diarly/">Diarly</a></li>
		  </ul>
	   <?php else : ?>
		  <ul class="nav navbar-nav">
			<li class="dropdown active"><a href="#"  class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Welcome<span class="sr-only">(current)</span><span class="caret"></a>
			<ul class="dropdown-menu">
				<li style="padding: 5px 0px;"><a href="/index.php/welcome">Welcome</a></li>
				<li><a href='/index.php/login/'>LOG IN</a></li>
				<li><a href='/index.php/register/'>Registeration</a></li>
			</ul>
			</li>
			<li><a href="/index.php/whereInformation/">Where information</a></li>
			  <li><a href="/index.php/planning/">Planning</a></li>
			<li><a href="/index.php/claime/">Claime</a></li>
			<li><a href="/index.php/diarly/">Diarly</a></li>
		  </ul>
	   <?php endif; ?>
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
	
	if($('.log-btn').hasClass('btn-primary')){}else{
	$('.log-btn').addClass('btn-success');
	}
	
	if($('.del-btn').hasClass('btn-primary')){}else{
	$('.del-btn').addClass('btn-info');
	}
});

$('.sub-btn').hover(function(){
	if($(this).hasClass('btn-primary')){}else{
	$(this).addClass('btn-info');}
});
$('.sub-btn').click(function(){
	$(this).removeClass('btn-info');
	$(this).addClass('btn-primary');
	
});
$('.del-btn').mouseenter(function(){
	 
	if($(this).hasClass('btn-info')){
		$(this).removeClass('btn-info').addClass('btn-warning');
	}
}).mouseleave(function(){
	if($(this).hasClass('btn-warning')){
		$(this).removeClass('btn-warning').addClass('btn-info');
	}
	if($(this).hasClass('btn-danger')){
		$(this).removeClass('btn-danger').addClass('btn-primary');
	}
});
 
$('.del-btn').click(function(){
	$(this).removeClass('btn-warning').addClass('btn-danger');
});
$('.log-btn').hover(function(){
	if($(this).hasClass('btn-primary')){}else{
	$(this).addClass('btn-success');}
});
$('.log-btn').click(function(){
	$(this).removeClass('btn-success');
	$(this).addClass('btn-primary');
	
});
$('#info-btn').click(function(){
	$('.log').css('display','none');
	$('.log-alert').css('display','none');
	$('.log-info').css('display','block');
	
	
});	
$('#fix-btn').click(function(){
	$('.log').css('display','none');
	$('.log-alert').css('display','none');
	$('.log-fix').css('display','block');
	
});
$('#reset-btn').click(function(){
	$('.log').css('display','none');
	$('.log-alert').css('display','none');
	$('.log-reset').css('display','block');
	
});
$('#del-btn').click(function(){
	$('.log').css('display','none');
	$('.log-alert').css('display','none');
	$('.log-delete').css('display','block');
});

function validateChangeNameForm(){
	//alert("context : " + $('#input-change').val());
	if($('#input-change').val()==""){
		$('#alert-name p').remove();
		$('#alert-name').append($("<p><span class='glyphicon glyphicon-alert'></span>&nbsp;&nbsp;Please, input name.</p>"));
		$('#alert-name').removeClass('alert-success').addClass('alert-warning');
		$('#alert-name').css("display","block");
		return false;
	}else{
		return true;
	}
}
function validateChangePWForm(){
	//input-password
	//input-new-password
	//input-new-password2
 
	var pw = $('#input-password').val();
	var npw1 = $('#input-new-password').val();
	var npw2 = $('#input-new-password2').val();
	
	//alert(pw+","+npw1);
	if(pw.length ===0 || npw1.length ===0 || npw2.length ===0 ){
		
	 	$('#alert-password p').remove();
		$('#alert-password').append($("<p><span class='glyphicon glyphicon-alert'></span>&nbsp;&nbsp;Wrong input. Blink. Please Check about inputs.</p>"));
		$('#alert-password').removeClass('alert-success').addClass('alert-warning');
		$('#alert-password').css("display","block");
		
		return false;
		
	}else{
		
		if(npw1 === npw2){
			return true;
		}
		$('#alert-password p').remove();
		$('#alert-password').append($("<p><span class='glyphicon glyphicon-alert'></span>&nbsp;&nbsp;Wrong input, new password each other. Please Check about inputs.</p>"));
		$('#alert-password').removeClass('alert-success').addClass('alert-warning');
		$('#alert-password').css("display","block");
		return false;
	}
}
	
function validateDeleteIdForm(){
	
	var delEmail = $('#input-del-email').val();
	var delPw = $('#input-del-password').val();
	var beforeEmail = $('#input-del-useremail').val();
	
	if(delEmail.length===0){
		$('#alert-deleteId p').remove();
		$('#alert-deleteId').append($("<p><span class='glyphicon glyphicon-alert'></span>&nbsp;&nbsp;Wrong input, Blink. Please Check about inputs.</p>"));
		$('#alert-deleteId').removeClass('alert-success').addClass('alert-warning');
		$('#alert-deleteId').css("display","block");
		return false;
	}
	if(delPw.length===0){
		$('#alert-deleteId p').remove();
		$('#alert-deleteId').append($("<p><span class='glyphicon glyphicon-alert'></span>&nbsp;&nbsp;Wrong input, Blink. Please Check about inputs.</p>"));
		$('#alert-deleteId').removeClass('alert-success').addClass('alert-warning');
		$('#alert-deleteId').css("display","block");
		return false;
	}
	if(beforeEmail === delEmail){
		return true;
	}else{
		$('#alert-deleteId p').remove();
		$('#alert-deleteId').append($("<p><span class='glyphicon glyphicon-alert'></span>&nbsp;&nbsp;Wrong input, Email. Please, input email checking.</p>"));
		$('#alert-deleteId').removeClass('alert-success').addClass('alert-warning');
		$('#alert-deleteId').css("display","block");
		return false;
	}
	
}
	
</script>
<script>
$(document).ready(function(){
	//alert($('#change-redirectAfter').text());
	//alert($('#status-redirectAfter').text());
	var change = $('#change-redirectAfter').text();
	var status = $('#status-redirectAfter').text();
	
	if(change=="name"){
		$('.sub-btn').addClass('btn-info');
		$('#fix-btn').removeClass('btn-info').addClass('btn-primary');
		$('.log-fix').css('display','block');
		$('#alert-name p').remove();
		$('#alert-name').append($("<p><span class='glyphicon glyphicon-info-sign'></span>&nbsp;&nbsp;Name Changed.</p>"));
		$('#alert-name').removeClass('alert-warning').addClass('alert-success');
		$('#alert-name').css("display","block");
		//<p><span class="glyphicon glyphicon-alert"></span>&nbsp;&nbsp;Please, input name.</p>
	}
	if(change=="password"){
		if(status=="error-password"){
		$('.sub-btn').addClass('btn-info');
		$('#reset-btn').removeClass('btn-info').addClass('btn-primary');
		$('.log-reset').css('display','block');
		$('#alert-password p').remove();
		$('#alert-password').append($("<p><span class='glyphicon glyphicon-alert'></span>&nbsp;&nbsp;Wrong password. Please Check, password.</p>"));
		$('#alert-password').removeClass('alert-success').addClass('alert-warning');
		$('#alert-password').css("display","block");
		}
		if(status=="success"){
		$('.sub-btn').addClass('btn-info');
		$('#reset-btn').removeClass('btn-info').addClass('btn-primary');
		$('.log-reset').css('display','block');
		$('#alert-password p').remove();
		$('#alert-password').append($("<p><span class='glyphicon glyphicon-info-sign'></span>&nbsp;&nbsp;Password Changed.</p>"));
		$('#alert-password').removeClass('alert-warning').addClass('alert-success');
		$('#alert-password').css("display","block");
		}
	}
	if(change=="deleteId"){
		if(status=="error-deleteId"){
		$('.sub-btn').addClass('btn-info');
		$('#del-btn').removeClass('btn-info').addClass('btn-primary');
		$('.log-delete').css('display','block');
		$('#alert-deleteId p').remove();
		$('#alert-deleteId').append($("<p><span class='glyphicon glyphicon-alert'></span>&nbsp;&nbsp;Wrong Input. Please Check about inputs.</p>"));
		$('#alert-deleteId').removeClass('alert-success').addClass('alert-warning');
		$('#alert-deleteId').css("display","block");
		}
		if(status=="success"){
		$('.sub-btn').addClass('btn-info');
		$('#del-btn').removeClass('btn-info').addClass('btn-primary');
		$('.log-delete').css('display','block');
		$('#alert-deleteId p').remove();
		$('#alert-deleteId').append($("<p><span class='glyphicon glyphicon-info-sign'></span>&nbsp;&nbsp;Deleting Id, Complete.</p>"));
		$('#alert-deleteId').removeClass('alert-warning').addClass('alert-success');
		$('#alert-deleteId').css("display","block");
		}
	}
	
	
});
</script>
</body>
</html>


