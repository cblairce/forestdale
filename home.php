<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 */

get_header('home'); ?>


<div class="section hero-full-screen"
    style="background-image: url(<?php echo get_the_post_thumbnail_url(48,'full') ?>);" id="home">

    <div class="top-content-section text-center">
        <div class="grid-container">
            <div class="grid-x align-center">
                <div class="small-11 cell">
                    <h2 class="show-for-small-only">Passionately following Christ.<br>Radicially loving others.</h2>
                    <img src="/wp-content/uploads/2019/03/fdcc-logo-768x192.png" alt="Forest Dale Church of Christ"
                        class="wp-image-1683 show-for-medium"
                        srcset="/wp-content/uploads/2019/03/fdcc-logo-768x192.png 768w, /wp-content/uploads/2019/03/fdcc-logo-300x75.png 300w, /wp-content/uploads/2019/03/fdcc-logo-1024x256.png 1024w"
                        sizes="(max-width: 768px) 100vw, 768px">
                </div>
            </div>
        </div>
    </div>

    <div class="middle-content-section">
        <div class="grid-container">
            <?php do_shortcode('[my_content id="48" title="false" /]'); ?>
        </div>
    </div>

    <div class="bottom-content-section" data-magellan data-threshold="0">
        <a href="#invite" class="show-for-medium"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                viewBox="0 0 24 24">
                <path
                    d="M24 12c0-6.627-5.373-12-12-12s-12 5.373-12 12 5.373 12 12 12 12-5.373 12-12zm-18.005-1.568l1.415-1.414 4.59 4.574 4.579-4.574 1.416 1.414-5.995 5.988-6.005-5.988z" />
            </svg></a>
    </div>

</div>

