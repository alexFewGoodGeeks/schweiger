<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package sparkling
 */
?>
		</div><!-- close .row -->
	</div><!-- close .container -->
</div><!-- close .site-content -->

	<div id="footer-area">
        <div class="container">
           <div class="footer-images-wrapper">
                <div class="row">
                    <?php for($i=1;$i<9;$i++) { ?>
                        <div class="col-md-3 col-sm-6 col-xs-6 single-image-wrapper">
                            <img src="/wp-content/uploads/images/footer/footer_image<?php echo $i ?>.png" />
                        </div>
                    <?php } ?>
                </div>
           </div>
        </div>

        <div class="container footer-buttons-wrapper">
                <div class="col-md-12 col-xs-12 footer-buttons">
                    <a href="" class="s-btn s-btn-red">auf instagram folgen</a>
                    <a href="" class="s-btn s-btn-red">auf facebook folgen</a>
                </div>
            </div>
        </div>

		<div class="container footer-inner">
			<div class="row">
				<?php get_sidebar( 'footer' ); ?>
			</div>
		</div>

        <footer class="site-footer-mobile footer-m">
            <div class="footer-m-wrapper">
                <div class="logo mobile">
                    <img src="/wp-content/uploads/images/footer_logo.png" class="footer-logo-m"/>
                </div>
            </div>
            <div class="container">
                <div class="col-sm-12">
                    <div class="copyright-mobile">
                    <?php echo of_get_option( 'custom_footer_text', 'sparkling' ); ?>
                    </div>
                </div>
                <div class="col-sm-12">
                    <div class="footer-links-mobile">
                        <?php sparkling_footer_links(); ?>
                    </div>
                </div>
            </div>
        </footer>

		<footer id="colophon" class="site-footer footer-d" role="contentinfo">
			<div class="site-info container">
				<div class="row footer-info-wrapper">
                    <div class="col-lg-4 col-md-5 copyright">
                        <?php echo of_get_option( 'custom_footer_text', 'sparkling' ); ?>
                        <?php //sparkling_footer_info(); ?>
                    </div>
                    <div class="col-lg-4 col-md-2 footer-logo-wrapper">

                        <a href="/">

                            <div class="image-wrapper">
                                <p style="visibility: none">&nbsp</p>
                                <img src="/wp-content/uploads/images/footer_logo.png" class="footer-logo" alt=""/>
                            </div>
                        </a>

                    </div>
                    <div class="col-lg-4 col-md-5 footer-links">
                        <nav role="navigation" >
                            <?php sparkling_footer_links(); ?>
                        </nav>
                    </div>

				</div>
			</div><!-- .site-info -->
			<div class="scroll-to-top"><i class="fa fa-angle-up"></i></div><!-- .scroll-to-top -->
		</footer><!-- #colophon -->
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

<script>
    jQuery(function() {
        jQuery("#responsive-nav-button").click(function() {
            var responsiveNavigation = jQuery("#responsive-navigation");
            var isHidden = responsiveNavigation.hasClass("hide-nav");
            var content = jQuery("#content");
            if (isHidden) {
                responsiveNavigation
                    .removeClass("hide-nav")
                    .addClass("show-nav")
                content.addClass('responsive-active');

            } else {
                responsiveNavigation
                    .removeClass("show-nav")
                    .addClass("hide-nav")
            }

       });

        jQuery("#close-nav-btn").click(function() {
            jQuery("#responsive-navigation")
                .removeClass('show-nav')
                .addClass('hide-nav')

            jQuery("#content").removeClass('responsive-active');
        });
    });
    
    jQuery(function() {
        jQuery(".tlp-portfolio-isotope-button button:first-child").html("Alle");
    })
</script>
</body>
</html>
