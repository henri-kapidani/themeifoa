<?php
// wordpress ha già recuperato i dati giusti in base all'indirizzo dal database

get_header();
get_template_part('template-parts/post-heading');
the_post(); ?>
<div class="row">
    <div class="col-12 col-md-9">
        <h1><?php the_title(); ?></h1>
        <h2><a href="<?= get_author_posts_url(get_the_author_meta('ID')) ?>"><?php the_author() ?></a></h2>
        <h2><?php the_date('j/n/Y') ?></h2>
        <div class="ifoa-content">
            <?php the_content(); ?>
        </div>
    </div>
    <div class="col-12 col-md-3">
        <?php get_sidebar() ?>
    </div>
</div>

<?php
get_footer();
