<?php 
header('Content-type: application/json');

include 'class/time-zone.php';

include 'ip.php';

$page = 1;

/* get those latest published episodes and mark its tvshow in red*/

foreach( json_decode(@file_get_contents(hostname.'seasons/getlatesebytvshows'),true) as $clicked)
{
    $new_tv[] = $clicked['id']; //clicked, name
}

while(true)
{

 $tv = json_decode(@file_get_contents(hostname.'tvshows/indexrest/?page='.$page++),true);

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
                
                foreach($value['genres'] as $key => $v)
                {
                    $tmp[$key+1] = $v['name'];
                }
                
                if(in_array($value['id'], $new_tv))
                {
                      $options['data'][] = array
                    (
                       
                        'id' => $value['id'],
                        'name'    => $value['name'],
                        'year'  => date('Y',strtotime($value['year'])),
                        'genre'  => implode('<br>',$tmp),
                        'created'  => date('Y-m-d',strtotime($value['created'])),
                        'indicator' => date("Y-m-d"),
                        'clicked' => 0
                       
                    );
                }
                else
                {
                      $options['data'][] = array
                    (
                       
                        'id' => $value['id'],
                        'name'    => $value['name'],
                        'year'  => date('Y',strtotime($value['year'])),
                        'genre'  => implode('<br>',$tmp),
                        'created'  => date('Y-m-d',strtotime($value['created'])),
                        'indicator' => date("Y-m-d"),
                        'clicked' =>  1
                       
                    );
                }
                
                
              $i++;
            }
      }
}

echo json_encode($options); 


?>

