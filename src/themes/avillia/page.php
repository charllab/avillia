<?php
get_header();
?>

<main class="py-2 py-lg-3">

    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php if (have_posts()) : ?>

                    <?php /* Start the Loop */ ?>

                    <?php while (have_posts()) : the_post(); ?>

                        <?php the_content(); ?>

                    <?php endwhile; ?>

                <?php endif; ?>
            </div>
        </div>
    </div>

</main>


<?php get_footer(); ?>
