<?php
	//Defaults.
	$businessexpo_testimonial_options = get_theme_mod('businessexpo_testimonial_content');
	$businessexpo_testimonial_disabled = get_theme_mod('businessexpo_testimonial_disabled', true); 
	if( 'BusinessExpo' == $activate_theme ){
		$businessexpo_testimonial_section_title = get_theme_mod('businessexpo_testimonial_section_title', __('What our Client Say?','wpfrank-companion'));
	} 
	if( 'Architect Designs' == $activate_theme ){
		$businessexpo_testimonial_section_title = get_theme_mod('businessexpo_testimonial_section_title', __('WHAT OUR CLIENT SAYS?','wpfrank-companion'));
	} 
	$businessexpo_testimonial_section_subtitle = get_theme_mod('businessexpo_testimonial_section_subtitle', __('Testimonials','wpfrank-companion'));
	$businessexpo_testimonial_overlay_disable = get_theme_mod('businessexpo_testimonial_overlay_disable', false);
	
	//Testimonial Background Image.
	if('BusinessExpo' == $activate_theme ){
		$businessexpo_testimonial_background = get_theme_mod('businessexpo_testimonial_background', wpfrank_companion_plugin_dir . '/inc/businessexpo/img/testimonial/testimonial-bg.jpg');
	}
	if('Architect Designs' == $activate_theme ){
		$businessexpo_testimonial_background = get_theme_mod('businessexpo_testimonial_background', wpfrank_companion_plugin_url . '/inc/businessexpo/img/testimonial/architect-testimonial-bg.jpg');
	}
?>
<?php if($businessexpo_testimonial_disabled == true) { ?>
	<span id="site-content"></span>
	<div id="testimonial-selector-scroll" class="testimonial-wraper
	<?php if('BusinessExpo' == $activate_theme) { ?> theme-light <?php } ?>
	<?php if('Architect Designs' == $activate_theme) { ?> theme-dark <?php } ?>"
	style="background-image:url('<?php echo esc_url($businessexpo_testimonial_background); ?>');">
		<section class="section testimonial">
			<div class="container">
				 <?php if($businessexpo_testimonial_section_title != null || $businessexpo_testimonial_section_subtitle != null): ?>
					<div class="row">
						<div class="col-lg-12 text-center">
							<div class="section-header">
								<p class="section-subtitle"><?php echo wp_kses_post($businessexpo_testimonial_section_subtitle); ?></p>
								<h1 class="section-title"><?php echo wp_kses_post($businessexpo_testimonial_section_title); ?></h1>
								<div class="divider-main"></div>
							</div>
						</div>
					</div>
				<?php endif; ?>
				<div class="row">
					<div id="owl-testimonial" class="owl-carousel owl-theme col-lg-12">
						<?php
						$businessexpo_testimonial_options = json_decode($businessexpo_testimonial_options);
						if( $businessexpo_testimonial_options!='' ){
							$allowed_html = array('br' => array(), 'em' => array(), 'strong' => array(), 'b' => array(),'i' => array());
							foreach($businessexpo_testimonial_options as $testimonial_iteam){ 
								$title = ! empty( $testimonial_iteam->title ) ? $testimonial_iteam->title : '';
								$test_desc = ! empty( $testimonial_iteam->text ) ? $testimonial_iteam->text : '';
								$designation = ! empty( $testimonial_iteam->designation ) ? $testimonial_iteam->designation : ''; ?>
									<div class="item">
										<article class="post">
											<figure>
												<img alt="<?php echo esc_attr($title); ?>" src="<?php echo $testimonial_iteam->image_url; ?>" />
											</figure>

											<div>
												<?php if($testimonial_iteam->image_url != null) { ?>
													<p><?php echo wp_kses( html_entity_decode( $test_desc ), $allowed_html ); ?></p>
												<?php } ?>
												<?php if(!empty($designation)) { ?>
													<h6><?php echo esc_html($designation); ?></h6>
												<?php } ?>
												<?php if(!empty($title)) { ?>
													<h1><?php echo esc_html($title); ?></h1>
												<?php } ?>
											</div>
										</article>
									</div>
								<?php 
							} 
						} else { ?>
							<div class="item">
								<article class="post">
									<figure>
										<img alt="A rather marvellous macaw, opening one of its wings to support the cause." src="<?php echo wpfrank_companion_plugin_url ?>/inc/businessexpo/img/testimonial/1.jpg" />
									</figure>
									<div>
										<p><?php esc_html_e('Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti repellat, consequuntur doloribus voluptate esse iure?', 'wpfrank-companion')?></p>
										<h6><?php esc_html_e('Businessman', 'wpfrank-companion') ?></h6>
										<h1><?php esc_html_e('Marvellous Macaw', 'wpfrank-companion') ?></h1>
									</div>
								</article>
							</div>
							<div class="item">
								<article class="post">
									<figure>
										<img alt="A rather marvellous macaw, opening one of its wings to support the cause." src="<?php echo wpfrank_companion_plugin_url ?>/inc/businessexpo/img/testimonial/2.jpg" />
									</figure>

									<div>
										<p><?php esc_html_e('Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti repellat, consequuntur doloribus voluptate esse iure?', 'wpfrank-companion')?></p>
										<h6><?php esc_html_e('Enterpreneur', 'wpfrank-companion') ?></h6>
										<h1><?php esc_html_e('Casy Storm', 'wpfrank-companion') ?></h1>
									</div>
								</article>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</section>
	</div>
<?php } ?>