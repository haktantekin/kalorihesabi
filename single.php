<?php get_header(); ?>
<section class="content content-detail">
    <?php wp_reset_query(); ?>
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <?php
            $the_cat = get_the_category();
            $category_name = $the_cat[0]->cat_name;
            $category_link = get_category_link($the_cat[0]->cat_ID);
            ?>
            <?php if ($category_name == "blog") : ?>
                <h1><?php the_title(); ?></h1>
                <div class="content-in blog">
                    <?php the_content(); ?>
                </div>
            <?php else : ?>
                <h1><?php the_title(); ?> ne demek?</h1>
                <?php the_excerpt();  ?>
                <div class="content-in">
                    <?php the_content(); ?>
                </div>
            <?php endif; ?>

</section>
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_query(); ?>

<?php get_footer(); ?>