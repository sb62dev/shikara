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

<div class="coming_soon_wrapper">
    <div class="website_logo">
        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/coming_soon_logo.svg" alt="Logo" />
    </div>
    <div class="coming_soon_content" data-aos="fade-up"> 
        <h1>Coming soon</h1> 
        <p>CONTACT: <a href="mailto: investorrelations@shikhara.com">investorrelations@shikhara.com</a></p>
    </div>
</div>

<?php
get_footer();
