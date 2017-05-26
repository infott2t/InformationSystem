<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!--study, bootstrap. http://getbootstrap.com/css/ -->
<html>
<head>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>Information System for work</title>
<link rel="stylesheet" href="https://necolas.github.io/normalize.css/6.0.0/normalize.css"><!--imporved-cross-browser rendering-->
 
<link href="/views/css/bootstrap.min.css" rel="stylesheet"><!--basic template, bootstrap-->
<link rel="stylesheet" href="/views/css/styles.css">

<style type="text/css">
	body { padding-bottom: 70px; 
	}
	p{
		margin-bottom: 3px;
	}
	h3{
		margin-top: 5px;
	}
	.panel {
		margin-bottom: 10px;
	}
	.panel-info > .panel-heading {
		padding: 1px 10px;
		padding-top: 3px;
	
	}
	.col {
		padding: 0px 5px;
	}
	.col-title{
		padding:0px;
	}
	.col-text{
		padding-left:10px;
		padding-right:5px;
	}
	.col-img{
		padding:15px 0px;
	}
	
	.col-img-small{
		padding: 0px; 5px;
		padding-bottom: 15px;
		
	}
	.col-img-small-2{
		padding: 0px; 5px;
		padding-bottom: 25px;
		
	}
	
	.panel-body {
    padding: 5px;
	}
	.panel-body-nav {
		padding: 20px;
		padding-bottom: 0px;
	}
	
	.panel-info > .panel-heading > h3{
		margin-top: 5px;
	
	}
	#sidebar-wrapper{
		padding-top: 15px;
		z-index: 99;
		position: absolute;
		width: 0;
		height: 100%;
		overflow-y: hidden;
		overflow: scroll;
		background-color: white; 
		 
		
	}
	 
 
	.menu-toggle:hover{
		background-color: #337ab7;
		color:white;
	}
	
	/*sidebar, border0px */
	.panel-b0{
		border-radius: 0px; 
		 
	}
	
	/*#sidebar-nav-btn {
		background-color:
	}*/
	/* main-content */
	#page-content-wrapper{
		width:100%;
		position:absolute;
		padding: 15px;
		 
	}
	
	/**sidebar, to display */
	#wrapper.menuDisplayed #sidebar-wrapper{
		width: 270px;
		height:100%;
		
	}
	
	#wrapper.menuDisplayed #page-content-wrapper{
		/*padding-right: 290px;*/
		
	}
@media (min-width: 320px){
	img{
		max-width: 200px;
	}	
}
@media (min-width: 360px){
	img{
		max-width: 250px;
	}	
}
@media (min-width: 768px){
	img{
		max-width:150px;
	}
	h3{
		font-size: 20px;
	}
	.lg-img{
		max-width:250px;
	}
	.md-img-small-25{
		padding-top:25px;
	}
	.md-img-small-10{
		padding-top:10px;
	}
	
}
@media (min-width: 970px){
	img{
		max-width:250px;
	}
	
	.lg-img{
		max-width:370px;
	}
	.md-img{
		max-width:170px;
	}
	.lib-img{
		max-width:220px;
	}
	p{
		font-size:18px;
	}
}
@media (min-width: 1024px){
	img{
		max-width:300px;
	}
	.lib-img{
		max-width:220px;
	}
	p{
		font-size:18px;
	}
	.md-img-small-50{
		padding-top:20px;
	}
	.md-img-small-10{
		padding-top:20px;
	}
}
@media (min-width: 1366px){
	img{
		max-width:300px;
	}
	p{
		font-size:18px;
	}
}
	#scroll{
		position:relative;
	}
	.fixed{
		position:fixed;
		left:0;
	}
	
</style>
</head>

