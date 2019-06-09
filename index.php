<?php 
date_default_timezone_set('America/Toronto');

require_once('class.phpmailer.php');
include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded

$mail             = new PHPMailer();


?>
﻿<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"><![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--><html class="no-js" lang="en"><!--<![endif]-->
<head>
    <!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width" />
	<meta name="description" content="India entry specialists for international brands. Global expansion for Indian brands and businesses. Strategic business and brand management for sustainable growth and profitability.">
	<meta name="keywords" content="7islands">
    <title>7islands</title>
    <link rel="icon" href="favicon.ico" type="image/icon" >
    <!-- Included CSS Files -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fonts/fonts.css">
    <link rel="stylesheet" href="stylesheets/normalize.css">
	<link rel="stylesheet" href="stylesheets/supersized.css" type="text/css" media="screen" />
	<link rel="stylesheet" href="stylesheets/supersized.shutter.css" type="text/css" media="screen" />
    <link href='http://fonts.googleapis.com/css?family=Raleway:100' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="stylesheets/style_common.css" />
    <link rel="stylesheet" type="text/css" href="stylesheets/style5.css" />
    <link rel="stylesheet" href="stylesheets/stylehov.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="stylesheets/thirdeffect.css" type="text/css" media="screen"/>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:200italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Arapey' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="stylesheets/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" />
	<link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<style type="text/css">
		body,td,th {
			color: #FFF;
		}
		body {
			background-color: #000;
		}
	</style>
    
    <!-- Included JS Files -->
	<script type="text/javascript" src="javascripts/jquery.js" ></script>
	<script type="text/javascript" src="javascripts/jquery-1.10.2.js" ></script>
    <script type="text/javascript" src="javascripts/jquery-ui.js" ></script>
	<script type="text/javascript" src="javascripts/jquery.easing.min.js" defer></script>
	<script type="text/javascript" src="javascripts/supersized.3.2.7.js" ></script>
	<script type="text/javascript" src="javascripts/supersized.shutter.min.js" defer></script>
    <script type="text/javascript"src="javascripts/jquery.validate.pack.js" defer></script>
    <script type="text/javascript" src="javascripts/jquery.parallax-1.1.3.js" defer></script>
    <script src="javascripts/jquery.prettyPhoto.js" defer  type="text/javascript" charset="utf-8"></script>
    
	<script type="text/javascript">
		$(document).ready(function(){
			// validate signup form on keyup and submit
			var validator = $("#contactform").validate({
				rules: {
					name: {
						required: true,
						minlength: 2
					},
					email: {
						required: true,
						email: true
					},
					subject: {
						required: true,
						minlength: 2
					},
					message: {
						required: true,
						minlength: 10
					}
				},
				messages: {
					name: {
						required: "Please enter your name",
						minlength: jQuery.format("Your name needs to be at least {0} characters")
					},
					email: {
						required: "Please enter a valid email address",
						minlength: "Please enter a valid email address"
					},
					subject: {
						required: "You need to enter a subject!",
						minlength: jQuery.format("Enter at least {0} characters")
					},
					message: {
						required: "You need to enter a message!",
						minlength: jQuery.format("Enter at least {0} characters")
					}
				},
				// set this class to error-labels to indicate valid fields
				success: function(label) {
					label.addClass("checked");
				}
			});
		});
    </script>
    
    <!-- Supersized Settings -->
    <script type="text/javascript">
		jQuery(function($){
			$.supersized({
				// Functionality
				slideshow               :   1,			// Slideshow on/off
				autoplay				:	1,			// Slideshow starts playing automatically
				start_slide             :   1,			// Start slide (0 is random)
				stop_loop				:	0,			// Pauses slideshow on last slide
				random					: 	0,			// Randomize slide order (Ignores start slide)
				slide_interval          :   5000,		// Length between transitions
				transition              :   1, 			// 0-None, 1-Fade, 2-Slide Top, 3-Slide Right, 4-Slide Bottom, 5-Slide Left, 6-Carousel Right, 7-Carousel Left
				transition_speed		:	500,		// Speed of transition
				new_window				:	1,			// Image links open in new window/tab
				pause_hover             :   0,			// Pause slideshow on hover
				keyboard_nav            :   1,			// Keyboard navigation on/off
				performance				:	3,			// 0-Normal, 1-Hybrid speed/quality, 2-Optimizes image quality, 3-Optimizes transition speed // (Only works for Firefox/IE, not Webkit)
				image_protect			:	1,			// Disables image dragging and right click with Javascript
				
				// Size & Position						   
				min_width		        :   0,			// Min width allowed (in pixels)
				min_height		        :   0,			// Min height allowed (in pixels)
				vertical_center         :   1,			// Vertically center background
				horizontal_center       :   1,			// Horizontally center background
				fit_always				:	0,			// Image will never exceed browser width or height (Ignores min. dimensions)
				fit_portrait         	:   1,			// Portrait images will not exceed browser height
				fit_landscape			:   0,			// Landscape images will not exceed browser width
				
				// Components							
				slide_links				:	'blank',	// Individual links for each slide (Options: false, 'num', 'name', 'blank')
				thumb_links				:	1,			// Individual thumb links for each slide
				thumbnail_navigation    :   1,			// Thumbnail navigation
				slides 					:  	[			// Slideshow Images
												{image : 'images/background-slideshow/01.jpg', title : '<div id="slidecounter"><h1>BUILDING GLOBAL BRANDS</h1></div>Strategic business and brand management for sustainable growth and profitability. India entry specialists for international brands; global expansion for Indian brands and businesses.'},
												{image : 'images/background-slideshow/02.jpg', title : '<div id="slidecounter"><h1>BUILDING GLOBAL BRANDS</h1></div>Strategic business and brand management for sustainable growth and profitability. India entry specialists for international brands; global expansion for Indian brands and businesses.'},
												{image : 'images/background-slideshow/03.jpg', title : '<div id="slidecounter"><h1>BUILDING GLOBAL BRANDS</h1></div>Strategic business and brand management for sustainable growth and profitability. India entry specialists for international brands; global expansion for Indian brands and businesses.'},
												{image : 'images/background-slideshow/04.jpg', title : '<div id="slidecounter"><h1>BUILDING GLOBAL BRANDS</h1></div>Strategic business and brand management for sustainable growth and profitability. India entry specialists for international brands; global expansion for Indian brands and businesses.'},
					{image : 'images/background-slideshow/05.jpg', title : '<div id="slidecounter"><h1>BUILDING GLOBAL BRANDS</h1></div>Strategic business and brand management for sustainable growth and profitability. India entry specialists for international brands; global expansion for Indian brands and businesses.'}
											],
												
					// Theme Options			   
					progress_bar			:	0,			// Timer for each slide							
					mouse_scrub				:	0
			});
		});
	</script>
    
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
	
	<script type="text/javascript">
		$(document).ready(function(){
			$("a[data-gal^='prettyPhoto']").prettyPhoto();
		});
    </script>
    
	<script>
		function gotoAbout(id, t){	
			//animate to the div id.
			$(".contentbox-wrapper-about").animate({"left": -($(id).position().left)}, 600);
			// remove "active" class from all links inside #nav
			$('#nav a').removeClass('active');
			// add active class to the current link
			$(t).addClass('active');	
		}
		
		function gotoTeam(id, t){	
			//animate to the div id.
			$(".contentbox-wrapper-team").animate({"left": -($(id).position().left)}, 600);
			// remove "active" class from all links inside #nav
			$('#nav a').removeClass('active');
			// add active class to the current link
			$(t).addClass('active');	
		}
		
		function gotoNews(id, t){	
			//animate to the div id.
			$(".contentbox-wrapper-news").animate({"left": -($(id).position().left)}, 600);
			// remove "active" class from all links inside #nav
			$('#nav a').removeClass('active');
			// add active class to the current link
			$(t).addClass('active');	
		}
    </script>
    
    <script type="text/javascript">
		$(document).ready(function(){
			//.parallax(xPosition, speedFactor, outerHeight) options:
			//xPosition - Horizontal position of the element
			//inertia - speed to move relative to vertical scroll. Example: 0.1 is one tenth the speed of scrolling, 2 is twice the speed of scrolling
			//outerHeight (true/false) - Whether or not jQuery should use its outerHeight option to determine when a section is in the viewport
			$('.section3').parallax("50%", 0.5);
			$('.section5').parallax("50%", 0.5);
			$('.section7').parallax("50%", 0.5);
			$('.section9').parallax("50%", 0.5);
			$('.section10').parallax("50%", 0.5);
		})
    </script>
    
    <!-- Hook up the Loader -->
	<script type="text/javascript">
		$(window).load(function() {
			$("#loading").fadeOut("1000", function() {
			// Animation complete
				$('#loading img').css("display","none");
				$('#loading').css("display","none");
				$('#loading').css("background","none");
				$('#loading').css("width","0");
				$('#loading').css("height","0");
		  });
		});
	</script>

