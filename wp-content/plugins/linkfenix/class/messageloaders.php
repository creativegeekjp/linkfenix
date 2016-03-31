<?php 
//message notice for movies import
function my_notice()
{
    ?>
    <div class="update notice">
        <p><?php _e( 'Full import for movies was successfull.', 'my_plugin_textdomain' ); ?></p>
    </div>
    <?php
}
//message notice of options tv and movies
function my_option_notice()
{
    ?>
    <div class="update notice">
        <p><?php _e( 'Options was updating please wait...', 'my_plugin_textdomain' ); ?></p>
    </div>
    <?php
}
//message notice of tvshows import
function my_notice_tv() 
{
    ?>
    <div class="update notice">
        <p><?php _e( 'Full import for tvshows was successfull.', 'my_plugin_textdomain' ); ?></p>
    </div>
    <?php
}
//message notice for options of prefrences
function my_option_preferences() 
{
    ?>
    <div class="update notice">
        <p><?php _e( 'Options was updating please wait...', 'my_plugin_textdomain' ); ?></p>
    </div>
    <?php
}

?>
