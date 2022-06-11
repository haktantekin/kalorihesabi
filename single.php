<?php get_header(); ?>
<div class="content-h-8">
    <section class="content content-detail">
        <?php wp_reset_query(); ?>
        <?php if (have_posts()) : ?>
            <?php while (have_posts()) : the_post(); ?>
                <?php $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID), 'full'); ?>
                <?php
                $the_cat = get_the_category();
                $category_name = $the_cat[0]->cat_name;
                $category_link = get_category_link($the_cat[0]->cat_ID);
                ?>
                <div class="content-img">
                    <?php if (has_post_thumbnail()) { ?>
                        <picture alt="<?php the_title(); ?>">
                            <source width="233" height="155" srcSet="<?php echo $url ?>" type="image/avif" alt="<?php the_title(); ?>" />
                            <img width="233" height="155" decoding="async" loading="lazy" src="<?php echo $url ?>" alt="<?php the_title(); ?>" />
                        </picture>
                    <?php } else { ?>
                        <img alt="<?php the_title(); ?>" src="<?php echo 'https://kalorihesabi.com/wp-content/uploads/2022/05/kalori-hesabi.heic' ?>" />
                    <?php }  ?>
                </div>
                <h1><?php the_title(); ?></h1>
                <div class="content-list-item-info">
                    <div class="content-list-item-info-date">
                        <i class="fa fa-calendar-times"></i>
                        <?php echo get_the_date('d-m-Y'); ?>
                    </div>
                    <div class="content-list-item-info-cat">
                        <i class="fa fa-tag"></i>
                        <?php the_category(', ') ?>
                    </div>
                    <div class="content-list-item-info-tag">
                        <i class="fa fa-hashtag"></i>
                        <?php the_tags(' ', ' '); ?>
                    </div>
                </div>
                <div class="content-in">
                    <?php the_content(); ?>
                </div>
                <?php $orig_post = $post;
                global $post;
                $tags = wp_get_post_tags($post->ID);

                if ($tags && count($tags) > 1) {

                    $tag_ids = array();

                    echo ' <div class="other-post">';
                    echo ' <h3>Yazarın Diğer Konuları</h3>';

                    foreach ($tags as $individual_tag) $tag_ids[] = $individual_tag->term_id;
                    $args = array(
                        'tag__in' => $tag_ids,
                        'post__not_in' => array($post->ID),
                        'posts_per_page' => 3, // Number of related posts that will be shown.
                        'ignore_sticky_posts' => 1
                    );
                    $my_query = new wp_query($args);
                    if ($my_query->have_posts()) {
                        while ($my_query->have_posts()) {
                            $my_query->the_post(); ?>
                            <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                <?php }
                    }
                    echo '</div>';
                }
                $post = $orig_post;
                wp_reset_query(); ?>


                <div class="other-post">
                    <h3><?php the_category(', ') ?> Kategorisindeki Diğer Konular</h3>
                    <?php $orig_post = $post;
                    global $post;
                    $categories = get_the_category($post->ID);
                    if ($categories) {
                        $category_ids = array();
                        foreach ($categories as $individual_category) $category_ids[] = $individual_category->term_id;

                        $args = array(
                            'category__in' => $category_ids,
                            'post__not_in' => array($post->ID),
                            'posts_per_page' => 3,
                            'ignore_sticky_posts' => 1
                        );

                        $my_query = new wp_query($args);
                        if ($my_query->have_posts()) {

                            while ($my_query->have_posts()) {
                                $my_query->the_post(); ?>
                                <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                    <?
                            }
                        }
                    }
                    $post = $orig_post;
                    wp_reset_query(); ?>

                </div>
    </section>
</div>
<div class="content-h-4 content-detail-sidebar"> <?php get_sidebar(); ?></div>
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_query(); ?>
<?php get_footer(); ?>