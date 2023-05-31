<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <link href="wp-content\themes\planty\style.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="wrapper" class="hfeed">
        <header id="header" role="banner">
            <div class="header">
                <img src="wp-content\themes\planty\assets\Logo.png" class="logo-planty">
                <nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
                    <?php wp_nav_menu(array(
                        'theme_location' => 'main-menu',
                        'container' => false,
                        'menu_class' => 'navbar',
                        'link_before' => '<span itemprop="name">',
                        'link_after' => '</span>'
                    )); ?>
                </nav>
            </div>
        </header>
        <div id="container">
            <main id="content" role="main">