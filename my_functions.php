<?php
function get_slug($title, $separator = '-'){
    $slug = preg_replace("/[^a-z0-9أ-ي\s]/iu", "", $title);
    $slug = preg_replace("/\s\s+/", " ", $slug);
    return str_replace(" ", $separator, trim(mb_strtolower($slug, 'UTF-8')));
}
