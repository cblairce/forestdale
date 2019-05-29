<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 */

get_header('home'); ?>

<main id="home-section-1" style="background-image: url(<?php echo get_the_post_thumbnail_url(48,'full') ?>);">
    <section class="section hero-full-screen" id="hero-panel" >
        <div class="grid-container fluid">
            <div class="grid-y grid-margin-y" style="height: 100vh;">
                <div class="small-1 medium-2 cell">&nbsp;</div>
                <div class="small-10 medium-9 cell" id="hero-content">
                    <div class="grid-x grid-margin-y grid-padding-y align-center">
                        <div class="small-12 medium-8 cell text-center">
                            <?php do_shortcode('[my_content id="48" title="false" /]'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end section content -->
    </section>
</main>
<main id="home-section-2">
    <section class="section hero-full-screen" id="invite" data-magellan-target="invite" style="background-image: url(<?php echo get_the_post_thumbnail_url(42,'full') ?>);">
        <div class="grid-container">
            <div class="grid-y grid-margin-y" style="height: 100vh;">
                <div class="small-2 medium-4 cell">&nbsp;</div>
                <div class="small-6 medium-4 cell">
                    <div class="grid-x grid-margin-y grid-padding-y align-center">
                        <div class="small-12 medium-9 large-6 cell text-center" style="background-color: #efefef;">
                            <?php do_shortcode('[my_content id="42" title="false" /]'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end section content -->
    </section>
</main>
<main id="home-section-3">
    <section class="section" id="sermons" data-magellan-target="sermons" style="background-image: url(<?php echo get_the_post_thumbnail_url(1673,'full') ?>);">
        <div class="grid-container">
            <div class="grid-y grid-margin-y" style="height: 100vh;">
                <div class="small-3 medium-4 cell"><h2>Sermons</h2></div>
                <div class="small-4 medium-4 cell">
                    <div class="grid-x grid-margin-y grid-padding-y">
                        <div class="small-12 cell text-center">
                            <?php
                                if ( is_active_sidebar( 'homeblock' ) ) {
                                    dynamic_sidebar( 'homeblock' );
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end section content -->
    </section>
</main>
<main id="home-section-4">
    <section class="section" id="about" data-magellan-target="about" style="background-image: url(<?php echo get_the_post_thumbnail_url(46,'full') ?>);">
        <div class="grid-container">
            <div class="grid-y grid-margin-y" style="height: 100vh;">
                    <div class="small-3 medium-4 cell">&nbsp;</div>
                    <div class="small-12 medium-8 large-8 cell">
                        <?php do_shortcode('[my_content id="46" title="false" /]'); ?>
                    </div>
                </div>
            </div> <!-- end section content -->
        </div>
    </section>
</main>
<main id="home-section-5">
    <section class="section" id="contact" data-magellan-target="contact" style="background-image: url(<?php echo get_the_post_thumbnail_url(1677,'full') ?>);">
        <div class="grid-container">
            <div class="grid-y grid-margin-y" style="height: 100vh;">
                <div class="small-3 medium-4 cell">&nbsp;</div>
                <div class="small-12 medium-8 large-8 cell">
                    <?php do_shortcode('[my_content id="1677" title="false" /]'); ?>
                </div>
            </div>
        </div> <!-- end section content -->
    </section>
</main>

<?php get_footer('home'); ?>