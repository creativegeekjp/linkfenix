<?php 
header('Content-type: application/json');
    
$movie = file_get_contents('http://ide.creativegeek.ph:23268/movies/indexrest');

$decoded = json_decode($movie,true);

foreach ($decoded['movies'] as $key => $value)
{ 
    $options[] = array
    (
            'label' => $value['name'],
            'id'    => $value['id']
    );
}

echo json_encode($options); 

?>


