<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=5, user-scalable=1" name="viewport" />

    <style>
        :root {
            --color-primary: #5869DA;
            --color-secondary: #2d3d8b;
            --color-danger: #e3363e;
            --primary-font: 'Noto Sans JP', sans-serif;
        }
    </style>
    <link rel="shortcut icon" href="<?php get_site_icon_url();?>">

    <meta name="viewport" content="width=device-width, initial-scale=1">


    <meta property="og:site_name" content=<?php echo get_bloginfo( 'name'); ?>>
    <meta property="og:title" content =<?php echo get_the_title(); ?>>
    <meta property="og:description" content=<?php echo get_bloginfo( 'description'); ?>>
    <meta property="og:url" content="https://wordpressgeek.net">
    <meta property="og:type" content="blog">
    <meta property="og:image" content=<?php echo get_the_post_thumbnail_url(); ?>> 
    <meta name="twitter:title" content==<?php echo get_the_title(); ?>>
    <meta name="twitter:description" content=<?php echo get_bloginfo( 'description'); ?>>

    <link rel="alternate" href="home.html" hreflang="en" />
    <link rel="alternate" href="vi/trang-chu-2.html" hreflang="vi" />
    <link type="application/atom+xml" rel="alternate" title="Posts feed" href="feed/posts">
    <link type="application/atom+xml" rel="alternate" title="Posts feed" href="vi/feed/posts">

    <?php
    wp_head();
    ?>

</head>

<body>
    <div id="alert-container"></div>
    <div class="scroll-progress primary-bg"></div>

    <aside id="sidebar-wrapper" class="custom-scrollbar offcanvas-sidebar" data-load-url="https://stories.botble.com/ajax/get-panel-inner">
        <button class="off-canvas-close"><i class="elegant-icon icon_close"></i></button>
        <div class="sidebar-inner">
            <div class="sidebar-inner-loading">
                <div class="half-circle-spinner">
                    <div class="circle circle-1"></div>
                    <div class="circle circle-2"></div>
                </div>
            </div>
        </div>
    </aside>

    <header class="main-header header-style-1 font-heading">
        
        <div class="header-select-language d-block d-sm-none">
            <div class="container">
                <div class="language-wrapper d-block d-sm-none">
                    <span>Language:</span>
                    <ul class="language_bar_list ">
                        <li>
                            <a rel="alternate" hreflang="vi" href="vi/trang-chu-2.html">
                                <img src="vendor/core/core/base/images/flags/vn.svg" title="Tiếng Việt" width="16" alt="Tiếng Việt"> <span>Tiếng Việt</span> </a>
                        </li>
                    </ul>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>

        <div class="header-top">
            <div class="container">
                <div class="row pt-20 pb-20">
                    <div class="col-md-3 col-6">
                        <a href="index.html">
                        <?php
                        if(!get_theme_mod( 'custom_logo' )){
                            $logo=get_template_directory_uri().'/assets/images/def-logo.png';
                        }
                        else{
                            $logo=wp_get_attachment_url( get_theme_mod( 'custom_logo' ) );
                        }
                        ?>
                        <img class="logo" src="<?php echo $logo ;  ?>" alt="Stories - Laravel Personal Blog Script">
                        </a>
                    </div>
                    <div class="col-md-9 col-6 text-right header-top-right">
                        <div class="language-wrapper d-none d-md-inline">
                            <ul class="language_bar_list ">
                                <li>
                                    <a rel="alternate" hreflang="vi" href="vi/trang-chu-2.html">
                                        <img src="vendor/core/core/base/images/flags/vn.svg" title="Tiếng Việt" width="16" alt="Tiếng Việt"> <span>Tiếng Việt</span> </a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <span class="vertical-divider mr-20 ml-20 d-none d-md-inline"></span>
                        <button class="search-icon d-inline"><span class="mr-15 text-muted font-small"><i class="elegant-icon icon_search mr-5"></i>Search</span></button>
                        <!-- <a href="https://botble.com/go/stories" class="btn btn-radius bg-primary text-white d-none d-md-inline ml-15 font-small box-shadow">Buy Now</a> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="header-sticky">
            <div class="container align-self-center">
                <div class="mobile_menu d-lg-none d-block"></div>
                <div class="main-nav d-none d-lg-block float-left">
                    <nav>

                    <?php
                        wp_nav_menu( 
                            array(
                                'theme_location'=>'top_menu',
                                'menu'=>'main-menu',
                                'container'=>'',
                                'items_wrap'=>'<ul class="main-menu d-none d-lg-inline font-small" id="">%3$s</ul>'
                            
                            ) 
                        );
                        wp_nav_menu( 
                            array(
                                'theme_location'=>'mobile_menu',
                                'menu'=>'mobile-menu',
                                'container'=>'',
                                'items_wrap'=>'<ul class="d-block d-lg-none text-muted" id="mobile-menu" data-label="Menu">%3$s</ul>'
                            
                            ) 
                        );
                    ?>
                        
                    </nav>

                </div>
                <div class="float-right header-tools text-muted font-small">
                    <ul class="header-social-network d-inline-block list-inline mr-15">
                        <li class="list-inline-item"><a class="social-icon text-xs-center" style="background: #3b5999" href="https://facebook.com/" target="_blank" title="Facebook"><i class="elegant-icon social_facebook"></i></a></li>
                        <li class="list-inline-item"><a class="social-icon text-xs-center" style="background: #55ACF9" href="https://twitter.com/" target="_blank" title="Twitter"><i class="elegant-icon social_twitter"></i></a></li>
                        <li class="list-inline-item"><a class="social-icon text-xs-center" style="background: #0a66c2" href="https://linkedin.com/" target="_blank" title="Linkedin"><i class="elegant-icon social_linkedin"></i></a></li>
                    </ul>
                    <div class="off-canvas-toggle-cover d-inline-block">
                        <div class="off-canvas-toggle hidden d-inline-block" id="off-canvas-toggle">
                            <span></span>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </header>
    
<div class="main-search-form">
    <div class="container">
        <div class="pt-50 pb-50 ">
            <div class="row mb-20">

                <div class="col-12 align-self-center main-search-form-cover m-auto">
                    <p class="text-center"><span class="search-text-bg"><?php echo _e("Search","wordpressgeek");?></span></p>
                    <?php get_search_form( ); ?>
                    <!-- <form action="https://stories.botble.com/search" class="search-header">
                        <div class="input-group w-100">
                            <input type="text" name="q" class="form-control"
                                placeholder="Search stories, places and people">
                            <div class="input-group-append">
                                <button class="btn btn-search bg-white" type="submit">
                                    <i class="elegant-icon icon_search"></i>
                                </button>
                            </div>
                        </div>
                    </form> -->
                </div>

            </div>
        </div>
    </div>
</div>
