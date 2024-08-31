<?php

// Load compiled CSS and JS from 'dist' folder.
function sef_enqueue_assets(): void
{
    // Path to `dist` repository at the root of the project.
    $dist_path = get_theme_file_uri( '/../../../dist/' );

    // Include CSS file
    wp_enqueue_style( 'sef-main-style', $dist_path . 'css/main.css', array(), '1.0.0' );

    // Include JavaScript file
    wp_enqueue_script( 'sef-main-script', $dist_path . 'js/main.js', array(), '1.0.0', true );
}

// Action to add styles and scripts to wp_head
add_action( 'wp_enqueue_scripts', 'sef_enqueue_assets' );
