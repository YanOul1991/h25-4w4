<?php get_header(); ?>
<main class="singlepost global">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <section class="singlepost__main">
                <h1 class="singlepost__main__titre"><?php the_title(); ?></h1>
                <?php if (has_post_thumbnail()) : ?>
                    <div class="singlepost__main__image">
                        <?php the_post_thumbnail('medium'); ?>
                    </div>
                <?php endif; ?>
            </section>
            <section class="singlepost__infos">
                <?php the_category(); ?>
                <p class="singlepost__infos__description"><?php echo strip_tags(get_the_content()); ?></p>
                <div class="singlepost__infos__temperatures">
                    <p>Température maximum : <?php the_field('temperature_maximum');?> °C</p>
                    <p>Température minimum : <?php the_field('temperature_minimum');?> °C</p>
                    <p>Température moyenne : <?php the_field('temperature_moyenne');?> °C</p>
                </div>
            </section>
    <?php endwhile;
    endif; ?>
</main>
<?php
get_footer();
wp_footer();
?>
</body>

</html>