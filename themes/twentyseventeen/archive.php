<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header();

if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();
        if (has_post_thumbnail()) { ?>
            <div>
                <a href="<?php the_permalink();?>">
                    <h2><?php the_title(); ?></h2>
                </a>
                <p><strong>Published</strong>: <?php echo get_the_date(); ?></p>
                <a href="<?php the_permalink();?>">
                    <?php the_post_thumbnail('medium');?>
                </a>

                <p> <?php the_excerpt(); ?></p>
                <p> <?php the_meta(); ?></p>

                <hr>
            </div>
        <?php } 
    } // end while
} // end if

get_footer();
