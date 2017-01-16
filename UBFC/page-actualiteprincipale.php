<?php get_header(); ?>

    <h1 class="titre-principale actualites">Actualité</h1>
    <section class="actu">
        <h2 class="orange">A la une!</h2>
        <div class="texte-droite">
            <div class="gauche">

                <?php

                $args = array(
                    'post_type' => 'actualite',
                    'posts_per_page' => 4
                );

                $query = new WP_Query($args);


                while ($query->have_posts()):$query->the_post(); ?>
                    <div class="carre">
                        <a href="<?php the_permalink(); ?>" class="liste"><?php the_title(); ?></a>
                    </div>
                <?php endwhile; ?>
            </div>
            <div class="droite">
                <a class="twitter-timeline" data-height="400" data-link-color="#E95F28"
                   href="https://twitter.com/Univ_BFC">Tweets by Univ_BFC</a>
                <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
        </div>
        <a href="<?php echo esc_url(get_post_type_archive_link("actualite")); ?>">Acceder à toutes les actualités</a>
    </section>

    <section class="event">
        <h2 class="orange">Evenement à venir!</h2>

        <?php

        $args = array(
            'post_type' => 'agenda',
            'posts_per_page' => 6
        );

        $query = new WP_Query($args);


        while ($query->have_posts()):$query->the_post(); ?>
            <div class="carre">
                <a href="<?php the_permalink(); ?>" class="liste"><span class="gras orange"><?php the_title(); ?>:</span> <span class="extrait"><?php the_excerpt(); ?></span>
            </div>
        <?php endwhile; ?>
        <a href="<?php echo esc_url(get_post_type_archive_link("actualite")); ?>">Acceder à tout les évenements</a>
    </section>
<?php get_footer(); ?>