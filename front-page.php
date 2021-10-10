<?php
get_header( );
?>



<main>
    <div>
        <div class="featured-slider-2">
            <div class="featured-slider-2-items">
<!-- =========================== -->

<?php
$args  = array(
    'posts_per_page'  => 5,
    'offset'          => 0,
    'category'        => 1,
    'orderby'         => 'post_date',
    'order'           => 'ASC',
    'post_type'       => 'post',
    'post_status'     => 'publish',
    'suppress_filters' => true ); 
$posts = get_posts($args);
    foreach ($posts as $post) :
    $permalink=get_category_link( get_the_category($post->ID)[0]->cat_ID );
        
    ?>
    
       <div class="slider-single">
                    <div class="post-thumb position-relative">
                        <div class="thumb-overlay position-relative" style="background-image: url(<?php  echo the_post_thumbnail_url($post->ID); ?>)">
                            <div class="post-content-overlay">
                                <div class="container">
                                    <div class="entry-meta meta-0 font-small mb-20">
                                        <a href="<?php echo  $permalink; ?>" tabindex="0"><span class="post-cat text-warning text-uppercase">
                                            <?php echo get_the_category($post->ID)[0]->name; ?></span></a>
                                        <span class="post-cat text-info text-uppercase"><?php echo $post->comment_count.'Review';?></span>
                                    </div>
                                    <h1 class="post-title mb-20 font-weight-900 text-white">
                                        <a class="text-white" href=" <?php echo post_permalink() ?>"><?php echo the_title();?></a>
                                    </h1>
                                    <div class="entry-meta meta-1 font-small text-white mt-10 pr-5 pl-5">
                                        
                                        <span class="hit-count has-dot"><?php echo gt_get_post_view(); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    <?php endforeach; ?>

              
<!-- =========================== -->
                </div>
            </div>
            <div class="container position-relative">
                <div class="arrow-cover color-white"></div>
                <div class="featured-slider-2-nav-cover">
                    <div class="featured-slider-2-nav">
 <!-- =========================== -->
 <?php
 $args  = array(
    'posts_per_page'  => 5,
    'offset'          => 0,
    'category'        => 1,
    'orderby'         => 'post_date',
    'order'           => 'ASC',
    'post_type'       => 'post',
    'post_status'     => 'publish',
    'suppress_filters' => true ); 
$posts = get_posts($args);
    foreach ($posts as $post) :
    ?>
     <div class="slider-post-thumb mr-15 mt-20 position-relative">
                            <div class="d-flex hover-up-2 transition-normal">
                                <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5">
                                    <img class="border-radius-5" src="<?php  echo the_post_thumbnail_url($post->ID,'custopm-thumbnail'); ?>"alt="The Top 2020 Handbag Trends to Know">
                                </div>
                                <div class="post-content media-body text-white">
                                    <h5 class="post-title mb-15 text-limit-2-row"><?php echo the_title();?></h5>
                                    <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                        <span class="post-on text-white"><?php echo get_post_time(get_option( 'date_format' ) , false, $post, true ); ?></span>
                                        <span class="hit-count has-dot text-white"><?php echo gt_get_post_view(); ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>

        <?php endforeach; ?>
                       
<!-- =========================== -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="bg-grey pt-50 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="post-module-2">
                            <div class="widget-header-1 position-relative mb-30  wow fadeInUp animated">
                                <h5 class="mt-5 mb-30">توسعه دهنده</h5>
                            </div>
                            <div class="loop-list loop-list-style-1">
                                <div class="row">
<!-- =========================== -->
<?php
 $args  = array(
    'posts_per_page'  => 4,
    'offset'          => 5,
    'category'        => 1,
    'orderby'         => 'post_date',
    'order'           => 'ASC',
    'post_type'       => 'post',
    'post_status'     => 'publish',
    'suppress_filters' => true ); 
