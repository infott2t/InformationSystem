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
			<div class="panel-heading"><h1>LOG IN</h1></div>
			<div class="panel-body panel-hover">
				<?php if($this->session->userdata('logged_in')) :?>
			<div class="row">
				<div class="col col-sm-6" style="padding-bottom:10px;">
				<div class="alert alert-info" style="margin-bottom:5px;margin-top:5px;" role="alert">
					<h4>Signed.</h4>
					<h4><span style="font-style: italic;"><?php echo $_SESSION['useremail']?></span>.</h4>
					<br/>
				</div>
				</div>
			<div class="col col-sm-6"  style="padding-bottom:10px;">
			
			<div class="row">
			<div class="col col-sm-6">
			<a role="button" href="/index.php/login/signout" class="str-btn btn btn-default log-btn">LOG OUT</a>
			<a role="button" class="str-btn btn btn-default log-btn" id="info-btn">User Information</a>
			</div>
			<div class="col col-sm-6">
			<a role="button" class="str-btn btn btn-default sub-btn" id="fix-btn">Fix ID information</a>
			<a role="button" class="str-btn btn btn-default sub-btn" id="reset-btn">Reset Password</a>
			<a role="button" class="str-btn btn btn-default del-btn" id="del-btn">Delete ID</a>
			</div>
			</div> 
			</div>
			</div>
			<div class="log log-info" style="display:none;">
			<div class="alert alert-success" role="alert" style="margin-top:5px;">
  			<p><span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>
  			<span class="sr-only">Information:</span>
				User Information</p>
			</div>
			<div class="row">
			<div class="col col-sm-2"></div>
			<div class="col col-sm-8">
				
				<div class="form-horizontal">
				<div class="form-group">
				<div class="row">
				<label class="col col-sm-3 control-label">User Name</label>
				<div class="col col-sm-9">
				<input type="text" id="info-username" class="form-control" value="<?php echo $_SESSION['username']?>" disabled="disabled">
				</div>
				</div>
				</div>
				<div class="form-group">
				<div class="row">
				<div style="padding:10px 0px;"></div>
				<label for="info-useremail" class="col col-sm-3 control-label">User Email</label>
				<div class="col col-sm-9">
				<input type="text" id="info-useremail" class="form-control" value="<?php echo $_SESSION['useremail']?>" disabled="disabled">
				</div>
				</div>
				</div>
				</div>
				
			</div>
			<div class="col col-md-2"></div>
			</div>
			
			</div>
			<div class="log log-fix" style="display:none;">
			<div class="alert alert-info" role="alert" style="margin-top:5px;">
  			<p><span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  			<span class="sr-only">Alert:</span>
				Changing user name.</p>
			</div>
			
			<div class="row">
			<div class="col col-sm-2"></div>
			<div class="col col-sm-8">
			<?php echo form_open('login/change/name','class="form-horizontal"') ?>
			<div class="form-group">
				<div class="row">
				<div class="col col-sm-6">
				<label for="input-username">User Name</label>
				<input type="text" id="input-username" class="form-control" value="<?php echo $_SESSION['username']?>" disabled="disabled">
				<div style="padding:10px 0px;"></div>
				<label for="input-name">Change Name</label>
				<input type="text" id="input-name" name="name" class="form-control" placeholder="Write name">
				</div>
				<div class="col col-sm-6">
				<br/>
				<button type="submit" class="btn btn-info sub-btn" href="">Change</a>
				</div>
				</div>
			</div>
			</form>
			</div>
			<div class="col col-md-2"></div>
			</div>
			
			</div>
			<div class="log log-reset" style="display:none;">
			<div class="alert alert-info" role="alert" style="margin-top:5px;">
  			<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  			<span class="sr-only">Alert:</span>
 			 Reset password.
			</div>
			
			<div class="row">
			<div class="col col-sm-2"></div>
			<div class="col col-sm-8">
			<?php echo form_open('login/change/password','class="form-horizontal"') ?>
			<div class="form-group">
				<div class="row">
				<div class="col col-sm-6">
				<label for="input-password-email">User EMAIL</label>
				<input type="text" id="input-password-email" class="form-control" value="<?php echo $_SESSION['useremail']?>" disabled="disabled">
				<div style="padding:10px 0px;"></div>
				<label for="input-password">Password</label>
				<input type="password" id="input-password" name="pw" class="form-control" placeholder="Write password">
				<div style="padding:10px 0px;"></div>
				<label for="input-new-password">New Password</label>
				<input type="password" id="input-new-password" name="newpw" class="form-control" placeholder="Write new password">
				<div style="padding:5px 0px;"></div>
				<input type="password" id="input-name" name="newpw2" class="form-control" placeholder="Rewrite new password">
				</div>
				<div class="col col-sm-6">
				<br/>
				<button type="submit" class="btn btn-default sub-btn" href="">Reset Password</button>
				</div>
				</div>
			</div>
			</form>
			</div>
			<div class="col col-sm-2"></div>
			</div>
		
			</div>
			<div class="log log-delete" style="display:none;">
			<div class="alert alert-danger" role="alert" style="margin-top:5px;">
  			<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
  			<span class="sr-only">Alert:</span>
 			 Deleting ID. Please, writting email and password.
			</div>
		
			<div class="row">
			<div class="col col-sm-2"></div>
			<div class="col col-sm-8">
				<?php echo form_open('login/delete/id','class="form-horizontal"') ?>
				<div class="form-group">
				<div class="row">
				<div class="col col-sm-6">
				<label for="input-del-useremail">User EMAIL</label>
				<input type="text" id="input-del-useremail" class="form-control" value="<?php echo $_SESSION['useremail']?>" disabled="disabled">
				<div style="padding:10px 0px;"></div>
				<label for="input-del-email">User EMAIL</label>
				<input type="email" id="input-del-email" name="delemail" class="form-control" placeholder="Write Email">
				<div style="padding:10px 0px;"></div>
				<label for="input-del-password">Password</label>
				<input type="password" id="input-del-password" name="delemail" class="form-control" placeholder="Write Password">
				</div> 
				<div class="col col-sm-6">
				<br/>
				<button type="submit" class="btn btn-danger sub-btn" href="">DELETE</button>
				</div>
				</div>
				</div>
			</div>
			</form>
			</div>
			<div class="col col-sm-2"></div>
		
			</div>
			</div>	
				 <?php else : ?>
				 <div class="alert alert-info" role="alert">
					<h4>Log out. Thank you.</h4> 
					<br/> 
					<br/>
				</div>	
				 <a role="button" href="/index.php/login/" class="btn btn-default log-btn">LOG IN</a> 
				<?php endif;?> 
		  	</div>
 		</div>
 	
  	
 		<div class="panel panel-default">
			<div class="panel-heading"><h3>Registry.</h3></div>
			<div class="panel-body">
				<p>Guest, join us.</p>
				<p>This part, Under the Construnction.</p>
			</div>
 		</div>	
 	

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
	
	$('.log-info').css('display','block');
	
});	
$('#fix-btn').click(function(){
	$('.log').css('display','none');
	
	$('.log-fix').css('display','block');
	
});
$('#reset-btn').click(function(){
	$('.log').css('display','none');
	$('.log-reset').css('display','block');
	
});
$('#del-btn').click(function(){
	$('.log').css('display','none');
	$('.log-delete').css('display','block');
});
</script>
</body>
</html>

