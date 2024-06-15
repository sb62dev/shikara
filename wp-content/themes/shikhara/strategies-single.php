<?php

/**
 * Template Name: Srategies Single
**/
get_header();

?>

<div class="strgsSinglePage">
    <div class="container_outer container_outer_pb">

        <?php get_template_part('template-parts/banner'); ?>

        <section class="strgsSingle_sec1 padd-row">
            <div class="container">
                <div class="strgsSingle_sec1_inner">
                    <?php if( get_field('strgs_sec1_title') ): ?>
                    <div class="sub_heading">
                        <h3><?php the_field('strgs_sec1_title'); ?></h3>
                    </div>
                    <?php endif; ?>
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="strgsSingle_sec1_lft">
                                <div class="strgsSingle_sec1_ct pr-xl-4" data-aos="fade-up">
                                    <?php 
                                    $image = get_field('strgs_sec1_img');
                                    if( !empty( $image ) ): ?>
                                    <div class="strgsSingle_sec1_img" data-aos="fade-up">
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    </div>
                                    <?php endif; ?>
                                    <?php if( get_field('strgsSingle_sec1_img_btmdesc') ): ?>
                                    <div class="strgsSingle_se3_btmdesc"> <?php the_field('strgsSingle_sec1_img_btmdesc'); ?> </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="strgsSingle_sec1_rght mtMob25">
                                <?php if( get_field('strgs_sec1_desc') ): ?>
                                <div class="strgsSingle_sec1_rght_desc">
                                    <?php the_field('strgs_sec1_desc'); ?>
                                </div>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="strgsSingle_sec2 strgsSingle_mobPad padd-row">
            <div class="container">
                <div class="strgsSingle_inner">
                    <div class="row">
                        <div class="col-md-4 col-xl-3">
                            <div class="sub_heading pr-xl-4" data-aos="fade-up">
                                <?php if( get_field('strgs_sec2_title') ): ?>
                                <h3><?php the_field('strgs_sec2_title'); ?></h3>
                                <?php endif; ?>
                                <?php if( get_field('strgs_sec2_desc') ): ?>
                                <p><?php the_field('strgs_sec2_desc'); ?></p>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="col-md-8 col-xl-9">
                            <div class="strgsSingle_sec2_right mtMob25" data-aos="fade-up">
                                <?php if( have_rows('strategies_list') ): ?>
                                <div class="strgs_featuresBox_list">
                                    <div class="row">
                                        <?php while( have_rows('strategies_list') ): the_row(); ?>
                                        <div class="col-md-4">
                                            <div class="strgs_featuresBox">
                                                <?php if( get_sub_field('title') ): ?>
                                                <h4> <?php echo get_sub_field('title') ?> </h4>
                                                <?php endif; ?>
                                                <?php if( get_sub_field('desc') ): ?>
                                                <div class="strgs_featuresBox_desc"> <?php echo get_sub_field('desc') ?> </div>
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

        <section class="strgsSingle_se3 strgsSingle_mobPad padd-row">
            <div class="container">
                <div class="strgsSingle_se3_inner">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="strgsSingle_se3_lft">
                                <div class="strgsSingle_se3_lft_ct" data-aos="fade-up">
                                    <?php if( get_field('strgs_sec3_title') ): ?>
                                    <div class="sub_heading">
                                        <h3><?php the_field('strgs_sec3_title'); ?></h3>
                                    </div>
                                    <?php endif; ?>
                                    <?php if( get_field('strgs_sec3_desc') ): ?>
                                    <div class="strgsSingle_se3_lft pr-xl-4">
                                        <?php the_field('strgs_sec3_desc'); ?>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="strgsSingle_se3_rght mtMob25" data-aos="fade-up">
                                <?php if( get_field('strgs_sec3_title_img1') ): ?>
                                <h4> <?php the_field('strgs_sec3_title_img1'); ?> </h4>
                                <?php endif; ?>

                                <?php 
                                $image = get_field('strgs_sec3_img_1');
                                if( !empty( $image ) ): ?>
                                <div class="strgsSingle_se3_img">
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                </div>
                                <?php endif; ?>

                                <?php if( get_field('strgs_sec3_desc_img1') ): ?>
                                <div class="strgsSingle_se3_btmdesc"> <?php the_field('strgs_sec3_desc_img1'); ?> </div>
                                <?php endif; ?>

                                <?php if( get_field('strgs_sec3_title_img2') ): ?>
                                <h4 class="mt-4 mt-xl-5"> <?php the_field('strgs_sec3_title_img2'); ?> </h4>
                                <?php endif; ?>

                                <?php 
                                $image = get_field('strgs_sec3_img_2');
                                if( !empty( $image ) ): ?>
                                <div class="strgsSingle_se3_img">
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                </div>
                                <?php endif; ?>

                                <?php if( get_field('strgs_sec3_desc_img2') ): ?>
                                <div class="strgsSingle_se3_btmdesc"> <?php the_field('strgs_sec3_desc_img2'); ?> </div>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="strgsSingle_sec4 lightGreenBG padd-row">
            <div class="container">
                <div class="strgsSingle_sec4_inner">
                    <?php if( get_field('strgs_sec4_title') ): ?>
                    <div class="sub_heading">
                        <h3><?php the_field('strgs_sec4_title'); ?></h3>
                    </div>
                    <?php endif; ?>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="strgsSingle_sec4_lft">
                                <div class="strgsSingle_sec4_ct pr-xl-4" data-aos="fade-up">

                                    <?php 
                                    $image = get_field('strgs_sec4_img_lft');
                                    if( !empty( $image ) ): ?>
                                    <div class="strgsSingle_sec4_img" data-aos="fade-up">
                                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    </div>
                                    <?php endif; ?>

                                    <?php if( get_field('strgs_sec4_desc_left') ): ?>
                                    <div class="strgsSingle_sec4_rght_desc">
                                        <?php the_field('strgs_sec4_desc_left'); ?>
                                    </div>
                                    <?php endif; ?>

                                    <?php if( get_field('strgs_sec4_blockquote_left') ): ?>
                                    <div class="blockQuote mt-4 mt-xl-5" data-aos="fade-up">
                                        <?php the_field('strgs_sec4_blockquote_left'); ?>
                                    </div>
                                    <?php endif; ?>

                                    <?php if( get_field('strgs_sec4_btnlabel_left') ): ?>
                                    <div class="btn-wrap strgs_sec4_btnwrap">
                                        <a href="<?php the_field('strgs_sec4_btnlink_left'); ?>" class="btn-style"> <span class="btn-style-txt"> <?php the_field('strgs_sec4_btnlabel_left'); ?> </span> </a>
                                    </div>
                                    <?php endif; ?>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="strgsSingle_sec4_rght mtMob25">

                                <?php if( get_field('strgs_sec4_desc_right') ): ?>
                                <div class="strgsSingle_sec4_rght_desc">
                                    <?php the_field('strgs_sec4_desc_right'); ?>
                                </div>
                                <?php endif; ?>

                                <?php 
                                $image = get_field('strgs_sec4_img_right');
                                if( !empty( $image ) ): ?>
                                <div class="strgsSingle_sec4_img" data-aos="fade-up">
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                </div>
                                <?php endif; ?>

                                <?php if( get_field('strgs_sec4_blockquote_right') ): ?>
                                <div class="blockQuote mt-4 mt-xl-5" data-aos="fade-up">
                                    <?php the_field('strgs_sec4_blockquote_right'); ?>
                                </div>
                                <?php endif; ?>

                                <?php if( get_field('strgs_sec4_btnlabel_right') ): ?>
                                <div class="btn-wrap strgs_sec4_btnwrap">
                                    <a href="<?php the_field('strgs_sec4_btnlink_right'); ?>" class="btn-style"> <span class="btn-style-txt"> <?php the_field('strgs_sec4_btnlabel_right'); ?> </span> </a>
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
