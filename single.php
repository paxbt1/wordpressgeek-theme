<?php
get_header();
if(!current_user_can( 'manage_options' )){
    gt_set_post_view(get_the_ID());    
}


if(have_posts()){
    while(have_posts(  )){
        the_post();
        get_template_part('template-parts/content','article' );

}
}


get_footer( );

