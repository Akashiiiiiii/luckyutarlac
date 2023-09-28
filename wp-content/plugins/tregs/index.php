<?php
/*
Plugin Name: Custom Plugin
Plugin URI: 
Description: 
Version: 1.0
Author: Ejhay Bautista
Author URI: 
License: 
*/
/* check path
echo plugins_url();
echo "</br>";
echo plugin_dir_path(__FILE__);die; */
define("PLUGIN_DIR_PATH",plugin_dir_path(__FILE__));
define("PLUGIN_URL",plugins_url());
define("PLUGIN_VERSION","1.0");

//echo PLUGIN_DIR_PATH." , " .PLUGIN_URL;die;
/*
function add_my_custom_menu() {
    add_menu_page (
        "customplugin", //Page Title
        "Pinoy Games Plugins", // Menu Title
        "manage_options", //Admin Level
        "tregs-custom-plugin", //Page Slug - parent Slug
        "add_new_function", //Callback function
        "dashicons-admin-tools", //Icon url
        81 // Posistion
    );

    add_submenu_page (
        "tregs-custom-plugin", //parent slug
        "Add New", // page title
        "Add New", //menu title
        "manage_options", //capability = user_level access
        "tregs-custom-plugin", // menu Slug
        "add_new_function", //callback function
    );
    add_submenu_page (
        "tregs-custom-plugin", //parent slug
        "All Pages", // page title
        "All Pages", //menu title
        "manage_options", //capability = user_level access
        "all-pages", // menu Slug
        "all_page_function", //callback function
    );
}

add_action("admin_menu","add_my_custom_menu");

function custom_admin_view(){
    echo "<h1>Hello World</h1>";
}

function add_new_function() {
    // add new page function
   include_once PLUGIN_DIR_PATH."/home/submenuadd.php";
}
function all_page_function() {
    // add all page function
    include_once PLUGIN_DIR_PATH."/home/submenuall.php";
}


function tregs_plugin_assets() {
    // CSS and JS Files
    wp_enqueue_style("tregs_style", //unique name for css file
    PLUGIN_URL."./tregs/home/assets/css/style.css", // css file path
    '', // dependency on other files
    PLUGIN_VERSION, //plugin version number
    );

    wp_enqueue_script("tregs_script", //unique name for js file
    PLUGIN_URL."./tregs/home/assets/js/script.js", // js file path
    '', // dependency on other files
    PLUGIN_VERSION, //plugin version number
    false
    );

    wp_localize_script("tregs_script","ajaxurl",admin_url("admin-ajax.php"));
}

add_action("init","tregs_plugin_assets");


if(isset($_REQUEST['action'])){
    switch($_REQUEST['action']){
        case "tregs_plugin_library" : 
            add_action("admin_init","add_tregs_plugin_library");
        function add_tregs_plugin_library(){
            global $wpdb;
            include_once PLUGIN_DIR_PATH."/home/library/tregs-plugin-lib.php";
        }
        break;
    }
}



//Create table generating code

function tregs_plugin_tables(){
    global $wpdb;
 require_once(ABSPATH . 'wp-admin/includes/upgrade.php');  

 //if (count($wpdb->get_var('SHOW TABLES LIKE "wp_tregs_plugin"')) == 0){

 $sql_query_to_create_table = "CREATE TABLE `wp_tregs_plugin` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `tbl_title` text NOT NULL,
    `tbl_paragraph` text NOT NULL,
    `tbl_column` text NOT NULL,
    `tbl_status` text NOT NULL,
    `tbl_language` text NOT NULL,
    PRIMARY KEY (`id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4"; /// sql query to create table

 dbDelta($sql_query_to_create_table);
 //}
}

register_activation_hook(__FILE__,'tregs_plugin_tables');

// table deleting code
function tregs_deactivate_table(){
    // uninstall mysql code
    global $wpdb;
    $wpdb->query("DROP table IF Exists wp_tregs_plugin");
    
    // step1: we get the id of post means page
    // delete the post from table
    
    $the_post_id = get_option("custom_plugin_page_id");
    if(!empty($the_post_id)){
       wp_delete_post($the_post_id,true);
    }
  
 }

 register_uninstall_hook(__FILE__,"tregs_deactivate_table");

*/

  add_shortcode("custom_shortcode","custom_pluginfunction");

 function custom_pluginfunction(){
    // attached shotcode file
    include_once PLUGIN_DIR_PATH."/home/assets/shortcode/shortcode.php";
 }
 

/**
* Theme scripts
*/
add_action( 'wp_enqueue_scripts', 'theme_scripts' );
function theme_scripts() {
  if ( ! is_admin() ) {

    /**
    * Register then enqueue jquery js
    *
    * Check if CDN's url is valid, if not return fallback
    */
    $test_jquery_js = @fopen( 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', 'r' );
    if ( $test_jquery_js !== false ) {
      wp_register_script( 'jquery_js', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js' );
    } else {
      wp_register_script( 'jquery_js', get_template_directory_uri() . 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', array() );
    };
    wp_enqueue_script( 'jquery_js' );


	/**
    * Register then enqueue bootstrap css (Bootstrap 5.x required)
    *
    * Check if CDN's url is valid, if not return fallback
    */
    $test_bootstrap_css = @fopen( 'https://github.hubspot.com/odometer/themes/odometer-theme-minimal.css', 'r' );
    if ( $test_bootstrap_css !== false ) {
      wp_register_style( 'bootstrap_css', 'https://github.hubspot.com/odometer/themes/odometer-theme-minimal.css' );
    } else {
      wp_register_style( 'bootstrap_css', get_stylesheet_uri() . 'https://github.hubspot.com/odometer/themes/odometer-theme-minimal.css' );
    };
    wp_enqueue_style( 'bootstrap_css' );
	
	/**
    * Register then enqueue style css
    */
    wp_register_style( 'style_css', get_stylesheet_uri(), array( 'bootstrap_css' ) );
    wp_enqueue_style( 'style_css' );
  };
};


add_action( 'wp_enqueue_scripts', 'theme_scriptsodemeter' );
function theme_scriptsodemeter() {
  if ( ! is_admin() ) {

    /**
    * Register then enqueue jquery js
    *
    * Check if CDN's url is valid, if not return fallback
    */
    $test_jquery_js_odometer = @fopen( 'https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.8/odometer.min.js', 'r' );
    if ( $test_jquery_js_odometer !== false ) {
      wp_register_script( 'jquery_js_odemeter', 'https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.8/odometer.min.js' );
    } else {
      wp_register_script( 'jquery_js_odemeter', get_template_directory_uri() . 'https://cdnjs.cloudflare.com/ajax/libs/odometer.js/0.4.8/odometer.min.js', array() );
    };
    wp_enqueue_script( 'jquery_js_odemeter' );

  }
}