$posts = get_posts($args);
    foreach ($posts as $post) :
    ?>

                                    <article class="col-md-6 mb-40 wow fadeInUp  animated">
                                        <div class="post-card-1 border-radius-10 hover-up">
                                            <div class="post-card-1 border-radius-10 hover-up">
                                                <div class="post-thumb thumb-overlay img-hover-slide position-relative"
                                                    style="background-image: url(storage/news/10.jpg)">
                                                    <a class="img-link"
                                                        href="<?php echo post_permalink() ?>"></a>
                                                    <ul class="social-share">
                                                        <li><a href="#"><i class="elegant-icon social_share"></i></a>
                                                        </li>
                                                        <li><a class="fb"
                                                                href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fstories.botble.com%2F10-reasons-to-start-your-own-profitable-website&amp;title=Debitis%20quasi%20non%20ex%20exercitationem%20autem.%20Quae%20facilis%20consequatur%20porro%20maiores.%20Repellat%20officiis%20sunt%20eveniet%20commodi%20ipsa%20dolores%20ea.%20Aspernatur%20velit%20aut%20commodi%20iste%20sit."
                                                                title="Share on Facebook" target="_blank"><i
                                                                    class="elegant-icon social_facebook"></i></a></li>
                                                        <li><a class="tw"
                                                                href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fstories.botble.com%2F10-reasons-to-start-your-own-profitable-website&amp;text=Debitis%20quasi%20non%20ex%20exercitationem%20autem.%20Quae%20facilis%20consequatur%20porro%20maiores.%20Repellat%20officiis%20sunt%20eveniet%20commodi%20ipsa%20dolores%20ea.%20Aspernatur%20velit%20aut%20commodi%20iste%20sit."
                                                                target="_blank" title="Tweet now"><i
                                                                    class="elegant-icon social_twitter"></i></a></li>
                                                        <li><a class="pt"
                                                                href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https%3A%2F%2Fstories.botble.com%2F10-reasons-to-start-your-own-profitable-website&amp;summary=Debitis%20quasi%20non%20ex%20exercitationem%20autem.%20Quae%20facilis%20consequatur%20porro%20maiores.%20Repellat%20officiis%20sunt%20eveniet%20commodi%20ipsa%20dolores%20ea.%20Aspernatur%20velit%20aut%20commodi%20iste%20sit."
                                                                target="_blank" title="Share on Linkedin"><i
                                                                    class="elegant-icon social_linkedin"></i></a></li>
                                                    </ul>
                                                </div>
                                                <div class="post-content p-30">
                                                    <div class="entry-meta meta-0 font-small mb-10">
                                                        <a href="food.html"><span
                                                                class="post-cat text-success"><?php echo get_the_category($post->ID)[0]->name; ?></span></a>
                                                    </div>
                                                    <div class="d-flex post-card-content">
                                                        <h5 class="post-title mb-20 font-weight-900">
                                                            <a
                                                                href="<?php echo post_permalink() ?>"><?php echo the_title();?></a>
                                                        </h5>
                                                        <div
                                                            class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                            <span class="post-on"><?php echo get_post_time(get_option( 'date_format' ) , false, $post, true ); ?></span>
                                                            <!-- <span class="time-reading has-dot">12 mins read</span> -->
                                                            <span class="post-by has-dot"><?php echo gt_get_post_view(); ?></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
       <?php endforeach; ?>
