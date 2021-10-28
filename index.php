<?php
get_header();

?>
<main style="transform: none;">
    <div class="container" style="transform: none;">
        <div class="archive-header pt-50">

            <h2 class="font-weight-900"><?php echo _e("Blog"."wordpressgeek"); ?></h2>
            <div class="breadcrumb">
                <a href="index.html"><?php echo _e("Home"."wordpressgeek"); ?></a><span></span>
                <?php echo _e("Blog"."wordpressgeek"); ?>
            </div>
            <div class="bt-1 border-color-1 mt-30 mb-50"></div>
        </div>
        <div class="row" style="transform: none;">
            <div class="col-lg-8">
                <div class="loop-list loop-list-style-1">
                    <div class="row">

                        <?php
if(have_posts()){
    while(have_posts(  )){
        the_post();
        get_template_part('template-parts/content','archive' );

}
}?>
                    </div>
                </div>
                <!-- paggination div -->
                <div class="pagination-area mb-30 wow fadeInUp  justify-content-start animated"
                    style="visibility: visible; animation-name: fadeInUp;">
                    <nav>
                        <ul class="pagination">

                            <?php kriesi_pagination();?>
                            <!-- <li class="page-item disabled" aria-disabled="true" aria-label="« Previous">
                                <span class="page-link" aria-hidden="true">‹</span>
                            </li>
                            <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                            <li class="page-item"><a class="page-link" href="blog4658.html?page=2">2</a></li>
                            <li class="page-item">
                                <a class="page-link" href="blog4658.html?page=2" rel="next" aria-label="Next »">›</a>
                            </li> -->
                        </ul>
                    </nav>
                </div>

            </div>

            <div class="col-lg-4 primary-sidebar sticky-sidebar"
                style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
                <div class="theiaStickySidebar"
                    style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none; top: 0px; left: 1156.5px;">
                    <div class="sidebar-widget widget-about mb-50 pt-30 pr-30 pb-30 pl-30 bg-white border-radius-5 has-border  wow fadeInUp  animated"
                        style="visibility: visible; animation-name: fadeInUp;">
                        <img class="about-author-img mb-25" src="storage/general/author.jpg" alt="Hello, I'm Steven">
                        <h5 class="mb-20">Hello, I'm Steven</h5>
                        <p class="font-medium text-muted">Hi, I’m Steven, a Florida native, who left my career in
                            corporate wealth management six years ago to embark on a summer of soul searching that would
                            change the course of my life forever.</p>
                        <strong>Follow me: </strong>
                        <ul class="header-social-network d-inline-block list-inline color-white mb-20">
                            <li class="list-inline-item"><a style="background: #3b5999" href="https://facebook.com/"
                                    target="_blank" title="Facebook"><i class="elegant-icon social_facebook"></i></a>
                            </li>
                            <li class="list-inline-item"><a style="background: #55ACF9" href="https://twitter.com/"
                                    target="_blank" title="Twitter"><i class="elegant-icon social_twitter"></i></a></li>
                            <li class="list-inline-item"><a style="background: #0a66c2" href="https://linkedin.com/"
                                    target="_blank" title="Linkedin"><i class="elegant-icon social_linkedin"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="post-block-list post-module-1">
                        <ul class="list-post">
                            <?php
                                        dynamic_sidebar( 'sidebar-1' );
                                    ?>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
</main>

<?php
get_footer( );

?>