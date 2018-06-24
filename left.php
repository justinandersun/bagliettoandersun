
<div id="leftbar">
	<p class="side-section">Recent Notes</p>
	<ul>
		<?php
			$recent_posts = wp_get_recent_posts();
			foreach( $recent_posts as $recent ){
				echo '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
			}
			wp_reset_query();
		?>
	<ul>
</div>