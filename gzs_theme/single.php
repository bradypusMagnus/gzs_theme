<?php get_header('single');?>
					<div id="main">
						<?php while(have_posts()) : the_post(); ?>
							<!--<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>></article>-->
							<article class="post" id="post-<?php the_ID(); ?>">
								<header>
								<?php get_template_part('/template-parts/content', 'header'); ?>
								</header>
								<p><?php the_content('Več...'); ?></p>
								<footer>
									<ul class="actions"></ul>
									<ul class="stats">
										<li><?php get_template_part('/template-parts/meta', 'categories'); ?></li>
									</ul>
								</footer>
							</article>
						<?php endwhile; ?>
						<?php comments_template(); ?>
					</div>
<?php get_footer();?>