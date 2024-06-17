<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since Twenty Seventeen 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="home">
    <div class="container_outer">

        <section class="homeBanner bgBlueLight" style="background-image: url('<?php the_field('banner_mainImg'); ?>')">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="homeBanner_txt">
                        <div class="homeBanner_txt_container" data-aos="fade-up">
                            <?php if( get_field('banner_sub_title') ): ?>
                            <div class="subHeading"> <?php the_field('banner_sub_title'); ?> </div>
                            <?php endif; ?>
                            <?php if( get_field('banner_title') ): ?>
                            <h1 class="h1"> <?php the_field('banner_title'); ?> </h1>
                            <?php endif; ?>
                            <?php if( get_field('banner_desc') ): ?>
                            <div class="homeBanner_desc"> <?php the_field('banner_desc'); ?> </div>
                            <?php endif; ?>
                            <?php if( get_field('banner_btnTxt') ): ?>
                            <div class="homeBanner_btn btn-wrap">
                                <a href="<?php the_field('homeBanner_btnLink'); ?>" class="btn-style"> <span class="btn-style-txt"> <?php the_field('banner_btnTxt'); ?> </span> </a>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <div class="col-md-6"> </div>
            </div>
            <div class="homeBanner_btmimg" data-aos="fade-up">
                <img src="<?php the_field('banner_image'); ?>" alt="Logo Symbol" />
            </div>
        </section>

        <section class="home_abt padd-row">
            <div class="small_container">
                <div class="home_abt_inner">
                    <div class="home_abt_top" data-aos="fade-up">
                        <div class="home_abt_top_blockquote"> <?php the_field('abtblockquote'); ?> </div>
                    </div>
                    <div class="home_abt_btm">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="home_abt_img" data-aos="fade-up">
                                    <div class="about_feature_icon">
                                        <img src="<?php the_field('abtImg'); ?>" alt="Icon" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="home_abt_txt mtMob25" data-aos="fade-up">
                                    <?php the_field('abtdesc'); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="home_val padd-row">
            <div class="container">
                <div class="home_valIn">
                    <div class="main_heading text-center" data-aos="fade-up">
                        <?php if( get_field('val_sub_title') ): ?>
                        <div class="subHeading subHeadingIcon"> <?php the_field('val_sub_title'); ?> </div>
                        <?php endif; ?>
                        <?php if( get_field('val_title') ): ?>
                        <h2 class="h2"> <?php the_field('val_title'); ?> </h2>
                        <?php endif; ?>
                    </div>
                    <div class="home_valRow">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="home_val_img" data-aos="fade-up">
                                    <img src="<?php the_field('val_img'); ?>" alt="Icon" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="home_val_txt mtMob25" data-aos="fade-up">
                                    <?php if( have_rows('value_list') ): ?>
                                    <div class="home_val_list">
                                        <ul>
                                            <?php while( have_rows('value_list') ): the_row(); ?>
                                            <li>
                                                <div class="home_val_listBox">
                                                    <?php if( get_sub_field('title') ): ?>
                                                    <div class="home_val_list_title">
                                                        <h4> <?php echo get_sub_field('title') ?> </h4>
                                                    </div>
                                                    <?php endif; ?>
                                                    <?php if( get_sub_field('description') ): ?>
                                                    <div class="home_val_list_descWrap fonts14">
                                                        <div class="home_val_list_desc">
                                                            <?php echo get_sub_field('description') ?>
                                                        </div>
                                                    </div>
                                                    <?php endif; ?>
                                                </div>
                                            </li>
                                            <?php endwhile; ?>
                                        </ul>
                                    </div>
                                    <?php endif; ?>
                                    <?php if( get_field('val_btnTxt') ): ?>
                                    <div class="btn-wrap home_val_btn">
                                        <a href="<?php the_field('val_btnLink'); ?>" class="btn-style"> <span class="btn-style-txt"> <?php the_field('val_btnTxt'); ?> </span> </a>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="home_process bgLightgrey padd-row">
            <div class="container">
                <div class="home_processIn">
                    <div class="main_heading text-center" data-aos="fade-up">
                        <?php if( get_field('prcs_sub_title') ): ?>
                        <div class="subHeading subHeadingIcon"> <?php the_field('prcs_sub_title'); ?> </div>
                        <?php endif; ?>
                        <?php if( get_field('prcs_title') ): ?>
                        <h2 class="h2"> <?php the_field('prcs_title'); ?> </h2>
                        <?php endif; ?>
                    </div>
                    <div class="home_processRow" data-aos="fade-up">
                        <?php if( get_field('prcs_img') ): ?>
                        <div class="home_process_fullImg d-none d-md-block">
                            <img src="<?php the_field('prcs_img'); ?>" alt="Process Image">
                        </div>
                        <?php endif; ?>
                        <?php if( get_field('prcs_img_mob') ): ?>
                        <div class="home_process_fullImg d-md-none">
                            <img src="<?php the_field('prcs_img_mob'); ?>" alt="Process Image">
                        </div>
                        <?php endif; ?>
                        <?php if( have_rows('process_list') ): ?>
                        <!--
                         <div class="home_prcsBoxList">
                             <?php while( have_rows('process_list') ): the_row(); ?>
                             <div class="home_prcsBoxCol">
                                 <div class="home_prcsBox">
                                     <div class="home_prcsBoxIn">
                                         <?php if( get_sub_field('number') ): ?>
                                         <div class="home_prcs_number"> <?php echo get_sub_field('number') ?> </div>
                                         <?php endif; ?>
                                         <?php if( get_sub_field('title') ): ?>
                                         <div class="home_prcs_title"> <?php echo get_sub_field('title') ?> </div>
                                         <?php endif; ?>
                                         <div class="home_prcs_line"> </div>
                                         <?php if( get_sub_field('desc') ): ?>
                                         <div class="home_prcs_desc"> <?php echo get_sub_field('desc') ?> </div>
                                         <?php endif; ?>
                                     </div>
                                 </div> 
                             </div>
                             <?php endwhile; ?>
                         </div>
