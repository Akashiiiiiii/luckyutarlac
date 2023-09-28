<?php
$businessexpo_main_slider_options = get_theme_mod('businessexpo_main_slider_content');
$businessexpo_main_slider_disabled = get_theme_mod('businessexpo_main_slider_disabled', true);
$businessexpo_main_slider_overlay_disable = get_theme_mod('businessexpo_main_slider_overlay_disable', true);

if($businessexpo_main_slider_disabled != false){ ?>

<!-- Slider Section -->
<span id="site-content"></span>
<section id="slider-selector-scroll" class="main-slider">
	<div id="owl-main" class="owl-carousel owl-theme">
		<?php 
			$businessexpo_main_slider_options = json_decode($businessexpo_main_slider_options);
			if( $businessexpo_main_slider_options!='' ){
				foreach($businessexpo_main_slider_options as $slide_item){
					$title = ! empty( $slide_item->title ) ? $slide_item->title : '';
					$subtitle = ! empty( $slide_item->subtitle ) ? $slide_item->subtitle : '';
					$img_description = ! empty( $slide_item->text ) ? $slide_item->text : '';
					$readmorelink = ! empty( $slide_item->link ) ? $slide_item->link : '';
					$readmore_button = ! empty( $slide_item->button_text ) ? $slide_item->button_text : '';
					$open_new_tab = $slide_item->open_new_tab;
						
					if($slide_item->image_url!=''){ ?>
						<div id="post-<?php the_ID(); ?>" class="item home-section home-full-height" <?php   
							$slider_image = ! empty( $slide_item->image_url ) ? apply_filters( 'businessexpo_translate_single_string', $slide_item->image_url, 'Slider section' ) : ''; 
							if($slider_image != '' ) { ?> style="background-image:url(<?php echo $slider_image; ?>); <?php } ?>">
						
							<?php if($title != '' || $img_description!= '' || $readmore_button!=''){ ?>
								<div class="container slider-caption">
									<figcaption class="theme-slider-content caption-content text-center">
										<?php if(($title!= '') || ($subtitle!= '') || ($img_description !='')) { ?>
											<Span class="subtitle"><?php echo wp_kses_post( html_entity_decode( $subtitle ) ); ?></Span>
											<h1 class="title"><?php echo wp_kses_post( html_entity_decode( $title ) ); ?></h1>
											<p class="description" ><?php echo wp_kses_post( html_entity_decode( $img_description ) ); ?></p>
										<?php } if($readmore_button !='' ) { ?>
										<div class="more-btn mt-5">
											<a href="<?php echo $readmorelink; ?>" <?php if($open_new_tab== 'yes' || $open_new_tab== '1') { echo "target='_blank'"; } ?> class="btn-large btn-skin btn-animation">
												<?php echo esc_html($readmore_button) ?>
											</a>
										</div>
										<?php } ?>
									</figcaption>
								</div><?php 
							} ?>
						</div>
						<?php
					}
				}
		    } else {

				$activate_theme_data = wp_get_theme(); // getting current theme data.
				$activate_theme = $activate_theme_data->name;

					if( 'BusinessExpo' == $activate_theme ){
						$image1_slide = 'slide-1';
						$image2_slide = 'slide-2';
						$image3_slide = 'slide-3';
						$slider1_title = 'Everything You Need';
						$slider1_subtitle = 'We Are Creative';
						$slider2_title = 'Keep Chasing Your Dreams';
						$slider2_subtitle = 'Best Choice for Your Business';
						$slider3_title = 'We Create Stunning WordPress Themes';
						$slider3_subtitle = 'Provide Quality Services';
					}
					if( 'Architect Designs' == $activate_theme ){
						$image1_slide = 'architect-slide-1';
						$image2_slide = 'architect-slide-2';
						$image3_slide = 'architect-slide-3';
						$slider1_title = 'DECOR YOUR DREAM HOME';
						$slider1_subtitle = 'DREAM.CREATE.LIVE';
						$slider2_title = 'CLASSIC & MODERN ARCHITECTURE';
						$slider2_subtitle = 'MODERN DECORATIVE';
						$slider3_title = 'AWARD WINNING COMPANY';
						$slider3_subtitle = 'WE ARE THE BEST';
					}
				?>
				<div class="item home-section home-full-height" style="background-image:url(<?php echo wpfrank_companion_plugin_url ?>/inc/businessexpo/img/slider/<?php echo esc_attr($image1_slide); ?>);">
					<div class="container slider-caption">
						<figcaption class="caption-content text-center">
							<span class="subtitle"><?php echo wp_kses_post( html_entity_decode( $slider1_subtitle  ) ); ?></span>
							<h1 class="title"><?php echo wp_kses_post( html_entity_decode( $slider1_title  ) ); ?></h1>
							<p class="description"><?php _e('"There is no one who loves pain itself, who seeks after it and wants to have it."'); ?></p>
							<div class="more-btn mt-5">
								<a href="#" class="btn-large btn-skin btn-animation"><?php _e('Learn More','wpfrank-companion'); ?></a>
							</div>	
						</figcaption>
					</div>
				</div>
				<div class="item home-section home-full-height" style="background-image:url(<?php echo wpfrank_companion_plugin_url ?>/inc/businessexpo/img/slider/<?php echo esc_attr($image2_slide); ?>);">
					<div class="container slider-caption">
						<figcaption class="caption-content text-center">
							<span class="subtitle"><?php echo wp_kses_post( html_entity_decode( $slider2_subtitle  ) ); ?></span>
							<h1 class="title"><?php echo wp_kses_post( html_entity_decode( $slider2_title  ) ); ?></h1>
							<p class="description"><?php _e('"There is no one who loves pain itself, who seeks after it and wants to have it."'); ?></p>
							<div class="more-btn mt-5">
								<a href="#" class="btn-large btn-skin btn-animation"><?php _e('Learn More','wpfrank-companion'); ?></a>
							</div>
						</figcaption>
					</div>
				</div>
				<div class="item home-section home-full-height" style="background-image:url(<?php echo wpfrank_companion_plugin_url ?>/inc/businessexpo/img/slider/<?php echo esc_attr($image3_slide); ?>);">
					<div class="container slider-caption">
						<figcaption class="caption-content text-center">
							<span class="subtitle"><?php echo wp_kses_post( html_entity_decode( $slider3_subtitle  ) ); ?></span>
							<h1 class="title"><?php echo wp_kses_post( html_entity_decode( $slider3_title  ) ); ?></h1>
							<p class="description"><?php _e('"There is no one who loves pain itself, who seeks after it and wants to have it."'); ?></p>
							<div class="more-btn mt-5">
								<a href="#" class="btn-large btn-skin btn-animation"><?php _e('Learn More','wpfrank-companion'); ?></a>
							</div>
						</figcaption>
					</div>
				</div>
				<?php 
			} ?>
	</div>
	<a href="#" class="scroll-down" address="true"></a>
	
	<?php
		require wpfrank_companion_plugin_dir . 'inc/businessexpo/front-page/wpfrank-companion-businessexpo-info.php';
	?>
	
</section>
<?php } ?>

