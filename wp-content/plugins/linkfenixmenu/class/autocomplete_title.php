<?php 
 class Autocomplete_title
 {    
      public function initialize()
      {
        wp_enqueue_script('jquerylib', 'https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js');
        wp_enqueue_script('jqueryui', 'https://code.jquery.com/ui/1.11.4/jquery-ui.js');
        wp_enqueue_style('jquerycss', 'http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.10/themes/ui-darkness/jquery-ui.css');
        wp_enqueue_script('title_list', plugin_dir_url(__FILE__) . '../json/title-search.js');
        
      }
 }

 $inits = new Autocomplete_title();
 $inits->initialize();
?>
