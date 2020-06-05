<?php get_header();?>
<div id="main">
<!-- Post -->
<?php if(have_posts()) :
        while(have_posts()): 
            the_post();   
        get_template_part('template-parts/content', 'excerpt');  
        endwhile;
        else : echo wpautop('<section class="post"><p>Stran še nima objav. Prosimo obiščite nas kasneje.</p></section>');
endif; ?>
<!-- Pagination -->
   <?php get_template_part('template-parts/pagination');?>

</div><!-- konec main -->
<?php 
get_sidebar();
?>