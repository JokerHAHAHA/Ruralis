<?php
//the id of the options
$igthemes_option='onepage';

//start class
class IGthemes_Customizer {

// add some settings
public static function igthemes_customize($wp_customize) {

/** The short name gives a unique element to each options id. */
global $igthemes_option;
//upgrade message
$upgrade_message = '<a class="upgrade-tag" href="http://www.iograficathemes.com/downloads/onepage-premium/" target="_blank">' . esc_html__(' - only premium', 'onepage') . '</a>';

// slect categories
$categories = get_categories();
    $cat = array();
    $i = 0;
    foreach($categories as $category){
        if($i==0){
            $default = $category->slug;
            $i++;
        }
        $cat[$category->slug] = $category->name;
    }
// slect post type
$args = array(
   'public'   => true
);
$i = 0;
$post_types = get_post_types( $args , 'names' ); 
foreach ( $post_types as $post_type ) {
    if($i==0){
        $i++;
    }
  $ptype = $post_types;
}

// PREMIUM
$wp_customize->add_section('upgrade-premium', array(
        'title' => esc_html__('UPGRADE TO PREMIUM', 'onepage'),
        'priority' => 1,
    ) );
// GENERAL
    $wp_customize->get_section('title_tagline')->title = esc_html__('General', 'onepage');
    $wp_customize->get_section('title_tagline')->priority = 3;

// LAYOUT
    $wp_customize->add_panel('layout-settings', array(
        'title' => esc_html__('Layout', 'onepage'),
        'priority' => 4,
    ));
    $wp_customize->add_section('main-layout', array(
        'title' => esc_html__('Main Layout', 'onepage'),
        'panel' => 'layout-settings',
    ));
    $wp_customize->add_section('single-layout', array(
        'title' => esc_html__('Single Layout', 'onepage'),
        'panel' => 'layout-settings',
    ));
    $wp_customize->add_section('shop-layout', array(
        'title' => esc_html__('Shop Layout', 'onepage'),
        'panel' => 'layout-settings',
    ));

// STYLE
    $wp_customize->add_panel( 'style-settings', array(
        'title' => __('Style', 'onepage'),
        'priority' => 5,
    ));    
    $wp_customize->get_section('colors')->priority = 4;
    $wp_customize->get_section('colors')->title =  __('Body', 'onepage');
    $wp_customize->get_section('colors')->panel = 'style-settings';
    
    $wp_customize->add_section('style-header', array(
        'title' => esc_html__('Header', 'onepage'),
        'panel' => 'style-settings',
        'priority' => 1,
    ));
    $wp_customize->add_section('style-header-menu', array(
        'title' => esc_html__('Header Menu', 'onepage'),
        'panel' => 'style-settings',
        'priority' => 2,
    ));
    $wp_customize->add_section('style-main-menu', array(
        'title' => esc_html__('Main Menu', 'onepage'),
        'panel' => 'style-settings',
        'priority' => 2,
    ));
    $wp_customize->add_section('style-buttons', array(
        'title' => esc_html__('Buttons', 'onepage'),
        'panel' => 'style-settings',
    ));
    $wp_customize->add_section('style-footer', array(
        'title' => esc_html__('Footer', 'onepage'),
        'panel' => 'style-settings',
    ));
    
// FOOTER
    $wp_customize->add_section('footer-settings', array(
        'title' => esc_html__('Footer', 'onepage'),
        'priority' => 6,
    ));

// SOCIAL
    $wp_customize->add_section('social-settings', array(
        'title' => esc_html__('Social', 'onepage'),
        'priority' => 7,
    ));

// ADVANCED
    $wp_customize->add_section('advanced-settings', array(
        'title' => esc_html__('Advanced', 'onepage'),
        'priority' => 8,
    ));

// HOMEPAGE
    $wp_customize->add_panel('homepage-settings', array(
        'title' => __('Home Page', 'onepage'),
        'description' => __('Customize your website homepage', 'onepage'),
        'priority' => 2,
    ));
    $wp_customize->add_section('home-portfolio', array(
        'title' => __('Portfolio', 'onepage'),
        'panel' => 'homepage-settings',
        'description' => __('Download and install our free', 'onepage') . '<a href="https://it.wordpress.org/plugins/ig-portfolio/"> IG Portfolio </a>' .  __('plugin to show your projects', 'onepage'),

    ));
    $wp_customize->add_section('home-testimonials', array(
        'title' => __('Testimonials', 'onepage'),
        'panel' => 'homepage-settings',
        'description' => __('Download and install our free', 'onepage') . '<a href="https://it.wordpress.org/plugins/ig-testimonials/"> IG Testimonials </a>' .  __('plugin to show your testimonials', 'onepage'),
    ));
/*****************************************************************
* PREMIUM
******************************************************************/
$wp_customize->add_setting($igthemes_option . '[upgrade_box]', array(
    'sanitize_callback' => 'igthemes_sanitize_allowedtags',
    ) );

$wp_customize->add_control( new Html_Custom_Control( $wp_customize, 'upgrade_box', array(
    'label' => esc_html__('', 'onepage'),
    'description' => '<p style="font-style: normal;">' . esc_html__('If you like this theme, considering supporting development by purchasing the premium version.', 'onepage'). '</p>'
    . '<ul class="premium" style="font-style: normal;"> '. '<li><strong>'. esc_html__('Main premium features:', 'onepage'). '</strong></li>'
    . '<li>' . esc_html__('- All options enabled', 'onepage') . '</li>'
    . '<li>' .  esc_html__('- Premium shortcodes included', 'onepage') . '</li>'
    . '<li>' . esc_html__('- Priority support', 'onepage'). '</li>'
    . '<li>' .  esc_html__('- Money back guarantee', 'onepage') . '</li>'
    . '<li>' . '<a class="upgrade-button" href="http://www.iograficathemes.com/downloads/onepage-premium/" rel="nofollow">' . esc_html__('upgrade to premium', 'onepage') . '</a></li>'
    . '</ul>',    'type' => 'custom',
    'section' => 'upgrade-premium',
    'settings' => $igthemes_option . '[upgrade_box]',
    )));

/*****************************************************************
* GENERAL SETTINGS
******************************************************************/
//blog name
    $wp_customize->add_setting('blogname', array(
        'type' => 'option',
        'sanitize_callback' => 'igthemes_sanitize_text',
        'transport'=>'postMessage'
    ));
    $wp_customize->add_control('blogname', array(
        'label' => esc_html__('Site Title', 'onepage'),
        'section' => 'title_tagline',
        'settings' => 'blogname',
        'priority' => 1,
    ));
//blog description
    $wp_customize->add_setting('blogdescription', array(
        'type' => 'option',
        'sanitize_callback' => 'igthemes_sanitize_text',
        'transport'=>'postMessage'
    ));
    $wp_customize->add_control('blogdescription', array(
        'label' => esc_html__('Tagline', 'onepage'),
        'section' => 'title_tagline',
        'settings' => 'blogdescription',
        'priority' => 2,
    ));
//logo
    $wp_customize->add_setting($igthemes_option . '[logo]', array(
        'type' => 'option',
        'sanitize_callback' => 'igthemes_sanitize_upload',
    ));
    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize,'logo', array(
        'label' => esc_html__('Site Logo', 'onepage'),
        'section' => 'title_tagline',
        'settings' => $igthemes_option . '[logo]',
        'priority' => 3,
    )));
