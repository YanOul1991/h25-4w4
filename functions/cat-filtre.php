<?php
/**
 * Fonction qui filtre la liste des categories d'un poste et retire la categorie choisi de la liste des elements html genere.
 * 
 * @param string $cat_filtre : Nom / slug de la categorie a filter.
 * @return void
 */

function category_filtre($cat_filtre)
{ ?>
    <ul class="post-categories">
        <?php foreach (get_the_category() as $key => $value) : ?>
            <?php if ($value->id != strtolower($cat_filtre) && $value->cat_ID != get_query_var('cat')): ?>
                <li><a href="<?php echo home_url("category/destination/$value->slug/") ?>"><?php echo $value->name; ?></a></li>
        <?php endif;
        endforeach; ?>
    </ul>
<?php }