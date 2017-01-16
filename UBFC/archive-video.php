<?php

get_header();
?>

    <h1 class="titre-principale base">Vidéos</h1>

<?php
while (have_posts()):the_post();?>
    <a href="<?php the_permalink(); ?>" class="liste"><h1><?php the_title(); ?></h1></a>
<?php endwhile;

get_footer();

?>