<body onload="realScreen()">
<div id="wrapper">
	<div id="page-content-wrapper">
		<!--<div class="container-fluid">-->
			
					<div class="panel panel-default">
						<div class="panel-heading"><h1 id="tt">Where Information</h1></div>
							<div class="panel-body"></div>
					</div>
					 <a role="button" id="navfix" class="btn btn-info btn-block btn-md menu-toggle" style="text-align: center;border-radius: 0px;">Open Sidebar&nbsp;<span class="glyphicon glyphicon-share-alt"></span></a> 
 		     		
  		     		 <br/>
  		     		 <div style="padding:40px 0px;"></div>
					<div class="panel panel-default">
						<div class="panel-heading"><h4>Buildings, Find Room.</h4></div>
						<div class="panel-body">
							<p>We assign to guest, our facility.</p>
							<p>Workplace, Study room, office, convinience room.</p>
							<p>Check, please. our facility for you.</p>
						</div>
					</div>
		
		<div style="padding: 5px 0px;" id="elec-map"></div>
		<div class="panel panel-default">
  			<div class="panel-heading">
  				<h3 >Room A, B, C Electronic Parts</h3>
  			</div>
  			<div class="panel-body">
				<div class="container-fluid">
				 <div class="row">
					<div class="col col-sm-6 delete-screen zoom" id="zoom1" style="text-align: center; padding-top:20px;">  
						<img class="lg-img" src="/views/whereinformation/images/maps/ABC.jpg"  alt="Image, map. Room A,B,C. Electronic Parts">
					</div> 	
					
					<div class="col col-sm-12" style="text-align: center;padding:15px 0px;">
				
					<img class="lg-img" src="/views/whereinformation/images/maps/ABC1.jpg"  alt="Image, map(blue color). Room A,B,C. Electronic Parts">
				
					</div>
				 </div>
				</div>
  			</div>
		</div>
		<div style="padding: 5px 0px;" id="elec-A"></div>
		<div class="panel panel-default">
  			<div class="panel-heading">
  				<h3 >Electronic parts-A ROOM</h3>
  			</div>
  			<div class="panel-body">
				<div class="container-fluid">
				 <div class="row">
					<div class="col col-sm-6 delete-screen" style="text-align: center; padding-top:20px;">  
						<img  src="/views/whereinformation/images/maps/ROOM_A_MAP.jpg" class="lg-img" alt="Image, map. Room A(A1~A5). Electronic parts">
					</div> 	
					<div class="col col-sm-6 col-img" style="text-align: center;">
				
					<img class="lg-img" src="/views/whereinformation/images/maps/A15.jpg" alt="Image, map(blue color). Room A(A1~A5). Electronic parts">
				
					</div>
					<div class="col col-sm-6" style="text-align: left;">
						<br/>
						<p>ASSEMBLY AUTOMATION FUNITURE</p>
						<p>For example, Constructer air controll instrument Tool, door set.</p>
						<p>Make a industry automation funiture.</p>
					</div>
				 </div>
				</div>
  			</div>
		</div>
		<div class="container-fluid">
		<div class="row">
		<div class="col col-sm-6">
		<div style="padding: 5px 0px;" id="elec-A1"></div>
		<div class="panel panel-default">
  			<div class="panel-heading">
  				<div class="container-fluid">
  					<div class="row">
  						<div class="col col-xs-6 col-title" ><h3>A-1 ROOM</h3></div>
  						<div class="col col-xs-6 col-title" style="text-align: left"><h3>Electronic parts</h3></div>
  					</div>
  				</div>
  			</div>
  			<div class="panel-body">
				<div class="container-fluid">
				 <div class="row">
					<div class="col col-sm-6 mini-screen col-img-small" style="text-align: center">  
						<br/>
						<img class="md-img md-img-small-30" src="/views/whereinformation/images/maps/A1.jpg"  alt="Image, map. Room A(A1). Electronic parts">
					</div> 	
					<div class="col col-sm-6 col-text" style="text-align: left;">
						<br/>
						<p>Room A-1.</p>
						<p>A : Assembly task.</p>
						<p>B : Machine (tag-RA1) - testting parts.</p>
						<p>C : Store parts and tool.</p>
					</div>
				 </div>
				</div>
  			</div>
		</div>
		</div>
		<div class="col col-sm-6">
		<div style="padding: 5px 0px;" id="elec-A2"></div>
		<div class="panel panel-default">
  			<div class="panel-heading">
  				<div class="container-fluid">
  					<div class="row">
  						<div class="col col-xs-6 col-title" ><h3>A-2 ROOM</h3></div>
  						<div class="col col-xs-6 col-title" style="text-align: left"><h3>Electronic parts</h3></div>
  					</div>
  				</div> 
  			</div>
  			<div class="panel-body">
				<div class="container-fluid">
				 <div class="row">
					<div class="col col-sm-6 mini-screen col-img-small" style="text-align: center"> 
						<br/> 
						<img class="md-img" src="/views/whereinformation/images/maps/A2.jpg"  alt="Image, map. Room A(A2). Electronic parts">
					</div> 	
					<div class="col col-sm-6 col-text" style="text-align: left;">
						<br/>
						<p>Room A-2.</p>
						<p>A : Machine (tag-RA2a) - large parts assemble.</p>
						<p>B : Machine (tag-RA2b) - testting parts and Store.</p>
					</div>
				 </div>
				</div>
  			</div>
		</div>
		</div>
		</div><!--row-->
		</div><!--containerfluid, sd6-->
		<div class="container-fluid">
		<div class="row">
		<div class="col col-sm-6">
		<div style="padding: 5px 0px;" id="elec-A3"></div>
		<div class="panel panel-default">
  			<div class="panel-heading">
  				<div class="container-fluid">
  					<div class="row">
  						<div class="col col-xs-6 col-title" ><h3>A-3 ROOM</h3></div>
  						<div class="col col-xs-6 col-title" style="text-align: left"><h3>Electronic parts</h3></div>
  					</div>
  				</div>
  			</div>
  			<div class="panel-body">
				<div class="container-fluid">
				 <div class="row">
					<div class="col col-sm-6 mini-screen col-img-small" style="text-align: center">
						<br/>   
						<img class="md-img md-img-small-30" src="/views/whereinformation/images/maps/A3.jpg"  alt="Image, map. Room A(A3). Electronic parts">
					</div> 	
					<div class="col col-sm-6 col-text" style="text-align: left;">
						<br/>
						<p>Room A-3.</p>
						<p>A : Machine (tag-RA3a) - medium parts assemble.</p>
						<p>B : Machine (tag-RA3b) - testting parts and Store.</p>
					</div>
				 </div>
				</div>
  			</div>
		</div>
		</div>
		<div class="col col-sm-6">
		<div style="padding: 5px 0px;" id="elec-A4"></div>
		<div class="panel panel-default">
  			<div class="panel-heading">
  				<div class="container-fluid">
  					<div class="row">
  						<div class="col col-xs-6 col-title" ><h3>A-4 ROOM</h3></div>
  						<div class="col col-xs-6 col-title" style="text-align: left"><h3>Electronic parts</h3></div>
  					</div>
  				</div>
  			</div>
  			<div class="panel-body">
				<div class="container-fluid">
				 <div class="row">
					<div class="col col-sm-6 mini-screen col-img-small" style="text-align: center">  
						<br/> 
						<img class="md-img" src="/views/whereinformation/images/maps/A4.jpg"  alt="Image, map. Room A(A4). Electronic parts">
					</div> 	
					<div class="col col-sm-6 col-text" style="text-align: left;">
						<br/>
						<p>Room A-4.</p>
						<p>A : Store medium, small parts.</p>
						<p>B : Stroe large parts.</p>
					</div>
				 </div>
				</div>
  			</div>
		</div>
		</div>
		</div><!--row-->
		</div><!--containerfluid, sd6-->
		<div class="container-fluid">
		<div class="row">
		<div class="col col-sm-6">
		<div style="padding: 5px 0px;" id="elec-A5"></div>
		<div class="panel panel-default">
  			<div class="panel-heading">
  				<div class="container-fluid">
  					<div class="row">
  						<div class="col col-xs-6 col-title" ><h3>A-5 ROOM</h3></div>
  						<div class="col col-xs-6 col-title" style="text-align: left"><h3>Electronic parts</h3></div>
  					</div>
  				</div>
  			</div>
  			<div class="panel-body">
				<div class="container-fluid">
				 <div class="row">
					<div class="col col-sm-6 mini-screen col-img-small" style="text-align: center">
						<br/>   
						<img class="md-img" src="/views/whereinformation/images/maps/A5.jpg"  alt="Image, map. Room A(A5). Electronic parts"/>
						<p></p>
					</div> 	
					<div class="col col-sm-6 col-text" style="text-align: left;">
						<br/>
						<p>Room A-5.</p>
						<p>A : Room A management and controll.</p>
					</div>
				 </div>
				</div>
  			</div>
		</div>
		</div>
		</div>
		</div>
		<div style="padding: 5px 0px;" id="elec-B"></div>
		<div class="panel panel-default">
  			<div class="panel-heading">
  				<h3 >Electronic parts-B ROOM</h3>
  			</div>
  			<div class="panel-body">
				
				<div class="container-fluid">
				 <div class="row">
					<div class="col col-sm-6 delete-screen" style="text-align: center; padding-top:20px;">  
						<img src="/views/whereinformation/images/maps/ROOM_B_MAP.jpg" style="max-width:100%;" alt="Image, map. Room B(B1~B3). Electronic parts">
					</div> 	
					<div class="col col-sm-6 col-img" style="text-align: center;">
					<img class="lg-img" src="/views/whereinformation/images/maps/B13.jpg"  alt="Image, map(blue color). Room B(B1~B3). Electronic parts">
					</div>
					<div class="col col-sm-6" style="text-align: left;">
						<br/>
						<p>ASSEMBLY Constructer Instrument</p>
						<p>Make a Middle Heavy Constructer device throught electronics.</p>
						<p>Use this device POLLUTION EXTINCT.</p>
					</div>
				 </div>
				</div>
  			</div>
		</div>
		<div class="container-fluid">
		<div class="row">
		<div class="col col-sm-6">
		<div style="padding: 5px 0px;" id="elec-B1"></div>
		<div class="panel panel-default">
  			<div class="panel-heading">
  			<div class="container-fluid">
  					<div class="row">
  						<div class="col col-xs-6 col-title"><h3>B-1 ROOM</h3></div>
  						<div class="col col-xs-6 col-title" style="text-align: left"><h3>Electronic parts</h3></div>
  					</div>
  				</div> 
  			</div>
  			<div class="panel-body">
				<div class="container-fluid">
				 <div class="row">
					<div class="col col-sm-6 mini-screen col-img-small-2" style="text-align: center"> 
						<br/>  
						<img class="md-img" src="/views/whereinformation/images/maps/B1.jpg"  alt="Image, map. Room B(B1). Electronic parts">
					</div> 	
					<div class="col col-sm-6" style="text-align: left;">
						<br/>
						<p>Room B-1, Maps Announce.</p>
						<p>A : Assembly task.</p>
						<p>B : Assembly task.</p>
						<p>C : Store.</p>
						<p>D : Store.</p>
					</div>
				 </div>
				</div>
  			</div>
		</div>
		</div>
		<div class="col col-sm-6">
		<div style="padding: 5px 0px;" id="elec-B2"></div>
		<div class="panel panel-default">
  			<div class="panel-heading">
  				<div class="container-fluid">
  					<div class="row">
  						<div class="col col-xs-6 col-title"><h3>B-2 ROOM</h3></div>
  						<div class="col col-xs-6 col-title" style="text-align: left"><h3>Electronic parts</h3></div>
  					</div>
  				</div> 
  			</div>
  			<div class="panel-body">
				<div class="container-fluid">
				 <div class="row">
					<div class="col col-sm-6 mini-screen col-img-small-2" style="text-align: center"> 
						<br/>  
						<img class="md-img" src="/views/whereinformation/images/maps/B2.jpg"  alt="Image, map. Room B(B2). Electronic parts">
					</div> 	
					<div class="col col-sm-6" style="text-align: left;">
						<br/>
						<p>Room B-2, Maps Announce.</p>
						<p>A : Assembly task.</p>
						<p>B : Assembly task.</p>
						<p>C : Store.</p>
						<p>D : Store.</p>
					</div>
				 </div>
				</div>
  			</div>
		</div>
		</div>
		</div>
		<div class="row">
		<div class="col col-sm-6">
		<div style="padding: 5px 0px;" id="elec-B3"></div>
		<div class="panel panel-default">
  			<div class="panel-heading">
  				<div class="container-fluid">
  					<div class="row">
  						<div class="col col-xs-6 col-title"><h3>B-3 ROOM</h3></div>
  						<div class="col col-xs-6 col-title" style="text-align: left"><h3>Electronic parts</h3></div>
  					</div>
  				</div> 
  			</div>
  			<div class="panel-body">
				<div class="container-fluid">
				 <div class="row">
					<div class="col col-sm-6 mini-screen col-img-small" style="text-align: center">  
						<br/> 
						<img class="md-img" src="/views/whereinformation/images/maps/B3.jpg"  alt="Image, map. Room B(B3). Electronic parts">
					</div> 	
					<div class="col col-sm-6" style="text-align: left;">
						<br/>
						<p>Room B-3, Maps Announce.</p>
						<p>A : Room B management and controll.</p>
					</div>
				 </div>
				</div>
  			</div>
		</div>
		</div>
		</div>
		</div>
		<div style="padding: 5px 0px;" id="elec-C"></div>
		<div class="panel panel-default">
  			<div class="panel-heading">
  				<h3 >Electronic parts-C ROOM</h3>
  			</div>
  			<div class="panel-body">
				<div class="container-fluid">
				 <div class="row">
					<div class="col col-sm-6 delete-screen" style="text-align: center; padding-top:20px;">  
						<img src="/views/whereinformation/images/maps/ROOM_C_MAP.jpg" style="max-width:100%;" alt="Image, map. Room C(C1~C2). Electronic parts">
					</div> 	
					<div class="col col-sm-6 col-img" style="text-align: center;">
					<img class="lg-img" src="/views/whereinformation/images/maps/C12.jpg"  alt="Image, map(blue color). Room C(C1~C2). Electronic parts">
					</div>
					<div class="col col-sm-6" style="text-align:left;">
						<br/>
						<p>ASSEMBLY SENSING TRANS DEVICE</p>
						<p>Make a senser device Check pollution, close room, Check device.</p>
						<p>Make a senser-trans-data device like a alraming.</p>
					</div>
				 </div>
				</div>
  			</div>
		</div>
		<div class="container-fluid">
		<div class="row">
		<div class="col col-sm-6">
		<div style="padding: 5px 0px;" id="elec-C1"></div>
		<div class="panel panel-default">
  			<div class="panel-heading">
  				<div class="container-fluid">
  					<div class="row">
  						<div class="col col-xs-6 col-title"><h3>C-1 ROOM</h3></div>
  						<div class="col col-xs-6 col-title" style="text-align: left"><h3>Electronic parts</h3></div>
  					</div>
  				</div>
  			</div>
  			<div class="panel-body">
				<div class="container-fluid">
				 <div class="row">
					<div class="col col-sm-6 mini-screen col-img-small" style="text-align: center"> 
						<br/> 
						<img class="md-img" src="/views/whereinformation/images/maps/C1.jpg"  alt="Image, map. Room C(C1). Electronic parts">
					</div> 	
					<div class="col col-sm-6" style="text-align: left;">
						<br/>
						<p>Room C-1, Maps Announce.</p>
						<p>A : Assembly task.</p>
						<p>B : Machine (tag-RC1) - testting parts.</p>
						<p>C : Store parts and tool.</p>
					</div>
				 </div>
				</div>
  			</div>
		</div>
		</div>
		<div class="col col-sm-6">
		<div style="padding: 5px 0px;" id="elec-C2"></div>
		<div class="panel panel-default">
  			<div class="panel-heading">
  				<div class="container-fluid">
  					<div class="row">
  						<div class="col col-xs-6 col-title"><h3>C-2 ROOM</h3></div>
  						<div class="col col-xs-6 col-title" style="text-align: left"><h3>Electronic parts</h3></div>
  					</div>
  				</div>
  			</div>
  			<div class="panel-body">
				<div class="container-fluid">
				 <div class="row">
					<div class="col col-sm-6 mini-screen col-img-small" style="text-align: center"> 
						<br/>  
						<img class="md-img" src="/views/whereinformation/images/maps/C2.jpg"  alt="Image, map. Room C(C2). Electronic parts">
					</div> 	
					<div class="col col-sm-6" style="text-align: left;">
						<br/>
						<p>Room C-2, Maps Announce.</p>
						<p>A : Room C management and controll.</p>
					</div>
				 </div>
				</div>
  			</div>
		</div>
		</div>
		</div>
		</div> <!--fsdfsd-->
		<div style="padding: 5px 0px;" id="handi-map"></div>
		<div class="panel panel-default">
  			<div class="panel-heading">
  				<h3 >Room D, E, F. Handicraft</h3>
  			</div>
  			<div class="panel-body"> 
				<div class="container-fluid">
				 <div class="row">
					<div class="col col-sm-6 delete-screen" style="text-align: center; padding-top:20px;">  
						<img src="/views/whereinformation/images/maps/DEF.jpg"  alt="Image, map. Room D,E,F. Handicraft">
					</div> 	
					<div  class="col col-sm-12" style="text-align: center;padding:30px 0px;">
					<img class="lg-img" src="/views/whereinformation/images/maps/DEF1.jpg"  alt="Image, map(blue color). Room D,E,F. Handicraft">
					<br/>
					</div>
				 </div>
				</div>
  			</div>
		</div>
		<div style="padding: 5px 0px;" id="handi-D"></div>
		<div class="panel panel-default">
  			<div class="panel-heading">
  				<h3>Handicraft-D ROOM</h3>
  			</div>
  			<div class="panel-body">
				<div class="container-fluid">
				 <div class="row">
					<div class="col col-sm-6 delete-screen" style="text-align: center; padding-top=20px;">  
						<img src="/views/whereinformation/images/maps/ROOM_D_MAP.jpg" style="max-width:100%;" alt="Image, map. Room D(D1~D3). Handicraft">
					</div> 	
					<div class="col col-sm-6 col-img" style="text-align: center;">
					<img class="lg-img" src="/views/whereinformation/images/maps/D13.jpg" alt="Image, map(blue color). Room D(D1~D3).  Handicraft">
					</div>
					<div class="col col-sm-6" style="text-align: left;">
						<br/>
						<p>Small handi tool</p>
						<p>Make a Belt, Wellet, Doll.</p>
						<p>Use fabric, leather. Sweing machine, hand making. Make a small Handicraft.</p>
					</div>
				 </div>
				</div>
  			</div>
		</div>
		<div class="container-fluid">
		<div class="row">
		<div class="col col-sm-6">
		<div style="padding: 5px 0px;" id="handi-D1"></div>
		<div class="panel panel-default">
  			<div class="panel-heading">
				<div class="container-fluid">
					<div class="row">
						<div class="col col-xs-6 col-title"><h3>D-1 ROOM</h3></div>
						<div class="col col-xs-6 col-title" style="text-align: left"><h3>Handicraft</h3></div>
					</div>
				</div>
  			</div>
  			<div class="panel-body">
				<div class="container-fluid">
				 <div class="row">
					<div class="col col-sm-6 mini-screen col-img-small-2" style="text-align: center">
						<br/> 
						<img class="md-img" src="/views/whereinformation/images/maps/D1.jpg"  alt="Image, map. Room D(D1). Handicraft">
					</div> 	
					<div class="col col-sm-6" style="text-align: left;">
						<br/>
						<p>Room D-1, Maps Announce.</p>
						<p>A : Assembly task.</p>
						<p>B : Machine (tag-RD1) - sewing task.</p>
						<p>C : Store parts and tool.</p>
					</div>
				 </div>
				</div>
  			</div>
		</div>
		</div>
		<div class="col col-sm-6">
		<div style="padding: 5px 0px;" id="handi-D2"></div>
		<div class="panel panel-default">
  			<div class="panel-heading">
  				<div class="container-fluid">
					<div class="row">
						<div class="col col-xs-6 col-title"><h3>D-2 ROOM</h3></div>
						<div class="col col-xs-6 col-title" style="text-align: left"><h3>Handicraft</h3></div>
					</div>
				</div>
  			</div>
  			<div class="panel-body">
				<div class="container-fluid">
				 <div class="row">
					<div class="col col-sm-6 mini-screen col-img-small-2" style="text-align: center">
						<br/>  
						<img class="md-img" src="/views/whereinformation/images/maps/D2.jpg"  alt="Image, map. Room D(D2). Handicraft">
					</div> 	
					<div class="col col-sm-6" style="text-align: left;">
						<br/>
						<p>Room D-2, Maps Announce.</p>
						<p>A : Assembly task.</p>
						<p>B : Assembly task.</p>
					</div>
				 </div>
				</div>
  			</div>
		</div>
		</div>
		</div>
		<div class="row">
		<div class="col col-sm-6">
		<div style="padding: 5px 0px;" id="handi-D3"></div>
		<div class="panel panel-default">
  			<div class="panel-heading">
  				<div class="container-fluid">
					<div class="row">
						<div class="col col-xs-6 col-title"><h3>D-3 ROOM</h3></div>
						<div class="col col-xs-6 col-title" style="text-align: left"><h3>Handicraft</h3></div>
					</div>
				</div>
  			</div>
  			<div class="panel-body">
				<div class="container-fluid">
				 <div class="row">
					<div class="col col-sm-6 mini-screen col-img-small" style="text-align: center">
						<br/>  
						<img class="md-img" src="/views/whereinformation/images/maps/D3.jpg"  alt="Image, map. Room D(D3). Handicraft">
					</div> 	
					<div class="col col-sm-6" style="text-align: left;">
						<br/>
						<p>Room D-3, Maps Announce.</p>
						<p>A : Room D management and controll.</p>
					</div>
				 </div>
				</div>
  			</div>
		</div>
		</div>
		</div>
		</div>	
		<div style="padding: 5px 0px;" id="handi-E"></div>
		<div class="panel panel-default">
  			<div class="panel-heading">
  				<h3>Handicraft-E ROOM</h3>
  			</div>
  			<div class="panel-body">
				<div class="container-fluid">
				 <div class="row">
					<div class="col col-sm-6 delete-screen" style="text-align: center; padding-top=20px;">  
						<img src="/views/whereinformation/images/maps/ROOM_E_MAP.jpg" style="max-width:100%;" alt="Image, map. Room E(E1~E2). Handicraft">
					</div> 	
					<div class="col col-sm-6 col-img" style="text-align: center;">
					<img class="lg-img" src="/views/whereinformation/images/maps/E12.jpg" alt="Image, map(blue color). Room E(E1~E2).  Handicraft">
					</div>
					<div class="col col-sm-6" style="text-align: left;">
					<br/>
					<p>Accessory</p>
		  			<p>Make a small Accessory.</p>
		  			<p>Badge, perfume, small toy. hand making.</p>
					</div>
				 </div>
				</div>
  			</div>
		</div>
		<div class="container-fluid">
		<div class="row">
		<div class="col col-sm-6">
		<div style="padding: 5px 0px;" id="handi-E1"></div>
		<div class="panel panel-default">
  			<div class="panel-heading">
  				<div class="container-fluid">
  					<div class="row">
  						<div class="col col-xs-6 col-title" ><h3>E-1 ROOM</h3></div>
  						<div class="col col-xs-6 col-title" style="text-align: left"><h3>Handicraft</h3></div>
  					</div>
  				</div>
  			</div>
  			<div class="panel-body">
				<div class="container-fluid">
				 <div class="row">
					<div class="col col-sm-6 mini-screen col-img-small-2" style="text-align: center">  
					<br/>
						<img class="md-img" src="/views/whereinformation/images/maps/E1.jpg"  alt="Image, map. Room E(E1). Handicraft">
					</div> 	
					<div class="col col-sm-6" style="text-align: left;">
						<br/>
						<p>Room E-1, Maps Announce.</p>
						<p>A : Assembly task.</p>
					</div>
				 </div>
				</div>
  			</div>
		</div>
		</div>
		<div class="col col-sm-6">
		<div style="padding: 5px 0px;" id="handi-E2"></div>
		<div class="panel panel-default">
  			<div class="panel-heading">
  				<div class="container-fluid">
  					<div class="row">
  						<div class="col col-xs-6 col-title" ><h3>E-2 ROOM</h3></div>
  						<div class="col col-xs-6 col-title" style="text-align: left"><h3>Handicraft</h3></div>
  					</div>
  				</div>
  			</div>
  			<div class="panel-body">
				<div class="container-fluid">
				 <div class="row">
					<div class="col col-sm-6 mini-screen col-img-small" style="text-align: center">  
						<br/>
						<img class="md-img" src="/views/whereinformation/images/maps/E2.jpg"  alt="Image, map. Room E(E2). Handicraft">
					</div> 	
					<div class="col col-sm-6" style="text-align: left;">
						<br/>
						<p>Room E-2, Maps Announce.</p>
						<p>A :Room E management and controll.</p>
					</div>
				 </div>
				</div>
  			</div>
		</div>
		</div>
		</div>
		</div>
		<div style="padding: 5px 0px;" id="handi-F"></div>
		<div class="panel panel-default">
  			<div class="panel-heading">
  				<h3 >Handicraft-F ROOM</h3>
  			</div>
  			<div class="panel-body">
				<div class="container-fluid">
				 <div class="row">
					<div class="col col-sm-6 delete-screen" style="text-align: center; padding-top=20px;">  
						<img src="/views/whereinformation/images/maps/ROOM_F_MAP.jpg" style="max-width:100%;" alt="Image, map. Room F(F1~F2). Handicraft">
					</div> 	
					<div class="col col-sm-6 col-img" style="text-align: center;">
					<img class="lg-img" src="/views/whereinformation/images/maps/F12.jpg" alt="Image, map(blue color). Room F(F1~F2).  Handicraft">
					</div>
					<div class="col col-sm-6" style="text-align: left;">
					<br/>
					<p>Cloths</p>
		  			<p>Make a cloths. T-shirt, pants.</p>
		  			<p>Design and make.</p>
					</div>
				 </div>
				</div>
  			</div>
		</div>
		<div class="container-fluid">
		<div class="row">
		<div class="col col-sm-6">
		<div style="padding: 5px 0px;" id="handi-F1"></div>
		<div class="panel panel-default">
  			<div class="panel-heading">
  				<div class="container-fluid">
  					<div class="row">
  						<div class="col col-xs-6 col-title"><h3>F-1 ROOM</h3></div>
  						<div class="col col-xs-6 col-title" style="text-align: left"><h3>Handicraft</h3></div>
  					</div>
  				</div>
  			</div>
  			<div class="panel-body">
				<div class="container-fluid">
				 <div class="row">
					<div class="col col-sm-6 mini-screen col-img-small-2" style="text-align: center"> 
						<br/> 
						<img class="md-img" src="/views/whereinformation/images/maps/F1.jpg"  alt="Image, map. Room F(F1). Handicraft">
					</div> 	
					<div class="col col-sm-6" style="text-align: left;">
						<br/>
						<p>Room F-1, Maps Announce.</p>
					<p>A : cloths Design and sewing task.</p>
					</div>
				 </div>
				</div>
  			</div>
		</div>
		</div>
		<div class="col col-sm-6">
		<div style="padding: 5px 0px;" id="handi-F2"></div>
		<div class="panel panel-default">
  			<div class="panel-heading">
  				<div class="container-fluid">
  					<div class="row">
  						<div class="col col-xs-6 col-title"><h3>F-2 ROOM</h3></div>
  						<div class="col col-xs-6 col-title" style="text-align: left"><h3>Handicraft</h3></div>
  					</div>
  				</div>
  			</div>
  			<div class="panel-body">
				<div class="container-fluid">
				 <div class="row">
					<div class="col col-sm-6 mini-screen col-img-small" style="text-align: center">  
						<br/>
						<img class="md-img" src="/views/whereinformation/images/maps/F2.jpg"  alt="Image, map. Room F(F2). Handicraft">
					</div> 	
					<div class="col col-sm-6" style="text-align: left;">
						<br/>
						<p>Room F-2, Maps Announce.</p>
						<p>A : Room F management and controll.</p>
					</div>
				 </div>
				</div>
  			</div>
		</div>
		</div>
		</div>
		</div>
		<div style="padding: 5px 0px;" id="food-map"></div>
		<div class="panel panel-default">
  			<div class="panel-heading">
  				<h3 >Room G, H, I. FOOD</h3>
  			</div>
  			<div class="panel-body">
				<div class="container-fluid">
				 <div class="row">
					<div class="col col-sm-6 delete-screen" style="text-align: center; padding-top=20px;">  
						<img src="/views/whereinformation/images/maps/GHI.jpg"  alt="Image, map. Room G,H,I. Food">
					</div> 	 
					<div class="col col-sm-12" style="text-align: center;padding:35px 0px;">
					<img class="lg-img" src="/views/whereinformation/images/maps/GHI1.jpg"  alt="Image, map(blue color). Room G,H,I. Food">
					<br/>
					</div>
				 </div>
				</div>
  			</div>
		</div>
		<div style="padding: 5px 0px;" id="food-G"></div>
		<div class="panel panel-default">
  			<div class="panel-heading">
  				<h3 >Food-G ROOM</h3>
  			</div>
  			<div class="panel-body">
				<div class="container-fluid">
				 <div class="row">
					<div class="col col-sm-6 delete-screen" style="text-align: center; padding-top=20px;">  
						<img src="/views/whereinformation/images/maps/ROOM_G_MAP.jpg" style="max-width:100%;" alt="Image, map. Room G(G1~G2). Food">
					</div> 	
					<div class="col col-sm-6 col-img" style="text-align: center;">
					<img class="lg-img" src="/views/whereinformation/images/maps/G12.jpg" alt="Image, map(blue color). Room G(G1~G2). Food.  Handicraft">
					</div>
					<div class="col col-sm-6" style="text-align: left;">
						<br/>
						<p>Basic Ingredients</p>
		  				<p>Make a small Package, food ingredients. cut a vegetables package, add seasoning and Packaging, this use cook.</p>
					</div>
				 </div>
				</div>
  			</div>
		</div>
		<div class="container-fluid">
		<div class="row">
		<div class="col col-sm-6">
		<div style="padding: 5px 0px;" id="food-G1"></div>
		<div class="panel panel-default">
  			<div class="panel-heading">
  				<div class="container-fluid">
  					<div class="row">
  						<div class="col col-xs-6 col-title" ><h3>G-1 ROOM</h3></div>
  						<div class="col col-xs-6 col-title" style="text-align: left"><h3>Food</h3></div>
  					</div>
  				</div>
  			</div>
  			<div class="panel-body">
				<div class="container-fluid">
				 <div class="row">
					<div class="col col-sm-6 mini-screen col-img-small" style="text-align: center"> 
						<br/> 
						<img class="md-img" src="/views/whereinformation/images/maps/G1.jpg"  alt="Image, map. Room G(G1). Food">
					</div> 	
					<div class="col col-sm-6" style="text-align: left;">
						<br/>
						<p>Room G-1, Maps Announce.</p>
					<p>A : Machine (tag-RG1) Make add seasoning, pakaging food.</p>
					</div>
				 </div>
				</div>
  			</div>
		</div>
		</div>
		<div class="col col-sm-6">
		<div style="padding: 5px 0px;" id="food-G2"></div>
		<div class="panel panel-default">
  			<div class="panel-heading">
  				<div class="container-fluid">
  					<div class="row">
  						<div class="col col-xs-6 col-title" ><h3>G-2 ROOM</h3></div>
  						<div class="col col-xs-6 col-title" style="text-align: left"><h3>Food</h3></div>
  					</div>
  				</div>
  			</div>
  			<div class="panel-body">
				<div class="container-fluid">
				 <div class="row">
					<div class="col col-sm-6 mini-screen col-img-small" style="text-align: center">  
						<br/>
						<img class="md-img" src="/views/whereinformation/images/maps/G2.jpg"  alt="Image, map. Room G(G2). Food">
					</div> 	
					<div class="col col-sm-6" style="text-align: left;">
						<br/>
						<p>Room G-2, Maps Announce.</p>
						<p>A : Room G management and controll.</p>
					</div>
				 </div>
				</div>
  			</div>
		</div>
		</div>
		</div>
		</div>
		<div style="padding: 5px 0px;" id="food-H"></div>
		<div class="panel panel-default">
  			<div class="panel-heading">
  				<h3 >Food-H ROOM</h3>
  			</div>
  			<div class="panel-body">
				<div class="container-fluid">
				 <div class="row">
					<div class="col col-sm-6 delete-screen" style="text-align: center; padding-top=20px;">  
						<img src="/views/whereinformation/images/maps/ROOM_H_MAP.jpg" style="max-width:100%;" alt="Image, map. Room H(H1~H2). Food">
					</div> 	
					<div class="col col-sm-6 col-img" style="text-align: center;">
					<img class="lg-img" src="/views/whereinformation/images/maps/H12.jpg" alt="Image, map(blue color). Room H(H1~H2). Food.  Handicraft">
					</div>
					<div class="col col-sm-6" style="text-align: left;">
						<br/>
						<p>NOODLES</p>
		  				<p>NOODLES package.</p>
		  				<p>make a pizza doux, noodle, macarena.</p>
					</div>
				 </div>
				</div>
  			</div>
		</div>
		<div class="container-fluid">
		<div class="row">
		<div class="col col-sm-6">
		<div style="padding: 5px 0px;" id="food-H1"></div>
		<div class="panel panel-default">
  			<div class="panel-heading">
  				<div class="container-fluid">
  					<div class="row">
  						<div class="col col-xs-6 col-title" ><h3>H-1 ROOM</h3></div>
  						<div class="col col-xs-6 col-title" style="text-align: left"><h3>Food</h3></div>
  					</div>
  				</div>
  			</div>
  			<div class="panel-body">
				<div class="container-fluid">
				 <div class="row">
					<div class="col col-sm-6 mini-screen col-img-small" style="text-align: center">
						<br/>  
						<img class="md-img" src="/views/whereinformation/images/maps/H1.jpg"  alt="Image, map. Room H(H1). Food">
					</div> 	
					<div class="col col-sm-6" style="text-align: left;">
						<br/>
						<p>Room H-1, Maps Announce.</p>
						<p>A : Machine (tag-RG1) Make a Noodle, doux, macarena.</p>
					</div>
				 </div>
				</div>
  			</div>
		</div>
		</div>
		<div class="col col-sm-6">
		<div style="padding: 5px 0px;" id="food-H2"></div>
		<div class="panel panel-default">
  			<div class="panel-heading">
  				<div class="container-fluid">
  					<div class="row">
  						<div class="col col-xs-6 col-title" ><h3>H-2 ROOM</h3></div>
  						<div class="col col-xs-6 col-title" style="text-align: left"><h3>Food</h3></div>
  					</div>
  				</div>
  			</div>
  			<div class="panel-body">
				<div class="container-fluid">
				 <div class="row">
					<div class="col col-sm-6 mini-screen col-img-small" style="text-align: center"> 
						<br/> 
						<img class="md-img" src="/views/whereinformation/images/maps/H2.jpg"  alt="Image, map. Room H(H2). Food">
					</div> 	
					<div class="col col-sm-6" style="text-align: left;">
						<br/>
						<p>Room H-2, Maps Announce.</p>
						<p>A : Room H management and controll.</p>
					</div>
				 </div>
				</div>
  			</div>
		</div>
		</div>
		</div>
		</div>
		<div style="padding: 5px 0px;" id="food-I"></div>
		<div class="panel panel-default">
  			<div class="panel-heading">
  				<h3 >Food-I ROOM</h3>
  			</div>
  			<div class="panel-body">
				<div class="container-fluid">
				 <div class="row">
					<div class="col col-sm-6 delete-screen" style="text-align: center; padding-top=20px;">  
						<img src="/views/whereinformation/images/maps/ROOM_I_MAP.jpg" style="max-width:100%;" alt="Image, map. Room I(I1~I2). Food">
					</div> 	
					<div class="col col-sm-6 col-img" style="text-align: center;">
					<img class="lg-img" src="/views/whereinformation/images/maps/I12.jpg" alt="Image, map(blue color). Room I(I1~I2). Food.  Handicraft">
					</div>
					<div class="col col-sm-6" style="text-align: left;">
						<br/>
						<p>SeaFood</p>
		  				<p>Small fish menufacture.</p>
					</div>
				 </div>
				</div>
  			</div>
		</div>
		<div class="container-fluid">
		<div class="row">
		<div class="col col-sm-6">
		<div style="padding: 5px 0px;" id="food-I1"></div>
		<div class="panel panel-default">
  			<div class="panel-heading">
  				<div class="container-fluid">
  					<div class="row">
  						<div class="col col-xs-6 col-title" ><h3>I-1 ROOM</h3></div>
  						<div class="col col-xs-6 col-title" style="text-align: left"><h3>Food</h3></div>
  					</div>
  				</div>
  			</div>
  			<div class="panel-body">
				<div class="container-fluid">
				 <div class="row">
					<div class="col col-sm-6 mini-screen col-img-small-2" style="text-align: center">  
						<br/>
						<img class="md-img" src="/views/whereinformation/images/maps/I1.jpg"  alt="Image, map. Room I(I1). Food">
					</div> 	
					<div class="col col-sm-6" style="text-align: left;">
						<br/>
						<p>Room I-1, Maps Announce.</p>
						<p>A : pakage task.</p>
						<p>B : Machine (tag-RG1) - SeaFood menufacture.</p>
					</div>
				 </div>
				</div>
  			</div>
		</div>
		</div>
		<div class="col col-sm-6">
		<div style="padding: 5px 0px;" id="food-I2"></div>
		<div class="panel panel-default">
  			<div class="panel-heading">
  				<div class="container-fluid">
  					<div class="row">
  						<div class="col col-xs-6 col-title" ><h3>I-2 ROOM</h3></div>
  						<div class="col col-xs-6 col-title" style="text-align: left"><h3>Food</h3></div>
  					</div>
  				</div>
  			</div>
  			<div class="panel-body">
				<div class="container-fluid">
				 <div class="row">
					<div class="col col-sm-6 mini-screen col-img-small" style="text-align: center"> 
						<br/> 
						<img class="md-img" src="/views/whereinformation/images/maps/I2.jpg"  alt="Image, map. Room H(I2). Food">
					</div> 	
					<div class="col col-sm-6" style="text-align: left;">
						<br/>
						<p>Room I-2, Maps Announce.</p>
						<p>A : Room I management and controll.</p>
					</div>
				 </div>
				</div>
  			</div>
		</div>
		</div>
		</div>
		</div>
		<div style="padding: 5px 0px;" id="deli-map"></div>
		<div class="panel panel-default">
  			<div class="panel-heading">
  				<h3 >Room J, K, L. Delivery Service</h3>
  			</div>
  			<div class="panel-body">
				<div class="container-fluid">
				 <div class="row">
					<!--<div class="col col-sm-6 delete-screen" style="text-align: center; padding-top=20px;">  
						<img src="/views/whereinformation/images/maps/JKL.jpg"  alt="Image, map. Room J,K,L. Delivery Service">
					</div> -->	
					<div class="col col-sm-12" style="text-align: center;padding:10px 0px;">
					 <img class="lg-img" src="/views/whereinformation/images/maps/JKL1.jpg" alt="Image, map(blue color). Room J,K,L. Delivery Service(1/3)" style="display:block;margin:0px auto;">
					  <img class="lg-img" src="/views/whereinformation/images/maps/JKL2.jpg" alt="Image, map(blue color). Room J,K,L. Delivery Service(2/3)" style="display:block;margin:0px auto;">
					  <img class="lg-img" src="/views/whereinformation/images/maps/JKL3.jpg" alt="Image, map(blue color). Room J,K,L. Delivery Service(3/3)" style="display:block;margin:0px auto;">
					</div>
				 </div>
				</div>
  			</div>
		</div>
		<div style="padding: 5px 0px;" id="deli-J"></div>
		<div class="panel panel-default">
  			<div class="panel-heading">
  				<h3 >Delivery Serivce-J ROOM</h3>
  			</div>
  			<div class="panel-body">
				<div class="container-fluid">
				 <div class="row">
					<div class="col col-sm-6 delete-screen" style="text-align: center; padding-top=20px;">  
						<img src="/views/whereinformation/images/maps/ROOM_J_MAP.jpg" style="max-width:100%;" alt="Image, map. Room J(J1~J4). Delivery Service">
					</div> 	
					<div class="col col-sm-6 col-img" style="text-align: center;">
					<img class="lg-img" src="/views/whereinformation/images/maps/J14.jpg" alt="Image, map(blue color). Room J(J1~J4). Delivery Service">
					</div>
					<div class="col col-sm-6" style="text-align: left;">
						<br/>
						<p>Delivery store</p>
		  				<p>Maked a products and store.</p> 
		  				<p>Holding, and Check a store.</p>
					</div>
				 </div>
				</div>
  			</div>
		</div>
		<div class="container-fluid">
		<div class="row">
		<div class="col col-sm-6">
		<div style="padding: 5px 0px;" id="deli-J1"></div>
		<div class="panel panel-default">
  			<div class="panel-heading">
  				<div class="container-fluid">
  					<div class="row">
  						<div class="col col-xs-6 col-title"><h3>J-1 ROOM</h3></div>
  						<div class="col col-xs-6 col-title" style="text-align: left"><h3>Delivery Serivce</h3></div>
  					</div>
  				</div>
  			</div>
  			<div class="panel-body">
				<div class="container-fluid">
				 <div class="row">
					<div class="col col-sm-6 mini-screen col-img-small" style="text-align: center">  
						<br/>
						<img class="md-img" src="/views/whereinformation/images/maps/J1.jpg"  alt="Image, map. Room J(J1). Delivery Service">
					</div> 	
					<div class="col col-sm-6" style="text-align: left;">
						<br/>
						<p>Room J-1, Maps Announce.</p>
						<p>A : Small pakage task.</p>
						<p>B : Store.</p>
					</div>
				 </div>
				</div>
  			</div>
		</div>
		</div>
		<div class="col col-sm-6">
		<div style="padding: 5px 0px;" id="deli-J2"></div>
		<div class="panel panel-default">
  			<div class="panel-heading">
  				<div class="container-fluid">
  					<div class="row">
  						<div class="col col-xs-6 col-title"><h3>J-2 ROOM</h3></div>
  						<div class="col col-xs-6 col-title" style="text-align: left"><h3>Delivery Serivce</h3></div>
  					</div>
  				</div>
  			</div>
  			<div class="panel-body">
				<div class="container-fluid">
				 <div class="row">
					<div class="col col-sm-6 mini-screen col-img-small-2" style="text-align: center"> 
						<br/> 
						<img class="md-img" src="/views/whereinformation/images/maps/J2.jpg"  alt="Image, map. Room J(J2). Delivery Service">
					</div> 	
					<div class="col col-sm-6" style="text-align: left;">
						<br/>
						<p>Room J-2, Maps Announce.</p>
						<p>A : Medium pakage task.</p>
						<p>B : Store.</p>
					</div>
				 </div>
				</div>
  			</div>
		</div>
		</div>
		</div>
		<div class="row">
		<div class="col col-sm-6">
		<div style="padding: 5px 0px;" id="deli-J3"></div>
		<div class="panel panel-default">
  			<div class="panel-heading">
  				<div class="container-fluid">
  					<div class="row">
  						<div class="col col-xs-6 col-title"><h3>J-3 ROOM</h3></div>
  						<div class="col col-xs-6 col-title" style="text-align: left"><h3>Delivery Serivce</h3></div>
  					</div>
  				</div>
  			</div>
  			<div class="panel-body">
				<div class="container-fluid">
				 <div class="row">
					<div class="col col-sm-6 mini-screen col-img-small" style="text-align: center">  
						<br/>
						<img class="md-img" src="/views/whereinformation/images/maps/J3.jpg"  alt="Image, map. Room J(J3). Delivery Service">
					</div> 	
					<div class="col col-sm-6" style="text-align: left;">
						<br/>
						<p>Room J-3, Maps Announce.</p>
						<p>A : product serve machine(Car; tag-RJ1)</p>
						<p>B : Checkering, monitor.</p>
					</div>
				 </div>
				</div>
  			</div>
		</div>
		</div>
		<div class="col col-sm-6">
		<div style="padding: 5px 0px;" id="deli-J4"></div>
		<div class="panel panel-default">
  			<div class="panel-heading">
  				<div class="container-fluid">
  					<div class="row">
  						<div class="col col-xs-6 col-title"><h3>J-4 ROOM</h3></div>
  						<div class="col col-xs-6 col-title" style="text-align: left"><h3>Delivery Serivce</h3></div>
  					</div>
  				</div>
  			</div>
  			<div class="panel-body">
				<div class="container-fluid">
				 <div class="row">
					<div class="col col-sm-6 mini-screen col-img-small" style="text-align: center">  
						<br/>
						<img class="md-img" src="/views/whereinformation/images/maps/J4.jpg"  alt="Image, map. Room J(J4). Delivery Service">
					</div> 	
					<div class="col col-sm-6" style="text-align: left;">
						<br/>
						<p>Room J-4, Maps Announce.</p>
						<p>A : Room J management and controll.</p>
					</div>
				 </div>
				</div>
  			</div>
		</div>
		</div>
		</div>
		</div>
		<div style="padding: 5px 0px;" id="deli-K"></div>
		<div class="panel panel-default">
  			<div class="panel-heading">
  				<h3 >Delivery Serivce-K ROOM</h3>
  			</div>
  			<div class="panel-body">
				<div class="container-fluid">
				 <div class="row">
					<div class="col col-sm-6 delete-screen" style="text-align: center; padding-top=20px;">  
						<img src="/views/whereinformation/images/maps/ROOM_K_MAP.jpg" alt="Image, map. Room K(K1~K3). Delivery Service">
		  			<img src="/views/whereinformation/images/maps/K4-1.jpg" alt="Image, map. Room K(K4). Delivery Service">
					</div> 	
					<div class="col col-sm-6 col-img" style="text-align: center;">
						<img class="lg-img" src="/views/whereinformation/images/maps/K123.jpg" alt="Image, map(blue color). Room K(K1~K3). Delivery Service">
						<img class="lg-img" src="/views/whereinformation/images/maps/K4.jpg" alt="Image, map(blue color). Room K(K4). Delivery Service">
					</div>
					<div class="col col-sm-6" style="text-align: left;">
						<br/>
						<p>go to Post Office</p>
		  				<p>go to Post Office. Use Truck.</p>
		  				<p>Products on Truck and Routine car drive. Need drive license.</p>
					</div>
				 </div>
				</div>
  			</div>
		</div>
		<div class="container-fluid">
		<div class="row">
		<div class="col col-sm-6">
		<div style="padding: 5px 0px;" id="deli-K1"></div>
		<div class="panel panel-default">
  			<div class="panel-heading">
  				<div class="container-fluid">
  					<div class="row">
  						<div class="col col-xs-6 col-title"><h3>K-1 ROOM</h3></div>
  						<div class="col col-xs-6 col-title" style="text-align: left"><h3>Delivery Serivce</h3></div>
  					</div>
  				</div>
  			</div>
  			<div class="panel-body">
				<div class="container-fluid">
				 <div class="row">
					<div class="col col-sm-6 mini-screen col-img-small" style="text-align: center">  
						<br/>
						<img class="md-img" src="/views/whereinformation/images/maps/K1.jpg"  alt="Image, map. Room K(K1). Delivery Service">
					</div> 	
					<div class="col col-sm-6" style="text-align: left;">
						<br/>
						<p>Room K-1, Maps Announce.</p>
						<p>A : Truck repair machine(tag-RK1).</p>
						<p>B : Repair Tool Box.</p>
					</div>
				 </div>
				</div>
  			</div>
		</div>
		</div>
		<div class="col col-sm-6">
		<div style="padding: 5px 0px;" id="deli-K2"></div>
		<div class="panel panel-default">
  			<div class="panel-heading">
  				<div class="container-fluid">
  					<div class="row">
  						<div class="col col-xs-6 col-title"><h3>K-2 ROOM</h3></div>
  						<div class="col col-xs-6 col-title" style="text-align: left"><h3>Delivery Serivce</h3></div>
  					</div>
  				</div>
  			</div>
  			<div class="panel-body">
				<div class="container-fluid">
				 <div class="row">
					<div class="col col-sm-6 mini-screen col-img-small" style="text-align: center">  
						<br/>
						<img class="md-img" src="/views/whereinformation/images/maps/K2.jpg"  alt="Image, map. Room K(K2). Delivery Service">
					</div> 	
					<div class="col col-sm-6" style="text-align: left;">
						<br/>
						<p>Room K-2, Maps Announce.</p>
						<p>A : Truck in machine(tag-RK2).</p>
						<p>B : movig burden machine(tag-RK3).</p>
					</div>
				 </div>
				</div>
  			</div>
		</div>
		</div>
		</div>
		<div class="row">
		<div class="col col-sm-6">
		<div style="padding: 5px 0px;" id="deli-K3"></div>
		<div class="panel panel-default">
  			<div class="panel-heading">
  				<div class="container-fluid">
  					<div class="row">
  						<div class="col col-xs-6 col-title"><h3>K-3 ROOM</h3></div>
  						<div class="col col-xs-6 col-title" style="text-align: left"><h3>Delivery Serivce</h3></div>
  					</div>
  				</div>
  			</div>
  			<div class="panel-body">
				<div class="container-fluid">
				 <div class="row">
					<div class="col col-sm-6 mini-screen col-img-small" style="text-align: center"> 
						<br/> 
						<img class="md-img" src="/views/whereinformation/images/maps/K3.jpg"  alt="Image, map. Room K(K3). Delivery Service">
					</div> 	
					<div class="col col-sm-6" style="text-align: left;">
						<br/>
						<p>Room K-3, Maps Announce.</p>
						<p>A : Room K management and controll.</p>
					</div>
				 </div>
				</div>
  			</div>
		</div>
		</div>
		<div class="col col-sm-6">
		<div style="padding: 5px 0px;" id="deli-K4"></div>
		<div class="panel panel-default">
  			<div class="panel-heading">
  				<div class="container-fluid">
  					<div class="row">
  						<div class="col col-xs-6 col-title"><h3>K-4 ROOM</h3></div>
  						<div class="col col-xs-6 col-title" style="text-align: left"><h3>Delivery Serivce</h3></div>
  					</div>
  				</div>
  			</div>
  			<div class="panel-body">
				<div class="container-fluid">
				 <div class="row">
					<div class="col col-sm-6 mini-screen col-img-small" style="text-align: center"> 
						<br/>
						<img class="md-img" src="/views/whereinformation/images/maps/K4R.jpg"  alt="Image, map. Room K(K4). Delivery Service">
					</div> 	
					<div class="col col-sm-6" style="text-align: left;">
						<br/>
						<p>Room K-4, Maps Announce.</p>
						<p>A : Vehicle parking Area.</p>
					</div>
				 </div>
				</div>
  			</div>
		</div>
		</div>
		</div>
		</div>
		<div style="padding: 5px 0px;" id="deli-L"></div>
		<div class="panel panel-default">
  			<div class="panel-heading">
  				<h3 >Delivery Serivce-L ROOM</h3>
  			</div>
  			<div class="panel-body">
				<div class="container-fluid">
				 <div class="row">
					<div class="col col-sm-6 delete-screen" style="text-align: center; padding-top=20px;">  
						<img class="lg-img" src="/views/whereinformation/images/maps/ROOM_L_MAP.jpg" alt="Image, map. Room K(L1~L3). Delivery Service">
		  				<img class="lg-img" src="/views/whereinformation/images/maps/L4-1.jpg" alt="Image, map. Room L(L4). Delivery Service">
					</div> 	
					<div class="col col-sm-6 col-img" style="text-align: center;">
						<img class="lg-img" src="/views/whereinformation/images/maps/L123.jpg" alt="Image, map(blue color). Room L(L1~L3). Delivery Service">
		  				<img class="lg-img" src="/views/whereinformation/images/maps/L4.jpg" alt="Image, map(blue color). Room L(L4). Delivery Service">
					</div>
					<div class="col col-sm-6" style="text-align: left;">
						<br/>
						<p>Fast Delivery</p>
		  				<p>Some customer wants fast delivery.</p>
		  				<p>so use truck, car. and go to the customer.</p>
					</div>
				 </div>
				</div>
  			</div>
		</div>
		<div class="container-fluid">
		<div class="row">
		<div class="col col-sm-6">
		<div style="padding: 5px 0px;" id="deli-L1"></div>
		<div class="panel panel-default">
  			<div class="panel-heading">
  				<div class="container-fluid">
  					<div class="row">
  						<div class="col col-xs-6 col-title"><h3>L-1 ROOM</h3></div>
  						<div class="col col-xs-6 col-title" style="text-align: left"><h3>Delivery Serivce</h3></div>
  					</div>
  				</div>
  			</div>
  			<div class="panel-body">
				<div class="container-fluid">
				 <div class="row">
					<div class="col col-sm-6 mini-screen col-img-small" style="text-align: center"> 
						<br/> 
						<img class="md-img" src="/views/whereinformation/images/maps/L1.jpg"  alt="Image, map. Room L(L1). Delivery Service">
					</div> 	
					<div class="col col-sm-6" style="text-align: left;">
						<br/>
						<p>Room L-1, Maps Announce.</p>
						<p>A : Car repair machine(tag-RL1).</p>
						<p>B : Repair Tool Box.</p>
					</div>
				 </div>
				</div>
  			</div>
		</div>
		</div>
		<div class="col col-sm-6">
		<div style="padding: 5px 0px;" id="deli-L2"></div>
		<div class="panel panel-default">
  			<div class="panel-heading">
  				<div class="container-fluid">
  					<div class="row">
  						<div class="col col-xs-6 col-title"><h3>L-2 ROOM</h3></div>
  						<div class="col col-xs-6 col-title" style="text-align: left"><h3>Delivery Serivce</h3></div>
  					</div>
  				</div>
  			</div>
  			<div class="panel-body">
				<div class="container-fluid">
				 <div class="row">
					<div class="col col-sm-6 mini-screen col-img-small" style="text-align: center">  
						<br/>
						<img class="md-img" src="/views/whereinformation/images/maps/L2.jpg"  alt="Image, map. Room L(L2). Delivery Service">
					</div> 	
					<div class="col col-sm-6" style="text-align: left;">
						<br/>
						<p>Room L-2, Maps Announce.</p>
						<p>A : Car in machine(tag-RL1).</p>
						<p>B : movig burden machine(tag-RL2).</p>
					</div>
				 </div>
				</div>
  			</div>
		</div>
		</div>
		</div>
		<div class="row">
		<div class="col col-sm-6">
		<div style="padding: 5px 0px;" id="deli-L3"></div>
		<div class="panel panel-default">
  			<div class="panel-heading">
  				<div class="container-fluid">
  					<div class="row">
  						<div class="col col-xs-6 col-title"><h3>L-3 ROOM</h3></div>
  						<div class="col col-xs-6 col-title" style="text-align: left"><h3>Delivery Serivce</h3></div>
  					</div>
  				</div>
  			</div>
  			<div class="panel-body">
				<div class="container-fluid">
				 <div class="row">
					<div class="col col-sm-6 mini-screen col-img-small" style="text-align: center"> 
						<br/> 
						<img class="md-img" src="/views/whereinformation/images/maps/L3.jpg"  alt="Image, map. Room L(L3). Delivery Service">
					</div> 	
					<div class="col col-sm-6" style="text-align: left;">
						<br/>
						<p>Room L-3, Maps Announce.</p>
						<p>A : Room L management and controll.</p>
					</div>
				 </div>
				</div>
  			</div>
		</div>
		</div>
		<div class="col col-sm-6">
		<div style="padding: 5px 0px;" id="deli-L4"></div>
		<div class="panel panel-default">
  			<div class="panel-heading">
  				<div class="container-fluid">
  					<div class="row">
  						<div class="col col-xs-6 col-title"><h3>L-4 ROOM</h3></div>
  						<div class="col col-xs-6 col-title" style="text-align: left"><h3>Delivery Serivce</h3></div>
  					</div>
  				</div>
  			</div>
  			<div class="panel-body">
				<div class="container-fluid">
				 <div class="row">
					<div class="col col-sm-6 mini-screen col-img-small" style="text-align: center">
						<br/>  
						<img class="md-img" src="/views/whereinformation/images/maps/L4R.jpg"  alt="Image, map. Room L(L4). Delivery Service">
					</div> 	
					<div class="col col-sm-6" style="text-align: left;">
						<br/>
						<p>Room L-4, Maps Announce.</p>
						<p>A : Vehicle parking Area.</p>
					</div>
				 </div>
				</div>
  			</div>
		</div>
		</div>
		</div>
		</div>
		<div style="padding: 5px 0px;" id="lb-map"></div>
		<div class="panel panel-default">
  			<div class="panel-heading">
  				<h3 >LB Libraly Parts</h3>
  			</div>
  			<div class="panel-body">
				<p>1B~3F. 4Floors.</p>
		  		<p>Learning, Researching, Planning, Meeting, Info trans and Meal room.</p>
		  		<p>Enjoy, Leisure time.</p>	
  			</div>
		</div>
		<div class="container-fluid">
		<div class="row">
		<div class="col col-sm-6">
		<div style="padding: 5px 0px;" id="lb-map-1f"></div>
		<div class="panel panel-default">
  			<div class="panel-heading">
  				<h3 >Libraly Parts-1F</h3>
  			</div>
  			<div class="panel-body">
				<div class="container-fluid">
				 <div class="row">
					<div class="col col-sm-6 mini-screen col-img-small" style="text-align: center"> 
						<br/> 
						<img class="lib-img" src="/views/whereinformation/images/maps/LB1F.jpg"  alt="Image, map. LB, 1F. - Libray Parts">
					</div> 	
					<div class="col col-sm-6" style="text-align: left;">
						<br/>
						<p>Libraly Parts-1F, Maps Announce.</p>
						<p>1F-1 : front room.</p>
						<p>1F-2 : information-trans room.</p>
						<p>1F-3 : meeting room.</p>
						<p>1F-4 : lecture room.</p>
					</div>
				 </div>
				</div>
  			</div>
		</div>
		</div>
		<div class="col col-sm-6">
		<div style="padding: 5px 0px;" id="lb-map-2f"></div>
		<div class="panel panel-default">
  			<div class="panel-heading">
  				<h3 >Libraly Parts-2F</h3>
  			</div>
  			<div class="panel-body">
				<div class="container-fluid">
				 <div class="row">
					<div class="col col-sm-6 mini-screen col-img-small" style="text-align: center"> 
						<br/>  
						<img class="lib-img" src="/views/whereinformation/images/maps/LB2F.jpg"  alt="Image, map. LB, 2F. - Libray Parts">
					</div> 	
					<div class="col col-sm-6" style="text-align: left;">
						<br/>
						<p>Libraly Parts-2F, Maps Announce.</p>
						<p>2F-1 : public desk.</p>
						<p>2F-2 : booking front.</p>
						<p>2F-3 : outdoor balcony.</p>
					</div>
				 </div>
				</div>
  			</div>
		</div>
		</div>
		</div>
		<div class="row">
		<div class="col col-sm-6">
		<div style="padding: 5px 0px;" id="lb-map-3f"></div>
		<div class="panel panel-default">
  			<div class="panel-heading">
  				<h3 >Libraly Parts-3F</h3>
  			</div>
  			<div class="panel-body">
				<div class="container-fluid">
				 <div class="row">
					<div class="col col-sm-6 mini-screen col-img-small" style="text-align: center">  
						<br/> 
						<img class="lib-img" src="/views/whereinformation/images/maps/LB3F.jpg"  alt="Image, map. LB, 3F. - Libray Parts">
					</div> 	
					<div class="col col-sm-6" style="text-align: left;">
						<br/>
						<p>Libraly Parts-3F, Maps Announce.</p>
						<p>3F-1 : private reaserch room.</p>
						<p>3F-2 : private reaserch room.</p>
						<p>3F-3 : cabinet.</p>
						<p>3F-4 : outdoor balcony.</p>
					</div>
				 </div>
				</div>
  			</div>
		</div>
		</div>
		<div class="col col-sm-6">
		<div style="padding: 5px 0px;" id="lb-map-3f12"></div>
		<div class="panel panel-default">
  			<div class="panel-heading">
  				<h3 >Libraly Parts-3F-1,2</h3>
  			</div>
  			<div class="panel-body">
				<div class="container-fluid">
				 <div class="row">
					<div class="col col-sm-6 mini-screen col-img-small" style="text-align: center"> 
						<br/>  
						<img class="lib-img" src="/views/whereinformation/images/maps/LB3F12.jpg"  alt="Image, map. LB, 3F. - Libray Parts">
					</div> 	
					<div class="col col-sm-6" style="text-align: left;">
						<br/>
						<p>Libraly Parts-3F-1,2 Maps Announce.</p>
						<p>private reaserch room.</p>
						<p>120, 120(total 240) vacancy.</p>
						<p>desk partrition and screen off.</p>
						<p>person private desk.</p>
					</div>
				 </div>
				</div>
  			</div>
		</div>
		</div>
		</div>
		<div class="row">
		<div class="col col-sm-6">
		<div style="padding: 5px 0px;" id="lb-map-b1"></div>
		<div class="panel panel-default">
  			<div class="panel-heading">
  				<h3 >Libraly Parts-1B</h3>
  			</div>
  			<div class="panel-body">
				<div class="container-fluid">
				 <div class="row">
					<div class="col col-sm-6 mini-screen col-img-small" style="text-align: center"> 
						<br/>  
						<img class="lib-img" src="/views/whereinformation/images/maps/LB1B.jpg"  alt="Image, map. LB, 1B. - Libray Parts">
					</div> 	
					<div class="col col-sm-6" style="text-align: left;">
						<br/>
						<p>Libraly Parts-1B, Maps Announce.</p>
						<p>1B-1 : Snack shop and meal station.</p>
					</div>
				 </div>
				</div>
  			</div>
		</div>
		</div>
		</div>
		</div>
		<div style="background-color: #25292D;color:white;padding-top:150px;">
		<p>Desingned and built, <a href="https://twitter.com/eecncn_choi">@eecncn_choi</a>.</p>
		<p>Code Licensed, <a href="https://github.com/ee32320/InformationSystem">Github</a>, <a href="https://github.com/ee32320/InformationSystem/blob/master/LICENSE">MIT</a></p>
		<p>Docs Licensed, <a href="https://creativecommons.org/licenses/by/4.0/">CC BY 4.0</a></p>
		</div>
		<br/><br/><br/> 
	 
	</div><!--end, page contentwrapper-->
	
	<div id="sidebar-wrapper" style="position:fixed;right:0;">
		
		<div class="panel panel-default" style="border-radius:0px; border-bottom:0px;">
  			<div class="panel-heading" style="border-radius:0px;">
   				<h3 style="display:inline-block;">MAP INDEX</h3><h1 style="display:inline-block;">&nbsp;</h1><span class="glyphicon glyphicon-paperclip"></span>  
  			</div>
		</div>
		<a role="button" style="text-align: center;border-radius: 0px;" id="sidebar-nav-btn" class="btn btn-info btn-lg menu-toggle">Close Sidebar&nbsp;<span class="glyphicon glyphicon-remove-sign"></span></a>
			 
 			<div class="panel panel-default panel-b0">
				<div class="panel-heading panel-b0">
					<h3 class="panel-title">Menufacture Buildings</h3>
				</div>
				<div class="panel-body panel-body-nav">
					 <div class="row">
						<div class="col col-xs-12 col-sm-12 col-lg-6 col-md-6">
							 <a class="btn  btn-primary btn-block" role="button" href="#elec-map">Electronics</a>
							 <br/>
						</div>
						<div class="col col-xs-12 col-sm-12 col-lg-6 col-md-6">
							<a class="btn  btn-primary btn-block" role="button" href="#handi-map">Handicraft</a>
							<br/>
						</div>
						<div class="col col-xs-12 col-sm-12 col-lg-6 col-md-6">
							<a class="btn  btn-primary btn-block" role="button" href="#food-map">Food</a>
							<br/>
						</div>
						<div class="col col-xs-12 col-sm-12 col-lg-6 col-md-6">
							<a class="btn  btn-primary btn-block" role="button" href="#deli-map">Delivery</a>
							 <br/>
						</div>
					 </div>
				</div>
			</div>
		<div class="panel panel-default panel-b0">
			<div class="panel-heading panel-b0">
				<h3 class="panel-title">Offside buildings</h3>
			</div>
				<div class="panel-body panel-body-nav">	
					<div class="row">
					<div class="col col-xs-12">
						<a class="btn btn-primary btn-block LB0" role="button" href="#lb-map">LB Libraly Parts</a>
						<br/>
					</div>
					<div class="lb" style="display:none;">
						<div class="col col-xs-12">
							<a class="btn  btn-info btn-block" role="button" href="#lb-map-1f">Libraly Parts-1F</a>
							<br/>
						</div>
						<div class="col col-xs-12">
							<a class="btn  btn-info btn-block" role="button" href="#lb-map-2f">Libraly Parts-2F</a>
							<br/>
						</div>
						<div class="col col-xs-12">
							<a class="btn  btn-info btn-block" role="button" href="#lb-map-3f">Libraly Parts-3F</a>
							<br/>
						</div>
						<div class="col col-xs-12">
							<a class="btn  btn-info btn-block" role="button" href="#lb-map-3f12">Libraly Parts-3F - 1, 2</a>
							<br/>
						</div>
						<div class="col col-xs-12">
							<a class="btn  btn-info btn-block" role="button" href="#lb-map-b1">Libraly Parts-1B</a>
							<br/>
						</div>
					</div><!--end,lb-->
				</div>
			</div>
		</div>
		<div class="panel panel-default panel-b0">
			<div class="panel-heading panel-b0">
				<h3 class="panel-title">Electronics Parts A, B, C.</h3>
			</div>
				<div class="panel-body panel-body-nav">	
					<div class="row">
					<div class="col col-xs-12">
						<a class="btn btn-primary btn-block elecA" role="button" href="#elec-A">Electronics A</a>
						<br/>
					</div>
					<div class="Ea" style="display:none;">
					<div class="col col-xs-12">
						<a class="btn btn-info btn-block" role="button" href="#elec-A1">Electronics A-1</a>
						<br/>
					</div>
					<div class="col col-xs-12">
						<a class="btn btn-info btn-block" role="button" href="#elec-A2">Electronics A-2</a>
						<br/>
					</div>
					<div class="col col-xs-12">
						<a class="btn btn-info btn-block" role="button" href="#elec-A3">Electronics A-3</a>
						<br/>
					</div>
					<div class="col col-xs-12">
						<a class="btn btn-info btn-block" role="button" href="#elec-A4">Electronics A-4</a>
						<br/>
					</div>
					<div class="col col-xs-12">
						<a class="btn btn-info btn-block" role="button" href="#elec-A5">Electronics A-5</a>
						<br/>
					</div>
					</div><!--end, eA-->
					<div class="col col-xs-12">
						<a class="btn btn-primary btn-block elecB" role="button" href="#elec-B">Electronics B</a> 
						<br/>
					</div>
					<div class="Eb" style="display:none;">
					<div class="col col-xs-12">
						<a class="btn btn-info btn-block" role="button" href="#elec-B1">Electronics B-1</a>
						<br/>
					</div>
					<div class="col col-xs-12">
						<a class="btn btn-info btn-block" role="button" href="#elec-B2">Electronics B-2</a>
						<br/>
					</div>
					<div class="col col-xs-12">
						<a class="btn btn-info btn-block" role="button" href="#elec-B3">Electronics B-3</a>
						<br/>
					</div>
					</div><!--end, eB-->
					<div class="col col-xs-12">
						<a class="btn btn-primary btn-block elecC" role="button" href="#elec-C">Electronics C</a>
						<br/>
					</div>
					<div class="Ec" style="display:none;">
					<div class="col col-xs-12">
						<a class="btn btn-info btn-block" role="button" href="#elec-C1">Electronics C-1</a>
						<br/>
					</div>
					<div class="col col-xs-12">
						<a class="btn btn-info btn-block" role="button" href="#elec-C2">Electronics C-2</a>
						<br/>
					</div>
					</div><!--end, Ec-->
				</div>
			</div>
		</div><!--end, elec-->
		<div class="panel panel-default panel-b0">
			<div class="panel-heading panel-b0">
				<h3 class="panel-title">Handicraft D, E, F.</h3>
			</div>
				<div class="panel-body panel-body-nav">	
					<div class="row">
					<div class="col col-xs-12">
						<a class="btn btn-primary btn-block handiD" role="button" href="#handi-D">Handicraft D</a>
						<br/>
					</div>
					<div class="Hd" style="display:none;">
					<div class="col col-xs-12">
						<a class="btn btn-info btn-block" role="button" href="#handi-D1">Handicraft D-1</a>
						<br/>
					</div>
					<div class="col col-xs-12">
						<a class="btn btn-info btn-block" role="button" href="#handi-D2">Handicraft D-2</a>
						<br/>
					</div>
					<div class="col col-xs-12">
						<a class="btn btn-info btn-block" role="button" href="#handi-D3">Handicraft D-3</a>
						<br/>
					</div>
					</div><!--end, Hd--> 
					<div class="col col-xs-12">
						<a class="btn btn-primary btn-block handiE" role="button" href="#handi-E">Handicraft E</a>
						<br/>
					</div>
					<div class="He" style="display:none;">
					<div class="col col-xs-12">
						<a class="btn btn-info btn-block" role="button" href="#handi-E1">Handicraft E-1</a>
						<br/>
					</div>
					<div class="col col-xs-12">
						<a class="btn btn-info btn-block" role="button" href="#handi-E2">Handicraft E-2</a>
						<br/>
					</div>	
					</div><!--end, He-->
					<div class="col col-xs-12">
						<a class="btn btn-primary btn-block handiF" role="button" href="#handi-F">Handicraft F</a>
						<br/>
					</div>
					<div class="Hf" style="display:none;">
					<div class="col col-xs-12">
						<a class="btn btn-info btn-block" role="button" href="#handi-F1">Handicraft F-1</a>
						<br/>
					</div>
					<div class="col col-xs-12">
						<a class="btn btn-info btn-block" role="button" href="#handi-F2">Handicraft F-2</a>
						<br/>
					</div>	
					</div><!--end, Hf--> 
				</div>
			</div>
		</div><!--end, handi-->
		<div class="panel panel-default panel-b0">
			<div class="panel-heading panel-b0">
				<h3 class="panel-title">Food G, H, I.</h3>
			</div>
				<div class="panel-body panel-body-nav">	
					<div class="row">
					<div class="col col-xs-12">
						<a class="btn btn-primary btn-block foodG" role="button" href="#food-G">Food G</a>
						<br/>
					</div>
					<div class="Fg" style="display:none;">
					<div class="col col-xs-12">
						<a class="btn btn-info btn-block" role="button" href="#food-G1">Food G-1</a>
						<br/>
					</div>
					<div class="col col-xs-12">
						<a class="btn btn-info btn-block" role="button" href="#food-G2">Food G-2</a>
						<br/>
					</div>
					</div><!--end, Fg--> 
					<div class="col col-xs-12">
						<a class="btn btn-primary btn-block foodH" role="button" href="#food-H">Food H</a> 
						<br/>
					</div>
					<div class="Fh" style="display:none;">
					<div class="col col-xs-12">
						<a class="btn btn-info btn-block" role="button" href="#food-H1">Food H-1</a>
						<br/>
					</div>
					<div class="col col-xs-12">
						<a class="btn btn-info btn-block" role="button" href="#food-H2">Food H-2</a>
						<br/>
					</div>	
					</div><!--end, Fh-->
					<div class="col col-xs-12">
						<a class="btn btn-primary btn-block foodI" role="button" href="#food-I">Food I</a> 
						<br/>
					</div>
					<div class="Fi" style="display:none;">
					<div class="col col-xs-12">
						<a class="btn btn-info btn-block" role="button" href="#food-I1">Food I-1</a>
						<br/>
					</div>
					<div class="col col-xs-12">
						<a class="btn btn-info btn-block" role="button" href="#food-I2">Food I-2</a>
						<br/>
					</div>
					</div><!--end, Fi-->	 
				</div>
			</div>
		</div><!--end, food-->
		<div class="panel panel-default panel-b0">
			<div class="panel-heading panel-b0">
				<h3 class="panel-title">Delivery Service J, K, L</h3>
			</div>
				<div class="panel-body panel-body-nav">	
					<div class="row">
					<div class="col col-xs-12">
						<a class="btn btn-primary btn-block deliJ" role="button" href="#deli-J">Delivery Service J</a>
						<br/>
					</div>
					<div class="Dj" style="display:none;">
					<div class="col col-xs-12">
						<a class="btn btn-info btn-block" role="button" href="#deli-J1">Delivery Service J-1</a>
						<br/>
					</div>
					<div class="col col-xs-12">
						<a class="btn btn-info btn-block" role="button" href="#deli-J2">Delivery Service J-2</a>
						<br/>
					</div>
					<div class="col col-xs-12">
						<a class="btn btn-info btn-block" role="button" href="#deli-J3">Delivery Service J-3</a>
						<br/>
					</div>
					<div class="col col-xs-12">
						<a class="btn btn-info btn-block" role="button" href="#deli-J4">Delivery Service J-4</a>
						<br/>
					</div>
					</div><!--end, Dj--> 
					<div class="col col-xs-12">
						<a class="btn btn-primary btn-block deliK" role="button" href="#deli-K">Delivery Service K</a>
						<br/>
					</div>
					<div class="Dk" style="display:none;">
					<div class="col col-xs-12">
						<a class="btn btn-info btn-block" role="button" href="#deli-K1">Delivery Service K-1</a>
						<br/>
					</div>
					<div class="col col-xs-12">
						<a class="btn btn-info btn-block" role="button" href="#deli-K2">Delivery Service K-2</a>
						<br/>
					</div>
					<div class="col col-xs-12">
						<a class="btn btn-info btn-block" role="button" href="#deli-K3">Delivery Service K-3</a>
						<br/>
					</div>
					<div class="col col-xs-12">
						<a class="btn btn-info btn-block" role="button" href="#deli-K4">Delivery Service K-4</a>
						<br/>
					</div>
					</div><!--end, Dk-->
					<div class="col col-xs-12">
						<a role="button" class="btn btn-primary btn-block deliL" role="button" href="#deli-L">Delivery Service L</a>
						<br/>
					</div>
					<div class="Dl" style="display:none;">
					<div class="col col-xs-12">
						<a class="btn btn-info btn-block" role="button" href="#deli-L1">Delivery Service L-1</a>
						<br/>
					</div>
					<div class="col col-xs-12">
						<a class="btn btn-info btn-block" role="button" href="#deli-L2">Delivery Service L-2</a>
						<br/>
					</div>
					<div class="col col-xs-12">
						<a class="btn btn-info btn-block" role="button" href="#deli-L3">Delivery Service L-3</a>
						<br/>
					</div>
					<div class="col col-xs-12">
						<a class="btn btn-info btn-block" role="button" href="#deli-L4">Delivery Service L-4</a>
						<br/>
					</div>
					</div><!--end, Dl-->    	 
				</div>
			</div>
		</div><!--end, deli-->
		<br/><br/><br/><br/><br/><br/>
		<br/>
		</div><!--end, sidebar-wrapper--> 	
		
	
