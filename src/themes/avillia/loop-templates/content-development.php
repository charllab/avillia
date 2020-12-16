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

$view = 'list';

// View
if (isset($query['v'])) {
    $view = $query['v'];
}

$accom_query = new WP_Query($args);
?>

<main class="py-2 pt-lg-5">

    <section id="developmentListing" class="d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-12 pb-150">
                    <ul class="nav nav-tabs nav-tabs--developments flex-row justify-content-center justify-content-xxxl-between align-items-center" id="myTab" role="tablist">
                        <li class="nav-item d-none d-lg-inline">
                            <a class="nav-link active" id="all-tab" data-toggle="tab" href="#all" role="tab"
                               aria-controls="all" aria-selected="true">All</a>
                        </li>
                        <li class="nav-item d-none d-lg-inline">
                            <a class="nav-link" id="landresidential-tab" data-toggle="tab" href="#landresidential" role="tab"
                               aria-controls="landresidential" aria-selected="false">Land Residential</a>
                        </li>
                        <li class="nav-item d-none d-lg-inline">
                            <a class="nav-link" id="landcommercial-tab" data-toggle="tab" href="#landcommercial"
                               role="tab" aria-controls="landcommercial" aria-selected="false">Land Commercial</a>
                        </li>

                        <li class="nav-item d-none d-lg-inline">
                            <a class="nav-link" id="commercialbuilding-tab" data-toggle="tab" href="#commercialbuilding" role="tab"
                               aria-controls="commercialbuilding" aria-selected="true">Commercial Building</a>
                        </li>
                        <li class="nav-item d-none d-lg-inline">
                            <a class="nav-link" id="resortdevelopment-tab" data-toggle="tab" href="#resortdevelopment" role="tab"
                               aria-controls="resortdevelopment" aria-selected="false">Resort Development</a>
                        </li>
                        <li class="nav-item d-none d-lg-inline">
                            <a class="nav-link" id="okanaganregion-tab" data-toggle="tab" href="#okanaganregion" role="tab" aria-controls="okanaganregion" aria-selected="false">Okanagan Region</a>
                        </li>
                        <li class="nav-item d-none d-lg-inline">
                            <a class="nav-link" id="albertaregion-tab" data-toggle="tab" href="#albertaregion" role="tab"
                               aria-controls="albertaregion" aria-selected="false">Edmonton Region</a>
                        </li>


                        <li class="inline-li-form">
                            <form class="js-search-form d-flex justify-content-center align-content-center">
                                <div class="btn-group btn-group-toggle listing-page-toggle js-listing-page-toggle"
                                     data-toggle="buttons">
                                    <label
                                        class="development__btn btn btn-primary my-0 <?php echo($view == 'list' ? 'active' : ''); ?>">
                                        <input type="radio" name="v" id="listView" value="list"
                                               rel="js-view-list" <?php echo($view == 'list' ? 'checked' : ''); ?>>
                                        <i class="fas fa-list mr-250 fa-lg"></i> List
                                    </label>
                                    <label
                                        class="development__btn btn <?php echo($view == 'map' ? 'active' : ''); ?> text-primary bg-white my-0">
                                        <input type="radio" name="v" id="mapView" value="map"
                                               rel="js-view-map" <?php echo($view == 'map' ? 'checked' : ''); ?>>
                                        <i class="fas fa-map-marked-alt mr-250 fa-lg"></i> Map
                                    </label>
                                </div>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <div class="tab-content js-view-list"
         id="myTabContent"
        <?php echo($view == 'map' ? 'style="display: none;"' : ''); ?>>
        <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">

            <div class="container position-relative">
                <div class="row no-gutters">

                    <?php

                    // Init args
                    $args = [
                        'post_type' => 'development',
                        'posts_per_page' => -1,
                        'orderby' => 'meta_value_num',
                        'order' => 'ASC',
                    ];

                    $the_query = new WP_Query($args);

                    if ($the_query->have_posts()) {
                        while ($the_query->have_posts()) {
                            $the_query->the_post();
                            get_template_part('includes/development-listing-block');
                        }
                        wp_reset_postdata();
                    } else { ?>

                       <div class="col-12 py-4">
                                <div class="alert alert-primary text-center" role="alert">
                                    There were no developments found using the current filter.
                                </div><!-- alert -->
                            </div><!-- col -->

                        <?php
                    }
                    ?>

                </div><!-- row -->
            </div><!-- container -->

        </div><!-- tab-pane fade -->

        <div class="tab-pane fade" id="landresidential" role="tabpanel" aria-labelledby="landresidential-tab">

            <div class="container position-relative">
                <div class="row no-gutters">

                    <?php

                    // Init args
                    $args = [
                        'post_type' => 'development',
                        'posts_per_page' => -1,
                        'orderby' => 'meta_value_num',
                        'order' => 'ASC',
                        'category_name' => 'land-residential',
                    ];

                    $the_query = new WP_Query($args);

                    if ($the_query->have_posts()) {
                        while ($the_query->have_posts()) {
                            $the_query->the_post();
                            get_template_part('includes/development-listing-block');
                        }
                        wp_reset_postdata();
                    } else { ?>

                       <div class="col-12 py-4">
                                <div class="alert alert-primary text-center" role="alert">
                                    There were no developments found using the current filter.
                                </div><!-- alert -->
                            </div><!-- col -->

                        <?php
                    }
                    ?>

                </div><!-- row -->
            </div><!-- container -->

        </div><!-- tab-pane fade -->

        <div class="tab-pane fade" id="landcommercial" role="tabpanel" aria-labelledby="landcommercial-tab">

            <div class="container position-relative">
                <div class="row no-gutters">

                    <?php

                    // Init args
                    $args = [
                        'post_type' => 'development',
                        'posts_per_page' => -1,
                        'orderby' => 'meta_value_num',
                        'order' => 'ASC',
                        'category_name' => 'resort-development',
                    ];

                    $the_query = new WP_Query($args);

                    if ($the_query->have_posts()) {
                        while ($the_query->have_posts()) {
                            $the_query->the_post();
                            get_template_part('includes/development-listing-block');
                        }
                        wp_reset_postdata();
                    } else { ?>

                       <div class="col-12 py-4">
                                <div class="alert alert-primary text-center" role="alert">
                                    There were no developments found using the current filter.
                                </div><!-- alert -->
                            </div><!-- col -->

                        <?php
                    }
                    ?>

                </div><!-- row -->
            </div><!-- container -->

        </div><!-- tab-pane fade -->

        <div class="tab-pane fade" id="commercialbuilding" role="tabpanel" aria-labelledby="commercialbuilding-tab">

            <div class="container position-relative">
                <div class="row no-gutters">

                    <?php

                    // Init args
                    $args = [
                        'post_type' => 'development',
                        'posts_per_page' => -1,
                        'orderby' => 'meta_value_num',
                        'order' => 'ASC',
                        'category_name' => 'commercial-building',
                    ];

                    $the_query = new WP_Query($args);

                    if ($the_query->have_posts()) {
                        while ($the_query->have_posts()) {
                            $the_query->the_post();
                            get_template_part('includes/development-listing-block');
                        }
                        wp_reset_postdata();
                    } else { ?>

                       <div class="col-12 py-4">
                                <div class="alert alert-primary text-center" role="alert">
                                    There were no developments found using the current filter.
                                </div><!-- alert -->
                            </div><!-- col -->

                        <?php
                    }
                    ?>

                </div><!-- row -->
            </div><!-- container -->

        </div><!-- tab-pane fade -->

        <div class="tab-pane fade" id="resortdevelopment" role="tabpanel" aria-labelledby="resortdevelopment-tab">

            <div class="container position-relative">
                <div class="row no-gutters">

                    <?php

                    // Init args
                    $args = [
                        'post_type' => 'development',
                        'posts_per_page' => -1,
                        'orderby' => 'meta_value_num',
                        'order' => 'ASC',
                        'category_name' => 'resort-development',
                    ];

                    $the_query = new WP_Query($args);

                    if ($the_query->have_posts()) {
                        while ($the_query->have_posts()) {
                            $the_query->the_post();
                            get_template_part('includes/development-listing-block');
                        }
                        wp_reset_postdata();
                    } else { ?>

                       <div class="col-12 py-4">
                                <div class="alert alert-primary text-center" role="alert">
                                    There were no developments found using the current filter.
                                </div><!-- alert -->
                            </div><!-- col -->

                        <?php
                    }
                    ?>

                </div><!-- row -->
            </div><!-- container -->

        </div><!-- tab-pane fade -->

        <div class="tab-pane fade" id="albertaregion" role="tabpanel" aria-labelledby="albertaregion-tab">

            <div class="container position-relative">
                <div class="row no-gutters">

                    <?php

                    // Init args
                    $args = [
                        'post_type' => 'development',
                        'posts_per_page' => -1,
                        'orderby' => 'meta_value_num',
                        'order' => 'ASC',
                        'category_name' => 'alberta-region',
                    ];

                    $the_query = new WP_Query($args);

                    if ($the_query->have_posts()) {
                        while ($the_query->have_posts()) {
                            $the_query->the_post();
                            get_template_part('includes/development-listing-block');
                        }
                        wp_reset_postdata();
                    } else { ?>


                            <div class="col-12 py-4">
                                <div class="alert alert-primary text-center" role="alert">
                                    There were no developments found using the current filter.
                                </div><!-- alert -->
                            </div><!-- col -->


                        <?php
                    }
                    ?>

                </div><!-- row -->
            </div><!-- container -->

        </div><!-- tab-pane fade -->

        <div class="tab-pane fade" id="okanaganregion" role="tabpanel" aria-labelledby="okanaganregion-tab">

            <div class="container position-relative">
                <div class="row no-gutters">

                    <?php

                    // Init args
                    $args = [
                        'post_type' => 'development',
                        'posts_per_page' => -1,
                        'orderby' => 'meta_value_num',
                        'order' => 'ASC',
                        'category_name' => 'okanagan-region',
                    ];

                    $the_query = new WP_Query($args);

                    if ($the_query->have_posts()) {
                        while ($the_query->have_posts()) {
                            $the_query->the_post();
                            get_template_part('includes/development-listing-block');
                        }
                        wp_reset_postdata();
                    } else { ?>


                        <div class="col-12 py-4">
                            <div class="alert alert-primary text-center" role="alert">
                                There were no developments found using the current filter.
                            </div><!-- alert -->
                        </div><!-- col -->


                        <?php
                    }
                    ?>

                </div><!-- row -->
            </div><!-- container -->

        </div><!-- tab-pane fade -->


    </div><!-- tab-content -->

    <?php get_template_part('includes/map'); ?>


</main>