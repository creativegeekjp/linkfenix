 <?php 

foreach( json_decode(@file_get_contents(hostname.'options/tvactiveoptions'),true)as $key => $options)
{
   switch($options['id'])//verify if id is active then marke it as checked
  {
     case 8 :
         $title =  'checked="checked"';
         $title_id = $options['id'];
     break;
     
     case 9 :
          $genres = 'checked="checked"';
          $genres_id = $options['id'];
     break;
     
     case 10 :
          $description = 'checked="checked"';
          $description_id = $options['id'];
     break;
     
     case 11 :
          $year = 'checked="checked"';
          $year_id = $options['id'];
     break;
     
     case 12 :
          $imdb = 'checked="checked"';
          $imdb_id = $options['id'];
     break;
     
     case 13 :
          $pimage = 'checked="checked"';
          $pimage_id = $options['id'];
     break;
     
     case 14 :
          $pcontent = 'checked="checked"';
          $pcontent_id = $options['id'];
     break;
  }
}

 ?>

  Check or uncheck the non-obligatory options as you would like the content to be imported.<br><div id='msg'></div>
  
  <input type='checkbox' name='opt[]' <?php echo $title; ?>   value='8' >Title (obligatory)<br>
  <input type='checkbox' name='opt[]'<?php echo $genres; ?> value='9' >Genres (obligatory)<br>
  <input type='checkbox' name='opt[]' <?php echo $description; ?> value='10' >Description<br>
  <input type='checkbox' name='opt[]' <?php echo $year; ?> value='11' >Year - next to the title, for example: Avatar (2009)<br>
  <input type='checkbox' name='opt[]' <?php echo $imdb; ?> value='12' >IMDB link<br>
  <input type='checkbox' name='opt[]' <?php echo $pimage; ?> value='13' >Posters only as featured image<br>
  <input type='checkbox' name='opt[]' <?php echo $pcontent; ?> value='14' >Posters only in the content<br>
    
  <input type='submit' id='searchsubmit' name='tv-searchsubmit' value='Save' >

