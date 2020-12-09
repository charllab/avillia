<?php
/**
 *
 * Template Name: Contact Page
 *
 **/
get_header(); ?>

    <main>

        <div class="py-3">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-6">

                        <?php if (have_posts()) : ?>

                            <?php /* Start the Loop */ ?>

                            <?php while (have_posts()) : the_post(); ?>

                                <h2 class="text-capitalize"><?php the_title(); ?></h2>

                                <?php the_content(); ?>

                            <?php endwhile; ?>

                        <?php endif; ?>

                    </div><!-- col -->

                    <div class="col-lg-5">
                        <div class="p-2 px-2 bg-secondary">
                            <h2 class="h3 font-pop text-white mb-150">Get in Touch</h2>
                            <p class="small text-white" style="max-width: 655px;">
                                <?php the_field('footer', 'options'); ?>
                            </p>
                            <table>
                                <tr>
                                    <td class="align-text-top">
                                        <p class="small text-white">Address: </p>
                                    </td>
                                    <td class="align-text-top">
                                        <p class="small text-white"><?php the_field('address', 'options'); ?></p>
                                    </td>
                                </tr>
                            </table>
                            <p class="small text-white">
                                Phone: <a class="text-white"
                                          href="tel:+1<?php echo strip_tel(get_field('phone', 'options')); ?>">+1 <?php the_field('phone', 'options'); ?></a>
                            </p>
                            <p class="small text-white">
                                Email: <a class="text-white"
                                          href="mailto:<?php the_field('email', 'options') ?>"
                                          target="_blank"><?php the_field('email', 'options') ?></a>
                            </p>
                            <p class="small text-white mb-50">
                                Fax: <a class="text-white"
                                        href="tel:+1<?php echo strip_tel(get_field('fax', 'options')); ?>">+1 <?php the_field('fax', 'options'); ?></a>
                            </p>

                            <div class="social-links">
                                <?php while( have_rows('social_links', 'options') ): the_row(); ?>
                                    <a class="social-link btn btn-link text-white px-0 mr-50" target="_blank" href="<?php the_sub_field('url'); ?>">
                                        <i class="<?php the_sub_field('icon_class'); ?> fa-lg">
                                            <span class="sr-only"><?php the_sub_field('label'); ?></span>
                                        </i>
                                    </a>
                                <?php endwhile; ?>
                            </div>

                        </div>
                        </div><!-- bg-light -->

                        <div class="px-0">
                            <?php
                            echo get_field('map_embed_code', 'option');
                            ?>
                        </div><!-- px-0 -->
                    </div><!-- col -->
                </div><!-- row -->

            </div><!-- container -->
        </div>

    </main>

<?php get_footer();