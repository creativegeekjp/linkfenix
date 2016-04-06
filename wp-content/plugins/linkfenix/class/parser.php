<?php 

header('Content-Type: application/json');
 

$movies = json_decode(@file_get_contents(hostname.'movies/indexrest'),true);
    

?>