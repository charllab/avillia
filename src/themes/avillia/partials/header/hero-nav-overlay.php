<div class="outside-header bg-white">
    <nav class="navbar navbar-expand-xxl navbar-dark" style="z-index:99;">
        <div class="container">

            <div class="nav-logo">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php bloginfo('template_url'); ?>/images/logo-new.svg"
                         alt="<?php bloginfo('name'); ?> - Logo"
                         class="img-fluid">
                    <span class="sr-only"><?php bloginfo('name'); ?></span>
                </a>
            </div><!-- nav-logo -->

            <button class="hamburger hamburger--elastic ml-auto my-0 menu-link d-xxl-none" type="button"
                    style="z-index:9999;">
                              <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                              </span>
            </button><!-- navbar-toggler -->

            <div class="d-lg-flex flex-lg-column d-none d-xxl-block">

                <?php wp_nav_menu([
                    'theme_location' => 'primary',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id' => 'mainnav',
                    'menu_class' => 'navbar-nav ml-auto',
                    'fallback_cb' => '',
                    'menu_id' => 'main-menu',
                    'walker' => new understrap_WP_Bootstrap_Navwalker(),
                ]); ?>
            </div><!-- d-none d-xxl-block -->

        </div><!-- container -->
    </nav>
</div><!-- outside header-->


<?php

// check if the flexible content field has rows of data
if (have_rows('flexible_content')):

    // loop through the rows of data
    while (have_rows('flexible_content')) : the_row();
        if (get_row_layout() == 'full_height_header'): ?>


            <header id="header" class="hero-nav-overlay position-relative header--full-height"
                    style="background: #247A74 url(<?php the_sub_field('background_image'); ?>) no-repeat; background-size: cover;">

                <div class="block__gradient-overlay position-absolute" style="z-index:1;"></div>

                <nav class="navbar navbar-expand-xxl navbar-dark position-relative" style="z-index:99;">
                    <div class="container">


                        <div class="nav-logo">
                            <a href="<?php echo esc_url(home_url('/')); ?>">
                                <img src="<?php bloginfo('template_url'); ?>/images/logo-new.svg"
                                     alt="<?php bloginfo('name'); ?> - Logo"
                                     class="img-fluid">
                                <span class="sr-only"><?php bloginfo('name'); ?></span>
                            </a>
                        </div><!-- nav-logo -->

                        <button class="hamburger hamburger--elastic ml-auto my-0 menu-link d-xxl-none" type="button"
                                style="z-index:9999;">
                              <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                              </span>
                        </button><!-- navbar-toggler -->

                        <div class="d-lg-flex flex-lg-column d-none d-xxl-block">

                            <?php wp_nav_menu([
                                'theme_location' => 'primary',
                                'container_class' => 'collapse navbar-collapse',
                                'container_id' => 'mainnav',
                                'menu_class' => 'navbar-nav ml-auto',
                                'fallback_cb' => '',
                                'menu_id' => 'main-menu',
                                'walker' => new understrap_WP_Bootstrap_Navwalker(),
                            ]); ?>
                        </div><!-- d-none d-xxl-block -->

                    </div><!-- container -->
                </nav>

                <?php if (is_front_page()) : ?>
                <div class="container position-relative h-75 py-3 py-md-0" style="z-index: 3; padding-top: 12rem !important;">
                    <?php else : ?>
                    <div class="container position-relative h-75 pt-9 py-md-0" style="z-index: 3;">
                        <?php endif; ?>
                        <div class="header__entry-section d-flex justify-content-center align-items-center"
                             style="z-index:3;">


                            <div class="header__entry-content p-75 p-md-2 bg-secondary--rgba">
                                <h1 class="text-white">
                                    <?php the_sub_field('card_title'); ?>
                                </h1>


                                <?php if (is_front_page()) : ?>

                                    <?php if (have_rows('button')): ?>
                                        <div class="mt-1 mt-lg-2 d-none d-md-block">
                                            <?php while (have_rows('button')): the_row(); ?>
                                                <a href="<?php the_sub_field('link'); ?>" class="btn btn-light">
                                                    <?php the_sub_field('button_label'); ?>
                                                </a>
                                            <?php endwhile; ?>
                                        </div>
                                    <?php endif; ?>

                                <?php else : ?>

                                    <div class="mt-1 mt-lg-2">
                                        <div href="" id="button" class="btn btn-light js-scroll-down">
                                            Read More
                                        </div>
                                    </div>

                                <?php endif; ?>


                            </div><!-- header__entry-content-->
                        </div><!-- header__entry-section -->
                    </div><!-- container -->

            </header>

        <?php elseif (get_row_layout() == 'general_header'): ?>

            <header id="header" class="hero-nav-overlay position-relative header--bg-clip">
                <!--<a href="" target="_blank" class="btn btn-light rounded-0 d-block d-md-none">-->
                <!--    Call To Action-->
                <!--</a>-->

                <div class="block__pattern-overlay position-absolute" style="z-index:1;"></div>

                <nav class="navbar navbar-expand-xxl navbar-dark position-relative" style="z-index:99;">
                    <div class="container">

                        <div class="nav-logo">
                            <a href="<?php echo esc_url(home_url('/')); ?>">
                                <img src="<?php bloginfo('template_url'); ?>/images/logo.svg"
                                     alt="<?php bloginfo('name'); ?> - Logo"
                                     class="img-fluid">
                                <span class="sr-only"><?php bloginfo('name'); ?></span>
                            </a>
                        </div><!-- nav-logo -->

                        <button class="hamburger hamburger--elastic ml-auto my-0 menu-link d-xxl-none" type="button"
                                style="z-index:9999;">
                              <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                              </span>
                        </button><!-- navbar-toggler -->

                        <div class="d-lg-flex flex-lg-column d-none d-xxl-block">

                            <?php wp_nav_menu([
                                'theme_location' => 'primary',
                                'container_class' => 'collapse navbar-collapse',
                                'container_id' => 'mainnav',
                                'menu_class' => 'navbar-nav ml-auto',
                                'fallback_cb' => '',
                                'menu_id' => 'main-menu',
                                'walker' => new understrap_WP_Bootstrap_Navwalker(),
                            ]); ?>
                        </div><!-- d-none d-xxl-block -->

                    </div><!-- container -->
                </nav>

                <div class="container pt-2 pt-md-3">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-xl-7 text-center">
                            <h1 class="mb-50 text-white"><?php the_sub_field('page_title'); ?></h1>
                            <p class="max-width-744 text-white mx-auto">
                                <?php the_sub_field('header_text'); ?>
                            </p>
                        </div>
                    </div>
                </div>

            </header>

        <?php endif; ?>
    <?php endwhile; ?>

