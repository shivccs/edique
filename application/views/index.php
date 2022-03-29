<!DOCTYPE html>
<html lang="en">
<head>
  <title>Edique</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

<!--   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> -->


  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


  <!-- Custom css here -->
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/custom.css'); ?>">
  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/responsive.css'); ?>">


  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Varela+Round&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

<!--  <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/jquery.hislide.min.css'); ?>"> -->




<!-- Hi slide -->
		<!-- <script type="text/javascript" src="<?= base_url('assets/js/jquery.hislide.js');?>"></script>
		<script type="text/javascript" src="<?= base_url('assets/js/jquery.jquery.hislide.min.js');?> " ></script> -->
		<!--circle slider  -->
		<!-- <script type="text/javascript" src="<?= base_url('assets/js/jquery.easy_slides.js');?>"></script>
		 <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/jquery.easy_slides.css'); ?>">

<script type="text/javascript" src="<?= base_url('assets/js/jquery.carousel-1.1.min.js');?>"></script>
		<script type="text/javascript" src="<?= base_url('assets/js/sample01.js');?> " ></script>
 <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/carousel.css'); ?>">
 <link rel="stylesheet" type="text/css" href="<?= base_url('assets/css/content.css'); ?>"> -->


		 
</head>
<body  onload="generateCaptcha()">
<script>
var captcha;
 
function generateCaptcha() {
    var a = Math.floor((Math.random() * 10));
    var b = Math.floor((Math.random() * 10));
    var c = Math.floor((Math.random() * 10));
    var d = Math.floor((Math.random() * 10));
 
	captcha=a.toString()+b.toString()+c.toString()+d.toString();
	
    document.getElementById("captcha").innerHTML = captcha;
}
 
function check(cap_input){
	document.getElementById('cap_error').innerHTML = "";
	document.getElementById("submit").disabled = false;
	document.getElementById("check").style.display = "none";
	document.getElementById('cap_success').innerHTML = "";
	if ((cap_input.length <4) || (cap_input.length >4)) {
		document.getElementById("submit").disabled = true;
	}
	if ((cap_input.length !=0) &&  (cap_input.length >4)) {
		document.getElementById("submit").disabled = true;
		document.getElementById('cap_error').innerHTML = "Invalid Captcha.";
		document.getElementById("check").style.display = "none";
	}
	if (cap_input.length == 4) {
		var input=document.getElementById("captchainput").value;
		if(input==captcha){
			//document.getElementById('cap_success').innerHTML = "Valid Captcha";
			document.getElementById("check").style.display = "block";
			
		}
		else{
			document.getElementById('cap_error').innerHTML = "Invalid Captcha.";
			document.getElementById("submit").disabled = true;
		}
		
	}
}
</script>

<section class="landing-banner" style="background: url('<?= base_url('assets/images/landing-new.png'); ?>');height: 100vh;background-size: cover;">
	<div class="container-fluid">
		<div class="row  hide-form-mob-menu" id="stickytypeheader">
			<div id="mySidenav" class="sidenav-custom">
				<div class="menu-logo-box">
						<ul class="custom-menu-ul">
					<!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> -->
					<li>
						<a href="#aboutSection">About</a>
					</li>
					<li>
						 <a href="#solutionSection">Proposition</a>
					</li>
					<li>
						<a href="#footprintSection">Footprint</a>
					</li>
					<li>
						<a href="#productSection">Products</a>
					</li>
					<li>
						<a href="#partnerSection">Contact</a>
					</li>
				
				</ul>
				<!-- <div class="logo-custom">
					<img src="<?= base_url('assets/images/edique-logo.png'); ?>">
				</div> -->
				</div>
				
			 


			  
			 
			  
			  
			</div>
			<div class="custom-menu"  id="main">
				<div class="open-onclick" id="open-onclick">
				<!-- <div class="logo-custom">
					<img src="images/edique-logo.png'); ?>">
				</div> -->
				<img src="<?= base_url('assets/images/edique-logo.png'); ?>" class="logo-edique" id="logo-scroll" style="margin-top: 13px;">
				<img src="<?= base_url('assets/images/slide-to-emplode.png'); ?>" class="slider-explore-img explode-hide" id="exploade-img" style="display:none;margin-top: 13px; ">
				<img src="<?= base_url('assets/images/slide-to-explore.png'); ?>" class="slider-explore-img mob-hide" id="exploade-img" style="margin-top: 13px;">
				</div>
				
			</div>
		</div>


		<div class="mob-humburger" id="mobHumberger" style="display: none;">
				<div class="logo-boxfor-mob">
					<img src="<?= base_url('assets/images/edique-logo.png'); ?>" class="logo-edique-mobile">
				</div>
				<div class="menu-open-area">
					<span onclick="openNav()">MENU</span>
				</div>
				<div id="mobileSidenav" class="sidenav">
				  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">Close</a>
				 <a href="#aboutSection" onclick="closeNav()">About</a>
		     	<a href="#solutionSection" onclick="closeNav()">Proposition</a>
		   		<a href="#footprintSection"onclick="closeNav()">Footprint</a>
		    	<a href="#productSection"onclick="closeNav()">Products</a>
		    	<a href="#partnerSection"onclick="closeNav()">Contact</a>

		    	<div class="col-sm-12 copywrite-text">
		  				<div class="social-icons-mob">
		  					<a href="https://www.linkedin.com/company/edique" target="_blank">
							<img src="<?= base_url('assets/images/linkendin.png'); ?>" >
							</a>
							<a href="https://www.facebook.com/EdiQueSolutions" target="_blank">
							<img src="<?= base_url('assets/images/facbook.png'); ?>" >
							</a>
							<a href="https://www.youtube.com/channel/UCGgIPfBJnX_fdS4ftKNwzcQ/featured" target="_blank">
							<img src="<?= base_url('assets/images/youtube.png'); ?>" >
							</a>
		  				</div>
		  			</div>

		    	  <div class="col-lg-12 mob-menu-footer">
		  		<div class="row">
		  			<div class="col-sm-12 copywrite-text">
		  				<p>Copyright © 2020 Edique Solutions Private Limited. All rights reserved.</p>
		  			</div>
		  			<!-- <div class="col-sm-4 copywrite-text">
		  				<div class="social-icons-mob">
		  					<a href="https://www.linkedin.com/company/edique" target="_blank">
							<img src="<?= base_url('assets/images/linkendin.png'); ?>" >
							</a>
							<a href="https://www.facebook.com/EdiQueSolutions" target="_blank">
							<img src="<?= base_url('assets/images/facbook.png'); ?>" >
							</a>
							<a href="https://www.youtube.com/channel/UCGgIPfBJnX_fdS4ftKNwzcQ/featured" target="_blank">
							<img src="<?= base_url('assets/images/youtube.png'); ?>" >
							</a>
		  				</div>
		  			</div> -->
		  		</div>
		  </div>
				</div>


		</div>
		
	</div>
</section>


<section class="testimonial section-padding" id="aboutSection" style="background-image: url('<?= base_url('assets/images/banner-about-pencil.png'); ?>'); background-position: right; height: 80vh;background-repeat: no-repeat;background-size: contain;background-color: #146aa8!important;" >
	<div class="container-fluid">
		<div class="row">
			<!-- <div class="background-img">
				<img src="images/text-slider-background.png'); ?>" class="img-fluid">
			</div> -->
			<div class="text-slider-custom">
					<div class="slideshow-container" >

				<div class="mySlides">
				  <q>We weave immersive education for knowledge seekers & knowledge providers with path-breaking technology.</q>
				
				</div>


				
				</div>

				<div class="dot-container">
					 <!-- data-toggle="collapse" data-target="#whoweAre" -->
					<p class="know-more-down"><a href="#whoweareSection">Know more
						<span class="knowmore-img vert-move">
							<img src="<?= base_url('assets/images/arrow-down.png'); ?>" class="">
						</span>
					</a></p>
				<!--   <span class="dot" onclick="currentSlide(1)"></span> 
				  <span class="dot" onclick="currentSlide(2)"></span> 
				  <span class="dot" onclick="currentSlide(3)"></span> 
				   <span class="dot" onclick="currentSlide(4)"></span> 
				    <span class="dot" onclick="currentSlide(5)"></span> 
				     <span class="dot" onclick="currentSlide(6)"></span>  -->
				</div>
			</div>
			
		</div>
	</div>
</section>


<section class="who-we-are">
	<div class="container">
		<div class="row" id="whoweareSection">
			<div class="col-lg-12 collpase-close-icon-cancle">
				<!-- <a href="#!" data-toggle="collapse" data-target="#whoweAre">
						<img src="images/collpase-btn.png'); ?>">
						<span>Collpase</span>
				</a> -->
				
			</div>
			<div class="col-lg-12 who-weare collapse in " id="whoweAre">
					<div class="row" id="whoweareSection">
						<div class="col-lg-7 col-md-7 whoweare-img-left" >
							<img src="<?= base_url('assets/images/who-we-are-img.png'); ?>" class="img-responsive">
						</div>
						<div class="col-lg-5 col-md-5 whoweare-text-right">
							<p class="whowearetext">We develop innovative products and solutions to implement impactful interventions which are aimed at enhancing the education delivery for our learners across the globe.</p>
						</div>
						<div class="col-lg-12 who-only">
							<h1 class="who-term">Who</h1>
							<h3 class="term-we-are font-size-who">We are  
								 <span class="edique-icon mobile-cion-hide-resp ">
								<img src="<?= base_url('assets/images/edique-icon.png'); ?>">
								</span>
									<img class="who-icon-whowe wepostopn" src="<?= base_url('assets/images/eidque-iconfull.png'); ?>">
							</h3>
								<!-- <img class="who-icon-full-web" src="<?= base_url('assets/images/eidque-iconfull.png'); ?>"> -->
							<img class="who-icon-full" src="<?= base_url('assets/images/eidque-iconfull.png'); ?>">
						</div>
						 <div class="col-lg-12 blue-line mobile-cion-hide-resp">
							<img src="<?= base_url('assets/images/edique-blue-line.png'); ?>" class="img-responsive">
						</div> 
					</div>
					<div class="row whowe-secound-top who-text-desc-resp">
						<div class="col-lg-6 col-md-6 whoweare-text-left-secound">
							<p class="whoweare-blue">Our interventions are further augmented by new age technology platforms thereby providing our customers with timely and actionable information ensuring sustenance of executed initiatives. </p>
							
						</div>
						<div class="col-lg-6 col-md-6 whoweare-img-right">
							<img src="<?= base_url('assets/images/innovative-text-img.png'); ?>" class="img-responsive">
						</div>
					</div>
			</div>
		</div>
	</div>

</section>


