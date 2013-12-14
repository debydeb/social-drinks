<?php
/**
 * Template Name: index
 *
 */
?>
<!DOCTYPE html>
	<!--[if IE 7]>
	<html class="ie ie7" <?php language_attributes(); ?>>
	<![endif]-->
	<!--[if IE 8]>
	<html class="ie ie8" <?php language_attributes(); ?>>
	<![endif]-->
	<!--[if !(IE 7) | !(IE 8)  ]><!-->
	<html <?php language_attributes(); ?>>
	<!--<![endif]-->

	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Social Drinks</title>

		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		
		
		
		<?php wp_head(); ?>


		<script src="<?php echo get_template_directory_uri(); ?>-child/js/jquery-1.8.2.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>-child/js/jquery.scrollTo-1.4.3.1.min.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>-child/js/jquery.parallax-1.1.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>-child/js/jquery.easing.1.3.js"></script>
		
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>-child/js/jquery.color.js"></script>
		<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>-child/js/javascript.js"></script>
		
	</head>
	
	<body style="position: relative;">
