<!DOCTYPE html>
<html>
<head>
	<script type="text/javascript" src="/TechnoMLM/js/jquery-3.4.1.min.js"></script>
	<title>TechnoMLM</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, intial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="/TechnoMLM/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/TechnoMLM/css/bootstrap.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
	<link rel="stylesheet" type="text/css" href="/TechnoMLM/css/style.css">
	<script src="/TechnoMLM/js/jssor.slider-28.1.0.min.js" type="text/javascript"></script>
	<script type="text/javascript">
        window.jssor_1_slider_init = function() {

            var jssor_1_SlideoTransitions = [
              [{b:-1,d:1,ls:0.5},{b:0,d:1000,y:5,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:200,d:1000,y:25,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:400,d:1000,y:45,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:600,d:1000,y:65,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:800,d:1000,y:85,e:{y:6}}],
              [{b:-1,d:1,ls:0.5},{b:500,d:1000,y:195,e:{y:6}}],
              [{b:0,d:2000,y:30,e:{y:3}}],
              [{b:-1,d:1,rY:-15,tZ:100},{b:0,d:1500,y:30,o:1,e:{y:3}}],
              [{b:-1,d:1,rY:-15,tZ:-100},{b:0,d:1500,y:100,o:0.8,e:{y:3}}],
              [{b:500,d:1500,o:1}],
              [{b:0,d:1000,y:380,e:{y:6}}],
              [{b:300,d:1000,x:80,e:{x:6}}],
              [{b:300,d:1000,x:330,e:{x:6}}],
              [{b:-1,d:1,r:-110,sX:5,sY:5},{b:0,d:2000,o:1,r:-20,sX:1,sY:1,e:{o:6,r:6,sX:6,sY:6}}],
              [{b:0,d:600,x:150,o:0.5,e:{x:6}}],
              [{b:0,d:600,x:1140,o:0.6,e:{x:6}}],
              [{b:-1,d:1,sX:5,sY:5},{b:600,d:600,o:1,sX:1,sY:1,e:{sX:3,sY:3}}]
            ];

            var jssor_1_options = {
              $AutoPlay: 1,
              $LazyLoading: 1,
              $CaptionSliderOptions: {
                $Class: $JssorCaptionSlideo$,
                $Transitions: jssor_1_SlideoTransitions
              },
              $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$
              },
              $BulletNavigatorOptions: {
                $Class: $JssorBulletNavigator$,
                $SpacingX: 20,
                $SpacingY: 20
              }
            };

            var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

            /*#region responsive code begin*/

            var MAX_WIDTH = 1600;

            function ScaleSlider() {
                var containerElement = jssor_1_slider.$Elmt.parentNode;
                var containerWidth = containerElement.clientWidth;

                if (containerWidth) {

                    var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                    jssor_1_slider.$ScaleWidth(expectedWidth);
                }
                else {
                    window.setTimeout(ScaleSlider, 30);
                }
            }

            ScaleSlider();

            $Jssor$.$AddEvent(window, "load", ScaleSlider);
            $Jssor$.$AddEvent(window, "resize", ScaleSlider);
            $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
            /*#endregion responsive code end*/
        };
    </script>
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300italic,regular,italic,700,700italic&subset=latin-ext,greek-ext,cyrillic-ext,greek,vietnamese,latin,cyrillic" rel="stylesheet" type="text/css" />	
</head>
<body>
<!-- start top header section -->
	<section class="topheader">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
						<div class="row">
						<div class="header">
							<nav class="navbar navbar-expand-lg">
								<div class="logo m-0">
									<a href="index.php"><img src="/TechnoMLM/images/logo.png"></a>
								</div>
								<div class="navbarbutton">
									<button class="navbar navbar-toggler" data-toggle="collapse" data-target="#mynav">
									<span><i class="fas fa-bars"></i></span>
								</div>
								</button>
								<div class="add_int">
									<span><a href="addInterest.php"><img src="images/add.png" alt=""></a></span>
								</div>
								<div class="collapse navbar-collapse" id="mynav">
									<ul class="navbar-nav">
										<li class="nav-item"><a href="index.php" class="nav-link">HOME</a></li>
										<li class="nav-item dropdown">
											<a href="#" class="nav-link" data-toggle="dropdown" aria-expanded="false">DEMO<i class="fas fa-chevron-down"></i></a>
											<div class="dropdown-menu">
												<a href="present.php" class="dropdown-item">Present Demo</a>
												<a href="myplans.php" class="dropdown-item">Binary Mlm Demo</a>
												<a href="courses.php" class="dropdown-item">Donation Mlm Demo</a>
												<a href="expertclub.php" class="dropdown-item">Matrix Mlm Demo</a>
											</div>
										</li>
										<li class="nav-item dropdown">
											<a href="#" class="nav-link" data-toggle="dropdown" aria-expanded="false">MLM PLANS<i class="fas fa-chevron-down"></i></a>
											<div class="dropdown-menu">
														<div class="large_bx">
																<div class="dropdown-1"> 
																	<a href="findpartner.php" class="dropdown-item">Biniary Plan</a>
																	<a href="myplans.php" class="dropdown-item">Matrix Plan</a>
																	<a href="courses.php" class="dropdown-item">Unilevel Plan</a>
																	<a href="expertclub.php" class="dropdown-item">Board Plan</a>														
																</div>	
																<div class="dropdown-1"> 
																	<a href="findpartner.php" class="dropdown-item">Party MLM Plan</a>
																	<a href="myplans.php" class="dropdown-item">Donation Plan</a>
																	<a href="courses.php" class="dropdown-item">Stair Step Plan</a>
																	<a href="expertclub.php" class="dropdown-item">Australian X-up Plan</a>	
																</div>
																<div class="dropdown-1"> 
																	<a href="findpartner.php" class="dropdown-item">Spill Over Binary Plan</a>
																	<a href="myplans.php" class="dropdown-item">Generation MLM Plan</a>
																	<a href="courses.php" class="dropdown-item">Australioan Binary Plan</a>
																	<a href="expertclub.php" class="dropdown-item">Hybrid MLM</a>															
																</div>																							
														</div>			
											</div>
										</li>
										<li class="nav-item"><a href="notification.php" class="nav-link">PRICING</a></li>
										<li class="nav-item"><a href="opportunity.php" class="nav-link">ADD ON</a></li>
										<li class="nav-item dropdown">
											<a href="#" class="nav-link" data-toggle="dropdown" aria-expanded="false">COMPANY<i class="fas fa-chevron-down"></i></a>
											<div class="dropdown-menu">
												<a href="findpartner.php" class="dropdown-item">About Us</a>
												<a href="myplans.php" class="dropdown-item">Contact Us</a>
												<a href="courses.php" class="dropdown-item">Development Process</a>
												<a href="expertclub.php" class="dropdown-item">Team</a>
												<a href="quotes.php" class="dropdown-item">Testimonial</a>				
											</div>
										</li>
										<li class="nav-item dropdown">
											<a href="#" class="nav-link" data-toggle="dropdown" aria-expanded="false">MORE<i class="fas fa-chevron-down"></i></a>
											<div class="dropdown-menu">
												<a href="findpartner.php" class="dropdown-item">MLM Blog</a>
												<a href="myplans.php" class="dropdown-item">Features</a>
												<a href="courses.php" class="dropdown-item">FAQ</a>
												<a href="expertclub.php" class="dropdown-item">Vission History</a>
												<a href="quotes.php" class="dropdown-item">Resources</a>					
												<a href="settingview.php" class="dropdown-item">MLM Calculator</a>
											</div>
										</li>
										
									</ul>
								</div>
								<div class="bar_span">
									<span></span>
									<span></span>
									<span></span>
								</div>
							</nav>
						
						</div>
						</div>
				</div>
			</div>
		</div>
		<div class="sidenav">
			<div class="sidenav_bx">
					<div class="bx_details">
							<img src="/TechnoMlm/images/logo.png" alt="">
							<h4>I was seeking out for MLM computer program that gives the finest arrangement for all kind of multi-level promoting companies. I listened around Unbounded MLM Computer program Company that gives a free demo to know how the computer program works.</h4>
							<ul>
								<li><i class="fas fa-building"></i>G-69, Sector-63<br><span>Noida(U.P)</span> </li>
								<li><i class="fas fa-mobile"></i>+91-120-4377575<br><span>Mon-Fri 10:00am-7:00pm</span> </li>
								<li><i class="fas fa-envelope-open-text"></i>info@techgreatia.com<br> <span>24 X 7 online support</span> </li>
							</ul>
					</div>
					<div class="cross_circlw">
						<span><i class="fas fa-times"></i></span>
					</div>
			</div>
		</div>
	</section>
<!-- end top header section -->


	



<script>
$(document).ready(function(){
  $(".bar_span").click(function(){
    $(".sidenav").animate({
      width: "toggle"
    });
  });
  $(".cross_circlw").click(function(){
  $(".sidenav").hide({
      width: "toggle"
    });
});
});
</script>



 