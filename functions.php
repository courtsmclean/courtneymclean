<?php 
// Enable thumbnails
add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size(200, 200, true); // Normal post thumbnails


// Enable widgetable sidebar
// You may need to tweak your theme files, more info here - http://codex.wordpress.org/Widgetizing_Themes
if ( function_exists('register_sidebar') )
	register_sidebar(array(
	'before_widget' => '<aside>',
	'after_widget' => '</aside>',
	'before_title' => '<h1>',
	'after_title' => '</h1>',
));


// Add custom menus
register_nav_menus( array(
	'primary' => __( 'Primary Navigation', 'wpfme' ),
	//'example' => __( 'Example Navigation', 'wpfme' ),
) );


// Custom CSS for the whole admin area
// Create wp-admin.css in your theme folder
function wpfme_adminCSS() {
	echo '<link rel="stylesheet" type="text/css" href="'.get_bloginfo('template_directory').'/wp-admin.css"/>';
}
add_action('admin_head', 'wpfme_adminCSS');


//create a permalink after the excerpt
function wpfme_replace_excerpt($content) {
	return str_replace('[...]',
		'<a class="readmore" href="'. get_permalink() .'">… Continue Reading</a>',
		$content
	);
}
add_filter('the_excerpt', 'wpfme_replace_excerpt');


// Create custom sizes
// This is then pulled through to your theme useing the_post_thumbnail('custombig');
if ( function_exists( 'add_image_size' ) ) {
	add_image_size('customsmall', 300, 200, true); //narrow column
	add_image_size('custombig', 400, 500, true); //wide column
}

// Stop images getting wrapped up in p tags when they get dumped out with the_content() for easier theme styling
function wpfme_remove_img_ptags($content){
	return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}
add_filter('the_content', 'wpfme_remove_img_ptags');


//custom excerpt length
function wpfme_custom_excerpt_length( $length ) {
	//the amount of words to return
	return 50;
}
add_filter( 'excerpt_length', 'wpfme_custom_excerpt_length');


// Call Googles HTML5 Shim, but only for users on old versions of IE
function wpfme_IEhtml5_shim () {
	global $is_IE;
	if ($is_IE)
	echo '<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->';
}
add_action('wp_head', 'wpfme_IEhtml5_shim');


 //Add Excerpts to Pages 
function themeprefix_add_page_excerpt_support() {
 add_post_type_support( 'page', 'excerpt' ); 
} 
add_action('init', 'themeprefix_add_page_excerpt_support'); 


//Add Custom Gravatar image
function my_own_gravatar( $avatar_defaults ) {  
    $myavatar = get_bloginfo('template_directory') . '/images/no_avatar.gif';  
    $avatar_defaults[$myavatar] = 'No Avatar';  
    return $avatar_defaults;  
}  
add_filter( 'avatar_defaults', 'my_own_gravatar' );   


//Add favicon to header 
add_action( 'wp_head', 'ilc_favicon');
function ilc_favicon(){
        echo "<link rel='shortcut icon' href='" . get_stylesheet_directory_uri() . "/favicon.ico' />" . "\n";
}

//For portfolio page
require_once('portfolio-type.php');




function my_page_css_class($css_class, $page) {
    if (get_post_type()=='portfolio' || is_page(104)) {
        if ($page->ID == get_option('page_for_posts')) {
            foreach ($css_class as $k=>$v) {
                if ($v=='current_page_parent') unset($css_class[$k]);
            }
        }
        if ($page->ID==104) {
            $css_class[]='current_page_parent';
        }
    }
    return $css_class;
}
add_filter('page_css_class','my_page_css_class',10,2);


   add_filter( 'default_content', 'custom_editor_content' );
      function custom_editor_content( $content ) {
         global $current_screen;
         if ( $current_screen->post_type == 'page') {
            $content = '

               // TEMPLATE FOR YOUR PAGES

            ';
         }
         elseif ( $current_screen->post_type == 'portfolio') {
            $content = '

				<div class="twelve col">
				
					<h3>This is your project subtitle</h3>	
				
				</div>


				<div>
					<div class="eight col">
					
						This is your intro
					
					</div>				
					<div class="three col sidebar">
					
						<h6>APPLIED SKILLS</h6>
						<ul class="small">
							<li>list item one</li>
							<li>list item two</li>
							<li>list item three</li>
							<li>list item four</li>
							<li>list item five</li>
						</ul>
					
					</div> 
				</div>
				
				<div>
					<div class="twelve col project-images">
						
						This is your images content
						&nbsp;
					
					</div>
				</div>

				<div>
					<div class="eight col">
				
						This is project result
						&nbsp;
				
					</div>				
					<div class="three col sidebar">
				
						Add button to link to site
						&nbsp;
				
					</div> 
				</div>


            ';
         }
         else {
            $content = '

               // TEMPLATE FOR EVERYTHING ELSE

            ';
         }
         return $content;
       }
?>