<section class="how-dofuction-sec" id="solutionSection">
		<div class="container">
			<div class="row prop-first">

					<div class="col-lg-12 how-tit-big">
						<div  class="tit-pos">
							<h1 class="how-big space-tit-new">Our</h1>
						</div>
						
					</div>
					<div class="col-lg-12 dowwe-col">
						<h3 class="term-do-we">Value  
							<span class="edique-icon position-change mobile-cion-hide-resp">
							<img src="<?= base_url('assets/images/edique-icon.png'); ?>">
						</span>
						<img class="who-icon-whowe value-postioniocn" src="<?= base_url('assets/images/eidque-iconfull.png'); ?>">
					</h3>
					</div>
					
					<div class="col-lg-12 blue-line-howwe">
						<h3 class="function-text-howe">proposition</h3>
						<img src="<?= base_url('assets/images/edique-blue-line.png'); ?>" class="img-responsive mobile-cion-hide-resp">
					</div>
					<img class="who-icon-full prop" src="<?= base_url('assets/images/eidque-iconfull.png'); ?>">

					<div class="col-lg-12 how-we-desc">
						<p class="desc-para">
							The Edique philosophy to education technology is based on a set of key facets supported by analytical and business tools providing customers with relevant insights ensuring the wellbeing quotient of education providers & education seekers. 
						</p>
						<!-- <div class="img-line">
							<img src="<?= base_url('assets/images/edique-blue-line.png'); ?>">
						</div> -->
					</div>

			</div>

			<div class="row function-row prop-secound">
				<div class="col-lg-4 col-md-4 function-boxes">


				<div class="flip-box design-margin-left">
				  <div class="flip-box-inner value-pro-inner">
				    <div class="flip-box-front ">
				    	<img src="<?= base_url('assets/images/accessibleeducation-front.png'); ?>" class="img-responsive value-pro-img">
				    	<div class="value-pro-top-text">
			    			<h4 class="serial-no text-center">01</h4>
						<h3 class="functions-name-in-boxes">accessible <br>education</h3>
				    	</div>
				    	 <div class="powered-by-and-plus powerd-by-valuesection">
							<img src="<?= base_url('assets/images/plus-icon.png'); ?>" class="plus-icon-values">
							<p class="poweredby-text">
								Powered by Exactics
							</p>
						</div>
				    </div>
				    <div class="flip-box-back">
				    	<div class="flip-img back-profile480 ">
				    		<img src="<?= base_url('assets/images/accessibleeducation-flip.png'); ?>"alt="computer-labs-flip" >
				    	</div> 
				    	<div class="after-flip-data back-text-mob">
				    		<div class="white-globe-line mobile-cion-hide-resp">
				    			<img src="<?= base_url('assets/images/edique-icon-white.png'); ?>" class="globe-white  ">
				    			<img src="<?= base_url('assets/images/edique-white-line.png'); ?>" class="globe-white-line">
				    				<img class="who-icon-full-white filp-white-inner" src="<?= base_url('assets/images/eidque-iconfull-white-for-blue.png'); ?>">
				    		</div>
				    		<img class="who-icon-full-backblue" src="<?= base_url('assets/images/eidque-iconfull-white-for-blue.png'); ?>">
				    		<p>Accessible Education is the process of weaving together uniquely designed affordable and scalable technology platforms and introducing them at the grassroots to create immersive and interactive learning environments for our education seekers.Our solution design process takes into account the unique learning and teaching style of our users ensuring direct relevance for them.
 </p>
				    	</div>
				     	
				    </div>
				  </div>
				</div>
					<!-- <div class="rounded-box-border for-design-margin-left">
						
								<h4 class="serial-no text-center">01</h4>
								<h3 class="functions-name-in-boxes">accessible <br>education</h3>
								<img src="images/accessible-education.png'); ?>" class="img-responsive round-img-function">
								<div class="powered-by-and-plus">
									<img src="images/plus-icon.png'); ?>">
									<p class="poweredby-text">
										powered by Exactics
									</p>
								</div>	
					</div> -->
				</div>

				<div class="col-lg-4 col-md-4 function-boxes">
					<div class="flip-box design-margin-right">
				  <div class="flip-box-inner value-pro-inner">
				    <div class="flip-box-front ">
				    	<img src="<?= base_url('assets/images/shaping-mind.png'); ?>" class="img-responsive value-pro-img">
				    	<div class="value-pro-top-text">
			    			<h4 class="serial-no text-center">02</h4>
						<h3 class="functions-name-in-boxes">shaping <br>minds</h3>
				    	</div>
				    	 <div class="powered-by-and-plus powerd-by-valuesection">
							<img src="<?= base_url('assets/images/plus-icon.png'); ?>" class="plus-icon-values">
							<p class="poweredby-text">
								powered by Exactics
							</p>
						</div>
				    </div>
				    <div class="flip-box-back">
				    	<div class="flip-img back-profile480 ">
				    		<img class="img-flip-width" src="<?= base_url('assets/images/shaping-mind-flip.png'); ?>" alt="computer-labs-flip" >
				    	</div> 
				    	<div class="after-flip-data back-text-mob shaping-width">
				    		<div class="white-globe-line mobile-cion-hide-resp">
				    			<img src="<?= base_url('assets/images/edique-icon-white.png'); ?>" class="globe-white">
				    			<img src="<?= base_url('assets/images/edique-white-line.png'); ?>" class="globe-white-line">
				    			<img class="who-icon-full-white filp-white-inner" src="<?= base_url('assets/images/eidque-iconfull-white-for-blue.png'); ?>">
				    		</div>
				    		<img class="who-icon-full-backblue" src="<?= base_url('assets/images/eidque-iconfull-white-for-blue.png'); ?>">
				    		<p>Shaping the minds of education providers and education seekers is a unique combination of aptitude and knowledge woven with new age technologies.
							The future will thus be dependent on the ability to transform classrooms, to equip students with 21<sup>st</sup> century skills. We make use of teaching modules mixed with fascinating audiovisuals, simulations, hands-on activities and more.
							 </p>
				    	</div>
				     	
				    </div>
				  </div>
				</div>
					<!-- <div class="rounded-box-border for-design-margin-left2">
						<h4 class="serial-no text-center">02</h4>
						<h3 class="functions-name-in-boxes">shaping <br>minds</h3>
						<img src="images/shaping-mind.png'); ?>" class="img-responsive round-img-function">
						<div class="powered-by-and-plus">
							<img src="images/plus-icon.png'); ?>">
							<p class="poweredby-text">
								powered by Exactics
							</p>
						</div>
					</div> -->
				</div>

				<div class="col-lg-4 col-md-4 function-boxes">
					<div class="flip-box design-margin-left">
					  <div class="flip-box-inner value-pro-inner">
					    <div class="flip-box-front ">
					    	<img src="<?= base_url('assets/images/inclusivemanagement.png'); ?>" class="img-responsive value-pro-img">
					    	<div class="value-pro-top-text">
				    			<h4 class="serial-no text-center">03</h4>
							<h3 class="functions-name-in-boxes">inclusive <br>management</h3>
					    	</div>
					    	 <div class="powered-by-and-plus powerd-by-valuesection">
								<img  src="<?= base_url('assets/images/plus-icon.png'); ?>" class="plus-icon-values">
								<p class="poweredby-text">
									powered by Exactics
								</p>
							</div>
					    </div>
					    <div class="flip-box-back ">
					    	<div class="flip-img back-profile480 ">
					    		<img class="img-flip-width" src="<?= base_url('assets/images/inclusivemanagement-flip.png'); ?>"alt="computer-labs-flip" >
					    	</div> 
					    	<div class="after-flip-data back-text-mob">
					    		<div class="white-globe-line mobile-cion-hide-resp">
				    			<img src="<?= base_url('assets/images/edique-icon-white.png'); ?>" class="globe-white">
				    			<img src="<?= base_url('assets/images/edique-white-line.png'); ?>" class="globe-white-line">
				    			<img class="who-icon-full-white filp-white-inner" src="<?= base_url('assets/images/eidque-iconfull-white-for-blue.png'); ?>">
				    		</div>
				    			<img class="who-icon-full-backblue" src="<?= base_url('assets/images/eidque-iconfull-white-for-blue.png'); ?>">
					    		<p>An integrated platform that fulfils both administrative and academic needs of a school and weaves together a comprehensive school management system connecting all processes, departments and stakeholders, and a learning management system that facilitates an end-to-end management of the teaching and learning processes. </p>
					    	</div>
					     	
					    </div>
					  </div>
					</div>
					<!-- <div class="rounded-box-border for-design-margin-left">
						<h4 class="serial-no text-center">03</h4>
						<h3 class="functions-name-in-boxes">inclusive <br>management</h3>
						<img src="images/school-management.png'); ?>" class="img-responsive round-img-function">
						<div class="powered-by-and-plus">
							<img src="images/plus-icon.png'); ?>">
							<p class="poweredby-text">
								powered by Exactics
							</p>
						</div>
					</div> -->
				</div>

				<div class="col-lg-4 col-md-4 function-boxes margin-top-flip-to">
					<div class="flip-box design-margin-right">
						  <div class="flip-box-inner value-pro-inner">
						    <div class="flip-box-front ">
						    	<img src="<?= base_url('assets/images/nextgentechnology.png'); ?>" class="img-responsive value-pro-img">
						    	<div class="value-pro-top-text">
					    			<h4 class="serial-no text-center">04</h4>
								<h3 class="functions-name-in-boxes">next-gen <br>technology</h3>
						    	</div>
						    	 <div class="powered-by-and-plus powerd-by-valuesection">
									<img src="<?= base_url('assets/images/plus-icon.png'); ?>" class="plus-icon-values">
									<p class="poweredby-text">
										powered by Exactics
									</p>
								</div>
						    </div>
						    <div class="flip-box-back half-img-back ">
						    	<div class="flip-img  back-profile480">
						    		<img  src="<?= base_url('assets/images/nextgentechnology-flip.png'); ?>"alt="computer-labs-flip" >
						    	</div> 
						    	<div class="after-flip-data  back-text-mob">
						    		<div class="white-globe-line mobile-cion-hide-resp">
						    			<img src="<?= base_url('assets/images/edique-icon-white.png'); ?>" class="globe-white new-space">
						    			<img src="<?= base_url('assets/images/edique-white-line.png'); ?>" class="globe-white-line">
						    			<img class="who-icon-full-white filp-white-inner" src="<?= base_url('assets/images/eidque-iconfull-white-for-blue.png'); ?>">
						    		</div>
						    		<img class="who-icon-full-backblue" src="<?= base_url('assets/images/eidque-iconfull-white-for-blue.png'); ?>">
						    		<p>The future of education is an intricate web of technology solutions that weaves together a next-gen educational institution. These solutions have been developed based on the new age technologies including Artificial Intelligence, Deep Learning, Natural Language Processing, Online Learning & Assessment, Virtual Classrooms, Robotics, Web & Mobile platforms.

									 </p>
						    	</div>
						     	
						    </div>
						  </div>
						</div>
					<!-- <div class="rounded-box-border for-design-margin-left2">
						<h4 class="serial-no text-center">04</h4>
						<h3 class="functions-name-in-boxes">next-gen <br>technology</h3>
						<img src="images/next-gen-technology.png'); ?>" class="img-responsive round-img-function">
						<div class="powered-by-and-plus">
							<img src="images/plus-icon.png'); ?>">
							<p class="poweredby-text">
								powered by Exactics
							</p>
						</div>
					</div> -->
				</div>

				<div class="col-lg-4 col-md-4 function-boxes margin-top-flip-to">
					<div class="flip-box design-margin-left">
					  <div class="flip-box-inner value-pro-inner">
					    <div class="flip-box-front ">
					    	<img src="<?= base_url('assets/images/deliveringimpact.png'); ?>" class="img-responsive value-pro-img">
					    	<div class="value-pro-top-text">
				    			<h4 class="serial-no text-center">05</h4>
							<h3 class="functions-name-in-boxes">delivering <br>impact</h3>
					    	</div>
					    	 <div class="powered-by-and-plus powerd-by-valuesection">
								<img src="<?= base_url('assets/images/plus-icon.png'); ?>" class="plus-icon-values">
								<p class="poweredby-text">
									powered by Exactics
								</p>
							</div>
					    </div>
					    <div class="flip-box-back ">
					    	<div class="flip-img back-profile480 ">
					    		<img src="<?= base_url('assets/images/deliveringimpact-flip.png'); ?>"alt="computer-labs-flip" >
					    	</div> 
					    	<div class="after-flip-data back-text-mob delivery-space" >
					    		<div class="white-globe-line mobile-cion-hide-resp">
					    			<img src="<?= base_url('assets/images/edique-icon-white.png'); ?>" class="globe-white">
					    			<img src="<?= base_url('assets/images/edique-white-line.png'); ?>" class="globe-white-line">
					    			<img class="who-icon-full-white filp-white-inner" src="<?= base_url('assets/images/eidque-iconfull-white-for-blue.png'); ?>">
					    		</div>
					    		<img class="who-icon-full-backblue" src="<?= base_url('assets/images/eidque-iconfull-white-for-blue.png'); ?>">
					    		<p>We make extensive use of technology to deliver tangible project impact to empower education providers and education seekers to make better decisions and measure the things that matter. Critical Analysis coupled with project impact is smartly woven into our learning and teaching capabilities to derive optimum results. </p>
					    	</div>
					     	
					    </div>
					  </div>
					</div>
					<!-- <div class="rounded-box-border for-design-margin-left">
						<h4 class="serial-no text-center">05</h4>
						<h3 class="functions-name-in-boxes">delivering <br>impact</h3>
						<img src="images/education-analytics.png'); ?>" class="img-responsive round-img-function">
						<div class="powered-by-and-plus">
							<img src="images/plus-icon.png'); ?>">
							<p class="poweredby-text">
								powered by Exactics
							</p>
						</div>
					</div> -->
				</div>

				<div class="col-lg-4 col-md-4 function-boxes margin-top-flip-to">
					<div class="flip-box design-margin-right">
						  <div class="flip-box-inner value-pro-inner">
						    <div class="flip-box-front ">
						    	<img src="<?= base_url('assets/images/sustainable-deployment.png'); ?>" class="img-responsive value-pro-img">
						    	<div class="value-pro-top-text">
					    			<h4 class="serial-no text-center">06</h4>
								<h3 class="functions-name-in-boxes">sustainable <br>deployment</h3>
						    	</div>
						    	 <div class="powered-by-and-plus powerd-by-valuesection">
									<img src="<?= base_url('assets/images/plus-icon.png'); ?>" class="plus-icon-values">
									<p class="poweredby-text">
										powered by Exactics
									</p>
								</div>
						    </div>
						    <div class="flip-box-back">
						    	<div class="flip-img back-profile480 ">
						    		<img class="img-flip-width" src="<?= base_url('assets/images/sustainable-deployment-flip.png'); ?>"alt="computer-labs-flip" >
						    	</div> 
						    	<!-- half-img-back -->
						    	<div class="after-flip-data  back-text-mob sustain-space  ">
						    		<div class="white-globe-line mobile-cion-hide-resp">
						    			<img src="<?= base_url('assets/images/edique-icon-white.png'); ?>" class="globe-white sus-globe">
						    			<img src="<?= base_url('assets/images/edique-white-line.png'); ?>" class="globe-white-line">
						    			<img class="who-icon-full-white filp-white-inner" src="<?= base_url('assets/images/eidque-iconfull-white-for-blue.png'); ?>">
						    		</div>
										<img class="who-icon-full-backblue" src="<?= base_url('assets/images/eidque-iconfull-white-for-blue.png'); ?>">
						    		<p>Adequate capacities are built through deployment of experienced and relevant experts to support schools to become future ready. Our team of experts work tirelessly in devising sustainable and effective plans for onboarding institutions. These plans are an amalgamation of professional staffing as well as technological needs that are indispensable to secure the future of the students, teachers and school administration.

									 </p>
						    	</div>
						     	
						    </div>
						  </div>
						</div>
					<!-- <div class="rounded-box-border for-design-margin-left2">
						<h4 class="serial-no text-center">06</h4>
						<h3 class="functions-name-in-boxes">sustainable <br>deployment</h3>
						<img src="images/technology-infrastructure.png'); ?>" class="img-responsive round-img-function">
						<div class="powered-by-and-plus">
							<img src="images/plus-icon.png'); ?>">
							<p class="poweredby-text">
								powered by Exactics
							</p>
						</div>
					</div> -->
				</div>

			</div>
			
			</div>
		</div>
