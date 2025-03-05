<article class="carte carte--grande">
    <div class="carte__contenu">
        <?php 
            if (has_post_thumbnail()) {
                the_post_thumbnail('thumbnail'); 
            }
        ?> 
        <h4 class="carte__titre"><?php the_title();?></h4>  
        <p class="carte__description"></p><?php echo wp_trim_words(get_the_content(), 20, "...");?> 
        <a  class="carte__bouton carte__bouton--actif" href="<?php the_permalink();?> ">Suite ...</a>
        <?php the_category();?> 

        <p>Température maximum : <?php echo rand(20, 40); # the_field('temperature_maximum'); ?> °C</p>
        <p>Température minimum : <?php echo rand(20, 40); # the_field('temperature_minimum'); ?> °C</p>
        <p>Température maximum : <?php echo rand(20, 40); # the_field('temperature_maximum'); ?> °C</p>
        <!-- <button class="carte__bouton carte__bouton--actif">Suite</button> -->
    </div>
</article>