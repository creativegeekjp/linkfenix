<?php 
header('Content-type: application/json');

include 'class/time-zone.php';

$page = 1;

while(true)
{

 $tv = json_decode(@file_get_contents('http://ide.creativegeek.ph:23268/tvshows/indexrest/?page='.$page++),true);

    if($tv==FALSE)
      {
          break;
      }
      else
      {
            foreach ($tv['tvshows']['viewVars']['tvshows']  as $key => $value)
            { 
                $i= 0;
                
                $tmp = array();
                $tmp_seasons = array();
                $tmp_seasons_id = array();
                
                foreach($value['genres'] as $key => $v)
                {
                    $tmp[$key+1] = $v['name'];
                }
                
                foreach($value['seasons'] as $key2 => $z)
                {
                    $tmp_seasons[$key2+1] = $z['name'];
                    $tmp_seasons_id[$key2+1] = $z['id'];
                }
                
                $options['data'][] = array
                (
                   
                    'id' => $value['id'],
                    'name'    => $value['name'],
                    'year'  => date('Y',strtotime($value['year'])),
                    'genre'  => implode('<br>',$tmp),
                    'created'  => date('Y-m-d',strtotime($value['created'])),
                    'indicator' => date("Y-m-d") ,
                    'seasons' => implode(',',$tmp_seasons),
                    'seasons_id' => implode(',',$tmp_seasons_id)
                );
               
              $i++;
              
            }
      }
}

echo json_encode($options); 

?>

