<?php

require_once(get_template_directory() . '/helper.php');


add_action('wp_enqueue_scripts', 'my_theme_enqueue_files');

function my_theme_enqueue_files()
{

  // fonts
  wp_enqueue_style('fonts', get_template_directory_uri() . '/css/fonts/fonts.css');

  //basic styles
  wp_enqueue_style('start-reset', get_template_directory_uri() . '/css/start-reset.css');
  wp_enqueue_style('globals', get_template_directory_uri() . '/css/globals.css');
  wp_enqueue_style('general', get_template_directory_uri() . '/scss/general.css');

  // elements styles
  


  // main theme's style file
  wp_enqueue_style('style', get_stylesheet_uri());

  //external scripts
  wp_enqueue_script('font-awesome-kit', 'https://kit.fontawesome.com/3f554732dc.js', [], null);

  // custom scripts files
  wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js');

}











// header nav menu
add_action('init', 'register_my_menu');

function register_my_menu()
{
  register_nav_menu('header-menu', __('Header Menu'));
}

add_action('init', 'register_my_mobil_menu');

function register_my_mobil_menu()
{
  register_nav_menu('mobil-menu', __('Mobil Menu'));
}




// turn off the default Gutenberg builder
add_filter("use_block_editor_for_post_type", "disable_gutenberg_editor");

function disable_gutenberg_editor()
{
  return false;
}




/* Disable WordPress Admin Bar for all users */
add_filter('show_admin_bar', '__return_false');

// remove top margin by WP admin panel
add_action('get_header', 'remove_admin_login_header');

function remove_admin_login_header()
{
  remove_action('wp_head', '_admin_bar_bump_cb');
}




// create global options contents fields
if (function_exists('acf_add_options_page')) {
  acf_add_options_page();
}




// filter for download .svg files from: https://github.com/WordPress/gutenberg/issues/22861
add_filter('upload_mimes', function () {
  $mimes = [
    'svg' => 'image/svg+xml',
    'jpg|jpeg' => 'image/jpeg',
    'png' => 'image/png',
  ];
  return $mimes;
});




// turn on post's thumbnails
add_action('after_setup_theme', 'theme_features');

function theme_features()
{
  add_theme_support('post-thumbnails');
}



// fix Woo Commerce .svg bug
add_filter('woocommerce_resize_images', static function() {
    return false;
});


?>