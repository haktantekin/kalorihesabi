<?php get_header(); ?>
<section class="content content-detail weight-calc">
    <?php wp_reset_query(); ?>
    <?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>
    <h1><?php the_title(); ?></h1>
    <div class="content-in">
        <div class="weight-display">
            <p id="result">20.0</p>
            <p id="category">İdeal Kilondasın</p>
        </div>
        <div class="weight-row">
            <input type="range" min="20" max="200" value="20" id="weight" oninput="hWRatio()">
            <span id="weight-val">20 kg</span>
        </div>
        <div class="weight-row">
            <input type="range" min="100" max="250" value="100" id="height" oninput="hWRatio()">
            <span id="height-val">100 cm</span>
        </div>
        <?php the_content(); ?>
    </div>
</section>
<?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_query(); ?>
<?php get_footer(); ?>