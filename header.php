<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>

    <!-- aggancio al css -->
    


    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
        <nav>
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

