<?php get_header(); ?>
<main class="notfound"
    style="height: max-content; display: flex; flex-flow: column nowrap; justify-content: space-between" ;>
    <!-- ------------- -->
    <div class="notfound__infos">
        <h1 class="notfound__titre"><?php echo get_theme_mod("notfound_titre", ""); ?></h1>
        <h1 class="notfound__infos__description"><?php echo get_theme_mod("notfound_description", ""); ?></h1>
    </div>
    <!-- ------------- -->
    <div class="notfound__image">
        <img src="<?php echo get_theme_mod("notfound_image", ""); ?>" alt="Image 404 not found"
            style="width: 20vw;">
    </div>
    <!-- ------------- -->
    <div class="notfound__options">
        <?php wp_nav_menu(array(
            'menu' => 'notfound',
            'container' => 'nav',
            'container_class' => 'notfound__menu'
        )); ?>
    </div>
    <div class="notfound__search">
        <?php get_search_form(); ?>
    </div>
    <?php get_footer(); ?>
    <?php wp_footer(); ?>
</main>