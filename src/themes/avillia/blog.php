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

                <div class="row justify-content-start align-items-start mb-2 blog--listing--row__control--padding">

                    <?php

                    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                    $args = array(
                        'posts_per_page' => 3,
                        'paged' => $paged
                    );

                    $wp_query = new WP_Query();
                    $wp_query->query($args);

                    while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

                        <div class="col-lg-6 col-xxl-4">

                            <div class="card blog--listing__card rounded-0 border-0 mb-1">

                                <?php if (has_post_thumbnail()) : ?>
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"
                                       class="border-o">
                                        <div
                                            style="background-image: url(<?php the_post_thumbnail_url(); ?>);"
                                            class="blog--listing__thumbnail d-block">
                                        </div>
                                    </a>
                                <?php else : ?>
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"
                                       class="border-o">
                                        <div
                                            style="background-image: url(<?php bloginfo('template_url'); ?>/images/logo.svg);"
                                            class="blog--listing__thumbnail blog--listing__thumbnail--fallback d-block">
                                        </div>
                                    </a>
                                <?php endif; ?>

                                <div class="card-body border-0 pb-0">

                                    <div class="row mx-0 mb-1">
                                        <div class="col-md-6 px-0 text-primary">

                                            <?php $category = get_the_category();
                                            echo $category[0]->cat_name;
                                            ?>

                                        </div><!-- col -->
                                        <div class="col-md-6 text-md-right px-0">
                                            <?php echo get_the_date('jS F, Y'); ?>
                                        </div><!-- col -->
                                    </div><!-- row-->


                                    <h2 class="blog--listing__title blog--listing__title--min-height font-pop mb-35 text-info"><?php the_title(); ?></h2>
                                    <?php echo get_excerpt(140); ?>
                                </div><!-- card-body -->
                                <div class="card-footer border-0 bg-white">
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