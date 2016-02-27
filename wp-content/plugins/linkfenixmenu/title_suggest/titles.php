<?php 
 class Movie_plugin
 {    
     //register plugin scripts using hooks
      public function initialize()
         {
            wp_deregister_script( 'jquerylib' );
            wp_register_script('jquerylib', 'https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js');
            wp_enqueue_script( 'jquerylib' );
            
            wp_deregister_script( 'jqueryui' );
            wp_register_script('jqueryui', 'https://code.jquery.com/ui/1.11.4/jquery-ui.js');
            wp_enqueue_script( 'jqueryui' );
            
            wp_enqueue_script('test', plugin_dir_url(__FILE__) . 'data.js');
            
            wp_deregister_style( 'jquerycss' );
            wp_register_style('jquerycss', 'https://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css');
            wp_enqueue_style( 'jquerycss' );
         }
 }
 //instantiate class name
 $inits = new Movie_plugin();
 
 //initialize scripts
 $inits->initialize();
 
 //use to render scripts on wordpress head
 wp_head();
?>