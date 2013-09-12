<?php 
if (!class_exists('MSDEventCPT')) {
    class MSDEventCPT {
        //Properties
        var $cpt = 'event';
        //Methods
        /**
        * PHP 4 Compatible Constructor
        */
        public function MSDEventCPT(){$this->__construct();}
    
        /**
         * PHP 5 Constructor
         */
        function __construct(){
            global $current_screen;
            //Actions
            add_action( 'init', array(&$this,'register_cpt_event') );
            add_action( 'init', array(&$this,'add_event_meta') );
            add_image_size('event-slider',500,300,true);
            add_shortcode('events-gallery', array(&$this,'display_events_gallery'));
        }
        
        function register_cpt_event() {
        
            $labels = array( 
                'name' => _x( 'Events', 'event' ),
                'singular_name' => _x( 'Event', 'event' ),
                'add_new' => _x( 'Add New', 'event' ),
                'add_new_item' => _x( 'Add New event', 'event' ),
                'edit_item' => _x( 'Edit event', 'event' ),
                'new_item' => _x( 'New event', 'event' ),
                'view_item' => _x( 'View event', 'event' ),
                'search_items' => _x( 'Search Events', 'event' ),
                'not_found' => _x( 'No Events found', 'event' ),
                'not_found_in_trash' => _x( 'No Events found in Trash', 'event' ),
                'parent_item_colon' => _x( 'Parent event:', 'event' ),
                'menu_name' => _x( 'Event', 'event' ),
            );
        
            $args = array( 
                'labels' => $labels,
                'hierarchical' => false,
                'description' => 'event',
                'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'custom-fields', 'genesis-cpt-archives-settings' ),
                'taxonomies' => array(),
                'public' => true,
                'show_ui' => true,
                'show_in_menu' => true,
                'menu_position' => 20,
                
                'show_in_nav_menus' => true,
                'publicly_queryable' => true,
                'exclude_from_search' => true,
                'has_archive' => true,
                'query_var' => true,
                'can_export' => true,
                'rewrite' => array('slug'=>'event','with_front'=>false),
                'capability_type' => 'post'
            );
        
            register_post_type( 'event', $args );
        }

        function add_event_meta(){
            global $wpalchemy_media_access,$post;
            if(!class_exists('WPAlchemy_MetaBox')){
                include_once (WP_CONTENT_DIR.'/wpalchemy/MetaBox.php');
            }
            if(!class_exists('WPAlchemy_MediaAccess')){
                include_once (WP_CONTENT_DIR . '/wpalchemy/MediaAccess.php');
            }
            
            // global styles for the meta boxes
            if (is_admin()){
                 add_action('admin_enqueue_scripts', array(&$this,'msdlab_metabox_style'));
                 }
            
            $wpalchemy_media_access = new WPAlchemy_MediaAccess();
            
            global $event_meta;
            $event_meta = new WPAlchemy_MetaBox(array
            (
                'id' => '_event_meta',
                'title' => 'Event Meta',
                'types' => array('event'), // added only for pages and to custom post type "events"
                'context' => 'normal', // same as above, defaults to "normal"
                'priority' => 'high', // same as above, defaults to "high"
                'template' => get_stylesheet_directory().'/lib/template/event-meta.php',
                'autosave' => TRUE,
                'mode' => WPALCHEMY_MODE_EXTRACT, // defaults to WPALCHEMY_MODE_ARRAY
                'prefix' => '_event_' // defaults to NULL
            ));
        }

        function msdlab_metabox_style() {
            global $post;
            if($post->post_type == 'event'){
            wp_enqueue_script('jquery-ui-core');
            wp_enqueue_script('jquery-ui-datepicker');
            wp_enqueue_style('jquery-ui-style','http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/themes/ui-lightness/jquery-ui.min.css');
            wp_enqueue_style('wpalchemy-metabox', get_stylesheet_directory_uri() . '/lib/css/meta.css');
            }
        }

        function display_events_gallery($atts){
            global $event_meta;
            extract( shortcode_atts( array(
                'num_posts' => 5,
                'date' => 'past',
            ), $atts ) );
            $args = array(
                'post_type' => 'event',
                'num_posts' => $num_posts,
            );
            $myposts = get_posts($args);
            $i = 0;
            foreach($myposts AS $mypost){
                //ts_data($mypost);
                $event_meta->the_meta($mypost->ID);
                $active = $i==0?'active':'';
                $thumb = wp_get_attachment_image_src(get_post_thumbnail_id($mypost->ID),'full');
                $carousel = '<div style="background-image: url('.$thumb[0].');" class="item active">
                    <div class="container">
                        <div class="carousel-caption">
                            
                        </div>
                    </div>
                </div>';
                
                while($event_meta->have_fields('otherfiles')):
                    $carousel .= '
                    <div style="background-image: url('.$event_meta->get_the_value(downloadurl).');" class="item">
                        <div class="container">
                            <div class="carousel-caption">
                                
                            </div>
                        </div>
                    </div>';
                endwhile; //end loop
                
                $tabs .= '<li class="'.$active.'"><a href="#pane'.$i.'" data-toggle="tab">'.$mypost->post_title.'</a></li>';
                $panes .= '
                <div id="pane'.$i.'" class="tab-pane '.$active.'">
                    <div id="carousel'.$i.'" class="carousel slide">
                    <div class="carousel-inner">
                  '.$carousel.'
                    </div>
                    <!-- Controls -->
                      <a class="left carousel-control" href="#carousel'.$i.'" data-slide="prev">
                        <span class="icon-prev"></span>
                      </a>
                      <a class="right carousel-control" href="#carousel'.$i.'" data-slide="next">
                        <span class="icon-next"></span>
                      </a>
                    </div>
                </div>';
                $i++;
            }
            $ret = '
            <div class="bootstrap-gallery">
              <ul class="nav nav-tabs">
                '.$tabs.'
              </ul>
              <div class="tab-content">
                '.$panes.'
              </div><!-- /.tab-content -->
            </div><!-- /.tabbable -->';
        return $ret;
        }       
  } //End Class
} //End if class exists statement

global $msd_event;
$msd_event = new MSDEventCPT;