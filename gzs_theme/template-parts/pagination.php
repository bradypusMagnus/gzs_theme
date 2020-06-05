<!-- <ul class="actions pagination">
        <li><a href="" class="disabled button large previous">Previous Page</a></li>
        <li><a href="#" class="button large next">Next Page</a></li>
    </ul> -->

<?php
    $prev_text = sprintf(
	'%s <span class="button large previous">%s</span>',
	'<span aria-hidden="true"></span>',
	__( 'Novejše objave', 'gzs_theme' )
);
$next_text = sprintf(
	'<span class="button large next">%s</span> %s',
	__( 'Starejše objave', 'gzs_theme' ),
	'<span aria-hidden="true"></span>'
);

$posts_pagination = get_the_posts_pagination(
	array(
        'screen_reader_text' => ' ',
		'mid_size'  => 1,
		'prev_text' => $prev_text,
		'next_text' => $next_text,
	)
);

// If we're not outputting the previous page link, prepend a placeholder with `visibility: hidden` to take its place.
if ( strpos( $posts_pagination, 'prev page-numbers' ) === false ) {
	$posts_pagination = str_replace( '<div class="nav-links">', '<div class="nav-links"><span class="disabled button large previous" aria-hidden="true">' . 'Novejše objave' . '</span>', $posts_pagination );
}

// If we're not outputting the next page link, append a placeholder with `visibility: hidden` to take its place.
if ( strpos( $posts_pagination, 'next page-numbers' ) === false ) {
	$posts_pagination = str_replace( '</div>', '<span class="disabled button large next" aria-hidden="true">' . 'starejše objave' . '</span></div>', $posts_pagination );
}

if ( $posts_pagination ) { ?>

	<div class="pagination-wrapper section-inner">

            <?php echo $posts_pagination;?>

	</div><!-- .pagination-wrapper -->

	<?php
}