</section>

<section class="howfar-come-along" id="footprintSection">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 how-tit-big">
				<h1 class="how-big text-white space-tit-new margin-howfa">How</h1>
			</div>
			<div class="col-lg-12 dowwe-col">
				<h3 class="term-do-we text-white font-change "><span class="farhave-text">Far have</span>  <span class="edique-icon howFarIconGlobe">
					<img src="<?= base_url('assets/images/edique-icon-white.png'); ?>">
				</span>
					<img class="who-icon-whowe far-postioniocn" src="<?= base_url('assets/images/eidque-iconfull-white.png'); ?>">
			</h3>
			</div>
			
			<div class="col-lg-12 blue-line-howwe imgclassforwhiteline">
			<h3 class="function-text-howe text-white font-change">we come </h3>
				<img src="<?= base_url('assets/images/edique-white-line.png'); ?>" class="img-responsive white-rightafter-text howFarIconLine ">
				<p class="how-we-desc wecome-desc">By blending education with technology, we have created a robust network across India and are extremely proud of our journey that provides an education-based wellbeing in the lives of people.</p>
				<!-- <div class="col-lg-12 white-edique-line">
					<img src="<?= base_url('assets/images/edique-white-line.png'); ?>" class="img-responsive below-how-img">
				</div> -->
			</div>
		</div>
		<div class="row" style="display: none;">
			<div class="col-lg-4 far-along-img-box">
				<div class="far-img">
					<img src="<?= base_url('assets/images/school-illustration.png'); ?>" class="img-responsive">
				</div>
				<div class="far-text">
					<h4>16,000+</h4>
					<p>SCHOOLS</p>
				</div>
			</div>
			<div class="col-lg-4 far-along-img-box">
				<div class="far-img">
					<img src="<?= base_url('assets/images/teacher-illustration.png'); ?>" class="img-responsive">
				</div>
				<div class="far-text">
					<h4>1,50,000</h4>
					<p>Teachers</p>
				</div>
			</div>
			<div class="col-lg-4 far-along-img-box">
				<div class="far-img">
					<img src="<?= base_url('assets/images/students-illustrations.png'); ?>" class="img-responsive">
				</div>
				<div class="far-text">
					<h4>6.4 Million</h4>
					<p>Students</p>
				</div>
			</div>
		</div>


		<div class="row images-project-footprint">
			<div class="col-lg-12 col-md-12 no-of-school-popu">
					<div class="acheive-img">
						<img src="<?= base_url('assets/images/school-illustration.png'); ?>" class="img-responsive">
					</div>
					<div class="acheive-counter">
						<div class="height-adjust">
							<p class="number-counter">16,000+</p>
							<p class="counter-for">schools</p>
						</div>
						
					</div>
			</div>
			<div class="col-lg-12 col-md-12 no-of-school-popu techer-spfar tio-space">
				<div class="acheive-counterright">
						<div class="height-adjust padd-left-moddile">
							<p class="number-counter">1,50,000</p>
							<p class="counter-for">teachers</p>
						</div>
						
					</div>
					<div class="acheive-imgleft">
						<img src="<?= base_url('assets/images/teacher-illustration.png'); ?>" class="img-responsive">
					</div>
					
			</div>
			<div class="col-lg-12 col-md-12 no-of-school-popu">
					<div class="acheive-img mt-top-img">
						<img src="<?= base_url('assets/images/students-illustrations.png'); ?>" class="img-responsive">
					</div>
					<div class="acheive-counter">
						<div class="height-adjust">
							<p class="number-counter">6.4 Million </p>
							<p class="counter-for">students</p>
						</div>
						
					</div>
			</div>
		</div>
	</div>
</section>




