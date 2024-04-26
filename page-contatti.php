<?php
get_header();

the_post(); ?>
<h1><?php the_title(); ?></h1>
<div class="ifoa-content">
    <?php the_content(); ?>
</div>

<!-- <form action="<?= site_url('/submit-form.php') ?>" method="post">
    <input type="text" name="name">
    <input type="email" name="email">
    <button>Submit</button>
</form> -->

<?php get_footer();
