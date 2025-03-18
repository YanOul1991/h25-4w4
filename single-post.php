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
                    <p>Température maximum : <?php echo get_field('temperature_maximum') ? get_field('temperature_maximum') : rand(10, 30); ?> °C</p>
                    <p>Température minimum : <?php echo get_field('temperature_minimum') ? get_field('temperature_minimum') : rand(10, 30); ?> °C</p>
                    <p>Température moyenne : <?php echo get_field('temperature_moyenne') ? get_field('temperature_moyenne') : rand(10, 30); ?> °C</p>
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