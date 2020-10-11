<?php
function rochestergrp_theme_styles_scripts()
{
  // 	styles
  wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
  wp_enqueue_style('custom-style', get_stylesheet_uri());
  wp_enqueue_style('roboto-font', 'https://fonts.googleapis.com/css?family=Roboto');
  wp_enqueue_style('spectral-font', 'https://fonts.googleapis.com/css?family=Spectral');
  wp_enqueue_style('font-awsome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css');

  // javascripts
  wp_enqueue_script('bootstrap-jquery', 'https://code.jquery.com/jquery-3.2.1.min.js', array('jquery'));
  wp_enqueue_script('bootstrap-propper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js', array('jquery'));
  wp_enqueue_script('bootstrap-min', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js', array('jquery'));
  wp_enqueue_script('custom-js', get_template_directory_uri() . '/assets/js/index.js');

  // js slider scripts and styles
  if (is_home()) {
    wp_enqueue_script('slider', get_template_directory_uri() . '/assets/js/slider/js/splide.min.js');
    wp_enqueue_style('slider-css', get_template_directory_uri() . '/assets/js/slider/css/splide.min.css');
    // load splider onjects
    wp_enqueue_script('slider-objects', get_template_directory_uri() . '/assets/js/index-slider-objects.js');
  }
}
add_action('wp_enqueue_scripts', 'rochestergrp_theme_styles_scripts');
// dynamic logo
add_theme_support('custom-logo');
// add post thumbnail image section
add_theme_support('post-thumbnails');
// contact-form-7
add_filter('wpcf7_form_action_url', 'remove_unit_tag');
function remove_unit_tag($url)
{
  $remove_unit_tag = explode('#', $url);
  $new_url = $remove_unit_tag[0];
  return $new_url;
}

// custom vehicle post
function vehicle()
{
  $supports = array(
    'title', // post title
    'editor', // post content
    'thumbnail', // featured images
    'custom-fields', // custom fields
  );
  $labels = array(
    'name' => _x('vehicle', 'plural'),
    'singular_name' => _x('vehicle', 'singular'),
    'menu_name' => _x('vehicle', 'admin menu'),
    'name_admin_bar' => _x('vehicle', 'admin bar'),
    'add_new' => _x('Add New', 'add new'),
    'add_new_item' => __('Add New vehicle'),
    'new_item' => __('New'),
    'edit_item' => __('Edit'),
    'view_item' => __('View'),
    'all_items' => __('All vehicle'),
    'search_items' => __('Search vehicle'),
    'not_found' => __('Not found vehicle.'),
  );
  $args = array(
    'supports' => $supports,
    'labels' => $labels,
    'public' => true,
    'query_var' => true,
    'rewrite' => array('slug' => 'vehicle'),
    'has_archive' => true,
    'hierarchical' => false,
  );
  register_post_type('vehicle', $args);
  // How to use vehicle post :
  // Install "dynamic_featured_image" plugn.
  // custom fields while posting a vehicles = (mileage, reg_year, make(only can be mercedes, toyota, bmw, jeep), engine_size, gearbox_type, engine_consumption_type, doors, seats, place, price, rrp_price, saving, sub_heading)
  // also add thumbnail and featured images on the side and publish post
}
// register vehicle post
add_action('init', 'vehicle');