-->
                        <?php endif; ?>
                        <?php if( get_field('prcs_btnTxt') ): ?>
                        <div class="text-center clearfix">
                            <div class="btn-wrap home_prcs_btn">
                                <a href="<?php the_field('prcs_btnLink'); ?>" class="btn-style"> <span class="btn-style-txt"> <?php the_field('prcs_btnTxt'); ?> </span> </a>
                            </div>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="home_chief padd-row">
            <div class="container">
                <div class="home_chiefIn">
                    <div class="home_chiefBox" data-aos="fade-up">
                        <div class="home_chiefBox_lft">
                            <div class="home_chiefBoxDesc">
                                <?php if( get_field('chief_desc') ): ?>
                                <div class="home_chiefBoxDesc_txt fonts14">
                                    <?php the_field('chief_desc'); ?>
                                </div>
                                <?php endif; ?>
                                <?php if( get_field('chief_author') ): ?>
                                <div class="home_chiefBoxDesc_name"> <?php the_field('chief_author'); ?> </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div class="home_chiefBox_rght">
                            <div class="home_chiefBox_rghtImg">
                                <img src="<?php the_field('chief_image'); ?>" alt="About Banner" />
                            </div>
                        </div>
                        <div class="box_retang box_retang1"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/retangle_icon.svg" alt="" width="15"> </div>
                        <div class="box_retang box_retang2"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/retangle_icon.svg" alt="" width="15"> </div>
                        <div class="box_retang box_retang3"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/retangle_icon.svg" alt="" width="15"> </div>
                        <div class="box_retang box_retang4"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/retangle_icon.svg" alt="" width="15"> </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="home_strgies padd-row">
            <div class="container">
                <div class="home_strgiesIn">
                    <div class="main_heading text-center" data-aos="fade-up">
                        <?php if( get_field('strgs_sub_title') ): ?>
                        <div class="subHeading subHeadingIcon"> <?php the_field('strgs_sub_title'); ?> </div>
                        <?php endif; ?>
                        <?php if( get_field('strgs_title') ): ?>
                        <h2 class="h2"> <?php the_field('strgs_title'); ?> </h2>
                        <?php endif; ?>
                    </div>
                    <?php if( have_rows('strgs_list') ): ?>
                    <div class="home_strgiesRow">
                        <div class="row">
                            <?php while( have_rows('strgs_list') ): the_row(); ?>
                            <div class="col-md-6">
                                <a href="<?php echo get_sub_field('strgs_btnLink'); ?>" class="home_strgsBox" data-aos="fade-up">
                                    <?php if( get_sub_field('image') ): ?>
                                    <div class="home_strgsBox_img">
                                        <img src="<?php echo get_sub_field('image'); ?>" alt="Image" />
                                    </div>
                                    <?php endif; ?>
                                    <div class="home_strgsBox_txtWrapBox">
                                        <div class="home_strgsBox_txtWrap fonts14">
                                            <?php if( get_sub_field('title') ): ?>
                                            <h4> <?php echo get_sub_field('title') ?> </h4>
                                            <?php endif; ?>
                                            <?php if( get_sub_field('description') ): ?>
                                            <div class="home_strgsBox_desc"> <?php echo get_sub_field('description') ?> </div>
                                            <?php endif; ?>
                                            <?php if( get_sub_field('strgs_btnTxt') ): ?>
                                            <div class="btn-wrap home_strgies_btn">
                                                <span href="javascript:void(0);" class="btn-style"> <span class="btn-style-txt"> <?php echo  get_sub_field('strgs_btnTxt'); ?> </span> </span>
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

        <section class="home_news bgBlueLight padd-row home_news_contact">
            <div class="container">
                <div class="home_newsIn">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="home_news_lft" data-aos="fade-up">
                                <div class="home_news_lftBox">
                                    <!--
                                     <div class="main_heading">
                                         <?php if( get_field('news_sub_title') ): ?>
                                         <div class="subHeading subHeadingIcon"> <?php the_field('news_sub_title'); ?> </div>
                                         <?php endif; ?>
                                         <?php if( get_field('news_title') ): ?>
                                         <h2 class="h2"> <?php the_field('news_title'); ?> </h2>
                                         <?php endif; ?>
                                     </div>
                                     <div class="home_newsList">
                                         <?php 
                                    $postList = new WP_Query(
                                    array (
                                        'posts_per_page' => '6',
                                        'post_status' => 'publish',
                                        'post_type' => 'post',
                                        'orderby' => 'date', 
                                        'order' => 'DESC',
                                    ) 
                                    );
                                    if($postList->have_posts()) : while($postList->have_posts()): $postList->the_post(); $post_tags = get_the_tags(); 
                                 ?>
                                         <div class="home_newsBoxWrap">
                                             <a href="<?php the_permalink(); ?>" class="home_newsBox fonts14">
                                                 <div class="home_newsBox_lft">
                                                     <div class="home_newsBoxImg">
                                                         <?php the_post_thumbnail( 'full', array( '' => '' ) );  ?>
                                                     </div>
                                                 </div>
                                                 <div class="home_newsBox_rght">
                                                     <div class="home_newsBoxDesc">
                                                         <h4> <?php
                                                    $postTitle = get_the_title();
                                                    $char_limit = 90;
                                                    if (mb_strlen($postTitle) > $char_limit) {
                                                        $trimmed_content = mb_substr($postTitle, 0, $char_limit) . '...';
                                                    } else {
                                                        $trimmed_content = $postTitle;
                                                    }
                                                    echo $trimmed_content;
                                                ?> </h4>
                                                         <p> <?php echo get_the_excerpt(); ?> </p>
                                                     </div>
                                                 </div>
                                             </a>
                                         </div>
                                         <?php endwhile; endif; wp_reset_query(); ?>
                                     </div>
                                     <?php if( get_field('news_btnTxt') ): ?>
                                     <div class="btnLink-wrap home_news_btn">
                                         <a href="<?php the_field('news_btnLink'); ?>" class="btn-link"> <?php the_field('news_btnTxt'); ?> </a>
                                     </div>
                                     <?php endif; ?>
