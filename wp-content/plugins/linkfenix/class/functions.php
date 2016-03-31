<?php
/*
*  statement that tooks required action eg. import, updates frames etc.
*
*/


    if(isset($_POST['tv-searchsubmit']))
    {
         if($_POST['tv-searchsubmit']=='Full Import')
            {
               if(add_action('wp_loaded', 'full_import_tv') )
               {
                  add_action( 'admin_notices', 'my_notice_tv' );
               }
            }
            else if($_POST['tv-searchsubmit']=='Save')
            {
              if(add_action( 'init', 'set_cookie_options_tv' ))
              {
                  add_action( 'admin_notices', 'my_option_notice' );
                  
                  redirects();
                   
              }
            }
    }
    if(isset($_POST['searchsubmit']))
    {
            if($_POST['searchsubmit']=='Full import')
            {
               if(add_action('wp_loaded', 'full_import') )
               {
                  add_action( 'admin_notices', 'my_notice' );
               }
            }
            else if($_POST['searchsubmit']=='Save')
            {
              if(add_action( 'init', 'set_cookie_options' ))
              {
                  add_action( 'admin_notices', 'my_option_notice' );
                  //add_action( 'admin_init','redirects');
                  redirects();
                   
              }
            }
    }
    if(isset($_POST['pref-searchsubmit']))
    {
       if($_POST['pref-searchsubmit']=='Save Changes')
            {
              if(add_action( 'init', 'set_cookie_preferences' ))
              {
                  add_action( 'admin_notices', 'my_option_preferences' );
                  
                  redirects();
                   
              }
            }
    }
    
/*
*  function that redirects to current url after clicking button save
*
*/
    function redirects()
    {
        ///sleep(1);
        //wp_redirect($_SERVER['REQUEST_URI']);
         header("Refresh: 0; url='".$_SERVER['REQUEST_URI']."' ");
    }
/*
*  function that include that updates iframe links, designs and other inforamations
*
*/
    function set_cookie_preferences()
    {
        $t_billion = (20 * 365 * 24 * 60 * 60);
        
        if(isset($_POST['shortcoder'])){
         setcookie( 'shortcoder', 'checked', time() + $t_billion);
        }else{
         setcookie( 'shortcoder', '', time() - $t_billion);
        }
        if(isset($_POST['link-a'])){
         setcookie( 'link-a', 'checked', time() + $t_billion);
        }else{
         setcookie( 'link-a', '', time() - $t_billion);
        }
        if(isset($_POST['link-b'])){
         setcookie( 'link-b', 'checked', time() + $t_billion);
        }else{
         setcookie( 'link-b', '', time() - $t_billion);
        }
        if(isset($_POST['link-c'])){
         setcookie( 'link-c', 'checked', time() + $t_billion);
        }else{
         setcookie( 'link-c', '', time() - $t_billion);
        }
        if(isset($_POST['link-d'])){
         setcookie( 'link-d', 'checked', time() + $t_billion);
        }else{
         setcookie( 'link-d', '', time() - $t_billion);
        }
        if(isset($_POST['link-e'])){
         setcookie( 'link-e', 'checked', time() + $t_billion);
        }else{
         setcookie( 'link-e', '', time() - $t_billion);
        }
        if(isset($_POST['link-f'])){
         setcookie( 'link-f', 'checked', time() + $t_billion);
        }else{
         setcookie( 'link-f', '', time() - $t_billion);
        }
        if(isset($_POST['design-a'])){
         setcookie( 'design-a', 'checked', time() + $t_billion);
        }else{
         setcookie( 'design-a', '', time() - $t_billion);
        }
        if(isset($_POST['design-b'])){
         setcookie( 'design-b', 'checked', time() + $t_billion);
        }else{
         setcookie( 'design-b', '', time() - $t_billion);
        }
        if(isset($_POST['design-c'])){
         setcookie( 'design-c', 'checked', time() + $t_billion);
        }else{
         setcookie( 'design-c', '', time() - $t_billion);
        }
        if(isset($_POST['design-d'])){
         setcookie( 'design-d', 'checked', time() + $t_billion);
        }else{
         setcookie( 'design-d', '', time() - $t_billion);
        }
        if(isset($_POST['design-e'])){
         setcookie( 'design-e', 'checked', time() + $t_billion);
        }else{
         setcookie( 'design-e', '', time() - $t_billion);
        }
        
    }
