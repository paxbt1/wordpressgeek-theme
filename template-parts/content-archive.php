<article class="col-md-6 mb-40 wow fadeInUp   animated" style="visibility: visible; animation-name: fadeInUp;">
    <div class="post-card-1 border-radius-10 hover-up">
        <div class="post-card-1 border-radius-10 hover-up">
            <div class="post-thumb thumb-overlay img-hover-slide position-relative"
                style="background-image: url(<?php   the_post_thumbnail_url($post->ID,'300*300'); ?>)">
                <a class="img-link" href="<?php the_permalink(); ?>"></a>
                <ul class="social-share">
                    <li><a href="#"><i class="elegant-icon social_share"></i></a></li>
                    <li><a class="fb"
                            href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fstories.botble.com%2Fthe-top-2020-handbag-trends-to-know&amp;title=Eligendi%20ut%20et%20quia%20deleniti%20voluptatem%20hic.%20Laborum%20possimus%20quaerat%20corporis%20dolores.%20Repellendus%20excepturi%20temporibus%20enim%20voluptatem%20error.%20Et%20voluptas%20dolor%20vel%20hic."
                            title="Share on Facebook" target="_blank"><i class="elegant-icon social_facebook"></i></a>
                    </li>
                    <li><a class="tw"
                            href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fstories.botble.com%2Fthe-top-2020-handbag-trends-to-know&amp;text=Eligendi%20ut%20et%20quia%20deleniti%20voluptatem%20hic.%20Laborum%20possimus%20quaerat%20corporis%20dolores.%20Repellendus%20excepturi%20temporibus%20enim%20voluptatem%20error.%20Et%20voluptas%20dolor%20vel%20hic."
                            target="_blank" title="Tweet now"><i class="elegant-icon social_twitter"></i></a></li>
                    <li><a class="pt"
                            href="https://www.linkedin.com/shareArticle?mini=true&amp;url=https%3A%2F%2Fstories.botble.com%2Fthe-top-2020-handbag-trends-to-know&amp;summary=Eligendi%20ut%20et%20quia%20deleniti%20voluptatem%20hic.%20Laborum%20possimus%20quaerat%20corporis%20dolores.%20Repellendus%20excepturi%20temporibus%20enim%20voluptatem%20error.%20Et%20voluptas%20dolor%20vel%20hic."
                            target="_blank" title="Share on Linkedin"><i class="elegant-icon social_linkedin"></i></a>
                    </li>
                </ul>
            </div>
            <div class="post-content p-30">
                <div class="entry-meta meta-0 font-small mb-10">
                    <a href="<?php echo get_term_link( get_the_category($post->ID)[0]->name , 'category' ) ?>"><span class="post-cat text-success"><?php echo get_the_category($post->ID)[0]->name; ?></span></a>
                </div>
                <div class="d-flex post-card-content">
                    <h5 class="post-title mb-20 font-weight-900">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h5>
                    <div class="entry-meta meta-1 float-left font-x-small text-uppercase">
                        <span class="post-on"><?php the_date(); ?></span>
                        <!-- <span class="time-reading has-dot">12 mins read</span> -->
                        <span class="float-right" ><?php echo gt_get_post_view(); ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>