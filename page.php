<?php get_header(); ?>
<section class="content content-detail">
<?php
    $args = array('category__in' => array(1, 2, 3, 4, 5, 6, 8, 9, 10, 11, 12, 13, 14, 15),);
    $the_query = new WP_Query($args);
    ?>
    <?php if ($the_query->have_posts()) : ?>
        <?php while ($the_query->have_posts()) : $the_query->the_post();  ?>
            <div class="content-img">
            <a href="<?php the_permalink(); ?>">
                  <?php if (has_post_thumbnail()) { ?>
                    <picture alt="<?php the_title(); ?>">
                    <source width="233" height="155" srcSet="<?php echo $url ?>" type="image/avif"  alt="<?php the_title(); ?>" />
                    <img width="233" height="155" decoding="async" loading="lazy" src="<?php echo $url ?>" alt="<?php the_title(); ?>" />
                    </picture>
                    <?php } else { ?>
                  <img alt="<?php the_title(); ?>" src="<?php echo 'https://kalorihesabi.com/wp-content/uploads/2022/05/kalori-hesabi.heic' ?>" />
                  <?php }  ?>
                </a>
            </div>
            <h1><?php the_title(); ?></h1>
            <div class="content-list-item-info">
                <div class="content-list-item-info-date">
                    <i class="fa fa-calendar-times"></i>
                    <?php echo get_the_date( 'd-m-Y' ); ?>
                </div>
                <div class="content-list-item-info-cat">
                    <i class="fa fa-tag"></i>
                    <?php the_category(', ') ?>
                </div>
                <div class="content-list-item-info-tag">
                    <i class="fa fa-hashtag"></i>
                    <?php the_tags(' ',' '); ?>
                </div>
            </div>
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