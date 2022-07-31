<?php
/**
 * The header for our theme
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Rimk
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- favicon -->
    <link rel="shortcut icon" href="<?php echo RIMKTHEME_LINK  ?>assets/images/favicon.png" type="image/x-icon"/>

    <!-- josefin sans font -->
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet"> 


<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
    <!-- start preloader area -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="line line-1"></div>
            <div class="line line-2"></div>
            <div class="line line-3"></div>
            <div class="line line-4"></div>
           <div class="line line-5"></div> 
        </div>
    </div>
    <!-- end preloader area -->

    <!-- start top-tp button area -->
    <button class="top-btn">
        <i class="fas fa-chevron-up"></i>
    </button>
    <!-- end top-tp button area -->

    <!-- start header area -->
    <header>
    
    <?php 
    if ( is_page( ) ) {
        get_template_part( 'components/header/page-menubar' );
    }else {
        get_template_part( 'components/header/post-menubar' );
    }
    ?>

    </header>
    <!-- end header area -->