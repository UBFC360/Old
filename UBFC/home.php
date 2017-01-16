<?php get_header(); ?>

<section class="section-logo">
    <p class="image-logo">Logo Ubfc</p>
</section>

<section class="actualite">
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
    </div>
    <div class="titre-actualite">
        <h1>Actualité</h1>
        <p>Post quorum necem nihilo lenius ferociens Gallus ut leo cadaveribus pastus multa huius modi scrutabatur. quae
            singula narrare non refert, me professione modum, quod evitandum est, excedamus.</p>
    </div>
</section>

<section class="agenda">
    <div class="titre-agenda">
        <h1>Agenda</h1>
        <p>Post quorum necem nihilo lenius ferociens Gallus ut leo cadaveribus pastus multa huius modi scrutabatur. quae
            singula</p>
    </div>
    <div class="date-agenda">
        <div class="date">
            <p><span class="lieu"><span class="couleur-agenda">21 Octobre</span> - Besançon</span> - Expo photo</p>
        </div>
        <div class="date">
            <p><span class="lieu"><span class="couleur-agenda">21 Octobre</span> - Besançon</span> - Expo photo</p>
        </div>
        <div class="date">
            <p><span class="lieu"><span class="couleur-agenda">21 Octobre</span> - Besançon</span> - Expo photo</p>
        </div>
        <div class="date">
            <p><span class="lieu"><span class="couleur-agenda">21 Octobre</span> - Besançon</span> - Expo photo</p>
        </div>
        <div class="date">
            <p><span class="lieu"><span class="couleur-agenda">21 Octobre</span> - Besançon</span> - Expo photo</p>
        </div>
        <div class="date">
            <p><span class="lieu"><span class="couleur-agenda">21 Octobre</span> - Besançon</span> - Expo photo</p>
        </div>
        <a href="<?php echo esc_url(get_post_type_archive_link("agenda")); ?>" class="lieu">agenda complet</a>
    </div>
</section>

<section class="focus">
    <div class="titre-focus">
        <h1>Focus sur</h1>
        <p>Post quorum necem nihilo lenius ferociens Gallus ut leo cadaveribus pastus multa huius modi scrutabatur. quae
            singula</p>
        <a href="http://youtube.com">Plus de vidéos</a>
    </div>
    <div class="video-focus">
        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/CNi8hVPUiC8" frameborder="0" allowfullscreen></iframe>
        <p class="legende">Vidéo de présentation de l'UBFC</p>
    </div>
</section>

<section class="contact">
    <div class="titre-contact">
        <h1>Contact</h1>
        <p>Post quorum necem nihilo lenius ferociens Gallus ut leo cadaveribus pastus multa huius modi scrutabatur. quae
            singula</p>
    </div>
    <div class="reseaux">
        <h3>Rejoignez UBFC sur les réseaux sociaux !</h3>
        <ul class="reseaux">
            <li><a href="http://facebook.com" class="image-contact facebook">facebook</a></li>
            <li><a href="http://twitter.com" class="image-contact twitter">twitter</a></li>
            <li><a href="http://youtube.com" class="image-contact youtube">youtube</a></li>
        </ul>
        <h3>Abonnez vous à la newsletter</h3>
        <form method="post" action="traitement.php">
            <p>
                <input type="text" name="mail" id="mail" placeholder="Ex : mledeveh@univ-fcomte.fr" size="30" maxlength="10"/>
                <button class="btn btn-1">
                    <svg>
                        <rect x="0" y="0" fill="none" width="100%" height="100%"/>
                    </svg>
                    Valider
                </button>
            </p>
        </form>
    </div>
</section>

<?php get_footer(); ?>
