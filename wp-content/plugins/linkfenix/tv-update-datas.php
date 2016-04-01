<?php 
header('Content-type: application/json');

include 'class/time-zone.php';

$page = 1;

$display = false;

while(true)
{

 $tv = json_decode(@file_get_contents('http://ide.creativegeek.ph:23268/tvshows/indexrest/?page='.$page++),true);

    if($tv==FALSE)
      {
          break;
      }
      else
      {
        foreach ($tv['tvshows']['viewVars']['tvshows']  as $value)
        { 
               
                $seasonsS = array();
                
                foreach($value['seasons'] as $key => $v)
                {
                     $episodeS = json_decode(@file_get_contents('http://ide.creativegeek.ph:23268/seasons/viewrest/'.$v['id']),true);
            
                    foreach ($episodeS['episodes']  as $valuess)
                    { 
                        if( date('Y-m-d',strtotime($valuess['created'])) >= date("Y-m-d"))
                        {
                        //   if($value['id'] ==$episodeS['tvshow_id'])
                        //   {
                        //       $display = true;
                        //   }
                        }
                       
                       
                    }
                }
                
            //   if($display==true)
            //   {
            //         $options['data'][] = array
            //                 (
                               
            //                     'id' => $value['id'],
            //                     'name'    => $value['name'],
            //                     'year'  => date('Y',strtotime($value['year'])),
            //                     'genre'  => implode('<br>',$tmp),
            //                     'created'  => date('Y-m-d',strtotime($value['created'])),
            //                     'indicator' => date("Y-m-d") 
                               
            //                 );
            //   }
         
           
        }
      }
}

echo json_encode( $options ); 
   
?>

