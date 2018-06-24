<?php
	/* Template Name: Member Page */ 
?>

<?php get_header(); ?>

<section id="member-content" role="main">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			<h1 class="member-title"><?php the_title(); ?></h1>
			<?php the_content(); ?>
		</article>
	<?php endwhile; endif; ?>
</section>

<?php get_footer(); ?>