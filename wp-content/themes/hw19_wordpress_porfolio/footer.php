
<!-- footer -->
<footer>
    <div class="container-fluid">
        <div class="row first">

        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-4 logo-block">
            <div class="row clearfix">
                <a class="logo" href="<?php echo home_url(); ?>"><img
                        src="<?php echo get_template_directory_uri(); ?>/img/logo-2.png" alt="Deliver"></a>

                <div class="right social">
                    <a class="soc" href="https://twitter.com/"><span class="fa fa-twitter"></span></a>
                    <a class="soc" href="https://www.facebook.com/"><span class="fa fa-facebook"></span></a>
                    <a class="soc" href="https://www.rssboard.org//"><span class="fa fa-rss"></span></a>
                </div>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum gravida quam quis nunc rutrum
                placerat. Proin eu mi vitae neque veh interdum id nec turpis nam auctor faucibus sollicitudin.</p>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-2">
            <h2>Contact info</h2>
            <ul>
                <li>222 Ave C South</li>
                <li>Saskatoon, Saskatchewan</li>
                <li>Canada S7K 2N5</li>
                <li><a href="mailto:info@deliver.ca">info@deliver.ca</a></li>
                <li class="bold">1.306.222.3456</li>
            </ul>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-2">
                <h2>Quick Links</h2>
            <nav class="nav-link">

            <?php
            $args = [
                'theme_location' => 'footer_nav'
            ];

            wp_nav_menu($args); ?>
            </nav>
            </div>

        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-2">
            <h2>Newsletter</h2>

            <p>Lorem ipsum dolor sit amet dolor consectetur adipiscing elit.</p>
            <form action="#">
                <input type="email" placeholder="Email">
                <input type="submit" value="OK">
            </form>
        </div>
            </div>
        <div class="row end">

            <p class="copy left">Copyright <?php echo date('Y'); ?> <a href="#">Deliver</a>. All Rights
                Reserved.</p>

            <nav class="footer-nav right">
                <?php
                $args = [
                    'theme_location' => 'footer_menu'
                ];

                wp_nav_menu($args); ?>
            </nav>
        </div>
    </div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<?php wp_footer(); ?>

</div>
</body>
</html>