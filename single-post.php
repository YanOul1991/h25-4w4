<?php get_header();?>   
<h1> ---------------------------- Single-post ---------------------------- </h1>
    <section class="populaire">
        <div class="global">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article>
                    <?php 
                        if (has_post_thumbnail()) {
                            the_post_thumbnail('large'); 
                        }
                    ?> 
                    <h2><?php the_title(); ?></h2>
                    <h3><?php the_category();?></h3>
                    <div><?php the_content(); ?></div>
                    <p>Température maximum  <?php the_field('temperature_maximum'); ?> °C</p>
                    <p>Température minimum  <?php the_field('temperature_minimum'); ?> °C</p>
                    <p>Température moyenne  <?php the_field('temperature_moyenne'); ?> °C</p>
                </article>
            <?php endwhile; endif; ?>
        </div>
    </section>
    <?php wp_footer();?> 
</body>
</html>