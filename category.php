<?php get_header(); ?>
<section class="content content-list">
    <h1><?php printf(__('%s', 'natdic'), single_cat_title('', false)); ?></h1>
    <div class="col-xl-6 col-12">
        <?php wp_reset_query(); ?> 
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'full'); ?>
                <?php
                $the_cat = get_the_category();
                $category_name = $the_cat[0]->cat_name;
                $category_link = get_category_link($the_cat[0]->cat_ID);
                ?>
                <div class="content-list-item">
                    <div class="content-list-item-text"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
                    <div class="content-list-item-tags">
                        <?php the_tags(' ', ' ', ' ');
                        ?> <?php the_category('') ?>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php wpex_pagination(); ?>
        <?php endif; ?>
        <?php wp_reset_query(); ?>
    </div>
    <div class="col-xl-6 col-12">  <?php get_sidebar(); ?></div>
</section>
<?php get_footer(); ?>