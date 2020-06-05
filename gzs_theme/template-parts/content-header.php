<div class="title">
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            </div>
            <div class="meta">
                <time class="published" datetime="<?php the_time( get_option( 'date_format' ) ); ?>"><?php the_time( get_option( 'date_format' ) ); ?></time>
                <div class="author">
                    <?php
                        $fname = get_the_author_meta('first_name');
                        $lname = get_the_author_meta('last_name');
                    ?>
                <span class="name"><a href=" <?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) );?> "> <?php echo $fname ?> <?php echo $lname ?>  </a></span><?php echo get_avatar($id_or_email, '45px', $default, $alt, $args); ?></div>
</div>