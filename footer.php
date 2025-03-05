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
            <div class="piedpage__s1__adresse">
                <div class="piedpage__s1__adresse__recherche">
                    <?php get_search_form(); ?>
                </div>
            </div>
            <?php wp_nav_menu(array(
                'menu' => 'principal',
                'container' => 'nav',
                'container_class' => 'entete__menu'
            ));?> 
            <!-- Coordonnes -->
            <div class="piedpage__s1__adresse__coord">
                <?php bloginfo('name'); ?>
            </div>
            <div class="piedpage__s1__description">
                <?php bloginfo('description'); ?>
            </div>
            <div class="piedpage__s1__telephone">
                514 234-5678
            </div>
            <div class="piedpage__s1__mail">
                <?php bloginfo('admin_email');?> 
            </div>
            <div class="hero__icone">
                <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=000000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=linkedin&color=000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=wordpress&color=000" width="20" height="20">
            </div>
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