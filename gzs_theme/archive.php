<?php get_header("single");?>
<!-- Main -->
<div id="main">

<!-- Post -->
<?php if(have_posts()) :
        while(have_posts()): 
            the_post();   
        //echo the_archive_title();
        get_template_part('template-parts/content', 'excerpt');  
        endwhile;
        else : echo wpautop('<section class="post"><p>Najdena ni bila nobena objava.</p></section>');
endif; ?>
<!-- Pagination -->
    <?php get_template_part('template-parts/pagination');?>

</div>
<?php 
get_footer();
?>