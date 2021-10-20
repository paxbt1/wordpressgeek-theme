<?php

 
add_theme_support( 'title-tag');
add_theme_support( 'custom-logo');
add_theme_support('post-thumbnails');
add_image_size( 'custopm-thumbnail', 75, 75 );
// enqueue styles
add_action('wp_enqueue_scripts', 'wpgeek_register_styles');
include_once(get_template_directory().'/classes/admin.php');
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
    // return "$count".esc_html_e( "views" ,  'wordpressgeek-net' );
    return esc_html_e( "بازدید شده" ,  'wordpressgeek-net' ). "$count";
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

function wpgeek_widget_areas(){
    register_sidebar(
        array(
            'before_title'=>'<h6 class="post-title mb-15 text-limit-2-row font-medium">',
            'after_title'=>'</h6>',
            'before_widget'=>'<li class="mb-30 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                                <div class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5">
                                    <div class="post-content media-body">',
            'after_widget'=>'  </div>
                                </div>
                            </li>',
            'name'=>'Sidebar Area',
            'id'=>'sidebar-1',
            'description'=>'Sidebar Area Widget'
        ));
        register_sidebar(
            array(
                'before_title'=>'<div class="widget-header-2 position-relative mb-30">
                            <h5 class="mt-5 mb-30">',
                'after_title'=>'</h5></div>',
                'before_widget'=>'<div class="textwidget">',
                'after_widget'=>'</div>',
                'name'=>'Footer col 1',
                'id'=>'footer-1',
                'description'=>'Fotter Col One Area Widget'
            )
        );
        register_sidebar(
            array(
                'before_title'=>'<div class="widget-header-2 position-relative mb-30">
                            <h5 class="mt-5 mb-30">',
                'after_title'=>'</h5></div>',
                'before_widget'=>'<div class="textwidget">',
                'after_widget'=>'</div>',
                'name'=>'Footer col 2',
                'id'=>'footer-2',
                'description'=>'Fotter Col One Area Widget'
            )
        );

        register_sidebar(
            array(
                'before_title'=>'<div class="widget-header-2 position-relative mb-30">
                            <h5 class="mt-5 mb-30">',
                'after_title'=>'</h5></div>',
                'before_widget'=>'<div class="textwidget">',
                'after_widget'=>'</div>',
                'name'=>'Footer col 3',
                'id'=>'footer-3',
                'description'=>'Fotter Col One Area Widget'
                )
        );

        register_sidebar(
            array(
                'before_title'=>'<div class="widget-header-2 position-relative mb-30">
                            <h5 class="mt-5 mb-30">',
                'after_title'=>'</h5></div>',
                'before_widget'=>'<div class="textwidget">',
                'after_widget'=>'</div>',
                'name'=>'Footer col 4',
                'id'=>'footer-4',
                'description'=>'Fotter Col One Area Widget'
            )
      );
}

add_action( 'widgets_init', 'wpgeek_widget_areas' );

/*=============================================
=            BREADCRUMBS			            =
=============================================*/

//  to include in functions.php
function the_breadcrumb() {

    $sep = ' > ';

    if (!is_front_page()) {
	
	// Start the breadcrumb with a link to your homepage
        echo '<div class="breadcrumbs">';
        echo '<a href="';
        echo get_option('home');
        echo '">';
        bloginfo('name');
        echo '</a>' . $sep;
	
	// Check if the current page is a category, an archive or a single page. If so show the category or archive name.
        if (is_category() || is_single() ){
            the_category('title_li=');
        } elseif (is_archive() || is_single()){
            if ( is_day() ) {
                printf( __( '%s', 'text_domain' ), get_the_date() );
            } elseif ( is_month() ) {
                printf( __( '%s', 'text_domain' ), get_the_date( _x( 'F Y', 'monthly archives date format', 'text_domain' ) ) );
            } elseif ( is_year() ) {
                printf( __( '%s', 'text_domain' ), get_the_date( _x( 'Y', 'yearly archives date format', 'text_domain' ) ) );
            } else {
                _e( 'Blog Archives', 'text_domain' );
            }
        }
	
	// If the current page is a single post, show its title with the separator
        if (is_single()) {
            echo $sep;
            the_title();
   
        }
	
	// If the current page is a static page, show its title.
        if (is_page()) {
            echo the_title();
        }
	
	// if you have a static page assigned to be you posts list page. It will find the title of the static page and display it. i.e Home >> Blog
        if (is_home()){
            global $post;
            $page_for_posts_id = get_option('page_for_posts');
            if ( $page_for_posts_id ) { 
               
                $post = get_post($page_for_posts_id);
                setup_postdata($post);
                the_title();
                rewind_posts();
            }
        }

        echo '</div>';
    }
}
/*
* Credit: http://www.thatweblook.co.uk/blog/tutorials/tutorial-wordpress-breadcrumb-function/
*/
