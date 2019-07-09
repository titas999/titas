<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1, maximum-scale=1, user-scalable=0">
    <?php wp_head(); ?>
</head>

<body id="menu" class="body-page">
<!--[if lt IE 8]>
<p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<header class="page-header navbar page-header-alpha scrolled-white menu-right topmenu-right">
    <button class="navbar-toggler site-menu-icon" id="navMenuIcon">
            <span class="menu-icon menu-icon-random">
                <span class="bars">
                    <span class="bar1"></span>
                    <span class="bar2"></span>
                    <span class="bar3"></span>
                </span>
            </span>
    </button>
    <a class="navbar-brand" href="#home">
            <span class="logo">
                <?php if (function_exists('the_custom_logo')){
                    the_custom_logo();
                } ?>
            </span>
    </a>
    <div class="all-menu-wrapper" id="navbarMenu">
        <nav class="navbar-mainmenu">
            <ul class="navbar-nav mr-auto mr-auto-my">
                <li class="nav-item active">
                    <a class="nav-link" href="index.html#home">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="item.html">Item</a>
                </li>
            </ul>
        </nav>
        <nav class="navbar-sidebar ">
            <ul class="social">
                <li>
                    <a href="https://www.facebook.com/titas999">
                        <i class="icon fa fa-facebook"></i>
                    </a>
                </li>
                <li>
                    <a href="https://twitter.com/titas999">
                        <i class="icon fa fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a href="https://www.instagram.com/anisuzzaman_titas/">
                        <i class="icon fa fa-instagram"></i>
                    </a>
                </li>
            </ul>
        </nav>
    </div>
</header>