<?php
get_header();
?>
<div id="main">
    <h2><?php _e( '404 - Stran ne obstaja', 'gzs_theme' ); ?></h2>
    <section class="post special">
        <article id="note">
    <p><?php _e( 'Ponovno preverite vnešeni naslov, ali pa uporabite funkcijo "iskanje".', 'gzs_theme' ); ?></p>
    <div id="">
    <?php
    get_search_form(
        array(
            'label' => __( 'Vaša poizvedba ni bila najdena', 'gzs_theme' ),
        )
    );
    ?>
    </div>
</article>
</section>
</div><!-- #site-content -->

<?php
get_footer();
