<!DOCTYPE html>
<html lang="vi" <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon-ngang.jpg" type="image/x-icon" />
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon-ngang.jpg" type="image/x-icon" />

    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon-ngang.jpg">
    <?php wp_head(); ?>
</head>

<body <?php body_class('is-preload'); ?>>

    <div id="page-wrapper">

        <header id="header" class="alt">
            <h1><a href="<?php echo home_url(); ?>">TsLab Shoes Spa</a></h1>
            <nav>
                <a href="#menu">Menu</a>
            </nav>
        </header>