<?php

/**
 * Template Name: Our Strategies
**/
get_header();

?>

<div class="strgsPage">
    <div class="container_outer container_outer_pb">

        <?php get_template_part('template-parts/banner'); ?>

        <section class="strgs_sec1 padd-row">
            <div class="container">
                <div class="strgs_sec1_inner">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="strgs_sec1_lft">
                                <div class="strgs_sec1_lft_ct pr-xl-4" data-aos="fade-up">
                                    <?php if( get_field('strgs_page_title') ): ?>
                                    <div class="sub_heading">
                                        <h3><?php the_field('strgs_page_title'); ?></h3>
                                    </div>
                                    <?php endif; ?>
                                    <?php if( get_field('strgs_page_desc') ): ?>
                                    <div class="strgs_sec1_lft_desc">
                                        <?php the_field('strgs_page_desc'); ?>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="strgs_sec1_rght">
                                <?php 
                                $image = get_field('strgs_page_desc_img');
                                if( !empty( $image ) ): ?>
                                <div class="strgs_sec1_img mtMob25" data-aos="fade-up">
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="400" />
                                </div>
                                <?php endif; ?>

                                <?php if( get_field('strgs_page_blockquote') ): ?>
                                <div class="blockQuote mt-4 mt-xl-5" data-aos="fade-up">
                                    <?php the_field('strgs_page_blockquote'); ?>
                                </div>
                                <?php endif; ?>
                                <?php if( get_field('strgs_page_desc_btm') ): ?>
                                <div class="strgs_sec1_btm_desc mt-4">
                                    <?php the_field('strgs_page_desc_btm'); ?>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="strgs_sec2 bgLightgrey padd-row">
            <div class="container">
                <div class="strgs_sec2_inner">
                    <?php if( get_field('strgs_page_sec2_title') ): ?>
                    <div class="strgs_sec2_headingWrap mb-4 mb-xl-5">
                        <div class="sub_heading">
                            <h3><?php the_field('strgs_page_sec2_title'); ?></h3>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php  
                    $page_id = get_field('home_page_id');
                    if ($page_id && have_rows('strgs_list', $page_id)) : ?>
                        <div class="strgs_sec2_cardWrap home_strgiesRow">
                            <div class="row">
                                <?php while (have_rows('strgs_list', $page_id)) : the_row(); ?>
                                    <div class="col-md-6">
                                        <a href="<?php echo get_sub_field('strgs_btnLink'); ?>" class="home_strgsBox" data-aos="fade-up">
                                            <?php if (get_sub_field('image')) : ?>
                                                <div class="home_strgsBox_img">
                                                    <img src="<?php echo get_sub_field('image'); ?>" alt="Image" />
                                                </div>
                                            <?php endif; ?>
                                            <div class="home_strgsBox_txtWrapBox">
                                                <div class="home_strgsBox_txtWrap fonts14">
                                                    <?php if (get_sub_field('title')) : ?>
                                                        <h4><?php echo get_sub_field('title'); ?></h4>
                                                    <?php endif; ?>
                                                    <?php if (get_sub_field('description')) : ?>
                                                        <div class="home_strgsBox_desc"><?php echo get_sub_field('description'); ?></div>
                                                    <?php endif; ?>
                                                    <?php if (get_sub_field('strgs_btnTxt')) : ?>
                                                        <div class="btn-wrap home_strgies_btn">
                                                            <span href="javascript:void(0);" class="btn-style"><span class="btn-style-txt"><?php echo get_sub_field('strgs_btnTxt'); ?></span></span>
                                                        </div>
                                                    <?php endif; ?>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>


    </div>
</div>

<?php get_footer(); ?>
