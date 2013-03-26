<?php

if ( function_exists( 'add_theme_support' ) ) { 
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 280, 210, true ); // Normal post thumbnails
	add_image_size( 'screen-shot', 720, 540 ); // Full size screen
}

add_action('init', 'portfolio_register');  
  
function portfolio_register() {  
    $args = array(  
        'label' => __('Portfolio'),  
        'singular_label' => __('Project'),  
        'public' => true,  
        'show_ui' => true,  
        'capability_type' => 'post',  
        'hierarchical' => false,  
        'rewrite' => true,  
        'supports' => array('title', 'editor', 'thumbnail')  
       );  
  
    register_post_type( 'portfolio' , $args );  
}  

register_taxonomy("project-type", array("portfolio"), array("hierarchical" => true, "label" => "Project Types", "singular_label" => "Project Type", "rewrite" => true));

add_action("admin_init", "portfolio_meta_box");   


function portfolio_meta_box(){  
    add_meta_box("projInfo-meta", "Project Options", "portfolio_meta_options", "portfolio", "side", "low");  
}  
  

function portfolio_meta_options(){  
        global $post;  
        if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) return $post_id;
        $custom = get_post_custom($post->ID);  
        $link = $custom["projLink"][0];  
?>  
    <label>Link:</label><input name="projLink" value="<?php echo $link; ?>" />  
<?php  
    }  
    
    add_action('save_post', 'save_project_link'); 
  
function save_project_link(){  
    global $post;  
    
    if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){ 
		return $post_id;
	}else{
    	update_post_meta($post->ID, "projLink", $_POST["projLink"]); 
    } 
}  

add_filter("manage_edit-portfolio_columns", "project_edit_columns");   
  
function project_edit_columns($columns){  
        $columns = array(  
            "cb" => "<input type=\"checkbox\" />",  
            "title" => "Project",  
            "description" => "Description",  
            "link" => "Link",  
            "type" => "Type of Project",  
        );  
  
        return $columns;  
}  

add_action("manage_posts_custom_column",  "project_custom_columns"); 
  
function project_custom_columns($column){  
        global $post;  
        switch ($column)  
        {  
            case "description":  
                the_excerpt();  
                break;  
            case "link":  
                $custom = get_post_custom();  
                echo $custom["projLink"][0];  
                break;  
            case "type":  
                echo get_the_term_list($post->ID, 'project-type', '', ', ','');  
                break;  
        }  
}  


function get_post_templates() 
	{
		$theme = wp_get_theme();

		// N.B. No caching, even though core Page Templates has that. 
		// Nacin advises:
		// "ultimately, "caching" for page templates is not very helpful"
		// "by default, the themes bucket is non-persistent. also, calling 
		//  get_page_templates() no longer requires us to load up all theme 
		//  data for all themes so overall, it's much quicker already."

		$post_templates = array();

		$files = (array) $theme->get_files( 'php', 1 );

		foreach ( $files as $file => $full_path ) {
			$headers = get_file_data( $full_path, array( 'Template Name Posts' => 'Template Name Posts' ) );
			if ( empty( $headers['Template Name Posts'] ) )
				continue;
			$post_templates[ $file ] = $headers['Template Name Posts'];
		}

		return $post_templates;
	}


?>