<?php
get_header();?>
<?php gt_set_post_view(); ?>
<?php

if(have_posts()){
    while(have_posts(  )){
        the_post();
        get_template_part('template-parts/content','article' );

}
}
get_footer( );

