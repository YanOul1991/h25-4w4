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
        <h2 class="carte__titre"></h2> <?php the_title();?> 
        <p class="carte__description"></p><?php echo wp_trim_words(get_the_content(), 10, "...");?> 
        <button class="carte__bouton carte__bouton--actif">Suite</button>
    </div>
</article>