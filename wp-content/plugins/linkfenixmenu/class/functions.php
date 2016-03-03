<?php
    wp_enqueue_script('jquerylib', 'https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js');
    wp_enqueue_script('jqueryui', 'https://code.jquery.com/ui/1.11.4/jquery-ui.js');
    wp_enqueue_style('jquerycss', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.10/themes/ui-darkness/jquery-ui.css');
    wp_head();
    
    include 'validations.php';
    include 'shortcodes.php';
   
    
?>

<?php
    if(isset($_POST['searchsubmit']))
    {
            if($_POST['searchsubmit']=='Full import')
            {
               if(add_action('wp_loaded', 'full_import') )
               {
                  add_action( 'admin_notices', 'my_notice' );
               }
            }
    }
    function full_import()
    {
            include 'movie-list.php';
            
            foreach(json_decode($lists,true) as $p)
            {
        
               $title = $p['title'];
               $year = $p['year'];
               $release = $p['release'];
               $director = $p['director'];
               $genre = $p['genre'];
               $language = $p['language'];
               $duration = $p['duration'];
               $cast = $p['cast'];
               $description = $p['description'];
               $country = $p['country'];
               $image = 'http://www.freeimageslive.com/galleries/backdrops/fractal/pics/fractals_surreal_colours.jpg';
               
               $content = '
               [caption id="" align="alignleft" width="300"]
               
               <img class="" src="'. $image.'" alt="" width="300" height="500"  class="size-medium wp-image-6" />"'.$title.'"
               
                
               [/caption]
               
                 '.$description.' <br>
                 
                Release Date : '.$release.' <br>
                Director : '.$director.' <br>
                Genre : '.$genre.' <br>
                Language(s) : '.$language.' <br>
                Duration : '.$duration.' <br>
                Cast : '.$cast.' <br>
                Country : '.$country.' <br><br>
                
                <iframe src="http://ide.creativegeek.ph:24214/links/" height="800" width="700" frameborder="1" ></iframe>
               
               ';
        

               example_insert_category($genre);
    
               if( check_category_name_exist($genre) )
               {
                      $id = categoryid($genre);
               }
    
                if( !wp_exist_post_by_title($title) )
                {
                     wp_insert_post(array(
                            'post_title'    => $title,
                            'post_content'  => $content,
                            'post_status'   => 'publish',
                            'post_author'   => 1,
                            'post_category' => array( $id )
                    ));
                } 
            }
                
    }
    
   ?>
