<?php get_header(); ?>
<?php include 'left.php'; ?>

<section id="content" role="main">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<?php get_template_part( 'entry' ); ?>
	<?php endwhile; endif; ?>
	<?php get_template_part( 'nav', 'below' ); ?>
</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>