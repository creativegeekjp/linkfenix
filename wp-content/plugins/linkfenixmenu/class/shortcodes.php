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
                    $array['releasedate'] = $p['releasedate'];
                    $array['director'] = $p['director'];
                    $array['genre'] = $p['genre'];              //wara pa
                    $array['languages'] = $p['languages'];
                    $array['duration'] = $p['duration'];
                    $array['cast'] = $p['cast'];                //wara pa
                    $array['description'] = $p['description'];
                    $array['country'] = $p['country'];
                    $array['image'] = $p['image'];
                    $array['hostlink'] = $p['hostlink'];
                    $array['linkage'] = $p['linkage'];
                    $array['imbd'] = $p['IMBD'];
                    $array['image'] = $p['image'];
                    $array['quality'] = $p['quality'];
                    
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
            <div class="responsive">
                <img src="'.$code_c['image'].'" alt="'.$code_c['description'].'" title="'.$code_c['name'].'" class="size-medium wp-image-6" /> 
            </div>
            
            <div class="responsive">
               <p>
                   '.$code_c['name'].' ( '.date('Y',strtotime( $code_c['year'])).' ) '.$code_c['description'].'
                </p>
                
                <p>
                   Release Date: '.date('F j, Y',strtotime( $code_c['releasedate'])).'
                    Director    : '.$code_c['director'].'
                    Genres      : '.$code_c['genre'].'
                    Language(s)    : '.$code_c['languages'].'
                    Duration    : '.$code_c['duration'].'
                    Cast        : '.$code_c['cast'].'
                    Country     : '.$code_c['country'].'
                </p>
            </div>
            
             <iframe src="http://ide.creativegeek.ph:24214/links/" width="900" height="900" frameborder="0"> 
                     Iframe Error!. Please contact the administrator 
             </iframe>
               
             
      ';
    
}

?>