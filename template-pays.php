<?php
/*
Template Name: Pays
*/
get_header();
?>
<section class="pays global">
    <h2 class="pays__titre" style="font-size: 4rem; font-weight:bolder;"><?php the_title(); ?></h2>
    <?php the_content(); ?>
    <?php genere_vague("#6cefa0") ?>
    <section class="pays__main">
        <?php genererListePays(array("France", "États-Unis", "Canada", "Argentine", "Chili", "Belgique", "Maroc", "Mexique", "Japon", "Italie", "Islande", "Chine", "Grèce", "Suisse")) ?>
        <div class="pays__main__titre"></div>
        <div class="pays__liste"></div>
    </section>
</section>
<?php get_footer(); ?>