<?php 

add_action( 'wp_head', 'first_initialized' );

function first_initialized()
{
    add_action( 'the_content', 'add_s_code');
}

function check_register_code()
{
        global $post;
        
        include 'parser.php';
             
        foreach($movies['movies'] as $p)
        {
              if(preg_match_all( '#["'.$p['id'].'"*.*?]#s', $post->post_content, $matches ) )
              {
                    $array['id'] = $p['id'];
                    $array['name'] = $p['name'];
                    $array['year'] = $p['year'];
                    $array['release'] = $p['release'];
                    $array['director'] = $p['director'];
                    $array['genre'] = $p['genre'];
                    $array['language'] = $p['language'];
                    $array['duration'] = $p['duration'];
                    $array['cast'] = $p['cast'];
                    $array['description'] = $p['description'];
                    $array['country'] = $p['country'];
                    $array['image'] = $p['image'];
                    
                  return $array;
              }
        }
}

function add_s_code($content)
{
    
   global $post;
   
    $code_c = check_register_code();
    
    if ($code_c['id']) {
        
         add_shortcode(  $code_c['id'] , 'content_message' );

         return $content;
    }
}

function content_message()
{
      $code_c = check_register_code();

      return '
              <div id="main_wrap">
              
                  <div id="main_image">
                        <img src="'.$code_c['image'].'" alt="'.$code_c['description'].'" title="'.$code_c['name'].'" width="" height="" class="size-medium wp-image-6" /> 
                  </div>
                  
                  <div id="main_content">
                        
                      <div id="top">
                            '.$code_c['name'].' '.$code_c['year'].' '.$code_c['description'].' 
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
    
}

?>