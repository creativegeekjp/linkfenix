<?php 
 
 header('Content-Type: application/json');
 
 
 $tv = json_decode(file_get_contents(hostname.'tvshows/indexrest'),true);
  

?>