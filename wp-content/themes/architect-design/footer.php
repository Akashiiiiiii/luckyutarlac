<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link    https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Architect Design
 */
$architect_design_footer_widgets_enabled = get_theme_mod('arilewp_footer_widgets_enabled', true);  
$architect_design_footer_container_size = get_theme_mod('arilewp_footer_container_size', 'container-full');
$architect_design_footer_copright_enabled = get_theme_mod('arilewp_footer_copright_enabled', true);
$architect_design_footer_copright_text = get_theme_mod('arilewp_footer_copright_text', __('Copyright &copy; 2021 | Powered by <a href="//wordpress.org/">WordPress</a> <span class="sep"> | </span> Architect Design theme by <a target="_blank" href="//themearile.com/">ThemeArile</a>', 'architect-design'));
$architect_design_scroll_to_top_enabled = get_theme_mod('arilewp_scroll_to_top_enabled', true); 
?>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

<!-- Messenger Chat Plugin Code -->
<!--<div id="fb-root"></div>-->

<!-- Your Chat Plugin code -->
<!--<div id="fb-customer-chat" class="fb-customerchat">
</div>-->


	
	<!-- <div class="icon-bar badge badge-pill" style="background-color:#b99425">
   <a href="viber://chat?number=639275246950" class="viber"><i class="fab fa-viber"></i></a>
	</div>
	
	<div class="icon-bartelegram badge badge-pill" style="background-color:#b99425">
   <a href="tg://resolve?domain=tarlucky" class="viber"><i class="fab fa-telegram"></i></a>
	</div>
	
	 <div class="icon-messenger badge badge-pill" style="background-color:#b99425">
   <a href="https://www.facebook.com/ezbetgaming/"><i class="fab fa-facebook-f"></i></a>
	</div>
	 -->
	<!--Footer-->
	<footer class="site-footer light">

	<?php if($architect_design_footer_widgets_enabled == true): ?>
		<div class="<?php echo esc_attr($architect_design_footer_container_size); ?>">
			<!--Footer Widgets-->			
			<div class="row footer-sidebar">
			   <?php get_template_part('sidebar','footer');?>
			</div>
		</div>
		<!--/Footer Widgets-->
	<?php endif; ?>		
		

    <?php if($architect_design_footer_copright_enabled == true): ?>
		<!--Site Info copyright-->
		<div class="site-info text-center">
			<?php echo wp_kses_post($architect_design_footer_copright_text); ?>				
		</div>
		<!--/Site Info copyright-->			
	<?php endif; ?>	
			
	</footer>
	<!--/Footer-->		
	<?php if($architect_design_scroll_to_top_enabled == true): ?>
		<!--Page Scroll to Top-->
		<div class="page-scroll-up"><a href="#totop"><i class="fa fa-angle-up"></i></a></div>
		<!--/Page Scroll to Top-->
    <?php endif; ?>	
	
<?php wp_footer(); ?>





<script>
/*
  var chatbox = document.getElementById('fb-customer-chat');
  chatbox.setAttribute("page_id", "2318438311582616");
  chatbox.setAttribute("attribution", "biz_inbox");
</script>

<!-- Your SDK code -->
<script>
  window.fbAsyncInit = function() {
    FB.init({
      xfbml            : true,
      version          : 'v13.0'
    });
  };

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));
  */
</script>


<style>

.icon-bar {
  z-index: 9999;
}
.icon-bar {
  position: fixed;
  bottom: 70px;
  right:25px;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  width:60px;
  height: 60px;
}

.icon-bar a {
  display: block;
  text-align: center;
  padding-top: 5px;
  transition: all 0.3s ease;
  color: white;
  font-size: 45px;
}

.icon-bartelegram {
  z-index: 9999;
}
.icon-bartelegram {
  position: fixed;
  bottom: 148px;
  right:25px;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  width:60px;
  height: 60px;
}

.icon-bartelegram a {
  display: block;
  text-align: center;
  padding-top: 5px;
  transition: all 0.3s ease;
  color: white;
  font-size: 45px;
}

.icon-messenger {
  z-index: 9999;
}
.icon-messenger {
  position: fixed;
  bottom: 0;
  right:25px;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  width:60px;
  height: 60px;
}

.icon-messenger a {
  display: block;
  text-align: center;
  padding-top: 5px;
  transition: all 0.3s ease;
  color: white;
  font-size: 45px;
}

.viber {
  color: white;
  border-radius:30px;
}
@media (max-width: 786px) {
  .icon-bar {
  position: fixed;
  bottom: 70px;
  right:25px;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  width:60px;
  height: 60px;
}

.icon-bar a {
  display: block;
  text-align: center;
  padding-top: 5px;
  transition: all 0.3s ease;
  color: white;
  font-size: 45px;
}



.viber {
  color: white;
  border-radius:30px;
}
}

@media (max-height: 500px) {
  .icon-bar {
  position: fixed;
  bottom: 60px;
  right:25px;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  width:60px;
  height: 60px;
}

.icon-bar a {
  display: block;
  text-align: center;
  padding-top: 5px;
  transition: all 0.3s ease;
  color: white;
  font-size: 45px;
}



.viber {
  color: white;
  border-radius:30px;
}
}


</style>


</body>
</html>