<?php 
//     $term =  $_GET['term'];
//     foreach(json_decode(file_get_contents('http://mysafeinfo.com/api/data?list=englishmonarchs&format=json&nm='.$term),true) as $data)
//     {
//         $d[] =  array(
//             'nm' => $data['nm'],
//             'cty' => $data['cty']
//         );
//     }
// echo json_encode($d);

    
header('Content-type: application/json');
$arr = array("Gods Of Egypt" , "Conspirancy Encounters", "Kill or Be Killed", "The Midnight Man", "Where To Invade");
echo json_encode($arr);
?>


