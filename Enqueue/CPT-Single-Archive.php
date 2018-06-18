// EnqueueScripts and Styles to Single of CPT
add_action( 'wp_enqueue_scripts', 'enqueue_scripts_cpt_single' );
function enqueue_scripts_cpt_single(){
    if( is_singular( 'movies' ) ){
        wp_enqueue_style( 'my-movie-style', /* src to .css file */ );
        wp_enqueue_script( 'my-movie-script', /* src to .js file */ );
    }
}

// EnqueueScripts and Styles to Archive of CPT
add_action( 'wp_enqueue_scripts', 'enqueue_scripts_cpt_archive' );
function enqueue_scripts_cpt_archive(){
    if( is_post_type_archive( 'movies' ) ){
        wp_enqueue_style( 'my-movie-style', /* src to .css file */ );
        wp_enqueue_script( 'my-movie-script', /* src to .js file */ );
    }
}

// EnqueueScripts and Styles to both Single and Archive of CPT
add_action( 'wp_enqueue_scripts', 'enqueue_scripts_cpt_single_archive' );
function enqueue_scripts_cpt_single_archive(){
    if( is_singular( 'movies' ) || is_post_type_archive( 'movies' ) ){
        wp_enqueue_style( 'my-movie-style', /* src to .css file */ );
        wp_enqueue_script( 'my-movie-script', /* src to .js file */ );
    }
}






