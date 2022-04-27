<?php get_header("default"); ?>


<div class="container">
    <div class="default-container">
        <h1 class="logo">kalori hesabı</h1>
        <div class="search-box">
        <form method="get" action="<?php bloginfo('url'); ?>">
                <input class="search-text" type="text" placeholder="besin ara..." autocomplete="off" list="searchtext_s" name="s" />
                <div class="input-button">
                    <input class="search-button" type="button" value="arama" src="<?php bloginfo('url'); ?>" />
                </div>
            </form>
        </div>
        <nav class="default-nav">
          <?php wp_nav_menu(array('theme_location' => 'Header')); ?>
        </div>
    </div>
</div>

<?php get_footer("default"); ?>