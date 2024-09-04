<?php

register_post_type('news', [
'label' => 'Articles',
'description' => 'Les actus du SEF',
'public' => true,
'menu_position' => 20,
'menu_icon' => 'dashicons-portfolio',
'supports' => ['title', 'thumbnail', 'editor'],
]);