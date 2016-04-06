<?php 

//register hooks for datatables designs and clipboard

wp_enqueue_style('jquery_tbl_css',  plugin_dir_url(__FILE__) . 'datatable/jquery.dataTables.min.css');
wp_enqueue_script('jquery_lib',  plugin_dir_url(__FILE__) . 'datatable/jquery-1.12.0.min.js');
wp_enqueue_script('jquery_tbl',  plugin_dir_url(__FILE__) . 'datatable/jquery.dataTables.min.js');
wp_enqueue_script('jquery_ui_css',  plugin_dir_url(__FILE__) . 'datatable/jquery-ui.js');
wp_enqueue_style('jquery_ui_css2',  plugin_dir_url(__FILE__) . 'datatable/jquery-ui.css');
wp_enqueue_script('clipboard',  plugin_dir_url(__FILE__) . 'jquery/clipboard.js');
wp_enqueue_script('toast-msg',  plugin_dir_url(__FILE__) . 'jquery/toast-message/src/jquery.dpToast.js');

?>