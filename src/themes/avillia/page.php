<?php
get_header();
?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

        <?php if (is_page(46)) : ?>

            <?php get_template_part('loop-templates/content', 'development'); ?>

        <?php else : ?>

            <main class="py-2 py-lg-3">

                <div class="container">
                    <div class="row">
                        <div class="col-12">

                            <?php the_content(); ?>

                        </div>
                    </div>
                </div>

            </main>

        <?php endif; ?>

    <?php endwhile; // end of the loop. ?>
<?php endif; ?>

<!-- If page is What We Do, display what we do module -->
<?php if (is_page(44)): ?>
<section class="what-we-do py-3 pb-md-150 bg-soft">
    <div class="container">
        <div class="row justify-content-center mb-50">
            <div class="col-lg-5">
                <h2 class="h1 text-center mb-1">
                    <?php the_field('section_heading', '2'); ?>
                </h2>
                <p class="text-center">
                    <?php the_field('section_intro', '2'); ?>
                </p>
            </div><!-- col -->
        </div><!-- row -->
        <div class="row justify-content-center">

            <?php if (have_rows('service_cards', '2')): ?>
                <?php while (have_rows('service_cards', '2')): the_row(); ?>

                    <div class="col-12 col-md-6 col-xl service__card-wrapper mb-1">
                        <?php if (get_sub_field('section_link')): ?>
                        <a href="<?php the_sub_field('section_link'); ?>" title="Read More" class="text-decoration--none">
                            <?php endif; ?>
                            <div class="py-1 px-50 service__card text-center h-100" style="background-color: <?php echo the_sub_field('card_color'); ?>">
                                <img src="<?php the_sub_field('card_icon'); ?>"
                                     alt="<?php the_sub_field('card_title'); ?> Icon" class="img-fluid mb-1">
                                <h3 class="h5 font-pop mb-1 text-white"><?php the_sub_field('card_title'); ?></h3>
                                <p class="text-white mb-0"><?php the_sub_field('card_text'); ?></p>
                            </div>
                            <?php if (get_sub_field('section_link')): ?>
                        </a>
                    <?php endif; ?>
                    </div><!-- col -->

                <?php endwhile; ?>
            <?php endif; ?>

        </div><!-- row -->
    </div><!-- container -->

</section><!-- what-we-do -->
<?php endif; ?>

<?php
// check if the flexible content field has rows of data
if (have_rows('bottom_addition')):

// loop through the rows of data
    while (have_rows('bottom_addition')) : the_row();
        if (get_row_layout() == 'addition'): ?>
            <section class="page-listing position-relative"
                     style="background: transparent url(<?php the_sub_field('faded_background_image'); ?>) no-repeat top left; background-size: cover;">

                <div class="block__white-tint-overlay position-absolute" style="z-index:1;"></div>

                <div class="container-fluid px-xl-0 position-relative" style="z-index: 2">
                    <div class="row">
                        <div class="col-xl-6 d-none d-xl-block position-relative"
                             style="background: transparent url(<?php the_sub_field('faded_background_image'); ?>) no-repeat top left; background-size: cover;">
                            <div class="block__gradient-overlay--left-to-right position-absolute"
                                 style="z-index:1;"></div>
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


<?php get_footer(); ?>
