<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Rimk
 */

get_header();

get_template_part( 'components/header/breadcrumb' ); ?>

<main id="primary" class="site-main post">
    <section class="blog-detail p-120">
        <div class="container">
            <div class="row">
                <!-- start blog detail inner -->
                <div class="col-lg-8 order-1 order-lg-0">
                    <div class="detail-inner">
                        <!-- blog image -->
                        <div class="main-img wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1s">
                            <img src='<?php echo RIMKTHEME_LINK . "assets/images/blog/blog-img.jpg"?>' alt="Single Blog">
                        </div>

                        <!-- blog title -->
                        <h3 class="wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1s">Four ways cheer yourself Blue Monday!</h3>

                        <!-- blog meta data -->
                        <div class="blog-meta d-flex align-items-center wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1s">
                            <div class="author d-flex align-items-center">
                                <img src='<?php echo RIMKTHEME_LINK . "assets/images/blog/author.jpg"?>' class="img-fluid" alt="Author">
                                <p><?php echo 'Nahid Hasan' ?></p>
                            </div>
                            <ul class="meta-list d-flex">
                                <li class="d-flex align-items-center">
                                    <i class="fas fa-calendar-alt"></i>
                                    <p><?php rimkony_posted_on(); ?></p>
                                </li>
                                <li class="d-flex align-items-center">
                                    <i class="far fa-comment"></i>
                                    <p>Comments: <?php echo get_comments_number(); ?></p>
                                </li>
                            </ul>
                        </div>

                        <?php the_content(); ?>
                        
                        <!-- share blog -->
                        <div class="share-blog d-flex align-items-center justify-content-center wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1s">
                            <span>share:</span>
                            <div class="media-body">
                                <ul class="social d-flex">
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- start comment area -->
                        <div class="comments wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1s">
                            <h3>3 Comments</h3>
                            <!-- start comment list -->
                            <ul class="comment-list">
                                <!-- single comment -->
                                <li class="single-comment">
                                    <a href="#!">
                                        <img src='<?php echo RIMKTHEME_LINK . "assets/images/blog/reply.jpg" ?>' alt="Reply Image">
                                    </a>
                                    <div class="comment-body">
                                        <div class="comment-author d-flex align-items-center justify-content-between">
                                            <ul class="d-flex align-items-center">
                                                <li><a href="#!">Diego Fou</a></li>
                                                <li><span>jan 06 2020</span></li>
                                            </ul>
                                            <a href="#!" class="reply">
                                                <i class="fas fa-reply-all"></i>
                                                reply
                                            </a>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt utx gh labore et dolor magna ali Ut enim ad minim veniam, quis nostrud exercitation .</p>
                                    </div>
                                    <!-- start reply comment list -->
                                    <ul class="comment-list">
                                        <!-- reply comment -->
                                        <li class="single-comment">
                                            <a href="#!">
                                                <img src='<?php echo RIMKTHEME_LINK . "assets/images/blog/reply2.jpg" ?>' alt="Reply Image">
                                            </a>
                                            <div class="comment-body">
                                                <div class="comment-author d-flex align-items-center justify-content-between">
                                                    <ul class="d-flex align-items-center">
                                                        <li><a href="#!">prience Fou</a></li>
                                                        <li><span>jan 06 2020</span></li>
                                                    </ul>
                                                    <a href="#!" class="reply">
                                                        <i class="fas fa-reply-all"></i>
                                                        reply
                                                    </a>
                                                </div>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt utx gh labore et dolor magna ali Ut enim ad minim veniam, quis</p>
                                            </div>
                                        </li>
                                    </ul>
                                    <!-- end reply comment list -->
                                </li>
                                <!-- single comment -->
                                <li class="single-comment">
                                    <a href="#!">
                                        <img src='<?php echo RIMKTHEME_LINK . "assets/images/blog/reply3.jpg" ?>' alt="Reply Image">
                                    </a>
                                    <div class="comment-body">
                                        <div class="comment-author d-flex align-items-center justify-content-between">
                                            <ul class="d-flex align-items-center">
                                                <li><a href="#!">John Dou</a></li>
                                                <li><span>jan 06 2020</span></li>
                                            </ul>
                                            <a href="#!" class="reply">
                                                <i class="fas fa-reply-all"></i>
                                                reply
                                            </a>
                                        </div>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt utx gh labore et dolor magna ali Ut enim ad minim veniam, quis nostrud exercitation .</p>
                                    </div>
                                </li>
                            </ul>
                            <!-- end comment list -->
                        </div>
                        <!-- end comment area -->

                        <!-- start leave a reply area -->
                        <div class="leave-reply wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1s">
                            <h3>Leave a Reply</h3>
                            <form action="#!">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <input type="text" placeholder="your name*" required class="input-reply">
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <input type="email" placeholder="your email*" required class="input-reply">
                                    </div>
                                    <div class="col-lg-12">
                                        <textarea placeholder="your comment*" required class="input-reply"></textarea>
                                    </div>
                                    <div class="col-lg-12">
                                        <button type="submit" class="button-style"><span>submit</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- end leave a reply area -->
                    </div>
                </div>
                <!-- end blog detail inner -->
                <?php get_sidebar( ); ?>
            </div>
        </div>
    </section>
</main><!-- #main -->
<?php

get_footer();