<section class="our-spectular-offering" style="background-image: url('images/edique-watermark.png'); ?>');background-size: cover;
    background-position: bottom;">
	<div class="container" id="productSection">
		<div class="row">
				<div class="col-lg-12 how-tit-big">
					<h1 class="how-big">Our</h1>
				</div>
				<div class="col-lg-12 dowwe-col-spectacular">
					<img class="spectIcon mobile-cion-hide-resp " src="<?= base_url('assets/images/edique-icon.png'); ?>">
						<h3 class="term-spectular">Spectacular 
								<img class="who-icon-full spect-icon-white" style="display:inline-block!important;" src="<?= base_url('assets/images/eidque-iconfull.png'); ?>">
						</h3>
				</div>
				<div class="col-lg-12 blue-line-howwe-offering">
					<h3 class="function-text-howe-ofering">offerings</h3>
					<img src="<?= base_url('assets/images/edique-blue-line.png'); ?>" class="img-responsive mobile-cion-hide-resp">
				<img class="who-icon-full spectular" src="<?= base_url('assets/images/eidque-iconfull.png'); ?>">
				</div>
				
				<div class="col-lg-12 how-we-descofering">
					<p>
						We pack an impressive array of products which play a pivotal role in the path to providing holistic education coupled with cutting-edge technology.
					</p>
					<!-- <div class="img-line-offering">
							<img src="<?= base_url('assets/images/edique-blue-line.png'); ?>">
						</div> -->
				</div>
		</div>


		<div class="row function-row">
				<div class="col-lg-4 col-md-4 function-boxes">
					<div class="flip-box design-margin-left">
						  <div class="flip-box-inner">
						    <div class="flip-box-front">
						      <img src="<?= base_url('assets/images/computer-labs.png'); ?>" alt="computer-labs">
						      <div class="col-lg-12 flip-front-text-links">
						      	<h4>computer education<br>labs</h4>
								<img class="orangePlusIcon" src="<?= base_url('assets/images/edique-orange-icon-plus.png'); ?>">
								<p class="poweredby-text for-full-area">
										Powered by Exactics
									</p>
						      </div>
						    </div>
						    <div class="flip-box-back">
							<div class="flip-img flup-width">
						    		<img src="<?= base_url('assets/images/computer-lab-flip.png'); ?>"alt="computer-labs-flip">
						    	</div> 
						    	<div class="after-flip-data margin-top-flipppp back-480">
						    		<div class="white-globe-line mobile-cion-hide-resp">
						    			<img src="<?= base_url('assets/images/edique-icon-white.png'); ?>" class="globe-white">
						    			<img src="<?= base_url('assets/images/edique-white-line.png'); ?>" class="globe-white-line">
						    			<img class="who-icon-full-white filp-white-inner" src="<?= base_url('assets/images/eidque-iconfull-white-for-blue.png'); ?>">
						    		</div>
						    		<img class="who-icon-full-backblue" src="<?= base_url('assets/images/eidque-iconfull-white-for-blue.png'); ?>">
						    		<p>Our computer education labs are a unique combination of next generation technology infrastructure woven with comprehensive learning resources. The labs are further supported by a remote device management tool to monitor installed IT infrastructure and dedicated support staff meant to ensure the smooth operation of these labs.</p>

						    	</div>
						     	
						    </div>
						  </div>
						</div>
					<!-- <div class="rounded-box-border for-design-margin-left height-spectulars">

						<img src="<?= base_url('assets/images/computer-labs.png'); ?>" class="img-responsive round-img-function-spectular">
						<div class="col-lg-12 title-name-box">
							<h4>computer education<br>labs</h4>
							<img src="<?= base_url('assets/images/edique-orange-icon-plus.png'); ?>">
						</div>
						
					</div> -->
				</div>

				<div class="col-lg-4 col-md-4 function-boxes">
					<div class="flip-box design-margin-right">
						  <div class="flip-box-inner">
						    <div class="flip-box-front">
						      <img src="<?= base_url('assets/images/digitall-classroom.png'); ?>" alt="computer-labs">
						      <div class="col-lg-12 flip-front-text-links">
						      	<h4>E-learning based <br>classrooms</h4>
								<img class="orangePlusIcon" src="<?= base_url('assets/images/edique-orange-icon-plus.png'); ?>">
								<p class="poweredby-text for-full-area">
										Powered by Exactics
									</p>
						      </div>
						    </div>
						    <div class="flip-box-back">
							<div class="flip-img flup-width">
						    		<img src="<?= base_url('assets/images/digitall-classroom-flip.png'); ?>"alt="computer-labs-flip">
						    	</div> 
						    	<div class="after-flip-data margin-top-flipppp back-480">
						    		<div class="white-globe-line mobile-cion-hide-resp">
						    			<img src="<?= base_url('assets/images/edique-icon-white.png'); ?>" class="globe-white">
						    			<img src="<?= base_url('assets/images/edique-white-line.png'); ?>" class="globe-white-line">
						    			<img class="who-icon-full-white filp-white-inner" src="<?= base_url('assets/images/eidque-iconfull-white-for-blue.png'); ?>">
						    		</div>
						    		<img class="who-icon-full-backblue" src="<?= base_url('assets/images/eidque-iconfull-white-for-blue.png'); ?>">
						    		<p>To ensure that our classroom setting becomes interactive and immersive, our e-learning classrooms come with multiple configurations ranging from multimedia projectors and interactive whiteboards along with high definition interactive panels on a high-speed connectivity network for seamless and uninterrupted learning. This built in environment empowers both teachers and students engage in healthy collaboration during classroom sessions to uplift the capabilities of both.</p>
						    	</div>
						     	
						    </div>
						  </div>
						</div>
					<!-- <div class="rounded-box-border for-design-margin-left2 height-spectulars">
						<img src="<?= base_url('assets/images/digital-classroom.png'); ?>" class="img-responsive round-img-function-spectular">
						
						<div class="col-lg-12 title-name-box">
							<h4>E-learning based <br>classrooms</h4>
							<img src="<?= base_url('assets/images/edique-orange-icon-plus.png'); ?>">
						</div>
						
					</div> -->
				</div>


				<div class="col-lg-4 col-md-4 function-boxes">
					<div class="flip-box design-margin-left">
						  <div class="flip-box-inner">
						    <div class="flip-box-front">
						      <img src="<?= base_url('assets/images/science-robotics.png'); ?>" alt="computer-labs">
						      <div class="col-lg-12 flip-front-text-links">
						      	<h4>science & robotics<br> studios</h4>
								<img class="orangePlusIcon" src="<?= base_url('assets/images/edique-orange-icon-plus.png'); ?>">
								<p class="poweredby-text for-full-area">
										Powered by Exactics
									</p>
						      </div>
						    </div>
						    <div class="flip-box-back">
							<div class="flip-img flup-width">
						    		<img src="<?= base_url('assets/images/science-robotics-flip.png'); ?>"alt="computer-labs-flip">
						    	</div> 
						    	<div class="after-flip-data  margin-top-flipppp back-480">
						    		<div class="white-globe-line mobile-cion-hide-resp">
						    			<img src="<?= base_url('assets/images/edique-icon-white.png'); ?>" class="globe-white">
						    			<img src="<?= base_url('assets/images/edique-white-line.png'); ?>" class="globe-white-line">
						    			<img class="who-icon-full-white filp-white-inner" src="<?= base_url('assets/images/eidque-iconfull-white-for-blue.png'); ?>">
						    		</div>
						    		<img class="who-icon-full-backblue" src="<?= base_url('assets/images/eidque-iconfull-white-for-blue.png'); ?>">
						    		<p>Classroom sessions interspersed with advancements in AI and automation pushes educators to actively integrate STEM and Robotics in the mainstream school curriculum worldwide. This progressive grade-wise robotics program for students combines integrated modular solutions including devices with built-in robotic stations. They help create a nurturing environment for students that is exciting and exploratory.</p>
						    	</div>
						     	
						    </div>
						  </div>
						</div>
					<!-- <div class="rounded-box-border for-design-margin-left height-spectulars">
						<img src="<?= base_url('assets/images/science-robotics.png'); ?>" class="img-responsive round-img-function-spectular">
						<div class="col-lg-12 title-name-box">
							<h4>science & robotics<br> studios</h4>
							<img src="<?= base_url('assets/images/edique-orange-icon-plus.png'); ?>">
						</div>
						
					</div> -->
				</div>

				<div class="col-lg-4 col-md-4 function-boxes margin-top-flip-tosecound">
						<div class="flip-box design-margin-right">
						  <div class="flip-box-inner">
						    <div class="flip-box-front">
						      <img src="<?= base_url('assets/images/ai-classroom.png'); ?>" alt="computer-labs">
						      <div class="col-lg-12 flip-front-text-links">
						      	<h4>AI based classroom<br>analytics</h4>
								<img class="orangePlusIcon" src="<?= base_url('assets/images/edique-orange-icon-plus.png'); ?>">
								<p class="poweredby-text for-full-area">
										Powered by Exactics
									</p>
						      </div>
						    </div>
						    <div class="flip-box-back">
							<div class="flip-img flup-width">
						    		<img src="<?= base_url('assets/images/ai-classroom-flip.png'); ?>"alt="computer-labs-flip">
						    	</div> 
						    	<div class="after-flip-data back-480 margin-top-flipppp spect-back-img-text">
						    		<div class="white-globe-line mobile-cion-hide-resp">
						    			<img src="<?= base_url('assets/images/edique-icon-white.png'); ?>" class="globe-white">
						    			<img src="<?= base_url('assets/images/edique-white-line.png'); ?>" class="globe-white-line">
						    			<img class="who-icon-full-white filp-white-inner" src="<?= base_url('assets/images/eidque-iconfull-white-for-blue.png'); ?>">
						    		</div>
						    		<img class="who-icon-full-backblue" src="<?= base_url('assets/images/eidque-iconfull-white-for-blue.png'); ?>">
						    		<p>With Intelligent analytics, an educational institution can evaluate multi-dimensional parameters to proactively work towards ensuring the well-being of both the education seekers and education providers in the school. The platform supports the school administration with various key insights including teacher effectiveness, student & teacher attendance, teacher-student interaction, etc.</p>
						    	</div>
						     	
						    </div>
						  </div>
						</div>
					<!-- <div class="rounded-box-border for-design-margin-left2 height-spectulars">
						<img src="<?= base_url('assets/images/ai-classroom.png'); ?>" class="img-responsive round-img-function-spectular">
						
						<div class="col-lg-12 title-name-box">
							<h4>AI based classroom<br>analytics</h4>
							<img src="<?= base_url('assets/images/edique-orange-icon-plus.png'); ?>">
						</div>
						
					</div> -->
				</div>


				<div class="col-lg-4 col-md-4 function-boxes margin-top-flip-tosecound">
					<div class="flip-box design-margin-left">
						  <div class="flip-box-inner">
						    <div class="flip-box-front">
						      <img src="<?= base_url('assets/images/learning-platform.png'); ?>" alt="computer-labs">
						      <div class="col-lg-12 flip-front-text-links">
						      	<h4>personalised learning <br>platform</h4>
								<img class="orangePlusIcon" src="<?= base_url('assets/images/edique-orange-icon-plus.png'); ?>">
								<p class="poweredby-text for-full-area">
										Powered by Exactics
									</p>
						      </div>
						    </div>
						    <div class="flip-box-back">
							<div class="flip-img flup-width">
						    		<img src="<?= base_url('assets/images/learning-platform-flip.png'); ?>"alt="computer-labs-flip">
						    	</div> 
						    	<div class="after-flip-data back-480 margin-top-flipppp spect-back-img-text1">
						    		<div class="white-globe-line mobile-cion-hide-resp">
						    			<img src="<?= base_url('assets/images/edique-icon-white.png'); ?>" class="globe-white">
						    			<img src="<?= base_url('assets/images/edique-white-line.png'); ?>" class="globe-white-line">
						    			<img class="who-icon-full-white filp-white-inner" src="<?= base_url('assets/images/eidque-iconfull-white-for-blue.png'); ?>">
						    		</div>
						    		<img class="who-icon-full-backblue" src="<?= base_url('assets/images/eidque-iconfull-white-for-blue.png'); ?>">
						    		<p>Edique offers a wide range of personalised learning tools encompassing multiple online modules for students and teachers to immerse themselves in. Interactive learning helps fortify students and teachers to become better versions of themselves and further amplify their learning and teaching capability and increase their level of interest to do better.</p>
						    	</div>
						     	
						    </div>
						  </div>
						</div>
					<!-- <div class="rounded-box-border for-design-margin-left height-spectulars">
						<img src="<?= base_url('assets/images/online-learning-assessment.png'); ?>" class="img-responsive round-img-function-spectular">
						<div class="col-lg-12 title-name-box">
							<h4>personalised learning <br>platform</h4>
							<img src="<?= base_url('assets/images/edique-orange-icon-plus.png'); ?>">
						</div>
						
					</div> -->
				</div>

				<div class="col-lg-4 col-md-4 function-boxes margin-top-flip-tosecound">
					<div class="flip-box design-margin-right">
						  <div class="flip-box-inner">
						    <div class="flip-box-front">
						      <img src="<?= base_url('assets/images/manpowerservices.png'); ?>" alt="computer-labs">
						      <div class="col-lg-12 flip-front-text-links">
						      	<h4>integrated manpower<br>services</h4>
								<img class="orangePlusIcon" src="<?= base_url('assets/images/edique-orange-icon-plus.png'); ?>">
								<p class="poweredby-text for-full-area">
										Powered by Exactics
									</p>
						      </div>
						    </div>
						    <div class="flip-box-back">
							<div class="flip-img flup-width">
						    		<img src="<?= base_url('assets/images/manpowerservices-flip.png'); ?>"alt="computer-labs-flip">
						    	</div> 
						    	<div class="after-flip-data back-480 margin-top-flipppp spect-back-img-text">
						    		<div class="white-globe-line mobile-cion-hide-resp">
						    			<img src="<?= base_url('assets/images/edique-icon-white.png'); ?>" class="globe-white">
						    			<img src="<?= base_url('assets/images/edique-white-line.png'); ?>" class="globe-white-line">
						    			<img class="who-icon-full-white filp-white-inner" src="<?= base_url('assets/images/eidque-iconfull-white-for-blue.png'); ?>">
						    		</div>
						    		<img class="who-icon-full-backblue" src="<?= base_url('assets/images/eidque-iconfull-white-for-blue.png'); ?>">
						    		<p>To strengthen the schools and classrooms, Edique deploys an experienced team of academic & technology experts. They are woven into the school system and are responsible for monitoring, recruiting, uplifting and training the school staff and teachers to be tech ready. In doing so, they create the possibility for an existing school to become future ready.</p>
						    	</div>
						     	
						    </div>
						  </div>
						</div>
					<!-- <div class="rounded-box-border for-design-margin-left2 height-spectulars">
						<img src="<?= base_url('assets/images/manpowerservices.png'); ?>" class="img-responsive round-img-function-spectular">
						
						<div class="col-lg-12 title-name-box">
							<h4>integrated manpower<br>services</h4>
							<img src="<?= base_url('assets/images/edique-orange-icon-plus.png'); ?>">
						</div>
						
					</div> -->
				</div>

			</div>
	</div>
</section>



