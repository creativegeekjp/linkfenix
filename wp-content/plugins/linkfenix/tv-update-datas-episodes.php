<?php 
include 'ip.php';

$episodes_id = $_REQUEST['tv-update-episodes'];


foreach (json_decode(@file_get_contents(hostname.'seasons/getlatestepisodes/'.$episodes_id),true)  as $key => $value)
{ 

      $id = isset($value['id']) ? $value['id'] : "no data";
      $name = isset($value['episode_name']) != "" ? $value['episode_name'] : "no data";
      $ecode = isset($value['ecode']) != "" ? $value['ecode'] : "no data";
      $title = isset($value['title']) != "" ? $value['title'] : "no data";
      
      $listepisodes['data'][] = array
        (
            'id' => $id,
            'ecode' => $ecode,
            'title' => $title,
            'episode_name'  => $name
        );
}
echo json_encode($listepisodes); 

?>