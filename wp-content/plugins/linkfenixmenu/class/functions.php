<?php
    wp_enqueue_script('jquerylib', 'https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js');
    wp_enqueue_script('jqueryui', 'https://code.jquery.com/ui/1.11.4/jquery-ui.js');
    wp_enqueue_style('jquerycss', 'https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css');
    wp_head();
?>

<?php
    if(isset($_POST['searchsubmit']))
    {
            if($_POST['searchsubmit']=='Full import')
            {
               if(add_action('wp_loaded', 'full_import'))
               {
                  add_action( 'admin_notices', 'my_error_notice' );
               }
            }
    }
    function full_import()
    {
        
            $my_post = array(
                    'post_title'    => 'Lorem Ipsom Dolores',
                    'post_content'  => '[caption id="" align="alignnone" width="303"]<img class="" src="http://s.wordpress.org/style/images/wp-header-logo.png" alt="" width="303" height="53" /> testimage[/caption]',
                    'post_status'   => 'publish',
                    'post_author'   => 1,
                    'post_category' => array( 8,39 )
            );
            
            wp_insert_post( $my_post );
    }
   
?>
