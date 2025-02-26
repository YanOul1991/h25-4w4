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
                    <div><?php the_content(); ?></div>
                </article>
            <?php endwhile; endif; ?>
        </div>
    </section>
    <?php wp_footer();?> 
</body>
</html>