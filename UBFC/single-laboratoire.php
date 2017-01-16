<?php
get_header();
?>

    <h1 class="titre-principale laboratoire"><?php the_title();?></h1>

<?php

while (have_posts()):the_post();
    ?>
    <p class="contenu"><?php the_content();?></p>

<?php endwhile;

get_footer();

?>