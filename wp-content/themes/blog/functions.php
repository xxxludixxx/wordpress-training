<?php
function css_and_scripts()  {
    //ładowanie CSS
    wp_enqueue_style(
        'bootstrap-styles',
        get_template_directory_uri().'/css/bootstrap.min.css'
    );
    wp_enqueue_style(
        'main-styles',
        get_template_directory_uri().'/css/style.css'
    );
    wp_enqueue_style(
        'flexslider-styles',
        get_template_directory_uri().'/css/flexslider.css'
    );
    //ładowanie skryptów
    wp_deregister_script('jquery');
    wp_register_script('jquery', "http" . ($_SERVER['SERVER_PORT'] == 443 ? "s" : "") . "://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js", false, null);
    wp_enqueue_script('jquery');
    wp_enqueue_script('flexslider-script', get_template_directory_uri().'/js/jquery.flexslider-min.js', array('jquery'));
    wp_enqueue_script('main-script', get_template_directory_uri().'/js/skrypty.js', array('jquery'));
    wp_enqueue_script('bootstrap-script', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'));
}
add_action('wp_enqueue_scripts', 'css_and_scripts');
register_nav_menus(array(
   'top-nav' => 'Gorne menu strony' ));
add_theme_support( 'post-thumbnails');
//SIDEBAR
register_sidebar( array(
    'name'          => 'sidebar-right',
    'description'   => 'Panel boczny',
    'before_title'  => '<h2>',
    'after_title'   => '</h2>'
));
//dodanie klasy activ do menu
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
function special_nav_class($classes, $item){
    if( in_array('current-menu-item', $classes) ){
        $classes[] = 'active' ;
    }
    return $classes;
}
?>