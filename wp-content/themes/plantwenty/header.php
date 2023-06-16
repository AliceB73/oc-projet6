<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <link href="wp-content\themes\plantwenty\style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="wrapper" class="hfeed">
        <header id="header" role="banner">
            <div class="header">
                <a href="<?php echo site_url() ?>">
                    <img src="http://localhost/planty/wp-content/uploads/2023/05/Logo.png" class="logo-planty">
                </a>
                <label class="nav-menu-responsive">☰</label>
                <nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
                    <?php wp_nav_menu(array(
                        'theme_location' => 'header',
                        'container' => false,
                        'menu_class' => 'navigation',
                        'link_before' => '<span itemprop="name">',
                        'link_after' => '</span>'
                    )); ?>
                </nav>
            </div>
        </header>
        <div id="container">
            <main id="content" role="main">