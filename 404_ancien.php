<?php get_header(); ?>
<main class="notfound global">
    <!-- ------------- -->
    <div class="notfound__infos">
        <h1 class="notfound__infos__titre"><?php echo get_theme_mod("notfound_titre", ""); ?></h1>
        <h1 class="notfound__infos__description"><?php echo get_theme_mod("notfound_description", ""); ?></h1>
    </div>
    <!-- ------------- -->
    <div class="notfound__image">
        <img src="<?php echo get_theme_mod("notfound_image", ""); ?>" alt="Image 404 not found">
    </div>
    <!-- ------------- -->
    <div class="notfound__options">
        <?php wp_nav_menu(array(
            'menu' => 'notfound',
            'container' => 'nav',
            'container_class' => 'notfound__menu'
        )); ?>
    </div>
    <div class="notfound__icons">
        <?php get_template_part("gabarits/icones");?> 
    </div>
    <div class="notfound__search">
        <?php get_search_form(); ?>
    </div>
</main>
<?php get_footer(); ?>
<?php wp_footer(); ?>