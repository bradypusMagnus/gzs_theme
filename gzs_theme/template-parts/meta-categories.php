<?php
    $categories = get_the_category();
    foreach($categories as $categorie):?>
        <li><a href=" <?php echo ( get_category_link( $categorie->term_id ) ); ?> "> <?php echo $categorie->name;?> </a></li>
<?php endforeach;?>