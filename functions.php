<?php
/**
 * Child-Theme functions and definitions
 */

add_action( 'wp_enqueue_scripts', 'sk8tech_theme_enqueue_styles' );
function sk8tech_theme_enqueue_styles() {
    $parent_style = 'windsor';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . 
'/style.css' );
    wp_enqueue_style( 'sundale-development',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style )
    );
}

/**
* Customizing the Login Form
* Change the Login Logo
* @author Jacktator
* @see https://codex.wordpress.org/Customizing_the_Login_Form
*/
function customize_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo 
get_stylesheet_directory_uri(); ?>/images/login-logo.png);
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'customize_login_logo' );
function my_login_logo_url() {
    return 'https://sk8.tech/services/web-design';
}
add_filter( 'login_headerurl', 'my_login_logo_url' );
function my_login_logo_url_title() {
    return 'Web Design by SK8Tech';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

?>
