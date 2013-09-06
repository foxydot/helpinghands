<?php get_header(); ?>
<?php genesis_home(); ?>

<div id="home-top-bg" style="margin-top:70px;">
	<div id="home-top">
	        
		<div class="home-top-left">
			<?php if (!dynamic_sidebar('Home Top Left')) : ?>
			<div class="widget">
				<?php /*?><?php if( function_exists('wp_cycle') ) : ?>
					<?php wp_cycle(); ?>
				<?php endif; ?><?php */?>
                <?php if ( function_exists( "easingsliderlite" ) ) { easingsliderlite(); } ?>
			
			</div>			
			<?php endif; ?>

		</div><!-- end .home-top-left -->
		
		<div id="forabout" style="height:100px;">&nbps;</div>
		<?php /*?><div class="home-top-right">
		
			<?php if (!dynamic_sidebar('Home Top Right')) : ?>
			<div class="widget">
				<h4><?php _e("Home Top Right", 'genesis'); ?></h4>
				<p><?php _e("This is a widgeted area which is called Home Top Right. It is using the Genesis - Featured Page widget to display what you see on the Metric child theme demo site. To get started, log into your WordPress dashboard, and then go to the Appearance > Widgets screen. There you can drag the Genesis - Featured Page widget into the Home Top widget area on the right hand side.", 'genesis'); ?></p>
			</div>			
			<?php endif; ?>
		</div><!-- end .home-top-right --><?php */?>
				
	</div><!-- end #home-top -->
</div><!-- end #home-top-bg -->

<div id="home-middle-bg" class="homemidbg1">

	<div id="home-middle">
		<div class="home-middle-1">
			<?php if (!dynamic_sidebar('Home Middle #1')) : ?>
			<div class="widget">
				<h4><?php _e("Home Middle #1 Widget", 'genesis'); ?></h4>
				<p><?php _e("This is a widgeted area which is called Home Middle #1. It is using the Genesis - Featured Page widget to display what you see on the Metric child theme demo site. To get started, log into your WordPress dashboard, and then go to the Appearance > Widgets screen. There you can drag the Genesis - Featured Page widget into the Home Middle #1 widget area on the right hand side. To get the image to display, simply upload an image through the media uploader on the edit post screen and publish your page. The Featured Page widget will know to display the post image as long as you select that option in the widget interface.", 'genesis'); ?></p>
			</div>	
			<?php endif; ?>

		</div><!-- end .home-middle-1 -->
               <div id="forevents" style="height:96px;">&nbsp;</div>
    </div><!-- end #home-middle -->  
</div><!-- end #home-middle-bg -->

<div id="home-middle-bg" class="homemidbg2">

	<div id="home-middle">
		<div class="home-middle-2">
        	
			<?php ///if (!dynamic_sidebar('Home Middle #2')) : ?>
            <h4>Events</h4>
			<div class="widget">
				<?php include (ABSPATH . '/wp-content/plugins/wp-content-slideshow/content-slideshow.php'); ?>
			</div>
            <div class="viewpreviousevents">
            	<a href="" class="">View Previous Events</a>
            </div>
			<?php //endif; ?>
		</div><!-- end .home-middle-2 -->
         <div id="forcontribution" style="height:95px;">&nbsp;</div>
    </div><!-- end #home-middle -->

</div><!-- end #home-middle-bg -->

<div id="home-middle-bg" class="homemidbg3">

	<div id="home-middle">
		<div class="home-middle-3">
			<?php if (!dynamic_sidebar('Home Middle #3')) : ?>
			<div class="widget">
				<h4><?php _e("Home Middle #3 Widget", 'genesis'); ?></h4>
				<p><?php _e("This is a widgeted area which is called Home Middle #3. It is using the Genesis - Featured Page widget to display what you see on the Metric child theme demo site. To get started, log into your WordPress dashboard, and then go to the Appearance > Widgets screen. There you can drag the Genesis - Featured Page widget into the Home Middle #3 widget area on the right hand side. To get the image to display, simply upload an image through the media uploader on the edit post screen and publish your page. The Featured Page widget will know to display the post image as long as you select that option in the widget interface.", 'genesis'); ?></p>
			</div>		
			<?php endif; ?>
		</div><!-- end .home-middle-3 -->
                
    </div><!-- end #home-middle -->
<div id="forinvolved" style="height:134px;">&nbsp;</div>
</div><!-- end #home-middle-bg -->

<div id="home-middle-bg" class="homemidbg4">

	<div id="home-middle">
		<div class="home-middle-3">
			<?php if (!dynamic_sidebar('Home Middle #4')) : ?>
			<div class="widget">
				<h4><?php _e("Home Middle #3 Widget", 'genesis'); ?></h4>
				<p><?php _e("This is a widgeted area which is called Home Middle #3. It is using the Genesis - Featured Page widget to display what you see on the Metric child theme demo site. To get started, log into your WordPress dashboard, and then go to the Appearance > Widgets screen. There you can drag the Genesis - Featured Page widget into the Home Middle #3 widget area on the right hand side. To get the image to display, simply upload an image through the media uploader on the edit post screen and publish your page. The Featured Page widget will know to display the post image as long as you select that option in the widget interface.", 'genesis'); ?></p>
			</div>		
			<?php endif; ?>
		</div><!-- end .home-middle-3 -->
      <div id="forsponsors" style="height:95px;">&nbsp;</div>
    </div><!-- end #home-middle -->

</div><!-- end #home-middle-bg -->

<div id="home-middle-bg" class="homemidbg5">

	<div id="home-middle">
		<div class="home-middle-3">
			<?php if (!dynamic_sidebar('Home Middle #5')) : ?>
			<div class="widget">
				<h4><?php _e("Home Middle #3 Widget", 'genesis'); ?></h4>
				<p><?php _e("This is a widgeted area which is called Home Middle #3. It is using the Genesis - Featured Page widget to display what you see on the Metric child theme demo site. To get started, log into your WordPress dashboard, and then go to the Appearance > Widgets screen. There you can drag the Genesis - Featured Page widget into the Home Middle #3 widget area on the right hand side. To get the image to display, simply upload an image through the media uploader on the edit post screen and publish your page. The Featured Page widget will know to display the post image as long as you select that option in the widget interface.", 'genesis'); ?></p>
			</div>		
			<?php endif; ?>
		</div><!-- end .home-middle-3 -->
<div id="forcontact" style="height:95px;">&nbsp;</div>
    </div><!-- end #home-middle -->

</div><!-- end #home-middle-bg -->

<div id="home-middle-bg" class="homemidbg6">

	<div id="home-middle">
		<div class="home-middle-3">
			<?php if (!dynamic_sidebar('Home Middle #6')) : ?>
			<div class="widget">
				<h4><?php _e("Home Middle #3 Widget", 'genesis'); ?></h4>
				<p><?php _e("This is a widgeted area which is called Home Middle #3. It is using the Genesis - Featured Page widget to display what you see on the Metric child theme demo site. To get started, log into your WordPress dashboard, and then go to the Appearance > Widgets screen. There you can drag the Genesis - Featured Page widget into the Home Middle #3 widget area on the right hand side. To get the image to display, simply upload an image through the media uploader on the edit post screen and publish your page. The Featured Page widget will know to display the post image as long as you select that option in the widget interface.", 'genesis'); ?></p>
			</div>		
			<?php endif; ?>
		</div><!-- end .home-middle-3 -->
    </div><!-- end #home-middle -->

</div><!-- end #home-middle-bg -->

<?php get_footer(); ?>