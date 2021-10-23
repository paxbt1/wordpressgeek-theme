
<main>
    <main class="bg-grey pb-30">
        <div class="container single-content">

            <div class="entry-header entry-header-style-1 mb-50 pt-50">
                <div class="breadcrumb">
                    <?php the_breadcrumb();?>
                </div>
                <h1 class="entry-title mb-50 font-weight-900">
                    <?php the_title(); ?>
                </h1>

                <div class="row">
                    <div class="col-md-6">
                        <div class="entry-meta align-items-center meta-2 font-small color-muted">
                            <p class="mb-5">
                                <span class="author-avatar"><img class="img-circle"
                                        src="<?php echo get_avatar_url( get_the_author_ID()); ?>"
                                        alt="Steven Madden"></span>
                                <?php echo _e('By','wordpressgeek') ?> <span
                                    class="author-name font-weight-bold"><?php the_author_nickname(); ?></span>
                            </p>
                            <span class="mr-10"> <?php the_date(); ?></span>

                        </div>
                    </div>
                    <div class="col-md-6 text-right d-none d-md-inline">
                        <ul class="header-social-network d-inline-block list-inline mr-15">
                            <li class="list-inline-item text-muted"><span>Share this: </span></li>
                            <li class="list-inline-item"><a class="social-icon fb text-xs-center" target="_blank"
                                    href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fstories.botble.com%2F20-ways-to-sell-your-product-faster&amp;title=Qui hic est sint. Minima accusantium dolor eius quo. Et soluta culpa id ipsum delectus quia. Rerum aliquid qui eaque et non et. Iure et eum ab vel fugiat iste."><i
                                        class="elegant-icon social_facebook"></i></a></li>
                            <li class="list-inline-item"><a class="social-icon tw text-xs-center" target="_blank"
                                    href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fstories.botble.com%2F20-ways-to-sell-your-product-faster&amp;text=Qui hic est sint. Minima accusantium dolor eius quo. Et soluta culpa id ipsum delectus quia. Rerum aliquid qui eaque et non et. Iure et eum ab vel fugiat iste."><i
                                        class="elegant-icon social_twitter"></i></a></li>
                            <li class="list-inline-item"><a class="social-icon pt text-xs-center" target="_blank"
                                    href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https%3A%2F%2Fstories.botble.com%2F20-ways-to-sell-your-product-faster&amp;summary=Qui hic est sint. Minima accusantium dolor eius quo. Et soluta culpa id ipsum delectus quia. Rerum aliquid qui eaque et non et. Iure et eum ab vel fugiat iste."><i
                                        class="elegant-icon social_linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <figure class="image mb-30 m-auto text-center border-radius-10">
                <img class="border-radius-10" src="<?php echo get_the_post_thumbnail_url(); ?>"
                    alt="20 Ways To Sell Your Product Faster">
            </figure>

            <article class="entry-wraper mb-50">
                <div>

                    <?php the_content();?>

                    <div class="facebook-comment">
                        <div class="fb-comments"
                            data-href="https://stories.botble.com/20-ways-to-sell-your-product-faster" data-numposts="5"
                            data-width="100%"></div>
                    </div>
                </div>
                <div class="entry-bottom mt-50 mb-30 wow fadeIn  animated"
                    style="visibility: hidden; animation-name: none;">
                    <div class="tags">

                        <?php
        the_tags( '<span>'._e('Tags').': ', '', '</span>' );
