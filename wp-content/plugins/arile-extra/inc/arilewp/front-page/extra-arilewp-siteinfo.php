<?php 
$arilewp_theme_info_content  = get_theme_mod( 'arilewp_theme_info_content');
$arilewp_theme_info_disabled = get_theme_mod('arilewp_theme_info_disabled', true);
$activate_theme_data = wp_get_theme(); // getting current theme data
$activate_theme = $activate_theme_data->name;
if($arilewp_theme_info_disabled == true): ?>
<div class="container <?php if($activate_theme == 'Ariletech' || $activate_theme == 'Fresno') { echo 'vrsn-two'; } ?>" id="theme-info-area">
	<div class="row theme-info-area" style="padding:0">
						
						<div class="col-lg-4 col-md-6 col-sm-12">
						<a href="https://sienna.inplay.ph/?o=lut">
							<div class="media">
								
								<div class="media-body align-self-center" style="text-align:center">
								<i class="icon fa fa-user-plus" style="margin-bottom:10px"></i>
								<h5 class="theme-info-area-title">Register</h5>
									<span class="info-details">Check that you qualify to register, then fill up our form.</span>
								</div>
							</div>
							</a>
						</div>
						
				
						<div class="col-lg-4 col-md-6 col-sm-12">
						<a href="#">
							<div class="media">
								
								<div class="media-body align-self-center" style="text-align:center">
								<i class="icon fa fa-money" style="margin-bottom:10px"></i>
									<h5 class="theme-info-area-title">Deposit</h5>
									<span class="info-details">Once the validation process has been completed, account will be activated for deposit.</span>
								</div>
							</div>
							</a>
						</div>
				
				
						<div class="col-lg-4 col-md-6 col-sm-12">
						<a href="#">
							<div class="media">
								<div class="media-body align-self-center" style="text-align:center">
								<i class="icon fa fa-play" style="margin-bottom:10px"></i>
									<h5 class="theme-info-area-title">PLAY</h5>
									<span class="info-details">Login and start exploring our casino. Enjoy!</span>
								</div>
							</div>
							</a>
						</div>
				
	</div>
</div>
<?php endif; ?>