//lightbox
    $wp_customize->add_setting($igthemes_option . '[lightbox]', array(
        'type' => 'option',
        'sanitize_callback' => 'igthemes_sanitize_checkbox',
    ));
    $wp_customize->add_control('lightbox', array(
        'label' => esc_html__('Lightbox', 'onepage'),
        'description' => esc_html__('Enable image lightbox', 'onepage'),
        'type' => 'checkbox',
        'section' => 'title_tagline',
        'settings' => $igthemes_option . '[lightbox]',
        'priority' => 99,
    ));
//breadcrumb
    $wp_customize->add_setting($igthemes_option . '[breadcrumb]', array(
        'type' => 'option',
        'sanitize_callback' => 'igthemes_sanitize_checkbox',
    ));
    $wp_customize->add_control('breadcrumb', array(
        'label' => esc_html__('Breadcrumb', 'onepage'),
        'description' => esc_html__('Enable breadcrumb (it will use WordPress SEO breadcrumb if available)', 'onepage'),
        'type' => 'checkbox',
        'section' => 'title_tagline',
        'settings' => $igthemes_option . '[breadcrumb]',
        'priority' => 99,
    ));
//shortcodes
    $wp_customize->add_setting($igthemes_option . '[shortcodes]', array(
        'sanitize_callback' => 'igthemes_sanitize_allowedtags',
    ));
    $wp_customize->add_control( new Html_Custom_Control( $wp_customize,$igthemes_option . '[shortcodes', array(
        'label' => esc_html__('Shortcodes', 'onepage'),
        'description' => esc_html__('Enable theme shortcodes', 'onepage') . $upgrade_message,
        'type' => 'custom',
        'section' => 'title_tagline',
        'settings' => $igthemes_option . '[shortcodes]',
        'priority' => 99,
    )));
