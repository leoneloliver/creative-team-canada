<?php
$url = $_SERVER['REQUEST_URI'];
$pieces = explode("/",$url);
@$url = $pieces[2]; // piece2

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $titlepage;?></title>
<meta charset="utf-8">
<meta name="description" content="Your description">
<meta name="keywords" content="Your keywords">
<meta name="author" content="Creative Team Canada | Leonel Oliveira">
<link rel="icon" href="<?php echo base_url()?>/images/favicon.ico.gif" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo base_url()?>/images/favicon.ico" type="image/x-icon" />
<link rel="stylesheet" href="<?php echo base_url()?>/css/reset.css">
<link rel="stylesheet" href="<?php echo base_url()?>/css/style.css">
<link rel="stylesheet" href="<?php echo base_url()?>/css/slider.css">
<link rel="stylesheet" href="<?php echo base_url()?>/css/superfish.css">
<link rel="stylesheet" href="<?php echo base_url()?>/css/grid.css" />
<link rel="stylesheet" href="<?php echo base_url()?>/css/form.css" />
<link href='http://fonts.googleapis.com/css?family=Lato:400,400italic,700' rel='stylesheet' type='text/css'>
<script src="<?php echo base_url()?>/js/jquery-1.7.1.min.js"></script>
<script src="<?php echo base_url()?>/js/superfish.js"></script>
<script src="<?php echo base_url()?>/js/jquery.easing.1.3.js"></script>
<script src="<?php echo base_url()?>/js/jquery.ui.totop.js"></script>
<script src="<?php echo base_url()?>/js/tms-0.4.1.js"></script>
<script src="<?php echo base_url()?>/js/forms.js"></script>
<script>
	    $(window).load(function(){
			$('.slider')._TMS({
              show:0,
              pauseOnHover:false,
              prevBu:'.prev',
              nextBu:'.next',
              playBu:false,
              duration:800,
              preset:'diagonalFade', 
              pagination:true,//'.pagination',true,'<ul></ul>'
              pagNums:false,
              slideshow:8000,
              numStatus:false,
              banners:false,
		      waitBannerAnimation:false,
			  progressBar:false
			})	
		}); 
		jQuery(document).ready(function() {
			$().UItoTop({ easingType: 'easeOutQuart' });

			$("#logomini").hide().css({"margin-top":"17px","width":"186px"});
			$("#logomini img").click(function(){
				window.location = "<?php echo base_url(); ?>";
			});
			$(window).scroll(function() {
		      if ($(this).scrollTop() > 100) {
		        $(".menu_bg").css({"position":"fixed","width":"100%","margin-top":"-103px","z-index":"99999999"});
		        $(".menu_bg").css({"opacity":"0.95","-moz-opacity":"0.95","filter":"alpha(opacity=95)"});
		        $(".menu_bg").css({"-moz-box-shadow":"0px 5px 18px #88","-webkit-box-shadow":"0px 5px 18px #888","box-shadow":"0px 5px 18px #888"});
		        $(".middle, .molde").css({"margin-top":"65px"});
		        $("#logomini").show();
		        $("#logomini img").fadeIn(700);
		        $("#first-item").hide();
		      }else{

		      $("#logomini").hide();
		       $(".menu_bg").css({"position":"relative","width":"100%","margin-top":"0","z-index":"99999999"});
		       $(".menu_bg").css({"opacity":"0.99","-moz-opacity":"0.99","filter":"alpha(opacity=99)"});
		       $(".menu_bg").css({"-moz-box-shadow":"0px 0px 0px #fff","-webkit-box-shadow":"0px 0px 0px #fff","box-shadow":"0px 0px 0px #fff"});
		       $(".middle, .molde").css({"margin-top":"0"});
		       $("#logomini img").hide();
		       $("#first-item").show();
		      }
		      
		    });
		}); 
		
</script>
<!--[if lt IE 8]>
   <div style=' clear: both; text-align:center; position: relative;'>
     <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
       <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
    </a>
  </div>