</head>
<body>

	<!-- Loader -->
	<div id="loading">
    	<img src="images/loader.gif" alt="Website Loader"/>
    </div>

	<!-- Header and Navigation -->
    <header>
    	
        <!-- Your Logo Goes Here -->
    	<div class="logo">
        	<a href="#homepage"><img src="images/7islands-logo-02.png" alt="7islands" width="180" height="40"></a>
        </div>
        
        <!-- Your menu items are placed here -->
        <div class="main-menu hide-for-small">
        	<nav>
                <ul id="top-menu">
                    <li class="selected"><a href="#homepage" class="first">HOME</a></li>
                    <li><a href="#about-us">ABOUT US</a></li>
                    <li><a href="#team">CONSULTING</a></li>
                    <li><a href="#services">PARTNERSHIPS</a></li>
                    <li><a href="#gallery">BRANDS</a></li>
                    <li><a href="#news">GALLERY</a></li>
                    <li><a href="#contact11">CONTACT</a></li>
                </ul>
            </nav>
        </div>
        
        <!-- Enter the links for your social media profiles
        <div class="social-media-header hide-for-small hide-for-1220">
        	<a href="#" class="facebook">Facebook</a>
        	<a href="#" class="twitter">Twitter</a>
        	<a href="#" class="vimeo">Vimeo</a>
        	<a href="#" class="youtube">Youtube</a>
        </div> -->
        
        <select class="responsive-nav show-for-small">
        	<option value="" selected="">Main Navigation</option>
        	<option value="#homepage">Home</option>
        	<option value="#about-us">About Us</option>
        	<option value="#team">CONSULTING</option>
        	<option value="#services">PARTNERSHIPS</option>
        	<option value="#gallery">BRANDS</option>
        	<option value="#news">GALLERY</option>
        	<option value="#contact11">Contact</option>
        	
		</select>
        
    </header>
    
    <div class="navigation">
    	<ul id="slide-list"></ul>
        <!--Arrow Navigation-->
        <a id="prevslide" class="load-item"></a>
        <a id="nextslide" class="load-item"></a>
    </div>
    
    <div class="section1 black" id="homepage">
    	<!--Time Bar-->
        <div id="progress-back" class="load-item">
            <div id="progress-bar"></div>
        </div>
        
        <!--Control Bar-->
        <div id="controls-wrapper" class="load-item">
            <div id="controls">
                <!--Slide captions displayed here-->
                <div id="slidecaption"></div>
                <div id="slidedivider"></div>
            </div>
           
        </div> 
        
    	<div class="pattern1"></div>
	</div>
    
    <div class="section3 black" id="q1">
        <div class="arrowdown">
            <nav>
                <ul>
                    <li><a href="#q1"><img src="images/arrow-down.png" width="99" height="99" alt="Down"></a></li>
                </ul>
            </nav>
        </div>
        <div class="quote">About Us</div>
        <div class="quote4-pattern"></div>
	</div>
    
    <div class="section2 black" id="about-us">
    
    	<div class="arrowdown">
            <nav>
                <ul>
                	<li><a href="#about-us"><img src="images/arrow-down.png" width="99" height="99" alt="Down"></a></li>
                </ul>
            </nav>
        </div>
        
    	<div class="about-us-main">
    		<h1>About us</h1>
    		<div id="nav2">
    			<ul>
                    <li><a class="active" href="#" onClick="gotoAbout('#about-one', this); return false">01</a></li>
                    <li><a href="#" onClick="gotoAbout('#about-two', this); return false">02</a></li>
                    <li><a href="#" onClick="gotoAbout('#about-three', this); return false">03</a></li>
                    <li><a href="#" onClick="gotoAbout('#about-four', this); return false">04</a></li>
                    <li><a href="#" onClick="gotoAbout('#about-five', this); return false">05</a></li>
					<li><a href="#" onClick="gotoAbout('#about-six', this); return false">06</a></li>
                </ul>
    		</div>
    		<h2>BOUTIQUE CONSULTANCY </h2>
    		<h3>Building global brands</h3>
    		<p>Specialising in strategic business and brand management and integrated marketing solutions, 7 Islands builds smart brands with its multi-dimensional approach. By leveraging business insights with our core competencies, we drive innovation across business models and markets, to create growth and sustained differentiation.</p>
    		
            <div id="inline-more-about" class="hide">
                <img src="img/fullarticle.jpg" alt="Read more about pulsar!">
                <h2>About us</h2>
                <h3>We love design</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
    	</div>
        
        <div class="divider"></div>
        <div class="divider2"></div>
        
        <div class="content_6 content">
        	<div id="wrap22">
        		<div id="content">
        			<div class="contentbox-wrapper-about">
                    
        				<div id="about-one" class="contentbox">	
        					<div class="article1">
        						<div class="view34 third-effect">
        							<img src="img/about11.jpg" alt="LUXURY & FASHION">
        							
								</div>
                                <h2>LUXURY & FASHION</h2>
                             </div>
						</div>
                        <div id="inline-1" class="hide">
                            <img src="img/about1.jpg" alt="LUXURY & FASHION">
                            <h2>LUXURY & FASHION</h2>
                            <h3>We love design</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div id="about-two" class="contentbox">
                            <div class="article1">
                                <div class="view34 third-effect">
                                	<img src="img/about22.jpg" alt="RETAIL & LIFESTYLE">
                                	
                                </div>
                                <h2>RETAIL & LIFESTYLE</h2>
							</div>
                        </div>
                        <div id="inline-2" class="hide">
                            <img src="img/about2.jpg" alt="Article Img">
                            <h2>RETAIL & LIFESTYLE</h2>
                            <h3>We love design</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div id="about-three" class="contentbox">
                            <div class="article1">
                                <div class="view34 third-effect">
                                    <img src="img/about33.jpg" alt="Read more about Pulsar!">
                                    
                                </div>
                                <h2>TECHNOLOGY</h2>
                               
                            </div>
                        </div>
                        <div id="inline-3" class="hide">
                            <img src="img/about3.jpg" alt="TECHNOLOGY">
                            <h2>TECHNOLOGY</h2>
                            <h3>We love design</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        
                        <div id="about-four" class="contentbox">
                            <div class="article1">
                                <div class="view34 third-effect">
                                    <img src="img/about44.jpg" alt="Real Estate">
                                   
                                </div>
                                <h2>REAL ESTATE</h2>
                                
                            </div>
                        </div>
                        <div id="inline-4" class="hide">
                            <img src="img/about4.jpg" alt="REAL ESTATE">
                            <h2>REAL ESTATE</h2>
                            <h3>We love design</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div id="about-five" class="contentbox">
                            <div class="article1">
                                <div class="view34 third-effect">
                                    <img src="img/about55.jpg" alt="Read more about Pulsar!">
                                    
                                </div>
                                <h2>RENEWABLE ENERGY</h2>
                                
                            </div>
                        </div>
                        <div id="inline-5" class="hide">
                            <img src="img/about5.jpg" alt="Read more about Pulsar!">
                            <h2>RENEWABLE ENERGY</h2>
                            <h3>We love design</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
                        <div id="about-six" class="contentbox">
                            <div class="article1">
                                <div class="view34 third-effect">
                                    <img src="img/about66.jpg" alt="Read more about Pulsar!">
                                    
                                </div>
                                <h2>PRIVATE WEALTH & INSTITUTIONAL INVESTORS</h2>
                               
                            </div>
                        </div>
                        <div id="inline-6" class="hide">
                            <img src="img/about6.jpg" alt="PRIVATE WEALTH & INSTITUTIONAL INVESTORS">
                            <h2>PRIVATE WEALTH & INSTITUTIONAL INVESTORS</h2>
                            <h3>We love design</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                        </div>
					</div>			
				</div>		
			</div>
		</div>
	</div>
    
    <div class="section5 black" id="q2">
        
        <div class="arrowdown">
            <nav>
                <ul>
                	<li><a href="#q2"><img src="images/arrow-down2.png" width="99" height="99" alt="Down"></a></li>
                </ul>
            </nav>
        </div>
        
        <div class="quote2">
            
            <h1>BUSINESS CONSULTING</h1>
            
		</div>
        <div class="quote4-pattern"></div>
		</div>
	</div>
    
    <div class="section6 black" id="team">
        <div class="arrowdown">
            <nav>
                <ul>
                	<li><a href="#team"><img src="images/arrow-down.png" width="99" height="99" alt="Down"></a></li>
                </ul>
            </nav>
        </div>
        <div class="about-us-main">
            <h1>BUSINESS CONSULTING</h1>
            <div id="nav3">
                <ul>
                    <li><a class="active" href="#" onClick="gotoTeam('#team-one', this); return false">01</a></li>
                    <li><a href="#" onClick="gotoTeam('#team-two', this); return false">02</a></li>
                    <li><a href="#" onClick="gotoTeam('#team-three', this); return false">03</a></li>
                    <li><a href="#" onClick="gotoTeam('#team-four', this); return false">04</a></li>
                    <li><a href="#" onClick="gotoTeam('#team-five', this); return false">05</a></li>
					<li><a href="#" onClick="gotoTeam('#team-six', this); return false">06</a></li>
                </ul>
            </div>
           <h2>DIFFERENTIATED APPROACH</h2>
		<h3>Creating long-term value</h3>
            <p>7 Islands business consulting helps your enterprise understand and leverage core competencies to drive real value by formulating leading-edge, implementable strategies that result in sustainable growth and profitability. 7 Islands can also create and operate a new business vertical under the Build-Operate-Transfer model for its clients.</p>
		</div>
        <div class="divider"></div>
        <div class="divider2"></div>
		<div class="content_6 content">
        	<div id="wrap23">
                <div id="content2">
                	<div class="contentbox-wrapper-team">
                    
                    	
                        <div id="team-one" class="contentbox">
                            <div class="article1">
                                <div class="view2 third-effect">
                                	<img src="img/business22.jpg" alt="Meet the team">
                                	
                                </div>
                                <h2>MARKET ENTRY</h2>
                                <p>We facilitate India market entry for international brands and international market expansion for Indian brands</p>
                                <div class=""><a href="#inline-8" data-gal="prettyPhoto" class="morebuttons">More</a></div>
                            </div>
                        </div>
                        <div id="inline-8" class="hide">
                            <img src="img/business22.jpg" alt="Meet the team">
                            <h2>MARKET ENTRY</h2>
                            <p>We facilitate India market entry for international brands and international market expansion for Indian brands. This includes the entire route to market, from market research, entry strategy, identifying the right local partner to contract negotiation including legal advisory. 7 Islands can further ensure that the objectives of the brand in its new market are consistently met by supervising the local operations.</p>
                        </div>
                        <div id="team-two" class="contentbox">
                            <div class="article1">
                                <div class="view2 third-effect">
                                    <img src="img/business33.jpg" alt="Meet the team">
                                   
                                </div>
                                <h2>INVESTMENTS</h2>
                                <p>7 Islands identifies the best investment opportunities for clients and can also help in raising </p>
                                <div class=""><a href="#inline-9" data-gal="prettyPhoto" class="morebuttons">More</a></div>
                            </div>
						</div>
                        <div id="inline-9" class="hide">
                            <img src="img/business33.jpg" alt="INVESTMENTS">
                            <h2>INVESTMENTS</h2>
                            <p>7 Islands identifies the best investment opportunities for clients and can also help in raising investments for them to support organic growth, complete an acquisition or to fund a joint venture. From developing the investment strategy to assisting in negotiations and structuring the transaction,<br> 7 Islands provides end-to-end consulting.</p>
                        </div>
                        <div id="team-three" class="contentbox">
                    		<div class="article1">
                    			<div class="view2 third-effect">
                    				<img src="img/business11.jpg" alt="Meet the team">
                                   
                    			</div>
                                <h2>BRAND & CORPORATE STRATEGY</h2>

                                <p>Our expertise helps you define and understand market drivers, innovative value
