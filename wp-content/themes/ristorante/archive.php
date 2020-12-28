<?php get_header(); ?>

<?php if( function_exists('nicdark_archive_content')){ do_action( 'nicdark_archive_nd' ); }else{ ?>

<!--start section-->
<div id="nicdark_header_img_archive" class="nicdark_section nicdark_border_bottom_1_solid_grey">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">

    	<div class="nicdark_grid_12">

    		<div class="nicdark_section nicdark_height_80"></div>

    		<?php if (is_category()): ?>
				<h1 class="nicdark_font_size_50 nicdark_font_size_40_all_iphone nicdark_line_height_40_all_iphone"><?php esc_html_e('Category','ristorante'); ?></h1>
				<div class="nicdark_section nicdark_height_10"></div>
				<h4 class="nicdark_text_transform_uppercase nicdark_color_grey  nicdark_second_font"><?php single_cat_title(); ?></h4>
			<?php elseif (is_tag()): ?>
				<h1 class="nicdark_font_size_50 nicdark_font_size_40_all_iphone nicdark_line_height_40_all_iphone"><?php esc_html_e('Tag','ristorante'); ?></h1>
				<div class="nicdark_section nicdark_height_10"></div>
				<h4 class="nicdark_text_transform_uppercase nicdark_color_grey  nicdark_second_font  "><?php single_tag_title() ?></h4>
			<?php elseif (is_month()): ?>
				<h1 class="nicdark_font_size_50 nicdark_font_size_40_all_iphone nicdark_line_height_40_all_iphone"><?php esc_html_e('Archive for','ristorante'); ?></h1>
				<div class="nicdark_section nicdark_height_10"></div>
				<h4 class="nicdark_text_transform_uppercase nicdark_color_grey  nicdark_second_font  "><?php single_month_title(' '); ?></h4>
			<?php elseif (is_author()): ?>
				<h1 class="nicdark_font_size_50 nicdark_font_size_40_all_iphone nicdark_line_height_40_all_iphone"><?php esc_html_e('Author','ristorante'); ?></h1>
				<div class="nicdark_section nicdark_height_10"></div>
				<h4 class="nicdark_text_transform_uppercase nicdark_color_grey  nicdark_second_font  "><?php the_author(); ?></h4>
			<?php elseif (is_search()): ?>
				<h1 class="nicdark_font_size_50 nicdark_font_size_40_all_iphone nicdark_line_height_40_all_iphone"><?php esc_html_e('Search for','ristorante'); ?></h1>
				<div class="nicdark_section nicdark_height_10"></div>
				<h4 class="nicdark_text_transform_uppercase nicdark_color_grey  nicdark_second_font  ">" <?php the_search_query(); ?> "</h4>
			<?php else: ?>
				<h1 class="nicdark_font_size_50 nicdark_font_size_40_all_iphone nicdark_line_height_40_all_iphone"><?php esc_html_e('Archive','ristorante'); ?></h1>
			<?php endif ?>

    		<div class="nicdark_section nicdark_height_80"></div>

    	</div>

    </div>
    <!--end container-->

</div>
<!--end section-->

<div class="nicdark_section nicdark_height_50"></div>

<!--start section-->
<div class="nicdark_section">

    <!--start nicdark_container-->
    <div class="nicdark_container nicdark_clearfix">

    	
    	<!--start all posts previews-->
    	<?php if ( is_active_sidebar( 'nicdark_sidebar' ) ) { ?>  
    		<div class="nicdark_grid_8"> 
    	<?php }else{ ?>

    		<div class="nicdark_grid_12">
    	<?php } ?>
	

    		<?php if(have_posts()) : ?>
				
				<?php while(have_posts()) : the_post(); ?>
					
					

					<!--START post preview-->
					<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

						<!--START PREVIEW-->
						<?php if (has_post_thumbnail()): ?>
							<div class="nicdark_section nicdark_image_archive">
								<?php the_post_thumbnail(); ?>
							</div>
						<?php endif ?>

						<div class="nicdark_section ">

							<div class="nicdark_section nicdark_float_left nicdark_padding_40 nicdark_padding_15_responsive nicdark_border_1_solid_grey nicdark_box_sizing_border_box">
								


								<div class="nicdark_section nicdark_position_relative">
									
									<div class="nicdark_margin_top_8 nicdark_position_relative_iphone_port nicdark_bg_greydark nicdark_position_absolute nicdark_top_0 nicdark_left_0 nicdark_preview_post_cal nicdark_width_60 nicdark_height_60 nicdark_float_left nicdark_text_align_center">

										<div class="nicdark_section">

											<div class="nicdark_section nicdark_height_10"></div>

											<h3 class="nicdark_color_white nicdark_font_size_20"><?php the_time('d') ?></h3>
											<div class="nicdark_section nicdark_height_5"></div>
											<p class="nicdark_color_white nicdark_font_size_12 nicdark_text_transform_uppercase"><?php the_time('M') ?></p>
										</div>

									</div>

									<div class="nicdark_padding_left_80 nicdark_padding_left_0_iphone_port nicdark_preview_post_cal_info nicdark_float_left">
								
										<h2 class="nicdark_line_height_35 nicdark_margin_top_10_iphone_port nicdark_min_height_29 nicdark_hyphens_auto nicdark_word_break_break_all">
											<a class="nicdark_color_greydark nicdark_first_font" href="<?php the_permalink(); ?>">
												<?php the_title(); ?>
												<?php if ( has_post_format( 'video' )) { esc_html_e(' - Video','ristorante'); } ?>
											</a>
										</h2>
										<div class="nicdark_section nicdark_height_12"></div>

										<div class="nicdark_section">

											<div class="nicdark_display_table nicdark_float_left">
												<div class="nicdark_display_table_cell nicdark_vertical_align_middle nicdark_padding_right_10">
													<img width="20" class="nicdark_border_radius_100_percentage nicdark_float_left" src="<?php echo get_avatar_url(get_the_author_meta('ID')); ?>">
												</div>
												<div class="nicdark_display_table_cell nicdark_vertical_align_middle">
													<p class="nicdark_font_size_12 nicdark_float_left nicdark_margin_right_20"><span class="nicdark_color_greydark"><?php esc_html_e('AUTHOR','ristorante'); ?> :</span> <?php the_author_posts_link(); ?></p>
												</div>
											</div>

											<div class="nicdark_display_table nicdark_float_left nicdark_margin_top_10_all_iphone">
												<div class="nicdark_display_table_cell nicdark_vertical_align_middle nicdark_padding_right_10">
													<img width="20" class=" nicdark_float_left" src="<?php echo get_template_directory_uri(); ?>/img/comment.png">
												</div>
												<div class="nicdark_display_table_cell nicdark_vertical_align_middle">
													<p class="nicdark_font_size_12 nicdark_float_left nicdark_margin_right_20 nicdark_margin_right_0_iphone_port"><span class="nicdark_color_greydark"><?php esc_html_e('COMMENTS','ristorante'); ?> :</span> <?php comments_number(esc_html__('No Comments','ristorante'),esc_html__('One Comment','ristorante'),esc_html__( '% Comments','ristorante') );?></p>
												</div>
											</div>

										</div>
										
									</div>

								</div>
								
								<div class="nicdark_section nicdark_height_30"></div>
								<?php the_excerpt(); ?>
								<div class="nicdark_section nicdark_height_30"></div>

								<a class="nicdark_bg_btn_archive nicdark_border_radius_3 nicdark_display_inline_block nicdark_line_height_16 nicdark_font_size_14 nicdark_text_align_center nicdark_box_sizing_border_box nicdark_letter_spacing_2 nicdark_color_white nicdark_second_font nicdark_padding_10_25 nicdark_bg_orange " href="<?php the_permalink(); ?>"><?php esc_html_e('READ MORE','ristorante'); ?></a>

							</div>
						</div>
						<!--END PREVIEW-->

					</div>
					<!--END post preview-->
					

					<div class="nicdark_section nicdark_height_50"></div>


						
				<?php endwhile; ?>
			<?php endif; ?>



			<!--START pagination-->
			<div class="nicdark_section">

				<?php

		    	the_posts_pagination( array(
					'prev_text'          => esc_html__( 'Prev', 'ristorante' ),
					'next_text'          => esc_html__( 'Next', 'ristorante' ),
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . esc_html__( 'Page', 'ristorante' ) . ' </span>',
				) );

				?>

				<div class="nicdark_section nicdark_height_50"></div>
			</div>
			<!--END pagination-->


    	</div>
    	<!--end all posts previews-->

 
    	
    	<!--sidebar-->
    	<?php if ( is_active_sidebar( 'nicdark_sidebar' ) ) { ?>  
    		
	    	<div class="nicdark_grid_4">
	    		<?php if ( ! get_sidebar( 'nicdark_sidebar' ) ) : ?><?php endif ?>
	    		<div class="nicdark_section nicdark_height_50"></div>
	    	</div>
	    	
    	<?php } ?>
    	<!--end sidebar-->

    	
	</div>
	<!--end container-->

</div>
<!--end section-->

<?php } ?>

<?php get_footer(); ?>