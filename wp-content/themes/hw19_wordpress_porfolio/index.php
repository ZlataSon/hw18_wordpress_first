<?php

get_header();
?>

<!-- main part -->
<div class="page-name">
    <div class="container">
        <h2>» Our Portfolio</h2>
    </div>
</div>

<main class="main-part">
    <div class="container-fluid">
        <div class="nothing">
            <h3>Nothing but the best for our portfolio</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent justo ligula, interdum ut lobortis quis, interdum vitae metus. Proin fringilla metus non nulla cursus, sit amet rutrum est pretium.</p>
        </div>
        <div class="posts-holder">
            <div class="row">

                <?php if (have_posts()) :
                    while (have_posts()) : the_post();?>

                        <div class="post col-xs-12 col-sm-4">
                            <a class="post-title" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            <p><?php the_excerpt(); ?></p>

                            <div class="img-holder">
                                <img class="wrap-img" src="<?php echo get_template_directory_uri(); ?>/img/monitor.png" alt="monitor">
                                <?php the_post_thumbnail(); ?>

                                <div class="img-hover">
                                    <a href="<?php the_permalink(); ?>" class="plus-holder">
                                        <i class="fa fa-plus"></i>
                                    </a>
                                </div>
                            </div>
                        </div>

                    <?php endwhile;
                endif;
                ?>

            </div>
        </div>

        <div class="need-site">
            <h3>Do you need a website?</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent justo ligula, interdum ut lobortis quis, interdum vitae metus. Proin fringilla metus non nulla cursus, sit amet rutrum est pretium.</p>
            <a href="#" class="green-btn">Get a free quote</a>
        </div>
    </div>
</main> <!-- /main part-->

<?php
get_footer();
?>

