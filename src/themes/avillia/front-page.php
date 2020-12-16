<?php get_header(); ?>

    <main>

        <section class="welcome py-2 pt-md-350">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-1 welcome-slider__col mb-2 mb-lg-0">
                        <div class="owl-carousel welcome-slider owl-theme position-relative">

                            <?php if (have_rows('welcome_slider')): ?>
                                <?php while (have_rows('welcome_slider')): the_row(); ?>
                                    <div class="item welcome-slider__item text-center py-25 pb-lg-5 px-1">
                                        <h3 class="h1 text-white"><?php the_sub_field('slider_title'); ?></h3>
                                        <?php if (get_sub_field('slider_sub_heading')): ?>
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
                            <?php if (get_field('intro_subheading')): ?>
                                <h3 class="h4 font-pop mb-50 text-info"><?php the_field('intro_subheading'); ?></h3>
                            <?php endif; ?>
                            <p class="mb-150"><?php the_field('intro_paragraph'); ?></p>
                            <a href="<?php the_field('intro_button__link'); ?>"
                               class="btn btn-primary"><?php the_field('intro_button__text'); ?></a>
                        </div><!-- max-width--550 -->
                    </div><!-- col -->
                </div><!-- row-->
            </div><!-- container -->
        </section><!-- welcome section-->


        <?php if (have_rows('welcome_cards')): ?>
            <section class="welcome-cards mt-75 mb-2 mb-lg-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="card-group">

                            <?php while (have_rows('welcome_cards')): the_row(); ?>
                                <div class="card">
                                    <div class="card-body">
                                        <h2 class="h4 font-pop mb-35 text-info"><?php the_sub_field('card_title'); ?></h2>
                                        <p class="card-text"><?php the_sub_field('card_text'); ?></p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="<?php the_sub_field('link'); ?>"
                                           class="mt-auto"><?php the_sub_field('link_title'); ?></a>
                                    </div>
                                </div>
                            <?php endwhile; ?>

                        </div><!-- card-group -->
                    </div><!-- row -->
                </div><!-- container -->
            </section><!-- welcome-cards -->
        <?php endif; ?>

        <hr class="gk-decorative">

        <section class="what-we-do py-3 pb-md-150 bg-soft">
            <div class="container">
                <div class="row justify-content-center mb-50">
                    <div class="col-lg-5">
                        <h2 class="h1 text-center mb-1">
                            <?php the_field('section_heading'); ?>
                        </h2>
                        <p class="text-center">
                            <?php the_field('section_intro'); ?>
                        </p>
                    </div><!-- col -->
                </div><!-- row -->
                <div class="row justify-content-center">

                    <?php if (have_rows('service_cards')): ?>
                        <?php while (have_rows('service_cards')): the_row(); ?>
                            <?php if (get_sub_field('section_link')): ?>
                            <a href="<?php the_sub_field('section_link');?>" title="Read More">
                            <?php endif; ?>
                                <div class="col-12 col-md-6 col-xl service__card-wrapper mb-1">
                                    <div class="py-1 px-50 service__card text-center h-100">
                                        <img src="<?php the_sub_field('card_icon'); ?>"
                                             alt="<?php the_sub_field('card_title'); ?> Icon" class="img-fluid mb-1">
                                        <h3 class="h5 font-pop mb-1 text-white"><?php the_sub_field('card_title'); ?></h3>
                                        <p class="text-white mb-0"><?php the_sub_field('card_text'); ?></p>
                                    </div>
                                </div><!-- col -->
                            <?php if (get_sub_field('section_link')): ?>
                            </a>
                            <?php endif; ?>
                        <?php endwhile; ?>
                    <?php endif; ?>

                </div><!-- row -->
            </div><!-- container -->

        </section><!-- what-we-do -->

        <section class="bg-soft" style="margin-bottom:-2px">
            <div class="container-fluid bg-secondary bg-clip--top"></div><!-- bg-clip--top -->
        </section><!-- bg-clip--top -->


        <div class="bg__pattern--page">

            <section class="home-development__header-section">
                <div class="container-fluid bg-secondary bg-clip--bottom">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-8">
                            <h2 class="h1 text-center text-white mb-250"><?php the_field('dev_heading'); ?></h2>
                            <p class="text-center text-white max-width-744"><?php the_field('dev_text'); ?></p>
                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container -->
            </section><!-- home-development__header-section -->

            <div class="home-development__promo-section pt-2 pb-1 py-md-2">
                <div class="container">
                    <div class="row">

                        <?php if (have_rows('development_promo_section_1')): ?>
                            <?php while (have_rows('development_promo_section_1')): the_row(); ?>
                                <div class="col-xl-6 js-gallery js-img-obj-fit__container">
                                    <a href="<?php echo esc_url(home_url('/our-developments')); ?>#okanaganregion"
                                       class="development-promo promo-item text-decoration--none">
                                        <div class="row">
                                            <div class="col-md-6 order-md-1 mb-50">
                                                <div
                                                    class="d-flex h-100 flex-column justify-content-center promo-min-height"
                                                    style="background: #254725">
                                                    <h2 class="w-100 text-white text-center"><?php the_sub_field('development_name_1'); ?></h2>
                                                </div>
                                            </div><!-- col -->
                                            <div class="col-12 order-md-0 mb-1">
                                                <img src="<?php the_sub_field('landscape_image'); ?>"
                                                     alt="<?php the_sub_field('development_promo_section_1'); ?>"
                                                     class="d-block promo-img">
                                            </div><!-- col -->
                                            <div class="col-md-6 order-md-2 mb-50">
                                                <img src="<?php the_sub_field('blocked_image_1'); ?>"
                                                     alt="<?php the_sub_field('development_promo_section_1'); ?>"
                                                     class="d-block promo-img">
                                            </div><!-- col -->
                                        </div><!-- row -->
                                    </a><!-- block link -->
                                </div><!-- col -->
                            <?php endwhile; ?>
                        <?php endif; ?>

                        <?php if (have_rows('development_promo_section_2')): ?>
                            <?php while (have_rows('development_promo_section_2')): the_row(); ?>
                                <div class="col-xl-6 js-gallery js-img-obj-fit__container">
                                    <a href="<?php echo esc_url(home_url('/our-developments')); ?>#albertaregion"
                                       class="development-promo promo-item text-decoration--none">
                                        <div class="row">
                                            <div class="col-md-6 order-md-1 mb-50">
                                                <div class="row no-gutters">
                                                    <div class="col-12">
                                                        <div
                                                            class="d-flex h-100 flex-column justify-content-center promo-min-height"
                                                            style="background: #A0703E">

                                                            <h2 class="w-100 text-white text-center px-1"><?php the_sub_field('development_name_2'); ?></h2>

                                                        </div><!-- flex-->
                                                    </div><!-- col -->

                                                    <div class="col-12 order-md-2 mb-50 d-none d-xl-block mt-1">
                                                        <img src="<?php the_sub_field('blocked_image_2'); ?>"
                                                             alt="<?php the_sub_field('development_promo_section_2'); ?>"
                                                             class="d-block promo-img">
                                                    </div><!-- col -->
                                                </div><!-- row -->
                                            </div><!-- col -->
                                            <div class="col-xl-6 order-md-0 mb-1">
                                                <img src="<?php the_sub_field('portrait_image'); ?>"
                                                     alt="<?php the_sub_field('development_promo_section_2'); ?>"
                                                     class="d-block promo-img portriat-height--xl-up">
                                            </div><!-- col -->
                                            <div class="col-md-6 order-md-2 mb-50 d-xl-none order-3">
                                                <img src="<?php the_sub_field('blocked_image_2'); ?>"
                                                     alt="<?php the_sub_field('development_promo_section_2'); ?>"
                                                     class="d-block promo-img">
                                            </div><!-- col -->
                                        </div><!-- row-->
                                    </a><!-- block link -->
                                </div><!-- col -->
                            <?php endwhile; ?>
                        <?php endif; ?>

                    </div><!--row -->
                </div><!-- container -->
            </div><!-- home-development__promo-section -->

            <section class="mb-2 mb-md-3">
                <div class="container">
                    <a href="<?php echo esc_url(home_url('/our-developments')); ?>" class="btn btn-primary gk-button--full">Explore <span class="d-none d-sm-inline">&nbsp;All&nbsp;</span> Developments</a>
                </div><!-- container -->
            </section><!-- button-->

        </div><!-- bg__pattern--page -->


    </main>

<?php get_footer();
