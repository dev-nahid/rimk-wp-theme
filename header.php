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
    <link rel="shortcut icon" href="<?php echo RIMK_LINK  ?>assets/images/favicon.png" type="image/x-icon"/>

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
        <!-- start menubar area -->
        <section class="menubar">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="menu-bg">
                            <nav class="navbar p-0">
                                <a class="navbar-brand p-0" href="index.html">
                                    <img src="<?php echo RIMK_LINK  ?>assets/images/logo.png" alt="Logo" />
                                </a>
                                <div class="header-menu position-static">
                                    <ul class="menu">
                                        <li class="active">
                                            <a href="#!">home</a>
                                            <ul>
                                                <li class="active"><a href="index.html">home 1</a></li>
                                                <li><a href="index2.html">home 2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="about.html">about</a></li>
                                        <li>
                                            <a href="#!">service</a>
                                            <ul>
                                                <li><a href="service.html">service</a></li>
                                                <li><a href="service-detail.html">service details</a></li>
												<li><a href="#">New service item</a>
													<ul>
														<li><a href="#!">Item one</a></li>
													</ul>
												</li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#!">pages</a>
                                            <ul>
                                                <li><a href="about.html">about</a></li>
                                                <li><a href="service.html">service</a></li>
                                                <li><a href="service-detail.html">service details</a></li>
                                                <li><a href="project.html">project</a></li>
                                                <li><a href="project-detail.html">project details</a></li>
                                                <li><a href="team.html">team</a></li>
                                                <li><a href="team-detail.html">team details</a></li>
                                                <li><a href="blog.html">blog</a></li>
                                                <li><a href="blog-detail.html">blog details</a></li>
                                                <li><a href="contact.html">contact</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#!">project</a>
                                            <ul>
                                                <li><a href="project.html">project</a></li>
                                                <li><a href="project-detail.html">project details</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#!">blog</a>
                                            <ul>
                                                <li><a href="blog.html">blog</a></li>
                                                <li><a href="blog-detail.html">blog details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="contact.html">contact</a></li>
                                    </ul>
                                </div>
                                <div class="right-part">
                                    <a href="about.html" class="button-style">read more <i class="fas fa-arrow-circle-right"></i></a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end menubar area -->
    </header>
    <!-- end header area -->