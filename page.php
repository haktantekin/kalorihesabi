<?php get_header(); ?>
<div class="content-h-8">
    <section class="content content-detail">
        <?php wp_reset_query(); ?>
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <div class="content-in">
            <?php the_content(); ?>
        </div>
    </section>
</div>
<div class="content-h-4 content-detail-sidebar">  <?php get_sidebar(); ?></div>
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_query(); ?>
<?php get_footer(); ?>