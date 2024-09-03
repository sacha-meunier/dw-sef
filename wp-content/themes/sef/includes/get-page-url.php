<?php

/**
 * Get page URL by it's slug.
 *
 * @param string $slug The slug of the page.
 * @return string The URL of the page or '#' if page doesn't exist.
 */
function get_page_url_by_slug(string $slug): string
{
    $page = get_page_by_path($slug);
    if ($page) {
        return get_permalink($page->ID);
    } else {
        return '#';
    }
}