<?php 
add_action( 'admin_menu', 'my_admin_menu' );

function my_admin_menu() {
    
	add_menu_page( 
    	    'Link Fenix', 
    	    'Link Fenix', 
    	    'manage_options', 
    	    'main.php', 
    	    'main_menu', 
    	    'dashicons-tickets', 
    	    6  
	    );
	    
	add_submenu_page( 
    	    'main.php', 
    	    'sub menu 1', 
    	    'Sub Menu 1', 
    	    'manage_options', 
    	    'test.php', 
    	    'sub_menu1' 
	    );
	    
	add_submenu_page( 
    	    'main.php', 
    	    'sub menu 2', 
    	    'Sub Menu 2', 
    	    'manage_options', 
    	    'test2.php', 
    	    'sub_menu2' 
	    );
   
	
}
include_once 'page-functions.php';
?>