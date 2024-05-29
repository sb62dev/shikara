<?php

/**
 * Template Name: Investment Process
**/
get_header();

?>

<div class="investPrcsPage">
    <div class="container_outer container_outer_pb">

        <?php get_template_part('template-parts/banner'); ?>

        <section class="investprc_sec1 padd-row">
            <div class="container">
                <div class="investprc_sec1_inner">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="investprc_sec1_lft">
                                <div class="investprc_sec1_lft_ct pr-xl-4" data-aos="fade-up">
                                    <?php if( get_field('invst_page_title') ): ?>
                                    <div class="sub_heading">
                                        <h3><?php the_field('invst_page_title'); ?></h3>
                                    </div>
                                    <?php endif; ?>
                                    <?php if( get_field('invst_page_desc') ): ?>
                                    <div class="investprc_sec1_lft_desc">
                                        <?php the_field('invst_page_desc'); ?>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="investprc_sec1_rght">
                                <?php 
                                $image = get_field('invst_page_desc_img');
                                if( !empty( $image ) ): ?>
                                <div class="investprc_sec1_img mtMob25" data-aos="fade-up">
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                </div>
                                <?php endif; ?>

                                <?php if( get_field('invst_page_blockquote') ): ?>
                                <div class="blockQuote mt-4 mt-xl-5" data-aos="fade-up">
                                    <?php the_field('invst_page_blockquote'); ?>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="investprc_sec2 bgLightgrey padd-row">
            <div class="container">
                <div class="investprc_sec2_inner">
                    <div class="row">
                        <div class="col-md-4 col-xl-3">
                            <div class="sub_heading pr-xl-4" data-aos="fade-up">
                                <?php if( get_field('invst_page_sec2_title') ): ?>
                                <h3><?php the_field('invst_page_sec2_title'); ?></h3>
                                <?php endif; ?>
                                <?php if( get_field('invst_page_sec2_desc') ): ?>
                                <p><?php the_field('invst_page_sec2_desc'); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-8 col-xl-9">
                            <div class="investprc_sec2_right mtMob25" data-aos="fade-up">
                                <div class="investprc_sec2_cardBox">
                                    <div class="row no-gutters">
                                        <div class="col-lg-4 investprc_sec2_cardBox_bgWhite">
                                            <div class="investprc_sec2_cardBox_lft">
                                                <div class="investprc_sec2_cardBox_in investprc_sec2_cardBox_inWhite">
                                                    <?php if( get_field('invst_page_sec2_card_white_title') ): ?>
                                                    <h5><?php the_field('invst_page_sec2_card_white_title'); ?></h5>
                                                    <?php endif; ?>
                                                    <?php if( get_field('invst_page_sec2_card_white_desc') ): ?>
                                                    <div class="investprc_sec2_cardBox_inWhite_desc">
                                                        <?php the_field('invst_page_sec2_card_white_desc'); ?>
                                                    </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                            <div class="investprc_sec2_cardBox_rght">
                                                <div class="investprc_sec2_cardBox_in investprc_sec2_cardBox_inBlue">
                                                    <?php if( get_field('invst_page_sec2_card_blue_title') ): ?>
                                                    <h5><?php the_field('invst_page_sec2_card_blue_title'); ?></h5>
                                                    <?php endif; ?>
                                                    <?php if( get_field('invst_page_sec2_card_blue_desc') ): ?>
                                                    <div class="investprc_sec2_cardBox_inBlue_desc">
                                                        <?php the_field('invst_page_sec2_card_blue_desc'); ?>
                                                    </div>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="investprc_sec2_cardBox_in investprc_sec2_cardBox_inGrey">
                                                    <div class="investprc_icon">
                                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/investprcs_icon.svg" alt="icon">
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="investprc_sec2_cardBox_inGrey_box">
                                                                <?php if( get_field('invst_page_sec2_card_grey1_title') ): ?>
                                                                <h5><?php the_field('invst_page_sec2_card_grey1_title'); ?></h5>
                                                                <?php endif; ?>
                                                                <?php if( get_field('invst_page_sec2_card_grey1_desc') ): ?>
                                                                <div class="investprc_sec2_cardBox_inGrey_box_desc">
                                                                    <?php the_field('invst_page_sec2_card_grey1_desc'); ?>
                                                                </div>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="investprc_sec2_cardBox_inGrey_box">
                                                                <?php if( get_field('invst_page_sec2_card_grey2_title') ): ?>
                                                                <h5><?php the_field('invst_page_sec2_card_grey2_title'); ?></h5>
                                                                <?php endif; ?>
                                                                <?php if( get_field('invst_page_sec2_card_grey2_desc') ): ?>
                                                                <div class="investprc_sec2_cardBox_inGrey_box_desc">
                                                                    <?php the_field('invst_page_sec2_card_grey2_desc'); ?>
                                                                </div>
                                                                <?php endif; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="box_retang box_retang1"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/retangle_icon.svg" alt="" width="15"> </div>
                                    <div class="box_retang box_retang2"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/retangle_icon.svg" alt="" width="15"> </div>
                                    <div class="box_retang box_retang3"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/retangle_icon.svg" alt="" width="15"> </div>
                                    <div class="box_retang box_retang4"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/retangle_icon.svg" alt="" width="15"> </div>
                                </div>
                                <?php the_field('team_description'); ?>
                                <?php if( get_field('invst_page_sec2_desc_btm') ): ?>
                                <div class="investprc_sec2_right_btmdesc">
                                    <?php the_field('invst_page_sec2_desc_btm'); ?>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="investprc_sec3 padd-row">
            <div class="container">
                <div class="investprc_sec3_inner">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="investprc_sec3_lft">
                                <div class="investprc_sec3_lft_ct" data-aos="fade-up">
                                    <?php if( get_field('invst_page_sec3_title') ): ?>
                                    <div class="sub_heading">
                                        <h3><?php the_field('invst_page_sec3_title'); ?></h3>
                                    </div>
                                    <?php endif; ?>
                                    <?php if( get_field('invst_page_sec3_desc') ): ?>
                                    <div class="investprc_sec3_lft_desc pr-xl-4">
                                        <?php the_field('invst_page_sec3_desc'); ?>
                                    </div>
                                    <?php endif; ?>
                                    <?php if( get_field('invst_page_sec3_blockquote') ): ?>
                                    <div class="blockQuote mt-4 mt-xl-5">
                                        <?php the_field('invst_page_sec3_blockquote'); ?>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="investprc_sec3_rght" data-aos="fade-up">
                                <?php 
                                $image = get_field('invst_page_sec3_img');
                                if( !empty( $image ) ): ?>
                                <div class="investprc_sec3_img mtMob25 d-none d-md-block">
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                </div>
                                <?php endif; ?>

                                <?php 
                                $image = get_field('invst_page_sec3_img_mob');
                                if( !empty( $image ) ): ?>
                                <div class="investprc_sec3_img mtMob25 d-md-none">
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
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
