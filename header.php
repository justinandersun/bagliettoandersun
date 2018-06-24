<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width" />
	<link href="https://fonts.googleapis.com/css?family=Arvo:400,400i,700,700i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Vollkorn+SC:400,600,700,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Marvel" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Crimson+Text:400,400i,600,600i,700,700i" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="<?php echo get_stylesheet_directory_uri(); ?>/scripts/account.js"></script>
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
		<header id="header" role="banner">
			<div class="user-account">
				<?php global $current_user; wp_get_current_user(); ?>
				<?php if ( is_user_logged_in() ) {
					echo '<p class="user-account-summary">';
					echo '<span class="user-account-img">'.get_avatar($current_user->ID,25).'</span>';
					echo '&ensp;';
					echo '<span class="user-account-name">'.$current_user->display_name.'</span>';
					echo '</p>';
					echo '<div class="user-account-details">
							<p class="user-account-detail"><a href="'.home_url().'/wp-admin/edit.php">Create Content</a></p>
							<p class="user-account-detail"><a href="'.home_url().'/user/'.$current_user->ID.'">View Profile</a></p>
							<p class="user-account-detail"><a href="'.home_url().'/account">Manage Account</a></p>
							<p class="user-account-detail"><a href="'.home_url().'/account/password">Change Password</a></p>
							<p class="user-account-detail"><a href="'.home_url().'/logout">Log out</a></p>
						</div>';
				} else { }
				?>
			</div>
			<p id="site-title">Baglietto & Andersun</p>
			<p id="site-overview">Political Intelligence</p>
		</header>

		<div id="container">
			<div id="nav">
				<a href="<?php echo home_url(); ?>/news" <?php if (is_home()) { echo " class=\"current-page\""; } else { echo " class=\"normal-page\"";}?>>News</a>
				<a href="<?php echo home_url(); ?>/committees" <?php if (is_page('California State Committees')) { echo " class=\"current-page\""; } else { echo " class=\"normal-page\"";}?>>Committees</a>
				<a href="<?php echo home_url(); ?>/assembly" <?php if (is_page('California State Assembly Members')) { echo " class=\"current-page\""; } else { echo " class=\"normal-page\"";}?>>Assembly</a>
				<a href="<?php echo home_url(); ?>/senate" <?php if (is_page('California State Senate Members')) { echo " class=\"current-page\""; } else { echo " class=\"normal-page\"";}?>>Senate</a>
			</div>
