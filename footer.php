<?php
/**
 * The template for displaying the footer
 * 
 * @package Rimk
 */

?>

<!-- start footer area -->
<footer data-img="<?php echo RIMKTHEME_LINK  ?>assets/images/footer-bg.jpg">
<?php get_template_part('components/footer/widgets'); ?>

<?php get_template_part('components/footer/bottom'); ?>
</footer>
<!-- end footer area -->

<?php wp_footer(  ); ?>
</body>
</html>