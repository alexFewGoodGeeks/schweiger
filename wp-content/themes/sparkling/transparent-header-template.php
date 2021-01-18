<?php /* Template Name: TransparentHeader Template */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php
            while ( have_posts() ) :
                the_post();

                get_template_part( 'template-parts/content', 'homepage' );


            endwhile; // end of the loop.
            ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php

get_footer();

?>

<script>
    jQuery(function() {
        const redStripeHtml = "<div class='slider-red-stripe'></div>";
        const separator = "<div class='separator-bottom separator-homepage-top'></div>";
        const flexSliderSelector = jQuery(".flexslider");
        flexSliderSelector.append(redStripeHtml);
        flexSliderSelector.append(separator);


    })
</script>