<section class="our-journey-innovation" >
	<div class="container">
		
		
		<div class="row">
			<div class="col-lg-12 how-tit-big">
					<h1 class="how-big">Our</h1>
				</div>
				<div class="col-lg-12 dowwe-col-spectacular">

					<img class="mobile-cion-hide-resp" src="<?= base_url('assets/images/edique-icon.png'); ?>" >

						<h3 class="term-spectular">Journey 
							<!-- <span class="edique-icon position-change">
							
						</span> -->
						<img class="who-icon-full journey-icon-white" style="display:inline-block!important;" src="<?= base_url('assets/images/eidque-iconfull.png'); ?>">
						</h3>
						<img class="who-icon-full innovation" src="<?= base_url('assets/images/eidque-iconfull.png'); ?>">
				</div>
				<div class="col-lg-12 blue-line-howwe-offering">
					<h3 class="function-text-howe-ofering">of Innovation</h3>
					<img src="<?= base_url('assets/images/edique-blue-line.png'); ?>" class="img-responsive for-height-inovation mobile-cion-hide-resp">
					
				</div>
				<div class="col-lg-12 how-we-descofering">
					<p>
						Since inception in 2016, Edique has come a long way in deploying innovative education technology solutions. The company now offers integrated solutions seamlessly across education institutions throughout the country and beyond.
					</p>
					<!-- <div class="img-line-offering">
							<img src="<?= base_url('assets/images/edique-blue-line.png'); ?>">
						</div> -->
				</div>
			</div>
			
			<!-- <div class="slider-next-prev">
				<div class="slider-thumbnailsmall 2017-prev">
					<p> <i class="fa fa-long-arrow-left" aria-hidden="true"></i> <span>2017</span>  </p>
				</div>
				<div class="slider-thumbnailsmall 2019-next">
					<p> <i class="fa fa-long-arrow-right" aria-hidden="true"></i> <span>2019</span>  </p>
				</div>


			</div> -->
			

		
			

			
           
                   
                    
<!-- webpreve-show -->
			<div class="webpreve-show">
			<a class="prev" style="display: none;" id="Seventen"><i class="fa fa-long-arrow-left font-small-cion" aria-hidden="true"></i><span> 2017 </span> </a>
			<a class="prev"style="display: none;"  id="seventenLeft" ><i class="fa fa-long-arrow-left font-small-cion" aria-hidden="true"></i><span> 2018</span> </a>
			<a class="next" style="display: none;" id="Ninteen"> <span>2019 </span> <i class="fa fa-long-arrow-right font-small-cion" aria-hidden="true"></i></a>
			<a class="next" id="seventenRight"><span>2018 </span><i class="fa fa-long-arrow-right font-small-cion" aria-hidden="true"></i> </a>
			<a class="next" style="display: none;" id="eighteenRight"><span>2018 </span><i class="fa fa-long-arrow-left font-small-cion" aria-hidden="true"></i> </a>


			
			</div>
			<div class="mobprev-show" style="display: none;">
				<a class="prev forMobPrev active mob2017 azad" id="azad"><span> 2017 </span></a>
				<a class="next forMobPrev mob2018" id="azad1"><span>2018 </span> </a>
				<a class="next forMobPrev mob2019" id="azad2"> <span>2019 </span></a>
			</div>
			
       
			<div class="row year-blue" id="year2017" >
				<!-- data-ride="carousel"   For autoslider-->
				<div id="year-secound" class="carousel slide custom-width-slider" data-interval="false" >
   					 <!-- Indicators -->
				   <!--  <ol class="carousel-indicators">
				      <li data-target="#year-secound" data-slide-to="0" class="active"></li>
				      <li data-target="#year-secound" data-slide-to="1"></li>
				      <li data-target="#year-secound" data-slide-to="2"></li>
				       <li data-target="#year-secound" data-slide-to="3"></li>
				    </ol>
 -->
				    <!-- Wrapper for slides -->
				    <div class="carousel-inner left-side-big" >
				      <div class="item active" >
				        <img src="<?= base_url('assets/images/2017/template1-2017.png'); ?>" alt="2016" style="width:100%;">

				        <div class="col-lg-12 slider-year-desc">
						 <p class="year-text blue-text-pad">
		                  71 digital classrooms setup with technology-based infrastructure across 09 districts in the state of Telangana supported by curriculum based learning resources.
		                 
	                  	</p>
                 		
						</div>
				      </div>

				      <div class="item">
				        <img src="<?= base_url('assets/images/2017/template-2017.png'); ?>" alt="2016" style="width:100%; ">
				         <div class="col-lg-12 slider-year-desc">
						 <p class="year-text blue-text-pad">
		                  	1214 Classrooms across municipal schools in Mumbai equipped with technology-based infrastructure by way of an in-house interactive learning device, ED-Touch.
		                  	<!-- <span class="blue-know read-more-btn1">..Read More</span>
		                  	 <span class="more-data1"style="display: none;"></span> -->
	                	</p>
	                	<!-- <p class="more-data" style="display: none;"> of an in-house interactive learning device, ED-Touch.</p> -->
                 		
						</div>
				      </div>
				    
				      <div class="item">
				        <img src="<?= base_url('assets/images/2017/template2-2017.png'); ?>" alt="2016" style="width:100%; ">
				        <div class="col-lg-12 slider-year-desc">
						 <p class="year-text blue-text-pad">
		                  	Innovative STEM studios setup across 07 districts in the state of Jharkhand to facilitate development of mathematical thinking & scientific temper.
		                  	<!-- <span class="blue-know read-more-btn2">..Read More</span>
		                 <span class="more-data2"style="display: none;"></span>  -->	
	                  	</p>
                 		<!-- <p class="more-data" style="display: none;">  of mathematical thinking & scientific temper</p> -->
						</div>
				      </div>
				       <div class="item">
				        <img src="<?= base_url('assets/images/2017/template3-2017.png'); ?>" alt="2016" style="width:100%; ">
				        <div class="col-lg-12 slider-year-desc">
						 <p class="year-text blue-text-pad">
		                  	IT Lab infrastructure setup across 120 schools in the state of Jammu & Kashmir to enable access of mathematical to technology and introduce computer enabled education.
		                  	<!-- <span class="blue-know read-more-btn3">..Read More</span> 
		                  	 <span class="more-data3"style="display: none;"></span> -->
		                  
	                  	</p>
                 		
						</div>
				      </div>
				    </div>
				    <div class="thumbnals-img-slider" id="myBulId">
				    	<ul class="crousel-thimnail">
				    		<div class="prv-nxt-projects" id="forliDisable">
				    			
							<a href="#year-secound" class="prev-slider" data-slide="prev" id="prev-icon" style="visibility: hidden;"><i class="fa fa-angle-left blue-prev-next"></i></a>

				    		 <!--  <a class="left carousel-control" href="#year-secound" data-slide="prev">
					      		<span class="glyphicon glyphicon-chevron-up"></span>
					    		</a> -->
				    		 <!-- <span class="thumbail-img blue-border active">
					    			<img src="<?= base_url('assets/images/2017/thumbnail1-2017.png'); ?>" class="img-responsive" >
					    		</span>
					    		<span class="thumbail-img blue-border">
					    			<img src="<?= base_url('assets/images/2017/thumbnail-2017.png'); ?>" class="img-responsive">
					    		</span>
					    		<span class="thumbail-img blue-border">
					    			<img src="<?= base_url('assets/images/2017/thumbnail2-2017.png'); ?>" class="img-responsive">
					    		</span>
					    		<span class="thumbail-img blue-border">
					    			<img src="<?= base_url('assets/images/2017/thumbnail3-2017.png'); ?>" class="img-responsive">
					    		</span> -->


								<li  data-slide-to="0" class=" blue-border active">
				    		 	<img src="<?= base_url('assets/images/2017/thumbnail1-2017.png'); ?>" class="img-responsive" >
				    		 </li>
							 <li data-slide-to="1" class="blue-border">
						      		<img src="<?= base_url('assets/images/2017/thumbnail-2017.png'); ?>" class="img-responsive">
						      </li>
							  <li class="blue-border">
						      		<img src="<?= base_url('assets/images/2017/thumbnail2-2017.png'); ?>" class="img-responsive">
						      </li>
							  <li class="blue-border">
						      		<img src="<?= base_url('assets/images/2017/thumbnail3-2017.png'); ?>" class="img-responsive">
						      </li>
						      <a href="#year-secound"  data-slide="next" class="next-slider" id="next-icon"><i class="fa fa-angle-right blue-prev-next"></i></a>
						      
						     
				    		</div>
				    		
						     
				    	</ul>
				    	
				    </div>

							 <!-- Left and right controls -->
  
   
  					</div>
  					
			</div>
			
			
			<div class="row year-orange " id="year2018" style="display: none;">
				<div id="year-third" class="carousel slide custom-width-slider" data-interval="false"  >
   					 <!-- Indicators -->
				 <!--    <ol class="carousel-indicators">
				      <li data-target="#year-third" data-slide-to="0" class="active"></li>
				      <li data-target="#year-third" data-slide-to="1"></li>
				      <li data-target="#year-third" data-slide-to="2"></li>
				       <li data-target="#year-third" data-slide-to="3"></li>
				    </ol> -->

				    <!-- Wrapper for slides -->
				    <div class="carousel-inner left-side-big">
				      <div class="item active">
				        <img src="<?= base_url('assets/images/2018/template2-2018.png'); ?>" alt="2016" style="width:100%;">
				        <div class="col-lg-12 slider-year-desc">
						 <p class="year-text orange-text-pad">
		                  Introduction of an inclusive ICT based solution in 533 schools under the Department of Tribal Welfare, Telangana aimed at holistic improvement in quality of education delivery for the learners.
		                  <!-- <span class="orange-know read-more-btn4">..Read More</span> 
		                  	 <span class="more-data4"style="display: none;"> </span> -->
		               	</p>
                 	
						</div>
				      </div>

				      <div class="item">
				        <img src="<?= base_url('assets/images/2018/template1-2018.png'); ?>" alt="2016" style="width:100%;">
				        <div class="col-lg-12 slider-year-desc">
						 <p class="year-text orange-text-pad">
		                  An inclusive digital classroom solution introduced for 100 classrooms across the state of Uttarakhand as part of a CSR initiative by a reputed foundation.
		                  <!-- 	<span class="blue-know for-know-more-show" id="p1" >Know more</span>
		                  	<p class="year-text display-show-know" id="scritta" class="hiddendiv">activity or event the image is regarding.</p>
		                  	<span class="blue-know style-css" id="p2">Know less</span> -->
	                  	</p>
                 		<!-- 	<h3 class="slider-desc-icon">
                  		<a href="#!"><img src="<?= base_url('assets/images/slider-know-more-blue.png'); ?>"><span class="blue-know">KNOW MORE</span></a></h3> -->
						</div>
				      </div>
				    
				      <div class="item">
				        <img src="<?= base_url('assets/images/2018/template-2018.png'); ?>" alt="2016" style="width:100%;">
				        <div class="col-lg-12 slider-year-desc">
						 <p class="year-text orange-text-pad">
		                  Implemented a technology centric early childhood education quality improvement program for The World Bank in 350 primary schools and anganwadis across the country.
		                 <!--  <span class="orange-know read-more-btn5">..Read More</span> 
		                  	 <span class="more-data5"style="display: none;"></span> -->
		                 
	                  	</p>
                 		<!-- 	<h3 class="slider-desc-icon">
                  		<a href="#!"><img src="<?= base_url('assets/images/slider-know-more-blue.png'); ?>"><span class="blue-know">KNOW MORE</span></a></h3> -->
						</div>
				      </div>
				       <div class="item">
				        <img src="<?= base_url('assets/images/2018/template3-2018.png'); ?>" alt="2016" style="width:100%;">
				        <div class="col-lg-12 slider-year-desc">
						 <p class="year-text orange-text-pad">
		                 Executed an ICT based intervention for 58 schools across the state of Jharkhand aimed at delivery of computer aided  learning for the students in the state.
		                 <!-- <span class="orange-know read-more-btn6">..Read More</span> 
		                  	 <span class="more-data6"style="display: none;">
		                  	 </span> -->
		                
	                  	</p>
                 		
						</div>
				      </div>
				    </div>
				    <div class="thumbnals-img-slider" id="myOlId">
				    	<ul class="crousel-thimnail">
				    		<div class="prv-nxt-projects">
				    		<a href="#year-third" class="prev-slider" data-slide="prev" id="prev-icon"style="visibility: hidden;"><i class="fa fa-angle-left orange-prev-next"></i></a>
				    		 <!--  <a class="left carousel-control" href="#year-third" data-slide="prev">
					      		<span class="glyphicon glyphicon-chevron-up"></span>
					    		</a> -->
								<li  class="active orange-border">
				    		 	<img src="<?= base_url('assets/images/2018/thumbnail2-2018.png'); ?>" class="img-responsive">
				    		 </li>
							 <li  class="orange-border">
						      		<img src="<?= base_url('assets/images/2018/thumbnail1-2018.png'); ?>" class="img-responsive">
						      </li>
						      <li class="orange-border">
						      		<img src="<?= base_url('assets/images/2018/thumbnail-2018.png'); ?>" class="img-responsive">
						      </li>
							  <li  class="orange-border">
						      		<img src="<?= base_url('assets/images/2018/thumbnail3-2018.png'); ?>" class="img-responsive">
						      </li>
						       <a href="#year-third"  data-slide="next" class="next-slider" id="next-icon"><i class="fa fa-angle-right orange-prev-next"></i></a>
						  </div>
						     
				    	</ul>
				    	
				    </div>

							 <!-- Left and right controls -->
  
   
  					</div>
  					
			</div>
		 
			<div class="row year-green  " id="year2019" style="display: none;">


				
				<div id="year-first" class="carousel slide custom-width-slider" data-interval="false" >
   					

				    <!-- Wrapper for slides -->
				    <div class="carousel-inner left-side-big">
				      <div class="item active">
				        <img src="<?= base_url('assets/images/2019/template3-2019.png'); ?>" alt="2016" style="width:100%;">
				        <div class="col-lg-12 slider-year-desc green-text-pad">
						 <p class="year-text">
		                 Deployed a comprehensive technology initiative for 4330 Government schools across Chhattisgarh including  deployment of a custom adaptive testing platform developed in-house and is expected to impact nearly 30 lakh students.
		                <!--  <span class="green-know read-more-btn7" data-toggle="tooltip" data-placement="top" title="Tooltip on top">..Read More</span> 
		                  	 <span class="more-data7"style="display: none;">  -->
		                  
	                  	</p>
                 		
				    	
						</div>
				      </div>

				      <div class="item">
				        <img src="<?= base_url('assets/images/2019/template1-2019.png'); ?>" alt="2016" style="width:100%;">
				        <div class="col-lg-12 slider-year-desc green-text-pad">
						 <p class="year-text">
		                Transformational school improvement program for 123 schools under Pimpri Chinchwad Municipal Corporation, Maharashtra including IT Labs, Robotic studios and AI based behavioral analytics tool, aimed at improving the teaching-learning process.
		                <!-- <span class="green-know read-more-btn8">..Read More</span> 
		                  	 <span class="more-data8"style="display: none;">   -->
		                 
	                  	</p>
             			
						</div>
				      </div>
				    
				      <div class="item">
				        <img src="<?= base_url('assets/images/2019/template2-2019.png'); ?>" alt="2016" style="width:100%;">
				        <div class="col-lg-12 slider-year-desc green-text-pad">
						 <p class="year-text">
		                	Setup 12,000 digital classrooms across 3655 Government schools in the state of Gujarat including deployment of a web & mobile based device management tool to enforce proactive service support and minimize  downtime.
		                	<!-- <span class="green-know read-more-btn9">..Read More</span> 
		                  	 <span class="more-data9"style="display: none;">   -->
		               		</p>
		                  
                 	
						</div>
				      </div>
				      <!--  <div class="item">
				        <img src="<?= base_url('assets/images/2019/template3-2019.png'); ?>" alt="2016" style="width:100%;">
				      </div> -->
				    </div>
				    <div class="thumbnals-img-slider">
				    	<ul class="crousel-thimnail for-3-height" id="myulId">
				    		<div class="prv-nxt-projects">
				    		<a href="#year-first" class="prev-slider" data-slide="prev" id="prev-icon"style="visibility: hidden;"><i class="fa fa-angle-left"></i></a>
				    		 <!--  <a class="left carousel-control" href="#year-first" data-slide="prev">
					      		<span class="glyphicon glyphicon-chevron-up"></span>
					    		</a> -->
								<li  class="active green-border">
				    		 	<img src="<?= base_url('assets/images/2019/thumbnail3-2019.png'); ?>" class="img-responsive">
				    		 </li>
							 <li class="green-border">
						      		<img src="<?= base_url('assets/images/2019/thumbnail1-2019.png'); ?>" class="img-responsive">
						      </li>
						      <li class="green-border">
						      		<img src="<?= base_url('assets/images/2019/thumbnail2-2019.png'); ?>" class="img-responsive">
						      </li>
						       <a href="#year-first"  data-slide="next" class="next-slider"id="next-icon"><i class="fa fa-angle-right"></i></a>
						       <!--  <li data-target="#year-first" data-slide-to="3" class="green-border">
						      		<img src="<?= base_url('assets/images/2019/thumbnail3-2019.png'); ?>" class="img-responsive">
						      </li> -->
						     </div>
				    	</ul>
				    	
				    </div>

							 <!-- Left and right controls -->
  
   
  					</div>
  					<!-- <div class="col-lg-12 slider-year-desc">
					 <p class="year-text">
                  	Hover and click on any image to get rollover text here that provides a quick and direct description of the activity or event the image is regarding.
                  </p>
                  	<h3 class="slider-desc-icon" >
                  		<a href="#!"><img src="<?= base_url('assets/images/slider-know-more-green.png'); ?>"><span class="green-know">KNOW MORE</span></a></h3>
				</div> -->
			</div>
				
				
	<!-- 	</div> -->

	</div>
