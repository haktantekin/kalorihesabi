<?php get_header(); ?>
<section class="content content-list">
    <h1><?php printf(__('%s', 'natkit'), single_tag_title('', false)); ?></h1>
    <?php wp_reset_query(); ?>
    <?php
    $args = array('category__in' => array(1, 2, 3, 4, 5, 6, 8, 9, 10, 11, 12, 13, 14, 15),);
    $the_query = new WP_Query($args);
    ?>
    <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post();  ?>
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
</section>
<?php get_footer(); ?>