<?php 
/*
//add_action('wp_loaded', 'full_import') ;
header('Content-type: application/json');
    
include 'class/parser.php';
   
$data = $_POST['id'];

foreach($movies['movies']['viewVars']['movies'] as $code_c)
{
   $i= 0;

   if($data == $code_c['id'])
   {

                $tmp = array();
               
               foreach($code_c['genres'] as $key => $v)
               {
                   $tmp[$key+1] = $v['name'];
               }
               
               
               $tmp_cast = array();
               
               foreach($code_c['casts'] as $key_c => $casts)
               {
                   $tmp_cast [$key_c+1] = $casts['name'];
               }


               $content = '
                    <div class="responsive">
                        <img src="'.$code_c['image'].'" alt="'.$code_c['description'].'" title="'.$code_c['name'].'" width="" height="" class="size-medium wp-image-6" /> 
                    </div>
                    
                    <div class="responsive">
                            <p>
                               '.$code_c['name'].' ( '.date('Y',strtotime( $code_c['year'])).' ) '.$code_c['description'].'
                            </p>
                            
                            <p>
                               Release Date: '.date('F j, Y',strtotime( $code_c['releasedate'])).'
                                Director    : '.$code_c['director'].'
                                Genres      : '.implode(',',$tmp).'
                                Language(s)    : '.$code_c['languages'].'
                                Duration    : '.$code_c['duration'].'
                                Cast(s)        : '. implode(',',$tmp_cast ).'
                                Country     : '.$code_c['country'].'
                            </p>
                    </div>
                    <br><br>
                     <iframe src="http://ide.creativegeek.ph:24214/links/" width="900" height="900" frameborder="0"> 
                             Iframe Error!. Please contact the administrator 
                     </iframe>
               ';
             

               example_insert_category(implode( "," , $tmp ));

               if( check_category_name_exist(implode( "," , $tmp )) )
               {
                      $id = categoryid(implode( "," , $tmp ));
               }

                if( !wp_exist_post_by_title($code_c['name']) )
                {
                     wp_insert_post(array(
                            'post_title'    => $code_c['name'],
                            'post_content'  => $content,
                            'post_status'   => 'publish',
                            'post_author'   => 1,
                            'post_category' => array( $id )
                    ));
                } 

        $returns = array
        (
           
            'mtype' => 'success',
            'mcontent' => $data
                 
       );
   }
   else
   {
        $returns = array
        (
           
            'mtype' => 'failure',
            'mcontent' => 'failed insert data'
                 
       );
   } 
    
  $i++;
}
*/

 $returns = array
        (
           
            'mtype' => 'success',
            'mcontent' => 'id here'
                 
       );
       
echo json_encode($returns); 
?>

