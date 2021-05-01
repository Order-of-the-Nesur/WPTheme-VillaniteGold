<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo('name'); wp_title(); ?></title>
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Lora|Roboto&display=swap" as="style">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora|Roboto&display=swap">
    <?php wp_head(); ?>
</head>

<body>
    <header id="SiteHeader">
        <div id="MainNav">
            <a id="Logo" href="/">Villanite</a>
            <input type="checkbox">
            <!-- <div id="MenuOpener" onclick="toggleMenu(this)"> -->
                <span class="bar1"></span>
                <span class="bar2"></span>
                <span class="bar3"></span>
            <!-- </div>             -->
            <nav id="SiteNav" role="navigation">
            <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>               
            </nav>
        </div>
    </header>