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
               if(add_action('wp_loaded', 'full_import'))
               {
                  add_action( 'admin_notices', 'my_error_notice' );
               }
            }
    }
    function full_import()
    {
            $content = '[caption id="" align="alignnone" width="303"]<img class="" src="/wp-content/plugins/linkfenixmenu/uploads/images.jpg" alt="" width="303" height="53" /> 
            The tiger is the largest member of the felid (cat) family. They sport long, thick reddish coats with 
            white bellies and white and black tails. Their heads, bodies, tails and limbs have narrow black, brown 
            or gray stripes. There were once nine subspecies of tigers: Bengal, Siberian, Indochinese, South Chinese,
            Sumatran, Malayan, Caspian, Javan and Bali. Of these, the last three are extinct, one is extinct in the
            wild, and the rest are endangered.[/caption][avatar]';
            
            if( check_category_name_exist('My Category') )
            {
                wp_insert_post(array(
                        'post_title'    => 'Basic Facts About Tigers',
                        'post_content'  => $content,
                        'post_status'   => 'publish',
                        'post_author'   => 1,
                        'post_category' => array( categoryid('My Category') )
                ));
            }
            else
            {
              example_insert_category('My Category');
               
              $cid = categoryid('My Category');
               
               if( $cid > 0)
               {
                    wp_insert_post(array(
                            'post_title'    => 'Basic Facts About Tigers',
                            'post_content'  => $content,
                            'post_status'   => 'publish',
                            'post_author'   => 1,
                            'post_category' => array( $cid )
                        ));
               }
            }
    }
    
   ?>