propositions, risks, technology strategies</p>
                                <div class=""><a href="#inline-7" data-gal="prettyPhoto" class="morebuttons">More</a></div>
							</div>
                		</div>
                        <div id="inline-7" class="hide">
                            <img src="img/business11.jpg" alt="BRAND & CORPORATE STRATEGY">
                            <h2>BRAND & CORPORATE STRATEGY</h2>
						    <p>Our expertise helps you define and understand market drivers, innovative value propositions, risks, technology strategies, globalization, M&A activity and the development of new business models. 7 Islands can also conduct assessment and development centers for senior management for corporates.</p>
                        </div>
                        <div id="team-four" class="contentbox">
                            <div class="article1">
                                <div class="view2 third-effect">
                                    <img src="img/business44.jpg" alt="EVENTS, ACTIVATIONS & PROMOTIONS">
                                   
                                </div>
                                <h2>EVENTS, ACTIVATIONS & PROMOTIONS</h2>
                                <p>7 Islands specialises in creating unique and creative brand properties. We undertake the conceptualisation and production of events</p>
                                <div class=""><a href="#inline-10" data-gal="prettyPhoto" class="morebuttons">More</a></div>
                            </div>
						</div>
                        <div id="inline-10" class="hide">
                            <img src="img/business44.jpg" alt="Meet the team">
                            <h2>AEVENTS, ACTIVATIONS & PROMOTIONS</h2>
                            <p>7 Islands specialises in creating unique and creative brand properties. We undertake the conceptualisation and production of events, brand activations and customer relationship management. By understanding each client’s needs, we determine the right target audience for each event, and deliver exceptional experiences relevant to the current market trends.</p>
                        </div>
                        <div id="team-five" class="contentbox">
                            <div class="article1">
                                <div class="view2 third-effect">
                                    <img src="img/business55.jpg" alt="CREATIVE & COMMUNICATIONS">
                                   
                                </div>
                                <h2>CREATIVE & COMMUNICATIONS</h2>
                                <p>7 Islands provides clients with integrated creative and communication solutions for their brands and projects</p>
                                <div class=""><a href="#inline-11" data-gal="prettyPhoto" class="morebuttons">More</a></div>
                          	</div>
                      	</div>
						<div id="inline-11" class="hide">
                        <img src="img/business55.jpg" alt="CREATIVE & COMMUNICATIONS">
                        <h2>CREATIVE & COMMUNICATIONS</h2>
                        <p>7 Islands provides clients with integrated creative and communication solutions for their brands and projects. We offer a broad range of services to help brands achieve their full potential. Creating marketing and communication strategies, brand identities and devising campaigns; digital marketing, social media and online presence; design, content creation, communications planning and PR.</p>
					</div>
                        <div id="team-six" class="contentbox">
                            <div class="article1">
                                <div class="view2 third-effect">
                                    <img src="img/business66.jpg" alt="CREATIVE & COMMUNICATIONS">
                                    
                                </div>
                                <h2>LEASING</h2>
                                <p>7 Islands provides expert leasing advice on a range of commercial real estate, with a special focus on retail space across India </p>
                                <div class=""><a href="#inline-12" data-gal="prettyPhoto" class="morebuttons">More</a></div>
                          	</div>
                      	</div>
						<div id="inline-12" class="hide">
                        <img src="img/business66.jpg" alt="CREATIVE & COMMUNICATIONS">
                        <h2>LEASING</h2>
                        <p>7 Islands provides expert leasing advice on a range of commercial real estate, with a special focus on retail space across India. We give you an unrivalled perspective on local markets and global trends, ensuring you pick the right locations and open stores at the right time.</p>
						<p>7 Islands also works with investors, owners and developers to make smart investment decisions, managing assets and getting the maximum value from your portfolio. We provide expert advice to investors, identifying opportunities for rental growth and structuring rental deals to maximise the investment value.</p>
					</div>     		
				</div>			
			</div>
		</div>
	</div>
    </div>
	
    <div class="section7 black" id="q3">
        <div class="arrowdown">
            <nav>
                <ul>
                <li><a href="#q3"><img src="images/arrow-down2.png" width="99" height="99" alt="Down"></a></li>
                </ul>
            </nav>
        </div>
    	<div class="quote3"> <h1>STRATEGIC PARTNERSHIPS</h1></div>
    	<div class="quote4-pattern"></div>
    </div>
    
    <div class="section8 black" id="services">
        <div class="arrowdown">
            <nav>
                <ul>
                	<li><a href="#services"><img src="images/arrow-down.png" width="99" height="99" alt="Down"></a></li>
                </ul>
            </nav>
        </div>
        <div class="about-us-main">
            <h2>STRATEGIC PARTNERSHIPS</h2>

            <p>7 Islands has formed strategic partnerships with a number of expert service-providers, to help provide clients with the latest and most cutting-edge solutions that 

