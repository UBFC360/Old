<?php

get_header();
?>

    <h1 class="titre-principale formation">Formation</h1>

    <section class="">

        <h2 class="bleu">Liste des formations</h2>
        <?php
        while (have_posts()):the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="liste"><span class="gras"><?php the_title(); ?>:</span> <span class="extrait"><?php the_excerpt(); ?></span>
            </a>
        <?php endwhile; ?>
    </section>

<?php
get_footer();

?>