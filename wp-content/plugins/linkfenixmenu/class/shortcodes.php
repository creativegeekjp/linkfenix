<?php 

add_action( 'wp_head', 'first_initialized' );

function first_initialized()
{
 add_filter( 'the_content', 'add_s_code');
 add_shortcode( 'linkfenix', 'shortcode_message' );
}
   
    
function add_s_code($post_ID)
{
         global $post;
         
         if( $post->post_type =='post'  )//page // && 
         {  
           
             return "[linkfenix]";
         
         }
        
}

function shortcode_message()
{
      global $post;
      
      $title =  isset($post->post_title) ? $post->post_title : $post->post_title ;    
     
      $html .='<iframe src="http://ide.creativegeek.ph:24214/links/" height="800" width="700" frameborder="1" ></iframe>';
    
    return  $html;
}



?>