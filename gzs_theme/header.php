<!DOCTYPE HTML>

<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
		<link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/assets/slike/logo.png"> 
        <?php wp_head(); ?>
    </head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">
				<?php get_template_part('template-parts/nav', 'main');?>
				<?php get_template_part('template-parts/nav', 'login');?>	
