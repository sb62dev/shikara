<?php
/**
 * The header for our theme 
 */

 
$protected_pages = array(141, 386, 8, 201, 242, 279, 320, 340); 

if (in_array(get_the_ID(), $protected_pages)) {
    password_protect_page(get_the_ID(), 'shikhara2024'); 
}  

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="iK5X7oc4EP7cKw7s4jhSc081cqBJWSibFdFptJH7LCk" />
    <link rel="profile" href="http://gmpg.org/xfn/11">

    <?php wp_head(); ?>

    <link rel="shortcut icon" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/favicon.icon" />
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/slick.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/slick-theme.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+4:ital,opsz,wght@0,8..60,200..900;1,8..60,200..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/fonts.css?v1">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/animate.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/aos.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/css/particle-style.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ).'/assets/css/custom.css?v='.time(); ?>">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ).'/assets/css/responsive.css?v='.time(); ?>">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/js/jquery.min.js"></script>


</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>


    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-61MGT5YG29"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-61MGT5YG29');

    </script>

    <?php
        // Check if password is required and display form if needed
        if (post_password_required()) {
            echo '<div class="passwordForm padd-row text-center">'; // Example inline style for layout
            echo get_the_password_form();
            echo '</div>';
            exit;
        }
    ?>


    <header class="header sticky-header">
        <div class="container">
            <div class="header_main count_lftpadd">
                <div class="d-flex">
                    <div class="logo">
                        <a href="<?php echo get_home_url(); ?>">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.svg" alt="logo" width="165" class="black_logo">
                            <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo_white.svg" alt="logo" width="165" class="white_logo d-none">
                        </a>
                    </div>
                    <div class="main-navigation">
                        <nav class="navbar navbar-expand-lg">
                            <a class="navbar-brand" href="#"> </a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                                <span class="navbar-toggler-icon-new"></span>
                                <span class="navbar-toggler-icon-new"></span>
                                <span class="navbar-toggler-icon-new"></span>
                            </button>
                            <!-- Navbar links -->
                            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                                <div class="main_nav_top">
                                    <?php  
                                        wp_nav_menu(
                                            array(
                                                'theme_location' => 'top',
                                                'menu_class'     => 'website_nav'
                                            )
                                        );
                                    ?>
                                </div>
                                <div class="fixdNav">
                                    <div class="fixdNav-head">
                                        <div class="d-flex">
                                            <div class="logo">
                                                <a href="<?php echo get_home_url(); ?>"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/logo.svg" alt="logo" width="240"> </a>
                                            </div>
                                            <div class="closeBtn">
                                                <a href="javascript:void(0);" data-target="#collapsibleNavbar" aria-expanded="true" data-toggle="collapse"> <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/assets/images/closeMenu.svg" alt="close" width="35" height="35"> </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="fixdNav-mid">
                                        <?php  
                                            wp_nav_menu(
                                                array(
                                                    'theme_location' => 'top',
                                                    'menu_class'     => 'website_nav'
                                                )
                                            );
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--- end of header -->