/*
*  function for importing tv-shows and store to wordpress database 
*
*  Those who movies that has seasons and episodes only will be imported to database
*
*/
    function full_import_tv()
    {
         $page = 1;

         while(true)
         {
         
          $tv = json_decode(@file_get_contents('http://ide.creativegeek.ph:23268/tvshows/indexrest/?page='.$page++),true);
         
             if($tv==FALSE)
               {
                   break;
               }
               else
               {
                   foreach($tv['tvshows']['viewVars']['tvshows'] as $code_c)
                   {
                        $i= 0;
             
                        $tmp = array();
                        
                        foreach($code_c['genres'] as $key => $v)
                        {
                            $tmp[$key+1] = $v['name'];
                        }
                        
                        
                        $tmp_cast = array();
                        
                        foreach($code_c['casts'] as $key_c => $casts)
                        {
                            $tmp_cast [$key_c+1] = $casts['name'];
                        }
                        
                        
                        example_insert_category(implode( "," , $tmp ));
                        
                        if( check_category_name_exist(implode( "," , $tmp )) )
                        {
                               $id = categoryid(implode( "," , $tmp ));
                        }
                        else if( implode(',',$tmp) )
                        {
                               $id = $id; //assign category name for those who are uncategorized
                        }
                         
                     
                        foreach($code_c['seasons'] as $key => $season)
                        {
                             $episodes = json_decode(file_get_contents('http://ide.creativegeek.ph:23268/seasons/viewrest/'.$season['id']),true);
                      
                             foreach ($episodes['episodes']  as  $epi)
                             { 
                                  
                                   
                                   $post_titles = isset($_COOKIE['tv-title']) ? $code_c['name'].'/'.$epi['title'] : "" ;
                                   
                                   $seasons_title = isset($season['name']) ?  $code_c['name'].' > '.$season['name'] :  $code_c['name'].' > ' ;
                                   
                                    $imdb = isset($_COOKIE['tv-imbd']) ? '<a href="'.$epi['IMDB'].'">IMDb</a>' : "" ;
                                   
                                   $image =  isset($_COOKIE['tv-pcontent'])  ? '<img class="" src="'.$epi['image'].'" alt="'.$code_c['name'].'" title="'.$code_c['name'].'" width="100%" />' : "" ;
                         
                                   $pimage = isset($_COOKIE['tv-pimage']) ? true : false ;


                                   $category = isset($_COOKIE['tv-genres']) ?  implode( "," , $tmp ) : "" ;
                        
                                   $desc1 =  isset($_COOKIE['tv-description']) ?  $epi['description'] : "";
                                     
                                    if (strlen($desc1) > 150)
                                    {
                                       $str = substr($desc1, 0, 100) . '...';
                                    }
                                    else
                                    {
                                       $str = $desc1;
                                    }
                         
                                   $description =  $str.'
                                                 Release Date: '.date('F j, Y',strtotime( $epi['releasedate'])).'
                                                 Duration    : '.$epi['duration'].'
                                                 Cast(s)        : '. implode(',',$tmp_cast ).' 
                                                 
                                                 ';
                                   
                                
                                   $content = '
                                   <!-- div holder for our content image-->
                                     <div class="thumbnail">
                                           '.$image.'
                                     </div>
                                    
                                   <!-- div holder for our description, year etc. -->
                                     <div class="details">
                                          <div class="pad">
                                            '. $seasons_title.'
                                             
                                            '.$imdb.'
                                            '.$description.'
                                          </div>
                                     </div>
                                    
                                     <!-- shortcode for iframe -->
                                     [tv mtype=tv id='.$epi['id'].']
                                    ';
                                    
                                   
                                    if( !wp_exist_post_by_title($post_titles) )
                                    {
                                        $post_id = wp_insert_post(array(
                                                'post_title'    =>  $post_titles,
                                                'post_content'  =>  $content,
                                                'post_status'   => 'publish',
                                                'post_author'   => 1,
                                                'post_category' => array( $id )
                                        ));
                                        
                                         if($pimage==true)
                                         {
                                            generate_featured_image( $epi['image'],   $post_id );
                                         }
                                        
                                    } 
                             }
                        }

                         $i++;
                     }
               }
         }

    }
