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

                <div class="row justify-content-center align-items-center mb-2 border border-danger">

                <?php
                $limit = 6;

                $temp = $wp_query;
                $wp_query = null;

                $wp_query = new WP_Query();
                $wp_query->query('posts_per_page=' . $limit . '&paged=' . $paged);

                while ($wp_query->have_posts()) : $wp_query->the_post(); ?>




                        <div class="col-lg-4">

                            <div class="card">
                                <div class="card-body">
                                    <h2 class="h4 font-pop mb-35 text-info"><?php the_title(); ?></h2>
                                    <p class="card-text"><?php echo get_excerpt(); ?></p>
                                </div><!-- card-body -->
                                <div class="card-footer">
                                    <a href="<?php the_permalink(); ?>"
                                       class="mt-auto">Read More</a>
                                </div><!-- card-footer -->
                            </div><!-- card -->

                        </div><!-- col-->


                <?php endwhile; ?>

                </div><!-- row -->


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