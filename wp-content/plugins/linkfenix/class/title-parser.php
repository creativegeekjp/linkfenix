<?php 
/*
*
*  Url parser that search movie title and tvshows
*
*/
 header('Content-type: application/json');
 
 $datus = json_decode(@file_get_contents('http://ide.creativegeek.ph:23268/movies/search/'.trim($_GET['term'])),true);
  
    foreach($datus as $key => $value)
    {
         $v = $key; //type mov or tv
    }
   
     foreach($datus[$v] as $key => $value)
        {
            if($v=='mov')
            {
                 $arr[] = array(
                        'id' => $value['id'],
                        'label' => $value['name'].'('.date('Y',strtotime($value['year'])).')',
                        'mtype' => $v
                    );
            }else{
                 foreach($value as $tvs)
                 {
                      $arr[] = array(
                            'id' => $tvs['id'],
                            'label' => $tvs['title'].'('.$tvs['name'].')',
                            'mtype' => $v
                         );
                 }
            }
        }
   
echo json_encode($arr);

?>

