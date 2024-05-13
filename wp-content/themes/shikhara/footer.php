<?php
/**
 * The template for displaying the footer 
*/

?>

<section class="disclaimersec bgBlueLight">
    <div class="container">
        <div class="disclam_toggle text-center">
            <a data-toggle="collapse" href="#disclamtxt" aria-expanded="false" aria-controls="disclamtxt"> Disclaimer <span class="bottom_arrow"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/dropdown.svg" width="13" /></span>
            </a>
            <div class="collapse fonts14" id="disclamtxt">
                <div class="disclam_toggle_toggleTxt text-left">
                    <p> <strong> Important information </strong> </p>
                    <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                    <p class="mb-0"> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. </p>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="footer">
    <div class="container">
        <div class="ftrMain">
            <div class="row">
                <div class="col-md-3">
                    <div class="ftr-logo">
                        <a href="<?php echo get_home_url(); ?>"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo_white.svg" alt="logo" width="200"> </a>
                    </div>
                    <!--
                     <div class="ftrSocial mt-4 mt-md-5">
                         <ul>
                             <li><a target="_blank" rel="noopener" href="https://twitter.com/OisterGlobal"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                             <li><a target="_blank" rel="noopener" href="https://www.linkedin.com/company/83531039/admin/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                             <li><a target="_blank" rel="noopener" href="https://youtube.com/@OisterGlobal?si=ukUUjBXLhVw44HHW"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                         </ul>
                     </div>
-->
                </div>
                <div class="col-md-6">
                    <div class="ftrLinks ftrMenu-list">
                        <?php  
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'top',
                                    'menu_class'     => 'd-block'
                                )
                            );
                        ?>
                    </div>
                </div>
                <!--
                 <div class="col-md-3">
                     <div class="ftr_contact_box">
                         <div class="ftr_txt">
                             <div class="ftr_heading"> Contact Info </div>
                             <span>Address:</span> Level 6, Corporate Edge, Two Horizon Centre, Golf Course Road, Gurgaon, India, 122011
                         </div>
                         <div class="ftr_txt"><span>Phone:</span> <a href="tel:+91-8882137261">+91-8882137261</a></div>
                         <div class="ftr_txt"><span>Email:</span> <a href="mailto:support@oisterglobal.com">support@oisterglobal.com</a></div>
                     </div>
                 </div>
-->
            </div>
        </div>
    </div>
</footer>
<!--- End of footer --->

<div class="newsPop">
    <div class="modal fade" id="newspop" tabindex="-1" role="dialog" aria-labelledby="newspop" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog modal-md modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="news_popWrap">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h2 class="h2"> Subscribe to our newsletter </h2>
                        <div class="news_popForm">
                            <?php echo do_shortcode('[wpforms id="218" title="false"]'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/particleslider.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/popper.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/wow.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/aos.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/slick.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ).'/assets/js/custom.js?v='.time(); ?>"></script>

<?php wp_footer(); ?>

</body>

</html>