<!-- =========================== -->
                                </div>
                            </div>
                        </div>
                        <div class="post-module-3">
                            <div class="widget-header-1 position-relative mb-30">
                                <h5 class="mt-5 mb-30">Latest posts</h5>
                            </div>
                            <div class="loop-list loop-list-style-1">
                                <article class="hover-up-2 transition-normal wow fadeInUp animated">
                                    <div class="row mb-40 list-style-2">
                                        <div class="col-md-4">
                                            <div class="post-thumb position-relative border-radius-5">
                                                <div class="img-hover-slide border-radius-5 position-relative"
                                                    style="background-image: url(storage/news/1.jpg)">
                                                    <a class="img-link"
                                                        href="the-top-2020-handbag-trends-to-know.html"></a>
                                                </div>
                                                <ul class="social-share">
                                                    <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                                    <li><a class="fb"
                                                            href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fstories.botble.com%2Fthe-top-2020-handbag-trends-to-know&amp;title=Eligendi%20ut%20et%20quia%20deleniti%20voluptatem%20hic.%20Laborum%20possimus%20quaerat%20corporis%20dolores.%20Repellendus%20excepturi%20temporibus%20enim%20voluptatem%20error.%20Et%20voluptas%20dolor%20vel%20hic."
                                                            title="Share on Facebook" target="_blank"><i
                                                                class="elegant-icon social_facebook"></i></a></li>
                                                    <li><a class="tw"
                                                            href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fstories.botble.com%2Fthe-top-2020-handbag-trends-to-know&amp;text=Eligendi%20ut%20et%20quia%20deleniti%20voluptatem%20hic.%20Laborum%20possimus%20quaerat%20corporis%20dolores.%20Repellendus%20excepturi%20temporibus%20enim%20voluptatem%20error.%20Et%20voluptas%20dolor%20vel%20hic."
                                                            target="_blank" title="Tweet now"><i
                                                                class="elegant-icon social_twitter"></i></a></li>
                                                    <li><a class="pt"
                                                            href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https%3A%2F%2Fstories.botble.com%2Fthe-top-2020-handbag-trends-to-know&amp;summary=Eligendi%20ut%20et%20quia%20deleniti%20voluptatem%20hic.%20Laborum%20possimus%20quaerat%20corporis%20dolores.%20Repellendus%20excepturi%20temporibus%20enim%20voluptatem%20error.%20Et%20voluptas%20dolor%20vel%20hic."
                                                            target="_blank" title="Share on Linkedin"><i
                                                                class="elegant-icon social_linkedin"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-8 align-self-center">
                                            <div class="post-content">
                                                <div class="entry-meta meta-0 font-small mb-10">
                                                    <a href="guides.html"><span
                                                            class="post-cat text-primary">Guides</span></a>
                                                </div>
                                                <h5 class="post-title font-weight-900 mb-20">
                                                    <a href="the-top-2020-handbag-trends-to-know.html">The Top 2020
                                                        Handbag Trends to Know</a>
                                                    <span class="post-format-icon"><i
                                                            class="elegant-icon icon_star_alt"></i></span>
                                                </h5>
                                                <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                    <span class="post-on">Aug 08, 2021</span>
                                                    <span class="time-reading has-dot">12 mins read</span>
                                                    <span class="post-by has-dot">714 views</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="hover-up-2 transition-normal wow fadeInUp animated">
                                    <div class="row mb-40 list-style-2">
                                        <div class="col-md-4">
                                            <div class="post-thumb position-relative border-radius-5">
                                                <div class="img-hover-slide border-radius-5 position-relative"
                                                    style="background-image: url(storage/news/2.jpg)">
                                                    <a class="img-link"
                                                        href="top-search-engine-optimization-strategies.html"></a>
                                                </div>
                                                <ul class="social-share">
                                                    <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                                    <li><a class="fb"
                                                            href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fstories.botble.com%2Ftop-search-engine-optimization-strategies&amp;title=Corporis%20alias%20totam%20odit%20quo%20ut.%20Laboriosam%20omnis%20sed%20sed%20eveniet%20quo%20illum%20fugiat%20odit.%20Ullam%20at%20adipisci%20enim%20iusto.%20Rem%20enim%20est%20dolor%20fugit%20impedit."
                                                            title="Share on Facebook" target="_blank"><i
                                                                class="elegant-icon social_facebook"></i></a></li>
                                                    <li><a class="tw"
                                                            href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fstories.botble.com%2Ftop-search-engine-optimization-strategies&amp;text=Corporis%20alias%20totam%20odit%20quo%20ut.%20Laboriosam%20omnis%20sed%20sed%20eveniet%20quo%20illum%20fugiat%20odit.%20Ullam%20at%20adipisci%20enim%20iusto.%20Rem%20enim%20est%20dolor%20fugit%20impedit."
                                                            target="_blank" title="Tweet now"><i
                                                                class="elegant-icon social_twitter"></i></a></li>
                                                    <li><a class="pt"
                                                            href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https%3A%2F%2Fstories.botble.com%2Ftop-search-engine-optimization-strategies&amp;summary=Corporis%20alias%20totam%20odit%20quo%20ut.%20Laboriosam%20omnis%20sed%20sed%20eveniet%20quo%20illum%20fugiat%20odit.%20Ullam%20at%20adipisci%20enim%20iusto.%20Rem%20enim%20est%20dolor%20fugit%20impedit."
                                                            target="_blank" title="Share on Linkedin"><i
                                                                class="elegant-icon social_linkedin"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-8 align-self-center">
                                            <div class="post-content">
                                                <div class="entry-meta meta-0 font-small mb-10">
                                                    <a href="guides.html"><span
                                                            class="post-cat text-success">Guides</span></a>
                                                </div>
                                                <h5 class="post-title font-weight-900 mb-20">
                                                    <a href="top-search-engine-optimization-strategies.html">Top Search
                                                        Engine Optimization Strategies!</a>
                                                    <span class="post-format-icon"><i
                                                            class="elegant-icon icon_star_alt"></i></span>
                                                </h5>
                                                <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                    <span class="post-on">Aug 08, 2021</span>
                                                    <span class="time-reading has-dot">12 mins read</span>
                                                    <span class="post-by has-dot">2,312 views</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                                <article class="hover-up-2 transition-normal wow fadeInUp animated">
                                    <div class="row mb-40 list-style-2">
                                        <div class="col-md-4">
                                            <div class="post-thumb position-relative border-radius-5">
                                                <div class="img-hover-slide border-radius-5 position-relative"
                                                    style="background-image: url(storage/news/4.jpg)">
                                                    <a class="img-link"
                                                        href="used-car-dealer-sales-tricks-exposed.html"></a>
                                                </div>
                                                <ul class="social-share">
                                                    <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                                    <li><a class="fb"
                                                            href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fstories.botble.com%2Fused-car-dealer-sales-tricks-exposed&amp;title=Nisi%20similique%20eum%20ut%20et%20maiores%20rerum%20occaecati.%20Quia%20beatae%20tenetur%20et%20qui%20facilis%20facere.%20Quas%20modi%20est%20similique%20nulla."
                                                            title="Share on Facebook" target="_blank"><i
                                                                class="elegant-icon social_facebook"></i></a></li>
                                                    <li><a class="tw"
                                                            href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fstories.botble.com%2Fused-car-dealer-sales-tricks-exposed&amp;text=Nisi%20similique%20eum%20ut%20et%20maiores%20rerum%20occaecati.%20Quia%20beatae%20tenetur%20et%20qui%20facilis%20facere.%20Quas%20modi%20est%20similique%20nulla."
                                                            target="_blank" title="Tweet now"><i
                                                                class="elegant-icon social_twitter"></i></a></li>
                                                    <li><a class="pt"
                                                            href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https%3A%2F%2Fstories.botble.com%2Fused-car-dealer-sales-tricks-exposed&amp;summary=Nisi%20similique%20eum%20ut%20et%20maiores%20rerum%20occaecati.%20Quia%20beatae%20tenetur%20et%20qui%20facilis%20facere.%20Quas%20modi%20est%20similique%20nulla."
                                                            target="_blank" title="Share on Linkedin"><i
                                                                class="elegant-icon social_linkedin"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-8 align-self-center">
                                            <div class="post-content">
                                                <div class="entry-meta meta-0 font-small mb-10">
                                                    <a href="uncategorized.html"><span
                                                            class="post-cat text-success">Uncategorized</span></a>
                                                </div>
                                                <h5 class="post-title font-weight-900 mb-20">
                                                    <a href="used-car-dealer-sales-tricks-exposed.html">Used Car Dealer
                                                        Sales Tricks Exposed</a>
                                                    <span class="post-format-icon"><i
                                                            class="elegant-icon icon_star_alt"></i></span>
                                                </h5>
                                                <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                    <span class="post-on">Aug 08, 2021</span>
                                                    <span class="time-reading has-dot">12 mins read</span>
                                                    <span class="post-by has-dot">169 views</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </article>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="widget-area">
                            <div
                                class="sidebar-widget widget-about mb-50 pt-30 pr-30 pb-30 pl-30 bg-white border-radius-5 has-border  wow fadeInUp animated">
                                <img class="about-author-img mb-25" src="storage/general/author.jpg"
                                    alt="Hello, I&#039;m Steven">
                                <h5 class="mb-20">Hello, I&#039;m Steven</h5>
                                <p class="font-medium text-muted">Hi, I’m Steven, a Florida native, who left my career
                                    in corporate wealth management six years ago to embark on a summer of soul searching
                                    that would change the course of my life forever.</p>
                                <strong>Follow me: </strong>
                                <ul class="header-social-network d-inline-block list-inline color-white mb-20">
                                    <li class="list-inline-item"><a style="background: #3b5999"
                                            href="https://facebook.com/" target="_blank" title="Facebook"><i
                                                class="elegant-icon social_facebook"></i></a></li>
                                    <li class="list-inline-item"><a style="background: #55ACF9"
                                            href="https://twitter.com/" target="_blank" title="Twitter"><i
                                                class="elegant-icon social_twitter"></i></a></li>
                                    <li class="list-inline-item"><a style="background: #0a66c2"
                                            href="https://linkedin.com/" target="_blank" title="Linkedin"><i
                                                class="elegant-icon social_linkedin"></i></a></li>
                                </ul>
                            </div>
                            <div class="sidebar-widget widget-latest-posts mb-50 wow fadeInUp animated">
                                <div class="widget-header-1 position-relative mb-30">
                                    <h5 class="mt-5 mb-30">Most popular</h5>
                                </div>
                                <div class="post-block-list post-module-1">
                                    <ul class="list-post">
                                        <li class="mb-30 wow fadeInUp animated">
                                            <div
                                                class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5">
                                                <div class="post-content media-body">
                                                    <h6 class="post-title mb-15 text-limit-2-row font-medium"><a
                                                            href="imagine-losing-20-pounds-in-14-days.html">Imagine
                                                            Losing 20 Pounds In 14 Days!</a></h6>
                                                    <div
                                                        class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                        <span class="post-on">Aug 08, 2021</span>
                                                        <span class="post-by has-dot">2,486 views</span>
                                                    </div>
                                                </div>
                                                <div
                                                    class="post-thumb post-thumb-80 d-flex ml-15 border-radius-5 img-hover-scale overflow-hidden">
                                                    <a class="color-white"
                                                        href="imagine-losing-20-pounds-in-14-days.html">
                                                        <img src="storage/news/7-150x150.jpg"
                                                            alt="Imagine Losing 20 Pounds In 14 Days!">
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mb-30 wow fadeInUp animated">
                                            <div
                                                class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5">
                                                <div class="post-content media-body">
                                                    <h6 class="post-title mb-15 text-limit-2-row font-medium"><a
                                                            href="4-expert-tips-on-how-to-choose-the-right-mens-wallet.html">4
                                                            Expert Tips On How To Choose The Right Men’s Wallet</a></h6>
                                                    <div
                                                        class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                        <span class="post-on">Aug 08, 2021</span>
                                                        <span class="post-by has-dot">2,486 views</span>
                                                    </div>
                                                </div>
                                                <div
                                                    class="post-thumb post-thumb-80 d-flex ml-15 border-radius-5 img-hover-scale overflow-hidden">
                                                    <a class="color-white"
                                                        href="4-expert-tips-on-how-to-choose-the-right-mens-wallet.html">
                                                        <img src="storage/news/15-150x150.jpg"
                                                            alt="4 Expert Tips On How To Choose The Right Men’s Wallet">
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mb-30 wow fadeInUp animated">
                                            <div
                                                class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5">
                                                <div class="post-content media-body">
                                                    <h6 class="post-title mb-15 text-limit-2-row font-medium"><a
                                                            href="top-search-engine-optimization-strategies.html">Top
                                                            Search Engine Optimization Strategies!</a></h6>
                                                    <div
                                                        class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                        <span class="post-on">Aug 08, 2021</span>
                                                        <span class="post-by has-dot">2,312 views</span>
                                                    </div>
                                                </div>
                                                <div
                                                    class="post-thumb post-thumb-80 d-flex ml-15 border-radius-5 img-hover-scale overflow-hidden">
                                                    <a class="color-white"
                                                        href="top-search-engine-optimization-strategies.html">
                                                        <img src="storage/news/2-150x150.jpg"
                                                            alt="Top Search Engine Optimization Strategies!">
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mb-30 wow fadeInUp animated">
                                            <div
                                                class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5">
                                                <div class="post-content media-body">
                                                    <h6 class="post-title mb-15 text-limit-2-row font-medium"><a
                                                            href="10000-web-site-visitors-in-one-monthguaranteed.html">10,000
                                                            Web Site Visitors In One Month:Guaranteed</a></h6>
                                                    <div
                                                        class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                        <span class="post-on">Aug 08, 2021</span>
                                                        <span class="post-by has-dot">2,086 views</span>
                                                    </div>
                                                </div>
                                                <div
                                                    class="post-thumb post-thumb-80 d-flex ml-15 border-radius-5 img-hover-scale overflow-hidden">
                                                    <a class="color-white"
                                                        href="10000-web-site-visitors-in-one-monthguaranteed.html">
                                                        <img src="storage/news/13-150x150.jpg"
                                                            alt="10,000 Web Site Visitors In One Month:Guaranteed">
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="mb-30 wow fadeInUp animated">
                                            <div
                                                class="d-flex bg-white has-border p-25 hover-up transition-normal border-radius-5">
                                                <div class="post-content media-body">
                                                    <h6 class="post-title mb-15 text-limit-2-row font-medium"><a
                                                            href="simple-ways-to-reduce-your-unwanted-wrinkles.html">Simple
                                                            Ways To Reduce Your Unwanted Wrinkles!</a></h6>
                                                    <div
                                                        class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                        <span class="post-on">Aug 08, 2021</span>
                                                        <span class="post-by has-dot">1,995 views</span>
                                                    </div>
                                                </div>
                                                <div
                                                    class="post-thumb post-thumb-80 d-flex ml-15 border-radius-5 img-hover-scale overflow-hidden">
                                                    <a class="color-white"
                                                        href="simple-ways-to-reduce-your-unwanted-wrinkles.html">
                                                        <img src="storage/news/11-150x150.jpg"
                                                            alt="Simple Ways To Reduce Your Unwanted Wrinkles!">
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-widget widget_instagram wow fadeInUp animated">
                                <div class="widget-header-1 position-relative mb-30">
                                    <h5 class="mt-5 mb-30">Galleries</h5>
                                </div>
                                <div class="instagram-gellay">
                                    <ul class="insta-feed">
                                        <li>
                                            <a href="galleries/perfect.html" data-animate="zoomIn" data-duration="1.5s"
                                                data-delay="0.1s"><img class="border-radius-5"
                                                    src="storage/galleries/1-150x150.jpg" alt="Perfect"></a>
                                        </li>
                                        <li>
                                            <a href="galleries/new-day.html" data-animate="zoomIn" data-duration="1.5s"
                                                data-delay="0.1s"><img class="border-radius-5"
                                                    src="storage/galleries/2-150x150.jpg" alt="New Day"></a>
                                        </li>
                                        <li>
                                            <a href="galleries/happy-day.html" data-animate="zoomIn"
                                                data-duration="1.5s" data-delay="0.1s"><img class="border-radius-5"
                                                    src="storage/galleries/3-150x150.jpg" alt="Happy Day"></a>
                                        </li>
                                        <li>
                                            <a href="galleries/nature.html" data-animate="zoomIn" data-duration="1.5s"
                                                data-delay="0.1s"><img class="border-radius-5"
                                                    src="storage/galleries/4-150x150.jpg" alt="Nature"></a>
                                        </li>
                                        <li>
                                            <a href="galleries/morning.html" data-animate="zoomIn" data-duration="1.5s"
                                                data-delay="0.1s"><img class="border-radius-5"
                                                    src="storage/galleries/5-150x150.jpg" alt="Morning"></a>
                                        </li>
                                        <li>
                                            <a href="galleries/photography.html" data-animate="zoomIn"
                                                data-duration="1.5s" data-delay="0.1s"><img class="border-radius-5"
                                                    src="storage/galleries/6-150x150.jpg" alt="Photography"></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="site-bottom pt-50 pb-50">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-3">
                        <div class="sidebar-widget widget-latest-posts mb-30 wow fadeInUp  animated"
                            style="visibility: visible; animation-name: fadeInUp;">
                            <div class="widget-header-2 position-relative mb-30">
                                <h5 class="mt-5 mb-30">Guides</h5>
                            </div>
                            <div class="post-block-list post-module-1">
                                <ul class="list-post">
                                    <li class="mb-30">
                                        <div class="d-flex hover-up-2 transition-normal">
                                            <div
                                                class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                                <a class="color-white" href="the-top-2020-handbag-trends-to-know.html">
                                                    <img src="storage/news/1.jpg"
                                                        alt="The Top 2020 Handbag Trends to Know">
                                                </a>
                                            </div>
                                            <div class="post-content media-body">
                                                <h6 class="post-title mb-15 text-limit-2-row font-medium"><a
                                                        href="the-top-2020-handbag-trends-to-know.html">The Top 2020
                                                        Handbag Trends to Know</a></h6>
                                                <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                    <span class="post-on">Aug 08, 2021</span>
                                                    <span class="post-by has-dot">714 views</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-30">
                                        <div class="d-flex hover-up-2 transition-normal">
                                            <div
                                                class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                                <a class="color-white"
                                                    href="top-search-engine-optimization-strategies.html">
                                                    <img src="storage/news/2.jpg"
                                                        alt="Top Search Engine Optimization Strategies!">
                                                </a>
                                            </div>
                                            <div class="post-content media-body">
                                                <h6 class="post-title mb-15 text-limit-2-row font-medium"><a
                                                        href="top-search-engine-optimization-strategies.html">Top Search
                                                        Engine Optimization Strategies!</a></h6>
                                                <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                    <span class="post-on">Aug 08, 2021</span>
                                                    <span class="post-by has-dot">2,312 views</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-30">
                                        <div class="d-flex hover-up-2 transition-normal">
                                            <div
                                                class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                                <a class="color-white"
                                                    href="unlock-the-secrets-of-selling-high-ticket-items.html">
                                                    <img src="storage/news/14.jpg"
                                                        alt="Unlock The Secrets Of Selling High Ticket Items">
                                                </a>
                                            </div>
                                            <div class="post-content media-body">
                                                <h6 class="post-title mb-15 text-limit-2-row font-medium"><a
                                                        href="unlock-the-secrets-of-selling-high-ticket-items.html">Unlock
                                                        The Secrets Of Selling High Ticket Items</a></h6>
                                                <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                    <span class="post-on">Aug 08, 2021</span>
                                                    <span class="post-by has-dot">293 views</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-3">
                        <div class="sidebar-widget widget-latest-posts mb-30 wow fadeInUp  animated"
                            style="visibility: visible; animation-name: fadeInUp;">
                            <div class="widget-header-2 position-relative mb-30">
                                <h5 class="mt-5 mb-30">Destination</h5>
                            </div>
                            <div class="post-block-list post-module-1">
                                <ul class="list-post">
                                    <li class="mb-30">
                                        <div class="d-flex hover-up-2 transition-normal">
                                            <div
                                                class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                                <a class="color-white"
                                                    href="simple-ways-to-reduce-your-unwanted-wrinkles.html">
                                                    <img src="storage/news/11.jpg"
                                                        alt="Simple Ways To Reduce Your Unwanted Wrinkles!">
                                                </a>
                                            </div>
                                            <div class="post-content media-body">
                                                <h6 class="post-title mb-15 text-limit-2-row font-medium"><a
                                                        href="simple-ways-to-reduce-your-unwanted-wrinkles.html">Simple
                                                        Ways To Reduce Your Unwanted Wrinkles!</a></h6>
                                                <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                    <span class="post-on">Aug 08, 2021</span>
                                                    <span class="post-by has-dot">1,995 views</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-30">
                                        <div class="d-flex hover-up-2 transition-normal">
                                            <div
                                                class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                                <a class="color-white"
                                                    href="apple-imac-with-retina-5k-display-review.html">
                                                    <img src="storage/news/12.jpg"
                                                        alt="Apple iMac with Retina 5K display review">
                                                </a>
                                            </div>
                                            <div class="post-content media-body">
                                                <h6 class="post-title mb-15 text-limit-2-row font-medium"><a
                                                        href="apple-imac-with-retina-5k-display-review.html">Apple iMac
                                                        with Retina 5K display review</a></h6>
                                                <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                    <span class="post-on">Aug 08, 2021</span>
                                                    <span class="post-by has-dot">1,525 views</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-30">
                                        <div class="d-flex hover-up-2 transition-normal">
                                            <div
                                                class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                                <a class="color-white"
                                                    href="10000-web-site-visitors-in-one-monthguaranteed.html">
                                                    <img src="storage/news/13.jpg"
                                                        alt="10,000 Web Site Visitors In One Month:Guaranteed">
                                                </a>
                                            </div>
                                            <div class="post-content media-body">
                                                <h6 class="post-title mb-15 text-limit-2-row font-medium"><a
                                                        href="10000-web-site-visitors-in-one-monthguaranteed.html">10,000
                                                        Web Site Visitors In One Month:Guaranteed</a></h6>
                                                <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                    <span class="post-on">Aug 08, 2021</span>
                                                    <span class="post-by has-dot">2,086 views</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-3">
                        <div class="sidebar-widget widget-latest-posts mb-30 wow fadeInUp  animated"
                            style="visibility: visible; animation-name: fadeInUp;">
                            <div class="widget-header-2 position-relative mb-30">
                                <h5 class="mt-5 mb-30">Food</h5>
                            </div>
                            <div class="post-block-list post-module-1">
                                <ul class="list-post">
                                    <li class="mb-30">
                                        <div class="d-flex hover-up-2 transition-normal">
                                            <div
                                                class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                                <a class="color-white"
                                                    href="10-reasons-to-start-your-own-profitable-website.html">
                                                    <img src="storage/news/10.jpg"
                                                        alt="10 Reasons To Start Your Own, Profitable Website!">
                                                </a>
                                            </div>
                                            <div class="post-content media-body">
                                                <h6 class="post-title mb-15 text-limit-2-row font-medium"><a
                                                        href="10-reasons-to-start-your-own-profitable-website.html">10
                                                        Reasons To Start Your Own, Profitable Website!</a></h6>
                                                <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                    <span class="post-on">Aug 08, 2021</span>
                                                    <span class="post-by has-dot">324 views</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-30">
                                        <div class="d-flex hover-up-2 transition-normal">
                                            <div
                                                class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                                <a class="color-white"
                                                    href="10000-web-site-visitors-in-one-monthguaranteed.html">
                                                    <img src="storage/news/13.jpg"
                                                        alt="10,000 Web Site Visitors In One Month:Guaranteed">
                                                </a>
                                            </div>
                                            <div class="post-content media-body">
                                                <h6 class="post-title mb-15 text-limit-2-row font-medium"><a
                                                        href="10000-web-site-visitors-in-one-monthguaranteed.html">10,000
                                                        Web Site Visitors In One Month:Guaranteed</a></h6>
                                                <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                    <span class="post-on">Aug 08, 2021</span>
                                                    <span class="post-by has-dot">2,086 views</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="mb-30">
                                        <div class="d-flex hover-up-2 transition-normal">
                                            <div
                                                class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                                <a class="color-white"
                                                    href="simple-ways-to-reduce-your-unwanted-wrinkles.html">
                                                    <img src="storage/news/11.jpg"
                                                        alt="Simple Ways To Reduce Your Unwanted Wrinkles!">
                                                </a>
                                            </div>
                                            <div class="post-content media-body">
                                                <h6 class="post-title mb-15 text-limit-2-row font-medium"><a
                                                        href="simple-ways-to-reduce-your-unwanted-wrinkles.html">Simple
                                                        Ways To Reduce Your Unwanted Wrinkles!</a></h6>
                                                <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                    <span class="post-on">Aug 08, 2021</span>
                                                    <span class="post-by has-dot">1,995 views</span>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div>
        <div class="site-bottom pt-50 pb-50">
            <div class="container">
                <div class="sidebar-widget widget-latest-posts mb-30 mt-20 wow fadeInUp animated">
                    <div class="widget-header-2 position-relative mb-30">
                        <h5 class="mt-5 mb-30">Categories</h5>
                    </div>
                    <div class="carausel-3-columns">
                        <div
                            class="carausel-3-columns-item d-flex bg-grey has-border p-25 hover-up-2 transition-normal border-radius-5">
                            <div
                                class="post-thumb post-thumb-64 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                <a class="color-white" href="travel.html">
                                    <img src="storage/categories/2-150x150.jpg" alt="Travel">
                                </a>
                            </div>
                            <div class="post-content media-body">
                                <h6> <a href="travel.html">Travel</a> </h6>
                                <p class="text-muted font-small">Aut nesciunt libero exercitationem. Sit sequi vel eaque
                                    facilis....</p>
                            </div>
                        </div>
                        <div
                            class="carausel-3-columns-item d-flex bg-grey has-border p-25 hover-up-2 transition-normal border-radius-5">
                            <div
                                class="post-thumb post-thumb-64 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                <a class="color-white" href="destination.html">
                                    <img src="storage/categories/3-150x150.jpg" alt="Destination">
                                </a>
                            </div>
                            <div class="post-content media-body">
                                <h6> <a href="destination.html">Destination</a> </h6>
                                <p class="text-muted font-small">Quas ut deleniti quod enim nihil nobis. Commodi et
                                    accusamus alia...</p>
                            </div>
                        </div>
                        <div
                            class="carausel-3-columns-item d-flex bg-grey has-border p-25 hover-up-2 transition-normal border-radius-5">
                            <div
                                class="post-thumb post-thumb-64 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                <a class="color-white" href="hotels.html">
                                    <img src="storage/categories/4-150x150.jpg" alt="Hotels">
                                </a>
                            </div>
                            <div class="post-content media-body">
                                <h6> <a href="hotels.html">Hotels</a> </h6>
                                <p class="text-muted font-small">Nihil libero dignissimos aut cupiditate molestiae minus
                                    eos. Quae...</p>
                            </div>
                        </div>
                        <div
                            class="carausel-3-columns-item d-flex bg-grey has-border p-25 hover-up-2 transition-normal border-radius-5">
                            <div
                                class="post-thumb post-thumb-64 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                <a class="color-white" href="healthy.html">
                                    <img src="storage/categories/5-150x150.jpg" alt="Healthy">
                                </a>
                            </div>
                            <div class="post-content media-body">
                                <h6> <a href="healthy.html">Healthy</a> </h6>
                                <p class="text-muted font-small">Officiis velit et quae eos. Molestiae qui soluta velit
                                    temporibus...</p>
                            </div>
                        </div>
                        <div
                            class="carausel-3-columns-item d-flex bg-grey has-border p-25 hover-up-2 transition-normal border-radius-5">
                            <div
                                class="post-thumb post-thumb-64 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                <a class="color-white" href="lifestyle.html">
                                    <img src="storage/categories/6-150x150.jpg" alt="Lifestyle">
                                </a>
                            </div>
                            <div class="post-content media-body">
                                <h6> <a href="lifestyle.html">Lifestyle</a> </h6>
                                <p class="text-muted font-small">Qui tempora aut omnis maxime ducimus inventore quam.
                                    Tempore numq...</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>





<div class="dark-mark"></div>
<?php
get_footer();
?>

<div class="js-cookie-consent cookie-consent cookie-consent-full-width"
    style="background-color: #000 !important; color: #fff !important;">
    <div class="cookie-consent-body" style="max-width: 1170px;">
        <span class="cookie-consent__message">
            Your experience on this site will be improved by allowing cookies
            <a href="cookie-policy.html">Cookie Policy</a>
        </span>
        <button class="js-cookie-consent-agree cookie-consent__agree"
            style="background-color: #000 !important; color: #fff !important; border: 1px solid #fff !important;">
            Allow cookies
        </button>
    </div>
</div>
<div data-site-cookie-name="cookie_for_consent"></div>
<div data-site-cookie-lifetime="7300"></div>
<div data-site-cookie-domain="stories.botble.com"></div>
<div data-site-session-secure=""></div>

</body>

</html>