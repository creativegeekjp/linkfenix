<?php 
include 'ip.php';

$seasons_id = $_REQUEST['tv-seasons'];

/* get those latest published episodes and mark its tvshow in red*/
foreach( json_decode(@file_get_contents(hostname.'seasons/getlatesebyseasons/'.$seasons_id),true) as $clicked)
{
    $new_tv_seasons[] = $clicked['id']; //clicked, name
}
foreach($seasons = json_decode(@file_get_contents(hostname.'tvshows/viewrest/'.$seasons_id),true) as $key => $names)
{
    
  if($key=='name')
  
        $tVname = $names;
        
}
foreach ($seasons['seasons']  as $key => $value)
    { 
        
          $id = isset($value['id']) ? $value['id'] : "";
          $name = isset($value['name']) != "" ? $value['name'] : "";
          $scode = isset($value['scode']) != "" ? $value['scode'] : "";
          
          if(in_array($value['id'], $new_tv_seasons))
          {
            $listseasons['data'][] = array
            (
               
                'id' => $id,
                'tvname' => $tVname,
                'scode' => $scode,
                'seasonsname'    => $name,
                'clicked' => 0
            );
          }
          else
          {
            $listseasons['data'][] = array
            (
               
                'id' => $id,
                'tvname' => $tVname,
                'scode' => $scode,
                'seasonsname'    => $name,
                'clicked' => 1
            );
          }
          
    }

echo json_encode($listseasons); 




?>