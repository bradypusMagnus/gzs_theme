<!DOCTYPE HTML>

<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />
		<link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/assets/slike/logo.png"> 
        <?php wp_head(); ?>
    </head>
	<body class="single is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
                <?php get_template_part('template-parts/nav', 'main');?>	

				<!-- Menu -->
					<section id="menu">

						<!-- Search -->
							<section>
								<form class="search" method="get" action="#">
									<input type="text" name="query" placeholder="Search" />
								</form>
							</section>
						<!-- Actions -->
							<section>
								<ul class="actions stacked">
									<li><a href="#" class="button large fit">Prijava</a></li>
								</ul>
							</section>

					</section>