<?php get_header(); ?>
<?php include 'left.php'; ?>

<section id="content" role="main">
	<article id="post-0" class="post not-found">
		<header class="header">
			<h1 class="page-title"><?php _e( 'Not Found', 'blankslate' ); ?></h1>
		</header>
		<section class="entry-content">
			<p><?php _e( 'Unfortunately, we can\'t seem to find that. Let\'s try a search instead.', 'blankslate' ); ?></p>
			<?php get_search_form(); ?>
		</section>
	</article>
</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>