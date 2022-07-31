<?php
/**
 * The main template file
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Rimk
 */

get_header();

?>
<?php get_template_part( 'components/banner-area' ); ?>
<?php get_template_part( 'components/blog-area' ); ?>

<?php
//get_sidebar();
get_footer();
