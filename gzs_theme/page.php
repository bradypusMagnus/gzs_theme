<?php get_header();?>
				<!-- Main -->
					<div id="main">
						<?php while(have_posts()) : the_post(); ?>
							<article class="post" id="post-<?php the_ID(); ?>">
								<header>
									<div class="title">
										<h2><?php the_title(); ?></h2>
										<p><?php the_time( get_option( 'date_format' ) ); ?></p>
									</div>
								</header>
								<p><?php the_content('Več...'); ?></p>
							</article>
						<?php endwhile; ?>
					</div>
<?php get_sidebar('new'); ?>
<?php get_footer();?>