<?php
get_header();

while (have_posts()):the_post();?>
    <h1 class="titre-principale base"><?php the_title();?></h1>
    <?php the_content();
endwhile;

get_footer();

?>