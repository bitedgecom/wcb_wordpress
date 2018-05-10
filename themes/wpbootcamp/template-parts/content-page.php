<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WPBootcamp
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header py-5 bg-secondary text-white" style="background-image: url(<?php the_post_thumbnail_url()?>);">
		<div class="container"><?php the_title( '<h1 class="entry-title">', '</h1>' ); ?></div>
	</header><!-- .entry-header -->

	<div class="entry-content container">
		<?php the_content(); ?>	
	</div><!-- .entry-content -->
	
</article><!-- #post-<?php the_ID(); ?> -->
