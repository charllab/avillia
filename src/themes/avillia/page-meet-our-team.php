<?php
get_header();
?>

    <main class="py-2 py-lg-4">

        <div class="container">
            <div class="row">

                <?php if (have_rows('team_members')): ?>
                    <?php while (have_rows('team_members')): the_row(); ?>
                        <div class="col-lg-6 js-bio-col--target mb-2 mb-md-3 mb-lg-4">

                            <div class="container member-block px-0">
                                <div class="d-flex flex-column flex-md-row no-gutters justify-content-center align-items-center">

                                        <img src="<?php the_sub_field('photo'); ?>"
                                             alt="<?php the_sub_field('full_name'); ?> Icon" class="img-fluid bio-block__img">


                                        <div class="bio-block__profile p-1">
                                            <h2><?php the_sub_field('full_name'); ?></h2>
                                            <p class="h5"><?php the_sub_field('qualifications'); ?></p>
                                            <p class="h4 my-50"><?php the_sub_field('position'); ?></p>
                                            <button class="btn btn-primary w-100 full-bio__btn js-bio__btn">Full Bio</button>
                                            <div class="full-bio js-full-bio">
                                                <?php the_sub_field('bio'); ?>
                                                <button class="btn btn-secondary js-bio__close">Close</button>
                                            </div>

                                        </div>

                                </div><!-- row -->
                            </div><!-- container -->

                        </div><!-- col -->

                    <?php endwhile; ?>
                <?php endif; ?>
            </div><!-- row -->
        </div><!-- container -->

    </main>


<?php get_footer();