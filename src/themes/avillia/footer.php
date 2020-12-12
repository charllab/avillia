<footer>

    <?php if (!is_page([23])) : ?>

    <section class="bg-gradient--angled py-150 pt-lg-3 pb-lg-150">
        <div class="container">
            <div class="row">
                <div class="col-xl-6">
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

                    <div class="social-links mb-150 mb-xl-0 border-red">
                        <?php while( have_rows('social_links', 'options') ): the_row(); ?>
                            <a class="social-link btn btn-link text-white px-0 mr-50 border-cyan" target="_blank" href="<?php the_sub_field('url'); ?>">
                                <i class="<?php the_sub_field('icon_class'); ?> fa-2x">
                                    <span class="sr-only"><?php the_sub_field('label'); ?></span>
                                </i>
                            </a>
                        <?php endwhile; ?>
                    </div>

                </div>
                <div class="col-xl-6">
                    <?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true"]'); ?>
                </div>
            </div>
        </div>
    </section>

    <?php endif; ?>


    <section class="section bg-dark pt-1 py-xl-1">
        <div class="container">
            <div class="row">
                <div class="col-12 col-xl text-center text-xl-left">
                    <p class="text-white mb-xl-0">&copy; <?php echo Date('Y') . ' ' . get_bloginfo('name'); ?></p>
                </div>
                <div class="col-12 col-xl text-center">
                    <p class="text-white mb-xl-0">
                        <a class="text-white" href="<?php echo esc_url(home_url('/terms-and-conditions')); ?>">
                            Terms &&nbsp;Conditions</a> &ensp;|&ensp;
                        <a class="text-white" href="<?php echo esc_url(home_url('/privacy-policy')); ?>">
                            Privacy&nbsp;Policy</a>
                    </p>
                </div>
                <div class="col-12 col-xl text-center text-xl-right">
                    <p class="text-white mb-xl-0">Designed, Developed and Hosted by
                        <a href="https://sproing.ca" target="_blank" class="text-white">Sproing&nbsp;Creative</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
</footer>

<?php wp_footer(); ?>

</div><!-- push -->

</body>

</html>