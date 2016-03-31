s<?php 

    $scoder = isset($_COOKIE['shortcoder']) ? 'checked="'.$_COOKIE['shortcoder'].'"' : '';
    
    $link_a = isset($_COOKIE['link-a']) ? 'checked="'.$_COOKIE['link-a'].'"' : '';
    $link_b = isset($_COOKIE['link-b']) ? 'checked="'.$_COOKIE['link-b'].'"' : '';
    $link_c = isset($_COOKIE['link-c']) ? 'checked="'.$_COOKIE['link-c'].'"' : '';
    $link_d = isset($_COOKIE['link-d']) ? 'checked="'.$_COOKIE['link-d'].'"' : '';
    $link_e = isset($_COOKIE['link-e']) ? 'checked="'.$_COOKIE['link-e'].'"' : '';
    $link_f = isset($_COOKIE['link-f']) ? 'checked="'.$_COOKIE['link-f'].'"' : '';
    
    
    $frame_a = isset($_COOKIE['design-a']) ? 'checked="'.$_COOKIE['design-a'].'"' : '';
    $frame_b = isset($_COOKIE['design-b']) ? 'checked="'.$_COOKIE['design-b'].'"' : '';
    $frame_c = isset($_COOKIE['design-c']) ? 'checked="'.$_COOKIE['design-c'].'"' : '';
    $frame_d = isset($_COOKIE['design-d']) ? 'checked="'.$_COOKIE['design-d'].'"' : '';
    $frame_e = isset($_COOKIE['design-e']) ? 'checked="'.$_COOKIE['design-e'].'"' : '';
    
 ?>
 
Check or uncheck the non-obligatory options as you would like the content to be updated.<br><div id='msg'></div>
 
 
Shortcoder<br>
<input type='checkbox' name='shortcoder' <?php echo $scoder; ?>   value='shortcoder' >Enable Shortcoder<br>

Iframe Links<br>
<input type='checkbox' name='link-a'<?php echo $link_a; ?> value='link-a' >5<br>
<input type='checkbox' name='link-b'<?php echo $link_b; ?> value='link-b' >10<br>
<input type='checkbox' name='link-c'<?php echo $link_c; ?> value='link-c' >15<br>
<input type='checkbox' name='link-d'<?php echo $link_d; ?> value='link-d' >20<br>
<input type='checkbox' name='link-e'<?php echo $link_e; ?> value='link-e' >50<br>
<input type='checkbox' name='link-f'<?php echo $link_f; ?> value='link-f' >Show All<br>

Iframe Designs<br>
<input type='checkbox' name='design-a'<?php echo $frame_a; ?> value='design-a' ><a href="">Design 1 </a><br>
<input type='checkbox' name='design-b'<?php echo $frame_b; ?> value='design-b' ><a href="">Design 2 </a><br>
<input type='checkbox' name='design-c'<?php echo $frame_c; ?> value='design-c' ><a href="">Design 3 </a><br>
<input type='checkbox' name='design-d'<?php echo $frame_d; ?> value='design-d' ><a href="">Design 4 </a><br>
<input type='checkbox' name='design-e'<?php echo $frame_e; ?> value='design-e' ><a href="">Design 5 </a><br><br><br>


<input type='submit' id='searchsubmit' name='pref-searchsubmit' value='Save Changes' >
