<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mondo voyages</title>
    <?php wp_head(); ?>
</head>

<body>
    <!-- HEADER -->
    <header>
        <div class="entete">
            <figure class="entete__logo">
                <?php if(function_exists("the_custom_logo")) the_custom_logo();?>
            </figure>
            <input type="checkbox" name="ouvremenu" id="ouvremenu" class="entete__input">
            <label for="ouvremenu" class="entete__label">
                <img src="https://s2.svgbox.net/hero-solid.svg?ic=menu&color=ffffff" width="40" height="40">
            </label>
            <div class="entete__navigation">
                <?php wp_nav_menu(array(
                    'menu' => 'principal',
                    'container' => 'nav',
                    'container_class' => 'entete__menu'
                )); ?>
            </div>
            <?php get_search_form() ?>
        </div>
    </header>
    <!-- Monserrat -->
