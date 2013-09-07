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
                'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'custom-fields' ),
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
  } //End Class
} //End if class exists statement

global $msd_event;
$msd_event = new MSDEventCPT;