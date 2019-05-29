<?php
/**
 * The template for displaying the header
 *
 * This is the template that displays all of the <head> section
 *
 */
?>

<!doctype html>

    <html class="no-js"  <?php language_attributes(); ?>>

        <head>
            <meta charset="utf-8">

            <!-- Force IE to use the latest rendering engine available -->
            <meta http-equiv="X-UA-Compatible" content="IE=edge">

            <!-- Mobile Meta -->
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta class="foundation-mq">

            <!-- If Site Icon isn't set in customizer -->
            <?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
                <!-- Icons & Favicons -->
                <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
                <link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />
            <?php } ?>

            <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
            <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville|Libre+Franklin&display=swap" rel="stylesheet">

            <?php wp_head(); ?>

        </head>

        <body <?php body_class(); ?>>
            <header class="header" role="banner">
                <h1 class="show-for-sr"><?php bloginfo('title'); ?></h1>
                <div class="grid-container full">
                    <div class="grid-x">
                        <div class="cell">
                            <h1 class="show-for-sr"><?php bloginfo('title'); ?></h1>
                            <!-- Load Top Bar with logo and navigation -->
                            <div class="mainnav-container" data-sticky-container >
                                <div class="main-nav sticky" data-sticky data-margin-top="0" >
                                    <div class="grid-container">
                                        <?php get_template_part( 'parts/nav', 'offcanvas-topbar' ); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <div class="off-canvas-wrapper">

                <!-- Load off-canvas container for mobile nav -->
                <?php get_template_part( 'parts/content', 'offcanvas' ); ?>