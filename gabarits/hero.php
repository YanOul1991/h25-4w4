    <?php 
    $info_auteur = get_theme_mod('infos_auteur', 'Default title'); 
    $info_email = get_theme_mod('infos_email', '');
    $info_adresse = get_theme_mod('infos_adresse', '');
    $info_phone = get_theme_mod('infos_phone', '');

    $hero_background = get_theme_mod('hero_background', ''); 
    $hero_couleur_texte = get_theme_mod('hero_color_txt', '');
    ?>

    <section class="hero global" style="background-image: url(<?php echo $hero_background ?>); color: <?= $hero_couleur_texte ?>;">
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
            <ul class="formulaire">
                <li class="formulaire__li">
                    <label for="nom">Nom</label>
                    <input type="text" name="nom" id="formulaire-nom" placeholder="Écrivez votre nom">
                </li>
                <li class="formulaire__li">
                    <label for="nom">Prénom</label>
                    <input type="text" name="prenom" id="formulaire-prenom" placeholder="Écrivez votre prénom">
                </li>
                <li class="formulaire__li">
                    <label for="nom">Courriel</label>
                    <input type="text" name="courriel" id="formulaire-courriel" placeholder="Écrivez votre courriel">
                </li>
                <li class="formulaire__li">
                    <label for="nom">Téléphone</label>
                    <input type="text" name="telephone" id="formulaire-telephone" placeholder="Écrivez votre téléphone">
                </li>
                <li class="formulaire__li">
                    <input type="submit" value="S'inscrire">
                </li>
            </ul>
        </form>
    </section>