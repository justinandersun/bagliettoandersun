<aside id="sidebar" role="complementary">
	<p class="side-section">Search</p>
	<div id="search">
		<?php get_search_form(); ?>
	</div>

	<p class="side-section">Topic</p>
	<div class="side-section-content">
		<form id="category-select" class="category-select" action="<?php echo esc_url( home_url( '/' ) ); ?>" method="get">
			<?php
			$args = array(
				'show_option_none' => __( '- Select -' ),
				'show_count'       => 1,
				'orderby'          => 'name',
				'taxonomy'           => 'category',
				'echo'             => 0,
			);
			?>
			<?php $select  = wp_dropdown_categories( $args ); ?>
			<?php $replace = "<select$1 onchange='return this.form.submit()'>"; ?>
			<?php $select  = preg_replace( '#<select([^>]*)>#', $replace, $select ); ?>
			<?php echo $select; ?>
			<noscript>
				<input type="submit" value="View" />
			</noscript>
		</form>
	</div>

	<p class="side-section">Committee</p>
	<div class="side-section-content">
		<?php click_taxonomy_dropdown( 'committees' ); ?>
		<script type="text/javascript">
			var dropdown = document.getElementById("cat");
			function onCatChange() {
				if ( dropdown.options[dropdown.selectedIndex].value > '' ) {
					location.href = "<?php echo get_option('home'); ?>/committee/"+dropdown.options[dropdown.selectedIndex].value;
				}
			}
			dropdown.onchange = onCatChange;
		</script>
	</div>

	<p class="side-section">Assembly Member</p>
	<div class="side-section-content">
		<?php click_taxonomy_dropdown( 'assembly' ); ?>
		<script type="text/javascript">
			var dropdown = document.getElementById("cat");
			function onCatChange() {
				if ( dropdown.options[dropdown.selectedIndex].value > '' ) {
					location.href = "<?php echo get_option('home'); ?>/assembly/"+dropdown.options[dropdown.selectedIndex].value;
				}
			}
			dropdown.onchange = onCatChange;
		</script>
	</div>

	<p class="side-section">Senate Member</p>
	<div class="side-section-content">
		<?php click_taxonomy_dropdown( 'senate' ); ?>
		<script type="text/javascript">
			var dropdown = document.getElementById("cat");
			function onCatChange() {
				if ( dropdown.options[dropdown.selectedIndex].value > '' ) {
					location.href = "<?php echo get_option('home'); ?>/senate/"+dropdown.options[dropdown.selectedIndex].value;
				}
			}
			dropdown.onchange = onCatChange;
		</script>
	</div>

	<p class="side-section">Month</p>
	<div class="side-section-content">
		<select name="archive-dropdown" onChange='document.location.href=this.options[this.selectedIndex].value;'>
			<option value=""><?php echo attribute_escape(__('- Select -')); ?></option>
			<?php wp_get_archives('type=monthly&format=option&show_post_count=1'); ?> 
		</select>
	</div>

</aside>