/*
*  function that include those obligatory and non obligatory
*
*  options before importing tv shows
*
*/
    function set_cookie_options_tv()
    {
        
        $t_billion = (20 * 365 * 24 * 60 * 60);
        
        if(isset($_POST['tv-title']))
         setcookie( 'tv-title', 'checked', time() + $t_billion);
        else
         setcookie( 'tv-title', '', time() - $t_billion);
         
        
        if(isset($_POST['tv-genres']))
         setcookie( 'tv-genres', 'checked', time() + $t_billion);
        else
         setcookie( 'tv-genres', '', time() - $t_billion);
         
         
        if(isset($_POST['tv-description']))
         setcookie( 'tv-description', 'checked', time() + $t_billion);
        else
         setcookie( 'tv-description', '', time() - $t_billion);
         
         
        if(isset($_POST['tv-year']))
         setcookie( 'tv-year', 'checked', time() + $t_billion);
        else
         setcookie( 'tv-year', '', time() - $t_billion);
        
        
        if(isset($_POST['tv-imbd']))
         setcookie( 'tv-imbd', 'checked', time() + $t_billion);
        else
         setcookie( 'tv-imbd', '', time() - $t_billion);
         
         
        if(isset($_POST['tv-pimage']))
         setcookie( 'tv-pimage', 'checked', time() + $t_billion);
        else
         setcookie( 'tv-pimage', '', time() - $t_billion);
         
         
        if(isset($_POST['tv-pcontent']))
         setcookie( 'tv-pcontent', 'checked', time() + $t_billion);
        else
         setcookie( 'tv-pcontent', '', time() - $t_billion);
    }
/*
*  function that include those obligatory and non obligatory
*
*  options before importing movies
*
*/
    function set_cookie_options()
    {
     
        $t_billion = (20 * 365 * 24 * 60 * 60);
        
        if(isset($_POST['title']))
         setcookie( 'title', 'checked', time() + $t_billion);
        else
         setcookie( 'title', '', time() - $t_billion);
         
        
        if(isset($_POST['genres']))
         setcookie( 'genres', 'checked', time() + $t_billion);
        else
         setcookie( 'genres', '', time() - $t_billion);
         
         
        if(isset($_POST['description']))
         setcookie( 'description', 'checked', time() + $t_billion);
        else
         setcookie( 'description', '', time() - $t_billion);
         
         
        if(isset($_POST['year']))
         setcookie( 'year', 'checked', time() + $t_billion);
        else
         setcookie( 'year', '', time() - $t_billion);
        
        
        if(isset($_POST['imbd']))
         setcookie( 'imbd', 'checked', time() + $t_billion);
        else
         setcookie( 'imbd', '', time() - $t_billion);
         
         
        if(isset($_POST['pimage']))
         setcookie( 'pimage', 'checked', time() + $t_billion);
        else
         setcookie( 'pimage', '', time() - $t_billion);
         
         
        if(isset($_POST['pcontent']))
         setcookie( 'pcontent', 'checked', time() + $t_billion);
        else
         setcookie( 'pcontent', '', time() - $t_billion);
        
    }
    
