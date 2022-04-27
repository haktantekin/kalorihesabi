<?php get_header(); ?>
<section class="content content-detail">
<?php
    $args = array('category__in' => array(1, 2, 3, 4, 5, 6, 8, 9, 10, 11, 12, 13, 14, 15),);
    $the_query = new WP_Query($args);
    ?>
    <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post();  ?>
            <h1><?php the_title(); ?></h1>
            <div class="content-in">
                <div class="content-section info-section">
                    <div class="content-section-right light-blue">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
    <?php wp_reset_query(); ?>
</section>
<?php get_footer(); ?>