/*****************************************************************
* LAYOUT SETTINGS
******************************************************************/
//sidebar main
    $wp_customize->add_setting($igthemes_option . '[sidebar_main]', array(
        'sanitize_callback' => 'igthemes_sanitize_allowedtags',
    ));
    $wp_customize->add_control( new Html_Custom_Control( $wp_customize,'sidebar_main', array(
        'label' => esc_html__('Main Layout', 'onepage'),
        'description' =>  esc_html__('Select the index page layout', 'onepage') . $upgrade_message,
        'type' => 'custom',
        'section' => 'main-layout',
        'settings' => $igthemes_option . '[sidebar_main]',
    )));
//post slide
    $wp_customize->add_setting($igthemes_option . '[post_slide]', array(
        'type' => 'option',
        'sanitize_callback' => 'igthemes_sanitize_checkbox',
    ));
    $wp_customize->add_control('post_slide', array(
        'label' => esc_html__('Posts Slide', 'onepage'),
        'description' => esc_html__('Show a carousel of the latest posts', 'onepage'),
        'type' => 'checkbox',
        'section' => 'main-layout',
        'settings' => $igthemes_option . '[post_slide]',
    ));
//main post content
    $wp_customize->add_setting($igthemes_option . '[main_post_content]', array(
        'type' => 'option',
        'sanitize_callback' => 'igthemes_sanitize_checkbox',
    ));
    $wp_customize->add_control('main_post_content', array(
        'label' => esc_html__('Show excerpt', 'onepage'),
        'description' => esc_html__('Show posts content as excerpt', 'onepage'),
        'type' => 'checkbox',
        'section' => 'main-layout',
        'settings' => $igthemes_option . '[main_post_content]',
    ));
//main featured images
    $wp_customize->add_setting($igthemes_option . '[main_featured_images]', array(
        'type' => 'option',
        'default' => 'checked',
        'sanitize_callback' => 'igthemes_sanitize_checkbox',
    ));
    $wp_customize->add_control('main_featured_images', array(
        'label' => esc_html__('Index featured image', 'onepage'),
        'description' => esc_html__('Show featured images in index page', 'onepage'),
        'type' => 'checkbox',
        'section' => 'main-layout',
        'settings' => $igthemes_option . '[main_featured_images]',
    ));
//main numeric pagination
    $wp_customize->add_setting($igthemes_option . '[main_numeric_pagination]', array(
        'type' => 'option',
        'sanitize_callback' => 'igthemes_sanitize_checkbox',
    ));
    $wp_customize->add_control('main_numeric_pagination', array(
        'label' => esc_html__('Numeric pagination', 'onepage'),
        'description' => esc_html__('Use numeric pagination in index page', 'onepage'),
        'type' => 'checkbox',
        'section' => 'main-layout',
        'settings' => $igthemes_option . '[main_numeric_pagination]',
    ));
//sidebar single
    $wp_customize->add_setting($igthemes_option . '[sidebar_single]', array(
        'sanitize_callback' => 'igthemes_sanitize_allowedtags',
    ));
    $wp_customize->add_control( new Html_Custom_Control( $wp_customize,'sidebar_single', array(
        'label' => esc_html__('Single Layout', 'onepage'),
        'description' => esc_html__('Select the single post layout', 'onepage') . $upgrade_message,
        'type' => 'custom',
        'section' => 'single-layout',
        'settings' => $igthemes_option . '[sidebar_single]',
    )));
