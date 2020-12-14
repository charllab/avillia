<?php
get_header();
?>

    <main class="py-2">
        <section>

            <?php
            // Start the loop.
            while (have_posts()) : the_post(); ?>

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12 col-lg-8">
                            <div class="eventsingleimg-wrapper">
                                <a href="<?php bloginfo('url'); ?>/blog" class="inline-link--primary d-block mb-150 font-weight-bold">← Back To What's New</a>
                            </div><!-- eventsingleimg-wrapper -->
                        </div><!-- col -->
                    </div><!-- row -->
                    <div class="row justify-content-center mb-2">
                        <div class="col-12 col-lg-8">
                            <?php the_content(); ?>
                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container -->

                <div class="container next-prev_container">
                    <div class="row justify-content-between blog-nav-single">

                        <div class="col-6 col-lg-4 p-50">
                            <span class="nav-previous inline-link--primary font-weight-bold"><?php previous_post_link('%link', '<span class="meta-nav">' . _x('&larr;', 'Previous post link', 'sproingcreative') . '</span> %title'); ?></span>
                        </div><!-- col -->
                        <div class="col-6 col-lg-4 text-right d-flex justify-content-end blog-nav-single-right p-50">
                            <span class="nav-next inline-link--primary font-weight-bold"><?php next_post_link('%link', '%title <span class="meta-nav">' . _x('&rarr;', 'Next post link', 'sproingcreative') . '</span>'); ?></span>
                        </div><!-- col -->
                    </div><!-- row -->
                </div><!-- container -->

            <?php endwhile; // end of the loop. ?>

        </section>

    </main>

<?php get_footer();