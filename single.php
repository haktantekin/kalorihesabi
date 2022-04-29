<?php get_header(); ?>
<div class="content-h-8">
    <section class="content content-detail">
        <?php wp_reset_query(); ?>
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <?php
            $the_cat = get_the_category();
            $category_name = $the_cat[0]->cat_name;
            $category_link = get_category_link($the_cat[0]->cat_ID);
            ?>
            <div class="content-img">
            <?php if(has_post_thumbnail()) { the_post_thumbnail('medium');   } 
                    elseif( $thumbnail = get_post_meta($post->ID, 'resim', true) ){  ?>
                    <picture alt="<?php the_title(); ?>">
                    <source width="233" height="155" srcSet="<?php echo $thumbnail; ?>" type="image/avif"  alt="<?php the_title(); ?>" />
                    <img width="233" height="155" decoding="async" loading="lazy" src="<?php echo $thumbnail; ?>" alt="<?php the_title(); ?>" />
                    </picture>
                <?php } ?>
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
            <?php the_content(); ?>
        </div>
    </section>
</div>
<div class="content-h-4 content-detail-sidebar">  <?php get_sidebar(); ?></div>
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_query(); ?>
<?php get_footer(); ?>