//post featured image
    $wp_customize->add_setting($igthemes_option . '[post_featured_image]', array(
        'type' => 'option',
        'default' => 'checked',
        'sanitize_callback' => 'igthemes_sanitize_checkbox',
    ));
    $wp_customize->add_control('post_featured_image', array(
        'label' => esc_html__('Post featured image', 'onepage'),
        'description' => esc_html__('Show featured image in post page', 'onepage'),
        'type' => 'checkbox',
        'section' => 'single-layout',
        'settings' => $igthemes_option . '[post_featured_image]',
    ));
//post meta
    $wp_customize->add_setting($igthemes_option . '[post_meta]', array(
        'sanitize_callback' => 'igthemes_sanitize_allowedtags',
    ));
    $wp_customize->add_control( new Html_Custom_Control( $wp_customize,'post_meta', array(
        'label' => esc_html__('Meta Data', 'onepage'),
        'description' => esc_html__('Hide post meta data', 'onepage') . $upgrade_message,
        'type' => 'custom',
        'section' => 'single-layout',
        'settings' => $igthemes_option . '[post_meta]',
    )));
//sidebar shop
    $wp_customize->add_setting($igthemes_option . '[sidebar_shop]', array(
        'sanitize_callback' => 'igthemes_sanitize_allowedtags',
    ));
    $wp_customize->add_control( new Html_Custom_Control( $wp_customize,'sidebar_shop', array(
        'label' => esc_html__('Shop Layout', 'onepage'),
        'description' => esc_html__('Select the shop page layout', 'onepage') . $upgrade_message,
        'type' => 'custom',
        'section' => 'shop-layout',
        'settings' => $igthemes_option . '[sidebar_shop]',
    )));
//Number of products displayed
    $wp_customize->add_setting($igthemes_option . '[shop_products_number]', array(
        'sanitize_callback' => 'igthemes_sanitize_allowedtags',
    ));
    $wp_customize->add_control( new Html_Custom_Control( $wp_customize,'shop_products_number', array(
        'label' => esc_html__('Products number', 'onepage'),
        'description' => esc_html__('The number of products displayed per page', 'onepage') . $upgrade_message,
        'type' => 'custom',
        'section' => 'shop-layout',
        'settings' => $igthemes_option . '[shop_products_number]',
    )));
//shop product slider
    $wp_customize->add_setting($igthemes_option . '[shop_slide]', array(
        'type' => 'option',
        'sanitize_callback' => 'igthemes_sanitize_checkbox',
    ));
    $wp_customize->add_control('shop_slide', array(
        'label' => esc_html__('Products Slide', 'onepage'),
        'description' => esc_html__('Show a carousel of the latest products', 'onepage'),
        'type' => 'checkbox',
        'section' => 'shop-layout',
        'settings' => $igthemes_option . '[shop_slide]',
    ));
/*****************************************************************
* STYLE SETTINGS
******************************************************************/
//header style
    $wp_customize->add_setting($igthemes_option . '[header_style]', array(
        'sanitize_callback' => 'igthemes_sanitize_allowedtags',
    ));
    $wp_customize->add_control( new Html_Custom_Control( $wp_customize,'header_style', array(
        'label' => esc_html__('Header Style', 'onepage'),
        'description' => esc_html__('Header custom colors', 'onepage') . $upgrade_message,
        'type' => 'custom',
        'section' => 'style-header',
        'settings' => $igthemes_option . '[header_style]',
    )));
//header text color
    $wp_customize->add_control(new WP_Customize_color_Control(
        $wp_customize, 'header_textcolor', array(
        'label' => esc_html__('Text color', 'onepage'),
        'section' => 'style-header',
    )));
