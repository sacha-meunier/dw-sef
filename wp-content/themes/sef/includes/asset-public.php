<?php

// Load a file from "public" folder
// Usage : <?= dw_asset('theme.css');
function dw_asset(string $file): string
{
    return get_template_directory_uri() . '/public/' . $file;
}