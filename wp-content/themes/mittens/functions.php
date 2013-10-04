<?php
// Start the engine
require_once(TEMPLATEPATH.'/lib/init.php');

// Add new image sizes
add_image_size('Slideshow', 500, 260, TRUE);
add_image_size('Mini', 90, 90, TRUE);

remove_action( 'genesis_before_post_content', 'genesis_post_info' ); //remove the info (date, posted by,etc.)
remove_action( 'genesis_after_post_content', 'genesis_post_meta' ); //remove the meta (filed under, tags, etc.)

// Add widgeted footer section
add_action('genesis_before_footer', 'metric_include_footer_widgets'); 
function metric_include_footer_widgets() {
    require(CHILD_DIR.'/footer-widgeted.php');
}

// Customizes go to top text
add_filter('genesis_footer_backtotop_text', 'footer_backtotop_filter');
function footer_backtotop_filter($backtotop) {
    $backtotop = '[footer_backtotop text="Top of Page"]';
    return $backtotop;
} 

// Register widget areas
genesis_register_sidebar(array(
	'name'=>'Home Top Left',
	'id' => 'home-top-left',
	'description' => 'This is the top left section of the homepage.',
	'before_widget' => '<div id="%1$s" class="widget %2$s">', 'after_widget'  => '</div>',
	'before_title'=>'<h4 class="widgettitle">','after_title'=>'</h4>'
));
genesis_register_sidebar(array(
	'name'=>'Home Top Right',
	'id' => 'home-top-right',
	'description' => 'This is the top right section of the homepage.',
	'before_widget' => '<div id="%1$s" class="widget %2$s">', 'after_widget'  => '</div>',
	'before_title'=>'<h4 class="widgettitle">','after_title'=>'</h4>'
));
genesis_register_sidebar(array(
	'name'=>'Home Middle #1',
	'id' => 'home-middle-1',
	'description' => 'This is the first column of the middle section of the homepage.',
	'before_widget' => '<div id="%1$s" class="widget %2$s">', 'after_widget'  => '</div>',
	'before_title'=>'<h4 class="widgettitle">','after_title'=>'</h4>'
));
genesis_register_sidebar(array(
	'name'=>'Home Middle #2',
	'id' => 'home-middle-2',
	'description' => 'This is the second column of the middle section of the homepage.',
	'before_widget' => '<div id="%1$s" class="widget %2$s">', 'after_widget'  => '</div>',
	'before_title'=>'<h4 class="widgettitle">','after_title'=>'</h4>'
));
genesis_register_sidebar(array(
	'name'=>'Home Middle #3',
	'id' => 'home-middle-3',
	'description' => 'This is the third column of the middle section of the homepage.',
	'before_widget' => '<div id="%1$s" class="widget %2$s">', 'after_widget'  => '</div>',
	'before_title'=>'<h4 class="widgettitle">','after_title'=>'</h4>'
));
genesis_register_sidebar(array(
	'name'=>'Home Middle #4',
	'id' => 'home-middle-4',
	'description' => 'This is the third column of the middle section of the homepage.',
	'before_widget' => '<div id="%1$s" class="widget %2$s">', 'after_widget'  => '</div>',
	'before_title'=>'<h4 class="widgettitle">','after_title'=>'</h4>'
));
genesis_register_sidebar(array(
	'name'=>'Home Middle #5',
	'id' => 'home-middle-5',
	'description' => 'This is the third column of the middle section of the homepage.',
	'before_widget' => '<div id="%1$s" class="widget %2$s">', 'after_widget'  => '</div>',
	'before_title'=>'<h4 class="widgettitle">','after_title'=>'</h4>'
));
genesis_register_sidebar(array(
	'name'=>'Home Middle #6',
	'id' => 'home-middle-6',
	'description' => 'This is the third column of the middle section of the homepage.',
	'before_widget' => '<div id="%1$s" class="widget %2$s">', 'after_widget'  => '</div>',
	'before_title'=>'<h4 class="widgettitle">','after_title'=>'</h4>'
));
genesis_register_sidebar(array(
	'name'=>'Page Top Footer',
	'id' => 'page-top-footer',
	'description' => 'This is the first column of the footer section.',
	'before_title'=>'<h4 class="widgettitle">','after_title'=>'</h4>'
));
genesis_register_sidebar(array(
	'name'=>'Footer #1',
	'id' => 'footer-1',
	'description' => 'This is the first column of the footer section.',
	'before_title'=>'<h4 class="widgettitle">','after_title'=>'</h4>'
));
/*genesis_register_sidebar(array(
	'name'=>'Footer #2',
	'id' => 'footer-2',
	'description' => 'This is the second column of the footer section.',
	'before_title'=>'<h4 class="widgettitle">','after_title'=>'</h4>'
));
genesis_register_sidebar(array(
	'name'=>'Footer #3',
	'id' => 'footer-3',
	'description' => 'This is the third column of the footer section.',
	'before_title'=>'<h4 class="widgettitle">','after_title'=>'</h4>'
));*/
genesis_register_sidebar(array(
	'name'=>'Footer #4',
	'id' => 'footer-4',
	'description' => 'This is the fourth column of the footer section.',
	'before_title'=>'<h4 class="widgettitle">','after_title'=>'</h4>'
));


