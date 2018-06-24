<footer class="entry-footer">
	<p class="entry-link">
		<span class="entry-link-title">Topics:</span>
		<span class="entry-link-list"><?php the_category( ', ' ); ?></span>
	</p>

	<p class="entry-link">
		<span class="entry-link-title">Committees:</span>
		<span class="entry-link-list"><?php the_terms( $post->ID, 'committees', ' ' ); ?></span>
	</p>

	<p class="entry-link">
		<span class="entry-link-title">Assembly Members:</span>
		<span class="entry-link-list"><?php the_terms( $post->ID, 'assembly', ' ' ); ?></span>
	</p>

	<p class="entry-link">
		<span class="entry-link-title">Senate Members:</span>
		<span class="entry-link-list"><?php the_terms( $post->ID, 'senate', ' ' ); ?></span>
	</p>

	<p class="entry-link">
		<span class="entry-link-title">Tags:</span>
		<span class="entry-link-list"><?php the_tags( ' ' ); ?></span>
	</p>
	<?php if(function_exists('pf_show_link')){echo pf_show_link();} ?>
</footer> 