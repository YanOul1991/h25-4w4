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
        <section class="pays__main" style="display: flex; flex-flow: row wrap;">
            <?php genererListePays(array("France", "États-Unis", "Canada", "Argentine", "Chili", "Belgique", "Maroc", "Mexique", "Japon", "Italie", "Islande", "Chine", "Grèce", "Suisse")) ?>
            <div class="destination__titre"></div>
            <div class="pays__liste"></div>
        </section>
    </div>
</section>
<?php get_footer(); ?>