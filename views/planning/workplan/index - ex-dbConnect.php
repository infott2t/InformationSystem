<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<!--study, bootstrap. http://getbootstrap.com/css/ -->
<html>
<head>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Information System for work </title>
<link rel="stylesheet" href="https://necolas.github.io/normalize.css/6.0.0/normalize.css"><!--imporved-cross-browser rendering-->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css"><!--http://www.w3school.com, w3.css-->
<link href="/views/css/bootstrap.min.css" rel="stylesheet"><!--basic template, bootstrap-->

<link rel="stylesheet" href="/views/css/styles.css"> 

</head>

<body>
<div class="container-fluid">
 <div class="row" style="padding-top:15px;">
 	<div class="col col-sm-6 col-md-6">
 		<div class="panel panel-default panel-notice">
			<div class="panel-heading"><h1>WORK PLANNING</h1></div>
			<div class="panel-body">
				<h4>On Diary, Choose work.</h4>
				<h4>Design work plan to yourself.</h4>
			</div>
 		</div>
 	</div>
 	<div class="col col-sm-6 col-md-6">
 		<div class="panel panel-default panel-notice">
			<div class="panel-heading"><h2>WORK PLAN</h2></div>
			<div class="panel-body">
				<p>Check time, menufacture work.</p>
				<p>Check the work plan. and choose work.</p>
			</div>
 		</div>	
 	</div>
</div>
<!--<div class="row">
	<div class="panel panel-default">
		<div class="panel-heading"><h4>Circumtance,Table. work today. 2017/05/07</h4></div>
		<div class="panel-body">
		<div class="row">
			<div class="col col-sm-6">
				<div class="panel panel-default">
				  <div class="panel-heading">Table Description= Part</div>
				  <div class="panel-body">
					  <p>E(Electronics Parts), H(Handicraft), F(Food), D(Delivery Service)</p>
				  </div>
				</div>
			</div>
			<div class="col  col-sm-6">
				<div class="panel panel-default">
				  <div class="panel-heading">Table Description= Period:Time</div>
				  <div class="panel-body">
					<p>Period - working period time. ex) 1H: 1 hour working.</p>
					<p>Time - Starting time. ex) 8: 08:00, starting work.</p>
				  </div>
				</div>				
			</div>
		</div>	
		<div style="padding:5px 0px;"></div>
		<div class="col" style="overflow: scroll">
			 
			<table id="table-work" class="table table-striped table-bordered">
		  	<thead>
			  <tr><th>Part,Room No.</th><th>Period:Time</th><th>vacancy</th></tr>
			  </thead>
			  <tbody>
			  	<?php foreach($work_plan as $row):?>
			   <tr>
			   <td><span><?php echo $row['ABC']?></span>, <span><?php echo $row['R_NO']?></span></td>
			   <td><span class="period"><?php echo $row['P']?>H</span>:<span><?php echo $row['T']?></span></td>
			   <td><span><?php echo $row['VY']?></span>/<span>2</span></td>
			   </tr>
			   <?php endforeach?>
			  </tbody>
			</table>
			</div>
		</div>
	</div>
</div>-->
 
