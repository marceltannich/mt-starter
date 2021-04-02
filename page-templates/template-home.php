<?php

/**
 * Template Name: Home
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined('ABSPATH') || exit;

get_header();
$container = get_theme_mod('understrap_container_type');
?>

<div class="home-section1"></div>

<div class="home-section2"></div>

<div class="home-section3"></div>

<div class="home-section4"></div>

<div class="home-section5"></div>


<?php
get_footer();
