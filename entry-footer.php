<footer class="entry-footer">
	<p class="entry-link">
		<span class="entry-link-title">Topics:</span>
		<span class="entry-links"><?php the_category( ', ' ); ?></span>
	</p>

	<p class="entry-link">
		<span class="entry-link-title">Committees:</span>
		<span class="entry-links"><?php the_terms( $post->ID, 'committees', ' ' ); ?></span>
	</p>

	<p class="entry-link">
		<span class="entry-link-title">Assembly Members:</span>
		<span class="entry-links"><?php the_terms( $post->ID, 'assembly', ' ' ); ?></span>
	</p>

	<p class="entry-link">
		<span class="entry-link-title">Senate Members:</span>
		<span class="entry-links"><?php the_terms( $post->ID, 'senate', ' ' ); ?></span>
	</p>

	<p class="entry-link">
		<span class="entry-link-title">Tags:</span>
		<span class="entry-links"><?php the_tags( ' ' ); ?></span>
	</p>
</footer> 