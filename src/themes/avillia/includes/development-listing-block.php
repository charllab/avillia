<?php if (have_rows('development_listing_card')): ?>
    <?php while (have_rows('development_listing_card')): the_row(); ?>
        <div class="col-md-6 col-lg-3 js-img-obj-fit__container card-group px-250">
            <div class="card development__card development-item mb-1 mb-md-2">
                <a href="<?php the_permalink(); ?>">
                    <img class="card-img-top d-block development-img" src="<?php the_sub_field('card_image'); ?>"
                         alt="<?php the_title(); ?>">
                </a>
                <div class="card-body">
                    <div class="px-lg-50">
                        <img src="<?php the_sub_field('card_logo'); ?>"
                             alt="<?php the_title(); ?> - logo" class="img-fluid d-block mb-50 mx-auto">
                    </div>

                    <h4 class="card-title text-center mb-1"><?php the_sub_field('area_header'); ?></h4>
                    <p class="card-text"><?php the_sub_field('card_text'); ?></p>
                </div>
                <div class="card-footer text-center">
                    <a href="<?php the_permalink(); ?>" class="btn btn-primary mb-50">Learn More</a>
                </div>
            </div>
        </div><!-- col -->
    <?php endwhile; ?>
<?php endif; ?>