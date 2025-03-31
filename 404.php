<?php get_header(); ?>
<main class="notfound global" style="background-image: url(<?php echo get_theme_mod("notfound_image", ""); ?>);">
    <div class="notfound__infos">
        <h1 class="notfound__infos__titre" style="color: <?php echo get_theme_mod("notfound_color", "") ?>;"><?php echo get_theme_mod("notfound_titre", ""); ?></h1>
        <h1 class="notfound__infos__description" style="color: <?php echo get_theme_mod("notfound_color", "") ?>;"><?php echo get_theme_mod("notfound_description", ""); ?></h1>
    </div>
    <div class="notfound__retour">
        <a href="index.php">Retour à l'accueil</a>
    </div>
    <div class="notfound__options">
        <?php wp_nav_menu(array(
            'menu' => 'notfound',
            'container' => 'nav',
            'container_class' => 'notfound__menu'
        )); ?>
    </div>
</main>
<?php get_footer(); ?>
<?php wp_footer(); ?>