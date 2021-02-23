<?php
global $post;
$designation = strip_tags( get_the_term_list( $post->ID, TLPPortfolio()->taxonomies['category'], null, ',' ) );
$settings    = get_option( TLPPortfolio()->options['settings'] );

$args = [
    'post_type' => 'portfolio',
    'meta_key' => 'favorite_product',
    'meta_value' => 1
];

$posts = get_posts($args);

$allPotstsArgs = [
  'post_type' => 'portfolio',
    'orderby' => 'rand',
    'order'    => 'ASC'
];
$allPosts = get_posts($allPotstsArgs);

?>

<div class="row">
<div class="tlp-portfolio-container tlp-single-detail col-md-10">
    <div class="tlp-portfolio-detail-wrap">
		<?php if ( has_post_thumbnail() ) { ?>
            <div class="tlp-portfolio-image">
                <div class="portfolio-feature-img">
					<?php the_post_thumbnail( 'full' ); ?>
                </div>
            </div>
		<?php } ?>
        <div class="portfolio-detail-desc">
            <h2 class="portfolio-title"><?php the_title(); ?></h2>
            <div class="others-info">
                <?php echo TLPPortfolio()->singlePortfolioMeta( $post->ID ); ?>
            </div>
            <div class="portfolio-details"><?php echo $content; ?></div>
			<?php
			if ( isset( $settings['social_share_enable'] ) ) {
				echo TLPPortfolio()->socialShare( get_the_permalink() );
			} ?>
        </div>

    </div>
</div>

<div class="col-md-2 favorite-products-wrapper">
    <?php foreach ($posts as $post) { ?>
        <div class="favorite-product-wrapper favorite-product">
            <h3><?php echo $post->post_title ?></h3>
            <img src="<?php echo get_the_post_thumbnail_url($post);   ?>" />
            <a href="/portfolio/<?php echo $post->post_name ?>"><?php echo __("Go to product")?></a>
        </div>
    <?php } ?>
</div>
</div>

<?php /* ?>
<div class="row">
    <link type="text/css" rel="stylesheet" href="/wp-content/plugins/tlp-portfolio/assets/css/lightslider.css" />
    <script src="/wp-content/plugins/tlp-portfolio/assets/js/lightslider.js"></script>
    <div class="col-md-12">
        <h2><?php echo __("Weitere Produkte") ?></h2>
        <ul id="portfolio-image-gallery" class="content-slider">
            <?php foreach ($allPosts as $post) {?>
            <li data-thumb="<?php echo get_the_post_thumbnail_url($post);   ?>">
                <a href="/portfolio/<?php echo $post->post_name ?>">
                    <img src="<?php echo get_the_post_thumbnail_url($post);   ?>" />
                </a>
            </li>
            <?php } ?>
        </ul>
    </div>
</div>

<script type="text/javascript">
    jQuery('#portfolio-image-gallery').lightSlider({
        loop:true,
        keyPress:true,
        item:4,
    });
</script>

<?php */ ?>