</div><!--end, div .wrapper-->
 
 
 
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
        <li class="active"><a href="#">Where INFO<span class="sr-only">(current)</span></a></li>
		<li><a href="/index.php/planning/">Planning</a></li>
     	<li><a href="/index.php/claime/">Claime</a></li>
     	<li><a href="/index.php/diarly/">Diarly</a></li>
     	<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Link<span class="caret"></span></a>
     	<ul class="dropdown-menu">
          <li>Information system for work</li>
           <li><p>This website, Under the Construction. VERSION 17-2.</p></li>
      		<li><a href="https://github.com/ee32320/InformationSystem">Move a github, https://github.com/ee32320/InformationSystem</a></li>
          </ul>
     	</li>
      </ul>
    </div><!-- /.navbar-collapse -->
      
  </div>
</nav>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script><!--basic template -->
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="/views/js/bootstrap.min.js"></script>
<script src='/views/js/jquery.zoom.min.js'></script>

<script>
//$("p").addClass("bg-info");
$(document).ready(function(){
	$("#zoom1").zoom({on:'grab'});
});
	
$('.LB0').click(function(){
	$('.lb').toggle();
});
$('.elecA').click(function(){
	$('.Ea').toggle();
});
$('.elecB').click(function(){
	$('.Eb').toggle();
});
$('.elecC').click(function(){
	$('.Ec').toggle();
});
$('.handiD').click(function(){
	$('.Hd').toggle();
});
$('.handiE').click(function(){
	$('.He').toggle();
});
$('.handiF').click(function(){
	$('.Hf').toggle();
});
$('.foodG').click(function(){
	$('.Fg').toggle();
});
$('.foodH').click(function(){
	$('.Fh').toggle();
});
$('.foodI').click(function(){
	$('.Fi').toggle();
});
$('.deliJ').click(function(){
	$('.Dj').toggle();
});	
$('.deliK').click(function(){
$('.Dk').toggle();
});
$('.deliL').click(function(){
$('.Dl').toggle();
});
$('#navfix').click(function(){
	$(this).hide();
});
$('.delete-screen').remove();
$('.menu-toggle').click(function(e){
		 e.preventDefault();
	  $('#wrapper').toggleClass('menuDisplayed');
	  $('#sidebar-nav-btn').css('position','fixed');
	  $('#sidebar-nav-btn').css('right','0');
	  $('#sidebar-nav-btn').css('bottom','50');
	  $('#sidebar-nav-btn').css('width','270');
	  $('#sidebar-nav-btn').css("z-index","100");
		if($('#wrapper').hasClass('menuDisplayed')==false){
			$('#navfix').show();
			$('#sidebar-nav-btn').css('position','relative');
		}
		
	});
	

 
	