</section>




<section class="lets-acquainted" id="partnerSection">
	<div class="container">
		<div class="row">
				<div class="col-lg-12 how-tit-big">
					<h1 class="how-big small-ofnt">Let's</h1>
				</div>
				<div class="col-lg-12 dowwe-col-spectacular">
					<img class="mobile-cion-hide-resphide" src="<?= base_url('assets/images/edique-icon.png'); ?>" >
						<h3 class="term-spectular get-acc-font">Get acquainted <span class="iocn-blue-lets">
							<img src="<?= base_url('assets/images/edique-blue-line.png'); ?>" class="img-responsive get-line mobile-cion-hide-resphide ">
						</span>
						<img class="who-icon-full contact-icon-white" style="display:inline-block!important;" src="<?= base_url('assets/images/eidque-iconfull.png'); ?>">
						</h3>
						<img class="who-icon-full get" src="<?= base_url('assets/images/eidque-iconfull.png'); ?>">
				</div>
				<div class="lets-acquainted-img ">
					<img src="<?= base_url('assets/images/acquainted-vector.png'); ?>" class="img-fluid">
				</div>


				<div class="col-lg-12 contact-us-form" id="contactForm">
					<div class="row">
						<!-- <?php echo $status; ?> -->
						<!-- <form action="<?php echo base_url('welcome/contact_insert')?>" method="post"> -->
							<div class="col-lg-6 col-md-6 contact-form-left">
								<div class="form-group">
								   <input type="text" name="name" id="name" class="form-control empty" placeholder="Name" required>
								   <span id="divname" class="spanError"></span>
								</div>
								<div class="form-group">
								   <input type="text" name="company" id="company" class="form-control empty" placeholder="Company" required>
								</div>
								<div class="form-group">
								   <input type="text" name="email" id="email" class="form-control empty" placeholder="Email" required>
								   <span id="divemail" class="spanError"></span>
								</div>
								 
								<div class="form-group">
								   <input type="text" name="mobno" id="mobno"maxlength="10" class="form-control empty" placeholder="Contact number" required>
								   <span id="divmobno" class="spanError"></span>
								</div>
								<div class="form-group">
									<i class="fa fa-angle-down"></i>
									<select class="form-control empty" name="interest" id="interest" >
										<!-- <i class="fa fa-angle-down"></i> -->
										<option value="">Select option</option>
										<option value="Product Enquiry">Product Enquiry</option>
										<option value="Product Demo">Product Demo</option>
										<option value="Business Partnership">Business Partnership</option>
										<option value="Customer Feedback">Customer Feedback</option>
										<option value="Careers">Careers</option>
										<option value="Others">Others</option>
									</select>
									<span id="divinterest" class="spanError"></span>
								</div>
							</div>
							<div class="col-lg-6 col-md-6 contact-form-left">
								<div class="form-group">
								   <textarea class="form-control empty" rows="10" id="message" name="message" placeholder="Please enter your details here" required></textarea>
								   <span id="divmessage" class="spanError"></span>
								</div>
							</div>
							
							<div class="col-lg-6 captcha-custom custom-cuaptchnew">
								<div class="row">
									
									<div class="col-lg-7 input-captch-new">
											<div class="form-group capctic-input-here1">
											<input type="text"  id="captchainput" class="form-control empty" onkeyup="check(this.value);" placeholder="Enter captcha text here" style="width:75%;" required>
												<!-- <span id="divcaptchainput" class="spanError" style="letter-spacing: inherit;font-size:14px;"></span> -->
												<span id="cap_success" style="color:green;letter-spacing: inherit;font-size:14px;"></span>
												<span id="cap_error" style="color:red;letter-spacing: inherit;font-size:16px;"></span>
												<i class="fa fa-check-circle" id="check" style="display:none;font-size: 26px!important;color: #7fc245!important;"></i>
										</div>
									</div>
									<div class="col-lg-5 refresh-digit">
										<i class="fa fa-refresh"onclick="generateCaptcha()"></i>
										<span id="captcha"  class="captcha-digit digit-new"></span>
									</div>
								</div>
							<!-- 	<ul class="captcha-two" >
									<li>
										<i class="fa fa-refresh"onclick="generateCaptcha()"></i>
										<span id="captcha"  class="captcha-digit"></span>
										<div class="form-group capctic-input-here">
											<input type="text"  id="captchainput" class="form-control empty" onkeyup="check(this.value);" placeholder="Enter captcha text here" style="width:70%;" required>
												
												<span id="cap_success" style="color:green;letter-spacing: inherit;font-size:14px;"></span>
												<span id="cap_error" style="color:red;letter-spacing: inherit;font-size:16px;"></span>
												<i class="fa fa-check-circle" id="check" style="display:none"></i>
										</div>

									</li>
									
									
									
									</ul> -->
							</div>
							<div class="col-lg-12 btn-submit-form1">
								<!-- <button class="btn btn-custom btn-success"  type="submit" id="submit" name="submit">Submit</button> -->
								<input type="button" id="submit" class="btn btn-custom btn-success" value="Submit">
							</div><br>
							<div class="col-lg-6 col-md-12">
								<div class="response_msg"></div>
								
							</div>
							<div class="col-lg-3"></div>
							<!-- </form> -->
					</div>
				</div>
		</div>
	</div>
</section>
<script>
	$(document).ready(function() {
		$('#submit').on('click', function(){
			if(check_submit('contactForm')){
			var formData = { 
				'name' : $('input[name=name]').val(), 
				'company' : $('input[name=company]').val(), 
				'email' : $('input[name=email]').val(), 
				'mobno' : $('input[name=mobno]').val(), 
				'interest' : $("#interest").val(), 
				'message' : $('#message').val()
				};
			$.ajax({ 
				type : 'POST', 
				url : '/welcome/contact_insert/', 
				data : formData,
				dataType : 'JSON',
				success: function(data) {
					if(data == 'success'){
						var divContent = '';
						divContent +="<div class='alert alert-info alert-dismissible text-center' style='border-radius:19px;' role='alert'><a href='#' class='close' data-dismiss='alert'aria-label='close'>&times;</a><strong class='after-submit'>'Thank you for your enquiry. We shall get back to you soon'</strong></div>";
						$('.response_msg').html(divContent);
						$('input[name=name]').val('');
						$('input[name=company]').val('');
						$('input[name=email]').val('');
						$('input[name=mobno]').val('');
						$("#interest").val('');
						$("#message").val('');
						$("#captchainput").val('');
						generateCaptcha();
						$("#check").hide();
					}else{
						var divContent = '';
						divContent +="<div class='alert alert-danger alert-dismissible text-center' style='border-radius:19px;' role='alert'><a href='#' class='close' data-dismiss='alert'aria-label='close'>&times;</a><strong class='after-submit'>'Somthing went wrong!Please try again!'</strong></div>";
						$('.response_msg').html(divContent);
					}
				},
				error : function(error) {
					console.log(error);
				},

			}) ;
		}else{
			return false;
		}
			
		});
	});

