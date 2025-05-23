<?php
/*
Template Name: Événement
*/
get_header();
?>
<section class="evenement global" style="display: flex; flex-direction:column; gap: 25px;">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <h2 class="evenement__titre"><?php the_title(); ?></h2>  
            <div class="evenement__content"><?php the_content(); ?></div>
            <p class="evenement__date" style="font-size: 3rem; font-weight: bolder;">Date de l'événement : <?php the_field('date_evenement'); ?></p>
            <p class="evenement__lieu" style="font-size: 2rem; font-weight: bolder;">Lieu : <?php the_field('lieu_evenement'); ?></p>
            <div class="evenement__description" style="font-size: 2rem;"><?php the_field('description_evenement'); ?></div>
    <?php endwhile;
    endif; ?>
</section>
<?php get_footer(); ?>