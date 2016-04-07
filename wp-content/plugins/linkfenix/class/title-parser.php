<?php 
/*
*
*  Url parser that search movie title and tvshows
*
*/

 include '../ip.php';
 
 $datus = json_decode(@file_get_contents(hostname.'seasons/search/'.trim($_GET['term'])),true);
  
    foreach($datus as $key => $value)
    {
         $v = $key; //type movie or tv shows
    }
   
     foreach($datus[$v] as $key => $value)
        {
            if($v=='mov')
            {
                 $arr[] = array(
                        'id' => $value['id'],
                        'label' => $value['name'].' ('.date('Y',strtotime($value['year'])).')',
                        'mtype' => $v
                    );
            }else{
                 
                      $arr[] = array(
                            'id' => $value['id'],
                            'label' => $value['tvname'].' '.$value['title'].' ('.$value['scode'].' - '.$value['ecode'].') ',
                            'mtype' => $v
                         );
                 
            }
        }

 header('Content-type: application/json');
echo json_encode($arr);

?>

