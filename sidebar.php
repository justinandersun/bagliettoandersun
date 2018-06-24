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
				'show_count'       => 0,
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
		<?php
			$categories = get_categories('taxonomy=committees');
			$select = "<select name='cat' id='cat1' class='postform'>n";
			$select.= "<option value='-1'>- Select -</option>n";
			foreach($categories as $category){
				if($category->count > 0){
					$select.= "<option value='".$category->slug."'>".$category->name."</option>";
				}
			}
			$select.= "</select>";
			echo $select;
		?>
		<script type="text/javascript"><!--
			var cat1dropdown = document.getElementById("cat1");
			function onCat1Change() {
				if ( cat1dropdown.options[cat1dropdown.selectedIndex].value != -1 ) {
					location.href = "<?php echo home_url();?>/committee/"+cat1dropdown.options[cat1dropdown.selectedIndex].value+"/";
				}
			}
			cat1dropdown.onchange = onCat1Change;
		--></script>
	</div>

	<p class="side-section">Assembly Member</p>
	<div class="side-section-content">
		<?php
			$categories = get_categories('taxonomy=assembly');
			$select = "<select name='cat' id='cat2' class='postform'>n";
			$select.= "<option value='-1'>- Select -</option>n";
			foreach($categories as $category){
				if($category->count > 0){
					$select.= "<option value='".$category->slug."'>".$category->name."</option>";
				}
			}
			$select.= "</select>";
			echo $select;
		?>
		<script type="text/javascript"><!--
			var cat2dropdown = document.getElementById("cat2");
			function onCat2Change() {
				if ( cat2dropdown.options[cat2dropdown.selectedIndex].value != -1 ) {
					location.href = "<?php echo home_url();?>/assembly/"+cat2dropdown.options[cat2dropdown.selectedIndex].value+"/";
				}
			}
			cat2dropdown.onchange = onCat2Change;
		--></script>
	</div>

	<p class="side-section">Senate Member</p>
	<div class="side-section-content">
		<?php
			$categories = get_categories('taxonomy=senate');
			$select = "<select name='cat' id='cat3' class='postform'>n";
			$select.= "<option value='-1'>- Select -</option>n";
			foreach($categories as $category){
				if($category->count > 0){
					$select.= "<option value='".$category->slug."'>".$category->name."</option>";
				}
			}
			$select.= "</select>";
			echo $select;
		?>
		<script type="text/javascript"><!--
			var cat3dropdown = document.getElementById("cat3");
			function onCat3Change() {
				if ( cat3dropdown.options[cat3dropdown.selectedIndex].value != -1 ) {
					location.href = "<?php echo home_url();?>/senate/"+cat3dropdown.options[cat3dropdown.selectedIndex].value+"/";
				}
			}
			cat3dropdown.onchange = onCat3Change;
		--></script>		
	</div>

	<p class="side-section">Month</p>
	<div class="side-section-content">
		<select name="archive-dropdown" onChange='document.location.href=this.options[this.selectedIndex].value;'>
			<option value=""><?php echo attribute_escape(__('- Select -')); ?></option>
			<?php wp_get_archives('type=monthly&format=option&show_post_count=0'); ?> 
		</select>
	</div>

</aside>