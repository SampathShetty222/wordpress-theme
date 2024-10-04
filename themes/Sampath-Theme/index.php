<?php get_header(); ?>

<section class="px-[80px] py-[30px]">
    <div class="flex justify-between">
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
            <a href="<?php the_permalink(); ?>">
                <article class="w-[30%] bg-[#ebeeeb] text-center py-5 px-2 rounded-lg">
                    <h1 class="text-xl font-medium pb-[10px] text-center line-clamp-1"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
                    <span class="flex justify-center"><?php the_post_thumbnail('medium'); ?></span>
                    <div class="text-md font-medium text-[grey] pt-[20px] text-center line-clamp-2"><?php the_excerpt(); ?></div>
                </article>
            </a>
            <?php endwhile; ?>
        <?php endif; ?>
    </div>
</section>

<?php get_footer(); ?>
