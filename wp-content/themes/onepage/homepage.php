<?php if (is_home() && igthemes_option('portfolio_section') || is_front_page() && igthemes_option('portfolio_section')) { ?>
<div class="portfolio">
    <div class="grid">
            <div class="row">
                <div class="col12">

    <div class="portfolio-text">
        <?php echo igthemes_option('portfolio_text','<h3>Our new project</h3><p>See our latest works</p>'); ?>
    </div>
<div id="portfolio-slider" class="slick">
<?php
    $args = array(
        'post_type' => 'project',
        'posts_per_page' => 9,
        'orderby' => 'post_date',
        'post__not_in' => get_option('sticky_posts'),
        'post_status' => 'publish',
    );
    $post_carousel_query = new WP_Query( $args );
    if ( $post_carousel_query->have_posts() ) :
    while ( $post_carousel_query->have_posts() ) : $post_carousel_query->the_post();
    ?>
    <div class="item">
            <?php if (has_post_thumbnail()) {
                echo  the_post_thumbnail( 'img-slider', array( 'class' => 'carousel-img' ) );
                } ?>
        <div class="carousel-details">
            <span class="project">
                <?php echo ig_portfolio_get_meta('ig_portfolio_project'); ?>
            </span>           
                <?php the_title( sprintf( '<h3 class="carousel-title"><a href="%s">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
        </div>
    </div>
<?php
    endwhile;
    wp_reset_postdata();
    endif
;?>
</div><!-- /.carousel portfolio-->

               </div><!-- .col12 -->
            </div><!-- .row -->
    </div><!-- .grid -->
</div><!-- .portfolio -->
<?php } ;?>

<?php if (is_home() && igthemes_option('testimonials_section') || is_front_page() && igthemes_option('testimonials_section')) { ?>
<div id="testimonials" class="testimonials">
    <div class="grid">
            <div class="row">
                <div class="col12">
                    
    <div class="testimonials-text">
        <?php echo igthemes_option('testimonials_text','<h3>What our clients says</h3><p>We make every thing with best quality, our customers and partners are very happy!</p>'); ?>
    </div>
<div id="testimonials-slider" class="slick">
<?php
    $args = array(
        'post_type' => 'testimonial',
        'posts_per_page' => 9,
        'orderby' => 'post_date',
        'post__not_in' => get_option('sticky_posts'),
        'post_status' => 'publish',
    );
    $post_carousel_query = new WP_Query( $args );
    if ( $post_carousel_query->have_posts() ) :
    while ( $post_carousel_query->have_posts() ) : $post_carousel_query->the_post();
    ?>
    <div class="item">
            <?php if (has_post_thumbnail()) {
                echo '<div class="rounded">';
                echo the_post_thumbnail( 'ig-testimonials-thumb', array( 'class' => 'carousel-img' ) );
                echo '</div>';
                } ?>
        <div class="carousel-details">
            <?php if ( ig_testimonials_get_meta( 'ig_testimonials_name' ) ) : ;?>
                <span class="name">
                    <strong> <?php echo ig_testimonials_get_meta( 'ig_testimonials_name' );?></strong>
                </span>
            <?php endif ;?>
           <?php the_content(); ?>
        </div>
    </div>
<?php
    endwhile;
    wp_reset_postdata();
    endif
;?>
</div><!-- /.carousel testimonials -->

               </div><!-- .col12 -->
            </div><!-- .row -->
    </div><!-- .grid -->
</div><!-- .tetimonials -->
<?php } ;?>