function check_submit(get_id)
{
	///alert(get_id);
    var collection=$("#"+get_id);
    var mark=0;
    var obtainmark=0;
    var vali=false;
    var inputs=collection.find("input[type=text],select,textarea,input[type=email],input[type=number]");
    for(var x=0;x<inputs.length;x++)
    {
        var id=inputs[x].id;
        var name=inputs[x].name;
        var value=$("#"+id+"").val();
        var type=inputs[x].type;
        if($("#"+id+"").attr('class')=="form-control empty")
        {
            if((type=="text" || type=="textarea" || type=="email" || type=="number") && value=="" && value==0 )
            {
                $("#"+id+"").focus();
                $("#div"+id+"").html("Required field. You can't leave it blank");
                return false;
            }
			if($("#"+id+"").val() == -1 || $("#"+id+"").val()=="" || $("#"+id+"").val()==0)
            {
                $("#"+id+"").focus();
                $("#div"+id+"").html("This Feild is required.Please Select");
                return false;
            }

			if($("#"+id+"").attr('id')=="email")
			{
				if(type=="text" && value!="" && value!=0 )
				{
					var pattern=/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
					if($("#"+id+"").val().match(pattern))  
					{  
						$("#div"+id+"").html('');
					}  
					else
					{
						$("#"+id+"").focus();
						$("#div"+id+"").html("Please enter valid email address");
						return false;
					} 
				}
				else
				{
					$("#"+id+"").focus();
					$("#div"+id+"").html("This Feild is required.You can't leave this empty");
					return false;
				}
			}

			if($("#"+id+"").attr('name')=="mobno")
			{
				if(type=="text" && value!="" && value!=0 )
				{
					var numbers = /^[0-9]+$/;  
					if($("#"+id+"").val().match(numbers))  
					{   
						var val=$("#"+id+"").val();
						if(val.charAt(0)!="0")
						{
							$("#"+id+"").html('');
							if(val.length == 10)
							{
								$("#div"+id+"").html(''); 
							}
							else
							{
								$("#"+id+"").focus();
								$("#div"+id+"").html("Mobile Phone must be 10 Digit numeric no!. ");
								return false;
							}
						}
						else
						{
							$("#"+id+"").focus();
							$("#div"+id+"").html("Mobile Phone should not start with zero!. ");
							return false;
						}
					}   
					else  
					{ 
						$("#"+id+"").focus();
						$("#div"+id+"").html("Mobile Phone must be numeric!.This Field contain only numbers. ");   
						return false;  
					}
				}
				else
				{
					$("#"+id+"").focus();
					$("#div"+id+"").html("This Feild is required.You can't leave this empty");
					return false;
				}   
			}

		}
		$("#div"+id+"").html('');
        vali=true;
    }
    return vali;
}
</script>

<footer>
	<section class="footer-box">
		<div class="container">
			<div class="row first-row-footer">
				<div class="col-lg-4 col-md-4 three-block">

					<h5 class="foot-small-tit">
						Our corporate office
					</h5>
					<h2 class="footer-data ">B-1003, 10<sup>th</sup> Floor, <br>Advant Navis Business Park,
						<br>
						Sector-142, Noida Expressway,<br> Noida - 201305,<br>
						Uttar Pradesh, India
					</h2>
				</div>
				<div class="col-lg-4 col-md-4 three-block">
					
					<h5 class="foot-small-tit">
						Our regional offices
					</h5>
					<h2 class="footer-data uppercase-text left-ofce">Delhi<br>
						Ahmedabad<br>
						Hyderabad
					</h2>
					<h2 class="footer-data uppercase-text right-ofce">Pune<br>Raipur<br>Ranchi
					</h2>
				</div>

				<div class="col-lg-4 col-md-4 three-block">
					
					<h5 class="foot-small-tit">
						Let's Talk
					</h5>
					<div class="inner-box">
					<h2 class="footer-data uppercase-text">Phone
						<br>
						+91&nbsp;120&nbsp;4778800<br>
						+91&nbsp;120&nbsp;4309014
					</h2>
					</div>
					<!-- <div class="inner-boxs">
						<h2 class="footer-data uppercase-text">Email
						<br>
							<span>info@edique.in</span>
					</h2>
					</div> -->
					
				</div>
				<div class="col-lg-3 col-md-3 three-block">
					
					<h5 class="foot-small-tit">
						E-Waste Management
					</h5>
					<div class="inner-box">
					<h2 class="footer-data uppercase-text">Toll Free No
						<br>
						1800 123 5313<br>
						<a href="<?= base_url('assets/docs/Webcontent-E-waste management.pdf'); ?>" target="_blank">View E-Waste</a>
					</h2>
					</div>
					<!-- <div class="inner-boxs">
						<h2 class="footer-data uppercase-text">Email
						<br>
							<span>info@edique.in</span>
					</h2>
					</div> -->
					
				</div>

			</div>
			
			<!-- <div class="row third-row-footer channels-edique">
				<div class="col-lg-3 col-md-3 our-channel-text">
					<h2>Our Channels</h2>
				</div>
				<div class="col-lg-9 col-md-9 social-icons">
					<a href="https://www.linkedin.com/company/edique" target="_blank">
					<img src="<?= base_url('assets/images/linkendin.png'); ?>" >
					</a>
					<a href="https://www.facebook.com/EdiQueSolutions" target="_blank">
					<img src="<?= base_url('assets/images/facbook.png'); ?>" >
					</a>
					<a href="https://www.youtube.com/channel/UCGgIPfBJnX_fdS4ftKNwzcQ/featured" target="_blank">
					<img src="<?= base_url('assets/images/youtube.png'); ?>" >
					</a>
				</div>
			</div> -->

			<div class="row third-row-footer footer-links-last">
				<ul class="links-last-foot">
					<li>
						<a href="mailto:info@edique.in" >
							<h3>contact us</h3>
							<i class="fa fa-plus blue-plus pos-icon-plus-cont"></i>
						</a>
					</li>
					<li>
						<a href="<?= base_url('assets/docs/EdiQue-Privacy-Policy.pdf'); ?>" target="_blank">
							<h3>privacy policy</h3>
							<i class="fa fa-plus orange-plus pos-icon-plus-pri"></i>
						</a>
					</li>
					<li>
						<a href="<?= base_url('assets/docs/EdiQue-Terms-Conditions.pdf'); ?>" target="_blank"  >
							<h3>terms & conditions</h3>
							<i class="fa fa-plus green-plus pos-icon-plus-cond"></i>
						</a>
					</li>
					<li class="last-child-border ">
						<span class="chanel-icons">
							<h3>our channels</h3>
							<div class="col-lg-12 chan-center">
							<a href="https://www.linkedin.com/company/edique" target="_blank">
							<img src="<?= base_url('assets/images/linkendin.png'); ?>" >
							</a>
							<a href="https://www.facebook.com/EdiQueSolutions" target="_blank">
							<img src="<?= base_url('assets/images/facbook.png'); ?>" >
							</a>
							<a href="https://www.youtube.com/channel/UCGgIPfBJnX_fdS4ftKNwzcQ/featured" target="_blank">
							<img src="<?= base_url('assets/images/youtube.png'); ?>" >
							</a>
							</div>
						
						</span>
					</li>
				</ul>
				<!-- <ul class="links-footeers">
					
					<li>
						<a href="mailto:info@edique.in" >
							<h3>contact us</h3>
							<i class="fa fa-plus blue-plus pos-icon-plus-cont"></i>
						</a>
					</li>
					<li>
						<a href="docs/EdiQue-Privacy-Policy.pdf" target="_blank">
							<h3>privacy policy</h3>
							<i class="fa fa-plus orange-plus pos-icon-plus-pri"></i>
						</a>
					</li>
					<li>
						<a href="docs/EdiQue-Terms-Conditions.pdf" target="_blank"  >
							<h3>terms & conditons</h3>
							<i class="fa fa-plus green-plus pos-icon-plus-cond"></i>
						</a>
					</li>
					<li>
						<span class="last-child-border chanel-icons">
							<h3>our channels</h3>
							<a href="https://www.linkedin.com/company/edique" target="_blank">
							<img src="images/linkendin.png" >
							</a>
							<a href="https://www.facebook.com/EdiQueSolutions" target="_blank">
							<img src="images/facbook.png" >
							</a>
							<a href="https://www.youtube.com/channel/UCGgIPfBJnX_fdS4ftKNwzcQ/featured" target="_blank">
							<img src="images/youtube.png" >
							</a>
						</span>
					</li>
				
				</ul> -->
			</div>

			<div class="row secound-row-footer">
				<div class="col-lg-12 col-md-12 copyright-message">
					<h5 class="copy-message">Copyright &#169; 2020 Edique Solutions Private Limited. All rights reserved.</h5>
				</div>
			
			</div>
		</div>
	</section>
</footer>

<script>
$(document).ready(function(){
  $("#open-onclick").click(function(){
    $("#main").toggleClass("maindivcss");
    $("#mySidenav").toggleClass("sidenavdivcss");
	$(this).find('.slider-explore-img').toggle(3000);
});
});
</script>

<script type="text/javascript">
	$('.blue-border').on('click', function() {
	      $('.prv-nxt-projects .active').removeClass('active');
	      $(this).addClass('active');
	      // $('.blue-border').removeClass( "active" );
	});
</script>
<script type="text/javascript">
	  $('.orange-border').on('click', function() {
	   $('.prv-nxt-projects .active').removeClass('active');
	   $(this).addClass('active');
	   // $('.orange-border').removeClass( "active" );
	   });
</script>
<script type="text/javascript">
	$('.green-border').on('click', function() {
	      $('.prv-nxt-projects .active').removeClass('active');
	      $(this).addClass('active');
	       // $('.green-border').removeClass( "active" );
	      });
</script>
<script>
$(function(){
	var onceClick = 0;	
        var stickyHeaderTop = $('#stickytypeheader').offset().top;
 
        $(window).scroll(function(){
                if( $(window).scrollTop() >= 340 ) {             	
                        $('#stickytypeheader').css({position: 'fixed', top: '0px'});
                         //$('#exploade-img').css({display: 'none'});
                        //$('#logo-scroll').css({top: '0px'});
                        $("#main").addClass("maindivcss");	
    					$("#mySidenav").addClass("sidenavdivcss");
    					 $('.explode-hide').css({visibility:'hidden'});
    						$('.mob-hide').css({visibility:'hidden'});
    					
    					
                }
                 else {
                        $('#stickytypeheader').css({position: 'static', top: '0px'});
                         $('#exploade-img').css({display: 'none'});
						// $('.slider-explore-img .mob-hide').css({display:'none'});
                         // $('#exploade-img').css({top: '0px'});
                         //$("#open-onclick").click()
                         $('.explode-hide').css({visibility:'hidden'});
    					$('.mob-hide').css({visibility:'hidden'});

                }

        });
        
  });

