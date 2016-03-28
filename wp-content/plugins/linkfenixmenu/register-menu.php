<?php 

add_action( 'admin_menu', 'my_admin_menu' );

function my_admin_menu()
{
    global $submenu;
    
    add_menu_page( 'Link Fenix', 'Link Fenix', 'manage_options', 'pages/main-menu.php', 'intro', 'dashicons-tickets', 6 );
    add_submenu_page( 'pages/main-menu.php', 'Introduction',  'Introduction', 'manage_options', 'pages/main-menu.php', 'intro' );
    add_submenu_page( 'pages/main-menu.php', 'Movies', 'Movies', 'manage_options', 'movies.php', 'movies'  );
    add_submenu_page( 'pages/main-menu.php', 'TV Shows',  'TV Shows', 'manage_options', 'pages/tvshows.php', 'tvshows' );
    add_submenu_page( 'pages/main-menu.php', 'Preferences', 'Preferences', 'manage_options', 'pages/preferences.php', 'preferences' );
        
    $newmovies = count_new_movies();
    
    $newtvshows = count_new_tv_shows();
    
    $submenu['pages/main-menu.php']['1'][0] .= $newmovies ? "<span class='update-plugins count-1'> <span class='update-count'>  $newmovies </span></span>" : '';
    
    $submenu['pages/main-menu.php']['2'][0] .=  $newtvshows ? "<span class='update-plugins count-1'> <span class='update-count'>   $newtvshows </span></span>" : '';
}

function count_new_movies()
{

    include 'class/time-zone.php';
    
    include 'class/parser.php';
    
    foreach ($movies['movies']['viewVars']['movies']  as $key => $value)
    { 
      $count_m += date('Y-m-d',strtotime($value['created'])) >= date("Y-m-d") ? 1 : 0;
    }
    
    return  $count_m;
}

function count_new_tv_shows()
{
    
    include 'class/time-zone.php';
    
    include 'class/tv-parser.php';
    
    foreach ($tv['tvshows']['viewVars']['tvshows']  as $key => $value)
    { 
       $count_tv += date('Y-m-d',strtotime($value['created'])) >= date("Y-m-d") ? 1 : 0;
      
       foreach($value['seasons'] as $key => $season)
        {
           $count_tv += getEpisodes($season['id']);
        }
    }
    
    return  $count_tv;
}
function getEpisodes($id)
{
    $episodes = json_decode(file_get_contents('http://ide.creativegeek.ph:23268/seasons/viewrest/'.$id),true);
 
        foreach ($episodes['episodes']  as  $epi)
        { 
            return date('Y-m-d',strtotime($epi['created'])) >= date("Y-m-d") ? 1 : 0;
        }
     
    }
include 'class/validations.php';
include 'class/functions.php';


wp_enqueue_script('jquerylib',  plugin_dir_url(__FILE__) . 'jquery/jquery.min.js');
wp_enqueue_script('jqueryui',  plugin_dir_url(__FILE__) . 'jquery/jquery-ui.js');
wp_enqueue_style('jquerycss',  plugin_dir_url(__FILE__) . 'jquery/jquery-ui.css');
wp_enqueue_style('jquerycss',  plugin_dir_url(__FILE__) . 'jquery/jquery-ui-min.css');
wp_enqueue_style('jquerycss',  plugin_dir_url(__FILE__) . 'jquery/jquery-ui-theme.css');
wp_head();
include 'class/title-search.php';
include 'class/shortcodes.php';
wp_enqueue_style('movie_css', plugin_dir_url(__FILE__) . 'css/movie_css.css');
     
    
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
    
        echo "<form method='post'>";
        echo " <div class='wrap'><b>LinkFenix - Movies</b>";
        echo "<input type='submit' id='searchsubmit' name='searchsubmit' value='Options' >
              <input type='submit' id='searchsubmit' name='searchsubmit' value='Full import' >
              <input type='submit' id='searchsubmit' name='searchsubmit' value='Movie List' >
              <input type='submit' id='searchsubmit' name='searchsubmit' value='Updates'>";
        
        echo "<hr id='line'>";
        echo "<div id='mov-content'>";
        
        if(isset($_POST))
        {
            switch($_POST['searchsubmit'])
            {
            	case 'Options' :
                    include 'option-list-page.php';
            	break;
                    
                case 'Movie List' :
                    include 'movie-list-page.php';
                break;
                
                case 'Updates' :
                    include 'updates-list-page.php';
                break;
                    
            	default:
            		include 'option-list-page.php';
            	break;
            }        
        }
        echo "</div></div>";
        echo "</form>";

}
function tvshows(){
    
        echo "<form method='post'>";
        echo " <div class='wrap'><b>LinkFenix - TV Shows</b>";
        echo "<input type='submit' id='searchsubmit' name='tv-searchsubmit' value='Options' >
              <input type='submit' id='searchsubmit' name='tv-searchsubmit' value='Full Import' >
              <input type='submit' id='searchsubmit' name='tv-searchsubmit' value='Tv Shows' >
              <input type='submit' id='searchsubmit' name='tv-searchsubmit' value='Updates'>";
        
        echo "<hr id='line'>";
        echo "<div id='mov-content'>";
        
        if(isset($_POST))
        {
            if(isset($_POST['tv-seasons']))
            {
                 include 'tv-seasons.php';
            }
            else if(isset($_POST['tv-episodes']))
            {
                 include 'tv-episodes.php';
            }
            else
            {
                switch($_POST['tv-searchsubmit'])
                {
                	case 'Options' :
                        include 'tv-option-list-page.php';
                	break;
                        
                    case 'Tv Shows' :
                        include 'tv-movie-list-page.php';
                    break;
                    
                    case 'Updates' :
                        include 'tv-updates-list-page.php';
                    break;
                    
                	default:
                		include 'tv-option-list-page.php';
                	break;
                }
            }
        }
        echo "</div></div>";
        echo "</form>";
}

function preferences()
{
        echo "<form method='post'>";
        echo " <div class='wrap'><b>LinkFenix - Preferences</b>";
        echo "<input type='submit' id='searchsubmit' name='tv-searchsubmit' value='Shortcoder' >
        <input type='submit' id='searchsubmit' name='tv-searchsubmit' value='Links' >
        <input type='submit' id='searchsubmit' name='tv-searchsubmit' value='Iframe' >";
        
        echo "<hr id='line'>";
        echo "<div id='mov-content'>";
        
        
        echo "</div></div>";
        echo "</form>";
 

}
?>
