<?php get_header() ?>
<?php the_content(); ?>

<?php get_template_part('parts/header','image') ?>

<div class="container">
    <h1><?php the_title() ?></h1>
    <p><?php the_content() ?></p>
</div>
<?php get_footer() ?>
</div>