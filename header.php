<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<!-- This file defines the content and behaviour of the theme header. -->
	<!-- Putting header information in place, including fonts. -->
	<head>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	</head>
	
<body <?php body_class(); ?>>
	
	<!-- The div 'container' includes all visible site content inside the margins. -->
	<div class="container clearfix">
	
		<!-- site-header begins. -->
		<header class="site-header">
		
			<nav class="site-nav">
				<?php
				$args = array(
					'theme_location' => 'primary'
				);
				wp_nav_menu( $args ); ?>
			</nav>
			
		</header><!-- /site-header -->