//header menu style
    $wp_customize->add_setting($igthemes_option . '[header_menu_style]', array(
        'sanitize_callback' => 'igthemes_sanitize_allowedtags',
    ));
    $wp_customize->add_control( new Html_Custom_Control( $wp_customize,'header_menu_style', array(
        'label' => esc_html__('Header Menu Style', 'onepage'),
        'description' => esc_html__('Header menu custom colors', 'onepage') . $upgrade_message,
        'type' => 'custom',
        'section' => 'style-header-menu',
        'settings' => $igthemes_option . '[header_menu_style]',
    )));
//menu style
    $wp_customize->add_setting($igthemes_option . '[main_menu_style]', array(
        'sanitize_callback' => 'igthemes_sanitize_allowedtags',
    ));
    $wp_customize->add_control( new Html_Custom_Control( $wp_customize,'main_menu_style', array(
        'label' => esc_html__('Main Menu Style', 'onepage'),
        'description' => esc_html__('Main menu custom colors', 'onepage') . $upgrade_message,
        'type' => 'custom',
        'section' => 'style-main-menu',
        'settings' => $igthemes_option . '[main_menu_style]',
    )));
//text style
    $wp_customize->add_setting($igthemes_option . '[text_style]', array(
        'sanitize_callback' => 'igthemes_sanitize_allowedtags',
    ));
    $wp_customize->add_control( new Html_Custom_Control( $wp_customize,'text_style', array(
        'label' => esc_html__('Text Style', 'onepage'),
        'description' => esc_html__('Text custom colors', 'onepage') . $upgrade_message,
        'type' => 'custom',
        'section' => 'colors',
        'settings' => $igthemes_option . '[text_style]',
    )));
//link style
    $wp_customize->add_setting($igthemes_option . '[link_style]', array(
        'sanitize_callback' => 'igthemes_sanitize_allowedtags',
    ));
    $wp_customize->add_control( new Html_Custom_Control( $wp_customize,'link_style', array(
        'label' => esc_html__('Links Style', 'onepage'),
        'description' => esc_html__('Links custom colors', 'onepage') . $upgrade_message,
        'type' => 'custom',
        'section' => 'colors',
        'settings' => $igthemes_option . '[link_style]',
    )));
//button style
    $wp_customize->add_setting($igthemes_option . '[button_style]', array(
        'sanitize_callback' => 'igthemes_sanitize_allowedtags',
    ));
    $wp_customize->add_control( new Html_Custom_Control( $wp_customize,'button_style', array(
        'label' => esc_html__('Buttons Style', 'onepage'),
        'description' => esc_html__('Buttons custom colors', 'onepage') . $upgrade_message,
        'type' => 'custom',
        'section' => 'style-buttons',
        'settings' => $igthemes_option . '[button_style]',
    )));
//footer style
    $wp_customize->add_setting($igthemes_option . '[footer_style]', array(
        'sanitize_callback' => 'igthemes_sanitize_allowedtags',
    ));
    $wp_customize->add_control( new Html_Custom_Control( $wp_customize,'footer_style', array(
        'label' => esc_html__('Footer Style', 'onepage'),
        'description' => esc_html__('Footer custom colors', 'onepage') . $upgrade_message,
        'type' => 'custom',
        'section' => 'style-footer',
        'settings' => $igthemes_option . '[footer_style]',
    )));
/*****************************************************************
* FOOTER SETTINGS
******************************************************************/
//footer text
    $wp_customize->add_setting($igthemes_option . '[footer_text]', array(
        'sanitize_callback' => 'igthemes_sanitize_allowedtags',
    ));
    $wp_customize->add_control( new Html_Custom_Control( $wp_customize, 'footer_text', array(
        'label' => esc_html__('Footer Text', 'onepage'),
        'description' => esc_html__('Footer custom text', 'onepage') . $upgrade_message,
        'type' => 'custom',
        'section' => 'footer-settings',
        'settings' => $igthemes_option . '[footer_text]',
    )));
//footer credits
    $wp_customize->add_setting($igthemes_option . '[footer_credits]', array(
        'sanitize_callback' => 'igthemes_sanitize_allowedtags',
    ));
    $wp_customize->add_control( new Html_Custom_Control( $wp_customize, 'footer_credits', array(
        'label' => esc_html__('Credits Link', 'onepage'),
        'description' => esc_html__('Remove author credits', 'onepage') . $upgrade_message,
        'type' => 'custom',
        'section' => 'footer-settings',
        'settings' => $igthemes_option . '[footer_credits]',
    )));

