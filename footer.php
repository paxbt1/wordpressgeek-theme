<footer class="pt-50 pb-20 bg-grey">
    <?php
    wp_footer();
    ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="sidebar-widget wow fadeInUp animated mb-30">
<?php dynamic_sidebar( 'footer-1' ) ?>

                </div>
            </div>
            <div class="col-lg-2 col-md-6">
                <div class="sidebar-widget widget_categories wow fadeInUp animated mb-30" data-wow-delay="0.1s">
                    <?php dynamic_sidebar( 'footer-2' ) ?>
                </div>
            </div>
            <div class="col-lg-3 col-md-6">
                <div class="sidebar-widget widget_tagcloud wow fadeInUp animated mb-30" data-wow-delay="0.2s">
                    <?php dynamic_sidebar( 'footer-3' ) ?>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="sidebar-widget widget_newsletter wow fadeInUp animated mb-30" data-wow-delay="0.3s">
                    <?php dynamic_sidebar( 'footer-4' ) ?>
                </div>
            </div>
        </div>

        <div class="footer-copy-right pt-30 mt-20 wow fadeInUp animated">
            <p class="float-md-left font-small text-muted">©2021 Stories - Laravel Personal Blog Script</p>
            <p class="float-md-right font-small text-muted">
                Designed by AliThemes | All rights reserved.
            </p>
        </div>
        
    </div>
</footer>