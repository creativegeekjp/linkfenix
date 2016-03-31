<?php 

$seasons_id = $_REQUEST['tv-seasons'];

$seasons = json_decode(@file_get_contents('http://ide.creativegeek.ph:23268/tvshows/viewrest/'.$seasons_id),true);


foreach($seasons as $key => $names)
{
    
  if($key=='name')
  
        $tVname = $names;
        
}
foreach ($seasons['seasons']  as $key => $value)
    { 
        
          $id = isset($value['id']) ? $value['id'] : "no data";
          $name = isset($value['name']) != "" ? $value['name'] : "no data";
          $scode = isset($value['scode']) != "" ? $value['scode'] : "no data";
           
          $listseasons['data'][] = array
            (
               
                'id' => $id,
                'tvname' => $tVname,
                'scode' => $scode,
                'seasonsname'    => $name
            );
    }

echo json_encode($listseasons); 




?>