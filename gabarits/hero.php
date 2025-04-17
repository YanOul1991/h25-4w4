    <?php
    $info_auteur = get_theme_mod('infos_auteur', 'Default title');
    $info_email = get_theme_mod('infos_email', '');
    $info_adresse = get_theme_mod('infos_adresse', '');
    $info_phone = get_theme_mod('infos_phone', '');

    $hero_background = get_theme_mod('hero_background', '');
    $hero_couleur_texte = get_theme_mod('hero_color_txt', '');
    ?>

    <section class="hero global" style="color: <?= $hero_couleur_texte ?>;">
        <?php $nbImgCar = (int)get_theme_mod("img_caroussel_count");?>

        <?php for ($i = 0; $i < $nbImgCar; $i++) : ?>
            <div class="hero__caroussel <?php echo $i == 0 ? "displayed" : "" ?>" style="background-image: url(<?php echo get_theme_mod("img_carousel$i") ?>)"></div>
        <?php endfor; ?>
        <div class="hero__radio">
            <?php for ($i = 0; $i < $nbImgCar; $i++) : ?>
                <input class="hero__radio__input" data-id_radio="<?php echo $i ?>" type="radio" name="caroussel" id="" <?php echo $i == 0 ? "checked" : "" ?>>
            <?php endfor; ?>
        </div>

        <div class="hero__contenu">
            <h1 class="hero__titre"><?php bloginfo('name'); ?></h1>
            <p class="hero__description"><?php bloginfo('description'); ?></p>
            <p class="hero__auteur">Auteur : <?= $info_auteur ?></p>
            <p class="hero__courriel">Email : <?= $info_email ?></p>
            <p class="hero__adresse">Adresse : <?= $info_adresse ?> </p>
            <p class="hero__telephone">Tél : <?= $info_phone ?> </p>
            <!-- <div class="hero__inscription"><a href="#">S'inscrire</a></div> -->
            <?php get_template_part('gabarits/icones'); ?>
        </div>
        <form class="hero__formulaire">
            <h2 class="hero__formulaire__titre">Formulaire d'inscription</h2>
            <ul class="formulaire">
                <li class="formulaire__li">
                    <label for="formulaire-nom">Nom</label>
                    <input type="text" name="nom" id="formulaire-nom" placeholder="Nom">
                </li>
                <li class="formulaire__li">
                    <label for="formulaire-prenom">Prénom</label>
                    <input type="text" name="prenom" id="formulaire-prenom" placeholder="Prénom">
                </li>
                <li class="formulaire__li">
                    <label for="formulaire-courriel">Courriel</label>
                    <input type="text" name="courriel" id="formulaire-courriel" placeholder="Courriel">
                </li>
                <li class="formulaire__li">
                    <label for="formulaire-telephone">Téléphone</label>
                    <input type="text" name="telephone" id="formulaire-telephone" placeholder="Téléphone">
                </li>
                <li class="formulaire__li">
                    <input type="submit" value="S'inscrire">
                </li>
            </ul>
        </form>
    </section>