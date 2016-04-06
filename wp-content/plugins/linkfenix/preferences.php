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
    
    
    foreach (json_decode(@file_get_contents(hostname.'iframes/design'),true) as  $iframe)
    { 
      $id = $iframe['id'];
    }
          
    switch($id)
    {
        case 1;
        $frame_a = 'checked=checked';
        break;
        
        case 2;
        $frame_b = 'checked=checked';
        break;
        
        case 3;
        $frame_c = 'checked=checked';
        break;
        
        case 4;
        $frame_d = 'checked=checked';
        break;
        
        case 5;
        $frame_e = 'checked=checked';
        break;
    }

    
 ?>
 
 Check or uncheck the non-obligatory options as you would like the content to be updated.<br><div id='msg'></div>
 
 
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
<input type='checkbox' name='f'<?php echo $frame_a; ?> value='1' >Design 1 <a target="_blank" href="<?php echo plugins_url( 'iframe/frame-designs/1.png' , __FILE__ )?>">View</a><br>
<input type='checkbox' name='f'<?php echo $frame_b; ?> value='2' >Design 2 <a target="_blank" href="<?php echo plugins_url( 'iframe/frame-designs/2.png' , __FILE__ )?>">View</a><br>
<input type='checkbox' name='f'<?php echo $frame_c; ?> value='3' >Design 3 <a target="_blank" href="<?php echo plugins_url( 'iframe/frame-designs/3.png' , __FILE__ )?>">View</a><br>
<input type='checkbox' name='f'<?php echo $frame_d; ?> value='4' >Design 4 <a target="_blank" href="<?php echo plugins_url( 'iframe/frame-designs/4.png' , __FILE__ )?>">View</a><br>
<input type='checkbox' name='f'<?php echo $frame_e; ?> value='5' >Design 5 <a target="_blank" href="<?php echo plugins_url( 'iframe/frame-designs/5.png' , __FILE__ )?>">View</a><br><br><br>



<input type='submit' id='searchsubmit' name='pref-searchsubmit' value='Save Changes' >


