<?php 

$page = 1;
$page1= 1;
$page2 = 1;

while(true)
{
    $movies = json_decode(@file_get_contents('http://ide.creativegeek.ph:23268/movies/indexrest/?page='. $page++),true);
    
    if($movies==FALSE)
      {
          break;
      }
      else
      {
            foreach ($movies['movies']['viewVars']['movies']  as $value)
            { 
                $list1[] = array
                (
                    'id' => $value['id'],
                    'label'    => ucfirst($value['name']) ." (". date('Y',strtotime($value['year'])) .")",
                    'mtype' => 'mov'
                );
            }
      }
}
while(true)
{

 $tv = json_decode(@file_get_contents('http://ide.creativegeek.ph:23268/tvshows/indexrest/?page='.$page2++),true);

    if($tv==FALSE)
      {
          break;
      }
      else
      {
            foreach ($tv['tvshows']['viewVars']['tvshows']  as  $value)
            { 
             
                foreach($value['seasons'] as $season)
                {
                  $episode = getEpisodes($season['id']);
                  
                  $list1[] = array
                    (
                        
                        'id' => $episode['id'],
                        'label'   => ucfirst($value['name']).', '.$episode['name'],
                        'mtype' => 'tv'
                    );
                }   
            }
      }
}

function getEpisodes($id)
{
    $episodes = json_decode(file_get_contents('http://ide.creativegeek.ph:23268/seasons/viewrest/'.$id),true);
 
        foreach ($episodes['episodes']  as  $epi)
        { 
            return array
            (
               
                'id' => $epi['id'],
                'name' => $epi['name']
            );
        }
     
    }

header('Content-type: application/json');
echo json_encode( $list1 ); 

?>

