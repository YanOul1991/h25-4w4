<?php get_header();?>   
    <!--  -->
    <!--  -->
    <!-- <h1> ---------------------------- FRONT-PAGE.PHP ---------------------------- </h1> -->
     
    <section class="hero global">
        <div class="hero__contenu">
            <h1 class="hero__titre"><?php bloginfo('name');?></h1>
            <p class="hero__description">
                <?php bloginfo('description');?> 
            </p>
            <p class="hero__courriel">
                <a href="#"><?php bloginfo('admin_email');?> </a>
            </p>
            <p class="hero__adresse">
                5800 Sherbrook-est - Montréal (Québec) H1X 2A2
            </p>
            <p class="hero__telephone">
                514-254-7131
            </p>
            <div class="hero__inscription">
                <a href="#">S'inscrire</a>
            </div>
            <div class="hero__icone">
                <img src="https://s2.svgbox.net/social.svg?ic=facebook&color=000000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=linkedin&color=000" width="20" height="20">
                <img src="https://s2.svgbox.net/social.svg?ic=wordpress&color=000" width="20" height="20">
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
        </div>
    </section>
    <!--  -->
    <!--  -->
    <!-- <section>
        <div class="galerie global">
            <h1 class="galerie__titre">Nos destinations favorites</h1>
            <div class="galerie__conteneur">
                <figure class="galerie__figure">
                    <img src="images/destinations/img-fav-001.jpg" alt="aaaa" class="galerie__img">
                </figure>
                <figure class="galerie__figure">
                    <img src="images/destinations/img-fav-002.jpg" alt="aaaa" class="galerie__img">
                </figure>
                <figure class="galerie__figure">
                    <img src="images/destinations/img-fav-003.jpg" alt="aaaa" class="galerie__img">
                </figure>
                <figure class="galerie__figure">
                    <img src="images/destinations/img-fav-004.jpg" alt="aaaa" class="galerie__img">
                </figure>
                <figure class="galerie__figure">
                    <img src="images/destinations/img-fav-005.jpg" alt="aaaa" class="galerie__img">
                </figure>
                <figure class="galerie__figure">
                    <img src="images/destinations/img-fav-006.jpg" alt="aaaa" class="galerie__img">
                </figure>
                <figure class="galerie__figure">
                    <img src="images/destinations/img-fav-007.jpg" alt="aaaa" class="galerie__img">
                </figure>
                <figure class="galerie__figure">
                    <img src="images/destinations/img-fav-008.jpg" alt="aaaa" class="galerie__img">
                </figure>
                <figure class="galerie__figure">
                    <img src="images/destinations/img-fav-009.jpg" alt="aaaa" class="galerie__img">
                </figure>
                <figure class="galerie__figure">
                    <img src="images/destinations/img-fav-010.jpg" alt="aaaa" class="galerie__img">
                </figure>
            </div>

        </div>
    </section> -->
    <!--  -->
    <section class="populaire">
        <div class="global">
            <?php if (have_posts()) : while (have_posts()) : the_post(); 
            if (in_category("galerie")) {
                the_content();
            }
            else { ?>
                <?php get_template_part('gabarits/carte');?> 
            <?php } ;?> 
            <?php endwhile; endif; ?>
        </div>
    </section>
    <?php get_footer();?> 
</body>
</html>