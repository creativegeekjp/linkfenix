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
            include 'parser.php';
            
            foreach($movies['movies'] as $code_c)
            {
               
               $content = '
                    <div id="main_wrap">
              
                  <div id="main_image">
                        <img src="'.$code_c['image'].'" alt="'.$code_c['description'].'" title="'.$code_c['title'].'" width="" height="" class="size-medium wp-image-6" /> 
                  </div>
                  
                  <div id="main_content">
                        
                      <div id="top">
                            '.$code_c['title'].' '.$code_c['year'].' '.$code_c['description'].' 
                      </div>
                      
                      <div id="bottom">
                            Release Date: '.$code_c['release'].'
                            Director    : '.$code_c['director'].'
                            Genres      : '.$code_c['genre'].'
                            Language    : '.$code_c['language'].'
                            Duration    : '.$code_c['duration'].'
                            Cast        : '.$code_c['cast'].'
                            Country     : '.$code_c['country'].'
                      </div>
                    
                  </div>
              
                   <iframe src="http://ide.creativegeek.ph:24214/links/" id="stream_img" width="900" height="900" frameborder="0"> Iframe Error!. Please contact the administrator </iframe>
               
              </div>
               ';
        

               example_insert_category($code_c['genre']);
    
               if( check_category_name_exist($code_c['genre']) )
               {
                      $id = categoryid($code_c['genre']);
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
            }
                
    }
    
   ?>
