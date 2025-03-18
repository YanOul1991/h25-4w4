<article class="carte">
    <h4 class="carte__titre"><?php the_title();?></h4>  

    <div class="carte__image">
        <?php 
        if (has_post_thumbnail()) {
            the_post_thumbnail('thumbnail'); 
        }
        ?> 
    </div>
    <div class="carte__infos">
        <?php the_category()?> 
        <p class="carte__infos__description"><?php echo wp_trim_words(get_the_content(), 15, "...");?><a class="carte__infos__voirplus" href="<?php the_permalink();?>">Voir plus</a></p>
        <div class="carte__infos__temp">
            <p>Température maximum : <?php echo rand(20, 40); # the_field('temperature_maximum'); ?> °C</p>
            <p>Température minimum : <?php echo rand(20, 40); # the_field('temperature_minimum'); ?> °C</p>
            <p>Température maximum : <?php echo rand(20, 40); # the_field('temperature_maximum'); ?> °C</p>
        </div>
    </div>

</article>