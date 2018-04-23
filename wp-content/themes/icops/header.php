<?php
/**
 * The theme header.
 * 
 * @package bootstrap-basic4
 */
?>
<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
    <head>
        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-117862261-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'UA-117862261-1');
        </script>

        <meta charset="<?php bloginfo('charset'); ?>">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Oswald:400" rel="stylesheet">


        <!--wordpress head-->
        <?php wp_head(); ?> 
        <!--end wordpress head-->
    </head>
    <body <?php body_class(); ?>>

<!--FACEBOOK PLUGIN SDK-->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.12';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>




<!--         <div class="container page-container"> -->

    <header class="page-header-prenav page-header-sitebrand-topbar sticky-top">

        <div class="container">
            <div class="row site-branding">
                <div class="site-branding-left">
                    <a href="tel://1-800-832-7501" target="_self" class="header-link"><i class="fas fa-phone"></i>1 (800) 832-7501</a>
                  
                </div>

                <div class="ml-auto site-branding-right">
                    <div class="sr-only">
                       <a href="#content" title="<?php esc_attr_e('Skip to content', 'bootstrap-basic4'); ?>"><?php _e('Skip to content', 'bootstrap-basic4'); ?></a>
                    </div>



                    <ul class="social-icons-header">
                        <li style="padding-right:0px;">
                            <div class="fb-like" data-href="https://www.facebook.com/Illinois-Council-of-Police-2021312304577706/" data-layout="button" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
                        </li>

                        <li><a href="https://www.facebook.com/Illinois-Council-of-Police-2021312304577706/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>

                        <li><a href="https://twitter.com/theICOPs?lang=en" target="_blank"><i class="fab fa-twitter"></i></a></li>

                        <li><a href="https://www.linkedin.com/company/illinois-council-of-police/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>

                        <li><a href="https://plus.google.com/u/1/+ICOPSorg" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
<!--                         <li><a href="#"><i class="fas fa-envelope"></i></a></li> -->
                    </ul>
                </div>
            </div><!--.container-->
        </div><!--.site-branding-->



        <nav class="navbar navbar-expand-md navbar-dark">
            <div class="container">

                <a class="navbar-brand" href="/"><img src="<?php echo get_stylesheet_directory_uri()?>/assets/img/ICOPS-logo.svg"></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php 
                    wp_nav_menu(
                        array(
                            'depth' => '2',
                            'theme_location' => 'primary', 
                            'container' => false, 
                            'menu_class' => 'navbar-nav ml-auto', 
                            'walker' => new \BootstrapBasic4\BootstrapBasic4WalkerNavMenu()
                        )
                    ); 
                    ?> 
                </div>

                <a class="btn btn-bd-donate btn-outline btn-sm d-none d-lg-inline-block mb-3 mb-md-0 ml-md-3" href="/donate">Donate</a>
            </div><!--.container-->
        </nav>

</header><!--.page-header-->


<?php if ( !is_front_page()  ) {
    $containerClass = '<div class="container">';
    $rowClass = 'row row-with-vspace';
} 
?>
    <?php echo $containerClass ?>
    <div id="content" class="<?php echo $rowClass ?> site-content">

