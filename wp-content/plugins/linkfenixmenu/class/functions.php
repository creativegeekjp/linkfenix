<?php
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
             
             
                        $content = '
                             <div class="responsive">
                                 <img src="'.$code_c['image'].'" alt="'.$code_c['description'].'" title="'.$code_c['name'].'" width="" height="" class="size-medium wp-image-6" /> 
                             </div>
                             
                             <div class="responsive">
                                     <p>
                                        '.$code_c['name'].' ( '.date('Y',strtotime( $code_c['year'])).' ) '.$code_c['description'].'
                                     </p>
                                     
                                     <p>
                                        Release Date: '.date('F j, Y',strtotime( $code_c['releasedate'])).'
                                         Director    : '.$code_c['director'].'
                                         Genres      : '.implode(',',$tmp).'
                                         Language(s)    : '.$code_c['languages'].'
                                         Duration    : '.$code_c['duration'].'
                                         Cast(s)        : '. implode(',',$tmp_cast ).'
                                         Country     : '.$code_c['country'].'
                                     </p>
                             </div>
                             <br><br>
                              <iframe src="http://ide.creativegeek.ph:24214/links/" width="900" height="900" frameborder="0"> 
                                      Iframe Error!. Please contact the administrator 
                              </iframe>
                        ';
                      
                    
                        example_insert_category(implode( "," , $tmp ));
             
                        if( check_category_name_exist(implode( "," , $tmp )) )
                        {
                               $id = categoryid(implode( "," , $tmp ));
                        }
                        else if( implode(',',$tmp) )
                        {
                               $id = $id; //assign category name for those who are uncategorized
                        }
             
                         if( !wp_exist_post_by_title($code_c['name']) )
                         {
                              wp_insert_post(array(
                                     'post_title'    => $code_c['name'],
                                     'post_content'  => $content,
                                     'post_status'   => 'publish',
                                     'post_author'   => 1,
                                     'post_category' => array( $id )
                             ));
                         } 
                         
                         $i++;
                     }
               }
         }

    }
    function set_cookie_options_tv()
    {
        
        $t_billion = 2000000000;//2 bilion year 2033
        
        if(isset($_POST['tv-title']))
         setcookie( 'tv-title', 'checked', time() + $t_billion, COOKIEPATH, COOKIE_DOMAIN );
        else
         setcookie( 'tv-title', '', time() - $t_billion, COOKIEPATH, COOKIE_DOMAIN );
         
        
        if(isset($_POST['tv-genres']))
         setcookie( 'tv-genres', 'checked', time() + $t_billion, COOKIEPATH, COOKIE_DOMAIN );
        else
         setcookie( 'tv-genres', '', time() - $t_billion, COOKIEPATH, COOKIE_DOMAIN );
         
         
        if(isset($_POST['tv-description']))
         setcookie( 'tv-description', 'checked', time() + $t_billion, COOKIEPATH, COOKIE_DOMAIN );
        else
         setcookie( 'tv-description', '', time() - $t_billion, COOKIEPATH, COOKIE_DOMAIN );
         
         
        if(isset($_POST['tv-year']))
         setcookie( 'tv-year', 'checked', time() + $t_billion, COOKIEPATH, COOKIE_DOMAIN );
        else
         setcookie( 'tv-year', '', time() - $t_billion, COOKIEPATH, COOKIE_DOMAIN );
        
        
        if(isset($_POST['tv-imbd']))
         setcookie( 'tv-imbd', 'checked', time() + $t_billion, COOKIEPATH, COOKIE_DOMAIN );
        else
         setcookie( 'tv-imbd', '', time() - $t_billion, COOKIEPATH, COOKIE_DOMAIN );
         
         
        if(isset($_POST['tv-pimage']))
         setcookie( 'tv-pimage', 'checked', time() + $t_billion, COOKIEPATH, COOKIE_DOMAIN );
        else
         setcookie( 'tv-pimage', '', time() - $t_billion, COOKIEPATH, COOKIE_DOMAIN );
         
         
        if(isset($_POST['tv-pcontent']))
         setcookie( 'tv-pcontent', 'checked', time() + $t_billion, COOKIEPATH, COOKIE_DOMAIN );
        else
         setcookie( 'tv-pcontent', '', time() - $t_billion, COOKIEPATH, COOKIE_DOMAIN );
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
    function redirects()
    {
        ///sleep(1);
        //wp_redirect($_SERVER['REQUEST_URI']);
         header("Refresh: 0; url='".$_SERVER['REQUEST_URI']."' ");
    }
    function set_cookie_options()
    {
     
        $t_billion = 2000000000;//2 bilion year 2033
        
        if(isset($_POST['title']))
         setcookie( 'title', 'checked', time() + $t_billion, COOKIEPATH, COOKIE_DOMAIN );
        else
         setcookie( 'title', '', time() - $t_billion, COOKIEPATH, COOKIE_DOMAIN );
         
        
        if(isset($_POST['genres']))
         setcookie( 'genres', 'checked', time() + $t_billion, COOKIEPATH, COOKIE_DOMAIN );
        else
         setcookie( 'genres', '', time() - $t_billion, COOKIEPATH, COOKIE_DOMAIN );
         
         
        if(isset($_POST['description']))
         setcookie( 'description', 'checked', time() + $t_billion, COOKIEPATH, COOKIE_DOMAIN );
        else
         setcookie( 'description', '', time() - $t_billion, COOKIEPATH, COOKIE_DOMAIN );
         
         
        if(isset($_POST['year']))
         setcookie( 'year', 'checked', time() + $t_billion, COOKIEPATH, COOKIE_DOMAIN );
        else
         setcookie( 'year', '', time() - $t_billion, COOKIEPATH, COOKIE_DOMAIN );
        
        
        if(isset($_POST['imbd']))
         setcookie( 'imbd', 'checked', time() + $t_billion, COOKIEPATH, COOKIE_DOMAIN );
        else
         setcookie( 'imbd', '', time() - $t_billion, COOKIEPATH, COOKIE_DOMAIN );
         
         
        if(isset($_POST['pimage']))
         setcookie( 'pimage', 'checked', time() + $t_billion, COOKIEPATH, COOKIE_DOMAIN );
        else
         setcookie( 'pimage', '', time() - $t_billion, COOKIEPATH, COOKIE_DOMAIN );
         
         
        if(isset($_POST['pcontent']))
         setcookie( 'pcontent', 'checked', time() + $t_billion, COOKIEPATH, COOKIE_DOMAIN );
        else
         setcookie( 'pcontent', '', time() - $t_billion, COOKIEPATH, COOKIE_DOMAIN );
        
    }
    
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
              
              
                         $content = '
                              <div class="responsive">
                                  <img src="'.$code_c['image'].'" alt="'.$code_c['description'].'" title="'.$code_c['name'].'" width="" height="" class="size-medium wp-image-6" /> 
                              </div>
                              
                              <div class="responsive">
                                      <p>
                                         '.$code_c['name'].' ( '.date('Y',strtotime( $code_c['year'])).' ) '.$code_c['description'].'
                                      </p>
                                      
                                      <p>
                                         Release Date: '.date('F j, Y',strtotime( $code_c['releasedate'])).'
                                          Director    : '.$code_c['director'].'
                                          Genres      : '.implode(',',$tmp).'
                                          Language(s)    : '.$code_c['languages'].'
                                          Duration    : '.$code_c['duration'].'
                                          Cast(s)        : '. implode(',',$tmp_cast ).'
                                          Country     : '.$code_c['country'].'
                                      </p>
                              </div>
                              <br><br>
                               <iframe src="http://ide.creativegeek.ph:24214/links/" width="900" height="900" frameborder="0"> 
                                       Iframe Error!. Please contact the administrator 
                               </iframe>
                         ';
                       
                     
                         example_insert_category(implode( "," , $tmp ));
              
                         if( check_category_name_exist(implode( "," , $tmp )) )
                         {
                                $id = categoryid(implode( "," , $tmp ));
                         }
                         else if( implode(',',$tmp) )
                         {
                                $id = $id; //asssign category for those who are uncategorized
                         }
              
                          if( !wp_exist_post_by_title($code_c['name']) )
                          {
                               wp_insert_post(array(
                                      'post_title'    => $code_c['name'],
                                      'post_content'  => $content,
                                      'post_status'   => 'publish',
                                      'post_author'   => 1,
                                      'post_category' => array( $id )
                              ));
                          } 
                          
                          $i++;
                      }
                  }
              }
              
          }
    }
?>
