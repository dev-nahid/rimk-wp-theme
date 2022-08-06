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
<?php get_template_part( 'components/header/breadcrumb' ); ?>

<main id="primary" class="site-main post">

    <?php get_template_part( 'components/main/blog' ); ?>

</main><!-- #main -->

<?php
//get_sidebar();
get_footer();
