<?php 
    function assign_category($pid)
    {
        $my_post = array();
              
        $my_post['ID'] = $pid;
        
        $catarray = array( 8 ); 
        
        foreach((get_the_category($pid) )as $category) 
        { 
            array_push($catarray, $category->cat_ID);
        }
        
        $my_post['post_category'] = $catarray;
        
        wp_update_post( $my_post );
    }
    function categoryid($cat_names)
    {
         $term = get_term_by('name', $cat_names , 'category');
         
         return $term->term_id;
    }
    function example_insert_category($cat_name) 
    {
    	wp_insert_term
    	(
    		$cat_name,
    		'category',
    		array
    		(
    		  'description'	=> 'This is an example category for '.$cat_name,
    		  'slug' 		=> 'example-category-'.$cat_name
    		)
    	);
    }
    function insert_new_cat()
    {
        $my_cat_id = wp_insert_category
        (
            array(
                'cat_name' => 'My Category', 
                'category_description' => 'A Cool Category', 
                'category_nicename' => 'category-slug', 
                'category_parent' => ''
                )
        );
    
    }
    function check_has_category($post_ids)
    {
        if( !has_category('', $post_ids ))
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    function check_category_name_exist($categorynames)
    {
        if ( is_term( $categorynames , 'category' ) ) 
        { 
            return true; 
            
        } 
        else
        {
            return false;
        }
    }
    function wp_exist_post_by_title( $title ) 
    {
    	global $wpdb;
    	
    	$return = $wpdb->get_row( "SELECT ID FROM wp_posts WHERE post_title = '" . $title . "' && post_status = 'publish' && post_type = 'post' ", 'ARRAY_N' );
    	
    	if( empty( $return ) ) 
    	{
    		return false;
    	}
    	else 
    	{
    		return true;
    	}
    }
    function check_post_status()//$post->post_type ='publish'
    {
         if( get_post_status ($post->ID) == 'publish' )
         {
             return true;
         }
         else
         {
             return false;
         }
    }
?>