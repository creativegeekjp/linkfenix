<?php 
header('Content-type: application/json');
    
include 'class/parser.php';

foreach ($movies['movies']['viewVars']['movies']  as $key => $value)
{ 
    $i= 0;
    
    $tmp = array();
    
    foreach($value['genres'] as $key => $v)
    {
        $tmp[$key+1] = $v['name'];
    }
    
    $options['data'][] = array
    (
       
        'id' => $value['id'],
        'name'    => $value['name'],
        'year'  => date('Y',strtotime($value['year'])),
        'genre'  => implode('<br>',$tmp),
        'created'  => date('m/d/Y',strtotime($value['created']))
             
    );

  $i++;
}

echo json_encode($options); 

?>

