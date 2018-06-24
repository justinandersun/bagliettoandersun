<?php
	/* Template Name: Welcome Page */ 
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<link href="https://fonts.googleapis.com/css?family=Arvo:400,400i,700,700i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Vollkorn+SC:400,600,700,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Marvel" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600,600i,700,700i" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<div id="wrapper" class="hfeed">
		<div class="top-bar">
			<div class="top-bar-segment" id="top-1"></div>
			<div class="top-bar-segment" id="top-2"></div>
			<div class="top-bar-segment" id="top-3"></div>
			<div class="top-bar-segment" id="top-4"></div>
			<div class="top-bar-segment" id="top-5"></div>
			<div class="top-bar-segment" id="top-6"></div>
			<div class="top-bar-segment" id="top-7"></div>
			<div class="top-bar-segment" id="top-8"></div>
			<div class="top-bar-segment" id="top-9"></div>
			<div class="top-bar-segment" id="top-10"></div>
		</div>
		<header id="welcome-header" role="banner">
			<div id="welcome-buttons">
				<a class="sign-up-button" href="register">Sign up</a>
				<a class="log-in-button" href="login">Log in</a>
			</div>
			<p id="welcome-site-title">Baglietto & Andersun</p>
			<p id="welcome-site-overview">Political Intelligence</p>
		</header>

		<div id="welcome-content">
			<p class="welcome-tag-line">We provide data for important policy decisions.</p>
			<p class="welcome-tag-line">Gain a competitive edge with our political intelligence software.</p>
			<a class="request-demo" href="mailto:bagliettoandersun@gmail.com?subject=Baglietto%20Andersun%20Demo%20Request">Request a Demo</a>
		</div>
		
		<div class="top-bar">
			<div class="top-bar-segment" id="top-1"></div>
			<div class="top-bar-segment" id="top-2"></div>
			<div class="top-bar-segment" id="top-3"></div>
			<div class="top-bar-segment" id="top-4"></div>
			<div class="top-bar-segment" id="top-5"></div>
			<div class="top-bar-segment" id="top-6"></div>
			<div class="top-bar-segment" id="top-7"></div>
			<div class="top-bar-segment" id="top-8"></div>
			<div class="top-bar-segment" id="top-9"></div>
			<div class="top-bar-segment" id="top-10"></div>
		</div>
		<footer id="footer" role="contentinfo">
			<p class="legal-notes">
				<a href="<?php echo home_url(); ?>/privacy">Privacy Policy</a> | <a href="<?php echo home_url(); ?>/terms">Terms &amp; Conditions</a> | <a href="<?php echo home_url(); ?>/contact">Contact Us</a> 
			</p>
			<p class="copyright">
				<?php echo '&copy; ', date( 'Y' ), ' Baglietto & Andersun. All Rights Reserved.' ?>
			</p>
		</footer>

	</div>
<?php wp_footer(); ?>
</body>
</html>