<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prototype page d'accueil</title>
    <!-- <link rel="stylesheet" href="normalize.css"> -->
    <!-- <link rel="stylesheet" href="style.css"> -->
    <?php wp_head();?>
</head>
<body>
    <!-- HEADER -->
    <header>
        <div class="entete">
            <figure class="entete__logo">
                <!-- <img src="images/logos-icones/logomain.svg" alt="Logo" width="150"> -->
                <?php 
                    if (function_exists('the_custom_logo')) {
                        the_custom_logo();
                    }
                ?> 
            </figure>

            <input type="checkbox" name="ouvremenu" id="ouvremenu" class="entete__input">

            <label for="ouvremenu" class="entete__label">
                <img src="https://s2.svgbox.net/hero-solid.svg?ic=menu&color=000" width="32" height="32">
            </label>

            <div class="entete__navigation">
                <?php wp_nav_menu(array(
                    'menu' => 'principal',
                    'container'            => 'nav',
                    'container_class'      => 'entete__menu'
                ));?> 
                <!-- <nav class="entete__menu">
                    <ul class="menu">
                        <li class="menu__li">
                            <a href="#">Aventure</a>
                        </li>
                        <li class="menu__li">
                            <a href="#">Culturel</a>
                        </li>
                        <li class="menu__li">
                            <a href="#">Zen</a>
                        </li>
                        <li class="menu__li">
                            <a href="#">Sportive</a>
                        </li>
                        <li class="menu__li">
                            <a href="#">Tourteraux</a>
                        </li>
                        <li class="menu__li">
                            <a href="#">Pleine nature</a>
                        </li>
                        <li class="menu__li">
                            <a href="#">Repos</a>
                        </li>
                        <li class="menu__li">
                            <a href="#">Pays</a>
                        </li>
                        <li class="menu__li">
                            <a href="#">Favorite</a>
                        </li>
                    </ul>
                </nav> -->
                <?php get_search_form();?>
                <!-- <form class="recherche">
                    <input type="search" placeholder="Rechercher" class="recherche__input" >
                    <img class="recherche__img" src="https://s2.svgbox.net/hero-outline.svg?ic=search" width="16" height="16">
                </form> -->
            </div>
        </div>
    </header>