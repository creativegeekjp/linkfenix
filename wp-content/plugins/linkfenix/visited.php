<?php
include 'ip.php';

/*
* update movie or episodes and mark it as visited
*/

$mtype = isset($_POST['mtype']) ? $_POST['mtype'] : "" ;

$id = isset($_POST['id']) ? $_POST['id'] : "" ;

switch($mtype)
{
    case 'mov' :
        
        updatemovievisited($id);
        
    break;
    
    case 'tv' :
        
        updatetvvisted($id);
        
    break;
    
}

function updatemovievisited($id)
{
     if(@file_get_contents(hostname.'movies/visited/'.$id))
     {
       return true;
     }
}

function updatetvvisted($id)
{
     if(@file_get_contents(hostname.'episodes/visited/'.$id))
     {
       return true;
     }
}
?>