<?php 
header('Content-type: application/json');

$movies = json_decode(file_get_contents('http://ide.creativegeek.ph:23268/movies/indexrest'),true);

foreach ($movies['movies']['viewVars']['movies'] as $key => $value)
{ 
    $options[] = array
    (
            'label' => $value['name'],
            'id'    => $value['id']
    );
}

echo json_encode($options); 

?>


