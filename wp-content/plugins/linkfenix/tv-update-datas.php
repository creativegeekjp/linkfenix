<?php 
header('Content-type: application/json');

include 'class/time-zone.php';

include 'ip.php';


$display = false;


 $tv = json_decode(@file_get_contents(hostname.'seasons/getlatesepisodes'),true);

 
        foreach ($tv as $value)
        { 
                $options['data'][] = array
                (
                   
                    'id' => $value['id'],
                    'name'    => $value['name'],
                    'episode_id'  =>'1',
                );
           
        }
      

echo json_encode( $options ); 
   
?>

