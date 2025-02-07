<?php get_header(); ?>

<main class="py-2 py-lg-3" id="elementtoScrollToID">
    <section class="welcome development-welcome py-2 pt-md-1 pb-md-350">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-1 welcome-slider__col mb-2 mb-lg-0">
                    <div class="owl-carousel welcome-slider owl-theme position-relative">
                        <div class="item welcome-slider__item text-center p-2 development__logo--shadow d-flex justify-content-center align-items-center">
                            <img src="<?php the_field('development_squared_logo'); ?>" alt="<?php the_title(); ?> logo" class="img-fluid d-block">
                        </div><!-- item -->
                    </div><!-- welcome-slider -->
                </div><!-- col -->
                <div class="col-lg-6">
                    <div class="max-width-550">
                        <h2 class="development-description mb-1"><?php the_field('development_description'); ?></h2>
                        <?php if (get_field('external_link')):
                            $listing_card = get_field('development_listing_card');
                            if ($listing_card['card_button_text']) {
                                $card_button_text = $listing_card['card_button_text'];
                            } else {
                                $card_button_text = "Community Website";
                            }
                            ?>
                        <a href="<?php echo $listing_card['card_button_link']['url'];?>" class="btn btn-primary text-white" target="_blank"><?php echo $card_button_text; ?></a>
                        <?php endif; ?>

                        <?php
                        $subscribe = get_field('subscribe');
                        if (strlen($subscribe['subscribe_text'])): ?>
                            <a href="<?php echo $subscribe['subscribe_link'];?>" target="_blank" class="btn btn-primary"><?php echo $subscribe['subscribe_text'];?></a>
                        <?php endif; ?>
                    </div><!-- max-width--550 -->
                </div><!-- col -->
            </div><!-- row-->
        </div><!-- container -->
    </section><!-- welcome section-->


    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php if (have_posts()) : ?>

                    <?php /* Start the Loop */ ?>

                    <?php while (have_posts()) : the_post(); ?>

                        <?php the_content(); ?>

                    <?php endwhile; ?>

                <?php endif; ?>
            </div>
        </div>
    </div>

</main>

<?php
// check if the flexible content field has rows of data
if (have_rows('bottom_addition')):

// loop through the rows of data
    while (have_rows('bottom_addition')) : the_row();
        if (get_row_layout() == 'addition'): ?>
            <section class="page-listing position-relative" style="background: transparent url(<?php the_sub_field('faded_background_image');?>) no-repeat top left; background-size: cover;">

                <div class="block__white-tint-overlay position-absolute" style="z-index:1;"></div>

                <div class="container-fluid px-xl-0 position-relative" style="z-index: 2">
                    <div class="row">
                        <div class="col-xl-6 d-none d-xl-block position-relative" style="background: transparent url(<?php the_sub_field('faded_background_image');?>) no-repeat top left; background-size: cover;">
                            <div class="block__gradient-overlay--left-to-right position-absolute" style="z-index:1;"></div>
                        </div><!-- col -->

                        <div class="col-xl-6 py-25 pt-xl-3  pb-xl-6 page-listing__content">

                            <div class="page-listing--max-width">
                                <h3 class="h1 mb-50"><?php the_sub_field('title'); ?></h3>
                                <?php the_sub_field('blurb'); ?>
                                <?php if (have_rows('listing')): ?>
                                    <div class="row pt-1">
                                        <?php while (have_rows('listing')): the_row(); ?>
                                            <div class="col page-list">
                                                <h4 class="listing-title mb-50"><?php the_sub_field('listing_title'); ?></h4>
                                                <?php if (have_rows('listing_item')): ?>
                                                    <ul>
                                                        <?php while (have_rows('listing_item')): the_row(); ?>
                                                            <li><?php the_sub_field('list_item'); ?></li>
                                                        <?php endwhile; ?>
                                                    </ul>
                                                <?php endif; ?>
                                            </div><!-- col page-list -->
                                        <?php endwhile; ?>
                                    </div><!-- row -->
                                <?php endif; ?>
                            </div><!-- page-listing--max-width -->

                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container -->

            </section><!-- page-listing -->
        <?php endif; ?>
    <?php endwhile; ?>
<?php endif; ?>

<!-- Slider Photos -->
<?php
$photos = get_field('development_photos');
if ($photos):
?>
<div class="container mb-3 position-relative project-slider-container">
    <div class="project-slider">
        <?php
        foreach ($photos as $photo):
            ?>
            <div class="item">
                <img class="img-fluid" src="<?php echo $photo['photo']['url']; ?>" alt="">
            </div>
        <?php endforeach; ?>
    </div>
    <i class="fas fa-chevron-left sliderArrowLeft"></i>
    <i class="fas fa-chevron-right sliderArrowRight"></i>
</div>
<?php endif; ?>
<!-- End Slider Photos -->

<section class="mb-2 mb-md-3">
    <div class="container">
        <a href="<?php echo esc_url(home_url('/our-developments')); ?>" class="btn btn-primary gk-button--full">Explore <span class="d-none d-sm-inline">&nbsp;All&nbsp;</span> Developments</a>
    </div><!-- container -->
</section><!-- button-->

<?php get_footer(); ?>
