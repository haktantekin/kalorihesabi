<?php get_header(); ?>
<section class="content content-list">
  <h1><span><?php printf(__('%s', 'nat kah'), get_search_query()); ?></span> sonuçları</h1>
  <div class="col-xl-6 col-12">
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
    </div>
    <div class="col-xl-6 col-12" >  <?php get_sidebar(); ?></div>
</section>
<?php get_footer(); ?>