/*****************************************************************
* SOCIAL SETTINGS
******************************************************************/
//facebook
    $wp_customize->add_setting($igthemes_option . '[facebook_url]', array(
        'type' => 'option',
        'sanitize_callback' => 'igthemes_sanitize_url',

    ));
    $wp_customize->add_control('facebook_url', array(
        'label' => esc_html__('Facebook url', 'onepage'),
        'type' => 'url',
        'section' => 'social-settings',
        'settings' => $igthemes_option . '[facebook_url]',
    ));
//twitter
    $wp_customize->add_setting($igthemes_option . '[twitter_url]', array(
        'type' => 'option',
        'sanitize_callback' => 'igthemes_sanitize_url',
    ));
    $wp_customize->add_control('twitter_url', array(
        'label' => esc_html__('Twitter url', 'onepage'),
        'type' => 'url',
        'section' => 'social-settings',
        'settings' => $igthemes_option . '[twitter_url]',
    ));
//google
    $wp_customize->add_setting($igthemes_option . '[google_url]', array(
        'type' => 'option',
        'sanitize_callback' => 'igthemes_sanitize_url',
    ));
    $wp_customize->add_control('google_url', array(
        'label' => esc_html__('Google plus url', 'onepage'),
        'type' => 'url',
        'section' => 'social-settings',
        'settings' => $igthemes_option . '[google_url]',
    ));
//pinterest
    $wp_customize->add_setting($igthemes_option . '[pinterest_url]', array(
        'type' => 'option',
        'sanitize_callback' => 'igthemes_sanitize_url',
    ));
    $wp_customize->add_control('pinterest_url', array(
        'label' => esc_html__('Pinterest url', 'onepage'),
        'type' => 'url',
        'section' => 'social-settings',
        'settings' => $igthemes_option . '[pinterest_url]',
    ));
//tumblr
    $wp_customize->add_setting($igthemes_option . '[tumblr_url]', array(
        'type' => 'option',
        'sanitize_callback' => 'igthemes_sanitize_url',
    ));
    $wp_customize->add_control('tumblr_url', array(
        'label' => esc_html__('Tumblr url', 'onepage'),
        'type' => 'url',
        'section' => 'social-settings',
        'settings' => $igthemes_option . '[tumblr_url]',
    ));
//instagram
    $wp_customize->add_setting($igthemes_option . '[instagram_url]', array(
        'type' => 'option',
        'sanitize_callback' => 'igthemes_sanitize_url',
    ));
    $wp_customize->add_control('instagram_url', array(
        'label' => esc_html__('Instagram url', 'onepage'),
        'type' => 'url',
        'section' => 'social-settings',
        'settings' => $igthemes_option . '[instagram_url]',
    ));
//linkedin
    $wp_customize->add_setting($igthemes_option . '[linkedin_url]', array(
        'type' => 'option',
        'sanitize_callback' => 'igthemes_sanitize_url',
    ));
    $wp_customize->add_control('linkedin_url', array(
        'label' => esc_html__('Linkedin url', 'onepage'),
        'type' => 'url',
        'section' => 'social-settings',
        'settings' => $igthemes_option . '[linkedin_url]',
    ));
//dribbble
    $wp_customize->add_setting($igthemes_option . '[dribbble_url]', array(
        'type' => 'option',
        'sanitize_callback' => 'igthemes_sanitize_url',
    ));
    $wp_customize->add_control('dribbble_url', array(
        'label' => esc_html__('Dribble url', 'onepage'),
        'type' => 'url',
        'section' => 'social-settings',
        'settings' => $igthemes_option . '[dribbble_url]',
    ));
//vimeo
    $wp_customize->add_setting($igthemes_option . '[vimeo_url]', array(
        'type' => 'option',
        'sanitize_callback' => 'igthemes_sanitize_url',
    ));
    $wp_customize->add_control('vimeo_url', array(
        'label' => esc_html__('Vimeo url', 'onepage'),
        'type' => 'url',
        'section' => 'social-settings',
        'settings' => $igthemes_option . '[vimeo_url]',
    ));
