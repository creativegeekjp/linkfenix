<?php 


 
if(isset($_POST['id']))
{
  
  // Gather post data.
$my_post = array(
    'post_title'    => 'My post',
    'post_content'  => 'This is my post.',
    'post_status'   => 'publish',
    'post_author'   => 1,
    'post_category' => array( 8,39 )
);
 
// Insert the post into the database.
wp_insert_post( $my_post );
 
}


 $returns = array
        (
           
            'mtype' => 'failure',
            'mcontent' => 'failed insert data'
                 
       );
       
echo json_encode($returns); 

?>



