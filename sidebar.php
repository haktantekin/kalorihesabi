<?php
    $tags = get_tags();
    if ($tags) {
?><ul class="tags"><?php
    foreach ($tags as $tag) {
        echo '<li><a href="' . get_tag_link( $tag->term_id ) . '" 
              title="' . sprintf( __( "View all posts in %s" ), $tag-
              >name ) . '" ' . '>' . $tag->name.'</a></li>';
    }
    echo '<li><a href="#">View All</a><span class="arrow"></span>
</li>'; ?></ul>
<?php }?>   