//youtube
    $wp_customize->add_setting($igthemes_option . '[youtube_url]', array(
        'type' => 'option',
        'sanitize_callback' => 'igthemes_sanitize_url',
    ));
    $wp_customize->add_control('youtube_url', array(
        'label' => esc_html__('Youtube url', 'onepage'),
        'type' => 'url',
        'section' => 'social-settings',
        'settings' => $igthemes_option . '[youtube_url]',
    ));
//rss
    $wp_customize->add_setting($igthemes_option . '[rss_url]', array(
        'type' => 'option',
        'sanitize_callback' => 'igthemes_sanitize_url',
    ));
    $wp_customize->add_control('rss_url', array(
        'label' => esc_html__('RSS url', 'onepage'),
        'type' => 'url',
        'section' => 'social-settings',
        'settings' => $igthemes_option . '[rss_url]',
    ));

/*****************************************************************
* ADVANCED SETTINGS
******************************************************************/
//custom css
    $wp_customize->add_setting($igthemes_option . '[custom_css]', array(
        'sanitize_callback' => 'igthemes_allowed_tag',
    ));
    $wp_customize->add_control( new Html_Custom_Control( $wp_customize, 'custom_css', array(
        'label' => esc_html__('Custom CSS', 'onepage'),
        'description' => esc_html__('Add your custom css code', 'onepage') . $upgrade_message,
        'type' => 'custom',
        'section' => 'advanced-settings',
        'settings' => $igthemes_option . '[custom_css]',
    )));
//custom js
    $wp_customize->add_setting($igthemes_option . '[custom_js]', array(
        'sanitize_callback' => 'igthemes_allowed_tag',
    ));
    $wp_customize->add_control( new Html_Custom_Control( $wp_customize, 'custom_js', array(
        'label' => esc_html__('Custom Javascript', 'onepage'),
        'description' => esc_html__('Add your custom js code', 'onepage') . $upgrade_message,
        'type' => 'custom',
        'section' => 'advanced-settings',
        'settings' => $igthemes_option . '[custom_js]',
    )));
/*****************************************************************
* HOMEPAGE SETTINGS
******************************************************************/
//portfolio section
     $wp_customize->add_setting($igthemes_option . '[portfolio_section]', array(
        'type' => 'option',
        'sanitize_callback' => 'igthemes_sanitize_checkbox',
    ));
    $wp_customize->add_control('portfolio_section', array(
        'label' => __('Portfolio section', 'onepage'),
        'description' => __('Show the portfolio section', 'onepage'),
        'type' => 'checkbox',
        'section' => 'home-portfolio',
        'settings' => $igthemes_option . '[portfolio_section]',
    ));
//portfolio text
    $wp_customize->add_setting($igthemes_option . '[portfolio_text]', array(
        'type' => 'option',
        'default' => __('<h3>Our new project</h3><p>See our latest works</p>' , 'onepage'),
        'sanitize_callback' => 'igthemes_sanitize_textarea',
        'transport' => 'postMessage'
    ));
    $wp_customize->add_control('portfolio_text', array(
        'label' => __('Portfolio text', 'onepage'),
        'description' => __('Add your portfolio intro text', 'onepage'),
        'type' => 'textarea',
        'section' => 'home-portfolio',
        'settings' => $igthemes_option . '[portfolio_text]',
    ));
//portfolio background
    $wp_customize->add_setting($igthemes_option . '[portfolio_background_color]', array(
        'sanitize_callback' => 'igthemes_allowed_tag',
    ));
    $wp_customize->add_control( new Html_Custom_Control( $wp_customize, 'portfolio_background_color', array(
        'label' => esc_html__('Background color', 'onepage'),
        'description' => esc_html__('Custom background color', 'onepage') . $upgrade_message,
        'type' => 'custom',
        'section' => 'home-portfolio',
        'settings' => $igthemes_option . '[portfolio_background_color]',
    )));