?>

                    </div>
                </div>
                <div class="single-social-share clearfix wow fadeIn  animated"
                    style="visibility: hidden; animation-name: none;">
                    <ul class="header-social-network d-inline-block list-inline float-md-right mt-md-0 mt-4">
                        <li class="list-inline-item text-muted"><span>Share this: </span></li>
                        <li class="list-inline-item"><a class="social-icon fb text-xs-center" target="_blank"
                                href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fstories.botble.com%2F20-ways-to-sell-your-product-faster&amp;title=Qui hic est sint. Minima accusantium dolor eius quo. Et soluta culpa id ipsum delectus quia. Rerum aliquid qui eaque et non et. Iure et eum ab vel fugiat iste."><i
                                    class="elegant-icon social_facebook"></i></a></li>
                        <li class="list-inline-item"><a class="social-icon tw text-xs-center" target="_blank"
                                href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fstories.botble.com%2F20-ways-to-sell-your-product-faster&amp;text=Qui hic est sint. Minima accusantium dolor eius quo. Et soluta culpa id ipsum delectus quia. Rerum aliquid qui eaque et non et. Iure et eum ab vel fugiat iste."><i
                                    class="elegant-icon social_twitter"></i></a></li>
                        <li class="list-inline-item"><a class="social-icon pt text-xs-center" target="_blank"
                                href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https%3A%2F%2Fstories.botble.com%2F20-ways-to-sell-your-product-faster&amp;summary=Qui hic est sint. Minima accusantium dolor eius quo. Et soluta culpa id ipsum delectus quia. Rerum aliquid qui eaque et non et. Iure et eum ab vel fugiat iste."><i
                                    class="elegant-icon social_linkedin"></i></a></li>
                    </ul>
                </div>

                <div class="author-bio p-30 mt-50 border-radius-10 bg-white wow fadeIn  animated"
                    style="visibility: hidden; animation-name: none;">
                    <div class="author-image mb-30">
                        <img class="avatar" src="<?php echo get_avatar_url( get_the_author_ID()); ?>"
                            alt="Steven Madden">
                    </div>
                    <div class="author-info">
                        <h4 class="font-weight-bold mb-20">
                            <span class="vcard author"><span class="fn"><?php the_author_nickname(); ?></span></span>
                        </h4>
                        <p><?php echo get_the_author_meta('description'); ?></p>
                    </div>
                </div>

                <div class="author-bio p-30 mt-50 border-radius-10 bg-white wow fadeIn  animated"
                    style="visibility: hidden; animation-name: none;">
                    <?php comments_template(); ?>
                </div>

                <br>
                <div class="facebook-comment">
                    <div class="fb-comments" data-href="https://stories.botble.com/20-ways-to-sell-your-product-faster"
                        data-numposts="5" data-width="100%"></div>
                </div>

                <div class="related-posts">
                    <div class="post-module-3">
                        <div class="widget-header-2 position-relative mb-30">
                            <h5 class="mt-5 mb-30"><?php echo _e('Related posts','wordpressgeek'); ?></h5>
                        </div>
                        <div class="loop-list loop-list-style-1">
                            <article class="hover-up-2 transition-normal wow fadeInUp   animated"
                                style="visibility: hidden; animation-name: none;">
                                <div class="row mb-40 list-style-2">
                                    <div class="col-md-4">
                                        <div class="post-thumb position-relative border-radius-5">
                                            <div class="img-hover-slide border-radius-5 position-relative"
                                                style="background-image: url(https://stories.botble.com/storage/news/14.jpg)">
                                                <a class="img-link"
                                                    href="https://stories.botble.com/unlock-the-secrets-of-selling-high-ticket-items"></a>
                                            </div>
                                            <ul class="social-share">
                                                <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                                <li><a class="fb"
                                                        href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fstories.botble.com%2Funlock-the-secrets-of-selling-high-ticket-items&amp;title=Ut quia tempora nesciunt fugiat. Recusandae voluptatibus unde est."
                                                        title="Share on Facebook" target="_blank"><i
                                                            class="elegant-icon social_facebook"></i></a></li>
                                                <li><a class="tw"
                                                        href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fstories.botble.com%2Funlock-the-secrets-of-selling-high-ticket-items&amp;text=Ut quia tempora nesciunt fugiat. Recusandae voluptatibus unde est."
                                                        target="_blank" title="Tweet now"><i
                                                            class="elegant-icon social_twitter"></i></a></li>
                                                <li><a class="pt"
                                                        href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https%3A%2F%2Fstories.botble.com%2Funlock-the-secrets-of-selling-high-ticket-items&amp;summary=Ut quia tempora nesciunt fugiat. Recusandae voluptatibus unde est."
                                                        target="_blank" title="Share on Linkedin"><i
                                                            class="elegant-icon social_linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-8 align-self-center">
                                        <div class="post-content">
                                            <div class="entry-meta meta-0 font-small mb-10">
                                                <a href="https://stories.botble.com/hotels"><span
                                                        class="post-cat text-success">Hotels</span></a>
                                                <a href="https://stories.botble.com/guides"><span
                                                        class="post-cat text-warning">Guides</span></a>
                                            </div>
                                            <h5 class="post-title font-weight-900 mb-20">
                                                <a
                                                    href="https://stories.botble.com/unlock-the-secrets-of-selling-high-ticket-items">Unlock
                                                    The Secrets Of Selling High Ticket Items</a>
                                                <span class="post-format-icon"><i
                                                        class="elegant-icon icon_star_alt"></i></span>
                                            </h5>
                                            <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                <span class="post-on">Aug 08, 2021</span>
                                                <span class="time-reading has-dot">19 mins read</span>
                                                <span class="post-by has-dot">293 views</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                            <article class="hover-up-2 transition-normal wow fadeInUp   animated"
                                style="visibility: hidden; animation-name: none;">
                                <div class="row mb-40 list-style-2">
                                    <div class="col-md-4">
                                        <div class="post-thumb position-relative border-radius-5">
                                            <div class="img-hover-slide border-radius-5 position-relative"
                                                style="background-image: url(https://stories.botble.com/storage/news/6.jpg)">
                                                <a class="img-link"
                                                    href="https://stories.botble.com/the-secrets-of-rich-and-famous-writers"></a>
                                            </div>
                                            <ul class="social-share">
                                                <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                                                <li><a class="fb"
                                                        href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fstories.botble.com%2Fthe-secrets-of-rich-and-famous-writers&amp;title=Omnis et nulla animi voluptate vero ea et. Est molestiae aut iusto ut sed placeat inventore."
                                                        title="Share on Facebook" target="_blank"><i
                                                            class="elegant-icon social_facebook"></i></a></li>
                                                <li><a class="tw"
                                                        href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fstories.botble.com%2Fthe-secrets-of-rich-and-famous-writers&amp;text=Omnis et nulla animi voluptate vero ea et. Est molestiae aut iusto ut sed placeat inventore."
                                                        target="_blank" title="Tweet now"><i
                                                            class="elegant-icon social_twitter"></i></a></li>
                                                <li><a class="pt"
                                                        href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https%3A%2F%2Fstories.botble.com%2Fthe-secrets-of-rich-and-famous-writers&amp;summary=Omnis et nulla animi voluptate vero ea et. Est molestiae aut iusto ut sed placeat inventore."
                                                        target="_blank" title="Share on Linkedin"><i
                                                            class="elegant-icon social_linkedin"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-md-8 align-self-center">
                                        <div class="post-content">
                                            <div class="entry-meta meta-0 font-small mb-10">
                                                <a href="https://stories.botble.com/travel"><span
                                                        class="post-cat text-primary">Travel</span></a>
                                                <a href="https://stories.botble.com/hotels"><span
                                                        class="post-cat text-success">Hotels</span></a>
                                            </div>
                                            <h5 class="post-title font-weight-900 mb-20">
                                                <a
                                                    href="https://stories.botble.com/the-secrets-of-rich-and-famous-writers">The
                                                    Secrets Of Rich And Famous Writers</a>
                                                <span class="post-format-icon"><i
                                                        class="elegant-icon icon_star_alt"></i></span>
                                            </h5>
                                            <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                                <span class="post-on">Aug 08, 2021</span>
                                                <span class="time-reading has-dot">19 mins read</span>
                                                <span class="post-by has-dot">1,543 views</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>

                <div class="single-more-articles border-radius-5">
                    <div class="widget-header-2 position-relative mb-30">

                        <h5 class="mt-5 mb-30"><?php echo _e('You might be interested in','wordpressgeek'); ?></h5>

                        <button class="single-more-articles-close"><i class="elegant-icon icon_close"></i></button>
                    </div>
                    <div class="post-block-list post-module-1 post-module-5">
                        <ul class="list-post">
                            <!-- =========================== -->
                            <?php
            $args  = array(
                'posts_per_page'  => 2,
                'offset'          => 0,
                'category'        => get_the_category( get_the_ID())[1]->term_id,
                'orderby'         => 'post_date',
                'order'           => 'ASC',
                'post_type'       => 'post',
                'post_status'     => 'publish',
                 'exclude'        => get_the_ID(),
                'suppress_filters' => true ); 


            $posts = get_posts($args);
                foreach ($posts as $post) :
                 
                ?>
                            <li class="mb-30">
                                <div class="d-flex hover-up-2 transition-normal">
                                    <div class="post-thumb post-thumb-80 d-flex mr-15 border-radius-5 img-hover-scale overflow-hidden">
                                        <a class="color-white" href="<?php the_permalink(); ?>">
                                            <img src="<?php the_post_thumbnail_url('thumbnail');?>" alt="<?php echo get_post_meta( get_post_thumbnail_id(),'_wp_attachment_image_alt', true ); ?>"  >
                                        </a>
                                    </div>
                                    <div class="post-content media-body">
                                        <h6 class="post-title mb-15 text-limit-2-row font-medium">
                                            <a href="<?php the_permalink(); ?>">
                                           <?php echo the_title(); ?>
                                            </a>
                                        </h6>
                                        <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                                            <span class="post-on"><?php the_modified_date(get_date_template(  )); ?></span>
                                            <span class="post-by has-dot"><?php echo gt_get_post_view(); ?></span>
                                        </div>
                                    </div>
                                </div>
                            </li>

                <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
            </article>
        </div>

    </main>
</main>
