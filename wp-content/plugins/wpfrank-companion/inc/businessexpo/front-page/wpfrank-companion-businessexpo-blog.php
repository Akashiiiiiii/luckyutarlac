<?php
// Defaults
$businessexpo_blog_disabled = get_theme_mod('businessexpo_blog_disabled', true); 
if( 'BusinessExpo' == $activate_theme ){
	$businessexpo_blog_section_title = get_theme_mod('businessexpo_blog_section_title', __('Latest News','wpfrank-companion'));
}
if( 'Architect Designs' == $activate_theme ){
	$businessexpo_blog_section_title = get_theme_mod('businessexpo_blog_section_title', __('LATEST NEWS','wpfrank-companion'));
}
$businessexpo_blog_section_subtitle = get_theme_mod('businessexpo_blog_section_subtitle', __('Blog','wpfrank-companion'));
$businessexpo_home_blog_meta_disabled = get_theme_mod('businessexpo_home_blog_meta_disabled', true);
$businessexpo_theme_blog_category = get_theme_mod('businessexpo_theme_blog_category');
?>
<?php if($businessexpo_blog_disabled == true){ ?>
	<span id="site-content"></span>
	<section id="blog-selector-scroll" class="section home-blog 
		<?php if('BusinessExpo' == $activate_theme) { ?> theme-light-grey <?php } ?>
		<?php if('Architect Designs' == $activate_theme) { ?> theme-dark <?php } ?>">
		<div class="container">
			<?php if(!empty($businessexpo_blog_section_title) || !empty($businessexpo_blog_section_subtitle) ) {  ?>
				<div class="row">
					<div class="col-lg-12 text-center">
						<div class="section-header">
							<?php if($businessexpo_blog_section_subtitle) { ?>
								<p class="section-subtitle"><?php echo wp_kses_post($businessexpo_blog_section_subtitle); ?></p>
							<?php } if($businessexpo_blog_section_title) { ?>
								<h1 class="section-title"><?php echo wp_kses_post($businessexpo_blog_section_title); ?></h1>
							<?php } ?>
							<div class="divider-main"></div>
						</div>
					</div>
				</div>
			<?php } ?>
			<div class="row">
				<?php
				$post_args = array( 'post_type'	=> 'post', 'posts_per_page'	=> 3, 'category__in' => $businessexpo_theme_blog_category, 'post__not_in' => get_option("sticky_posts"));
				query_posts( $post_args );
				if(query_posts( $post_args )){
					while(have_posts()):the_post(); { ?>
						<div class="col-lg-4 col-sm-6 ">
							<article class="post border-0 shadow rounded-xs">
								<?php if(has_post_thumbnail()) { ?>
									<figure class="post-thumbnail">
										<a href="<?php echo esc_url(get_month_link(get_post_time('Y'),get_post_time('m'))); ?>" class="post-meta">
											<span> <?php echo esc_html(get_the_date('j')); ?> </span>
											<span> <?php echo esc_html(get_the_date('M')); ?> </span>
										</a>
										<a href="<?php the_permalink(); ?>">
											<?php the_post_thumbnail(); ?>
										</a>
									</figure>	
								<?php } ?>
								<div class="post-body"> 
									<ul class="post-widget">
										<i class="fas fa-folder-open"></i>
										<?php 
										/* Category Fetch */
											$categories = get_the_category();
											$output = '';
											if ( ! empty( $categories ) ) {
												foreach( $categories as $category ) {
													$output .= '<li><a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'wpfrank-companion' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a></li>';
												}
												echo $output;
											}
										?>
									</ul>
									<div class="inner-header">
										<h4 class="inner-title mt-3 mb-3"><a href="<?php the_permalink(); ?>"><?php the_title();?></a></h4>
									</div>
									<div class="inner-content"><?php the_excerpt(); ?></div>
									<div class="mt-2">
										<a href="<?php the_permalink(); ?>" class="more-link"><?php _e('Read More','wpfrank-companion'); ?></a>
									</div>
								</div>
							</article>
						</div>
					<?php 
					} endwhile; 
				} ?>
			</div>
		</div>
	</section>
<?php } ?>