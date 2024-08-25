<?php

// Lets Wordpress define the title-tag for each page based on the context.
function sef_theme_setup() {
add_theme_support( 'title-tag' );
}
add_action( 'after_setup_theme', 'sef_theme_setup' );
