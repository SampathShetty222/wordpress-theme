<?php get_header(); ?>
<section class="main-section container">
        <h1 class="main-heading">Testing</h1>
        <button id="popupBtn">Click here for the js testing</button>

        <p class="hidden" id="pop-up">Hi this is the pop up form</p>

    </section>
    <section class="blogs container">
    <?php 
        if( have_posts() ):
            while ( have_posts() ) : the_post();
            ?>
           <?php get_template_part('parts/content') ?>
            <?php
            endwhile;
            ?>
            <div class="pagination-class">
                <div class="pagination"><?php previous_posts_link('<< New Posts') ?></div>
                <div class="pagination"><?php next_posts_link('Older Posts >>') ?></div>
            </div>
        <?php else: ?>
        <p>Nothing yet to be displayed</p>
        <?php endif ?>
    </section>
<?php get_footer(); ?>