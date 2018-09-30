<!DOCTYPE HTML>
<!--
	Road Trip by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
<!--		<title>Road Trip by TEMPLATED</title>-->
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
<!--		<link rel="stylesheet" href="assets/css/main.css" />-->
    <?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

		<!-- Header -->
			<header id="header" <?php if( is_admin_bar_showing() ){ echo 'style="margin-top:32px;"'; } ?>>
				<a href="#menu"><span>Menu</span></a>
			</header>

		<!-- Nav -->
			<nav id="menu">
				<?php wp_nav_menu( array( 'theme_location' => 'roadtrip-menu', 'menu_class' => 'links' ) ); ?>
			</nav>
