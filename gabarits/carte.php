<article class="carte">
    <h4 class="carte__titre"><?php the_title();?></h4>  

    <div class="carte__image">
        <?php if(has_post_thumbnail()) : ?>
            <?php the_post_thumbnail('large');?>
        <?php else : ?>
            <?php
            $imgRandom = [];

            for ($i=0; $i < get_theme_mod("img_rand_count"); $i++) { 
                $url = get_theme_mod("img_rand_$i");
                if (empty($url)) {
                    break;
                }
                $imgRandom[] = $url;
            }
            $img = $imgRandom[array_rand($imgRandom)];
            ?>
            <img src="<?php echo esc_url($img)?>" alt="Image générique">
        <?php endif;?> 
    </div>
    <div class="carte__infos">
        <?php category_filtre("populaire")?>
        <p class="carte__infos__description"><?php echo wp_trim_words(get_the_content(), 15, "...");?><a class="carte__infos__voirplus" href="<?php the_permalink();?>">Voir plus</a></p>
        <div class="carte__infos__temp">
            <p>Température maximum : <?php echo get_field('temperature_maximum') ? get_field('temperature_maximum') : rand(10, 30); ?> °C</p>
            <p>Température minimum : <?php echo get_field('temperature_minimum') ? get_field('temperature_minimum') : rand(10, 30); ?> °C</p>
            <p>Température moyenne : <?php echo get_field('temperature_moyenne') ? get_field('temperature_moyenne') : rand(10, 30); ?> °C</p>
        </div>
    </div>
</article>