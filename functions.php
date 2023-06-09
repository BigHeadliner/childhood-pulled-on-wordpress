<?php    
add_action('wp_enqueue_scripts', 'childhood_scripts');   
   
function childhood_scripts() {   
    
    wp_enqueue_style('childhood-style', get_stylesheet_uri() );  
    wp_enqueue_script('childhood-scripts', get_template_directory_uri() . '/assets/js/main.min.js', array(), null, true); 
   
    // wp_enqueue_style('header-style', get_template_directory_uri() . '/assets/styles/style-title.css' ); 
    // wp_enqueue_style('animate-style', get_template_directory_uri() . 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css' ); 
} 
 
add_theme_support('custom-logo'); 
add_theme_support('post-thumbnails'); 

?>