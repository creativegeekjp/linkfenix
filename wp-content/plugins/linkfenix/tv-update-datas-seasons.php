<?php 
include 'ip.php';

$seasons_id = $_REQUEST['tv-update-seasons'];


foreach (json_decode(@file_get_contents(hostname.'seasons/getlateseasonseepi/'.$seasons_id),true) as $key => $value)
{ 
    
      $id = isset($value['id']) ? $value['id'] : "no data";
      $tvname = isset($value['name']) != "" ? $value['name'] : "no data";
      $seasons_name = isset($value['season_name']) != "" ? $value['season_name'] : "no data";
      $scode = isset($value['scode']) != "" ? $value['scode'] : "no data";
       
      $listseasons['data'][] = array
        (
           
            'id' => $id,
            'name' => $tvname,
            'scode' => $scode,
            'season_name'    => $seasons_name
        );
}

echo json_encode($listseasons); 




?>