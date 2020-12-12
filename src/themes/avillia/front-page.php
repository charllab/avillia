<?php get_header(); ?>

<main>

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

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>This is a H1 heading</h1>
                <h2>This is a H2 heading</h2>
                <h3>This is a H3 heading</h3>
                <h4>This is a H4 heading</h4>
                <h5>This is a H5 heading</h5>
                <h6>This is a H6 heading</h6>
                <p class="lead">This is a lead paragraph: Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorum aspernatur enim incidunt ullam similique consequuntur reiciendis tenetur molestias modi, fuga illum, minus at tempora eum.</p>
                <p>This is a normal paragraph: Lorem ipsum, dolor sit amet, consectetur adipisicing elit. Cupiditate repudiandae harum atque commodi, iste assumenda quod quas aliquam. Culpa, quam officiis veniam, magnam inventore repudiandae esse qui voluptas aspernatur, maxime sequi minus iure assumenda reiciendis possimus. Nemo nobis dolore molestias inventore temporibus? Nihil praesentium consectetur quaerat culpa sequi.</p>
                <p class="small">This is a small paragraph: Lorem ipsum, dolor sit amet consectetur, adipisicing elit. Commodi, accusantium. Asperiores, obcaecati.</p>
                <a href="#" class="btn btn-primary">Button Primary</a>
                <a href="#" class="btn btn-secondary">Button Secondary</a>
                <a href="#" class="btn btn-white">Button White</a>
                <a href="#" class="btn btn-dark">Button Dark</a>
            </div>
        </div>
    </div>
</main>

<?php get_footer();
