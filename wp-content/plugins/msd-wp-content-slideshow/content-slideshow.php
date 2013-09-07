<?php

        $direct_path =  plugin_dir_path('msd-wp-content-slideshow/msd-wp-content-slideshow');
        $c_slideshow_class = c_slideshow_get_dynamic_class();

?>
<style>

#content-slideshow {
width: <?php $width = get_option('content_width'); if(!empty($width)) {echo $width;} else {echo "570";}?>px;
padding:0px !important;
background-color: #<?php $bg = get_option('content_bg'); if(!empty($bg)) {echo $bg;} else {echo "FFF";}?>;
height: <?php $height = get_option('content_height'); if(!empty($height)) {echo $height;} else {echo "250";}?>px;
overflow:hidden;
/*border: 5px solid #CCC;*/
position: relative;
}

#content-slideshow ul {
background:transparent !important;
margin: 0 !important;
border: none !important;
padding: 0 !important;
list-style-type: none !important;
position: relative;
}           

#content-slideshow .content_slideshow ul {
float:left;
overflow: hidden;
width: 690px;
margin: 0px !important;
padding: 0px !important;
height: 320px;
position: relative;
}

#content-slideshow .content_slideshow ul li {
display:none;
width: 690px !important;
height: 320px !important;
display:block;
overflow: hidden;
position:relative;
top: 0px !important;
left: 0px !important;
float: left;
margin: 0px !important;
padding: 0px !important;
z-index:1;
}

#content-slideshow .content_slideshow ul li img {
margin: 0px !important;
padding: 0px !important;
border: none !important;
float: left;
width: <?php $img_width = get_option('content_img_width'); if(!empty($img_width)) {echo $img_width;} else {echo "300";}?>px;
position: absolute;
top: 0px;
}

#content-slideshow  ul.slideshow-nav {
height:<?php $height = get_option('content_height'); if(!empty($height)) {echo $height;} else {echo "250";}?>px;
width:<?php $content_nav_width = get_option('content_nav_width'); if(!empty($content_nav_width)) {echo $content_nav_width;} else {echo "270";}?>px;
margin:0;
padding: 0;
float:right;
}

#content-slideshow .slideshow-nav li {
display:block;
margin:0;
padding:0;
list-style-type:none;
display:block;
}

.slideme {
font-size: 9px;
float: right;
}

.slideme a {
font-size: 8px;
text-decoration: none;
color: #CCC;
}

#content-slideshow .slideshow-nav li {
width: <?php $content_nav_width = get_option('content_nav_width'); if(!empty($content_nav_width)) {echo $content_nav_width;} else {echo "270";}?>px;
display:block;
margin:0px !important;
float: left;
padding: 0px !important;
height: 20%;
border-bottom: 1px solid #CCC;
background: #e8e8e5;

border-top: 1px solid #f1f1f1;
}

#content-slideshow .slideshow-nav li a {
display: block;
color: #333;
overflow: hidden;
font-weight: bold;
padding: 11px 12px 1px 15px;
font-size: 12px;
line-height: 18px;
}

#content-slideshow .slideshow-nav li p {
float: left;
font-weight: normal;
padding-top: 1px;
}


#content-slideshow .slideshow-nav li a:hover,
#content-slideshow .slideshow-nav li a:active {
color:#<?php $nav_color = get_option('content_nav_active_color'); if(!empty($nav_color)) {echo $nav_color;} else {echo "666";}?>;
}

.<?php echo $c_slideshow_class;?> {
font-size: 10px;
float: right;
clear: both;
position: relative;
top: -2px;
background-color: #CCC;
padding: 3px 3px;
line-height: 10px !important;
}

</style>


	<div id="content-slideshow">

		<div class="content_slideshow">

			<ul>

			<?php
                        
                $counting = 1;
                
                $sort = get_option('content_sort'); if(empty($sort)){$sort = "post_date";}
                $order = get_option('content_order'); if(empty($order)){$order = "DESC";}

                $all_post_types = get_post_types(array('public'=>TRUE));
                $args = array( 'meta_key' => 'content_slider', 'meta_value'=> '1', 'suppress_filters' => 1, 'post_type' => $all_post_types, 'orderby' => $sort, 'order' => $order);
                global $post;
                $myposts = get_posts( $args );
                foreach( $myposts AS $post ) :	
                    setup_postdata($post);
			?>

				<li id="main-post-<?php echo $counting;?>" onclick="location.href='<?php the_permalink(); ?>';" title="<?php _e("Permanent Link to"); ?> <?php the_title(); ?>">
					<?php the_post_thumbnail('event-slide');?>
					<div class="view-event-button">View Event</div>
				</li>

			<?php
			
			$counting++;
			
			endforeach; ?>
			</ul>

		</div>

		<ul class="slideshow-nav">

			<?php			
			$counting = 1;                        
            foreach( $myposts as $post ) :	
                setup_postdata($post);
                                				
				$custom = get_post_custom($post->ID);
                                
                        ?>
            <?php $active = ($counting == 1)?' on':''; ?>
				<li class="clearfix<?php print $active; ?>" id="post-<?php echo $counting; ?>">
					<a href="#main-post-<?php echo $counting; ?>" title="<?php the_title(); ?>">
						<h2><?php echo cut_content_feat(get_the_title(), 25, "..."); ?></h2>
						<?php $excerpt = get_the_excerpt();?>
						<p><?php echo cut_content_feat($excerpt, 70, "..."); ?> </p> 
					</a>
				</li>

			<?php
			
			$counting++;
			
			endforeach; ?>

		</ul>

	</div>