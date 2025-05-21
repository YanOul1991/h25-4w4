<?php 
    $hero_icon_couleur = get_theme_mod('hero_color', '');
    $couleur = str_replace("#", "", get_theme_mod('hero_color', ''));
?> 

<div class="hero__icone">
    <?php for($i = 0; $i < get_theme_mod("icons_count"); $i++) : ?>
        <a href=<?php echo get_theme_mod("icon_url_".$i)?>>
            <img src="<?php echo (string)get_theme_mod("icon_svg_url_".$i)?>&color=<?php echo is_404() ? "00000" : str_replace("#", "", get_theme_mod('hero_color', '')); ?>" width="40" height="40">
        </a>
    <?php endfor; ?>
</div>