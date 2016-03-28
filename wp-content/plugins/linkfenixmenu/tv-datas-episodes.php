<?php 
$episodes_id = $_REQUEST['tv-episodes'];

$episodes = json_decode(@file_get_contents('http://ide.creativegeek.ph:23268/seasons/viewrest/'.$episodes_id),true);

foreach ($episodes['episodes']  as $key => $value)
{ 

      $id = isset($value['id']) ? $value['id'] : "no data";
      $name = isset($value['name']) != "" ? $value['name'] : "no data";
      $ecode = isset($value['ecode']) != "" ? $value['ecode'] : "no data";
      $title = isset($value['title']) != "" ? $value['title'] : "no data";
      
      $listepisodes['data'][] = array
        (
            'id' => $id,
            'ecode' => $ecode,
            'title' => $title,
            'episodesname'  => $name,
            'created'  => date('Y-m-d',strtotime($value['created'])),
            'indicator' => date("Y-m-d") 
        );
}
echo json_encode($listepisodes); 

?>