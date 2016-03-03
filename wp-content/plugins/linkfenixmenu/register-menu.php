<?php 

add_action( 'admin_menu', 'my_admin_menu' );

function my_admin_menu()
{
        add_menu_page( 'Link Fenix', 'Link Fenix', 'manage_options', 'pages/main-menu.php', 'intro', 'dashicons-tickets', 6 );
        add_submenu_page( 'pages/main-menu.php', 'Introduction',  'Introduction', 'manage_options', 'pages/main-menu.php', 'intro' );
        add_submenu_page( 'pages/main-menu.php', 'Movies', 'Movies', 'manage_options', 'pages/movies.php', 'movies'  );
        add_submenu_page( 'pages/main-menu.php', 'TV Shows',  'TV Shows', 'manage_options', 'pages/tvshows.php', 'tvshows' );
        add_submenu_page( 'pages/main-menu.php', 'Preferences', 'Preferences', 'manage_options', 'pages/preferences.php', 'preferences' );
}

include 'page-functions.php';
?>