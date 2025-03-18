<article class="carte">
    <h4 class="carte__titre"><?php the_title();?></h4>  

    <div class="carte__image">
        <?php if(has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('large');?>
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
    <div class="carte__infos">
        <?php the_category()?> 
        <p class="carte__infos__description"><?php echo wp_trim_words(get_the_content(), 15, "...");?><a class="carte__infos__voirplus" href="<?php the_permalink();?>">Voir plus</a></p>
        <div class="carte__infos__temp">
            <p>Température maximum : <?php echo get_field('temperature_maximum') ? get_field('temperature_maximum') : rand(10, 30); ?> °C</p>
            <p>Température minimum : <?php echo get_field('temperature_minimum') ? get_field('temperature_minimum') : rand(10, 30); ?> °C</p>
            <p>Température moyenne : <?php echo get_field('temperature_moyenne') ? get_field('temperature_moyenne') : rand(10, 30); ?> °C</p>
        </div>
    </div>

</article>