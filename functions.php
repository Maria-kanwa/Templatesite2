<?php 

function homeservices_files() {

    // website css
    wp_enqueue_style( 'website-css1', get_theme_file_uri('./css/style.css') );
    wp_enqueue_style( 'website-css2', get_theme_file_uri('./css/bootstrap.css') );
    wp_enqueue_style( 'website-css3', get_theme_file_uri('./css/font-awesome.min.css') );
    wp_enqueue_style( 'website-css4', get_theme_file_uri('./css/responsive.css') );
    wp_enqueue_style( 'website-css5', get_theme_file_uri('./css/style.css.map') );
    wp_enqueue_style( 'website-css6', get_theme_file_uri('./css/style.scss') );
    wp_enqueue_style( 'website-css', get_stylesheet_uri() );


    // website fonts


    // website javascript
    wp_enqueue_script( 'my-js-loading-through-this1', get_theme_file_uri('./js/custom.js'), array('jquery'), 1.0, false );
    wp_enqueue_script( 'my-js-loading-through-this2', get_theme_file_uri('./js/bootstrap.js'), array('jquery'), 1.0, true );
    wp_enqueue_script( 'my-js-loading-through-this3', get_theme_file_uri('./js/jquery-3.4.1.min.js'), array('jquery'), 1.0, true );
    wp_enqueue_script( 'my-js-4', ('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js'), array('jquery'), 1.0, true );
    wp_enqueue_script( 'my-js-5', ('https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css'), array('jquery'), 1.0, true );
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css' );

}
add_action('wp_enqueue_scripts', 'homeservices_files');



//register sidebar or showing the option og widgets in dashboard



add_action('after_setup_theme','icodeguru_features') ;
//register sidebar or showing the option og widgets in dashboard
function icodeguru_sidebars()   {
    register_sidebar(array(
'name' => ('Sidebar 1'),
'id'=>'sidebar-1',
//giving class to sidebar for styling in css
'before_widget' => ' <section id ="first-sidebar" class ="sidebar-1">',
'after_widget' => '</section>',
    ));
    

}
add_action('widgets_init','icodeguru_sidebars');







//menu showing part

function icodeguru_features(){
    register_nav_menus(array(
'primary'=>'Main menu',
'secondary'=>'footer menu',
'useful'=>'useful links',

    ));
    add_theme_support('custom-logo');// logo registration
    add_theme_support('post-thumbnails');// feature image or thumbnail registration
   
}
add_action('after_setup_theme','icodeguru_features') ;

//for backend styling


function icodeguru_backend_files()

