<!DOCTYPE html>
<html>
  <head>
  	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Recreation.gov - Explore Your America</title>
	
    <!-- Bootstrap -->
    <link href="dist/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="assets/css/custom.css" rel="stylesheet" media="screen">
	
    <!-- Updates -->
    <link href="updates/update1/css/style01.css" rel="stylesheet" media="screen">

    <!-- Carousel -->
	<link href="examples/carousel/carousel.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="assets/js/html5shiv.js"></script>
      <script src="assets/js/respond.min.js"></script>
    <![endif]-->
	
    <!-- Fonts -->	
	<link href='http://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:700,400,300,300italic' rel='stylesheet' type='text/css'>	
	<!-- Font-Awesome -->
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css" media="screen" />
    <!--[if lt IE 7]><link rel="stylesheet" type="text/css" href="assets/css/font-awesome-ie7.css" media="screen" /><![endif]-->
	
    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="css/fullscreen.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />

    <!-- Picker UI-->	
	<link rel="stylesheet" href="assets/css/jquery-ui.css" />		
	
    <!-- jQuery -->	
    <script src="assets/js/jquery.v2.0.3.js"></script>
<!-- Masonry -->
	<link href="updates/update1/css/masonry.css" rel="stylesheet">
	<script src="updates/update1/js/masonry.pkgd.js"></script>
	<script>
	// http://masonry.desandro.com/masonry.pkgd.js added as external resource

	docReady( function() {

	  var container = document.querySelector('.masonry');
	  var button = document.querySelector('#toggle-button');
	  var msnry = new Masonry( container, {
		columnWidth: 2
	  });

	  var isActive = true;

	  eventie.bind( button, 'click', function() {
		if ( isActive ) {
		  msnry.destroy();
		} else {
		  msnry = new Masonry( container );
		}
		isActive = !isActive;
	  });

	});
	//@ sourceURL=pen.js
	</script>

  </head>
  <body id="top">
    
	<!-- Top wrapper -->			  
	<div class="navbar-wrapper2 navbar-fixed-top">
		<div class="navbar helpnav">
			<?php include("help-nav-include.php"); ?>
		</div>
		<div class="navbar">
			<?php include("nav-include.php"); ?>
        </div>
    </div>
	<!-- /Top wrapper -->	



	<!--
	#################################
		- THEMEPUNCH BANNER -
	#################################
	-->
	<div id="dajy" class="fullscreen-container mtslide sliderbg fixed">
			<div class="fullscreenbanner">
				<ul>

					<!-- papercut fade turnoff flyin slideright slideleft slideup slidedown-->
				
					<!-- FADE -->
					<li data-transition="fade" data-slotamount="1" data-masterspeed="300"> 										
						<img src="images/slider/zakynthos.jpg" alt=""/>
						<div class="tp-caption scrolleffect sft"
							 data-x="center"
							 data-y="120"
							 data-speed="1000"
							 data-start="800"
							 data-easing="easeOutExpo"  >
							 <div class="sboxpurple textcenter">
								<span class="lato size28 slim caps white">Greece</span><br/><br/><br/>
								<span class="lato size100 slim caps white">Zakynthos</span><br/>
								<span class="lato size20 normal caps white">from</span><br/><br/>
								<span class="lato size48 slim uppercase yellow">$1500</span><br/>
							 </div>
						</div>	
					</li>
				
					<!-- FADE -->
					<li data-transition="fade" data-slotamount="1" data-masterspeed="300"> 										
						<img src="images/slider/santorini.jpg" alt=""/>
						<div class="tp-caption scrolleffect sft"
							 data-x="center"
							 data-y="120"
							 data-speed="1000"
							 data-start="800"
							 data-easing="easeOutExpo"  >
							 <div class="sboxpurple textcenter">
								<span class="lato size28 slim caps white">Greece</span><br/><br/><br/>
								<span class="lato size100 slim caps white">Santorini</span><br/>
								<span class="lato size20 normal caps white">from</span><br/><br/>
								<span class="lato size48 slim uppercase yellow">$1500</span><br/>
							 </div>
						</div>	
					</li>

					<!-- FADE -->
					<li data-transition="fade" data-slotamount="1" data-masterspeed="300"> 										
						<img src="images/slider/rome.jpg" alt=""/>
						<div class="tp-caption scrolleffect sft"
							 data-x="center"
							 data-y="120"
							 data-speed="1000"
							 data-start="800"
							 data-easing="easeOutExpo"  >
							 <div class="sboxpurple textcenter">
								<span class="lato size28 slim caps white">Italy</span><br/><br/><br/>
								<span class="lato size100 slim caps white">Rome</span><br/>
								<span class="lato size20 normal caps white">from</span><br/><br/>
								<span class="lato size48 slim uppercase yellow">$1500</span><br/>
							 </div>
						</div>	
					</li>	

					<!-- FADE -->
					<li data-transition="fade" data-slotamount="1" data-masterspeed="300"> 										
						
						<img src="images/slider/paris.jpg" alt=""/>
						<div class="tp-caption scrolleffect sft"
							 data-x="center"
							 data-y="120"
							 data-speed="1000"
							 data-start="800"
							 data-easing="easeOutExpo"  >
							 <div class="sboxpurple textcenter">
								<span class="lato size28 slim caps white">France</span><br/><br/><br/>
								<span class="lato size100 slim caps white">Paris</span><br/>
								<span class="lato size20 normal caps white">from</span><br/><br/>
								<span class="lato size48 slim uppercase yellow">$1500</span><br/>
							 </div>
						</div>	
					</li>	

				</ul>
				<div class="tp-bannertimer none"></div>
			</div>
		</div>

		<!--
		##############################
		 - ACTIVATE THE BANNER HERE -
		##############################
		-->
		<script type="text/javascript">

			var tpj=jQuery;
			tpj.noConflict();

			tpj(document).ready(function() {

			if (tpj.fn.cssOriginal!=undefined)
				tpj.fn.css = tpj.fn.cssOriginal;

				tpj('.fullscreenbanner').revolution(
					{
						delay:9000,
						startwidth:1170,
						startheight:600,

						onHoverStop:"on",						// Stop Banner Timet at Hover on Slide on/off

						thumbWidth:100,							// Thumb With and Height and Amount (only if navigation Tyope set to thumb !)
						thumbHeight:50,
						thumbAmount:3,

						hideThumbs:0,
						navigationType:"bullet",				// bullet, thumb, none
						navigationArrows:"solo",				// nexttobullets, solo (old name verticalcentered), none

						navigationStyle:false,				// round,square,navbar,round-old,square-old,navbar-old, or any from the list in the docu (choose between 50+ different item), custom


						navigationHAlign:"left",				// Vertical Align top,center,bottom
						navigationVAlign:"bottom",					// Horizontal Align left,center,right
						navigationHOffset:30,
						navigationVOffset:30,

						soloArrowLeftHalign:"left",
						soloArrowLeftValign:"center",
						soloArrowLeftHOffset:20,
						soloArrowLeftVOffset:0,

						soloArrowRightHalign:"right",
						soloArrowRightValign:"center",
						soloArrowRightHOffset:20,
						soloArrowRightVOffset:0,

						touchenabled:"on",						// Enable Swipe Function : on/off


						stopAtSlide:-1,							// Stop Timer if Slide "x" has been Reached. If stopAfterLoops set to 0, then it stops already in the first Loop at slide X which defined. -1 means do not stop at any slide. stopAfterLoops has no sinn in this case.
						stopAfterLoops:-1,						// Stop Timer if All slides has been played "x" times. IT will stop at THe slide which is defined via stopAtSlide:x, if set to -1 slide never stop automatic

						hideCaptionAtLimit:0,					// It Defines if a caption should be shown under a Screen Resolution ( Basod on The Width of Browser)
						hideAllCaptionAtLilmit:0,				// Hide all The Captions if Width of Browser is less then this value
						hideSliderAtLimit:0,					// Hide the whole slider, and stop also functions if Width of Browser is less than this value


						fullWidth:"on",							// Same time only Enable FullScreen of FullWidth !!
						fullScreen:"off",						// Same time only Enable FullScreen of FullWidth !!


						shadow:0								//0 = no Shadow, 1,2,3 = 3 Different Art of Shadows -  (No Shadow in Fullwidth Version !)

					});


		});
		</script>
		

		



	<!-- / WRAP -->
	<div class="wrap bgfix cstyle03">
		
		<div class="container dropdowns z-index100">		
		  <div class="row">
			<div class="col-md-3">
				<div class="ctitle">What?</div>

			</div>
			<div class="col-md-3">
			    <div class="ctitle">Where?</div>
			</div>
			<div class="col-md-3">
				<div class="ctitle">When?</div>			
			</div>
			<div class="col-md-3">
					
			</div>
		  </div>
		  <div class="row">
		  	<div class="col-md-3">
				<div class="dropdown">
 					<button class="btn dropdown-toggle sr-only" type="button" id="dropdownMenu1" data-toggle="dropdown">Select an Activity<span class="caret"></span></button>
		 			<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
		 			  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
		 			  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
		 			  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
		 			</ul>
				</div>
		  	</div>
		  	<div class="col-md-3">
				<div class="dropdown">
 					<button class="btn dropdown-toggle sr-only" type="button" id="dropdownMenu2" data-toggle="dropdown">Select a Location<span class="caret"></span></button>
		 			<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu2">
		 			  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Action</a></li>
		 			  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Another action</a></li>
		 			  <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Something else here</a></li>
		 			</ul>
				</div>
				<!--<div class="col-md-12"><a href="#">Map View</a></div>-->
		  	</div>
		  	<div class="col-md-3">
		  		<input class="btn when sr-only" type="date"/>
		  	</div>
		  	<div class="col-md-3">
		  	<button class="ctitle yellow-btn sr-only btn">Let's Get Started<img src="images/spacer.png" alt=""/></button>	
		  	</div>
		  </div>
		</div>
		

		
		<div class="lastminute lcfix">
			<div class="container lmc">	

			</div>
		</div>
		<div class="masonry home">
			<div class="item wt2 ht2">
				<div class="msbox2"><a href="#"><img src="updates/update1/img/pic01.jpg" class="fhimg2 left" alt=""></a></div>
			</div>
			<div class="item ht2">
				<div class="msbox2">
				<a href="#"><img src="updates/update1/img/pic02.jpg" class="fhimg" alt=""></a>
					<p class="msctext padding20">
						<span class="newstitle"><a href="#">The Experts in African Safari Travel</a></span><br/><br/>
						Sed auctor erat sit amet lorem venenatis, in feugiat nisl fermentum. Nam luctus adipiscing dapibus. Nunc leo felis, ornare non commodo a, elementum a risus. 
					</p>
				</div>
			</div>
			<div class="item ">
				<div class="msbox"><a href="#"><img src="updates/update1/img/pic03.jpg" class="fhimg" alt=""></a></div>
			</div>
			<div class="item ht2">
				<div class="msbox2"><a href="#"><img src="updates/update1/img/pic04.jpg" class="fhimg" alt=""></a>
					<p class="msctext padding20">
						<span class="newstitle"><a href="#">Velassaru Beach Resort Island Paradise - Maldives</a></span>
						<span class="glyphicon glyphicon-star lblue"></span>
						<span class="glyphicon glyphicon-star lblue"></span>
						<span class="glyphicon glyphicon-star lblue"></span>
						<span class="glyphicon glyphicon-star lblue"></span>
						<span class="glyphicon glyphicon-star lblue"></span>
						<br/><br/>
						Sed auctor erat sit amet lorem venenatis, in feugiat nisl fermentum. Nam luctus adipiscing dapibus. Nunc leo felis, ornare non commodo a, elementum a risus. 
					</p>
				</div>
			</div>		
			<div class="item wt2">
				<div class="msbox">
					<div class="w50percent msctext padding20 left">
						<span class="newstitle"><a href="#">Aquaventure Waterpark and The Lost Chambers Aquarium</a></span><br/><br/>
						Sed auctor erat sit amet lorem venenatis, in feugiat nisl fermentum. Nam luctus adipiscing dapibus. Nunc leo felis, ornare non commodo a.
					</div>		
					<div class="w50percentlast right">
						<a href="#"><img src="updates/update1/img/pic06.jpg" class="fwimg " alt=""></a>
					</div>
				</div>
			</div>
			<div class="item">
				<div class="msbox"><a href="#"><img src="updates/update1/img/pic05.jpg" class="fhimg" alt=""></a></div>
			</div>
			
		</div>		
		
		<div class="container cstyle07">	


			  <div class="col-md-4">
				<div class="boxshadow center">
					<a href="list4.html"><img src="images/botswana.jpg" alt="" class="fwimg"/></a>
					<div class="bscontainer">
						<h4 class="lato bold caps">Lorem ipsum dolor sit amet, consectetur</h4>
						<hr>
						<p class="textleft grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In quis enim et mauris bibendum lobortis eget non eros. Nulla facilisi. Nulla facilisi.</p>
						<br/>
						<form action="list2.html">
							<button class="roundbtn" type="submit">More</button>
						</form>
					</div>
				</div>
			  </div>
			  <div class="col-md-4">
				<div class="boxshadow center">
					<a href="list4.html"><img src="images/egypt.jpg" alt="" class="fwimg"/>	</a>		
					<div class="bscontainer">
						<h4 class="lato bold caps">Lorem ipsum dolor sit amet, consectetur</h4>
						<hr>
						<p class="textleft grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In quis enim et mauris bibendum lobortis eget non eros. Nulla facilisi. Nulla facilisi.</p>
						<br/>
						<form action="list2.html">
							<button class="roundbtn" type="submit">More</button>
						</form>
					</div>
				</div>
			  </div>
			  <div class="col-md-4">
				<div class="boxshadow center">
					<a href="list4.html"><img src="images/machu_picchu.jpg" alt="" class="fwimg"/></a>		
					<div class="bscontainer">
						<h4 class="lato bold caps">Lorem ipsum dolor sit amet, consectetur</h4>
						<hr>
						<p class="textleft grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In quis enim et mauris bibendum lobortis eget non eros. Nulla facilisi. Nulla facilisi.</p>
						<br/>
						<form action="list2.html">
							<button class="roundbtn" type="submit">More</button>
						</form>
					</div>
				</div>
			  </div>		  
			  
		

		</div>
		
		
		
		<!-- FOOTER -->
		<div class="footerbg lcfix">
			<div class="container">		
				
				<div class="col-md-3">
					<span class="ftitle">Let's socialize</span>
					<div class="scont">
						<a href="#" class="social1b"><img src="images/icon-facebook.png" alt=""/></a>
						<a href="#" class="social2b"><img src="images/icon-twitter.png" alt=""/></a>
						<a href="#" class="social3b"><img src="images/icon-gplus.png" alt=""/></a>
						<a href="#" class="social4b"><img src="images/icon-youtube.png" alt=""/></a>
						<br/><br/><br/>
						<img src="images/logosmal.png" alt="" /><br/>
						&copy; 2013  |  <a href="#">Privacy Policy</a><br/>
						All Rights Reserved 
						<br/><br/>
						
					</div>
				</div>
				<!-- End of column 1-->
				
				<div class="col-md-3">
					<span class="ftitle">Travel Specialists</span>
					<br/><br/>
					<ul class="footerlist">
						<li><a href="#">Golf Vacations</a></li>
						<li><a href="#">Ski & Snowboarding</a></li>
						<li><a href="#">Disney Parks Vacations</a></li>
						<li><a href="#">Disneyland Vacations</a></li>
						<li><a href="#">Disney World Vacations</a></li>
						<li><a href="#">Vacations As Advertised</a></li>
					</ul>
				</div>
				<!-- End of column 2-->		
				
				<div class="col-md-3">
					<span class="ftitle">Travel Specialists</span>
					<br/><br/>
					<ul class="footerlist">
						<li><a href="#">Weddings</a></li>
						<li><a href="#">Accessible Travel</a></li>
						<li><a href="#">Disney Parks</a></li>
						<li><a href="#">Cruises</a></li>
						<li><a href="#">Round the World</a></li>
						<li><a href="#">First Class Flights</a></li>
					</ul>				
				</div>
				<!-- End of column 3-->		
				
				<div class="col-md-3 grey">
					<span class="ftitle">Newsletter</span>
					<div class="relative">
						<input type="email" class="form-control fccustom" id="exampleInputEmail1" placeholder="Enter email">
						<button type="submit" class="btn btn-default btncustom">Submit<img src="images/arrow.png" alt=""/></button>
					</div>
					<br/><br/>
					<span class="ftitle">Customer support</span><br/>
					<span class="pnr">1-866-599-6674</span><br/>
					office@travel.com
				</div>			
				<!-- End of column 4-->			
			
			

				
				
			</div>	
		</div>
		
		<div class="footerbg2">
			<div class="container center grey"> 
			<a href="#">Home</a> | 
			<a href="#">About</a> | 
			<a href="#">Last minute</a> | 
			<a href="#">Early booking</a> | 
			<a href="#">Special offers</a> | 
			<a href="#">Blog</a> | 
			<a href="#">Contact</a>
			<a href="#top" class="gotop scroll"><img src="images/spacer.png" alt=""/></a>
			</div>
		</div>
		

		
		
	</div>
	<!-- / WRAP -->
	
	
	
    <!-- Javascript -->
	
    <!-- This page JS -->
	<script src="assets/js/js-index3.js"></script>	
	
    <!-- Custom functions -->
    <script src="assets/js/functions.js"></script>
	
    <!-- Picker UI-->	
	<script src="assets/js/jquery-ui.js"></script>		
	
	<!-- Easing -->
    <script src="assets/js/jquery.easing.js"></script>
	
    <!-- jQuery KenBurn Slider  -->
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	
   <!-- Nicescroll  -->	
	<script src="assets/js/jquery.nicescroll.min.js"></script>
	
    <!-- CarouFredSel -->
    <script src="assets/js/jquery.carouFredSel-6.2.1-packed.js"></script>
    <script src="assets/js/helper-plugins/jquery.touchSwipe.min.js"></script>
	<script type="text/javascript" src="assets/js/helper-plugins/jquery.mousewheel.min.js"></script>
	<script type="text/javascript" src="assets/js/helper-plugins/jquery.transit.min.js"></script>
	<script type="text/javascript" src="assets/js/helper-plugins/jquery.ba-throttle-debounce.min.js"></script>
	
    <!-- Custom Select -->
	<script type='text/javascript' src='assets/js/jquery.customSelect.js'></script>	

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="dist/js/bootstrap.min.js"></script>
  </body>
</html>
