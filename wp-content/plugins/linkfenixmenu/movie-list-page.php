  Select movie from the list<br><div id='msg'></div>
  
<?php 
header('Content-type: application/json');
    
include 'class/parser.php';

$i = 1;

foreach($movies['movies'] as $code_c)
{
    
     echo $i.'.) '.$code_c['name'].' ( '.date('Y',strtotime( $code_c['year'])).' ) <br>';
     $i++;
}

?>


