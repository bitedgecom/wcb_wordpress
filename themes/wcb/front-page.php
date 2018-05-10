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
the_post();

// get_template_part( 'template-parts/content', 'page' );

$homepage_tiles = get_field('homepage_tiles');?>

<div class="container">
    <div class="uk-grid">
        <div id="primary" class="content-area uk-width-7-10">
            <main id="main" class="site-main">
                <div class="container">
                    <div class="uk-column-1-3 uk-column-divider">
                        <?php foreach ($homepage_tiles as $tile) { 

                            $link = $tile['link'];
                            $title = $tile['title'];
                            $subtitle = $tile['subtitle'];
                            $image = $tile['image'];

                            ?>
                            <div class="uk-card uk-card-default homepage_tile_card">
                                <div class="uk-card-media-top">
                                    <a href="<?php echo $link; ?>">
                                        <img class="card-img-top" src="<?php echo $image; ?>" height="20">
                                    </a>
                                </div>
                                <div class="uk-card-body">
                                    <a href="<?php echo $link; ?>">
                                        <h2 class="uk-card-title"><?php echo $title; ?></h2>
                                    </a>
                                        <h5><?php echo $subtitle; ?></h5>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </main><!-- #main -->
        </div><!-- #primary -->
        <div class="uk-width-3-10">
            <?php get_sidebar(); ?>
        </div>
    </div>
</div>
<?php
get_footer();
