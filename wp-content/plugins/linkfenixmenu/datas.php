<?php 
header('Content-type: application/json');

include 'class/time-zone.php';

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
        'created'  => date('Y-m-d',strtotime($value['created'])),
        'indicator' => date("Y-m-d") ,
    );
   
  $i++;
  
}
 
echo json_encode($options); 

?>

