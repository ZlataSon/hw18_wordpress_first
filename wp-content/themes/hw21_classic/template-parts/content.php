<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package HW21_classic
 */

?>
<div class="container-fluid">
    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <header class="entry-header">

            <?php
            if (is_single()) {
                the_title('<h2 class="entry-title">', '</h2>');
            } else {
                the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
            }

            if ('post' === get_post_type()) : ?>
                <div class="entry-meta">
                    <?php hw21_classic_posted_on(); ?>
                </div><!-- .entry-meta -->
                <?php
            endif; ?>
        </header><!-- .entry-header -->

        <div class="entry-content">
            <?php
            the_content(sprintf(
            /* translators: %s: Name of current post. */
                wp_kses(__('<span class="fa fa-arrow-circle-o-right"></span> Read more', 'hw21_classic'), array('span' => array('class' => array()))),
                the_title('<span class="screen-reader-text">"', '"</span>', false)
            ));

            wp_link_pages(array(
                'before' => '<div class="page-links">' . esc_html__('Pages:', 'hw21_classic'),
                'after' => '</div>',
            ));
            ?>

        </div><!-- .entry-content -->

        <footer class="entry-footer">
            <?php hw21_classic_entry_footer(); ?>

        </footer><!-- .entry-footer -->
    </article><!-- #post-## -->
</div>