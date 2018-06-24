<?php get_header(); ?>
<?php include 'left.php'; ?>

<section id="content" role="main">
	<header class="header">
		<h1 class="page-title"><?php 
		if ( is_day() ) { printf( __( 'Day: %s', 'blankslate' ), get_the_time( get_option( 'date_format' ) ) ); }
		elseif ( is_month() ) { printf( __( 'Month: %s', 'blankslate' ), get_the_time( 'F Y' ) ); }
		elseif ( is_year() ) { printf( __( 'Year: %s', 'blankslate' ), get_the_time( 'Y' ) ); }
		else { _e( 'Archives', 'blankslate' ); }
		?></h1>
	</header>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<?php get_template_part( 'entry' ); ?>
	<?php endwhile; endif; ?>
	<?php get_template_part( 'nav', 'below' ); ?>
</section>

<?php get_sidebar(); ?>
<?php get_footer(); ?>