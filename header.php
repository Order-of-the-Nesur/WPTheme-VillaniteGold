<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Welcome - Villanite</title>
    <link rel="preload" href="https://fonts.googleapis.com/css?family=Lora|Roboto&display=swap" as="style">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora|Roboto&display=swap">
    <?php wp_head(); ?>
</head>

<body>
    <header id="SiteHeader">
        <div id="MainNav">
            <a id="Logo" href="/">Villanite</a>
            <div id="MenuOpener" onclick="toggleMenu(this)">
                <div class="bar1"></div>
                <div class="bar2"></div>
                <div class="bar3"></div>
            </div>            
            <nav id="SiteNav" role="navigation">
            <?php wp_nav_menu(array('theme_location' => 'header-menu')); ?>               
            </nav>
        </div>
    </header>