$(window).on('scroll',function() {
   // After Stuff
   if($(window).scrollTop() == 0) {
   $("#open-onclick").click();
   $('.explode-hide').css({visibility:'hidden'});
    $('.mob-hide').css({visibility:'visible'});
    // $('#stickytypeheader').fadeIn();
    // $(this).find('.mob-hide').hide();

      // $('#stickytypeheader').css({display: 'none'});
      // $('#stickytypeheader').fadeOutAndRemove();
	}
	else{
		   $('.mob-hide').css({visibility:'visible'});
	}
});
$(window).on('scroll',function() {
   // After Stuff
   if($(window).scrollTop() >= 1400) {
   $("#open-onclick").click();
   // $('#stickytypeheader') .fadeOut(5000);
      
       // $('#stickytypeheader').css({display: 'none'});
       $('#stickytypeheader').fadeOut(4000);

      // $('#stickytypeheader').delay(2000);
        // $("#stickytypeheader").fadeToggle();
        // $("#stickytypeheader").fadeOut()

}
else{
	 // $('#stickytypeheader').fadeIn(1000);
	  // $('#stickytypeheader').css({display: 'block'});
	$('#stickytypeheader') .fadeIn(4000);

	   // $("#stickytypeheader").fadeToggle();
	    // $("#stickytypeheader").fadeIn() ; 
	    // $('#stickytypeheader').css({ 'transition: opacity 1s'});

}
});
</script>

<script type="text/javascript">
	var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
  var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("stickytypeheader").style.display = "block";
    $('.mob-hide').css({visibility:'hidden'});
    // $('.mob-hide').css({visibility:'visible'});

    //document.getElementById("stickytypeheader").style.transition = "0.8s";
     // $('#stickytypeheader').css({animation: 'mymove 1s infinite'});
     // $(this).find('#stickytypeheader').delay(2000); animation: mymove 1s infinite;
     // document.getElementById("stickytypeheader").style.animation = "mynewmove 4s 2";
         // $('#stickytypeheader').css({ 'transition: opacity 1s'});
         // $("#stickytypeheader").fadeOut()
         // document.element.style.opacity = parseFloat(element.style.opacity) - 0.1;
         // $('#stickytypeheader').fadeIn(2000);
  }
   else {
    // document.getElementById("stickytypeheader").style.top = "-50px";
     $('.explode-hide').css({visibility:'hidden'});
  }
  prevScrollpos = currentScrollPos;
}
</script>
<script type="text/javascript">
	$(document).ready(function(){
    $(this).scrollTop(0);
});
</script>

<!-- <script>
	$(window).scroll(function () {
	  if($(window).scrollTop() == 0) {
	    $("#sticky").addClass('sticky');
	  } else {
	    $("#sticky").removeClass('sticky');
	  }
	});
</script> -->

<!-- SLider Script -->

<!-- <script type="text/javascript">
	function myFunction() {
  var x = document.getElementById("myLinks");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
</script> -->


<script>
function openNav() {
  document.getElementById("mobileSidenav").style.width = "100%";
  	$("body").css("overflow","hidden");
}

function closeNav() {
  document.getElementById("mobileSidenav").style.width = "0";
  $("body").css("overflow","scroll");
  
}
</script>


<a href="#" id="scroll" style="display: none;"><span></span></a>

<script type="text/javascript">
	$(document).ready(function(){ 
    $(window).scroll(function(){ 
        if ($(this).scrollTop() > 800) { 
            $('#scroll').fadeIn(); 
        } else { 
            $('#scroll').fadeOut(); 
        } 
    }); 
    $('#scroll').click(function(){ 
        $("html, body").animate({ scrollTop: 0 }, 600); 
        return false; 
    }); 
});
</script>



<!-- Script for slider to show year wise start -->
 <script type="text/javascript">
        	
        	$(document).ready(function(){

			  $("#Seventen ").click(function(){
			    $("#year2017").animate({opacity:"show"}, 2000);
			    // $("#year2017").animate({left:1000, height:100%, opacity:"show"}, 2000);
			     // $("#year2017").delay(5000).fadeIn(100);  
			    $("#year2018").hide();
			     $("#seventenRight").show();
			      // $("#year2018").show();
			      $("#Ninteen").hide();
			   	 $("#Seventen").hide();
			   	  // $("#seventenRight").show();
			    

			  });
			});
			</script>
			<script type="text/javascript">
			$(document).ready(function(){
			  $("#seventenRight").click(function(){
			    $("#year2018").animate({ opacity:"show"}, 2000);
			     // $("#year2018").delay(5000).fadeIn(100);  
			     $("#year2017").hide();
			     // $("#seventenRight").show();
			     $("#Ninteen").show();
			   	 $("#Seventen").show();
			   	  $("#seventenRight").hide();
			   	  // $("#seventenLeft").show();
			    

			  });
			});
			
			
        </script>

         <script type="text/javascript">
        	$(document).ready(function(){
			  $("#Ninteen").click(function(){
			    $("#year2019").animate({ opacity:"show"}, 2000);
			    // $("#year2019").delay(5000).fadeIn(100);  
			    $("#year2018").hide();
			     $("#seventenRight").hide();
			      $("#Ninteen").hide();
			      // $("#eighteenRight").hide();
			      $("#seventenLeft").show();
			      $("#Seventen").hide();

			      


			    
			  });
			});
        </script>

        <script type="text/javascript">
			$(document).ready(function(){
			  $("#seventenLeft").click(function(){
			    $("#year2018").animate({ opacity:"show"}, 2000);
			      // $("#year2018").delay(5000).fadeIn(100);  
			     $("#year2017").hide();
			      $("#year2019").hide();
			     $("#Seventen").show();
			     
			     $("#Ninteen").show();
			   	 // $("#Seventen").show();
			   	  
			   	  $("#seventenLeft").hide();
			    

			  });
			});
			
			
        </script>

       	<!-- reove of not ok -->
      <!--  	 <script type="text/javascript">
        	$('#seventenLeft').click(function() {

			   
			    $('.orange-border').removeClass('active');
			    $(this).addClass('active');
			});
        </script>

        <script type="text/javascript">
        	$('#seventenRight').click(function() {

		  
		    $('.orange-border:first').addClass('active');
		   
			});
        </script>

	         <script type="text/javascript">
	        	$('#Ninteen').click(function() {

			   
			   $('.green-border:first').addClass('active');
			    $(this).addClass('active');

				});
	        </script>
          <script type="text/javascript">
        	$('#seventenLeft').click(function() {

		  
		   $('.orange-border:first').addClass('active');
		    $(this).addClass('active');
			});
        </script>
        <script type="text/javascript">
        	$('#Seventen').click(function() {

		   
		   $('.blue-border:first').addClass('active');
		    $(this).addClass('active');
			});
        </script> -->


<script type="text/javascript">
$(document).ready(function(){
	console.warn("abc");
  $("#azad").on('click',function(){
    $("#year2017").show();
     $("#year2018").hide();
      $("#year2019").hide();
    $('.forMobPrev.active').removeClass('active');
    $(this).addClass('active');
  });
  $("#azad1").on('click',function(){
    $("#year2018").show();
    $("#year2019").hide();
     $("#year2017").hide();
     $('.forMobPrev.active').removeClass('active');
      $(this).addClass('active');
  });
   $("#azad2").on('click',function(){
    $("#year2019").show();
     $("#year2017").hide();
     $("#year2018").hide();
     $('.forMobPrev.active').removeClass('active');
     $(this).addClass('active');
  });

	
});
</script> 	
<!-- Script for thumbnail scroll next prev -->
         <script type="text/javascript">
        	$('#myulId #next-icon').click(function(e) {
				$('.green-border.active').removeClass('active').next().addClass('active');
					if($('.green-border:last').hasClass('active')){
				 	//alert();
				 	$(this).last().css({visibility:'hidden'});
				 }

				  $('#myulId #prev-icon').css({visibility:'visible'});

 				
			});
        </script>
		 <script type="text/javascript">
        	$('#myulId #prev-icon').click(function(e) {
			$('.green-border.active').removeClass('active').prev().addClass('active');
		   	 if($('.green-border:first').hasClass('active')){
				 	//alert();
				 	$(this).last().css({visibility:'hidden'});
				 }
		   	 	$('#myulId #next-icon').css({visibility:'visible'});

			});
        </script>

        
         <script type="text/javascript">
        	$('#myOlId #next-icon').click(function(e) {

	
		   	 $('.orange-border.active').removeClass('active').next().addClass('active');
		   	 if($('.orange-border:last').hasClass('active')){
				 	//alert();
				 	$(this).last().css({visibility:'hidden'});
				 }

				  $('#myOlId #prev-icon').css({visibility:'visible'})

			});
        </script>
        <script type="text/javascript">
        	$('#myOlId #prev-icon').click(function(e) {

	
		   	 $('.orange-border.active').removeClass('active').prev().addClass('active');
		   	  if($('.orange-border:first').hasClass('active')){
				 	//alert();
				 	$(this).last().css({visibility:'hidden'});
				 }
		   	 $('#myOlId #next-icon').css({visibility:'visible'});
			});
        </script>

         <script type="text/javascript">
        	$('#myBulId #next-icon').click(function(e) {
				 	$('.blue-border.active').removeClass('active').next().addClass('active');
			   	 if($('.blue-border:last').hasClass('active')){
					 	// alert("next");
					 	$(this).last().css({visibility:'hidden'});
					 }

					  $('#myBulId #prev-icon').css({visibility:'visible'});

			});
        </script>
        <script type="text/javascript">
        	$('#myBulId #prev-icon').click(function(e) {

	
		   	 $('.blue-border.active').removeClass('active').prev().addClass('active');
		   	  if($('.blue-border:first').hasClass('active')){
				 	// alert("prev hide");
				 	$(this).last().css({visibility:'hidden'});
				 }
		   	 $('#myBulId #next-icon').css({visibility:'visible'});

			});
        </script>
        <!--   <script type="text/javascript">
        	$('.blue-border.active').click(function(e) {
			 $('.blue-border.active').removeClass('active');
		   	  if($('.blue-border:first').hasClass('active')){
				 	// alert("prev hide");
				 	$(this).last().css({visibility:'hidden'});
				 }
		   	 $('.blue-border.active').css({visibility:'visible'});

			});
		</script> -->
		 <!-- <script>
    $(document).ready(function(){

        // $('#myBulId').on('click',function(){
        //     $('li.blue-border').off('click');
        // });
         $('#forliDisable li a').click(function(){return false;});
       
    });


    </script> -->
	<script type="text/javascript">
       	$('.blue-border').prop('onclick',null).off('click');
       </script> 
        <script type="text/javascript">
       	$('.orange-border').prop('onclick',null).off('click');
       </script> 
        <script type="text/javascript">
       	$('.green-border').prop('onclick',null).off('click');
       </script> 
   




  <!--  <script type="text/javascript">
 	$('#year-secound').carousel({
	  interval: false,
	});
   </script>
   <script type="text/javascript">
 	$('#year-third').carousel({
	  interval: false,
	});
   </script>
   <script type="text/javascript">
 	$('#year-first').carousel({
	  interval: false,
	});
   </script> -->
 <!--   <script type="text/javascript">
   	$(window).load(function() {
 
   $('#year-secound').carousel('pause');
 
	});
   </script> -->

 <!--    <script type="text/javascript">
	        	$('#year-secound').click(function() {

			    // console.log("Clicked");
			   $('.green-border:first').addClass('active');
			    $(this).addClass('active');
			    $('.blue-border .active').removeClass('active');
			    
				});
	        </script> -->

   <script type="text/javascript">
   	$(document).ready(function(){
	$(".carousel").carousel('pause');
		// interval : false

});

   </script>


   <script>
var prevScrollpos = window.pageYOffset;
window.onscroll = function() {
var currentScrollPos = window.pageYOffset;
  if (prevScrollpos > currentScrollPos) {
    document.getElementById("mobHumberger").style.top = "0";
  } else {
    document.getElementById("mobHumberger").style.top = "-60px";
  }
  prevScrollpos = currentScrollPos;
}
</script>



</body>
</html>