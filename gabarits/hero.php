    <?php $hero_auteur = get_theme_mod('hero_auteur', 'Default title'); ?>
    <?php $hero_background = get_theme_mod('hero_background', ''); ?>
    <?php $hero_couleur_texte = get_theme_mod('hero_color_txt', '');?> 

    <section class="hero global" style="background-image: url(<?php echo $hero_background ?>); color: <?= $hero_couleur_texte ?>;">
        <div class="hero__contenu">
            <h1 class="hero__titre"><?php bloginfo('name'); ?></h1>
            <p class="hero__description"><?php bloginfo('description');?></p>
            <p class="hero__auteur">Auteur : <?= $hero_auteur ?></p>
            <p class="hero__courriel"><?php bloginfo('admin_email'); ?></p>
            <p class="hero__adresse">5800 Sherbrook-est - Montréal (Québec) H1X 2A2 </p>
            <p class="hero__telephone">514-254-7131 </p>
            <div class="hero__inscription"><a href="#">S'inscrire</a></div>
            <?php get_template_part('gabarits/icones'); ?>
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
        </div>
    </section>