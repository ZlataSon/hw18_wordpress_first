<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hw21serhatyi
 */
if (is_contact() && !is_front_page()) ?>

<aside id="secondary" class="widget-area" role="complementary">
    <div class="contact-widget">
        <p class="name"><?php echo get_theme_mod('contact-name'); ?></p>
        <p class="phone"><?php echo get_theme_mod('contact-phone'); ?></p>
        <p class="contact-info"><?php echo get_theme_mod('contact-info'); ?></p>
        <p class="mail"><?php echo get_theme_mod('contact-mail'); ?></p>
    </div>
    <?php dynamic_sidebar( 'sidebar-2' ); ?>
</aside><!-- #secondary -->



