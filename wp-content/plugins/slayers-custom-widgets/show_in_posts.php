<?php 


if(isset($_POST['pagen'])) $_GET['post_pag'] = $_POST['pagen'];

$url .= '&amp;opt='. $_GET['opt'] . '&amp;post_pag=' . ( $_GET['post_pag']  = ( !empty($_GET['post_pag']) ? $_GET['post_pag'] : 0 ) );

if(!empty($_GET['delete_post']) && isset($this->widgets[$_GET['id']]['posts'][$_GET['delete_post']])){
	
	unset($this->widgets[$_GET['id']]['posts'][$_GET['delete_post']]);
	
	update_option('slayer_widgets', $this->widgets);
	
	}

echo '<table class="slayer_main_table">';
	
	echo '<tr>';
	
		echo '<td style="width:50%;" valign="top">';
		
			echo '<h2>Show in Posts</h2>';
			
			echo '<ul class="slayer_post_list">';
				
				if(empty($this->widgets[$_GET['id']]['posts']))
					echo '<li>all</li>';
				else
					{
					
					foreach($this->widgets[$_GET['id']]['posts'] as $id => $title){
						
						echo '<li><a onclick="if(!confirm(\'Are you sure you want to remove this post from the list?\')) return false;" href="', $url , '&amp;delete_post=' , $id ,'">', $title ,'</a></li>';
						
						}
					
					}
			
			echo '</ul>';
			
			echo 'Click a post to remove it.';
		
		echo '</td>';
		
		
		echo '<td valign="top">';
			
			
			ob_start();
			$num_posts = wp_count_posts( 'post', 'readable' );
			$num_posts = $num_posts->publish;
			
			
			echo '<form method="post" action="', $url ,'"><div class="tablenav">';
				
				echo '<div class=" alignright">';
					echo 'Page : ';
					echo '<select name="pagen">';
						for($i = 0; $i < $num_posts / $this->info['posts_per_page']; ++$i)
							echo '<option ', $_GET['post_pag'] == $i ? 'selected="selected"' : false ,' value="', $i ,'">', $i+1 ,'</option>';
					echo '</select>';
					
					echo '<input class="button-secondary" type="submit" value="go" />';
				echo '</div>';
				
				echo '<div class="align_left tablenav-pages" style="float:left">';
					if( $_GET['post_pag']+1 < ($num_posts / $this->info['posts_per_page']) )
						echo '<a class="page-numbers" href="', str_replace( '&amp;post_pag='.$_GET['post_pag'],'&amp;post_pag='.($_GET['post_pag']+1), $url) ,'">&laquo; Older Entries</a>';
					
					if($_GET['post_pag'])
						echo '<a class="page-numbers" href="', str_replace('&amp;post_pag='.$_GET['post_pag'],'&amp;post_pag='.($_GET['post_pag']-1),$url) ,'">Newer Entries &raquo;</a>';
				echo '</div>';
				
				
				
			echo '</div></form>';
			$nav = ob_get_contents();
			ob_end_flush();
			
			
			echo '<form action="', $url ,'" method="post">';
			echo '<table class="widefat" style="width:100%;">';
				echo '<thead>';
					echo '<tr>';
						echo '<th class="check-column check-column-controller" scope="col"><input type="checkbox"/></th>';
						echo '<th scope="col">Post title</th>';
					echo '</tr>';
				echo '</thead>';
				
				echo '<tbody>';
					
					
					
					$posts = get_posts(array(
						'numberposts'	=> $this->info['posts_per_page'],
						'offset'		=> $_GET['post_pag'] * $this->info['posts_per_page'],
						'post_type' 	=> 'post'
						));
					
					$alternative = true;
					
					foreach($posts as $post){
						
						if($alternative)	$alternative = false;
						else				$alternative = true;
						
						echo '<tr class="', $alternative ? 'alternate':false ,' author-self status-publish">';
							
							echo '<th class="check-column"><input name="posts[]" ', isset($this->widgets[$_GET['id']]['posts'][$post->ID]) ? 'checked="checked"' : false ,' type="checkbox" value="', $post->ID ,'_', $post->post_title ,'" /></th>';
							
							echo '<td>',$post->post_title,'</td>';
						
						echo '</tr>';
						
						}
				echo '</tbody>';
			
			echo '</table>';
			
			
			
			echo '<p class="submit" style="clear:both;margin-top:5px;">';
				echo '<input type="submit" value="&laquo; Add selected posts" />';
			echo '</p>';
			echo '</form>';
			
			echo $nav;
			
			
		echo '</td>';
	
	echo '</tr>';

echo '</table>';

?>