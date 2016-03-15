<?php
/**
 * Template part for displaying a message that posts cannot be found.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package HW21_blog_name
 */

?>
<div class="container-fluid">
    <section class="no-results not-found">
        <header class="page-header">
            <h2 class="page-title"><?php esc_html_e('Nothing Found', 'hw21_blog_name'); ?></h2>
        </header><!-- .page-header -->

        <div class="page-content">
            <?php
            if (is_home() && current_user_can('publish_posts')) : ?>

                <p><?php printf(wp_kses(__('Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'hw21_blog_name'), array('a' => array('href' => array()))), esc_url(admin_url('post-new.php'))); ?></p>

            <?php elseif (is_search()) : ?>

                <p><?php esc_html_e('Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'hw21_blog_name'); ?></p>
                <?php
                get_search_form();

            else : ?>

                <p><?php esc_html_e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'hw21_blog_name'); ?></p>
                <?php
                get_search_form();

            endif; ?>
        </div><!-- .page-content -->
    </section><!-- .no-results -->
</div>