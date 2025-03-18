<?php
/**
 * Modèle pour les résultats de recherche
 */
get_header();
?>
<main class="search global">
    <?php if(have_posts()) : while(have_posts()) : the_post() ?>
    <section class="search__item">
        <a class="search__title" href=" <?php the_permalink(); ?>"><?php the_title(); ?></a>
        <div class="search__infos">
            <div class="search__infos__image">
            <?php if(has_post_thumbnail()) : ?>
                <?php the_post_thumbnail('thumbnail');?>
            <?php else : ?>
                <?php
                # Applique une image aléatoire si le poste n'a pas de thumbnail
                $genericImg = [
                    'http://localhost:81/4w4/wp-content/uploads/2025/03/img-fav-005.jpg',  
                    'http://localhost:81/4w4/wp-content/uploads/2025/03/img-fav-009.jpg',
                    'http://localhost:81/4w4/wp-content/uploads/2025/03/img-fav-010.jpg'
                ];
                $imgRandom = $genericImg[array_rand($genericImg)];
                ?>
                <img src="<?php echo esc_url($imgRandom)?>" alt="Image générique">
            <?php endif;?>
            </div>
            <p class="search__description"> <?php echo wp_trim_words(get_the_excerpt(), 60); ?></p>
        </div>
    </section>
    <?php endwhile;?>

    <?php else : ?>
    <h1 class="search__noresults">Aucun résultat trouvé.</h1>
    <?php endif; ?>
</main>
<?php get_footer(); ?>