add_action('init', '_default_headScripts');
function _default_headScripts(){
  wp_enqueue_script('jquery');
  wp_enqueue_script('jquery-ui-widget');
  wp_enqueue_script('jquery-ui-tabs');
  wp_enqueue_script('thickbox');
  wp_enqueue_style('thickbox');
  $jq_ui_css = "";
  wp_enqueue_style( 'jquery_ui', $jq_ui_css, FALSE, false, false );
}

add_action('genesis_header','msdlab_add_menu');
function msdlab_add_menu(){
    if(is_front_page()){
        print '<ul class="added-menu">
           <li><a href="#home-top-bg" rel="m_PageScroll2id">Home</a></li>
           <li><a href="#forabout" rel="m_PageScroll2id">About</a></li>
           <li><a href="#forevents" rel="m_PageScroll2id">Events</a></li>
           <li><a href="#forcontribution" rel="m_PageScroll2id">Contribution</a></li>
           <li><a href="#forsponsors" rel="m_PageScroll2id">Sponsors</a></li>
           <li><a href="#forcontact" rel="m_PageScroll2id">Contact</a></li>
        </ul>';
    } else {
        print '<ul class="added-menu">
           <li><a href="/#home-top-bg">Home</a></li>
           <li><a href="/#forabout">About</a></li>
           <li><a href="/#forevents">Events</a></li>
           <li><a href="/#forcontribution">Contribution</a></li>
           <li><a href="/#forsponsors">Sponsors</a></li>
           <li><a href="/#forcontact">Contact</a></li>
        </ul>';
    } 
}

add_action('loop_start','msdlab_fancy_title');
function msdlab_fancy_title(){
    if(!is_front_page()){
        remove_action('genesis_post_title','genesis_do_post_title');
        if(has_post_thumbnail()){
            add_action('genesis_post_title','msd_fancy_post_title');
        }
    }
}

function msd_fancy_post_title(){
    global $post;
    $img = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
    $title = apply_filters( 'genesis_post_title_text', get_the_title() );

    if ( 0 === mb_strlen( $title ) )
        return;

    //* Link it, if necessary
    if ( ! is_singular() && apply_filters( 'genesis_link_post_title', true ) )
        $title = sprintf( '<a href="%s" title="%s" rel="bookmark">%s</a>', get_permalink(), the_title_attribute( 'echo=0' ), $title );

    //* Wrap in H1 on singular pages
    $wrap = is_singular() ? 'h1' : 'h2';

    //* Also, if HTML5 with semantic headings, wrap in H1
    $wrap = genesis_html5() && genesis_get_seo_option( 'semantic_headings' ) ? 'h1' : $wrap;

    //* Build the output
    $output = genesis_markup( array(
        'html5'   => "<{$wrap} %s>",
        'xhtml'   => sprintf( '<%s class="entry-title fancy" style="background-image:url('.$img[0].');">%s</%s>', $wrap, $title, $wrap ),
        'context' => 'entry-title',
        'echo'    => false,
    ) );

    $output .= genesis_html5() ? "{$title}</{$wrap}>" : '';

    echo apply_filters( 'genesis_post_title_output', "$output \n" );
}

