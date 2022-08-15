<div class="col-lg-8 order-0 order-lg-0 home1 blog">
<?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>
    <article>
        <div class="post-inner">
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
    </article>
<?php endwhile; endif; ?>
</div>