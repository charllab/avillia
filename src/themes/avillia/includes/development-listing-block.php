





<?php $category = get_the_category(); ?>

<span class="badge badge-info mb-1"><?php echo $category[0]->name; ?></span>


<?php if (have_rows('development_listing_card')): ?>
<?php while (have_rows('development_listing_card')): the_row(); ?>

    <div class="card development__card development-item mb-1 mb-md-2">
        <img class="card-img-top d-block development-img" src="<?php the_sub_field('card_image'); ?>" alt="Card image cap">
        <div class="card-body">
            <h4 class="card-title text-center mb-1"><?php the_sub_field('area_header'); ?></h4>
            <p class="card-text"><?php the_sub_field('card_text'); ?></p>
        </div>
        <div class="card-footer text-center">
            <a href="<?php the_permalink(); ?>" class="btn btn-primary mb-50">Learn More</a>
        </div>
    </div>
    <?php endwhile; ?>
<?php endif; ?>