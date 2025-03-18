<?php 
    $hero_icon_couleur = get_theme_mod('hero_color', '');
?> 


<div class="hero__icone">
    <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=<?php echo str_replace("#", "", $hero_icon_couleur); ?>" width="40" height="40">
    <img src="https://s2.svgbox.net/social.svg?ic=linkedin&color=<?php echo str_replace("#", "", $hero_icon_couleur); ?>" width="40" height="40">
    <img src="https://s2.svgbox.net/social.svg?ic=wordpress&color=<?php echo str_replace("#", "", $hero_icon_couleur); ?>" width="40" height="40">
</div>