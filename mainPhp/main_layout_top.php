<!DOCTYPE html>
<html>
<head>
	<title>Tristan Zaba</title>
	<link rel="shortcut icon" href="images/tabicon.png">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- UIkit V3 -->	
	<link rel="stylesheet" href="css/uikit.min.css" />
	<script type="text/javascript" src="js/uikit.min.js"></script>
	<script type="text/javascript" src="js/uikit-icons.min.js"></script>

	<!-- JQuery -->
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>

	<!-- Zaba -->
	<link rel="stylesheet" href="css/zaba.css" />

	<script type="text/javascript">


		
		function buttonClick() {
		// $("#add").on("click", function() {
			$("<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.</p>").appendTo(".zaba-content");
		}

		function init() {
			document.getElementById("top-nav-bar").blur();
		}
		// });

	</script>

</head>

<body onload="init();" >

	<!-- <img src="https://images.pexels.com/photos/414171/pexels-photo-414171.jpeg" style="height: 80px" class="widthSet"> -->

	<div class="zaba-content">

		<div class="uk-background-cover uk-background-fixed uk-height-medium uk-panel uk-flex uk-flex-center uk-flex-middle" style="background-image: url(images/banner.jpg);">
			<div style="background: #00000091; height: -webkit-fill-available; width: -webkit-fill-available; position: absolute;">
            	<t class="" style="margin-top: 100px;">Tristan Zaba</t>            
            	</div>
    	</div>
		

		<!-- <div style="background-image: url('images/banner.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center center; background-attachment: fixed; height: 240px;">

			<div style="background: #00000091; height: -webkit-fill-available;">
				<t>Tristan Zaba</t>
			</div>
			
		</div> -->

		<nav id="top-nav-bar" class="uk-navbar-container" uk-navbar uk-sticky="top: 0;" style="background: #000000cc; margin-top: -50px;">
			<div class="uk-navbar-left">
				<ul class="uk-navbar-nav">
					<li class="uk-hidden@s"><a href="#offcanvas-slide" uk-toggle><span uk-icon="icon: menu; ratio: 1.3"></span></a></li>	           
				</ul>
			</div>
			<div class="uk-navbar-right">
				<ul class="uk-navbar-nav">
					<li class=""><a href="index.php"><span uk-icon="icon: home; ratio: 1.3"></span></a></li>	
					<li class="uk-visible@s"><a href="bio.php">Bio</a></li>
					<li class="uk-visible@s"><a href="musical-works.php">Works</a></li>
					<li class="uk-visible@s"><a href="news-events.php">News</a></li>
					<li class="uk-visible@s"><a href="contact.php">Contact</a></li> 
				</ul>
			</div>

			
		</nav>

		<div ></div>

		<div class="uk-container " style="background: #ffffff; padding-top: 40px; padding-bottom: 60px">

			<!-- SIDE NAV BAR -->

			<!-- <a href="#offcanvas-slide" class="uk-button uk-button-default" uk-toggle>Open</a> -->

			<div id="offcanvas-slide" uk-offcanvas>
			    <div class="uk-offcanvas-bar">

			        <ul class="uk-nav uk-nav-default">
		            <li style="font-size: 25px;" class=""><a href="bio.php">Bio</a></li>
					<li style="font-size: 25px;" class=""><a href="musical-works.php">Works</a></li>
					<li style="font-size: 25px;" class=""><a href="news-events.php">News</a></li>
					<li style="font-size: 25px;" class=""><a href="contact.php">Contact</a></li> 
			        </ul>

			    </div>
			</div>

	