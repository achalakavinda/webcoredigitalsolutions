<!doctype html>
<!-- Martex - Software, App, SaaS & Startup Landing Pages Pack design by DSAThemes (http://www.dsathemes.com) -->
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="author" content="DSAThemes">
	<meta name="description"
		content="Welcome to WebCore Digital Solutions, where your business’s digital potential comes to life. We specialize in crafting customized web development, SEO, and social media strategies that elevate your brand and drive tangible results. Whether you’re a startup or an established business, our expert team is here to help you succeed online.">
	<meta name="keywords"
		content="Web development in perth, development in perth, webisite, social media marketing in perth">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- SITE TITLE -->
	<title>Web Core Digital Solutions - Digital Solutions that drives results for your business</title>

	<!-- FAVICON AND TOUCH ICONS -->
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="icon" href="images/logo.jpg" type="image/x-icon">
	<link rel="apple-touch-icon" sizes="152x152" href="images/logo.jpg">
	<link rel="apple-touch-icon" sizes="120x120" href="images/logo.jpg">
	<link rel="apple-touch-icon" sizes="76x76" href="images/logo.jpg">
	<link rel="apple-touch-icon" href="images/logo.jpg">
	<link rel="icon" href="images/logo.jpg" type="image/x-icon">

	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700&amp;display=swap"
		rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&amp;display=swap"
		rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&amp;display=swap"
		rel="stylesheet">

	<!-- BOOTSTRAP CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">

	<!-- FONT ICONS -->
	<link href="css/flaticon.css" rel="stylesheet">

	<!-- PLUGINS STYLESHEET -->
	<link href="css/menu.css" rel="stylesheet">
	<link id="effect" href="css/dropdown-effects/fade-down.css" media="all" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/owl.carousel.min.css" rel="stylesheet">
	<link href="css/owl.theme.default.min.css" rel="stylesheet">
	<link href="css/lunar.css" rel="stylesheet">

	<!-- ON SCROLL ANIMATION -->
	<link href="css/animate.css" rel="stylesheet">
	<!-- TEMPLATE CSS -->
	<link href="css/crocus-theme.css" rel="stylesheet">
	<!-- RESPONSIVE CSS -->
	<link href="css/responsive.css" rel="stylesheet">
</head>

<body>

	<!-- PRELOADER SPINNER
		============================================= -->
	<div id="loading" class="loading--theme">
		<div id="loading-center"><span class="loader"></span></div>
	</div>

	<!-- PAGE CONTENT
		============================================= -->
	<div id="page" class="page font--jakarta">
        
		@include("layouts.components.header")

        @yield("content")

		@include("layouts.components.footer")


	</div> <!-- END PAGE CONTENT -->




	<!-- EXTERNAL SCRIPTS
		============================================= -->
	<script src="js/jquery-3.7.0.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/modernizr.custom.js"></script>
	<script src="js/jquery.easing.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/menu.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/pricing-toggle.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/quick-form.js"></script>
	<script src="js/jquery.validate.min.js"></script>
	<script src="js/jquery.ajaxchimp.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/lunar.js"></script>
	<script src="js/wow.js"></script>

	<!-- Custom Script -->
	<script src="js/custom.js"></script>


	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-GSZN6P1WTX"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());

		gtag('config', 'G-GSZN6P1WTX');
	</script>


</body>




</html>