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
		<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/masonry-properties.js"></script><!-- The external masonry properies file. -->
	</head>
	
<body <?php body_class(); ?>>
	
	<!-- The div 'container' includes all visible site content inside the margins. -->
	<div class="container clearfix">
	
		<!-- site-header begins. -->
		<header class="site-header">
		
			<div class="header-title">	
				<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
			</div><!-- /header-title -->
			
			<!-- <div class="header-contact">
				<p><a href="mailto:<?php bloginfo('admin_email'); ?>">get in touch</a></p>
			</div> -->
		
			<nav class="site-nav">
				<?php
				$args = array(
					'theme_location' => 'primary'
				);
				wp_nav_menu( $args ); ?>
			</nav>
			
		</header><!-- /site-header -->