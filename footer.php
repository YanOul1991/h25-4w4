<footer>
    <div class="piedpage global">
        <!-- S1 -->
        <section class="piedpage__s1">
            <div class="piedpage__s1__externe">
                <?php wp_nav_menu(array(
                    "menu" => "externe",
                    "container" => "nav"
                ));?> 
            </div>
            <div class="piedpage__s1__adresse">
                <div class="piedpage__s1__adresse__coord">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure libero eligendi aperiam, facilis corrupti at sequi eveniet iusto perspiciatis modi veritatis placeat debitis consectetur beatae, quos nam reiciendis. Molestias, accusantium.
                </div>
                <div class="piedpage__s1__adresse__recherche">
                    <?php get_search_form();?> 
                </div>
            </div>
            <div class="piedpage__s1__description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur dolorum nisi architecto assumenda suscipit necessitatibus porro voluptate modi quod voluptates, at debitis cum velit iste enim nulla voluptas temporibus praesentium.
            </div>
        </section>   
        <!-- S2 -->
        <section class="piedpage__s2"></section>         
        <!-- S3 -->
        <section class="piedpage__s3"></section>         
    </div>

</footer>
<?php get_footer();?> 
<?php wp_footer();?> 