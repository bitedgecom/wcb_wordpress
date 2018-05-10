<?php
/**
 * Template part for displaying cards 
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WPBootcamp
 */

?>

<div id="post-<?php the_ID(); ?>" class="card mb-3">
	<?php the_post_thumbnail( 'medium', array( 'class' => 'card-img-top' ) );?>
  <div class="card-body">
    <h5 class="card-title"><?php the_title()?></h5>
    <p class="card-text"><?php the_excerpt()?></p>
    <p class="card-text">
    	<small class="text-muted">
    	<?php
			wpbootcamp_posted_on();
			wpbootcamp_posted_by();
		?>					
		</small>
	</p>
	<a href="<?php the_permalink()?>" class="btn btn-primary">Read More</a>
  </div>
</div>


