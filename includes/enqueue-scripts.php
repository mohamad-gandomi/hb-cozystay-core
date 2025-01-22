<?php

if (!defined('ABSPATH')) {
    exit;
}

add_action( 'elementor/frontend/after_enqueue_scripts', 'elementor_frontend_assets', 30 );

function elementor_frontend_assets() {
    wp_dequeue_script('loftocean-elementor-frontend');

    wp_enqueue_script(
        'hb-loftocean-elementor-frontend',
        HB_COZYSTAY_PLUGIN_URL . 'assets/js/elementor.js',
        array('elementor-frontend'),
        HB_COZYSTAY_VERSION,
        true
    );

    wp_localize_script( 'hb-loftocean-elementor-frontend', 'loftoceanElementorFront', array(
        'countDown' => array(
            'days' => apply_filters( 'loftocean_elementor_days', esc_html__( 'Days', 'loftocean' ) ),
            'hours' => apply_filters( 'loftocean_elementor_hours', esc_html__( 'Hours', 'loftocean' ) ),
            'min' => apply_filters( 'loftocean_elementor_minutes', esc_html__( 'Minutes', 'loftocean' ) ),
            'sec' => apply_filters( 'loftocean_elementor_seconds', esc_html__( 'Seconds', 'loftocean' ) )
        ),
        'reservation' => array(
            'room' => array( 'single' => esc_html__( 'Room', 'loftocean' ), 'plural' => esc_html__( 'Rooms', 'loftocean' ), 'usePluralIfZero' => apply_filters( 'loftocean_room_use_plural_if_rooms_number_is_zero', false ) ),
            'adult' => array( 'single' => esc_html__( 'Adult', 'loftocean' ), 'plural' => esc_html__( 'Adults', 'loftocean' ), 'usePluralIfZero' => apply_filters( 'loftocean_room_use_plural_if_adults_number_is_zero', false ) ),
            'child' => array( 'single' => esc_html__( 'Child', 'loftocean' ), 'plural' => esc_html__( 'Children', 'loftocean' ), 'usePluralIfZero' => apply_filters( 'loftocean_room_use_plural_if_children_number_is_zero', false ) )
        )
    ) );
}
