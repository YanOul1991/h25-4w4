<?php get_header();?>   
    <!--  -->
    <!--  -->
    <!-- <h1> ---------------------------- FRONT-PAGE.PHP ---------------------------- </h1> -->
    <?php get_template_part('gabarits/hero');?> 
    <!-- Section populaire -->
    <section class="populaire">
        <div class="global">
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
        </div>
    </section>
    <?php get_footer();?> 
</body>
</html>