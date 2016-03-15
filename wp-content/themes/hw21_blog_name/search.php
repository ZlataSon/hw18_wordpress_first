<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package HW21_blog_name
 */

get_header(); ?>

    <section id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <div class="container-fluid">

                <?php
                if (have_posts()) : ?>

                    <header class="page-header">
                        <h2 class="page-title"><?php printf(esc_html__('Search Results for: %s', 'hw21_blog_name'), '<span>' . get_search_query() . '</span>'); ?></h2>
                    </header><!-- .page-header -->

                    <?php
                    /* Start the Loop */
                    while (have_posts()) : the_post();

                        /**
                         * Run the loop for the search to output the results.
                         * If you want to overload this in a child theme then include a file
                         * called content-search.php and that will be used instead.
                         */
                        get_template_part('template-parts/content', 'search');

                    endwhile;

                    the_posts_navigation();

                else :

                    get_template_part('template-parts/content', 'none');

                endif; ?>
            </div>
        </main><!-- #main -->
    </section><!-- #primary -->

<?php
get_sidebar();
get_footer();