<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * *****************************************************************************
 * THEME (DE)ACTIVATION
 * Theme activation hook: 'after_switch_theme'
 * Theme de-activation hook: 'switch_theme'
 */


add_action('wp_enqueue_scripts', 'bj_theme_scripts');
function bj_theme_scripts(){

}

/**
 * theme deactivation
 */
add_action('switch_theme', 'deactivate_theme');
function deactivate_theme() {
    //name of your theme
    update_option('cwp_last_theme', 'Base-dev');
}

/**
 *theme activation
 */
add_action('after_switch_theme', 'activate_theme');

function activate_theme() {

    if (!class_exists('FN_Pages_Setup')) include_once get_stylesheet_directory().'/vendor/FN_Theme_Setup.php';

    FN_Pages_Setup::add()->set_home_page('Home Page')->set_post_status('publish')->setup();

    //Fn_Gen::instance()->remove_image_dimesions();
}

/*
 * Custom images sizes and post media manage integration
 */

add_theme_support('post-thumbnails');



add_image_size('themes-thumbnail', 310, 320, true);

add_image_size('theme-preview', 620, 500, true);

function cwp_theme_images($sizes) {
    $isizes = array(
        "themes-thumbnail" => __('Theme Thumbnails', 'basejump'),
        "theme-preview" => __('Theme Preview' . 'basejump'),
    );
    $imgs = array_merge($sizes, $isizes);
    return $imgs;
}

add_filter('image_size_names_choose', 'cwp_theme_images');

$recthumb = new Recent_thumbs_Widget();

/**
 * enqueue scripts
 */

add_action('enqueue_scripts', 'cwpt_scripts');

function cwpt_scripts(){
    /**
     * @todo add theme scripts here
     */
    //wp_enqueue_script( 'script_name' );
}


/**
 * ************custom options post type***********************************************
 */
$cwp_ui = cwp_ui::instance();

/**
 * ************Theme Content****************************************************
 */
$cwp_types = new theme_content();
$cwp_types->feedback();
theme_content::add()->article();
theme_content::add()->faq();

/**
 * *************customisations**************************************************
 */
//add more optoion to user profile
cwp_social::contact_info();

//post gallery rotator checkbox
cwp_gallery::gallery_rotator();


core_admin::remove_wp_adminbar_logo();

/**
 * ***********grab browser screenshots shortcode********************************
 */
cwp::browsershots();


/**
 * display gallery petabox image gallery metabox
 */
if (function_exists('be_gallery_metabox')):

    function be_gallery_types() {
        $post = array('post', 'page', 'cwp_theme');
        return $post;
    }

    function be_gallery_icon() {
        return 'icon-60';
    }

    add_filter('be_gallery_metabox_post_types', 'be_gallery_types', 10, 2);
    add_filter('be_gallery_metabox_image_size', 'be_gallery_icon', 10, 2);

endif;

/**
 * remove dashboard widgets
 */
core_admin::remove_dashboard_widgets();

/**
 * remove post revisions
 */
add_action('init', 'cwpt_custom_init');

function cwpt_custom_init() {
    remove_post_type_support('post', 'revisions');
}




/**
 * add some menu items
 */



//add_filter( 'wp_nav_menu_items', 'add_loginout_link', 10, 2 );
function add_loginout_link( $items, $args ) {
    $items = cwp_navs::factory()->add_loginout($items,$args,'primary');
    return $items;
}



add_filter( 'wp_nav_menu_items', 'your_custom_menu_item', 10, 2 );
function your_custom_menu_item ( $items, $args ) {
    $items = cwp_navs::factory()->add_drop_down($items, $args,'browse',"Another Dropwdown");
    return $items;
}


/**
 * adds short code buttons
 */
//core_admin::shortcode_buttons();

/**
 * --- AL-Manager -----
 */

//AUTOLOAD MANAGER FILTER(S)

add_filter('alm_filter', 'al_paths');

//sample fliter adds 'inc' dir to the autoload paths
//used for development scripts
function al_paths($folders) {
    $p = array(WP_PLUGIN_DIR . '/al-manager/inc/');
    $folders = array_merge($p, $folders);
    return $folders;
}

//check if ALM is loaded and add filter
add_filter('alm_filter', 'al_paths_');

