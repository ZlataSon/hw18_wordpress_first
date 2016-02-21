<?php

get_header();
?>

<!-- main part -->
<div class="row">
<div class="main-part">
    <?php
if (have_posts()) :
    while (have_posts()) : the_post(); ?>

        <article class="post">
            <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
            <?php the_content(); ?>
        </article>
    <?php endwhile;

else :
    echo '<p>No content found</p>';

endif;
?>
</div> <!-- /main part-->

<!--sidebar-->
<div class="info-part" id="id-widget">

        <?php if ( is_active_sidebar( 'sidebar' ) ) : ?>

            <?php dynamic_sidebar( 'sidebar' ); ?>

        <?php else : ?>

            <p>No content found</p>

        <?php endif; ?>

</div><!-- /sidebar-->
</div>
<!-- pagination -->
<div class="row pagination clearfix">
    <div class="prev">
        <a href="#" class="left"><span class="fa fa-long-arrow-left"></span> Previous</a>
    </div>
    <div class="next">
        <a href="#" class="right">Next <span class="fa fa-long-arrow-right"></span></a>
    </div>
</div><!-- /pagination -->

<?php
get_footer();
?>

