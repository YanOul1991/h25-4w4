<?php $footer_auteur = get_theme_mod('footer_auteur'); ?>
<?php $footer_adresse = get_theme_mod('footer_adresse'); ?>
<?php $footer_phone = get_theme_mod('footer_phone'); ?>

<footer>
    <div class="piedpage global">
        <!-- Section1 -->
        <section class="piedpage__s1">
            <div class="piedpage__s1__externe">
                <?php wp_nav_menu(array(
                    "menu" => "liens",
                    "container" => "nav"
                )); ?>
            </div>
            <?php wp_nav_menu(array(
                'menu' => 'principal',
                'container' => 'nav',
                'container_class' => 'entete__menu'
            )); ?>
            <!-- Coordonnes -->
            <div class="piedpage__coordonnes">
                <div class="piedpage__s1__adresse_auteur"><?= $footer_auteur; ?></div>
                <div class="piedpage__s1__telephone"><?= $footer_phone ?></div>
                <div class="piedpage__s1__mail"><?php bloginfo('admin_email'); ?></div>
                <div class="piedpage__s1__description"><?php bloginfo('description'); ?></div>
            </div>

            <?php get_template_part('gabarits/icones') ?>
        </section>
        <!-- --- -->

        <!-- Section 2 -->
        <section class="piedpage__s2"></section>
        <!-- --- -->

        <!-- Section 3 -->
        <section class="piedpage__s3"></section>
        <!-- --- -->
    </div>
    </div>
</footer>
<?php get_footer(); ?>
<?php wp_footer(); ?>