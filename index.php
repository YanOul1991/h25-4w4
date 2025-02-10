<?php get_header();?>   
<h1> ---------------------------- INDEX.PHP ---------------------------- </h1>
    <section class="populaire">
        <div class="global">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <article>
                    <h2><?php the_title(); ?></h2>
                    <div><?php the_content(); ?></div>
                </article>
            <?php endwhile; endif; ?>
        </div>
    </section>
    <?php wp_footer();?> 
</body>
</html>