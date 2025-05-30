<?php get_header(); ?>

<div class="container mx-auto py-16 px-6">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1 class="text-3xl font-bold mb-6"><?php the_title(); ?></h1>
        <?php the_content(); ?>
    <?php endwhile; endif; ?>
</div>

<?php get_footer(); ?>