<?php else : ?>

    <header id="header" class="hero-nav-overlay position-relative header--bg-clip">
        <!--<a href="" target="_blank" class="btn btn-light rounded-0 d-block d-md-none">-->
        <!--    Call To Action-->
        <!--</a>-->

        <div class="block__pattern-overlay position-absolute" style="z-index:1;"></div>

        <nav class="navbar navbar-expand-xxl navbar-dark position-relative" style="z-index:99;">
            <div class="container">


                <div class="nav-logo">
                    <a href="<?php echo esc_url(home_url('/')); ?>">
                        <img src="<?php bloginfo('template_url'); ?>/images/logo.svg"
                             alt="<?php bloginfo('name'); ?> - Logo"
                             class="img-fluid">
                        <span class="sr-only"><?php bloginfo('name'); ?></span>
                    </a>
                </div><!-- nav-logo -->

                <button class="hamburger hamburger--elastic ml-auto my-0 menu-link d-xxl-none" type="button"
                        style="z-index:9999;">
                  <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                  </span>
                </button><!-- navbar-toggler -->

                <div class="d-lg-flex flex-lg-column d-none d-xxl-block">

                    <?php wp_nav_menu([
                        'theme_location' => 'primary',
                        'container_class' => 'collapse navbar-collapse',
                        'container_id' => 'mainnav',
                        'menu_class' => 'navbar-nav ml-auto',
                        'fallback_cb' => '',
                        'menu_id' => 'main-menu',
                        'walker' => new understrap_WP_Bootstrap_Navwalker(),
                    ]); ?>
                </div><!-- d-none d-xxl-block -->

            </div><!-- container -->
        </nav>

        <div class="container pt-2">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-xl-6 text-center">
                    <h1 class="mb-1 text-white"><?php the_title(); ?></h1>
                </div>
            </div>
        </div>

    </header>


<?php endif; ?>

<!--moved outside of header because of clipping-->
<nav id="menu" class="panel py-1 bg-primary d-xxl-none d-flex flex-row justify-md-content-center align-md-items-center"
     role="navigation">
    <?php wp_nav_menu([
        'theme_location' => 'primary',
        'container_class' => 'container main-navigation--padding',
        'container_id' => 'mainnav-m',
        'menu_class' => 'navbar-nav ml-auto',
        'fallback_cb' => '',
        'menu_id' => 'mobile-menu',
        'walker' => new understrap_WP_Bootstrap_Navwalker(),
    ]); ?>
</nav><!-- mainnav-m d-xl-none -->
