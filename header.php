<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>

    <!-- aggancio al css -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>


    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <nav>
            <img src="<?php echo get_template_directory_uri(); ?>../assets/logo.jpg" alt="Logo" class="logo">
            <?php wp_nav_menu(array('theme_location' => 'primary')); ?>

            <!-- Search -->
            <form role="search" method="get" id="searchform"
                class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <div>
                    <label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
                    <input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" />
                    <input type="submit" id="searchsubmit"
                        value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>" />
                </div>
            </form>
            <!-- Search end -->
        </nav>
    </header>

