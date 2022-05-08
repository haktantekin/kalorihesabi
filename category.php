
<?php get_header(); ?>
<section class="search-box top">
    <form method="get" action="<?php bloginfo('url'); ?>">
        <input class="search-text" type="text" placeholder="besin ara..." autocomplete="off" list="searchtext_s"
        name="s" />
        <div class="input-button">
          <button class="search-button" type="button"  src="<?php bloginfo('url'); ?>"> 
           <i class="fa fa-search"></i>
          </button>
        </div>
    </form>
</section>
<section class="content content-list">
<h1><?php printf(__('%s', 'natdic'), single_cat_title('', false)); ?> </h1>
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