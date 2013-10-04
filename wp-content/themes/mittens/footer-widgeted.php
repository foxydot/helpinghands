<?php 

	if (!is_home())
    {
		?>
        <div id="footer-widgeted" class="top-footer">
            <div class="wrap">
                <div class="top-footer-widgeted">
                    <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Page Top Footer') ) : ?>
                    <?php endif; ?> 
                </div><!-- end .footer-widgeted-1 -->
            </div><!-- end .wrap -->
        </div><!-- end #footer-widgeted -->
        <?php
    }
?>

<div id="footer-widgeted">
	<div class="wrap">
    	<div class="footer-widgeted-1">
        	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer #1') ) : ?>
	    	<?php endif; ?> 
   		</div><!-- end .footer-widgeted-1 -->
    	<div class="footer-widgeted-2">
        	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer #2') ) : ?>
	    	<?php endif; ?> 
    	</div><!-- end .footer-widgeted-2 -->
    	<div class="footer-widgeted-3">
        	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer #3') ) : ?>
	    	<?php endif; ?> 
    	</div><!-- end .footer-widgeted-3 -->
    	<div class="footer-widgeted-4">
        	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Footer #4') ) : ?>
	    	<?php endif; ?> 
    	</div><!-- end .footer-widgeted-4 -->
	</div><!-- end .wrap -->
</div><!-- end #footer-widgeted -->