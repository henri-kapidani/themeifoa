<?php
// wordpress ha già recuperato i dati giusti in base all'indirizzo dal database

get_header();
the_post(); ?>
<div class="row">
    <div class="col-12 col-md-9">
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </div>
    <div class="col-12 col-md-3">
        <?php get_sidebar() ?>
    </div>
</div>

<?php
get_footer();
