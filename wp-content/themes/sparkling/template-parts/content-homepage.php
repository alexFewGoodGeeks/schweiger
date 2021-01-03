<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package sparkling
 */
?>

<?php
if ( is_page_template( 'page-fullwidth.php' ) ) {
    the_post_thumbnail(
        'sparkling-featured-fullwidth', array(
            'class' => 'single-featured',
        )
    );
} else {
    the_post_thumbnail(
        'sparkling-featured', array(
            'class' => 'single-featured',
        )
    );
}
?>

<div class="post-inner-content">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <div class="entry-content">
            <?php
            the_content();
            ?>
        </div><!-- .entry-content -->
        
    </article><!-- #post-## -->
</div>
