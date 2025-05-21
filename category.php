<?php get_header(); ?>
<main class="category global">
    <h1 class="category__titre"><?php single_cat_title(); ?></h1>
    <p class="category__description"><?php echo strip_tags(category_description());?></p>
    <div class="populaire__carte">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <?php get_template_part('gabarits/carte'); 
                    // echo get_query_var('cat');
                    // print_r(get_the_category());
                ?>
        <?php endwhile;
        endif; ?>
    </div>
</main>
<?php
wp_footer();
get_footer();
?>
</body>
</html>