<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package HW21_blog_name
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="container-fluid">

				<?php
				// the query to set the posts per page to 3
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$args = array('posts_per_page' => 3, 'paged' => $paged );
				query_posts($args); ?>

				<?php
				if (have_posts()) :

					if (is_home() && !is_front_page()) : ?>
						<header>
							<h2 class="page-title screen-reader-text"><?php single_post_title(); ?></h2>
						</header>

						<?php
					endif;

					/* Start the Loop */
					while (have_posts()) : the_post();

						/*
                         * Include the Post-Format-specific template for the content.
                         * If you want to override this in a child theme, then include a file
                         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                         */
						get_template_part('template-parts/content', get_post_format());

					endwhile;

				else :

					get_template_part('template-parts/content', 'none');

				endif; ?>

				<!-- pagination -->
				<?php pagination(); ?>

			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
