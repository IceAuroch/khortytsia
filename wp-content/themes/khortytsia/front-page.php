<?php

get_header();

$sections = [
    'main',
    'tur-object',
    'map',
    'youtube',
    'last-news'
];

foreach ($sections as $section) {
    get_template_part('template-parts/' . $section);
}

get_footer();
