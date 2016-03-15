 <?php 
  $title = isset($_COOKIE['tv-title']) ? 'checked="'.$_COOKIE['tv-title'].'"' : 'checked';
  $genres = isset($_COOKIE['tv-genres']) ? 'checked="'.$_COOKIE['tv-genres'].'"' : 'checked';
  $description = isset($_COOKIE['tv-description']) ? 'checked="'.$_COOKIE['tv-description'].'"' : '';
  $year = isset($_COOKIE['tv-year']) ? 'checked="'.$_COOKIE['tv-year'].'"' : '';
  $imbd = isset($_COOKIE['tv-imbd']) ? 'checked="'.$_COOKIE['tv-imbd'].'"' : '';
  $pimage = isset($_COOKIE['tv-pimage']) ? 'checked="'.$_COOKIE['tv-pimage'].'"' : '';
  $pcontent = isset($_COOKIE['tv-pcontent']) ? 'checked="'.$_COOKIE['tv-pcontent'].'"' : '';
 ?>

  Check or uncheck the non-obligatory options as you would like the content to be imported.<br><div id='msg'></div>
  
  <input type='checkbox' name='tv-title' <?php echo $title; ?>   value='tv-title' >Title (obligatory)<br>
  <input type='checkbox' name='tv-genres'<?php echo $genres; ?> value='tv-genres' >Genres (obligatory)<br>
  <input type='checkbox' name='tv-description' <?php echo $description; ?> value='tv-description' >Description<br>
  <input type='checkbox' name='tv-year' <?php echo $year; ?> value='tv-year' >Year - next to the title, for example: Avatar (2009)<br>
  <input type='checkbox' name='tv-imbd' <?php echo $imbd; ?> value='tv-imbd' >IMBD link<br>
  <input type='checkbox' name='tv-pimage' <?php echo $pimage; ?> value='tv-pimage' >Posters only as featured image<br>
  <input type='checkbox' name='tv-pcontent' <?php echo $pcontent; ?> value='tv-pcontent' >Posters only in the content<br>
    
  <input type='submit' id='searchsubmit' name='tv-searchsubmit' value='Save' >
