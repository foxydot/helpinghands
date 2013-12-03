<?php
remove_action('loop_start','msdlab_fancy_title');
remove_action( 'genesis_before_post_content', 'genesis_post_info' );
remove_action( 'genesis_after_post_content', 'genesis_post_meta' );
remove_action('genesis_post_content', 'genesis_do_post_content');
//remove_action('genesis_loop', 'genesis_do_loop');
//add_action('genesis_after_loop','msd_add_gravity_form');
function msd_add_gravity_form(){
    print do_shortcode('[gravityform id="1" ajax="true"]');
}
genesis();
