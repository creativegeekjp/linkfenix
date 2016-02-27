<?php
    wp_enqueue_script('jquerylib', 'https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js');
    wp_enqueue_script('jqueryui', 'https://code.jquery.com/ui/1.11.4/jquery-ui.js');
    wp_enqueue_style('jquerycss', 'https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css');
    wp_head();
    
    include_once 'validations.php';
    include_once 'shortcodes.php';
   
    
?>

<?php
    if(isset($_POST['searchsubmit']))
    {
            if($_POST['searchsubmit']=='Full import')
            {
               if(add_action('wp_loaded', 'full_import') )
               {
                  add_action( 'admin_notices', 'my_error_notice' );
               }
            }
    }
    function full_import()
    {
            include 'json-data.php';
             
            $json_a=json_decode($string,true);
        
            foreach($json_a[Movies] as $p)
            {
        
               $content = '[caption id="" align="alignnone" width="303"]<img class="" src="'.$p[image].'" alt="" width="303" height="53" />"'.$p[description].'"[/caption]';

               example_insert_category($p[genre]);
    
               if( check_category_name_exist($p[genre]) )
               {
                      $id = categoryid($p[genre]);
               }

                if( !wp_exist_post_by_title($p[title]) )
                {
                     wp_insert_post(array(
                            'post_title'    => $p[title],
                            'post_content'  => $content,
                            'post_status'   => 'publish',
                            'post_author'   => 1,
                            'post_category' => array( $id )
                    ));
                } 
            }
                
    }
    
   ?>
