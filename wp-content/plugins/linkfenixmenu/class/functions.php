<?php 
class Menu_actions
{
    function create_action($post)
    {
        switch($post['searchsubmit'])
        {
               case 'Save' :
                   //all should process
                    echo '<script>alert("true");</script>';
               break;
                
               case 'Full import':
                   $this->full_import($post);
               break;
        }
       
    }
    function full_import($post)
    {
        header("Location:". admin_url().'post-new.php'); 
    }
    
}

$menus = new Menu_actions();
$menus->create_action($_POST);

?>