<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width">
		<title><?php bloginfo('name'); ?></title>
		<?php wp_head(); ?>
	</head>
	
<body <?php body_class(); ?>>
	
	<div class="container">
	
		<!-- site-header -->
		<header class="site-header">
		
			<div class="header-title">	
				<h1><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></h1>
			</div><!-- /header-title -->
		
			<nav class="site-nav">
				<?php
				$args = array(
					'theme_location' => 'primary'
				);
				wp_nav_menu( $args ); ?>
			</nav><!-- /site-nav -->
			
		</header><!-- /site-header -->