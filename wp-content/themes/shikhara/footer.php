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
                    <p> This website is published exclusively for the purpose of providing general information about the management services carried out by Shikhara Investment Management LP, Shikhara Capital (Hong Kong) Private Limited and its affiliates (collectively “Shikhara Investments”). The information presented on the website is not, and may not be relied on in any manner as legal, tax, investment, accounting or other advice or as an offer to sell or a solicitation of an offer to buy an interest in any investment product or any other entity sponsored or managed by Shikhara Investments. This website doesn’t constitute and should not be considered as any form of financial opinion or recommendation. </p>

                    <p> Shikhara Investment Management LP has not been approved or disapproved by the U.S. Securities and Exchange Commission or any other state and Shikhara Capital (Hong Kong) Private Limited has not been approved or disapproved by the Hong Kong Securities and Futures Commission. This website does not constitute an offer to sell or the solicitation of an offer to buy in any state of the United States or other U.S. or non-U.S. jurisdiction to any person to whom it is unlawful to make such offer or solicitation in such state or jurisdiction. </p>

                    <p> Investment involves risk. Past performance is not indicative of future performance. It cannot be guaranteed that the performance of the investment product will generate a return and there may be circumstances where no return is generated. Investors could lose all or a substantial portion of any investment made. Before making any investment decision, investors should read the Prospectus for details and the risk factors. Investors should ensure they fully understand the risks associated with the investment product and should also consider their own investment objective and risk tolerance level. Investors are advised to seek independent professional advice before making any investment.</p>

                    <p> Shikhara’s investment products are suitable only for sophisticated investors and require the financial ability and willingness to accept the high risks and lack of liquidity inherent in Shikhara Investments’ investment products. Prospective investors must be prepared to bear such risks for an indefinite period of time. No assurance can be given that the investment objectives of any given investment product will be achieved or that investors will receive a return of their investment. </p>

                    <p> Certain of the information contained in this website are statements of future expectations and other forward-looking statements. Views, opinions and estimates may change without notice and are based on a number of assumptions which may or may not eventuate or prove to be accurate. Actual results, performance or events may differ materially from those in such statements. </p>

                    <p> Certain information contained in this website is compiled from third party sources. Whereas Shikhara Investments has, to the best of its endeavor, ensured that such information is accurate, complete and up-to-date, and has taken care in accurately reproducing the information, Shikhara Investments takes no responsibility for the accidental publication of incorrect information, nor for investment decisions taken based on this website. Neither Shikhara Investments nor any of its affiliates makes any representation or warranty, express or implied, as to the accuracy or completeness of the information contained herein, and nothing contained herein should be relied upon as a promise or representation as to past or future performance of any investment product or any other entity. </p>
                    <p> The contents of this website are prepared and maintained by Shikhara Investments and has not been reviewed by the Securities and Exchange Commission of the United States and the Securities and Futures Commission of Hong Kong. </p>
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

                <div class="col-md-3">
                    <div class="ftrSocial">
                        <ul>
                            <li><a target="_blank" rel="noopener" href="https://www.linkedin.com/company/shikhara-investments/"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <!--
                     <div class="ftr_contact_box">
                         <div class="ftr_txt">
                             <div class="ftr_heading"> Contact Info </div>
                             <span>Address:</span> Level 6, Corporate Edge, Two Horizon Centre, Golf Course Road, Gurgaon, India, 122011
                         </div>
                         <div class="ftr_txt"><span>Phone:</span> <a href="tel:+91-8882137261">+91-8882137261</a></div>
                         <div class="ftr_txt"><span>Email:</span> <a href="mailto:support@oisterglobal.com">support@oisterglobal.com</a></div>
                     </div>
-->
                </div>

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
                        <div class="main_heading">
                            <h2 class="h2"> Subscribe to our <em>newsletter</em> </h2>
                        </div> 
                        <div class="news_popForm">
                            <?php echo do_shortcode('[wpforms id="471" title="false"]'); ?>
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
