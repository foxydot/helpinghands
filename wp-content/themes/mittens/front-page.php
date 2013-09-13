<?php get_header(); ?>
<?php genesis_home(); ?>

<div id="home-top-bg" style="margin-top:70px;">
	<div id="home-top">
	        
		<div class="home-top-left">
			<?php genesis_loop(); ?>

		</div><!-- end .home-top-left -->
		
				
	</div><!-- end #home-top -->
</div><!-- end #home-top-bg -->

		<div id="forabout" class="scroll-anchor"></div>
<div id="homemidbg1" class="home-middle-bg">

	<div class="home-middle">
		<div class="home-middle-1">
			<?php if (!dynamic_sidebar('Home Middle #1')) : ?>
			<div class="widget">
				<h4><?php _e("Home Middle #1 Widget", 'genesis'); ?></h4>
				<p><?php _e("This is a widgeted area which is called Home Middle #1. It is using the Genesis - Featured Page widget to display what you see on the Metric child theme demo site. To get started, log into your WordPress dashboard, and then go to the Appearance > Widgets screen. There you can drag the Genesis - Featured Page widget into the Home Middle #1 widget area on the right hand side. To get the image to display, simply upload an image through the media uploader on the edit post screen and publish your page. The Featured Page widget will know to display the post image as long as you select that option in the widget interface.", 'genesis'); ?></p>
			</div>	
			<?php endif; ?>

		</div><!-- end .home-middle-1 -->
    </div><!-- end #home-middle -->  
</div><!-- end #home-middle-bg -->

               <div id="forevents" class="scroll-anchor"></div>
<div id="homemidbg2" class="home-middle-bg">

	<div class="home-middle">
		<div class="home-middle-2">
        	
			<?php //if (!dynamic_sidebar('Home Middle #2')) : ?>
            <h4>Events</h4>
			<?php print do_shortcode('[events-gallery]'); ?>
            <div class="viewpreviousevents">
            	<a href="<?php print site_url('/event'); ?>" class="">View All Events</a>
            </div>
			<?php //endif; ?>
		</div><!-- end .home-middle-2 -->
    </div><!-- end #home-middle -->

</div><!-- end #home-middle-bg -->

         <div id="forcontribution" class="scroll-anchor"></div>
<div id="homemidbg3" class="home-middle-bg">

	<div class="home-middle">
		<div class="home-middle-3">
			<?php if (!dynamic_sidebar('Home Middle #3')) : ?>
			<div class="widget">
				<h4><?php _e("Home Middle #3 Widget", 'genesis'); ?></h4>
				<p><?php _e("This is a widgeted area which is called Home Middle #3. It is using the Genesis - Featured Page widget to display what you see on the Metric child theme demo site. To get started, log into your WordPress dashboard, and then go to the Appearance > Widgets screen. There you can drag the Genesis - Featured Page widget into the Home Middle #3 widget area on the right hand side. To get the image to display, simply upload an image through the media uploader on the edit post screen and publish your page. The Featured Page widget will know to display the post image as long as you select that option in the widget interface.", 'genesis'); ?></p>
			</div>		
			<?php endif; ?>
		</div><!-- end .home-middle-3 -->
                
    </div><!-- end #home-middle -->
</div><!-- end #home-middle-bg -->

<div id="forinvolved" class="scroll-anchor"></div>
<div id="homemidbg4" class="home-middle-bg">

	<div class="home-middle">
		<div class="home-middle-3">
			<?php if (!dynamic_sidebar('Home Middle #4')) : ?>
			<div class="widget">
				<h4><?php _e("Home Middle #3 Widget", 'genesis'); ?></h4>
				<p><?php _e("This is a widgeted area which is called Home Middle #3. It is using the Genesis - Featured Page widget to display what you see on the Metric child theme demo site. To get started, log into your WordPress dashboard, and then go to the Appearance > Widgets screen. There you can drag the Genesis - Featured Page widget into the Home Middle #3 widget area on the right hand side. To get the image to display, simply upload an image through the media uploader on the edit post screen and publish your page. The Featured Page widget will know to display the post image as long as you select that option in the widget interface.", 'genesis'); ?></p>
			</div>		
			<?php endif; ?>
		</div><!-- end .home-middle-3 -->
    </div><!-- end #home-middle -->

</div><!-- end #home-middle-bg -->

      <div id="forsponsors" class="scroll-anchor"></div>
<div id="homemidbg5" class="home-middle-bg">

	<div class="home-middle">
		<div class="home-middle-3">
			<?php if (!dynamic_sidebar('Home Middle #5')) : ?>
			<div class="widget">
				<h4><?php _e("Home Middle #3 Widget", 'genesis'); ?></h4>
				<p><?php _e("This is a widgeted area which is called Home Middle #3. It is using the Genesis - Featured Page widget to display what you see on the Metric child theme demo site. To get started, log into your WordPress dashboard, and then go to the Appearance > Widgets screen. There you can drag the Genesis - Featured Page widget into the Home Middle #3 widget area on the right hand side. To get the image to display, simply upload an image through the media uploader on the edit post screen and publish your page. The Featured Page widget will know to display the post image as long as you select that option in the widget interface.", 'genesis'); ?></p>
			</div>		
			<?php endif; ?>
		</div><!-- end .home-middle-3 -->
    </div><!-- end #home-middle -->

</div><!-- end #home-middle-bg -->

<div id="forcontact" class="scroll-anchor"></div>
<div id="homemidbg6" class="home-middle-bg">

	<div class="home-middle">
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