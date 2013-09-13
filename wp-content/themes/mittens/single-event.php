<?php
global $msd_event;
remove_action('genesis_post_content', 'genesis_do_post_content');
add_action('genesis_post_content', array(&$msd_event,'display_single_event_gallery'));
add_action('genesis_post_content', 'genesis_do_post_content');

genesis();
