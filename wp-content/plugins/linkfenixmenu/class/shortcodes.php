<?php 

add_action( 'wp_head', 'first_initialized' );

function first_initialized()
{
    add_action( 'the_content', 'tv');
    add_action( 'the_content' , 'mov' );
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
     $frame_src = plugins_url( '../links/', __FILE__ ); 
     
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
                     $("#movieFrame").attr("src", "'.$frame_src.'/?scode='.$id.'&mtype='.$mtype.' "); 
                } );
            </script>

             <iframe id="movieFrame" width="900" height="900" frameborder="0"> 
                     Iframe Error!. Please contact the administrator 
             </iframe>
      ';
}

function content_mov($atts)
{
    $frame_src = plugins_url( '/links/', __FILE__ ); 
    
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
                     $("#movieFrame").attr("src", "'.$frame_src.'/?scode='.$id.'&mtype='.$mtype.' "); 
                } );
            </script>
             <iframe id="movieFrame" width="900" height="900" frameborder="0"> 
                     Iframe Error!. Please contact the administrator 
             </iframe>
      ';
    
}

?>