-->

                                    <div class="home_contact_heading" data-aos="fade-up">
                                        <div class="main_heading">
                                            <?php if( get_field('home_cnt_subtitle') ): ?>
                                            <div class="subHeading subHeadingIcon"> <?php the_field('home_cnt_subtitle'); ?> </div>
                                            <?php endif; ?>
                                            <?php if( get_field('home_cnt_title') ): ?>
                                            <h2 class="h2"> <?php the_field('home_cnt_title'); ?> </h2>
                                            <?php endif; ?>
                                        </div>
                                    </div>

                                    <div class="home_contact_form">
                                        <?php echo do_shortcode('[wpforms id="116" title="false"]'); ?>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="home_news_rght" data-aos="fade-up">
                                <div class="home_newsletrBox fonts14">
                                    <div class="main_heading">
                                        <?php if( get_field('newsletr_sub_title') ): ?>
                                        <div class="subHeading subHeadingIcon"> <?php the_field('newsletr_sub_title'); ?> </div>
                                        <?php endif; ?>
                                        <?php if( get_field('newsletr_title') ): ?>
                                        <h2 class="h2"> <?php the_field('newsletr_title'); ?> </h2>
                                        <?php endif; ?>
                                    </div>
                                    <?php if( get_field('newsletr_img') ): ?>
                                    <div class="home_newsletrBox_img">
                                        <img src="<?php the_field('newsletr_img'); ?>" alt="Newsletter" />
                                    </div>
                                    <?php endif; ?>
                                    <?php if( get_field('newsletr_desc') ): ?>
                                    <div class="home_newsletrBox_desc"> <?php the_field('newsletr_desc'); ?> </div>
                                    <?php endif; ?>
                                    <?php if( get_field('newsler_btnTxt') ): ?>
                                    <div class="btnLink-wrap home_newsleter_btn">
                                        <a href="javascript:void(0);" class="btn-link" data-toggle="modal" data-target="#newspop">
                                            <span><?php the_field('newsler_btnTxt'); ?></span>
                                        </a>
                                    </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--
         <section class="home_contact padd-row">
             <div class="container">
                 <div class="home_contactIn">
                     <div class="row">
                         <div class="col-xl-3 col-md-4">
                             <div class="home_contact_heading" data-aos="fade-up">
                                 <div class="main_heading">
                                     <?//php if( get_field('home_cnt_subtitle') ): ?>
                                     <div class="subHeading subHeadingIcon"> <?//php the_field('home_cnt_subtitle'); ?> </div>
                                     <?//php endif; ?>
                                     <?//php if( get_field('home_cnt_title') ): ?>
                                     <h2 class="h2"> <?//php the_field('home_cnt_title'); ?> </h2>
                                     <?//php endif; ?>
                                 </div>
                             </div>
                         </div>
                         <div class="col-xl-9 col-md-8">
                             <div class="home_contact_form">
                                 <?//php echo do_shortcode('[wpforms id="116" title="false"]'); ?>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </section>
-->

    </div>

</div>

<?php
get_footer();
