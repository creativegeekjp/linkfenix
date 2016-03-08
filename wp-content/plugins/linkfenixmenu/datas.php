<?php 
header('Content-type: application/json');
    
include 'class/parser.php';

$sorts = 'name' ? 'name' : 'name' ;

switch($sorts)
{
    
    case 'name' :
        uasort($movies['movies'], function($item1, $item2){
         return $item1['name'] > $item2['name'];
        });
    break;
    
    // case 'created' :
    //     uasort($movies['movies'], function($item1, $item2){
    //      return $item1['created'] > $item2['created'];
    //     });
    // break;
    
    default: 
        uasort($movies['movies'], function($item1, $item2){
         return $item1['name'] > $item2['name'];
            });
    break;
}


foreach ($movies['movies'] as $key => $value)
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
        'genre'  => implode(',',$tmp)
             
    );

  $i++;
}
echo json_encode($options); 
?>