<div id="main-content-section">
    <div class="section" id="invite" data-magellan-target="invite">
        <div class="top-content-section text-center">
            <h2>Come Worship with Us!</h2>
        </div>

        <div class="grid-container middle-content-section">
            <div class="grid-x grid-padding-x align-center">
                <div class="small-11 large-6 cell text-center medium-text-left">
                    <?php do_shortcode('[my_content id="42" title="false" /]'); ?>
                </div>
                <div class="small-11 large-6 cell">
                    <img class="thumbnail" src="<?php echo get_the_post_thumbnail_url(42,'full') ?>"
                        alt="Come Worship with Us!">
                </div>
            </div>
        </div>

        <div class="bottom-content-section">
            <h3>Sunday Mornings at 11:00 am</h3>
        </div>
    </div> <!-- end section content -->

    <div class="section" id="sermons" data-magellan-target="sermons">
        <div class="top-content-section text-center">
            <h2>Sermons</h2>
        </div>

        <div class="middle-content-section">
            <div class="grid-container">
                <div class="grid-x grid-padding-x grid-margin-y grid-padding-y">
                    <div class="small-12 medium-6 large-4 small-order-2 medium-order-1 cell">
                        <?php get_template_part( 'parts/content', 'profile' ); ?>
                    </div>
                    <div class="small-12 medium-6 large-8 small-order-1 medium-order-2 cell text-center ">
                        <?php get_template_part( 'parts/content', 'sermons' ); ?>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- end section content -->


    <div class="section" id="about" data-magellan-target="about">
        <div class="top-content-section text-center">
            <h2>About Forest Dale Church of Christ</h2>
        </div>

        <div class="middle-content-section" style="width: 100%;">
            <div class="grid-container">
                <div class="grid-x grid-padding-y grid-padding-x align-center">
                    <div class="small-12 medium-6 large-8 cell large-text-left">
                        <?php do_shortcode('[my_content id="46" title="false" /]'); ?></div>
                    <div class="medium-6 large-4 cell show-for-medium">
                        <img class="thumbnail" src="/wp-content/uploads/2019/05/SIGNBOARD.jpg" alt="Signboard" />
                    </div>
                    <div class="small-12 cell">
                        <h2>Our Staff</h2>
                    </div>
                    <div class="small-6 medium-4 large-2 cell">
                        <img src="/wp-content/uploads/2019/05/darin-portrait-e1558447165503.jpg" class="thumbnail"
                            alt="Darin Pratt" />
                        <p class="caption">Darin Pratt<br><span class="title">Senior Minister</span></p>
                    </div>
                    <div class="small-6 medium-4 large-2 cell">
                        <img src="/wp-content/uploads/2019/05/rebecca-oldenburg.jpeg" class="thumbnail"
                            alt="Rebecca Oldenburg" />
                        <p class="caption">Rebecca Oldenburg<br><span class="title">Director of Children's
                                Ministries</span></p>
                    </div>
                    <div class="small-6 medium-4 large-2 cell">
                        <img src="/wp-content/uploads/2019/05/kathy-underwood.jpeg" class="thumbnail"
                            alt="Kathy Underwood" />
                        <p class="caption">Kathy Underwood<br><span class="title">Administrative Assistant</span></p>
                    </div>
                    <div class="small-6 medium-4 large-2 cell">
                        <img src="/wp-content/uploads/2019/05/kathy-girton.jpeg" class="thumbnail" alt="Kathy Girton" />
                        <p class="caption">Kathy Girton<br><span class="title">Counselor</span></p>
                    </div>
                    <div class="small-6 medium-4 large-2 cell">
                        <img src="/wp-content/uploads/2019/05/patty-reed.jpeg" class="thumbnail" alt="Patty Reed" />
                        <p class="caption">Patty Reed<br><span class="title">Custodian</span></p>
                    </div>
                </div>
            </div>
        </div> <!-- end section content -->
    </div> <!-- end section content -->


    <div class="section" id="contact" data-magellan-target="contact">
        <div class="top-content-section text-center">
            <h2>Contact Us</h2>
        </div>
        <div class="middle-content-section" style="width:100%">
            <div class="grid-container">
                <div class="grid-x grid-padding-x">
                    <div class="cell small-12 medium-6 text-center medium-text-left" style="margin-top: 2rem;">
                        <h3>Forest Dale Church of Christ</h3>
                        <p>Phone: (513) 825-7171</p>
                        <p>Address:<br>
                            604 West Kemper Road<br>
                            Cincinnati, OH 45246</p>
                        <p><a href="https://www.facebook.com/FDCCGrapevine" class="social facebook"><img
                                    src="/wp-content/themes/forestdale/assets/images/Facebook_icon.svg"></a>
                            | <a href="https://twitter.com/fdccgrapevine" class="social twitter"><img
                                    src="/wp-content/themes/forestdale/assets/images/Twitter_icon.svg"></a></p>
                    </div>
                    <div class="cell small-12 medium-6" style="margin-top: 2rem;">
                        <h3>Send us a Message</h3>

                        <?php do_shortcode('[my_content id="1677" title="false" /]'); ?>
                    </div>
                    <div class="cell small-12">
                        <h3>Our Location</h3>

                        <?php echo do_shortcode('[wpgmza id="1"]'); ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="bottom-content-section">
            <h3>We look forward to meeting you!</h3>
        </div>
    </div> <!-- end section content -->
</div>

<?php get_footer('home'); ?>
<script>
    jQuery('.reveal-sermon').on('click', function (el) {
        el.preventDefault();
        var url = jQuery(this).attr('href');
        var sermonId = jQuery(this).data('sermon-id');
        var $modal = jQuery('#sermon-detail-modal');
        content = jQuery('#sermon-details').load(url + ' #post-' + sermonId);
        $modal.foundation('open');
    });

    jQuery('.meta a').on('click', function (el) {
        el.preventDefault();
    });

    jQuery('#off-canvas a').on('click', function () {
        jQuery('#off-canvas').foundation('close', {});
    });
</script>