<?php
/**
 * FilmMaker Theme Header
 *
 * @package     TMXFilmMaker
 * @author      Md. Hasan Shahriar <info@themeaxe.com>
 * @since       1.0.1
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Md. Hasan Shahriar, hsleonis2@gmail.com">


    <!-- Stylesheets -->
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<!-- Navigation -->
<nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
    <div class="container topnav">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- <a class="navbar-brand topnav mtp_navbar" href="<?php bloginfo( 'url' ); ?>">
                <img class="logo" src="<?php header_image(); ?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="<?php echo bloginfo('title'); ?>" />
            </a>-->
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <?php wp_nav_menu( array(
                'theme_location' => 'main-menu',
                'menu_class' => 'nav navbar-nav navbar-right'
            )); ?>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>