 <?php 

foreach( json_decode(@file_get_contents(hostname.'options/mvactiveoptions'),true)as $key => $options)
{
  switch($options['id'])//verify if id is active then marked it as checked
  {
     case 1 :
         $title =  'checked="checked"';
         $title_id = $options['id'];
     break;
     
     case 2 :
          $genres = 'checked="checked"';
          $genres_id = $options['id'];
     break;
     
     case 3 :
          $description = 'checked="checked"';
          $description_id = $options['id'];
     break;
     
     case 4 :
          $year = 'checked="checked"';
          $year_id = $options['id'];
     break;
     
     case 5 :
          $imdb = 'checked="checked"';
          $imdb_id = $options['id'];
     break;
     
     case 6 :
          $pimage = 'checked="checked"';
          $pimage_id = $options['id'];
     break;
     
     case 7 :
          $pcontent = 'checked="checked"';
          $pcontent_id = $options['id'];
     break;
  }
}

 ?>

  Check or uncheck the non-obligatory options as you would like the content to be imported.<br><div id='msg'></div>
  
  <input type='checkbox' name='opt[]' <?php echo $title; ?>   value='1' >Title (obligatory)<br>
  <input type='checkbox' name='opt[]'<?php echo $genres; ?> value='2' >Genres (obligatory)<br>
  <input type='checkbox' name='opt[]' <?php echo $description; ?> value='3' >Description<br>
  <input type='checkbox' name='opt[]' <?php echo $year; ?> value='4' >Year - next to the title, for example: Avatar (2009)<br>
  <input type='checkbox' name='opt[]' <?php echo $imdb; ?> value='5' >IMDB link<br>
  <input type='checkbox' name='opt[]' <?php echo $pimage; ?> value='6' >Posters only as featured image<br>
  <input type='checkbox' name='opt[]' <?php echo $pcontent; ?> value='7' >Posters only in the content<br>
    
  <input type='submit' id='searchsubmit' name='searchsubmit' value='Save' >
