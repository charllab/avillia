<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

?>

<?php
// Build query
global $accom_query, $view;

// Get param data
parse_str($_SERVER['QUERY_STRING'], $query);

// Init args
$args = [
    'post_type' => 'development',
    'posts_per_page' => -1,
    'orderby' => 'meta_value_num',
    'order' => 'ASC',
];

$useDefaultCats = true;
$meta_query = ['relation' => 'AND'];
$tax_query = ['relation' => 'OR'];
$view = 'list';


// View
if (isset($query['v'])) {
    $view = $query['v'];
}

// Categories
if (isset($query['c'])) {
    $useDefaultCats = false;

    $tax_query[] = array_merge($tax_query, [
        'taxonomy' => 'category',
        'field' => 'term_id',
        'terms' => $query['c'],
        'operator' => 'IN'
    ]);
}

$args = array_merge($args, [
    'meta_query' => $meta_query,
    'tax_query' => $tax_query
]);

$accom_query = new WP_Query($args);
?>

<main class="pt-5">

    <section>
        <div class="container bg-secondary">
            <div class="row">
                <div class="col-12">
                    <form class="js-search-form">
                        <div class="btn-group btn-group-toggle listing-page-toggle js-listing-page-toggle" data-toggle="buttons">
                            <label class="btn btn-primary <?php echo($view == 'list' ? 'active' : ''); ?>">
                                <input type="radio" name="v" id="listView" value="list" rel="js-view-list" <?php echo($view == 'list' ? 'checked' : ''); ?>>
                                <i class="fas fa-list mr-250"></i> List
                            </label>
                            <label class="btn <?php echo($view == 'map' ? 'active' : ''); ?> text-primary bg-white">
                                <input type="radio" name="v" id="mapView" value="map" rel="js-view-map" <?php echo($view == 'map' ? 'checked' : ''); ?>>
                                <i class="fas fa-map-marked-alt mr-250"></i> Map
                            </label>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <?php get_template_part('includes/map'); ?>

    <section>
        <div class="container position-relative">
            <div class="row">
                <div class="col-md-6 col-lg-3 card-group js-img-obj-fit__container">



                        <div class="js-view-list" <?php echo($view == 'map' ? 'style="display: none;"' : ''); ?>>
                            <?php
                            if ($accom_query->have_posts()) {
                                while ($accom_query->have_posts()) {
                                    $accom_query->the_post();
                                    get_template_part('includes/development-listing-block');
                                }
                                wp_reset_postdata();
                            } else { ?>

                                <div class="alert alert-primary" role="alert">
                                    There were no properties found using the current filter.
                                </div>

                                <?php
                            }
                            ?>
                        </div><!-- js-view-list -->
                </div><!-- col -->
            </div><!-- row -->
        </div><!-- container -->
    </section>

</main>