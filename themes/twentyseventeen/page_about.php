<?php

/* Template Name: About */



    while ( have_posts() ) : the_post();

        get_header();

        $yob = 1987;
        $target_year = 2050;

        echo how_old_in_year ($yob, $target_year);

        get_template_part( 'template-parts/page/content', 'page' );

        // If comments are open or we have at least one comment, load up the comment template.
        if ( comments_open() || get_comments_number() ) :
            comments_template();
        endif;

    endwhile; // End of the loop.
    

?>

<?php get_footer();