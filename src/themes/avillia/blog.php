<?php
/**
 *
 * Template Name: Blog
 *
 */
global $post;
get_header(); ?>

    <main class="py-2 py-md-3">

        <section>

            <div class="container">

                <?php
                $limit = 6;

                $temp = $wp_query;
                $wp_query = null;

                $wp_query = new WP_Query();
                $wp_query->query('posts_per_page=' . $limit . '&paged=' . $paged);

                while ($wp_query->have_posts()) : $wp_query->the_post(); ?>


                    <div class="row justify-content-center align-items-center mb-2">

                        <div class="col-lg-6">


                            <div class="listing-block-wrapper d-xxl-flex">

                                <div class="listing-block-content p-1 py-lg-0 bg-white w-100">

                                    <h2 class="mb-50 mt-1"><?php the_title(); ?></h2>

                                    <div class="listing-block-copy">

                                        <p>
                                            <?php echo get_excerpt(); ?>
                                        </p>

                                    </div><!-- listing-block-copy -->

                                    <div class="listing-block-button">
                                        <a href="<?php the_permalink(); ?>" class="btn btn-primary mb-1 d-md-inline-block">Read More</a>
                                    </div><!-- listing-block-button -->

                                </div><!-- listing-block-content -->
                            </div><!-- listing-block-wrapper -->

                        </div><!-- col-->
                    </div><!-- row -->

                <?php endwhile; ?>


                <div class="row justify-content-center">
                    <div class="col-lg-10 col-xl-8 text-center">
                        <nav aria-label="Page navigation">

                            <?php bootstrap_pagination(); ?>

                        </nav>
                    </div><!-- col-->
                </div><!-- row -->

            </div><!-- container -->
        </section><!-- .section -->


    </main>

<?php get_footer(); ?>