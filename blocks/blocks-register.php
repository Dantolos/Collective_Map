<?php
add_action( 'init', 'register_acf_map_blocks' );
function register_acf_map_blocks() {
    register_block_type( __DIR__ . '/map' );
    //require_once( __DIR__ . '/map/map.acf.php' );
}