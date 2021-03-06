<!DOCTYPE html>
<html>
  <head>
  	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Travel Agency - HTML5 Booking template</title>
	
    <!-- Bootstrap -->
    <link href="dist/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="assets/css/custom.css" rel="stylesheet" media="screen">
	
    <!-- Updates -->
    <link href="updates/update1/css/style01.css" rel="stylesheet" media="screen">
    <link href="assets/css/intro.css" rel="stylesheet" media="screen">

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
	
    <!-- Carousel -->	
	<link href="examples/carousel/carousel.css" rel="stylesheet">
	
    <!-- Revolution banner css settings -->
    <link rel="stylesheet" type="text/css" href="css/fullscreen.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="rs-plugin/css/settings.css" media="screen" />

    <!-- Picker -->	
	<link rel="stylesheet" href="assets/css/jquery-ui.css" />	
	
    <!-- jQuery -->	
    <script src="assets/js/jquery.v2.0.3.js"></script>
	
  </head>
  <body>
    
	<!-- BLUE SECTION -->	
	<div class="bluediv">
		<div class="loader"><img src="images/loading.gif" alt="" /></div>
		
		<a href="intro2.php"><img class="logointro" src="images/logo-intro.png" alt="" /></a>
		
		<div class="tabscontainer">
			<ul class='tabs'>
				<li class="b1" onclick='mySelectUpdate(); changeAnimation1();'><a href='#tab1'><div class="anivacations"><img src="images/spacer.png" alt=""/>Vacations</div></a></li>
				<li class="b2" onclick='mySelectUpdate(); changeAnimation2();'><a href='#tab2'><div class="anihotels"><img src="images/spacer.png" alt=""/>Hotels</div></a></li>
				<li class="b3" onclick='mySelectUpdate(); changeAnimation3();'><a href='#tab3'><div class="aniflights"><img src="images/spacer.png" alt=""/>Flights</div></a></li>
				<li class="b4" onclick='mySelectUpdate(); changeAnimation4();'><a href='#tab4'><div class="anicars"><img src="images/spacer.png" alt=""/>Cars</div></a></li>
				<li class="b5" onclick='mySelectUpdate(); changeAnimation5();'><a href='#tab5'><div class="anicruises"><img src="images/spacer.png" alt=""/>Cruises</div></a></li>
			</ul>
		</div>
		
		<div class="social">
			<a href="#" ><img src="images/icon-facebook.png" alt=""/></a>
			<a href="#" ><img src="images/icon-twitter.png" alt=""/></a>
			<a href="#" ><img src="images/icon-gplus.png" alt=""/></a>
			<a href="#" ><img src="images/icon-youtube.png" alt=""/></a>
			<br/><br/>
			&copy; 2013 |<a href="#">Travel Agency</a><br/>All rights reserved.
		</div>
	</div>
	<!-- END OF BLUE SECTION -->	

	<!--WHITE SECTION -->	
	<div class="whitediv">
	
		<!--HOME OBJECTS -->	
		<img class="couple" src="images/couple.png" alt="" />
		<img class="girl" src="images/girl.png" alt="" />
		<img class="girl2" src="images/girl2.png" alt="" />
		<img class="girl-car" src="images/girl-car.png" alt="" />
		<img class="car" src="images/car.png" alt="" />
		<img class="girl-cruise" src="images/girl-cruise.png" alt="" />
		<div class="palmbgcontainer"></div>
		<img class="dubai" src="images/dubai.jpg" alt="" />
		<img class="plane" src="images/plane.jpg" alt="" />
		<img class="road" src="images/road.jpg" alt="" />
		<img class="cruise" src="images/cruise.jpg" alt="" />

		<!--TAB 1 -->	
		<div id="tab1">
			<div class="w50percent">
				<div class="wh90percent textleft">
					<span class="opensans size13"><b>Flying from</b></span>
					<input type="text" class="form-control" placeholder="City or airport">
				</div>
			</div>

			<div class="w50percentlast">
				<div class="wh90percent textleft right">
					<span class="opensans size13"><b>To</b></span>
					<input type="text" class="form-control" placeholder="City or airport">
				</div>
			</div>
			
			<div class="clearfix"></div><br/>
			
			<div class="w50percent">
				<div class="wh90percent textleft">
					<span class="opensans size13"><b>Check in date</b></span>
					<input type="text" class="form-control mySelectCalendar2" id="datepicker" placeholder="mm/dd/yyyy"/>
				</div>
			</div>

			<div class="w50percentlast">
				<div class="wh90percent textleft right">
					<span class="opensans size13"><b>Check out date</b></span>
					<input type="text" class="form-control mySelectCalendar2" id="datepicker2" placeholder="mm/dd/yyyy"/>
				</div>
			</div>
			
			<div class="clearfix"></div>
			
			<div class="room1" >
				<div class="w50percent">
					<div class="wh90percent textleft">
						<span class="opensans size13"><b>ROOM 1</b></span><br/>
						
						<div class="addroom1 block"><a href="#room2" onclick="addroom2()" class="grey">+ Add room</a></div>
					</div>
				</div>

				<div class="w50percentlast">	
					<div class="wh90percent textleft right">
						<div class="w50percent">
							<div class="wh90percent textleft left">
								<span class="opensans size13"><b>Adult</b></span>
								<select class="form-control mySelectBoxClass">
								  <option>1</option>
								  <option selected>2</option>
								  <option>3</option>
								  <option>4</option>
								  <option>5</option>
								</select>
							</div>
						</div>							
						<div class="w50percentlast">
							<div class="wh90percent textleft left">
							<span class="opensans size13"><b>Child</b></span>
								<select class="form-control mySelectBoxClass">
								  <option>0</option>
								  <option selected>1</option>
								  <option>2</option>
								  <option>3</option>
								  <option>4</option>
								  <option>5</option>
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="room2 none">
				<div class="clearfix"></div><div class="line1"></div>
				<div class="w50percent">
					<div class="wh90percent textleft">
						<span class="opensans size13"><b>ROOM 2</b></span><br/>
						<div class="addroom2 block grey"><a href="#" onclick="addroom3()" class="grey">+ Add room</a> | <a href="#" onclick="removeroom2()" class="orange"><img src="images/delete.png" alt="delete"/></a></div>
					</div>
				</div>

				<div class="w50percentlast">	
					<div class="wh90percent textleft right">
						<div class="w50percent">
							<div class="wh90percent textleft left">
								<span class="opensans size13"><b>Adult</b></span>
								<select class="form-control mySelectBoxClass">
								  <option>1</option>
								  <option>2</option>
								  <option selected>3</option>
								  <option>4</option>
								  <option>5</option>
								</select>
							</div>
						</div>							
						<div class="w50percentlast">
							<div class="wh90percent textleft right">
							<span class="opensans size13"><b>Child</b></span>
								<select class="form-control mySelectBoxClass">
								  <option selected>0</option>
								  <option>1</option>
								  <option>2</option>
								  <option>3</option>
								  <option>4</option>
								  <option>5</option>
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>		

			<div class="room3 none">
				<div class="clearfix"></div><div class="line1"></div>
				<div class="w50percent">
					<div class="wh90percent textleft">
						<span class="opensans size13"><b>ROOM 3</b></span><br/>
						<div class="addroom3 block grey"><a href="#" onclick="addroom3()" class="grey">+ Add room</a> | <a href="#" onclick="removeroom3()" class="orange"><img src="images/delete.png" alt="delete"/></a></div>
					</div>
				</div>

				<div class="w50percentlast">	
					<div class="wh90percent textleft right">
						<div class="w50percent">
							<div class="wh90percent textleft left">
								<span class="opensans size13"><b>Adult</b></span>
								<select class="form-control mySelectBoxClass">
								  <option selected>1</option>
								  <option>2</option>
								  <option>3</option>
								  <option>4</option>
								  <option>5</option>
								</select>
							</div>
						</div>							
						<div class="w50percentlast">
							<div class="wh90percent textleft right">
							<span class="opensans size13"><b>Child</b></span>
								<select class="form-control mySelectBoxClass">
								  <option selected>0</option>
								  <option>1</option>
								  <option>2</option>
								  <option>3</option>
								  <option>4</option>
								  <option>5</option>
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>	
			<form action="list4.php">
				<button type="submit" class="btn-search2">Search</button>	
			</form>	
		</div>
		<!-- END OF TAB1 -->
		
		<!--TAB 2 -->			
		<div id="tab2">
			<span class="opensans size18">Choose your destination</span>
			<input type="text" class="form-control" placeholder="Greece">
			
			<br/>
			
			<div class="w50percent">
				<div class="wh90percent textleft">
					<span class="opensans size13"><b>Check in date</b></span>
					<input type="text" class="form-control mySelectCalendar2" id="datepicker7" placeholder="mm/dd/yyyy"/>
				</div>
			</div>

			<div class="w50percentlast">
				<div class="wh90percent textleft right">
					<span class="opensans size13"><b>Check out date</b></span>
					<input type="text" class="form-control mySelectCalendar2" id="datepicker8" placeholder="mm/dd/yyyy"/>
				</div>
			</div>
			
			<div class="clearfix"></div>
			
			<div class="room1" >
				<div class="w50percent">
					<div class="wh90percent textleft">
						<span class="opensans size13"><b>ROOM 1</b></span><br/>
						
						<div class="addroom1 block"><a href="#room2" onclick="addroom2()" class="grey">+ Add room</a></div>
					</div>
				</div>

				<div class="w50percentlast">	
					<div class="wh90percent textleft right">
						<div class="w50percent">
							<div class="wh90percent textleft left">
								<span class="opensans size13"><b>Adult</b></span>
								<select class="form-control mySelectBoxClass">
								  <option>1</option>
								  <option selected>2</option>
								  <option>3</option>
								  <option>4</option>
								  <option>5</option>
								</select>
							</div>
						</div>							
						<div class="w50percentlast">
							<div class="wh90percent textleft right">
							<span class="opensans size13"><b>Child</b></span>
								<select class="form-control mySelectBoxClass">
								  <option>0</option>
								  <option selected>1</option>
								  <option>2</option>
								  <option>3</option>
								  <option>4</option>
								  <option>5</option>
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="room2 none">
				<div class="clearfix"></div><div class="line1"></div>
				<div class="w50percent">
					<div class="wh90percent textleft">
						<span class="opensans size13"><b>ROOM 2</b></span><br/>
						<div class="addroom2 block grey"><a href="#" onclick="addroom3()" class="grey">+ Add room</a> | <a href="#" onclick="removeroom2()" class="orange"><img src="images/delete.png" alt="delete"/></a></div>
					</div>
				</div>

				<div class="w50percentlast">	
					<div class="wh90percent textleft right">
						<div class="w50percent">
							<div class="wh90percent textleft left">
								<span class="opensans size13"><b>Adult</b></span>
								<select class="form-control mySelectBoxClass">
								  <option>1</option>
								  <option>2</option>
								  <option selected>3</option>
								  <option>4</option>
								  <option>5</option>
								</select>
							</div>
						</div>							
						<div class="w50percentlast">
							<div class="wh90percent textleft right">
							<span class="opensans size13"><b>Child</b></span>
								<select class="form-control mySelectBoxClass">
								  <option selected>0</option>
								  <option>1</option>
								  <option>2</option>
								  <option>3</option>
								  <option>4</option>
								  <option>5</option>
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>		

			<div class="room3 none">
				<div class="clearfix"></div><div class="line1"></div>
				<div class="w50percent">
					<div class="wh90percent textleft">
						<span class="opensans size13"><b>ROOM 3</b></span><br/>
						<div class="addroom3 block grey"><a href="#" onclick="addroom3()" class="grey">+ Add room</a> | <a href="#" onclick="removeroom3()" class="orange"><img src="images/delete.png" alt="delete"/></a></div>
					</div>
				</div>

				<div class="w50percentlast">	
					<div class="wh90percent textleft right">
						<div class="w50percent">
							<div class="wh90percent textleft left">
								<span class="opensans size13"><b>Adult</b></span>
								<select class="form-control mySelectBoxClass">
								  <option selected>1</option>
								  <option>2</option>
								  <option>3</option>
								  <option>4</option>
								  <option>5</option>
								</select>
							</div>
						</div>							
						<div class="w50percentlast">
							<div class="wh90percent textleft right">
							<span class="opensans size13"><b>Child</b></span>
								<select class="form-control mySelectBoxClass">
								  <option selected>0</option>
								  <option>1</option>
								  <option>2</option>
								  <option>3</option>
								  <option>4</option>
								  <option>5</option>
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>	
			<form action="list4.php">
				<button type="submit" class="btn-search2">Search</button>	
			</form>
		</div>
		<!--END OF TAB 2 -->	
		
		<!--TAB 3 -->			
		<div id="tab3">
			<div class="w50percent">
				<div class="wh90percent textleft">
					<span class="opensans size13"><b>Flying from</b></span>
					<input type="text" class="form-control" placeholder="City or airport">
				</div>
			</div>

			<div class="w50percentlast">
				<div class="wh90percent textleft right">
					<span class="opensans size13"><b>To</b></span>
					<input type="text" class="form-control" placeholder="City or airport">
				</div>
			</div>
			
			
			<div class="clearfix"></div><br/>
			
			<div class="w50percent">
				<div class="wh90percent textleft">
					<span class="opensans size13"><b>Departing</b></span>
					<input type="text" class="form-control mySelectCalendar2" id="datepicker3" placeholder="mm/dd/yyyy"/>
				</div>
			</div>

			<div class="w50percentlast">
				<div class="wh90percent textleft right">
					<span class="opensans size13"><b>Returning</b></span>
					<input type="text" class="form-control mySelectCalendar2" id="datepicker4" placeholder="mm/dd/yyyy"/>
				</div>
			</div>
			
			<div class="clearfix"></div>
			
			<div class="room1" >
				<div class="w50percent">
					<div class="wh90percent textleft">
						<span class="opensans size13"><b>Adult</b></span>
						<select class="form-control mySelectBoxClass">
						  <option>1</option>
						  <option selected>2</option>
						  <option>3</option>
						  <option>4</option>
						  <option>5</option>
						</select>
					</div>
				</div>

				<div class="w50percentlast">	
					<div class="wh90percent textleft right">
						<span class="opensans size13"><b>Child</b></span>
						<select class="form-control mySelectBoxClass">
						  <option>0</option>
						  <option selected>1</option>
						  <option>2</option>
						  <option>3</option>
						  <option>4</option>
						  <option>5</option>
						</select>
					</div>
				</div>
			</div>	
			<form action="list4.php">
				<button type="submit" class="btn-search2">Search</button>	
			</form>
		</div>
		<!-- END OF TAB3 -->
		
		<!--TAB 4 -->	
		<div id="tab4">
			<div class="w50percent">
				<div class="wh90percent textleft">
					<span class="opensans size13"><b>Picking up</b></span>
					<input type="text" class="form-control" placeholder="Airport, address">
				</div>
			</div>

			<div class="w50percentlast">
				<div class="wh90percent textleft right">
					<span class="opensans size13"><b>Dropping off</b></span>
					<input type="text" class="form-control" placeholder="Airport, address">
				</div>
			</div>
			
			
			<div class="clearfix"></div><br/>
			
			<div class="w50percent">
				<div class="wh90percent textleft">
					<span class="opensans size13"><b>Pick up date</b></span>
					<input type="text" class="form-control mySelectCalendar2" id="datepicker5" placeholder="mm/dd/yyyy"/>
				</div>
			</div>

			<div class="w50percentlast">
				<div class="wh90percent textleft right">
					<span class="opensans size13"><b>Hour</b></span>
					<select class="form-control mySelectBoxClass">
					  <option>12:00 AM</option>
					  <option>12:30 AM</option>
					  <option>01:00 AM</option>
					  <option>01:30 AM</option>
					  <option>02:00 AM</option>
					  <option>02:30 AM</option>
					  <option>03:00 AM</option>
					  <option>03:30 AM</option>
					  <option>04:00 AM</option>
					  <option>04:30 AM</option>
					  <option>05:00 AM</option>
					  <option>05:30 AM</option>
					  <option>06:00 AM</option>
					  <option>06:30 AM</option>
					  <option>07:00 AM</option>
					  <option>07:30 AM</option>
					  <option>08:00 AM</option>
					  <option>08:30 AM</option>
					  <option>09:00 AM</option>
					  <option>09:30 AM</option>
					  <option>10:00 AM</option>
					  <option selected>10:30 AM</option>
					  <option>11:00 AM</option>
					  <option>11:30 AM</option>
					  <option>12:00 PM</option>
					  <option>12:30 PM</option>								  
					  <option>01:00 PM</option>
					  <option>01:30 PM</option>
					  <option>02:00 PM</option>
					  <option>02:30 PM</option>
					  <option>03:00 PM</option>
					  <option>03:30 PM</option>
					  <option>04:00 PM</option>
					  <option>04:30 PM</option>
					  <option>05:00 PM</option>
					  <option>05:30 PM</option>
					  <option>06:00 PM</option>
					  <option>06:30 PM</option>
					  <option>07:00 PM</option>
					  <option>07:30 PM</option>
					  <option>08:00 PM</option>
					  <option>08:30 PM</option>
					  <option>09:00 PM</option>
					  <option>09:30 PM</option>
					  <option>10:00 PM</option>
					  <option>10:30 PM</option>
					  <option>11:00 PM</option>
					  <option>11:30 PM</option>								  
					</select>
				</div>
			</div>
			
			<div class="clearfix"></div>
			
			<div class="room1" >
				<div class="w50percent">
					<div class="wh90percent textleft">
						<span class="opensans size13"><b>Drop off date</b></span>
						<input type="text" class="form-control mySelectCalendar2" id="datepicker6" placeholder="mm/dd/yyyy"/>
					</div>
				</div>

				<div class="w50percentlast">	
					<div class="wh90percent textleft right">
						<span class="opensans size13"><b>Hour</b></span>
						<select class="form-control mySelectBoxClass">
						  <option>12:00 AM</option>
						  <option>12:30 AM</option>
						  <option>01:00 AM</option>
						  <option>01:30 AM</option>
						  <option>02:00 AM</option>
						  <option>02:30 AM</option>
						  <option>03:00 AM</option>
						  <option>03:30 AM</option>
						  <option>04:00 AM</option>
						  <option>04:30 AM</option>
						  <option>05:00 AM</option>
						  <option>05:30 AM</option>
						  <option>06:00 AM</option>
						  <option>06:30 AM</option>
						  <option>07:00 AM</option>
						  <option>07:30 AM</option>
						  <option>08:00 AM</option>
						  <option>08:30 AM</option>
						  <option>09:00 AM</option>
						  <option>09:30 AM</option>
						  <option>10:00 AM</option>
						  <option selected>10:30 AM</option>
						  <option>11:00 AM</option>
						  <option>11:30 AM</option>
						  <option>12:00 PM</option>
						  <option>12:30 PM</option>								  
						  <option>01:00 PM</option>
						  <option>01:30 PM</option>
						  <option>02:00 PM</option>
						  <option>02:30 PM</option>
						  <option>03:00 PM</option>
						  <option>03:30 PM</option>
						  <option>04:00 PM</option>
						  <option>04:30 PM</option>
						  <option>05:00 PM</option>
						  <option>05:30 PM</option>
						  <option>06:00 PM</option>
						  <option>06:30 PM</option>
						  <option>07:00 PM</option>
						  <option>07:30 PM</option>
						  <option>08:00 PM</option>
						  <option>08:30 PM</option>
						  <option>09:00 PM</option>
						  <option>09:30 PM</option>
						  <option>10:00 PM</option>
						  <option>10:30 PM</option>
						  <option>11:00 PM</option>
						  <option>11:30 PM</option>		
					    </select>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<form action="list4.php">
				<button type="submit" class="btn-search2">Search</button>	
			</form>		
		</div>
		<!-- END OF TAB4 -->
		
		<!--TAB 5 -->	
		<div id="tab5">
			<div class="fullwidth">
				<span class="opensans size13"><b>Going to</b></span>
				<select class="form-control mySelectBoxClass">
				  <option selected>Show all</option>
				  <optgroup label="Most Popular">
					  <option>Caribbean</option>
					  <option>Bahamas</option>
					  <option>Mexico</option>
					  <option>Alaska</option>
					  <option>Europe</option>
					  <option>Bermuda</option>
					  <option>Hawaii</option>
				  </optgroup>
				  <optgroup label="Other Destinations">
					  <option>Africa</option>
					  <option>Arctic/Antartctic</option>
					  <option>Asia</option>
					  <option>Australia/New Zealand</option>
					  <option>Central America</option>
					  <option>Cruise to Nowhere</option>
					  <option>Galapagos</option>
					  <option>Greenland/Iceland</option>
					  <option>Middle East</option>
					  <option>Pacific Coastal</option>
					  <option>Panama Canal</option>
					  <option>South Africa</option>
					  <option>South Pacific</option>
					  <option>Tahiti</option>
					  <option>Transatlantic</option>
					  <option>World Cruises</option>
				  </optgroup>
				</select>

				<br/>
				
				<span class="opensans size13"><b>Departure</b></span>
				<select class="form-control mySelectBoxClass">
				  <option selected>Show all</option>
				  <option>October 2013</option>
				  <option>November 2013</option>
				  <option>December 2013</option>
				  <option>January 2014</option>
				  <option>February 2014</option>
				  <option>March 2014</option>
				  <option>April 2014</option>
				  <option>May 2014</option>
				  <option>June 2014</option>
				  <option>July 2014</option>
				  <option>August 2014</option>
				  <option>September 2014</option>
				  <option>October 2014</option>
				  <option>November 2014</option>
				  <option>December 2014</option>
				</select>
				<form action="list4.php">
					<button type="submit" class="btn-search2">Search</button>	
				</form>			
			</div>		
		</div>
		<!-- END OF TAB5 -->
		
		
		
		
	</div>
	<!-- END OF WHITE SECTION -->	
	
	
	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="dist/js/bootstrap.min.js"></script>
	
    <!-- Javascript -->
	<script src="assets/js/js-intro2.js"></script>
	
	<!-- Preload images -->
    <script src="assets/js/jquery.preload.js"></script>	
	
    <!-- Easing -->	
    <script src="assets/js/jquery.easing.js"></script>	
	
    <!-- Nicescroll  -->	
	<script src="assets/js/jquery.nicescroll.min.js"></script>	
	
    <!-- Picker UI-->		
	<script src="assets/js/jquery-ui.js"></script>		
	
    <!-- Custom Select -->
	<script type='text/javascript' src='assets/js/jquery.customSelect.js'></script>
	
    <!-- Functions -->
    <script src="assets/js/functions.js"></script>
	
    <!-- CarouFredSel -->
    <script src="assets/js/jquery.carouFredSel-6.2.1-packed.js"></script>
    <script src="assets/js/helper-plugins/jquery.touchSwipe.min.js"></script>
	<script type="text/javascript" src="assets/js/helper-plugins/jquery.mousewheel.min.js"></script>
	<script type="text/javascript" src="assets/js/helper-plugins/jquery.transit.min.js"></script>
	<script type="text/javascript" src="assets/js/helper-plugins/jquery.ba-throttle-debounce.min.js"></script>
	
  </body>
</html>
