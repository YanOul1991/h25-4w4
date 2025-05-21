<?php
$info_auteur = get_theme_mod('infos_auteur', 'Default title');
$info_email = get_theme_mod('infos_email', '');
$info_adresse = get_theme_mod('infos_adresse', '');
$info_phone = get_theme_mod('infos_phone', '');
?>

<?php 
genere_vague();
?>
<footer>
    <section class="piedpage" style="background-image: url(<?php echo get_theme_mod('footer_img', '') ?>); background-size: cover;">
        <div class="piedpage__liens">
            <?php wp_nav_menu(array(
                'menu' => 'liens',
                'container' => 'nav',
                'container_class' => 'piedpage__liens__externe'
            )); ?>
            <?php wp_nav_menu(array(
                'menu' => 'principal',
                'container' => 'nav',
                'container_class' => 'piedpage__liens__categories'
            )); ?>
        </div>
        <div class="piedpage__infos">
            <?php get_search_form();?>
            <div class="piedpage__coordonnes">
                <div class="piedpage__coordonnes__auteur">Auetur : <?php echo $info_auteur ?></div>
                <div class="piedpage__coordonnes__telephone">Téléphone  <?php echo $info_phone ?></div>
                <div class="piedpage__coordonnes__mail">Email :  <?php echo $info_email ?></div>
                <div class="piedpage__coordonnes__description"><?php bloginfo('description'); ?></div>
            </div>
            <?php get_template_part('gabarits/icones') ?>
        </div>
    </section>
</footer>
<?php get_footer(); ?>
<?php wp_footer(); ?>