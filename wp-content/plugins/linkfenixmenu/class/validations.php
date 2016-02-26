<?php 

    /*
    
   assign category name
    
    */
    
    
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
    /*
    
    create new category name
    
    */
    function categoryid($cat_names)
    {
         $term = get_term_by('name', $cat_names , 'category');
         return $term->term_id;
    }
    /*
    
    Insert new Category name
    
    */
    function example_insert_category($cat_name) 
    {
    	wp_insert_term
    	(
    		$cat_name,
    		'category',
    		array
    		(
    		  'description'	=> 'This is an example category created with wp_insert_term.',
    		  'slug' 		=> 'example-category'
    		)
    	);
    }
    function insert_new_cat()
    {
        $my_cat_id = wp_insert_category
        (
            array(
                'cat_name' => 
                'My Category', 
                'category_description' => 
                'A Cool Category', 
                'category_nicename' => 
                'category-slug', 
                'category_parent' => 
                ''
                )
        );
    
    }
    /*
    
    Check if category name is existing in the database using post id
    
    */
    
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
    
    /*
    
    Check if category name is existing in the database
    
    */
    
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


?>