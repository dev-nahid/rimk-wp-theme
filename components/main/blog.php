<!-- start blog area -->
<section class="home1 blog p-120">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2">
                <div class="section-title wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1s">
                    <h2><?php echo get_theme_mod('setting-label-one'); ?></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua saidul</p>
                </div>
            </div>
            <div id="rimk-blog" class="col-lg-12">
                <div class="row justify-content-center">
 <!-- Loop section -->
                <?php 
                if ( have_posts() ) : 
                    while ( have_posts() ) : the_post(); ?>
                    <div class="col-lg-4 col-md-6">
                        <div class="item wow fadeInUp" data-wow-delay="0.3s" data-wow-duration="1s">
                            <div class="image">
                                <a href="<?php the_permalink(); ?>">
                                <?php if ( has_post_thumbnail()) : 
					                the_post_thumbnail( 'thumbnail' );
				                endif; ?>
                                </a>
                            </div>
                            <div class="content">
                                <ul class="d-flex align-items-center">
                                    <li><i class="fas fa-user"></i><?php rimkony_posted_by(); ?></li>
                                    <li><i class="fas fa-calendar-alt"></i><?php rimkony_posted_on(); ?></li>
                                </ul>
                                <a href="<?php the_permalink(); ?>">
                                    <h5><?php the_title(); ?></h5>
                                </a>
                                <p><?php the_excerpt(); ?> </p>
                                <a href="<?php the_permalink() ?>" class="read-more">read more</a>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; 
                endif; 
                ?>
<!-- Loop end section -->
                </div>
            </div>
            
        </div>
    </div>
</section>
<!-- end blog area -->