can add value to their existing businesses.</p>
        </div>
        
        <div class="divider"></div>
        <div class="divider2"></div>
        
        <div class="content_6 content">
        	<div id="wrap24">
        		<div id="content3">
        			<div>
        				<div id="services1" class="contentbox2">
                        
        					<div class="article2">
        						
                                <div class="icobg">
                                	<img src="images/services/01.jpg" alt="Check Out Our Services">
                                </div>
                                <h2>Technology</h2>
                                <div class="servicescont">
                                	<p>CyberComb powered by IBM Softlayer is the next generation unified cyber platform

where a single login delivers all content, including data, applications and media to 

the user. Due to its efficient configuration and master development, the features and 

strength of CyberComb are typically higher and more advanced compared to other 

regular cloud computing systems.</p>
                                </div>
        					</div>
                            
                          			</div>
					</div>			
				</div>		
			</div>
		</div>
	</div>
    
	<div class="section9 black" id="q4">
        <div class="arrowdown">
            <nav>
                <ul>
                	<li><a href="#q4"><img src="images/arrow-down2.png" width="99" height="99" alt="Down"></a></li>
                </ul>
            </nav>
        </div>
        <div class="quote4">
            <h1>BRANDS</h1>
        </div>
    	<div class="quote4-pattern"></div>
    </div>
    
    <!--<div class="section2 black" id="gallery">
        <div class="arrowdown">
            <nav>
                <ul>
                	<li><a href="#gallery"><img src="images/arrow-down.png" width="99" height="99" alt="Down"></a></li>
                </ul>
            </nav>
        </div>
        <div class="about-us-main">
        	<h1>BRANDS</h1>
           
            <h2>Duis augue</h2>
            <h3>We love design</h3>
            <p>We work with diverse companies and organisations. Here are some of our clients.</p>
        </div>
        
        <div class="divider"></div>
        <div class="divider2"></div>
        
        <div class="content_6 content">
        	<div id="wrap25">
        		<div id="content4">
        			<div class="contentbox-wrapper-news">
                   
        		<img src="img/gallery/brands-color.jpg">
					</div>			
				</div>		
			</div>
		</div>
	</div>-->
	<div class="section2 black" id="gallery">
	        <div class="arrowdown">
	            <nav>
	                <ul>
	                	<li><a href="#gallery"><img src="images/arrow-down.png" width="99" height="99" alt="Down"></a></li>
	                </ul>
	            </nav>
	        </div>
	        <div class="about-us-main">
	        	<h1>BRANDS</h1>
	            <div id="nav4" class="hide-for-small">
	                <ul>
	                    <li><a class="active" href="#" onclick="gotoNews('#gal-one', this); return false">01</a></li>
	                    <li><a href="#" onclick="gotoNews('#gal-two', this); return false">02</a></li>
	                    <li><a href="#" onclick="gotoNews('#gal-three', this); return false">03</a></li>
	                    <li><a href="#" onclick="gotoNews('#gal-four', this); return false">04</a></li>
	                    <li><a href="#" onclick="gotoNews('#gal-five', this); return false">05</a></li>
	                    <li><a href="#" onclick="gotoNews('#gal-six', this); return false">06</a></li>
	                </ul>
	            </div>
	            <p>We work with diverse companies and organisations. Here are some of our clients.</p>
	        </div>
        
	        <div class="divider hide-for-small"></div>
	        <div class="divider2 hide-for-small"></div>
        
	        <div class="content_6 content">
	        	<div id="wrap25">
	        		<div id="content4">
	        			<div class="contentbox-wrapper-news">
	                    <!--gal item-->
	        				<div id="gal-one" class="contentbox">
	                            <div class="article1">
	                                <div class="view33 third-effect">
	                                	<img src="img/brand/brands-06.jpg" alt="">
	                                    
	                                </div>
	                            </div>
	                        </div>
	                        <!--gal item-->
	                         <!--gal item-->
	        				<div id="gal-two" class="contentbox">
	                            <div class="article1">
	                                <div class="view33 third-effect">
	                                	<img src="img/brand/brands-02.jpg" alt="">
	                                    
	                                </div>
	                            </div>
	                        </div>
	                        <!--gal item-->
	                         <!--gal item-->
	        				<div id="gal-three" class="contentbox">
	                            <div class="article1">
	                                <div class="view33 third-effect">
	                                	<img src="img/brand/brands-03.jpg" alt="">
	                                    
	                                </div>
	                            </div>
	                        </div>
	                        <!--gal item-->
	                         <!--gal item-->
	        				<div id="gal-four" class="contentbox">
	                            <div class="article1">
	                                <div class="view33 third-effect">
	                                	<img src="img/brand/brands-04.jpg" alt="">
	                                    
	                                </div>
	                            </div>
	                        </div>
	                        <!--gal item-->
	                         <!--gal item-->
	        				<div id="gal-five" class="contentbox">
	                            <div class="article1">
	                                <div class="view33 third-effect">
	                                	<img src="img/brand/brands-05.jpg" alt="">
	                                    
	                                </div>
	                            </div>
	                        </div>
	                        <!--gal item-->
	                         <!--gal item-->
	        				<div id="gal-six" class="contentbox">
	                            <div class="article1">
	                                <div class="view33 third-effect">
	                                	<img src="img/brand/brands-01.jpg" alt="">
	                                    
	                                </div>
	                            </div>
	                        </div>
	                        <!--gal item-->
	                       
						</div>			
					</div>		
				</div>
			</div>
		</div>	
    
    <div class="section10 black" id="q5">
        <div class="arrowdown">
            <nav>
                <ul>
                	<li><a href="#q5"><img src="images/arrow-down2.png" width="99" height="99" alt="Down"></a></li>
                </ul>
            </nav>
        </div>
        <div class="quote5">
        	<h1>GALLERY</h1>
        </div>
        <div class="quote4-pattern"></div>
        <!--<div class="quote10-pattern"></div>-->
    </div>
    
    <div class="section2 black" id="news">
        <div class="arrowdown">
            <nav>
                <ul>
                	<li><a href="#news"><img src="images/arrow-down.png" width="99" height="99" alt="Down"></a></li>
                </ul>
            </nav>
        </div>
        <div class="about-us-main">
        	<h1>GALLERY</h1>
            <div id="nav5">
                <ul>
                    <li><a class="active" href="#" onClick="gotoNews('#news-one', this); return false">01</a></li>
                    <li><a href="#" onClick="gotoNews('#news-two', this); return false">02</a></li>
                    <li><a href="#" onClick="gotoNews('#news-three', this); return false">03</a></li>
                    <li><a href="#" onClick="gotoNews('#news-four', this); return false">04</a></li>
                    <li><a href="#" onClick="gotoNews('#news-five', this); return false">05</a></li>
                    <li><a href="#" onClick="gotoNews('#news-six', this); return false">06</a></li>
                    <li><a href="#" onClick="gotoNews('#news-seven', this); return false">07</a></li>
                    <li><a href="#" onClick="gotoNews('#news-eight', this); return false">08</a></li>
                </ul>
            </div>
            <!--<h2>Duis augue</h2>
            <h3>We love design</h3>-->
            <p>A snapshot of our projects, associations and events.</p>
        </div>
        
        <div class="divider"></div>
        <div class="divider2"></div>
        
        <div class="content_6 content">
        	<div id="wrap26">
        		<div id="content5">
        			<div class="contentbox-wrapper-news">
                    
        				<div id="news-one" class="contentbox">
                            <div class="article1">
                                <div class="view33 third-effect">
                                	<img src="img/gallery/03.jpg" alt="Front row at the Paris Fashion Week">
                                    <div class="mask33">
                                        <ul class="gallery clearfix">
                                            <li>
                                            <a href="img/gallery/03.jpg" class="info33" data-gal="prettyPhoto[gallery2]" title="Front row at the Paris Fashion Week">Read More</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <h3>Scotland Distillery</h3>

                            </div>
                        </div>

                        <div id="news-two" class="contentbox">
                            <div class="article1">
                                <div class="view33 third-effect">
                                	<img src="img/gallery/02.jpg" alt="Gallery Photo">
                                    <div class="mask33">
                                        <ul class="gallery clearfix">
                                            <li>
                                            <a href="img/gallery/02.jpg" class="info33" data-gal="prettyPhoto[gallery2]" title="Launching an exclusive temple jewellery collection in Bangalore">Read More</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <h3>Jewellery Collection</h3>
                            </div>
                        </div>
                        <div id="news-three" class="contentbox">
                            <div class="article1">
                                <div class="view33 third-effect">
                                	<img src="img/gallery/01.jpg" alt="Scouting for distillery sites in Scotland">
                                    <div class="mask33">
                                        <ul class="gallery clearfix">
                                            <li>
                                            <a href="img/gallery/01.jpg" class="info33" data-gal="prettyPhoto[gallery2]" title="Scouting for distillery sites in Scotland">Read More</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                 <h3>Paris Fashion Week</h3>                           
                               </div>
                        </div>
                        <div id="news-four" class="contentbox">
                            <div class="article1">
                                <div class="view33 third-effect">
                                	<img src="img/gallery/04.jpg" alt="Day out with royalty at the Pataudi Polo Cup in Delhi">
                                    <div class="mask33">
                                        <ul class="gallery clearfix">
                                            <li>
                                            <a href="img/gallery/04.jpg" class="info33" data-gal="prettyPhoto[gallery2]" title="Day out with royalty at the Pataudi Polo Cup in Delhi">Read More</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <h3>Pataudi Polo Cup</h3>
                            </div>
                        </div>
                        <div id="news-five" class="contentbox">
                            <div class="article1">
                                <div class="view33 third-effect">
                                	<img src="img/gallery/05.jpg" alt="Unveiling a Luxury Mixed Use Development in Mumbai">
                                    <div class="mask33">
                                        <ul class="gallery clearfix">
                                            <li>
                                            <a href="img/gallery/05.jpg" class="info33" data-gal="prettyPhoto[gallery2]" title="Unveiling a Luxury Mixed Use Development in Mumbai">Read More</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <h3>Luxury Mixed Use Development</h3>
                            </div>
                        </div>
                        <div id="news-six" class="contentbox">
                            <div class="article1">
                                <div class="view33 third-effect">
                                	<img src="img/gallery/06.jpg" alt="Private whisky tasting in London">
                                    <div class="mask33">
                                        <ul class="gallery clearfix">
                                            <li>
                                            <a href="img/gallery/06.jpg" class="info33" data-gal="prettyPhoto[gallery2]" title="Private whisky tasting in London">Read More</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <h3>Private Whisky Tasting</h3>
                            </div>
                        </div>
                        <div id="news-seven" class="contentbox">
                            <div class="article1">
                                <div class="view33 third-effect">
                                	<img src="img/gallery/07.jpg" alt="Final fit outs at an all-new Starbucks in Mumbai">
                                    <div class="mask33">
                                        <ul class="gallery clearfix">
                                            <li>
                                            <a href="img/gallery/07.jpg" class="info33" data-gal="prettyPhoto[gallery2]" title="Final fit outs at an all-new Starbucks in Mumbai">Read More</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <h3>All new Starbucks</h3>
                            </div>
                        </div>
                        <div id="news-eight" class="contentbox">
                            <div class="article1">
                                <div class="view33 third-effect">
                                	<img src="img/gallery/08.jpg" alt=" Castle shopping in rural England">
                                    <div class="mask33">
                                        <ul class="gallery clearfix">
                                            <li>
                                            <a href="img/gallery/08.jpg" class="info33" data-gal="prettyPhoto[gallery2]" title="Castle shopping in rural England">Read More</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <h3>Castles in rural England</h3>
                            </div>
                        </div>
                        
                            		
					</div>			
				</div>		
			</div>
		</div>
	</div>
    
    <div class="section11 black">
        <div class="arrowdown">
            <nav>
                <ul>
                	<li><a href="#contact11"><img src="images/arrow-down2.png" width="99" height="99" alt="Down"></a></li>
                </ul>
            </nav>
        </div>
    	<div id="contact11">
    		<div class="contactW">
    			<div class="contactWrap">
    				<!--<div class="contactTitle">Contact Us</div>-->
    				<div class="contactContent">
                        
    					<div class="contactInfo">
    						<h1>CONTACT Us</h1>
    						
    						<p>Strategic business and brand management, India entry or global expansion. If you would like to work with us, do get in touch</p>  
    						
						</div>
                        <?php
