<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
    <label class="search-label">
        <span class="screen-reader-text"><?php echo _x('Search for:', 'label'); ?></span>
        <input type="search" class="search-field"
               placeholder="<?php echo esc_attr_x('Search', 'placeholder'); ?>"
               value="<?php echo get_search_query(); ?>" name="s"
               title="<?php echo esc_attr_x('Search for:', 'label'); ?>"/>
    </label>
    <button type="submit" class="search-submit fa fa-search"><span
            class="screen-reader-text"><?php echo _x('<search', 'submit button'); ?></span></button>
</form>