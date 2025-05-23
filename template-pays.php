<?php
/*
Template Name: Pays
*/
get_header();
?>
<section class="pays">
    <div class="global">
        <h2 class="pays__titre"><?php the_title(); ?></h2>
        <div class="pays__intro"><?php the_content(); ?></div>
        <?php genere_vague("#6cefa0") ?>
        <section class="pays__main">
        <?php genererListePays(array("France", "États-Unis", "Canada", "Argentine", "Chili", "Belgique", "Maroc", "Mexique", "Japon", "Italie", "Islande", "Chine", "Grèce", "Suisse"))?>
        </section>
    </div>
</section>
<?php get_footer(); ?>