<?php get_header(); ?>

<main>

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

    <section class="welcome py-15 pt-md-350">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-1 welcome-slider__col">
                    <div class="owl-carousel welcome-slider owl-theme position-relative">

                        <?php if (have_rows('welcome_slider')): ?>
                            <?php while (have_rows('welcome_slider')): the_row(); ?>
                                <div class="item welcome-slider__item text-center py-25 pb-lg-5 px-1">
                                    <h3 class="h1 text-white"><?php the_sub_field('slider_title'); ?></h3>
                                    <?php if( get_sub_field('slider_sub_heading') ): ?>
                                        <h4 class="h1 font-italic font-weight-normal text-white"><?php the_sub_field('slider_sub_heading'); ?></h4>
                                    <?php endif; ?>
                                    <p class="mt-1 mt-md-2 h3 font-pop text-white font-weight-bold"><?php the_sub_field('slider_blurb'); ?></p>
                                </div><!-- item -->
                                <?php endwhile; ?>
                        <?php endif; ?>

                    </div><!-- welcome-slider -->
                </div><!-- col -->
                <div class="col-lg-6">
                    <div class="max-width-550">
                    <h2 class="h1"><?php the_field('intro_heading'); ?></h2>
                    <?php if( get_field('intro_subheading') ): ?>
                        <h3 class="h4 font-pop mb-50"><?php the_field('intro_subheading'); ?></h3>
                    <?php endif; ?>
                    <p class="mb-150"><?php the_field('intro_paragraph'); ?></p>
                    <a href="<?php the_field('intro_button__link'); ?>" class="btn btn-primary"><?php the_field('intro_button__text'); ?></a>
                    </div><!-- max-width--550 -->
                </div><!-- col -->
            </div><!-- row-->
        </div><!-- container -->
    </section><!-- welcome section-->

    <section class="what-we-do">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <h2 class="h1 text-center mb-1">
                        <?php the_field('section_heading');?>
                    </h2>
                    <p class="text-center">
                        <?php the_field('section_intro');?>
                    </p>
                </div><!-- col -->
            </div><!-- row -->
            <div class="row justify-content-center">

                    <?php if (have_rows('service_cards')): ?>
                        <?php while (have_rows('service_cards')): the_row(); ?>
                            <div class="col-12 col-md-6 col-xl service__card-wrapper mb-1">
                                <div class="py-1 px-50 service__card text-center h-100">
                                    <img src="<?php the_sub_field('card_icon');?>" alt="<?php the_sub_field('card_title');?> Icon" class="img-fluid mb-1">
                                    <h3 class="h5 font-pop mb-1 text-white"><?php the_sub_field('card_title');?></h3>
                                    <p class="text-white mb-0"><?php the_sub_field('card_text');?></p>
                                </div>
                            </div><!-- col -->
                        <?php endwhile; ?>
                    <?php endif; ?>

            </div><!-- row -->
        </div><!-- container -->
    </section><!-- what-we-do -->


</main>

<?php get_footer();
