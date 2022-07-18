<?php
/* Menus */
function register_menus(){
    register_nav_menus(array(
        'header-menu' => __('Header Menu')
    ));
}
add_action('init', 'register_menus'); 

function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

//Post thumbnails
add_theme_support('post-thumbnails');

//Pagination
function your_themes_pagination(){
    global $wp_query; 
    echo paginate_links();
}

//Wp_body_open function backwards compatibility (Wp 5.2 and below)
if ( ! function_exists( 'wp_body_open' ) ) {
    /**
    * Add backwards compatibility support for wp_body_open function.
    */
    function wp_body_open() {
        do_action( 'wp_body_open' );
    }
}

//MODIFYING WP LOGIN DEFAULT PAGE STYLES
/* function my_custom_login_stylesheet() {
    wp_enqueue_style( 'custom-login', get_stylesheet_directory_uri() . '/assets/css/partials/custom-login.css' );
}
add_action( 'login_enqueue_scripts', 'my_custom_login_stylesheet' );
//*CUSTOM LOGO
add_action( 'login_head', 'custom_login_css', 99999 );
function custom_login_css() {
    ?>
    <style type="text/css">
    
    </style>
    <?php
} */

// Removes Comments from admin menu
add_action( 'admin_menu', 'my_remove_admin_menus' );
function my_remove_admin_menus() {
    remove_menu_page( 'edit-comments.php' );
}
// Removes Comments from post and pages
add_action('init', 'remove_comment_support', 100);

function remove_comment_support() {
    remove_post_type_support( 'post', 'comments' );
    remove_post_type_support( 'page', 'comments' );
}
// Removes Comments from admin bar
function mytheme_admin_bar_render() {
    global $wp_admin_bar;
    $wp_admin_bar->remove_menu('comments');
}
add_action( 'wp_before_admin_bar_render', 'mytheme_admin_bar_render' );

//Contact form thank you page redirection
function precast_cf7_redirect_thank_you(){ ?>
    <script>
    document.addEventListener( 'wpcf7mailsent', function( event ) {
        location = 'localhost/gracias';
    }, false );
    </script>
      
<?php } 
    
add_action('wp_footer', 'precast_cf7_redirect_thank_you'); 




//Share buttons for Novedad
function precast_social_share($content){
    $url = urlencode(get_permalink());
    // Get current page title
    $title = str_replace(' ', '%20', get_the_title());
    $blog_title = get_bloginfo('name');
    $sharebuttons ='
    <div id="social-share">
        <div class="rrss pt-2">
            <div class="list-inline" aria-labelledby="dropdownMenuButton">
                <li class="list-inline-item">
                    <a href="https://www.facebook.com/sharer.php?u='.$url.'" target="_blank">
                        <img src="'.get_stylesheet_directory_uri().'/assets/img/facebook.svg" alt="Facebook">
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="https://wa.me/?text='.$title.'" data-action="share/whatsapp/share" target="_blank">
                        <img src="'.get_stylesheet_directory_uri().'/assets/img/whatsapp.svg" alt="WhatsApp">
                    </a>
                </li>
            </div>
        </div>
    </div>';
    return $sharebuttons.$content;
}
add_shortcode('social-share', 'precast_social_share');

/* Add img-fluid Bootstrap class to all the images inside the post content editor */
function add_image_responsive_class($content) {
    global $post;
    $pattern ="/<img(.*?)class=\"(.*?)\"(.*?)>/i";
    $replacement = '<img$1 class="$2 img-fluid ">';
    $content = preg_replace($pattern, $replacement, $content);
    return $content;
 }
add_filter('the_content', 'add_image_responsive_class');

// . Post excerpt adjustment (Auto)
add_filter( 'get_the_excerpt', 'love_custom_excerpt' );
function love_custom_excerpt( $excerpt ) {
    return substr( $excerpt, 0, 100 ) . ' [...]';
}

//Add dashicons for non-logged users
function precast_load_dashicons(){
    wp_enqueue_style('dashicons');
}
add_action('wp_enqueue_scripts', 'precast_load_dashicons');


//Options page General
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page(array(
		'page_title' 	=> 'Love Agency Contenido Web',
		'menu_title'	=> 'Contenido',
		'menu_slug' 	=> 'informacion-general',
		'capability'	=> 'edit_posts',
		'redirect'		=> false,
        'position' => '2'
    ));
}

/* CPT Servicios */
add_action( 'init', 'create_post_type' );
function create_post_type() {
    register_post_type( 'servicios',
        array(
            'labels' => array(
                'name' => __( 'Servicios' ),
                'singular_name' => __( 'Servicio' )
            ),
        'public' => true,
        'has_archive' => true,
        'supports' => array('title', 'thumbnail')
        )
    );
}