<div class="panel panel-default panel-normal">
	<div class="panel-heading"><h4>Find work by, Work Type</h4></div>
		<div class="panel-body" id="control-panel">
		<div class="row">
		 <div class="col-xs-6 col-sm-3 col-lg-3" style="padding:0px 3px;">
		 <div class="panel panel-default panel-btn" style="margin-bottom:5px;border-color:#eee;">
			 <div class="panel-body" style="padding:5px;">
				<button type="button" class="work-type btn btn-default btn-sm btn-menu" style="padding: 0px 6px;" ><h5 style="display: inline-block;">MOVE a burden</h5></button>
				<div class="text" style="display:none;">Products and parts moving a cart, simple handling.</div> 
			 </div>
		 </div>
		  </div><!-- /.col-lg-6 -->
		  <div class="col-xs-6 col-sm-3 col-lg-3" style="padding:0px 5px;">
		  <div class="panel panel-default panel-btn" style="margin-bottom:5px;border-color:#eee;">
			 <div class="panel-body" style="padding:5px;">
				<button type="button" class="work-type btn btn-default btn-sm btn-menu" style="padding: 0px 6px;" ><h5 style="display: inline-block;">Chair work</h5></button>
				<div class="text" style="display:none;">Sit a chiar work. highly focusing on working time.</div> 
			 </div>
		   </div>
		  </div><!-- /.col-lg-6 -->
		  <div class="col-xs-6 col-sm-3 col-lg-3" style="padding:0px 5px;">
		   <div class="panel panel-default panel-btn" style="margin-bottom:5px;border-color:#eee;">
			 <div class="panel-body" style="padding:5px;">
				<button type="button" class="work-type btn btn-default btn-sm btn-menu" style="padding: 0px 6px;"><h5 style="display: inline-block;">Control panel</h5></button>
				<div class="text" style="display:none;">Control machine, monitering and input information manufacture.</div>
			 </div>
		   </div>	
		  </div><!-- /.col-lg-6 -->
		  <div class="col-xs-6 col-sm-3 col-lg-3" style="padding:0px 5px;">
		   <div class="panel panel-default panel-btn" style="margin-bottom:5px;border-color:#eee;">
			 <div class="panel-body active" style="padding:5px;">
				<button type="button" class="work-type btn btn-default btn-sm btn-menu" style="padding: 0px 6px;"><h5 style="display: inline-block;">Researching</h5></button>	
				<div class="text" style="display:none;">Reserching, suvey and paping work.</div>
			 </div>
		   </div>		
		  </div><!-- /.col-lg-6 -->
		  </div><!--row-->
		  <div class="row">
		  <div class="col" style="padding:0px 5px;">
		  	<div id="text-box" class="alert work-type-des" role="alert"  style="height:100px;margin-bottom:0px;" >
		  		<h4>&nbsp;</h4>
		  	</div>
		  	</div>
		  </div><!--row-->
		  <div class="row">
				<div class="col">
					<div class="panel panel-default" style="margin-bottom:0px;border-color:#25292D;background-color:#25292D;">
				 <div class="panel-body" style="padding:5px 5px;">
					 <div class="active-div">
					 	<button type="button" disabled="disabled" class="append-btn btn btn-default btn-block" style="padding:0px 5px;"><h4>Find</h4></button>
					 </div>
				 </div>
			   </div>
				</div>
		  </div>
		  <div class="row">
			  <div class="col-xs-6 col-sm-3 col-lg-3" style="padding:0px 5px;">
			   <div class="panel panel-default panel-btn" style="margin-bottom:5px;border-color:#eee;">
				 <div class="panel-body" style="padding:5px;">
					<button type="button" class="work-type btn btn-default btn-sm btn-menu" style="padding:0px 6px;" ><h5 style="display: inline-block;">Drive In</h5></button>
					<div class="text" style="display:none;">Driving car, In a Buildings. Need a licence.</div>
				 </div>
			   </div>
			  </div>
			  <div class="col-xs-6 col-sm-3 col-lg-3" style="padding:0px 5px;">
			   <div class="panel panel-default panel-btn" style="margin-bottom:5px;border-color:#eee;">
				 <div class="panel-body" style="padding:5px;">
					<button type="button" class="work-type btn btn-default btn-sm btn-menu" style="padding: 0px 6px;" ><h5 style="display: inline-block;">Drive Out</h5></button>
					<div class="text" style="display:none;">Driving to Delivery product, Outway. Need a licence.</div>
				 </div>
			   </div>
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
      <ul class="nav navbar-nav">
        <li><a href="/index.php/welcome/">Welcome</a></li>
        <li><a href="/index.php/whereInformation/">Where</a></li>
		<li class="dropdown active"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Planning<span class="sr-only">(current)</span><span class="caret"></span></a>
   		<ul class="dropdown-menu">
           	<li><a style="background-color: chartreuse;"  href="/index.php/planning/workplan/">Work plan</a></li>	
           	<li><a href="/index.php/planning/studyplan/">Study plan</a></li>
           	<li><a href="/index.php/planning/">plan</a></li>		
        </ul>
   		</li>
    	
     	<li><a href="/index.php/claime/">Claime</a></li>
     	<li><a href="/index.php/diarly/">Diarly</a></li>
      </ul>
      
     <!-- <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>-->
       <ul class="nav navbar-nav navbar-left">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Link<span class="caret"></span></a>
          <ul class="dropdown-menu">
           	<li><p>This website, Under the Construction. VERSION 17-2.</p></li>
      		<li><a href="https://github.com/ee32320/InformationSystem">Move a github</a></li>
          </ul>
        </li>
      </ul>
      
    </div><!-- /.navbar-collapse -->
      
  </div>
</nav>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script><!--basic template -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>


  
 
<!--https://datatables.net/-->
<script src="/views/js/bootstrap.min.js"></script>
<script>
$(document).ready(function(){
	
	 
});
$(document).on('click','tr',function(){
	//alert('click');
	if($(this).hasClass('info')==true){
		$(this).removeClass('info');
	}else{
	$(this).addClass('info');
		}
});

