<?php get_header("single");?>
<div id="main">
<h2>Rezultati iskanja: <?php echo get_search_query() ?></h2>
<?php if(have_posts()) :
        while(have_posts()): 
            the_post();   
        get_template_part('template-parts/content', 'excerpt');  
        endwhile;
        else : echo wpautop('<section class="post special"><p>Najdena ni bila nobena objava.</p></section>');
endif; ?>
    <?php get_template_part('template-parts/pagination');?>

</div>
<?php 
get_footer();
?>