<?php 
function frames()
{
      
    foreach (json_decode(@file_get_contents('http://ide.creativegeek.ph:23268/iframes/design'),true) as  $iframe)
    { 
         $active_frame = $iframe['name'];
     
    }

 return $active_frame ; 

}

function tv($content)
{
  
    add_shortcode(  'tv' , 'content_tv' );
 
    return $content;
   
}

function mov($content)
{
  
    add_shortcode(  'mov' , 'content_mov' );
 
    return $content;
 
}


function content_tv($atts)
{  
  
    extract(shortcode_atts(array(
          'mtype' => '',
          'id' => '',
    ), $atts));
     
    foreach($atts as $key => $attributes)
    {
       switch($key)
       {
           case 'mtype' :
               $mtype = $attributes;
           break;
           
           case 'id' :
               $id = $attributes;
           break;
        
       }
    }
    
      return '
            <script type="text/javascript">
                $(function() {
                     $("#movieFrame").attr("src", "'.plugins_url( frames() , __FILE__ ).'/?scode='.$id.'&mtype='.$mtype.' "); 
                } );
            </script>

             <iframe id="movieFrame" width="900" height="900" frameborder="0"> 
                     Iframe Error!. Please contact the administrator 
             </iframe>
      ';
      
}

function content_mov($atts)
{
    

   extract(shortcode_atts(array(
          'mtype' => '',
          'id' => '',
    ), $atts));
     
    foreach($atts as $key => $attributes)
    {
       switch($key)
       {
           case 'mtype' :
               $mtype = $attributes;
           break;
           
           case 'id' :
               $id = $attributes;
           break;
         
       }
    }
    return '
            <script type="text/javascript">
                $(function() {
                     $("#movieFrame").attr("src", "'.plugins_url( frames() , __FILE__ ).'/?scode='.$id.'&mtype='.$mtype.' "); 
                } );
            </script>

             <iframe id="movieFrame" width="900" height="900" frameborder="0"> 
                     Iframe Error!. Please contact the administrator 
             </iframe>
     ';
    
} 

add_action( 'the_content', 'tv');
add_action( 'the_content' , 'mov' );
?>



