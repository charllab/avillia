<?php
global $accom_query, $view;
?>



<section id="map-anchor" <?php echo($view == 'list' ? 'style="display: none;"' : ''); ?> class="section--map js-view-map pb-3 pb-lg-4">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <img src="<?php bloginfo('template_url'); ?>/images/map.png" alt="map" class="img-fluid d-block">
            </div><!-- col -->
        </div><!-- row -->
    </div><!-- container -->

</section>
