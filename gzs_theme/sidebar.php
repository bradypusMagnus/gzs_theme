<section id="sidebar">
<ul>
<?php if(is_front_page()):
    get_template_part('template-parts/fp', 'logo');
endif;
    if(is_active_sidebar('page-sidebar')):
        dynamic_sidebar('page-sidebar');
endif;
?>
</ul>
    <section id="footer">
        <ul class="icons">
            <li><a href="#" class="fa-youtube"><span class="label">Twitter</span></a></li>
            <li><a href="#" class="fa-facebook-f"><span class="label">Facebook</span></a></li>
            <li><a href="#" class="fa-instagram"><span class="label">Instagram</span></a></li>
            <li><a href="#" class="fa-envelope"><span class="label">Email</span></a></li>
            <li><a href="#" class="fa-discord"></i><span class="label">Discord</span></a></li>
        </ul>
        <p class="copyright">&copy;
			<?php
				echo date_i18n(
                    _x( 'Y', 'copyright date format', 'gzs_theme' ));
                echo bloginfo( 'name' ); ?>
		</p>
    </section>
</section>
<?php get_footer();?>