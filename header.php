<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>

    <!-- aggancio al css -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri();?>/style.css">


    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<nav>
    <img src="<?php echo get_template_directory_uri(); ?>../assets/logo.jpg" alt="Logo" class="logo">
    <?php wp_nav_menu(array('theme_location' => 'primary')); ?>
</nav>
