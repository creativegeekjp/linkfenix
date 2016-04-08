<?php 
  foreach (json_decode(@file_get_contents(hostname.'iframes/design'),true) as  $iframe)
    { 
      $id = $iframe['id'];
    }
    
    $frame = "";
    
    switch($id)
    {
        case 1 :
            $name = plugins_url( 'iframe/frame-designs/1.png' , __FILE__ );
            $frame_a = 'checked=checked';
        break;
        
        case 2 :
            $name = plugins_url( 'iframe/frame-designs/2.png' , __FILE__ );
            $frame_b = 'checked=checked';
        break;
        
        case 3 :
            $name = plugins_url( 'iframe/frame-designs/3.png' , __FILE__ );
            $frame_c = 'checked=checked';
        break;
        
        case 4 :
            $name = plugins_url( 'iframe/frame-designs/4.png' , __FILE__ );
            $frame_d = 'checked=checked';
        break;
        
        case 5 :
            $name = plugins_url( 'iframe/frame-designs/5.png' , __FILE__ );
            $frame_e = 'checked=checked';
        break;
    }
    
       


?>
<script type="text/javascript">
$(function() {
            $("#timg").append("<img id='img' style='width:500px;'  src='<?php echo $name ;?>'/>");
        });
</script> 

<?php 
   

    foreach (json_decode(@file_get_contents(hostname.'options/shortcoder'),true) as  $coder)
    { 
       $scid = $coder['id'];
       $scoder = isset($scid) ? 'checked="checked"' : '';
    }
    
   
    
    foreach (json_decode(@file_get_contents(hostname.'iframelinks/activecount'),true) as  $iframelinks)
    { 
      $lid = $iframelinks['id'];
    }
          
    switch($lid)
    {
        case 1;
        $link_a = 'checked=checked';
        break;
        
        case 2;
        $link_b = 'checked=checked';
        break;
        
        case 3;
        $link_c = 'checked=checked';
        break;
        
        case 4;
        $link_d = 'checked=checked';
        break;
        
        case 5;
        $link_e = 'checked=checked';
        break;
        
        case 6;
        $link_f = 'checked=checked';
        break;
    }

 ?>

 Check or uncheck the non-obligatory options as you would like the content to be updated.<br><div id='msg'></div>
 
 <div style=" width: 600px; ">
   <div style=" width: 300px;float: right;">
             Active Frame:
        <div id="timg"></div>
        <br>  <input type='submit'  class='button-primary' name='pref-searchsubmit' value='Save Changes' >
   </div>
   
    <div style=" width: 300px;float: right;">
         Shortcoder<br>
            <input type='checkbox' name='shortcoder' <?php echo $scoder; ?>   value='15' >Enable Shortcoder<br>
            
            Iframe Links<br>
            <input type='checkbox' id='chkf' name='l'<?php echo $link_a; ?> value='1' >5<br>
            <input type='checkbox' id='chkf' name='l'<?php echo $link_b; ?> value='2' >10<br>
            <input type='checkbox' name='l'<?php echo $link_c; ?> value='3' >15<br>
            <input type='checkbox' name='l'<?php echo $link_d; ?> value='4' >20<br>
            <input type='checkbox' name='l'<?php echo $link_e; ?> value='5' >50<br>
            <input type='checkbox' name='l'<?php echo $link_f; ?> value='6' >Show All<br>
            
            Iframe Designs<br>
            <input type='checkbox' name='f'<?php echo $frame_a; ?> value='1' >Design 1 <br>
            <input type='checkbox' name='f'<?php echo $frame_b; ?> value='2' >Design 2 <br>
            <input type='checkbox' name='f'<?php echo $frame_c; ?> value='3' >Design 3 <br>
            <input type='checkbox' name='f'<?php echo $frame_d; ?> value='4' >Design 4 <br>
            <input type='checkbox' name='f'<?php echo $frame_e; ?> value='5' >Design 5 <br><br><br>
   </div>
 </div>
 






