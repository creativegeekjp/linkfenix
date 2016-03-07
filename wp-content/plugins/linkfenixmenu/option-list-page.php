 <?php 
  $title = isset($_COOKIE['title']) ? 'checked="'.$_COOKIE['title'].'"' : '';
  $genres = isset($_COOKIE['genres']) ? 'checked="'.$_COOKIE['genres'].'"' : '';
  $description = isset($_COOKIE['description']) ? 'checked="'.$_COOKIE['description'].'"' : '';
  $year = isset($_COOKIE['year']) ? 'checked="'.$_COOKIE['year'].'"' : '';
  $imbd = isset($_COOKIE['imbd']) ? 'checked="'.$_COOKIE['imbd'].'"' : '';
  $pimage = isset($_COOKIE['pimage']) ? 'checked="'.$_COOKIE['pimage'].'"' : '';
  $pcontent = isset($_COOKIE['pcontent']) ? 'checked="'.$_COOKIE['pcontent'].'"' : '';
 ?>

  Check or uncheck the non-obligatory options as you would like the content to be imported.<br><div id='msg'></div>
  
  <input type='checkbox' name='title' <?php echo $title; ?>   value='title' >Title (obligatory)<br>
  <input type='checkbox' name='genres'<?php echo $genres; ?> value='genres' >Genres (obligatory)<br>
  <input type='checkbox' name='description' <?php echo $description; ?> value='description' >Description<br>
  <input type='checkbox' name='year' <?php echo $year; ?> value='year' >Year - next to the title, for example: Avatar (2009)<br>
  <input type='checkbox' name='imbd' <?php echo $imbd; ?> value='imbd' >IMBD link<br>
  <input type='checkbox' name='pimage' <?php echo $pimage; ?> value='pimage' >Posters only as featured image<br>
  <input type='checkbox' name='pcontent' <?php echo $pcontent; ?> value='pcontent' >Posters only in the content<br>
    
  <input type='submit' id='searchsubmit' name='searchsubmit' value='Save' >