window.onscroll = function() {scrollFunction()};	
function scrollFunction() {
 	if (document.body.scrollTop > 140 || document.documentElement.scrollTop > 140) {
         $('#navfix').css("position","fixed");
		 $('#navfix').css("top","0");
		 $('#navfix').css("left","0");
		 $('#navfix').css("z-index","98");
		 $('#navfix').addClass("btn-info");
		
		 
    } else {
        $('#navfix').css("position","relative");
		  
		 
    }
}

	
</script>	
<script>
	
	/*#wrapper.menuDisplayed #sidebar-wrapper{
		width: 270px;
		
	}*/
	function realScreen() { 
		//screen width//140
	 
	 // document.body.scrollTop+ ss)
	var sc = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
		//$('#tt').html(sc);
		if(sc<321){
			
		}
		if(sc>=321 && sc<376){
			$('#wrapper.menuDisplayed').css('width',(sc-30)+'px');
		}
		if(sc>=376 && sc<426){
			$('#wrapper.menuDisplayed').css('width',(sc-30)+'px');
		}
		if(sc>=427 && sc<769){
			$('#wrapper.menuDisplayed').css('width',(sc-30)+'px');
		}
		if(sc>=769 && sc<1025){
			
		}
		if(sc>=1024 && sc<1441){
			
		}
		if(sc>=1441 && sc<2561){
			
		}
		 
		 var t = setTimeout(realScreen, 500);
	}
</script>
<script>
 
	$(document).find('.panel').each(function(){
		
		if($(this).hasClass('panel-info')==false){
		$(this).addClass('panel-info');
		}
		
		$(this).find('.panel-body').css('background-color','#25292D');
		$(this).find('.panel-body').css('color','white');
	});
	
$('.panel').hover(function(){
	$(this).addClass("panel-info");
	$(this).find('.panel-body').css('background-color','#25292D');
	$(this).find('.panel-body').css('color','white');
});
</script>
</body>

</html>


