<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action( 'elementor/frontend/after_enqueue_scripts', 'elementor_frontend_assets', 20 );

function elementor_frontend_assets() {
    wp_dequeue_script('loftocean-elementor-frontend');
}