//portfolio heading color
    $wp_customize->add_setting($igthemes_option . '[portfolio_heading_color]', array(
        'sanitize_callback' => 'igthemes_allowed_tag',
    ));
    $wp_customize->add_control( new Html_Custom_Control( $wp_customize, 'portfolio_heading_color', array(
        'label' => esc_html__('Headings color', 'onepage'),
        'description' => esc_html__('Custom headings color', 'onepage') . $upgrade_message,
        'type' => 'custom',
        'section' => 'home-portfolio',
        'settings' => $igthemes_option . '[portfolio_heading_color]',
    )));
//portfolio text color
    $wp_customize->add_setting($igthemes_option . '[portfolio_text_color]', array(
        'sanitize_callback' => 'igthemes_allowed_tag',
    ));
    $wp_customize->add_control( new Html_Custom_Control( $wp_customize, 'portfolio_text_color', array(
        'label' => esc_html__('Text color', 'onepage'),
        'description' => esc_html__('Custom text color', 'onepage') . $upgrade_message,
        'type' => 'custom',
        'section' => 'home-portfolio',
        'settings' => $igthemes_option . '[portfolio_text_color]',
    )));
//testimonials section
    $wp_customize->add_setting($igthemes_option . '[testimonials_section]', array(
        'type' => 'option',
        'sanitize_callback' => 'igthemes_sanitize_checkbox',
    ));
    $wp_customize->add_control('testimonials_section', array(
        'label' => __('Testimonials section', 'onepage'),
        'description' => __('Show the testimonial section', 'onepage'),
        'type' => 'checkbox',
        'section' => 'home-testimonials',
        'settings' => $igthemes_option . '[testimonials_section]',
    ));
//testimonials text
    $wp_customize->add_setting($igthemes_option . '[testimonials_text]', array(
        'type' => 'option',
        'default' => __('<h3>What our clients says</h3><p>We make every thing with best quality, our customers and partners are very happy!</p>', 'onepage'),
        'sanitize_callback' => 'igthemes_sanitize_textarea',
        'transport' => 'postMessage'
    ));
    $wp_customize->add_control('testimonials_text', array(
        'label' => __('Testimonials text', 'onepage'),
        'description' => __('Testimonials intro text', 'onepage'),
        'type' => 'textarea',
        'section' => 'home-testimonials',
        'settings' => $igthemes_option . '[testimonials_text]',
    ));
//testimonials background
    $wp_customize->add_setting($igthemes_option . '[testimonials_background_color]', array(
        'sanitize_callback' => 'igthemes_allowed_tag',
    ));
    $wp_customize->add_control( new Html_Custom_Control( $wp_customize, 'testimonials_background_color', array(
        'label' => esc_html__('Background color', 'onepage'),
        'description' => esc_html__('Custom background color', 'onepage') . $upgrade_message,
        'type' => 'custom',
        'section' => 'home-testimonials',
        'settings' => $igthemes_option . '[testimonials_background_color]',
    )));
//testimonials heading color
    $wp_customize->add_setting($igthemes_option . '[testimonials_heading_color]', array(
        'sanitize_callback' => 'igthemes_allowed_tag',
    ));
    $wp_customize->add_control( new Html_Custom_Control( $wp_customize, 'testimonials_heading_color', array(
        'label' => esc_html__('Headings color', 'onepage'),
        'description' => esc_html__('Custom headings color', 'onepage') . $upgrade_message,
        'type' => 'custom',
        'section' => 'home-testimonials',
        'settings' => $igthemes_option . '[testimonials_heading_color]',
    )));
//testimonials text color
    $wp_customize->add_setting($igthemes_option . '[testimonials_text_color]', array(
        'sanitize_callback' => 'igthemes_allowed_tag',
    ));
    $wp_customize->add_control( new Html_Custom_Control( $wp_customize, 'testimonials_text_color', array(
        'label' => esc_html__('Text color', 'onepage'),
        'description' => esc_html__('Custom text color', 'onepage') . $upgrade_message,
        'type' => 'custom',
        'section' => 'home-testimonials',
        'settings' => $igthemes_option . '[testimonials_text_color]',
    )));
    //END
    }
}
// Setup the Theme Customizer settings and controls...
add_action('customize_register' , array('IGthemes_Customizer' , 'igthemes_customize') );
//END OF CLASS