{
    
    wp_enqueue_style('bootstrap-cdn_backend', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css');
        wp_enqueue_style('bootstrap-icons_backend', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css');
        wp_enqueue_style('fontawsome-cdn_backend', 'https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css');
        wp_enqueue_style('Template_backend_styles', get_theme_file_uri('/includes/admin-styling.css'));
   // wp_enqueue_style('mariasite_main_styles', "/wp-content/themes/icodeguru/style.css");
    
    
        wp_enqueue_script('backend-js', get_theme_file_uri('/admin-script.js'), NULL, '1.0');
    
    
  
}
add_action('admin_enqueue_scripts', 'icodeguru_backend_files');

// beckend properties settings



function icodeguru_settings_page(){
    add_menu_page(
        'Icodeguru Theme',//page title
        'Change content',//menue title
        'manage_options',//ability for those who are allowed by dashboard/capability required
        'Theme-Settings',//Menu slug
        'mytheme_settings_page',//call back function ye o function bna hai us mn jo b functionality hogi wo sho krway ga
        'dashicons-database',
        10,//priority
        
    
    );
    
    }
    //admin menue is specified by wordpress
    add_action('admin_menu', 'icodeguru_settings_page');
    //theme settings call back function,,file linking here
 require_once(get_theme_file_path('/includes/theme-settings.php'));



//when we want to add any functionality in customize tgen we use a veriable of wp_customize


 // Include the customizer section for the footer
function custom_footer_customize_register($wp_customize) {
    // Add a section for the footer
    // yhe term add section add  will add a section of  footer in customize
    $wp_customize->add_section('custom_footer_section', array(
        'title'    => __('Footer', 'your-child-theme'),
        'priority' => 130,
    ));

    // Add setting and control for the address
    $wp_customize->add_setting('footer_address', array(
        'default'   => '',//empty feild and these are API parameter
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('footer_address', array(
        'label'    => __('Address', 'your-child-theme'),
        'section'  => 'custom_footer_section',
        'settings' => 'footer_address',
        'type'     => 'text',
    ));

    // Add setting and control for the phone
    $wp_customize->add_setting('footer_phone', array(
        'default'   => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('footer_phone', array(
        'label'    => __('Phone', 'your-child-theme'),
        'section'  => 'custom_footer_section',
        'settings' => 'footer_phone',
        'type'     => 'text',
    ));

    // Add setting and control for the email
    $wp_customize->add_setting('footer_email', array(
        'default'   => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('footer_email', array(
        'label'    => __('Email', 'your-child-theme'),
        'section'  => 'custom_footer_section',
        'settings' => 'footer_email',
        'type'     => 'text',
    ));


    // Add settings and controls for each social media platform
    $social_profiles = array('facebook', 'twitter', 'youtube', 'linkedin');

    foreach ($social_profiles as $profile) {
        $wp_customize->add_setting("social_profile_{$profile}_link", array(
            'default'   => '',
            'transport' => 'refresh',
        ));

        $wp_customize->add_control("social_profile_{$profile}_link", array(
            'label'    => ucfirst($profile) . ' ' . __('Link', 'your-child-theme'),
            'section'  => 'custom_footer_section',
            'settings' => "social_profile_{$profile}_link",
            'type'     => 'text',
        ));
    }
     // Add setting and control for the phone
     $wp_customize->add_setting('copyright_text', array(
        'default'   => '',
        'transport' => 'refresh',
    ));

    $wp_customize->add_control('copyright_text', array(
        'label'    => __('Copyright Text', 'your-child-theme'),
        'section'  => 'custom_footer_section',
        'settings' => 'copyright_text',
        'type'     => 'text',
    ));
}

add_action('customize_register', 'custom_footer_customize_register');



//image uploader
function enqueue_custom_scripts() {
     
    wp_enqueue_media();
    wp_enqueue_script('custom-admin-script', get_template_directory_uri() . '/custom-admin.js', array('jquery'), null, true);
}
add_action('admin_enqueue_scripts', 'enqueue_custom_scripts');


//as practice
// function mytheme_customize_register($wp_customize) {
//     // Create Slider Section
//     $wp_customize->add_section('slider_section', array(
//         'title' => __('Slider', 'mytheme'),
//         'priority' => 30,
//     ));

//     // Slider Heading
//     $wp_customize->add_setting('slider_heading', array(
//         'default'   => 'Default Heading',
//         'transport' => 'refresh',
//     ));

//     $wp_customize->add_control('slider_heading', array(
//         'label'     => __('Slider Heading', 'mytheme'),
//         'section'   => 'slider_section',
//         'settings'  => 'slider_heading',
//         'type'      => 'textarea',
//     ));



//     // Slider Content
//     $wp_customize->add_setting('slider_content', array(
//         'default'   => 'Default Content',
//         'transport' => 'refresh',
//     ));

//     $wp_customize->add_control('slider_content', array(
//         'label'     => __('Slider Content', 'mytheme'),
//         'section'   => 'slider_section',
//         'settings'  => 'slider_content',
//         'type'      => 'textarea',
//     ));

//     // Slider Button Text
//     $wp_customize->add_setting('slider_button_text', array(
//         'default'   => 'Contact us',
//         'transport' => 'refresh',
//     ));

//     $wp_customize->add_control('slider_button_text', array(
//         'label'     => __('Slider Button Text', 'mytheme'),
//         'section'   => 'slider_section',
//         'settings'  => 'slider_button_text',
//         'type'      => 'text',
//     ));

//     // Slider Button Link
//     $wp_customize->add_setting('slider_button_link', array(
//         'default'   => '#',
//         'transport' => 'refresh',
//     ));

//     $wp_customize->add_control('slider_button_link', array(
//         'label'     => __('Slider Button Link', 'mytheme'),
//         'section'   => 'slider_section',
//         'settings'  => 'slider_button_link',
//         'type'      => 'text',
//     ));
    
// }

// add_action('customize_register', 'mytheme_customize_register');