//If the form is submitted
if(isset($_POST['submit'])) {

	//Check to make sure that the name field is not empty
	if(trim($_POST['name']) == '') {
		$hasError = true;
	} else {
		$name = trim($_POST['name']);
	}

	//Check to make sure that the subject field is not empty
	if(trim($_POST['subject']) == '') {
		$hasError = true;
	} else {
		$subject = trim($_POST['subject']);
	}

	//Check to make sure sure that a valid email address is submitted
	if(trim($_POST['email']) == '')  {
		$hasError = true;
	} else if (!eregi("^[A-Z0-9._%-]+@[A-Z0-9._%-]+\.[A-Z]{2,4}$", trim($_POST['email']))) {
		$hasError = true;
	} else {
		$email = trim($_POST['email']);
	}

	//Check to make sure comments were entered
	if(trim($_POST['message']) == '') {
		$hasError = true;
	} else {
		if(function_exists('stripslashes')) {
			$comments = stripslashes(trim($_POST['message']));
		} else {
			$comments = trim($_POST['message']);
		}
	}

	//If there is no error, send the email
	if(!isset($hasError)) {
		$emailTo = "kpldave@gmail.com"; //Put your own email address here
		//sanjay.dash@7islandsindia.com
		//$email = "veeral@7thsense.co.in";
		$body = "Name:" .$name. "\n\nEmail:" .$email. "\n\nSubject:" .$subject. " \n\nComments:\n" .$comments;
		$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host       = "ssl://smtp.gmail.com"; // SMTP server
$mail->SMTPDebug  = 0;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->SMTPSecure = "ssl";                 // sets the prefix to the servier
$mail->Host       = "smtp.gmail.com";      // sets GMAIL as the SMTP server
$mail->Port       = 465;                   // set the SMTP port for the GMAIL server
$mail->Username   = "webuser@forestbell.in";  // GMAIL username
$mail->Password   = "fool12345";            // GMAIL password

$mail->SetFrom('webuser@forestbell.in', '7IslandsIndia');

//$mail->AddReplyTo("user2@gmail.com', 'First Last");

$mail->Subject    = $subject;

//$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$mail->MsgHTML($body);

$address = "sanjay.dash@7islandsindia.com";
$mail->AddAddress($address, "user2");
if(!$mail->Send()) {
$hasError=true;
}
else
		$emailSent = true;
		
		
	}
}
?>




                        <div class="contactForm">
                        <h1>Mumbai I London</h1>
                        <?php if(isset($hasError)) { ?>
			<span class="error">Please check if you filled all the fields with valid information and try again. Thank you.</span>
			
		<?php } ?>
		<?php 	if(isset($emailSent) && $emailSent == true) {  ?>
			<span class="sucess">Your message is sent successfully. Thank you for contacting us!</span>
			
		<?php } ?>
                            <form action="<?php echo   $_SERVER['PHP_SELF']; ?>" method="post"  onsubmit="return checkform(this);">
                                <span>Name:</span>
                                <label class="input">
                                <input type="text" id="name" class="name" name="name" value="" /></label>
                                <span>Email:</span>
                                <label class="input"><input type="text" id="email" class="email" name="email" value="" /></label>
                                <span>Subject:</span>
                                <label class="input"><input type="text" id="subject" class="subject" name="subject" value=""/></label>
                                <span>Message:</span>
                                <textarea rows="4" name="message" id="message" class="required" role="textbox" aria-required="true"></textarea>
                                <div class="captch_wrapper">
                                <div class="capbox">

