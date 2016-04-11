<?php 
include 'ip.php';

$episodes_id = $_REQUEST['tv-episodes'];

/* get those latest published episodes and mark its tvshow in red*/
foreach( json_decode(@file_get_contents(hostname.'seasons/getlatesebyepisodes/'.$episodes_id),true) as $clicked)
{
    $new_tv_episodes[] = $clicked['id']; //clicked, name
}

$episodes = json_decode(@file_get_contents(hostname.'seasons/viewrest/'.$episodes_id),true);

foreach ($episodes['episodes']  as $key => $value)
{ 

      $id = isset($value['id']) ? $value['id'] : "";
      $name = isset($value['name']) != "" ? $value['name'] : "";
      $ecode = isset($value['ecode']) != "" ? $value['ecode'] : "";
      $title = isset($value['title']) != "" ? $value['title'] : "";
      
        if(in_array($value['id'], $new_tv_episodes))
        {
             $listepisodes['data'][] = array
            (
                'id' => $id,
                'ecode' => $ecode,
                'title' => $title,
                'episodesname'  => $name,
                'created'  => date('Y-m-d',strtotime($value['created'])),
                'indicator' => date("Y-m-d") ,
                'clicked' => 0
            );
        }
        else
        {
            $listepisodes['data'][] = array
            (
                'id' => $id,
                'ecode' => $ecode,
                'title' => $title,
                'episodesname'  => $name,
                'created'  => date('Y-m-d',strtotime($value['created'])),
                'indicator' => date("Y-m-d") ,
                'clicked' => 1
            );
        }
     
}
echo json_encode($listepisodes); 

?>