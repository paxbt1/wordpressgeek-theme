<?php

 
add_theme_support( 'title-tag');
add_theme_support( 'custom-logo');
add_theme_support('post-thumbnails');
add_image_size( 'custopm-thumbnail', 75, 75 );
// enqueue styles
add_action('wp_enqueue_scripts', 'wpgeek_register_styles');

function wpgeek_register_styles(){
    $version=wp_get_theme()->get('version');
    wp_enqueue_style( 'style', get_template_directory_uri()."/assets/css/style.css", array(),'1.9.0','all');
    wp_enqueue_style( 'widgets1', get_template_directory_uri(). "/assets/css/widgets1.css", array(),'1.9.0','all');
    wp_enqueue_style( 'responsive', get_template_directory_uri(). "/assets/css/responsive.css", array(),'1.0','all');
    wp_enqueue_style( 'custom', get_template_directory_uri(). "/assets/css/custom.css", array(),'1.0','all');
    

}

// enqueue scripts
add_action( 'wp_enqueue_scripts','wpgeek_register_scripts' );

function wpgeek_register_scripts(){
    wp_enqueue_script( 'modernizr-3.5.0.min', get_template_directory_uri(). "/assets/js/modernizr-3.5.0.min.js", array(),'3.5.0','all',true);
    wp_enqueue_script( 'jquery-3.5.1.min', get_template_directory_uri(). "/assets/js/jquery-3.5.1.min.js", array(),'3.5.1','all'.true);
    wp_enqueue_script( 'slick.min', get_template_directory_uri(). "/assets/js/slick.min.js", array(),'1.0','all',true);
    wp_enqueue_script( 'wow.min', get_template_directory_uri(). "/assets/js/wow.min.js", array(),'1.0','all'.true);
    wp_enqueue_script( 'jquery.ticker', get_template_directory_uri(). "/assets/js/jquery.ticker.js", array(),'1.0','all'.true);
    wp_enqueue_script( 'jquery.vticker-min', get_template_directory_uri(). "/assets/js/jquery.vticker-min.js", array(),'1.0','all'.true);
    wp_enqueue_script( 'jquery.scrollUp.min', get_template_directory_uri(). "/assets/js/jquery.scrollUp.min.js", array(),'1.0','all'.true);
    wp_enqueue_script( 'jquery.nice-select.min', get_template_directory_uri(). "/assets/js/jquery.nice-select.min.js", array(),'1.0','all'.true);
    wp_enqueue_script( 'jquery.magnific-popup', get_template_directory_uri(). "/assets/js/jquery.magnific-popup.js", array(),'1.0','all'.true);
    wp_enqueue_script( 'jquery.sticky', get_template_directory_uri(). "/assets/js/jquery.sticky.js", array(),'1.0','all'.true);
    wp_enqueue_script( 'perfect-scrollbar', get_template_directory_uri(). "/assets/js/perfect-scrollbar.js", array(),'1.0','all'.true); 
    wp_enqueue_script( 'jquery.waypoints.min', get_template_directory_uri(). "/assets/js/jquery.waypoints.min.js", array(),'1.0','all'.true);
    wp_enqueue_script( 'jquery.theia.sticky', get_template_directory_uri(). "/assets/js/jquery.theia.sticky.js", array(),'1.0','all'.true);
    wp_enqueue_script( 'jquery.slicknav', get_template_directory_uri(). "/assets/js/jquery.slicknav.js", array(),'1.0','all'.true);
    wp_enqueue_script( 'main', get_template_directory_uri(). "/assets/js/main.js", array(),'1.0','all'.true);
    wp_enqueue_script( 'backend', get_template_directory_uri(). "/assets/js/backend.js", array(),'1.0','all'.true);
        }

        // add support theme menus

add_theme_support('menus');


    register_nav_menus( $location=array(
           'top_menu'=>"Top menu",
           'mobile_menu'=>"Mobile menu",
    )
);



function gt_get_post_view() {


    $count = get_post_meta( get_the_ID(), 'post_views_count', true );


    return "$count views";


}


function gt_set_post_view() {


    $key = 'post_views_count';


    $post_id = get_the_ID();


    $count = (int) get_post_meta( $post_id, $key, true );


    $count++;


    update_post_meta( $post_id, $key, $count );


}


function gt_posts_column_views( $columns ) {


    $columns['post_views'] = 'Views';


    return $columns;


}


function gt_posts_custom_column_views( $column ) {


    if ( $column === 'post_views') {


        echo gt_get_post_view();


    }


}


add_filter( 'manage_posts_columns', 'gt_posts_column_views' );


add_action( 'manage_posts_custom_column', 'gt_posts_custom_column_views' );





function kriesi_pagination($pages = '', $range = 2)
{  
     $showitems = ($range * 2)+1;  

     global $paged;
  
    //  اگر صفحه بندی خالی بود تعداد صفحه را برابر 1 میکند
     if(empty($paged)){ 
         $paged = 1;
        }

     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }     

     if(1 != $pages)
     {
         echo "<div class='pagination'>";
      
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";

         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class='current'>".$i."</span>":"<a href='".get_pagenum_link($i)."' class='inactive' >".$i."</a>";
             }
         }

         if ($paged < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($paged + 1)."'>&rsaquo;</a>";  
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
      
         echo "</div>\n";
     }
}
