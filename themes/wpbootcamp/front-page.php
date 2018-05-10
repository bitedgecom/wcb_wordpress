<?php
/**
 * The template for displaying the Home page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WPBootcamp
 */

get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main py-5" style="background-image: url(<?php the_post_thumbnail_url()?>);">
			<div class="container">
				<div class="jumbotron">
					<h1 class="display-4">Hello, world!</h1>
				  	<p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
				  	<hr class="my-4">
				  	<p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
				  	<p class="lead">
				    	<a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
				  	</p>
				</div>
			</div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
