<?php
/**
 * Template Name: Our Team
**/

get_header(); 

?>

<div class="teamPage">
    <div class="container_outer container_outer_pb">

        <?php get_template_part('template-parts/banner'); ?>

        <section class="team_sec1 padd-row">
            <div class="container">
                <?php if (get_field('top_desc')): ?>
                <div class="team_top_heading">
                    <div class="row">
                        <div class="col-md-6 offset-md-6">
                            <?php the_field('top_desc'); ?>
                        </div>
                    </div>
                </div>
                <?php endif; ?>
                <div class="team_sec1_inner">
                    <div class="team_sec_heading">
                        <?php if (get_field('invest_title')): ?>
                        <div class="sub_heading">
                            <h3><?php the_field('invest_title'); ?></h3>
                        </div>
                        <?php endif; ?>
                    </div>
                    <?php if (have_rows('investment_team_boxes')): ?>
                    <div class="team_cardList">
                        <div class="row">
                            <?php 
                                $modal_count = 0;
                                $modals = [];
                                while (have_rows('investment_team_boxes')): the_row(); 
                                $modal_count++;
                                $modal_id = 'teamMemberModal' . $modal_count;
                                $modals[] = $modal_id;
                            ?>
                            <div class="col-6 col-md-4 col-lg-3">
                                <a href="javascript:void(0);" class="team_cardBox" data-aos="fade-up" data-toggle="modal" data-target="#<?php echo $modal_id; ?>">
                                    <div class="team_cardBox_img">
                                        <?php 
                                        $image = get_sub_field('image');
                                        if (!empty($image)): ?>
                                        <div class="team_cardBox_img_design"></div>
                                        <div class="team_cardBox_image">
                                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="400" />
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="team_cardBox_cnt">
                                        <?php if (get_sub_field('title')): ?>
                                        <h4><?php echo get_sub_field('title'); ?></h4>
                                        <?php endif; ?>
                                        <?php if (get_sub_field('sub_title')): ?>
                                        <div class="team_cardBox_desc"><?php echo get_sub_field('sub_title'); ?></div>
                                        <?php endif; ?>
                                    </div>
                                </a>
                            </div>
                            <?php endwhile; ?>
                        </div>
                    </div>

                    <?php  
                        $modal_count = 0; 
                        while (have_rows('investment_team_boxes')): the_row(); 
                        $modal_count++; 
                        $modal_id = $modals[$modal_count - 1]; // Current modal ID
                        $prev_modal_id = $modal_count > 1 ? $modals[$modal_count - 2] : ''; // Previous modal ID
                        $next_modal_id = $modal_count < count($modals) ? $modals[$modal_count] : ''; // Next modal ID
                    ?>
                    <div class="teamModal">
                        <div class="modal" id="<?php echo $modal_id; ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $modal_id; ?>Label" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                            <div class="modal-dialog modal-dialog-centered modal-lg teamModal-animate" role="document">
                                <div class="modal-content">
                                    <div class="teamModalBox">
                                        <?php if ($prev_modal_id): ?>
                                        <button type="button" class="teamModal_navbtn prev_btn d-none d-md-block" data-toggle="modal" data-target="#<?php echo $prev_modal_id; ?>" data-current="#<?php echo $modal_id; ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/prev_icon.svg" alt="Prev"></button>
                                        <?php endif; ?>
                                        <div class="teamModalBox_row">
                                            <div class="row align-items-center">
                                                <div class="col-md-5">
                                                    <div class="teamModalBox_lftSide">
                                                        <div class="teamModalBox_img">
                                                            <?php 
                                                        $image = get_sub_field('image');
                                                        if (!empty($image)): ?>
                                                            <div class="teamModalBox_img_design"></div>
                                                            <div class="teamModalBox_image">
                                                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="400" />
                                                            </div>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="teamModalBox_rightSide">
                                                        <div class="teamModalBox_heading">
                                                            <?php if (get_sub_field('title')): ?>
                                                            <h4><?php echo get_sub_field('title'); ?></h4>
                                                            <?php endif; ?>
                                                            <?php if (get_sub_field('sub_title')): ?>
                                                            <div class="teamModalBox_subtitle"><?php echo get_sub_field('sub_title'); ?></div>
                                                            <?php endif; ?>
                                                            <div class="teamModalBox_close">
                                                                <a href="javascript:void(0);" type="button" class="close close_icon" data-dismiss="modal" aria-label="Close">&times;</a>
                                                            </div>
                                                        </div>
                                                        <div class="teamModalBox_descWrap">
                                                            <div class="teamModalBox_desc">
                                                                <?php echo get_sub_field('description'); ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php if ($next_modal_id): ?>
                                        <button type="button" class="teamModal_navbtn next_btn d-none d-md-block" data-toggle="modal" data-target="#<?php echo $next_modal_id; ?>" data-current="#<?php echo $modal_id; ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/next_icon.svg" alt="next"></button>
                                        <?php endif; ?>
                                        <div class="teamModal_btnwrap d-md-none">
                                            <?php if ($prev_modal_id): ?>
                                            <button type="button" class="teamModal_navbtn prev_btn" data-toggle="modal" data-target="#<?php echo $prev_modal_id; ?>" data-current="#<?php echo $modal_id; ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/prev_icon.svg" alt="Prev"></button>
                                            <?php endif; ?>
                                            <?php if ($next_modal_id): ?>
                                            <button type="button" class="teamModal_navbtn next_btn" data-toggle="modal" data-target="#<?php echo $next_modal_id; ?>" data-current="#<?php echo $modal_id; ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/next_icon.svg" alt="next"></button>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <section class="team_sec2 bgLightgrey padd-row">
            <div class="container">
                <div class="team_sec2_inner">
                    <div class="team_sec_heading">
                        <?php if( get_field('support_title') ): ?>
                        <div class="sub_heading">
                            <h3><?php the_field('support_title'); ?></h3>
                        </div>
                        <?php endif; ?>
                    </div>
                    <?php if( have_rows('support_team_boxes') ): ?>
                    <div class="team_cardList">
                        <div class="row">
                            <?php 
                                $sup_modal_count = 0;
                                $sup_modals = [];
                                while (have_rows('support_team_boxes')): the_row(); 
                                $sup_modal_count++;
                                $sup_modal_id = 'teamSupportModal' . $sup_modal_count;
                                $sup_modals[] = $sup_modal_id; 
                            ?>
                            <div class="col-6 col-md-4 col-lg-3">
                                <a href="javascript:void(0);" class="team_cardBox" data-aos="fade-up" data-toggle="modal" data-target="#<?php echo $sup_modal_id; ?>">
                                    <div class="team_cardBox_img">
                                        <?php 
                                        $image = get_sub_field('image');
                                        if( !empty( $image ) ): ?>
                                        <div class="team_cardBox_img_design"></div>
                                        <div class="team_cardBox_image">
                                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="400" />
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                    <div class="team_cardBox_cnt">
                                        <?php if( get_sub_field('title') ): ?>
                                        <h4> <?php echo get_sub_field('title') ?> </h4>
                                        <?php endif; ?>
                                        <?php if( get_sub_field('sub_title') ): ?>
                                        <div class="team_cardBox_desc"> <?php echo get_sub_field('sub_title') ?> </div>
                                        <?php endif; ?>
                                    </div>
                                </a>
                            </div>
                            <?php endwhile; ?>
                        </div>
                    </div>
                    <?php  
                        $sup_modal_count = 0;
                        while (have_rows('support_team_boxes')): the_row(); 
                        $sup_modal_count++; 
                        $sup_modal_id = $sup_modals[$sup_modal_count - 1]; // Current modal ID
                        $sup_prev_modal_id = $sup_modal_count > 1 ? $sup_modals[$sup_modal_count - 2] : ''; // Previous modal ID
                        $sup_next_modal_id = $sup_modal_count < count($sup_modals) ? $sup_modals[$sup_modal_count] : ''; // Next modal ID
                    ?>
                    <div class="teamModal">
                        <div class="modal" id="<?php echo $sup_modal_id; ?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $sup_modal_id; ?>Label" aria-hidden="true" data-backdrop="static" data-keyboard="false">
                            <div class="modal-dialog modal-dialog-centered modal-lg teamModal-animate" role="document">
                                <div class="modal-content">
                                    <div class="teamModalBox">
                                        <?php if ($sup_prev_modal_id): ?>
                                        <button type="button" class="teamModal_navbtn prev_btn d-none d-md-block" data-toggle="modal" data-target="#<?php echo $sup_prev_modal_id; ?>" data-current="#<?php echo $sup_modal_id; ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/prev_icon.svg" alt="Prev"></button>
                                        <?php endif; ?>
                                        <div class="teamModalBox_row">
                                            <div class="row align-items-center">
                                                <div class="col-md-5">
                                                    <div class="teamModalBox_lftSide">
                                                        <div class="teamModalBox_img">
                                                            <?php 
                                                        $image = get_sub_field('image');
                                                        if (!empty($image)): ?>
                                                            <div class="teamModalBox_img_design"></div>
                                                            <div class="teamModalBox_image">
                                                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" width="400" />
                                                            </div>
                                                            <?php endif; ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-7">
                                                    <div class="teamModalBox_rightSide">
                                                        <div class="teamModalBox_heading">
                                                            <?php if (get_sub_field('title')): ?>
                                                            <h4><?php echo get_sub_field('title'); ?></h4>
                                                            <?php endif; ?>
                                                            <?php if (get_sub_field('sub_title')): ?>
                                                            <div class="teamModalBox_subtitle"><?php echo get_sub_field('sub_title'); ?></div>
                                                            <?php endif; ?>
                                                            <div class="teamModalBox_close">
                                                                <a href="javascript:void(0);" type="button" class="close close_icon" data-dismiss="modal" aria-label="Close">&times;</a>
                                                            </div>
                                                        </div>
                                                        <div class="teamModalBox_descWrap">
                                                            <div class="teamModalBox_desc">
                                                                <?php echo get_sub_field('description'); ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php if ($sup_next_modal_id): ?>
                                        <button type="button" class="teamModal_navbtn next_btn d-none d-md-block" data-toggle="modal" data-target="#<?php echo $sup_next_modal_id; ?>" data-current="#<?php echo $sup_modal_id; ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/next_icon.svg" alt="next"> </button>
                                        <?php endif; ?>
                                        <div class="teamModal_btnwrap d-md-none">
                                            <?php if ($sup_prev_modal_id): ?>
                                            <button type="button" class="teamModal_navbtn prev_btn" data-toggle="modal" data-target="#<?php echo $sup_prev_modal_id; ?>" data-current="#<?php echo $sup_modal_id; ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/prev_icon.svg" alt="Prev"></button>
                                            <?php endif; ?>
                                            <?php if ($sup_next_modal_id): ?>
                                            <button type="button" class="teamModal_navbtn next_btn" data-toggle="modal" data-target="#<?php echo $sup_next_modal_id; ?>" data-current="#<?php echo $sup_modal_id; ?>"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/next_icon.svg" alt="next"> </button>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
        </section>


        <!--
        <script>
            jQuery(document).ready(function($) {
                function openModal(targetModal) {
                    $(targetModal).modal('show');
                    $('body').addClass('modal-open');
                }

                function closeModal(currentModal) {
                    $(currentModal).modal('hide');
                    $('body').removeClass('modal-open');
                }

                $('.modal .teamModal_navbtn').on('click', function() {
                    var currentModal = $(this).data('current');
                    var targetModal = $(this).data('target');

                    $(currentModal).one('hidden.bs.modal', function() {
                        openModal(targetModal);
                    });

                    closeModal(currentModal);
                });

                $('.modal').on('hidden.bs.modal', function() {
                    $('body').removeClass('modal-open');
                });

                $('.modal').on('shown.bs.modal', function() {
                    $('body').addClass('modal-open');
                });
            });

        </script>
-->

        <script>
            jQuery(document).ready(function($) {
                $("div[id^='teamMemberModal'], div[id^='teamSupportModal']").each(function() {
                    var currentModal = $(this);

                    // Click next
                    currentModal.find('.next_btn').click(function() {
                        currentModal.modal('hide');
                        currentModal.on('hidden.bs.modal', function() {
                            currentModal.nextAll("div[id^='teamMemberModal'], div[id^='teamSupportModal']").first().modal('show');
                            currentModal.off('hidden.bs.modal');
                        });
                    });

                    // Click prev
                    currentModal.find('.prev_btn').click(function() {
                        currentModal.modal('hide');
                        currentModal.on('hidden.bs.modal', function() {
                            currentModal.prevAll("div[id^='teamMemberModal'], div[id^='teamSupportModal']").first().modal('show');
                            currentModal.off('hidden.bs.modal');
                        });
                    });
                });

                $('.modal').on('hidden.bs.modal', function() {
                    $('body').removeClass('modal-open');
                });

                $('.modal').on('shown.bs.modal', function() {
                    $('body').addClass('modal-open');
                });
            });

        </script>

    </div>
</div>

<?php 
get_footer();
?>
