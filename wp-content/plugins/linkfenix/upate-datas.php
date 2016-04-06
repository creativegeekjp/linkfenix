<?php 
header('Content-type: application/json');
include 'ip.php';
include 'class/time-zone.php';

$page = 1;

while(true)
{
    
    $movies = json_decode(@file_get_contents(hostname.'movies/indexrest/?page='. $page++),true);
    
    if($movies==FALSE)
      {
          break;
      }
      else
      {
            foreach ($movies['movies']['viewVars']['movies']  as $key => $value)
            { 
                $i= 0;
                
                $tmp = array();
                
                foreach($value['genres'] as $key => $v)
                {
                    $tmp[$key+1] = $v['name'];
                }
                
                if(  date('Y-m-d',strtotime($value['created'])) >= date("Y-m-d") )
                {
                     $options['data'][] = array
                    (
                       
                        'id' => $value['id'],
                        'name'    => $value['name'],
                        'year'  => date('Y',strtotime($value['year'])),
                        'genre'  => implode('<br>',$tmp),
                        'created'  => date('Y-m-d',strtotime($value['created'])),
                        'indicator' => date("Y-m-d") ,
                    );
                }
               
              $i++;
              
            }
      }
}

 
echo json_encode($options); 

?>

