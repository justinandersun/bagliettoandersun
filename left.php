<div id="nav">
	<a href="<?php echo home_url(); ?>/news" <?php if (is_home()) { echo " class=\"current-page\""; } else { echo " class=\"normal-page\"";}?>>News</a>
	<a href="<?php echo home_url(); ?>/committees" <?php if (is_page('Committees')) { echo " class=\"current-page\""; } else { echo " class=\"normal-page\"";}?>>Committees</a>
	<a href="<?php echo home_url(); ?>/assembly" <?php if (is_page('Assembly')) { echo " class=\"current-page\""; } else { echo " class=\"normal-page\"";}?>>Assembly</a>
	<a href="<?php echo home_url(); ?>/senate" <?php if (is_page('Senate')) { echo " class=\"current-page\""; } else { echo " class=\"normal-page\"";}?>>Senate</a>
</div>

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