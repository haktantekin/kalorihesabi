<?php get_header(); ?>
<section class="content content-list">
  <h1><span><?php printf(__('%s', 'nat kah'), get_search_query()); ?></span> sonuçları</h1>
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
              <div class="content-list-item-left">
                <a href="<?php the_permalink(); ?>">
                <?php if(has_post_thumbnail()) { the_post_thumbnail('medium');   } 
                      elseif( $thumbnail = get_post_meta($post->ID, 'resim', true) ){  ?>
                      <picture>
                      <source width="233" height="155" srcSet="<?php echo $thumbnail; ?>" type="image/avif" />
                      <img width="233" height="155" decoding="async" loading="lazy" src="<?php echo $thumbnail; ?>" alt="<?php the_title(); ?>" />
                      </picture>
                  <?php } ?>
                </a>
              </div>
              <div class="content-list-item-right">
                <div class="content-list-item-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></div>
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
                <div class="content-list-item-text"><a href="<?php the_permalink(); ?>"><?php the_excerpt(); ?></a></div>
              </div>
          </div>
      <?php endwhile; ?>
      <?php wpex_pagination(); ?>
  <?php endif; ?>
  <?php wp_reset_query(); ?>
</section>
<?php get_footer(); ?>