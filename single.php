<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Rimk
 */

get_header();
?>

<?php get_template_part( 'components/banner-area' ); ?>

<main id="primary" class="site-main">

    <?php get_template_part( 'components/blog-area' ); ?>

</main><!-- #main -->

<?php

get_footer();
