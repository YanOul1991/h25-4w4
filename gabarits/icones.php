<?php 
    $hero_icon_couleur = get_theme_mod('hero_color', '');
    $couleur = str_replace("#", "", $hero_icon_couleur);
?> 

<div class="hero__icone">
    <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=<?php echo is_404() ? "00000" : $couleur; ?>" width="40" height="40">
    <img src="https://s2.svgbox.net/social.svg?ic=linkedin&color=<?php echo is_404() ? "00000" : $couleur; ?>" width="40" height="40">
    <img src="https://s2.svgbox.net/social.svg?ic=wordpress&color=<?php echo is_404() ? "00000" : $couleur; ?>" width="40" height="40">
</div>