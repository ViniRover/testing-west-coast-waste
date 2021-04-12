<?php
/**
 * Template Name: Template - Home
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
?>

<div class="home-hero-banner-top">
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-7 col-xl-7">
                <div class="skip-bin-info-holder">
                    <div class="title">
                        <i class="fa fa-arrow-circle-up"></i> Skip Bin instant quote
                    </div>
                    <div class="description">
                        Simply type your suburb above and you will be provided with an instant price across our range
                    </div>
                </div>
            </div>
            <div class="col-lg-4 offset-xl-1">
                <div class="seven-day-skip-info">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/home-hero-right-info.svg" alt="West Coast Info" width="100%">
                    <div class="title">
                        7-Day skip bin hire direct to your name home covering Perth to Albany
                    </div>
                </div>
            </div>
        </div>

        <div class="home-hero-slider">
            <div class="slider">
                <div class="slider-wrapper">
                    <div class="slide">
                        <div class="image"></div>
                        <div class="entry-content">
                            <div class="info">
                                We deliver the right skip bin for your residential and comercial projects.
                            </div>
                            <div class="slider-nav">
                                <a href="#">
                                    <i class="fa fa-arrow-circle-left"></i>
                                </a>
                                <a href="#">
                                    <i class="fa fa-arrow-circle-right"></i> 
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="home-product-info">
    <div class="home-products-holder">
        <div class="container">
            <h2><i class="fa fa-arrow-circle-down"></i>Select the right skip bin for your project</h2>
            <div class="home-products">
                <?php 
                    $args = array(
                        'post_type' => 'product',
                        'orderby' => 'title',
                        'order' => 'ASC',
                        'product_cat' => 'Bin',
                        'posts_per_page' => 4
                    );

                    $index = 0;
                    $loop = new WP_Query($args);
                    while( $loop->have_posts()) : $loop->the_post(); global $product;
                    $index++;
                ?>
                <div class="home-product">
                    <div class="row">
                        <div class="col-xl-4 col-md-6">
                            <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id(), 'medium'); ?>
                            <img src="<?php echo $image[0] ?>">
                        </div>
                        <div class="col-xl-4 col-md-6">
                            <a href="<?php the_permalink(); ?>" class="title">
                                <?php the_field('full_title'); ?>
                            </a>
                            <?php
                                the_excerpt();
                            ?>
                            
                        </div>
                        <div class="col-xl-4 col-lg-12">
                            <div class="home-product-circles">
                                <div class="row">
                                    <div class="offset-lg-3 offset-xl-0 offset-md-2 col-xl-6 col-lg-3 col-md-4 col-sm-6 col-6">
                                        <div class="circle">
                                            <div class="abs-circle-holder">
                                                <div class="content-holder">
                                                    Approx x <?php the_field('approx_trailer'); ?> trailers
                                                </div>
                                                <div class="icon">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/home-trailer.svg" alt="Trailer">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-lg-3 col-md-4 col-sm-6 col-6">
                                        <div class="circle">
                                            <div class="abs-circle-holder">
                                                <div class="content-holder">
                                                    Approx x <?php the_field('approx_bin'); ?> wheelie bins
                                                </div>
                                                <div class="icon">
                                                    <img src="<?php echo get_template_directory_uri(); ?>/img/home-bin.svg" alt="Bin">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="<?php the_permalink(); ?>" class="abs-holder-button">
                        Get a quote for this skip bin
                    </a>
                </div>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
            </div>
        </div>
    </div>
</div>


<?php
get_footer();