//sample fliter adds 'inc' dir to the autoload paths
//used for development scripts
function al_paths_($folders) {
    $p = array(WP_PLUGIN_DIR.'/al-manager/library/');
    $folders = array_merge($p, $folders);
    return $folders;
}

/**

 * Bootstrap js
 *
 */
add_action('wp_enqueue_scripts', 'cwpt_bootstrap_scripts');

function cwpt_bootstrap_scripts(){

    wp_enqueue_script('bootstrap-transition');
    wp_enqueue_script('bootstrap-dropdown');
    wp_enqueue_script('bootstrap-collapse');
}


/**
 *Mobile body class
 */
if(mod_mobile::detect()->isMobile()) add_filter( 'body_class', 'cwpt_mobile_class');
function cwpt_mobile_class( $classes ) {
         $classes[] = 'mobile';
     return $classes;
}

/**
 * Editor style
 */
 add_editor_style('editor-style.css');

 function link_excerpt_more($more) {
       global $post;
	return '<a href="'. get_permalink($post->ID) . '"> '.__(' Readon','basejump').'  </a>';
}
add_filter('excerpt_more', 'link_excerpt_more');


/**
 * AL.Manager - make sure you are cleared to run, load classes on init do not load directly;
 */
add_action('init', 'load_classes');

function load_classes(){

//MB_Img_url::add_metabox()->admin_actions()->set_metabox_id('my-metabox');
    $styles = array(
        array('title' => 'Button', 'inline' => 'span', 'classes' => 'btn'),
        array('title' => 'info', 'inline' => 'span', 'classes' => 'btn btn-info'),
        array('title' => 'Success', 'inline' => 'span', 'classes' => 'btn btn-success'),
        array('title' => 'Warning', 'inline' => 'span', 'classes' => 'btn btn-warning'),
        array('title' => 'Font Size'),
        array('title' => 'Tiny', 'inline' => 'span', 'classes' => 'font-tiny'),
        array('title' => 'Small', 'inline' => 'span', 'classes' => 'font-small'),
        array('title' => 'Medium', 'inline' => 'span', 'classes' => 'font-medium'),
        array('title' => 'Large', 'inline' => 'span', 'classes' => 'font-large'),
        array('title' => 'Labels'),
        array('title' => 'Default', 'inline' => 'span', 'classes' => 'label'),
        array('title' => 'Warning', 'inline' => 'span', 'classes' => 'label label-warning'),
        array('title' => 'Info', 'inline' => 'span', 'classes' => 'label label-info'),
        array('title' => 'Important', 'inline' => 'span', 'classes' => 'label label-important'),
        array('title' => 'Alerts'),
        array('title' => 'Default', 'block' => 'div', 'classes' => 'alert'),
        array('title' => 'Info', 'block' => 'div', 'classes' => 'alert alert-info'),
        array('title' => 'Others'),
        array('title' => 'Well', 'block' => 'div', 'classes' => 'well'),
        array('title' => 'Highlight', 'inline' => 'span', 'classes' => 'highlight'),
    );

    Ext_Editor_Styles::create()->set_styles($styles)->add_filters();

    /**
     * testing menubars
     */

    /** Display most recent Post (all Post Types) **/
    Ext_Post_Menus::add()->set_node_id('recent')->set_node_title('Recent Post')->set_post_types(TRUE)->published();
    /** Display published Post **/
    Ext_Post_Menus::add()->set_node_id('menu-published')->set_node_title('Post')->published();
    /** Display published pages **/
    Ext_Post_Menus::add()->set_node_id('menu-pages')->set_node_title('Pages')->published('page');
    /** Display Custom Options pages **/
    Ext_Post_Menus::add()->set_node_id('custom_options')->set_node_title('UI.Options')->published('cwp_custom_options');

    /**
     * Theme Navs
     */
    /** Adss amenu item **/
    Ext_WPNavs::add()->set_theme_location('primary')->add_loginout();

    //mmmmiopFn_Gen::instance()->img_figure();

    //Fn_Gen::instance()->remove_img_dimensions();



}


/**
 * Theme Plugins / Activations
 */


/**
 * ******************************plugin activations*****************************
 */

/**
 * Include the TGM_Plugin_Activation class.
 */
if(file_exists(dirname( __FILE__ ) . '/includes/tgm-plugin-activation/class-tgm-plugin-activation.php')){


require_once dirname( __FILE__ ) . '/includes/tgm-plugin-activation/class-tgm-plugin-activation.php';

add_action( 'tgmpa_register', 'cwp_theme_plugins' );

}

