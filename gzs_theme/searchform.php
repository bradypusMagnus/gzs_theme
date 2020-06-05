<section>
        <form class="search" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
        <input type="text" name="s" id="search" placeholder="Iskanje"  value="<?php get_search_query(); ?>" required />
        <button type="submit" class="button large fit">Iskanje</button>
        </form>
</section>