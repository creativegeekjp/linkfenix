<?php 
 header('Content-Type: application/json');
 

$movies = json_decode(@file_get_contents('http://ide.creativegeek.ph:23268/movies/indexrest'),true);
    

?>