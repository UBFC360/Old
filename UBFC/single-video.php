<?php
get_header();
?>

    <h1 class="titre-principale video">Vidéos</h1>

<?php

while (have_posts()):the_post();
    ?>

    <h2 class="sous-titre vert"><?php the_title();?></h2>
    <p class="contenu"><?php the_content();?></p>

<?php endwhile;

get_footer();

?>