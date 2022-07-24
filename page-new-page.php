<?php get_header(); ?>
<section class="content content-list">
    <h1>Kalori Hesabı</h1>
    <section class="default-half-section">
        <div class="default-half-section-column">
            <picture alt="<?php the_title(); ?>">
                <source srcSet="<?php bloginfo('template_url'); ?>/assets/img/kalori-hesaplama.avif" type="image/avif" alt="Kalori Hesaplama" />
                <img decoding="async" loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/kalori-hesaplama.jpg" alt="Kalori Hesaplama" />
            </picture>
        </div>
        <div class="default-half-section-column">
            <picture alt="<?php the_title(); ?>">
                <source srcSet="<?php bloginfo('template_url'); ?>/assets/img/kalori-hesaplama.avif" type="image/avif" alt="Kalori Hesaplama" />
                <img decoding="async" loading="lazy" src="<?php bloginfo('template_url'); ?>/assets/img/kalori-hesaplama.jpg" alt="Kalori Hesaplama" />
            </picture>
        </div>
    </section>
</section>
<?php wp_reset_query(); ?>
<?php get_footer(); ?>