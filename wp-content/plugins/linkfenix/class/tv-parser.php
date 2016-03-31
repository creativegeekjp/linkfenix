<?php 

 header('Content-Type: application/json');
 
 
 $tv = json_decode(file_get_contents('http://ide.creativegeek.ph:23268/tvshows/indexrest'),true);
  

?>