/** remove a plugin stylesheet **/
add_action('wp_footer','msdlab_remove_gct_css', 1000);
function msdlab_remove_gct_css(){
    wp_dequeue_style('gctwidgetstyles');
    wp_deregister_style('gctwidgetstyles');
}
/** Customize the entire footer */
remove_action( 'genesis_footer', 'genesis_do_footer' );
add_action( 'genesis_footer', 'custom_footer_creds_text' );

function custom_footer_creds_text() {
    echo '<div class="footer-content">';
	echo '<p><a href="#">Sign In</a>    |    <a href="#">Privacy</a>    |    <a href="#">Terms of Service</a></p>';
    echo '<p>Copyright ';
    echo date('Y').' ';
	echo '<a href="'.network_site_url( '/' ).'">Helping Hands.</a> All rights reserved.</p>';
	echo '<p>Another <a href="#" class="developerteam">Cincinnati web design by Advia Internet</a></p>';
    echo '</div>';
}

include_once('lib/inc/events_cpt.php');
include_once('lib/inc/msd-functions.php');

add_action('genesis_before_content','genesis_get_sidebar');
remove_action('genesis_after_content','genesis_get_sidebar');

/*
 * Add styles and scripts
*/
add_action('wp_enqueue_scripts', 'msdlab_add_styles');
add_action('wp_enqueue_scripts', 'msdlab_add_scripts');


function remove_gravityforms_style() { 
    wp_dequeue_style('gforms_css');
    wp_dequeue_style('gforms_formsmain_css');
    wp_dequeue_style('gforms_ready_class_css');
}

function msdlab_add_styles() {
    global $is_IE;
    if(!is_admin()){
       wp_enqueue_style('bootstrap-style','//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.no-icons.min.css');
       wp_enqueue_style('msd-style',get_stylesheet_directory_uri().'/lib/css/style.css');
       wp_enqueue_style('msd-responsive',get_stylesheet_directory_uri().'/lib/css/responsive.css');
        if($is_IE){
            wp_enqueue_script('ie-style',get_stylesheet_directory_uri().'/lib/css/ie.css');
        }
        if(is_front_page()){
            wp_enqueue_style('msd-homepage-style',get_stylesheet_directory_uri().'/lib/css/homepage.css');
            wp_enqueue_style('msd-homepage-responsive',get_stylesheet_directory_uri().'/lib/css/responsive-home.css');
            add_action('wp_print_styles', 'remove_gravityforms_style',99);
            add_action('wp_footer', 'remove_gravityforms_style',99);
        }
    }
}

function msdlab_add_scripts() {
    global $is_IE;
    if(!is_admin()){
        //use cdn
        wp_enqueue_script('bootstrap-jquery','//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js',array('jquery'));
        if($is_IE){
        }
        if(is_front_page()){
            wp_enqueue_script('msd-homepage-jquery',get_stylesheet_directory_uri().'/lib/js/homepage-jquery.js',array('jquery','bootstrap-jquery'));
        }
    }
}



/*
 * A useful troubleshooting function. Displays arrays in an easy to follow format in a textarea.
*/
if ( ! function_exists( 'ts_data' ) ) :
function ts_data($data){
    $ret = '<textarea class="troubleshoot" cols="100" rows="20">';
    $ret .= print_r($data,true);
    $ret .= '</textarea>';
    print $ret;
}
endif;