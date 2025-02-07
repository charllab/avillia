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


                            <?php the_content(); ?>

                        <?php endwhile; ?>

                    <?php endif; ?>

                </div><!-- col -->

                <div class="col-lg-5">
                    <div class="p-2 px-2 bg-secondary">
                        <p class="small text-white" style="max-width: 655px;">
                            <?php the_field('footer', 'options'); ?>
                        </p>
                        <table>
                            <tr>
                                <td class="align-text-top">
                                    <p class="small text-white"><?php the_field('address', 'options'); ?></p>
                                </td>
                            </tr>
                        </table>
                        <p class="small text-white">
                            <a class="text-white" href="tel:+1<?php echo strip_tel(get_field('phone', 'options')); ?>">+1 <?php the_field('phone', 'options'); ?></a>
                            <br />
                            <?php
                            $otherNumbers = get_field('additional_phone_numbers', 'options');
                            if (count($otherNumbers)):
                                foreach ($otherNumbers as $pNum): if (!empty($pNum['phone_number'])): ?>
                                <a class="text-white" href="tel:+1<?php echo strip_tel($pNum['phone_number']); ?>"><?php echo $pNum['displayed_number']; ?></a>
                                <br />
                            <?php endif; endforeach; endif; ?>
                            Fax: <a class="text-white" href="tel:+1<?php echo strip_tel(get_field('fax', 'options')); ?>">+1 <?php the_field('fax', 'options'); ?></a>
                            <br />
                            <a class="text-white" href="mailto:<?php the_field('email', 'options') ?>" target="_blank"><?php the_field('email', 'options') ?></a>
                        </p>
                        <!-- <p class="small text-white">
                            <a class="text-white" href="mailto:<?php the_field('email', 'options') ?>" target="_blank"><?php the_field('email', 'options') ?></a>
                        </p>
                        <p class="small text-white mb-50">
                                Fax: <a class="text-white"
                                        href="tel:+1<?php echo strip_tel(get_field('fax', 'options')); ?>">+1 <?php the_field('fax', 'options'); ?></a>
                            </p> -->

                        <div class="social-links">
                            <?php while (have_rows('social_links', 'options')) : the_row(); ?>
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
