<?php

/**
 * Template Name: Contact Us
**/
get_header();

?>

<div class="contactPage">
    <div class="container_outer container_outer_pb">

        <?php get_template_part('template-parts/banner'); ?>

        <section class="contact_sec1 padd-row">
            <div class="container">
                <div class="contact_sec1_inner">
                    <div class="row">
                        <div class="col-md-4 col-xl-3">
                            <div class="contact_sec1_lft">
                                <div class="contact_sec1_lft_ct pr-xl-4" data-aos="fade-up">
                                    <?php if( get_field('contact_title') ): ?>
                                    <div class="sub_heading">
                                        <h3><?php the_field('contact_title'); ?></h3>
                                    </div>
                                    <?php endif; ?>
                                    <?php if( get_field('contact_desc') ): ?>
                                    <div class="contact_sec1_lft_desc">
                                        <?php the_field('contact_desc'); ?>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-xl-9">
                            <div class="contact_sec1_rght">
                                <div class="home_contact_form">
                                    <?php echo do_shortcode('[wpforms id="116" title="false"]'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact_sec2 padd-row">
            <div class="container">
                <div class="contact_sec2_inner">
                    <div class="row">
                        <div class="col-md-4 col-xl-3">
                            <div class="contact_sec2_lft">
                                <div class="contact_sec2_lft_ct pr-xl-4" data-aos="fade-up">
                                    <?php if( get_field('locations_title') ): ?>
                                    <div class="sub_heading">
                                        <h3><?php the_field('locations_title'); ?></h3>
                                    </div>
                                    <?php endif; ?>
                                    <?php if( get_field('locations_desc') ): ?>
                                    <div class="contact_sec2_lft_desc">
                                        <?php the_field('locations_desc'); ?>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-xl-9">
                            <div class="contact_sec2_rght">
                                <?php if( have_rows('locations_card') ): ?>
                                <div class="location_card">
                                    <div class="row">
                                        <?php while( have_rows('locations_card') ): the_row(); ?>
                                        <div class="col-md-4">
                                            <div class="location_cardBox">
                                                <?php if( get_sub_field('title') ): ?>
                                                <h4> <?php echo get_sub_field('title') ?> </h4>
                                                <?php endif; ?>
                                                <?php if( get_sub_field('desc') ): ?>
                                                <div class="location_cardBox_desc"> <?php echo get_sub_field('desc') ?> </div>
                                                <?php endif; ?>
                                            </div>
                                        </div>
                                        <?php endwhile; ?>
                                    </div>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact_sec3 bgLightgrey padd-row" id="mapSection">
            <div class="container">
                <div class="contact_sec3_inner" data-aos="fade-up">
                    <?php if (have_rows('locations_card')) : ?>
                    <div class="mapBox_list">
                        <div class="row">
                            <div class="col-md-4 col-xl-3">
                                <div class="contact_sec3_lft">
                                    <div class="contact_tabNav">
                                        <ul class="nav nav-pills">
                                            <?php
                                                $index = 1;
                                                while (have_rows('locations_card')) : the_row();
                                                $active_class = ($index == 1) ? 'active show' : '';
                                            ?>
                                                <li class="nav-item">
                                                    <a data-toggle="pill" href="#locationTab<?php echo $index; ?>" class="<?php echo $active_class; ?>"> <?php echo get_sub_field('map_location_title'); ?> </a>
                                                </li>
                                            <?php $index++; endwhile; ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-8 col-xl-9">
                                <div class="contact_sec3_rght">
                                    <div class="tab-content">
                                        <?php
                                            $index = 1;
                                            while (have_rows('locations_card')) : the_row();
                                            $active_class = ($index == 1) ? 'active show' : '';
                                        ?>
                                        <div class="tab-pane <?php echo $active_class; ?>" id="locationTab<?php echo $index; ?>">
                                            <div class="contact_mapBox">
                                                <?php echo get_sub_field('locationIframe'); ?>
                                            </div>
                                        </div>
                                        <?php $index++; endwhile; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>

            </div>
        </section>


    </div>
</div>

<script>
    jQuery(document).ready(function() {
        var hash = window.location.hash;
        if (hash) {
            jQuery(".tab-pane").removeClass("active show");
            jQuery(".contact_tabNav .nav-item a").removeClass("active show");    
            var targetTab = jQuery(hash);
            if (targetTab.length) {
                jQuery('.contact_tabNav .nav-item a[href="' + hash + '"]').addClass("active show");
                
                targetTab.addClass("active show");
                var parentTab = targetTab.closest(".tab-pane");
                if (parentTab.length) {
                    parentTab.addClass("active show");
                }
                jQuery('html, body').animate({
                    scrollTop: jQuery('#mapSection').offset().top - 200
                }, 'slow');
            }
        }
    });
</script>

<?php get_footer(); ?>
