<?php

function get_contact_page_url(): bool|string
{
    $contact_page = get_page_by_path('contact');
    if ($contact_page) {
        return get_permalink($contact_page->ID);
    } else {
        return '#';
    }
}