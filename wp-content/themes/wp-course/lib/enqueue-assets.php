<?php 

function wpcourse_assets () {
    wp_enqueue_style( 'wpcourse-stylesheet', get_template_directory_uri() . '/dist/assets/css/bundle.css',  array(), '1.0.0', 'all' );
}

add_action( 'wp_enqueue_scripts', 'wpcourse_assets' );

function wpcourse_admin_assets () {
    wp_enqueue_style( 'wpcourse-admin-stylesheet', get_template_directory_uri() . '/dist/assets/css/admin.css',  array(), '1.0.0', 'all' );
}

add_action( 'admin_enqueue_scripts', 'wpcourse_admin_assets' );