<?php if(has_post_thumbnail()) : ?>
    <a href="<?php the_permalink(); ?>" class="image featured">
    <?php the_post_thumbnail('blog-large'); ?></a>
<?php endif;?>