<?php
/*
Template Name: Événement
*/
get_header();
?>
<section class="populaire">
    <div class="global">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article>
                    <h2><?php the_title(); ?></h2>
                    <div><?php the_content(); ?></div>
                </article>
                <p>Date de l'événement :
                    <?php the_field('date_evenement'); ?></p>
                <p>Lieu : <?php the_field('lieu_evenement'); ?></p>
                <div>
                    <?php the_field('description_evenement'); ?>
                </div>
        <?php endwhile;
        endif; ?>
        <section class="destination">
            <?php categories_liste("destination"); ?>
            <h2 class="destination__titre">Articles de la catégorie</h2>
            <div class="destination__list"></div>
        </section>
    </div>
</section>
<?php get_footer(); ?>