<div id="CaptchaDiv"></div>

<div class="capbox-inner">
Type the above number:<br>

<input type="hidden" id="txtCaptcha">
<input type="text" name="CaptchaInput" id="CaptchaInput" size="15"><br>

</div>
</div>
</div>
                                <input type="submit" value="Send Message" class="button23" name="submit" id="submitButton" title="Click here to submit your message!" />
                            </form>
                        </div>
					</div>
				</div>
                <div class="arrowback">
                    <nav>
                        <ul>
                        	<li><a href="#homepage"><img src="images/arrow-back.png" width="99" height="68" alt="Down"></a></li>
                        </ul>
                    </nav>
                </div>
			</div>
            <div class="quote11-pattern"></div>
		</div>
	</div>
     
	<!-- Included JS Files -->
	<script type="text/javascript">

// Captcha Script

function checkform(theform){
var why = "";

if(theform.CaptchaInput.value == ""){
why += "- Please Enter CAPTCHA Code.\n";
}
if(theform.CaptchaInput.value != ""){
if(ValidCaptcha(theform.CaptchaInput.value) == false){
why += "- The CAPTCHA Code Does Not Match.\n";
}
}
if(why != ""){
alert(why);
return false;
}
}

var a = Math.ceil(Math.random() * 9)+ '';
var b = Math.ceil(Math.random() * 9)+ '';
var c = Math.ceil(Math.random() * 9)+ '';
var d = Math.ceil(Math.random() * 9)+ '';
var e = Math.ceil(Math.random() * 9)+ '';

