    <section id="intro">
        <a href="#" class="logo">
            <?php
                if(function_exists('the_custom_logo')){
                  $custom_logo_id = get_theme_mod('custom_logo');
                  $logo = wp_get_attachment_image_src($custom_logo_id);
                }
            ?>
            <img src="<?php echo $logo[0] ?>" alt="logotip" />  
        </a>
        <header>
            <h2><?php bloginfo('name');?></h2>
        </header>
    </section>