<?php get_header();?>   
    <?php get_template_part('gabarits/hero');?> 
    <section class="populaire global">
        <?php if(have_posts()) : the_post() ?>
            <?php if (in_category("galerie")) : ?> 
                    <div class="populaire__galerie">
                        <?php the_content();?> 
                    </div>
            <?php endif;?> 
        <?php endif?>
        <div class="populaire__carte">
        <?php if (have_posts()) : while (have_posts()) : the_post() ?>
            <?php get_template_part('gabarits/carte');?> 
        <?php endwhile; endif; ?>
        </div>
        <!--------------------------- Section rest-api --------------------------->
        <section class="destination">
            <?php categories_liste("destination"); ?>
            <h2 class="destination__titre">Articles de la catégorie</h2>
            <div class="destination__list"></div>
        </section>
    </section>
    <?php get_footer();?> 
</body>
</html>