<?php 
$businessexpo_service_area_disabled = get_theme_mod('businessexpo_service_area_disabled', true);
$businessexpo_service_content  = get_theme_mod( 'businessexpo_service_content');

if('BusinessExpo' == $activate_theme) {
	$businessexpo_service_section_title = get_theme_mod('businessexpo_service_section_title', __('What We Do','wpfrank-companion'));
} if('Architect Designs' == $activate_theme) {
	$businessexpo_service_section_title = get_theme_mod('businessexpo_service_section_title', __('WE PROVIDE THE BEST INTERIOR SERVICES','wpfrank-companion'));
}
$businessexpo_service_section_subtitle = get_theme_mod('businessexpo_service_section_subtitle', __('Our Services','wpfrank-companion'));

if($businessexpo_service_area_disabled == true) { ?>
<!-- Service Section -->
<span id="site-content"></span>
<section id="service-selector-scroll" class="section service
		<?php if('BusinessExpo' == $activate_theme) { ?> theme-light <?php } ?>
		<?php if('Architect Designs' == $activate_theme) { ?> theme-dark <?php } ?>">
	<div class="container">
		<?php  
		if( ($businessexpo_service_section_title) || ($businessexpo_service_section_subtitle)!='' ): ?>
			<!-- Section Title -->
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="section-header">
							<?php if(!empty($businessexpo_service_section_subtitle)) { ?>
								<p class="section-subtitle"><?php echo wp_kses_post($businessexpo_service_section_subtitle); ?></p>
							<?php } ?>	
							<?php if(!empty($businessexpo_service_section_title)) { ?>
							<h1 class="section-title"><?php echo wp_kses_post($businessexpo_service_section_title); ?></h1>
							<?php } ?>
							<div class="divider-main"></div>
						</div>
					</div>
				</div>
			<!-- /Section Title -->
		<?php endif; ?>
		<div class="row">
			<?php
			if ( ! empty( $businessexpo_service_content ) ) {
				$allowed_html = array('br' => array(), 'em' => array(), 'strong' => array(), 'b' => array(),'i' => array());
				$businessexpo_service_content = json_decode( $businessexpo_service_content );
				foreach ( $businessexpo_service_content as $features_item ) {
					$icon = ! empty( $features_item->icon_value ) ? $features_item->icon_value : '';
					$title = ! empty( $features_item->title ) ? $features_item->title : '';
					$text = ! empty( $features_item->text ) ? $features_item->text : '';
					$link = ! empty( $features_item->link ) ? $features_item->link : '';
					$image = ! empty( $features_item->image_url ) ? $features_item->image_url : '';
					$open_new_tab = $features_item->open_new_tab;
					?>
					<div class="col-lg-4 col-sm-6 ">
						<article class="post text-center card border-0 shadow pt-5">
							<?php if($features_item->choice == 'customizer_repeater_image'){ ?>
								<?php if ( ! empty( $image ) ) { ?>
									<div class="service-image">
										<?php if ( ! empty( $link ) ) { ?>
											<a href="<?php echo esc_url( $link ); ?>" <?php if($open_new_tab== 'yes' || $open_new_tab== 'on') { echo "target='_blank'"; } ?>>
											   <img class="" src="<?php echo esc_url( $image ); ?>" <?php if ( ! empty( $title ) ) : ?> alt="<?php echo esc_attr( $title ); ?>" title="<?php echo esc_attr( $title ); ?>" <?php endif; ?> />
											</a>
										<?php } ?>	
										<?php if ( empty( $link ) ) { ?>	
												<img class="" src="<?php echo esc_url( $image ); ?>" <?php if ( ! empty( $title ) ) : ?> alt="<?php echo esc_attr( $title ); ?>" title="<?php echo esc_attr( $title ); ?>" <?php endif; ?> />
										<?php } ?>	
									</div>
								<?php } ?>
							<?php } else if($features_item->choice =='customizer_repeater_icon'){ ?>
								<?php if ( ! empty( $icon ) ) { ?>
									<div class="service-icon">
										<?php if ( ! empty( $link ) ) { ?>
											<a href="<?php echo esc_url( $link ); ?>" <?php if($open_new_tab== 'yes' || $open_new_tab== 'on') { echo "target='_blank'"; } ?>>
												<i class="fa <?php echo esc_html( $icon ); ?> icon-lg  icon-bg icon-bg-circle mb-3"></i>
											</a>
										<?php } ?>
										<?php if ( empty( $link ) ) { ?>
											<i class="fa <?php echo esc_html( $icon ); ?>"></i>	
										<?php } ?>
									</div>
								<?php } ?>
							<?php } ?>
							<?php if(!empty($title)) { ?>
								<div class="inner-header">
									<?php if(!empty($link)) { ?>
										<h4 class="inner-title mb-3">
											<a href="<?php echo esc_url( $link ); ?>"><?php echo esc_html( $title ); ?></a>
										</h4>
									<?php } else { ?>
										<h4 class="inner-title mb-3"><?php echo esc_html( $title ); ?></h4>
									<?php } ?>
								</div>
							<?php } ?>
							<div class="inner-content">
								<?php if ( ! empty( $text ) ) { ?>
									<p><?php echo wp_kses( html_entity_decode( $text ), $allowed_html ); ?></p>
								<?php } 
								    if ( ! empty( $link ) ) { ?>
								<a href="<?php echo esc_url( $link ); ?>" <?php if($open_new_tab== 'yes') { echo "target='_blank'"; } ?> class="more-link"><?php esc_html_e('Read More','wpfrank-companion'); ?></a>
									<?php } ?>
							</div>
						</article>
					</div><?php
				} 
			}  else {

				$activate_theme_data = wp_get_theme(); // getting current theme data.
				$activate_theme = $activate_theme_data->name;

					if( 'BusinessExpo' == $activate_theme ){
						$icon1_service = 'fas fa-object-ungroup';
						$icon2_service = 'fas fa-users';
						$icon3_service = 'fas fa-desktop';
						
						$service1_title = 'Networking';
						$service2_title = 'Social Activity';
						$service3_title = 'Web Design';
					}
					if( 'Architect Designs' == $activate_theme ){
						$image1_service = 'architect-service-1';
						$image2_service = 'architect-service-2';
						$image3_service = 'architect-service-3';

						$service1_title = 'WARDROBE DESIGN';
						$service2_title = 'ARCHITECTURAL DESIGN';
						$service3_title = 'ROOMS DECORATION';
					}
				?>
					<div class="col-lg-4 col-sm-6 ">
						<article class="post text-center card border-0 shadow pt-5">
							<?php if( 'BusinessExpo' == $activate_theme ){ ?>
								<div class="service-icon">
									<i class="<?php echo esc_attr( $icon1_service ); ?> icon-lg  icon-bg icon-bg-circle mb-3"></i>
								</div>
							<?php } if( 'Architect Designs' == $activate_theme ){ ?>
								<div class="service-image">
									<img src="<?php echo wpfrank_companion_plugin_url ?>/inc/businessexpo/img/service/<?php echo esc_attr($image1_service); ?>"/>
								</div>
							<?php } ?>
							<div class="inner-header"><h4 class="inner-title mb-3"><?php echo wp_kses_post( html_entity_decode( $service1_title  ) ); ?></h4></div>
							<div class="inner-content"><p><?php esc_html_e('For what reason would it be advisable for me to think about business content?', 'wpfrank-companion'); ?></p>
								<a href="#" class="more-link"><?php esc_html_e('Read More','wpfrank-companion') ?></a>
							</div>
						</article>
					</div>
					<div class="col-lg-4 col-sm-6 ">
						<article class="post text-center card border-0 shadow pt-5">
							<?php if( 'BusinessExpo' == $activate_theme ){ ?>
								<div class="service-icon">
									<i class="<?php echo esc_attr( $icon2_service ); ?> icon-lg  icon-bg icon-bg-circle mb-3"></i>
								</div>
							<?php } if( 'Architect Designs' == $activate_theme ){ ?>
								<div class="service-image">
									<img src="<?php echo wpfrank_companion_plugin_url ?>/inc/businessexpo/img/service/<?php echo esc_attr($image2_service); ?>"/>
								</div>
							<?php } ?>
							<div class="inner-header"><h4 class="inner-title mb-3"><?php echo wp_kses_post( html_entity_decode( $service2_title  ) ); ?></h4></div>
							<div class="inner-content"><p><?php esc_html_e('For what reason would it be advisable for me to think about business content?', 'wpfrank-companion'); ?></p>
								<a href="#" class="more-link"><?php esc_html_e('Read More','wpfrank-companion') ?></a>
							</div>
						</article>
					</div>
					<div class="col-lg-4 col-sm-6 ">
						<article class="post text-center card border-0 shadow pt-5">
							<?php if( 'BusinessExpo' == $activate_theme ){ ?>
								<div class="service-icon">
									<i class="<?php echo esc_attr( $icon3_service ); ?> icon-lg  icon-bg icon-bg-circle mb-3"></i>
								</div>
							<?php } if( 'Architect Designs' == $activate_theme ){ ?>
								<div class="service-image">
									<img src="<?php echo wpfrank_companion_plugin_url ?>/inc/businessexpo/img/service/<?php echo esc_attr($image3_service); ?>"/>
								</div>
							<?php } ?>
							<div class="inner-header"><h4 class="inner-title mb-3"><?php echo wp_kses_post( html_entity_decode( $service3_title  ) ); ?></h4></div>
							<div class="inner-content"><p><?php esc_html_e('For what reason would it be advisable for me to think about business content?', 'wpfrank-companion'); ?></p>
								<a href="#" class="more-link"><?php esc_html_e('Read More','wpfrank-companion') ?></a>
							</div>
						</article>
					</div>
			<?php
			} ?>
		</div>
	</div>
</section>
<!-- Service Section -->
<?php } ?>