<?php

/**
 * Template Name: About Us
**/
get_header();

?>

<div class="abtUs">
    <div class="container_outer container_outer_pb">

        <?php get_template_part('template-parts/banner'); ?>

        <section class="who_we_sec padd-row">
            <div class="container">
                <div class="who_we_inner">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="who_we_left">
                                <div class="who_we_cont" data-aos="fade-up">
                                    <?php if( get_field('who_heading') ): ?>
                                    <div class="sub_heading">
                                        <h3><?php the_field('who_heading'); ?></h3>
                                    </div>
                                    <?php endif; ?>
                                    <?php if( get_field('who_description') ): ?>
                                    <div class="who_we_desc">
                                        <?php the_field('who_description'); ?>
                                    </div>
                                    <?php endif; ?>
                                </div>
                                <?php if( get_field('who_image_1') ): ?>
                                <div class="who_we_img1 mtMob25" data-aos="fade-up">
                                    <img src="<?php the_field('who_image_1'); ?>" alt="Image" />
                                </div>
                                <?php endif; ?>
                                <?php if( get_field('who_description_links') ): ?>
                                <div class="locations_links" data-aos="fade-up">
                                    <?php the_field('who_description_links'); ?>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="who_we_right">
                                <?php if( get_field('who_image_2') ): ?>
                                <div class="who_we_img2" data-aos="fade-up">
                                    <img src="<?php the_field('who_image_2'); ?>" alt="Image" />
                                </div>
                                <?php endif; ?>
                                <div class="who_we_cont" data-aos="fade-up">
                                    <?php if( get_field('who_description_2') ): ?>
                                    <div class="blockQuote mb-4">
                                        <?php the_field('who_description_2'); ?>
                                    </div>
                                    <?php endif; ?>
                                    <?php the_field('who_description_3'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="global_expertise_sec padd-row ptMob35">
            <div class="container">
                <div class="global_expertise_inner">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="global_expertise_cont" data-aos="fade-up">
                                <?php if( get_field('exe_heading') ): ?>
                                <div class="sub_heading">
                                    <h3><?php the_field('exe_heading'); ?></h3>
                                </div>
                                <?php endif; ?>
                                <?php the_field('exe_description'); ?>
                                <?php if( get_field('exe_button_label') ): ?>
                                <div class="global_expertise_btn btn-wrap">
                                    <a href="<?php the_field('exe_button_link'); ?>" class="btn-style"> <span class="btn-style-txt"> <?php the_field('exe_button_label'); ?> </span></a>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="global_expertise_img mtMob25" data-aos="fade-up">
                                <img src="<?php the_field('exe_image'); ?>" alt="Image" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="values_sec padd-row ptMob35">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="values_cont" data-aos="fade-up">
                            <div class="sub_heading">
                                <?php if( get_field('values_heading') ): ?>
                                <h3><?php the_field('values_heading'); ?></h3>
                                <?php endif; ?>
                                <?php if( get_field('values_description') ): ?>
                                <p><?php the_field('values_description'); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="values_iconllist mtMob25" data-aos="fade-up">
                            <?php if( have_rows('abt_values_list') ): ?>
                            <div class="row mb60">
                                <?php while( have_rows('abt_values_list') ): the_row(); ?>
                                <div class="col-6 col-md-4">
                                    <div class="value_box">
                                        <?php if( get_sub_field('icon') ): ?>
                                        <div class="value_icon">
                                            <img src="<?php echo get_sub_field('icon'); ?>" alt="Value Icon" />
                                        </div>
                                        <?php endif; ?>
                                        <?php if( get_sub_field('title') ): ?>
                                        <h6><?php echo get_sub_field('title'); ?></h6>
                                        <?php endif; ?>
                                        <?php if( get_sub_field('description') ): ?>
                                        <p><?php echo get_sub_field('description'); ?></p>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <?php endwhile; ?>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="multicultural_team_sec bgLightgrey padd-row">
            <div class="container">
                <div class="multicultural_team_inner">
                    <?php if( get_field('team_heading') ): ?>
                    <div class="sub_heading" data-aos="fade-up">
                        <h3><?php the_field('team_heading'); ?></h3>
                    </div>
                    <?php endif; ?>
                    <div class="row">
                        <div class="col-md-6">
                            <?php if( get_field('team_image') ): ?>
                            <div class="multicultural_team_img" data-aos="fade-up">
                                <img src="<?php the_field('team_image'); ?>" alt="Image" />
                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="col-md-6">
                            <div class="multicultural_team_cont mtMob25" data-aos="fade-up">
                                <?php the_field('team_description'); ?>
                                <?php if( get_field('team_blockquote') ): ?>
                                <div class="blockQuote">
                                    <?php the_field('team_blockquote'); ?>
                                </div>
                                <?php endif; ?>
                                <?php if( get_field('team_button_label') ): ?>
                                <div class="multicultural_btn btn-wrap">
                                    <a href="<?php the_field('team_button_link'); ?>" class="btn-style"><span class="btn-style-txt"><?php the_field('team_button_label'); ?></span></a>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</div>

<?php get_footer(); ?>
