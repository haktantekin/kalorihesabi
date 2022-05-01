<div id="sidebar">
    <h3 class="tag-title">
        Kategoriler
    </h3>
    <div class="content-tags">
        <?php
        $before = '';
        $seperator = '';
        $after = '';
        the_tags($before, $seperator, $after);
        ?>
    </div>
</div>