<![endif]-->
<!--[if lt IE 9]>
	<script src="js/html5.js"></script>
	<link rel="stylesheet" href="css/ie.css">
	<link href='http://fonts.googleapis.com/css?family=Lato:400' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:700' rel='stylesheet' type='text/css'>
<![endif]-->
</head>
<body class="page1">
<!-- Header -->
<header>
  <div class="header_top">
    <div class="container_16">
      <div class="grid_16">
	      <h1><a href="<?php echo base_url()?>"><img src="<?php echo base_url()?>/images/logo.png" alt=""></a><span>No job is too small or too complex for us.</span></h1>
	      <div class="contacts">
	      	<a href="<?php echo base_url(); ?>contact" class="icone-canada"><img src="<?php echo base_url()?>/images/icone_canada.jpg"></a>
	      	<a href="<?php echo base_url(); ?>contact">Contact</a>
	      	<a href="#">Member Area</a>
	      	<div class="clear"></div>
            <div class="phone1 phonetop">Phone: <span><a href="<?php echo base_url(); ?>contact">416-488-9895</a></span></div>
	      </div>
      </div>
    </div>
  </div>
  <div class="menu_border">
  	<div class="menu_bg">
		<div class="container_16">
		  	<div class="grid_16 ">
		    	<nav>
		        <ul class="sf-menu">
		        <li id="logomini">
		        		<img src="<?php echo base_url()?>/images/logomini.png" alt="">
		        </li>
		          <li <?php if($url=="" or $url=="about"){echo "class='current'";} ?> id="first-item"><a href="<?php echo base_url()?>">home</a></li>
		          <li <?php if($url=="service"){echo "class='current'";} ?>><a href="<?php echo base_url()?>service">Services</a>
		            <ul>
		              <li><a href="<?php echo base_url()?>service/detail/1">MARKETING & PROMOTIONS<br><span>SEO | Pay per click</span></a></li>
		              <li><a href="<?php echo base_url()?>service/detail/2">GRAPHIC DESIGN<br><span>Logos | Magazines</span></a>
		                <!-- <ul>
		                  <li><a href="#">Software<br><span>Applying technologies</span></a></li>
		                  <li><a href="#">Technology<br><span>Linking Employees &amp; Strategy</span></a></li>
		                  <li><a href="#">FAQ<br><span>Feedback &amp; Appraisals</span></a></li>
		                </ul> -->
		              </li>
		              <li><a href="<?php echo base_url()?>service/detail/3">WEB DESIGN<br><span>Websites | Banners | Concept</span></a></li>
		              <li><a href="<?php echo base_url()?>service/detail/4">PRINT SERVICES<br><span></span></a></li>
		              <li><a href="<?php echo base_url()?>service/detail/5">COPYWRITE &TRANSLATION<br><span></span></a></li>
		              <li><a href="<?php echo base_url()?>service/detail/6">INTERIOR DESIGN<br><span></span></a></li>
		            </ul>
		          </li>
		          <li <?php if($url=="client"){echo "class='current'";} ?>><a href="<?php echo base_url()?>client">Clients</a> </li>
                  <li <?php if($url=="project" or $url=="product"){echo "class='current'";} ?>><a href="<?php echo base_url()?>project">Projects</a></li>
                  <li <?php if($url=="contact"){echo "class='current'";} ?>><a href="<?php echo base_url()?>contact">Contact us</a></li>
		        </ul>
		      </nav>
		    </div>
	    <div class="clear"></div>
	  </div>
   </div>
   </div>
   <div class="slider_bg">
	   <div class="container_16">
	   	<div class="grid_16">
	      <div class="slider-relative">
		      <div class="slider-block">
		          <div class="slider">
		              <ul class="items">
		                  <li><img src="images/slide1.jpg" alt="" /></li>
		                  <li><img src="images/slide2.jpg" alt="" /></li>
		                  <li><img src="images/slide3.jpg" alt="" /></li>
		              </ul>
		          </div>
		      </div>
		  </div>
	      <div class="clear"></div>
	    </div>
    </div>
</div>
</header>
<!-- end header -->