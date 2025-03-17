<article class="carte">
    <div class="carte__image">
        <?php 
        if (has_post_thumbnail()) {
            the_post_thumbnail('thumbnail'); 
        }
        ?> 
    </div>

    <h4 class="carte__titre"><?php the_title();?></h4>  
    <p class="carte__description"><?php echo wp_trim_words(get_the_content(), 10, "...");?><a class="carte__bouton carte__bouton--actif" href="<?php the_permalink();?> "> Suite ...</a></p>
    
    <?php the_category()?> 

    <div class="carte_température">
        <p>Température maximum : <?php echo rand(20, 40); # the_field('temperature_maximum'); ?> °C</p>
        <p>Température minimum : <?php echo rand(20, 40); # the_field('temperature_minimum'); ?> °C</p>
        <p>Température maximum : <?php echo rand(20, 40); # the_field('temperature_maximum'); ?> °C</p>
    </div>
</article>