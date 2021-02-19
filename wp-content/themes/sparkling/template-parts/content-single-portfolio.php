<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	$featured_image_args = array(
		'class' => 'single-featured',
	);
	if ( is_page_template( 'page-fullwidth.php' ) ) {
		//the_post_thumbnail( 'sparkling-featured-fullwidth', $featured_image_args );
	} else {
		//the_post_thumbnail( 'sparkling-featured', $featured_image_args );
	}
	?>
	<div class="post-inner-content">

		<div class="entry-content">
			<?php the_content(); ?>
		</div><!-- .entry-content -->

	</div>

</article><!-- #post-## -->