var code = a + b + c + d + e;
document.getElementById("txtCaptcha").value = code;
document.getElementById("CaptchaDiv").innerHTML = code;

// Validate input against the generated number
function ValidCaptcha(){
var str1 = removeSpaces(document.getElementById('txtCaptcha').value);
var str2 = removeSpaces(document.getElementById('CaptchaInput').value);
if (str1 == str2){
return true;
}else{
return false;
}
}

// Remove the spaces from the entered and generated code
function removeSpaces(string){
return string.split(' ').join('');
}
</script>

	<script type="text/javascript">
		$(function() {
			$('ul a').bind('click',function(event){
				var $anchor = $(this);
				
				$('html, body').stop().animate({
					scrollTop: $($anchor.attr('href')).offset().top
				}, 2000,'easeInOutQuart');
				
				event.preventDefault();
			});
		});
	</script>
	<script>
	$(document).ready(function(){    
        $("#submitButton").dialog("open");
    });
	</script>
    
    <script>
    	$(window).load(function(){
      		$('.responsive-nav').on('change', function() {
				window.location = $(this).val();
			});
    	});
    </script>
    
     
    <script>
    // Cache selectors
var lastId,
    topMenu = $("#top-menu"),
    topMenuHeight = topMenu.outerHeight()+15,
    // All list items
    menuItems = topMenu.find("a"),
    // Anchors corresponding to menu items
    scrollItems = menuItems.map(function(){
      var item = $($(this).attr("href"));
      if (item.length) { return item; }
    });

// Bind click handler to menu items
// so we can get a fancy scroll animation

// Bind to scroll
$(window).scroll(function(){
   // Get container scroll position
   var fromTop = $(this).scrollTop()+topMenuHeight;
   
   // Get id of current scroll item
   var cur = scrollItems.map(function(){
     if ($(this).offset().top < fromTop)
       return this;
   });
   // Get the id of the current element
   cur = cur[cur.length-1];
   var id = cur && cur.length ? cur[0].id : "";
   
   if (lastId !== id) {
       lastId = id;
       // Set/remove active class
       menuItems
         .parent().removeClass("selected")
         .end().filter("[href=#"+id+"]").parent().addClass("selected");
   }                   
});
    </script>
</body>
</html>