<?php
    /**
     * Template-part
     */  
?>

<article class="carte carte--grande">
    <figure class="carte__image">
        <img src="voyage.jpg" alt="Image de voyage">
    </figure>
    <div class="carte__contenu">
        <?php 
            if (has_post_thumbnail()) {
                the_post_thumbnail('thumbnail'); 
            }
        ?> 
        <h4 class="carte__titre"></h4> <?php the_title();?> 
        <p class="carte__description"></p><?php echo wp_trim_words(get_the_content(), 10, "...");?> 
        <a  class="carte__bouton carte__bouton--actif" href="<?php the_permalink();?> ">Suite ...</a>
        <?php the_category();?> 
        <!-- <button class="carte__bouton carte__bouton--actif">Suite</button> -->
    </div>
</article>