<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php wp_title("|",true,"right") ?><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body>
<nav>
    <!--Reseau sociaux-->
    <ul class="reseau-sociaux">
        <li>Fr</li>
        <li>|</li>
        <li>En</li>
        <li><a href="http://facebook.com"class="image-nav facebook">facebook</a></li>
        <li><a href="http://twitter.com" class="image-nav twitter">twitter</a></li>
        <li><a href="http://youtube.com" class="image-nav youtube">youtube</a></li>
    </ul>
    <!--Menu-->
    <ul class="menu">
        <li><a href="<?php echo esc_url(home_url()); ?>">Accueil</a></li>
        <li><a href="radio.html">Radio campus</a></li>
        <li><a href="<?php echo esc_url(get_post_type_archive_link("video")); ?>">Vidéos</a></li>
        <li><a href="annuaire.html">Annuraire</a></li>
        <li><a href="inscription.html">Inscription</a></li>
        <li><a href="<?php echo esc_url(get_post_type_archive_link("actualite")); ?>">Actualité</a></li>
        <li><a href="<?php echo esc_url(get_post_type_archive_link("formation")); ?>">Formations</a></li>
    </ul>
    <!--Menu hamburger-->
    <!--<div class="barres">
        <span class="barre"></span>
        <span class="barre"></span>
        <span class="barre"></span>
    </div>-->

</nav>