<?php

/**
 * Plugin Name: Collective Map
 * Description: Interactive map of network members
 * Version: 1.10
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$plugin_version = get_file_data(__FILE__, array('Version' => 'Version'), false)['Version'];


wp_register_script( 'd3-js',  'https://cdn.jsdelivr.net/npm/d3@7', array(), '1.1', true );
wp_enqueue_script( 'd3-js' );

wp_register_script( 'stimulus-js',  'https://unpkg.com/@hotwired/stimulus/dist/stimulus.js', array(), '1.1', true );
wp_enqueue_script( 'stimulus-js' );

wp_register_script( 'app-js',  plugins_url( '/js/collective_map_app.js', __FILE__ ), array('d3-js', 'stimulus-js'), $plugin_version, true );
wp_enqueue_script( 'app-js' );

add_filter("script_loader_tag", "add_module_to_my_script", 10, 3);
function add_module_to_my_script($tag, $handle, $src)
{
    if ("app-js" === $handle || 'stimulus-js' === $handle || 'd3-js' === $handle) {
        $tag = '<script type="module" src="' . esc_url($src) . '"></script>';
    }

    return $tag;
}


require_once(plugin_dir_path( __FILE__ ).'/blocks/blocks-register.php');
  

?>
