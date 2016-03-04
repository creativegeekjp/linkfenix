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

include 'class/validations.php';
include 'class/functions.php';
include 'class/shortcodes.php';


wp_enqueue_script('jquerylib', 'https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js');
wp_enqueue_script('jqueryui', 'https://code.jquery.com/ui/1.11.4/jquery-ui.js');
wp_enqueue_style('jquerycss', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.10/themes/ui-darkness/jquery-ui.css');
wp_head();
wp_enqueue_script('title_list', plugin_dir_url(__FILE__) . 'json/title-search.js');
wp_enqueue_style('frame_css', plugin_dir_url(__FILE__) . 'css/movie_css.css');
     

if($_POST){ 
        
        include 'class/messageloaders.php'; 
}

function intro()
{
        echo "<div class='wrap'><b>LinkFenix</b>
        <div id='int-wrapper-content'>
        <div id='int-main-content'>
        <p>
            On Both, Movies or TV shows you will have several options to import
            content or just use it without importing:
        </p>
        <p>
            FULL IMPORT - Import Our Movies or / and TV shows to your website.
            Each movie contains a poster, title (obligatory), year, description, imbd
            link and genres (obligatory).
        </p>
        <p>
            PARTIAL IMPORT - Choose from our movie list which Movies or  TV shows
            do you want to import to your website.
        </p>
        <p>
            LINK SHORTCODES - Best option if you want to use only our immortal 
            links and not the other content (posters, title, year, description, imbd link
            and genres). This way you can find the movie or TV show title in our database,
            grab it's shortcode and paste this shortcode in your content where you want our
            immortal links to show and auto update.
        </p>
        <p>
        PREFERENCES - Change the look of the links and control the auto update settings.</p></div>
        <div id='movie-content'>
            <p>
                <iframe width='360' height='219' 
                src='https://www.youtube.com/embed/vw4S4KiqAMY?list=PL9C5E6F3F05287638' frameborder='0'
                allowfullscreen>
                </iframe>
            </p>
        </p></div></div></div>";
       
}
function movies(){
    
    echo "<form method='post'><div class='wrap'><b>LinkFenix - Movies</b>";
    echo "<input type='submit' id='searchsubmit' name='searchsubmit' value='Options' >
            <input type='submit' id='searchsubmit' name='searchsubmit' value='Full import' >
            <input type='submit' id='searchsubmit' name='searchsubmit' value='Movie List' >
            <input type='submit' id='searchsubmit' name='searchsubmit' value='Updates'>";
    echo "<hr id='line'>";
    echo "<div id='mov-content'>";
    echo "Check or uncheck the non-obligatory options as you would like the content to be imported.<br><div id='msg'></div>";
    echo "<input type='checkbox' id='chk' name='chksubmit' value='' >Title (obligatory)<br>";
    echo "<input type='checkbox' id='chk' name='chksubmit' value='' >Genres (0bligatory)<br>";
    echo "<input type='checkbox' id='chk' name='chksubmit' value='description' >Description<br>";
    echo "<input type='checkbox' id='chk' name='chksubmit' value='year' >Year - next to the title, for example: Avatar (2009)<br>";
    echo "<input type='checkbox' id='chk' name='chksubmit' value='imbd' >IMBD link<br>";
    echo "<input type='checkbox' id='chk' name='chksubmit' value='pimage' >Posters only as featured image<br>";
    echo "<input type='checkbox' id='chk' name='chksubmit' value='pcontent' >Posters only in the content<br>";
    echo "<input type='submit' id='searchsubmit' name='searchsubmit' value='Save' >";
    echo "</div></div></form>";
   
   
   
}
?>