</script>	
 <script>
$(document).on('click','.panel',function(){
	if($(this).hasClass("panel-info")==false){
	$(this).addClass("panel-info");
	$(this).find('.btn-menu').each(function(){
		if($(this).hasClass('btn-primary')==false){
		$(this).addClass('btn-info');
		}
	});
	}else{
		 
	}
});	
	 
$(document).on('click','.work-type',function(){
				 // alert($(this).parent('.panel-body').find('.text').text());
	
	 
	 
	if($(this).hasClass('btn-primary')==false){
		
		$(document).find('.work-type').each(function(){
		if($(this).hasClass('btn-info')==true){
			$(this).removeClass('btn-info');
		}
		$(this).removeClass('btn-primary');
		
		if($(this).hasClass('btn-info')==false){
			$(this).addClass('btn-info');
		}
		});
		
		$('.append-btn').remove();
		$(this).removeClass('btn-info').addClass('btn-primary');
		
		$('.work-type-des').css('display','block');
		$('.work-type-des').addClass('alert-info');
		$('.work-type-des').find('h4').text($(this).parent('.panel-body').find('.text').text());
		
		if($(this).text()=="MOVE a burden"){
		$('.active-div').append('<button style="padding:0px 5px;" class="append-btn btn btn-block btn-success"><h4 style="display:inline-block">Find</h4>&nbsp;<span class="glyphicon glyphicon-ok"></span></button>');
		}
		if($(this).text()=="Chair work"){
		$('.active-div').append('<button style="padding:0px 5px;" class="append-btn btn btn-block btn-success" ><h4 style="display:inline-block">Find</h4>&nbsp;<span class="glyphicon glyphicon-ok"></span></button>');
		}
		if($(this).text()=="Control panel"){
		$('.active-div').append('<button style="padding:0px 5px;" class="append-btn btn btn-block btn-success" ><h4 style="display:inline-block">Find</h4>&nbsp;<span class="glyphicon glyphicon-ok"></span></button>');
		}
		if($(this).text()=="Researching"){
		$('.active-div').append('<button style="padding:0px 5px;" class="append-btn btn btn-block btn-success" ><h4 style="display:inline-block">Find</h4>&nbsp;<span class="glyphicon glyphicon-ok"></span></button>');
		}
		if($(this).text()=="Drive In"){
		$('.active-div').append('<button style="padding:0px 5px;" class="append-btn btn btn-block btn-success" ><h4 style="display:inline-block">Find</h4>&nbsp;<span class="glyphicon glyphicon-ok"></span></button>');
		}
		if($(this).text()=="Drive Out"){
		$('.active-div').append('<button style="padding:0px 5px;" class="append-btn btn btn-block btn-success"><h4 style="display:inline-block">Find</h4>&nbsp;<span class="glyphicon glyphicon-ok"></span></button>');
		}
		
	}else{
		$('.work-type-des').css('display','block');
		//$('.work-type-des').removeClass('alert-info');
		$('.work-type-des').find('h4').html("&nbsp;");
		
		$(this).removeClass('btn-primary');
		$('.append-btn').remove();
		$('.active-div').append('<button style="padding:0px 5px;" class="append-btn btn btn-block btn-default" disabled="disabled"><h4>Find</h4></button>');
		if($(this).hasClass('btn-info')==false){
			$(this).addClass('btn-info');
		}
	}
	
});
	 
$('.panel').hover(function(){
	
	if($(this).hasClass("panel-info")==false){
		$(this).addClass("panel-info");
		
		$(document).find('.panel-btn').each(function(){
			$(this).addClass("panel-info");
		});
		
		$(document).find(".work-type").each(function(){
			if($(this).hasClass("btn-primary")==false){
			$(this).addClass("btn-info");
		}
	
	});	
		
	$("#text-box").css('display','block');
	$("#text-box").addClass('alert-info');
		
	}
});
	 
$(document).find('.panel-notice').each(function(){
		
		if($(this).hasClass('panel-info')==false){
		$(this).addClass('panel-info');
		}
		
		$(this).find('.panel-body').css('background-color','#25292D');
		$(this).find('.panel-body').css('color','white');
});
$('#control-panel').css('background-color','#25292D');
$(document).find('.panel-normal').each(function(){

	if($(this).hasClass('panel-info')==false){
		$(this).addClass('panel-info');
		}
});
	 
</script>
 
</body>

</html>