/*
*  function for importing movies and store to wordpress database 
*
*
*/
    function full_import()
    {
          $page = 1;
            
          while(true)
          {
              $movies = json_decode(@file_get_contents('http://ide.creativegeek.ph:23268/movies/indexrest/?page='. $page++),true);
              
              if($movies==FALSE)
              {
                  break;
              }
              else
              {
                      foreach($movies['movies']['viewVars']['movies'] as $code_c)
                      {
                         $i= 0;
              
                         $tmp = array();
                         
                         foreach($code_c['genres'] as $key => $v)
                         {
                             $tmp[$key+1] = $v['name'];
                         }
                         
                         
                         $tmp_cast = array();
                         
                         foreach($code_c['casts'] as $key_c => $casts)
                         {
                             $tmp_cast [$key_c+1] = $casts['name'];
                         }
                         
                         
                         $title = isset($_COOKIE['title']) ? $code_c['name'] : "" ;
                         
                         $year = isset($_COOKIE['year']) ? '('.date('Y',strtotime( $code_c['year'])).' )' : "" ;
                           
                         $post_titles =   $title.''.$year  ; 
                         
                         $category = isset($_COOKIE['genres']) ?  implode( "," , $tmp ) : "" ;
                         
                         
                         $desc1 =  isset($_COOKIE['description']) ?  $code_c['description'] : "";
                         
                         
                         if (strlen($desc1) > 150)
                         {
                            $str = substr($desc1, 0, 100) . '...';
                         }
                         else
                         {
                            $str = $desc1;
                         }
                             
   
                         $description = $str.'
                                          
                                          Release Date: '.date('F j, Y',strtotime( $code_c['releasedate'])).'
                                          Director    : '.$code_c['director'].'
                                          Genres      : '.implode(',',$tmp).'
                                          Language(s)    : '.$code_c['languages'].'
                                          Duration    : '.$code_c['duration'].'
                                          Cast(s)        : '. implode(',',$tmp_cast ).'
                                          Country     : '.$code_c['country'] ;
                         
              
                         
                         $imdb = isset($_COOKIE['imbd']) ? '<a href="'.$code_c['IMDB'].'">IMDb</a>' : "" ;
                       
                         $image =  isset($_COOKIE['pcontent'])  ? '<img class="" src="'.$code_c['image'].'" alt="'.$code_c['name'].'" title="'.$code_c['name'].'" width="100%" />' : "" ;
                         
                         $pimage = isset($_COOKIE['pimage']) ? true : false ;

                         
                         $content = '
                                   <!-- div holder for our content image-->
                                     <div class="thumbnail">
                                           '.$image.'
                                     </div>
                                    
                                   <!-- div holder for our description, year etc. -->
                                     <div class="details">
                                          <div class="pad">
                                          
                                            '.$imdb.'
                                            '.$description.'
                                          </div>
                                     </div>
                                    
                                     <!-- shortcode for iframe -->
                                     [tv mtype=tv id='.$code_c['id'].']
                         ';
                         
                         
                         example_insert_category( $category );
              
                         if( check_category_name_exist(  $category ) )
                         {
                                $id = categoryid( $category );
                         }
                         else if(  $category )
                         {
                                $id = $id; //asssign category for those who are uncategorized
                         }
              
                         if( !wp_exist_post_by_title( $post_titles ) )
                         {
                              $post_id = wp_insert_post(array(
                                     'post_title'    => $post_titles,
                                     'post_content'  => $content,
                                     'post_status'   => 'publish',
                                     'post_author'   => 1,
                                     'post_category' => array( $id )
                             ));
                              
                              
                           if($pimage==true)
                           {
                              generate_featured_image( $code_c['image'],   $post_id );
                           }
                           
                         }
                         
                          $i++;
                      }
              }
              
          }
    }
    
/*
*  function for generating featured image both movies and tv-shows that 
*
*  uploads image to its uploads folder located at wp-content/uploads
*
*/    
function generate_featured_image( $image_url, $post_id  )
{
         $random_digit=rand(0000,9999);
         
         $upload_dir = wp_upload_dir();
         
         $image_data = file_get_contents($image_url);
         
         $filename = basename($image_url);
         
         if(wp_mkdir_p($upload_dir['path'])) { 
          
           $file = $upload_dir['path'] . '/' .$random_digit.'-'.date('Y-m-d').'-'. $filename;
         
         }else{                                    
          
            $file = $upload_dir['basedir'] . '/' .$random_digit.'-'.date('Y-m-d').'-'. $filename;
        
         }
        
         file_put_contents($file, $image_data);
     
         $wp_filetype = wp_check_filetype($filename, null );
         
         $attachment = array
         (
             'post_mime_type' => $wp_filetype['type'],
             'post_title' => sanitize_file_name($filename),
             'post_content' => '',
             'post_status' => 'inherit'
         );
         
         $attach_id = wp_insert_attachment( $attachment, $file, $post_id );
         
         require_once(ABSPATH . 'wp-admin/includes/image.php');
         
         $attach_data = wp_generate_attachment_metadata( $attach_id, $file );
         
         wp_update_attachment_metadata( $attach_id, $attach_data );
          
         set_post_thumbnail( $post_id, $attach_id );
}
?>
