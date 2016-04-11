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
              }
            }
    }
    
/*
*  function that include that updates iframe links, designs and other inforamations
*
*/
    function set_cookie_preferences()
    {
      
        $coder = isset($_POST['shortcoder']) ? $_POST['shortcoder'] : "" ;
        $links = isset($_POST['l'])  ? $_POST['l'] : "";
        $frame_d = isset($_POST['f'])  ? $_POST['f'] : "";
        $color = isset($_POST['color'])  ? $_POST['color'] : "";
        $family = isset($_POST['family'])  ? $_POST['family'] : "";
        $size = isset($_POST['size'])  ? $_POST['size'] : "";

        
        @file_get_contents(hostname.'options/updateshortcoder/'.$coder);
        
        /*Set active links default is 10*/
        @file_get_contents(hostname.'iframelinks/setactivelinks/'.$links);
        
        /*Set active iframe design*/
        @file_get_contents(hostname.'iframes/editframe/'.$frame_d);
        
        /*Set active iframe color*/
        @file_get_contents(hostname.'iframecolors/updatecolor/'.$color);
        
        /*Set active font family*/
        @file_get_contents(hostname.'fontfamilies/updatefamily/'.$family);
        
        /*Set active font sizes*/
        @file_get_contents(hostname.'fontsizes/updatesize/'.$size);
        
       
    }
/*
*  function for importing tv-shows and store to wordpress database 
*
*  Those who movies that has seasons and episodes only will be imported to database
*
*/
function full_import_tv()
    {
         $listopt = options('optiontv');//optiontv or optionmovie
         
         $page = 1;

         while(true)
         {
         
          $tv = json_decode(@file_get_contents(hostname.'tvshows/indexrest/?page='.$page++),true);
         
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
                             $episodes = json_decode(file_get_contents(hostname.'seasons/viewrest/'.$season['id']),true);
                      
                             foreach ($episodes['episodes']  as  $epi)
                             { 
                                  
                                   $year = isset($listopt['year']) ? '('.date('Y',strtotime( $code_c['year'])).' )' : "" ;
                                    
                                   $tvtitle = isset($listopt['title']) ? $code_c['name'].'/'.$epi['title'] : "" ;
                                   
                                   $post_titles = $tvtitle.''.$year;
                                   
                                   $seasons_title = isset($season['name']) ?  $code_c['name'].' > '.$season['name'] :  $code_c['name'].' > ' ;
                                   
                                   $imdb = isset($listopt['imdb']) ? '<a href="'.$epi['imdb'].'">IMDb</a>' : "" ;
                                   
                                   $image =  isset($listopt['pcontent'])  ? '<img class="" src="'.$epi['image'].'" alt="'.$code_c['name'].'" title="'.$code_c['name'].'" />' : "" ;
                         
                                   $pimage = isset($listopt['pimage']) ? true : false ;


                                   $category = isset($listopt['genres']) ?  implode( "," , $tmp ) : "" ;
                        
                                   $desc1 =  isset($listopt['description']) ?  $epi['description'] : "";
                                     
                                    if (strlen($desc1) > 200)
                                    {
                                       $str = substr($desc1, 0, 150) . '...';
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
                                       <br>
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
                                            generate_featured_image( $epi['fimage'],   $post_id );
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
        @file_get_contents(hostname.'options/tvupdateoptions/?chk='. urlencode(serialize($_POST['opt'])));
    }
/*
*  function that include those obligatory and non obligatory
*
*  options before importing movies
*
*/
    function set_cookie_options()
    {
        @file_get_contents(hostname.'options/mvupdateoptions/?chk='. urlencode(serialize($_POST['opt'])));
    }
    
/*
*  function for importing movies and store to wordpress database 
*
*
*/
    function full_import()
    {
        $listopt = options('optionmovie');//optiontv or optionmovie
        
          $page = 1;
            
          while(true)
          {
              $movies = json_decode(@file_get_contents(hostname.'movies/indexrest/?page='. $page++),true);
              
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
                         
                         
                         $title = isset($listopt['title']) ? $code_c['name'] : "" ;
                         
                         $year = isset($listopt['year']) ? '('.date('Y',strtotime( $code_c['year'])).' )' : "" ;
                           
                         $post_titles =   $title.''.$year  ; 
                         
                         $category = isset($listopt['genres']) ?  implode( "," , $tmp ) : "" ;
                         
                         
                         $desc1 =  isset($listopt['description']) ?  $code_c['description'] : "";
                         
                         
                         if (strlen($desc1) > 200)
                         {
                            $str = substr($desc1, 0, 150) . '...';
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
                         
              
                         
                         $imdb = isset($listopt['imdb']) ? '<a href="'.$code_c['imdb'].'">IMDb</a>' : "" ;
                       
                         $image =  isset($listopt['pcontent'])  ? '<img class="" src="'.$code_c['image'].'" alt="'.$code_c['name'].'" title="'.$code_c['name'].'" />' : "" ;
                         
                         $pimage = isset($listopt['pimage']) ? true : false ;

                         
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
                                     <br>
                                     <!-- shortcode for iframe -->
                                     [tv mtype=mov id='.$code_c['id'].']
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
                              generate_featured_image( $code_c['fimage'],   $post_id );
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

/*
*  selected options to be imported to the database
*/
 function options($controller)
    {
           switch($controller)
           {
                case 'optionmovie' :
                         
                        foreach( json_decode(@file_get_contents(hostname.'options/mvactiveoptions'),true)as $key => $options)
                        {
                          switch($options['id'])
                          {
                             case 1 :
                                 $title =  'checked';
                             break;
                             
                             case 2 :
                                  $genres = 'checked';
                             break;
                             
                             case 3 :
                                  $description = 'checked';
                             break;
                             
                             case 4 :
                                  $year = 'checked';
                             break;
                             
                             case 5 :
                                  $imdb = 'checked';
                             break;
                             
                             case 6 :
                                  $pimage = 'checked';
                             break;
                             
                             case 7 :
                                  $pcontent = 'checked';
                             break;
                          }
                        }
                        
                        return array(
                            'title' => $title,
                            'genres' => $genres,
                            'description' => $description,
                            'year' => $year,
                            'imdb' => $imdb,
                            'pimage' => $pimage,
                            'pcontent' => $pcontent
                        );
                break;
                
                case 'optiontv' :
                    
                         foreach( json_decode(@file_get_contents(hostname.'options/tvactiveoptions'),true)as $key => $options)
                        {
                          switch($options['id'])
                          {
                             case 8 :
                                 $title =  'checked';
                             break;
                             
                             case 9 :
                                  $genres = 'checked';
                             break;
                             
                             case 10 :
                                  $description = 'checked';
                             break;
                             
                             case 11 :
                                  $year ='checked';
                             break;
                             
                             case 12 :
                                  $imdb = 'checked';
                             break;
                             
                             case 13 :
                                  $pimage = 'checked';
                             break;
                             
                             case 14 :
                                  $pcontent = 'checked';
                             break;
                          }
                        }
                        
                        return array(
                            'title' => $title,
                            'genres' => $genres,
                            'description' => $description,
                            'year' => $year,
                            'imdb' => $imdb,
                            'pimage' => $pimage,
                            'pcontent' => $pcontent
                        );
                break;
           }
            
    }



?>
