<article class="post" id="post-<?php the_ID(); ?>">
        <header>
        <?php get_template_part('/template-parts/content', 'header'); ?>
        </header>
        <?php get_template_part('/template-parts/featured-image'); ?>
        <p><?php the_excerpt(); ?></p>
        <footer>
            <ul class="actions">
                <li><a href="<?php the_permalink(); ?>" class="button large">več...</a></li>
            </ul>
            <ul class="stats">
                <?php get_template_part('/template-parts/meta', 'categories'); ?>
                <li><a href="<?php comments_link(); ?>" class="icon fa-comment"><?php echo get_comments_number_text('0 Komentarjev', '1 Komentar', '2 Komentarja', '3 Komentarji', '4 Komentarji', '% Komentarjev'); ?></a></li>
            </ul>
        </footer>
</article>