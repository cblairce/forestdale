<?php 
// Setting up the Query - see http://codex.wordpress.org/Class_Reference/WP_Query
    $latest_sermon = new WP_Query(
        array( 
            'post_type' => 'wpfc_sermon', 
            'posts_per_page' => 5, 
            'post_status' => 'publish', 
            'no_found_rows' => true, 
            'update_post_term_cache' => false, 'update_post_meta_cache' => false )
    );

if ($latest_sermon->have_posts()) : ?>
    <div class="orbit" role="region" aria-label="Latest Sermons" data-orbit data-auto-play="false">
        <div class="orbit-wrapper">
            <div class="orbit-controls">
                <button class="orbit-previous"><span class="show-for-sr">Previous
                        Slide</span>&#9664;&#xFE0E;</button>
                <button class="orbit-next"><span class="show-for-sr">Next
                        Slide</span>&#9654;&#xFE0E;</button>
            </div>
            <ul class="orbit-container">
                <?php while ($latest_sermon->have_posts()) : $latest_sermon->the_post(); ?>
                <li class="is-active orbit-slide">
                    <?php global $post; ?>
                    <div id="latest_sermon-<?php the_id(); ?>"
                        class="text-center sermon sermon-<?php the_id(); ?>">
                        <p><?php the_post_thumbnail( 'medium' );?></p>
                        <h3><a title="<?php echo esc_attr( get_the_title() ); ?>"
                                href="<?php the_permalink() ?>" class="reveal-sermon"
                                data-sermon-id="<?php the_id(); ?>">
                                <?php the_title(); ?>
                            </a></h3>

                        <div class="meta">
                            <?php wpfc_sermon_date(get_option('date_format')); ?> <span
                                class="show-for-medium">&bullet;</span><br class="show-for-small-only">
                            <strong>Preacher:</strong>
                            <?php echo the_terms($post->ID,'wpfc_preacher','',', ',' '); ?> <span
                                class="show-for-medium">&bullet;</span><br class="show-for-small-only">
                            <?php echo the_terms($post->ID,'wpfc_sermon_series','<strong>Series:</strong> ',', ','');?>
                        </div>
                        <div class="sermon-description"><?php wpfc_sermon_description() ?></div>
                        <div class="audio"><?php wpfc_sermon_files() ?></div>
                    </div>
                </li>
                <?php endwhile; ?>
            </ul>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
    <div class="reveal" id="sermon-detail-modal" data-reveal>
        <div id="sermon-details"></div>
        <button class="close-button" data-close aria-label="Close modal" type="button">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php else: ?>
    <div style="text-align: left; font-size: 1.25rem;">
        <p>Darin’s love of God’s Word, sense of humor, and
            conversational style of preaching bring the Bible to life and helps us all apply God’s
            Word to our daily lives.</p>
        <p>We post a video of our Sunday service, including the message, each week on our <a href="https://www.facebook.com/pg/FDCCGrapevine/videos/?ref=page_internal" target="_blank">Facebook Page</a>. We hope to see you here at Forest Dale in the near future.</p>
    </div>
        
<?php endif; ?>