function cwp_theme_plugins() {

	/**
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */

    if(file_exists(dirname( __FILE__ ) . '/includes/tgm-plugin-activation/theme-plugins.php')):

            include_once dirname( __FILE__ ) . '/includes/tgm-plugin-activation/theme-plugins.php';
    else :
        $plugins = array(
		/** This is an example of how to include a plugin pre-packaged with a theme */
		array(
			'name'     => 'TGM Example Plugin', // The plugin name
			'slug'     => 'tgm-example-plugin', // The plugin slug (typically the folder name)
			'source'   => get_stylesheet_directory() . '/includes/tgm-plugin-activation/plugins/tgm-example-plugin.zip', // The plugin source
			'required' => true // If false, the plugin is only 'recommended' instead of required
		),
		/** This is an example of how to include a plugin from the WordPress Plugin Repository */
		array(
			'name' => 'BuddyPress',
			'slug' => 'buddypress',
			'required' => false
		),
            array(
			'name' => 'WordPress SEO by Yoast',
			'slug' => 'wordpress-seo',
			'required' => false
		),
		array(
			'name' => 'Google Analytics for WordPress',
			'slug' => 'google-analytics-for-wordpress',
			'required' => false
		),
            array(
			'name' => 'Jetpack by WordPress.com',
			'slug' => 'jetpack',
			'required' => false
		),
	);
    endif;


	/** Change this to your theme text domain, used for internationalising strings */
	$theme_text_domain = 'basejump';

	/**
	 * Array of configuration settings. Uncomment and amend each line as needed.
	 * If you want the default strings to be available under your own theme domain,
	 * uncomment the strings and domain.
	 * Some of the strings are added into a sprintf, so see the comments at the
	 * end of each line for what each argument will be.
	 */
	$config = array(
        /* 'domain'       => $theme_text_domain,         // Text domain - likely want to be the same as your theme. */
        /* 'default_path' => '',                         // Default absolute path to pre-packaged plugins */
        'menu' => 'install-required-plugins', // Menu slug */
        'notices' => true, // Show admin notices or not */
        'strings' => array(
        'page_title' => __('Install Required Plugins', $theme_text_domain), // */
        'menu_title' => __('Install Plugins', $theme_text_domain), // */
         'instructions_install' => __('The %1$s plugin is required for this theme. Click on the big blue button below to install and activate %1$s.', $theme_text_domain), // %1$s = plugin name */
         'instructions_install_recommended' => __('The %1$s plugin is recommended for this theme. Click on the big blue button below to install and activate %1$s.', $theme_text_domain), // %1$s = plugin name, %2$s = plugins page URL */
          'instructions_activate' => __('The %1$s plugin is installed but currently inactive. Please go to the <a href="%2$s">plugin administration page</a> page to activate it.', $theme_text_domain), // %1$s = plugin name, %2$s = plugins page URL */
          'button' => __('Install %s Now', $theme_text_domain), // %1$s = plugin name */
          'installing' => __('Installing Plugin: %s', $theme_text_domain), // %1$s = plugin name */
          'oops' => __( 'Something went wrong with the plugin API.', $theme_text_domain ), // */
        'notice_can_install_required'  => __( 'This theme requires the following plugins: %1$s.', $theme_text_domain ), // %1$s = plugin names */
        'notice_can_install_recommended' => __( 'This theme recommends the following plugins: %1$s.', $theme_text_domain ), // %1$s = plugin names */
       'notice_cannot_install'=> __( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', $theme_text_domain ), // %1$s = plugin name */
        'notice_can_activate_required' => __( 'The following required plugins are currently inactive: %1$s.', $theme_text_domain ), // %1$s = plugin names */
        'notice_can_activate_recommended' => __( 'The following recommended plugins are currently inactive: %1$s.', $theme_text_domain ), // %1$s = plugin names */
        'notice_cannot_activate' => __( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', $theme_text_domain ), // %1$s = plugin name */
        'return' => __( 'Return to Required Plugins Installer', $theme_text_domain ), // */
        'plugin_activated' => __( 'Plugin activated successfully.', $theme_text_domain ) // */
        )
	);

	tgmpa( $plugins, $config );

}

//include_once WP_CONTENT_DIR.'/plugins/NHP-Theme-Options/theme-options.php';