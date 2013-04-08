<!DOCTYPE html>
<!-- HTML5 Mobile Boilerplate -->
<!--[if IEMobile 7]><html class="no-js iem7"><![endif]-->
<!--[if (gt IEMobile 7)|!(IEMobile)]><!--><html class="no-js" lang="en"><!--<![endif]-->
<html <?php language_attributes(); ?>>

<!-- HTML5 Boilerplate -->
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"><!--<![endif]-->

<head>

	<meta charset="utf-8">
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

	<!-- Meta descriptions -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="description" content="This is the home of graphic designer Courtney Mclean.">
	<meta name="keywords" content="graphic design, front-end, developer, responsive, grid, system, web design">
	<meta name="author" content="www.courtneymclean.co.uk">
	<meta http-equiv="cleartype" content="on">
	<link rel="shortcut icon" href="<?php echo THEME_DIR; ?>/path/favicon.ico" /> 
	
	<!-- Responsive and mobile friendly stuff -->
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, target-densitydpi=160dpi, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">

	<!-- Title -->
    <title><?php wp_title(); ?> - <?php bloginfo( 'name' ); ?></title>  

	<!-- Stylesheets -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />

	<!-- Google Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,700,300italic,700italic' rel='stylesheet' type='text/css'>


	<!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements and feature detects -->
	<script src="js/modernizr-2.5.3-min.js"></script>
      
    <!--=== WP_HEAD() ===-->  
    <?php wp_head(); ?>  
	
	</head>
	
	
	<body <?php body_class(); ?>>  
	
	
	<!-- Header -->
	<header>
		<div class="container">
		
		<!-- logo -->
			<div class="three col">
				<a href="<?php echo home_url(); ?>" class="logo" title="Courtney Mclean Graphic Design Logo"><img src="<?php bloginfo('template_directory'); ?>/images/courtneymclean_logotype_v2.png" class="scale-with-grid" alt="" /></a>
			</div>

		<!-- menu -->
			<div class="five col right">
				<nav class="right nav-collapse" role="navigation">
					<ul>
						<?php wp_list_pages('sort_column=menu_order&title_li='); ?>
					</ul>
				</nav>
			</div>
		</div>
	
	<!-- end header -->
	</header>
	
