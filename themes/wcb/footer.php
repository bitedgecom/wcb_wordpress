<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wcb 
 */

?>

    </div><!-- #content -->

    <footer id="colophon" class="site-footer py-5 text-white bg-dark">
        <div class="footer-mene container">
            <div class="row">
                <div class="col">
                    <!-- <h2>Footer menu</h2> -->
                    <?php
                    wp_nav_menu( array( 
                        'theme_location' => 'footer-menu', 
                        'container'      => 'nav',
                    ) );
                    // if (is_active_sidebar('footer-menu')) { 
                    //     dynamic_sidebar('footer-menu'); 
                    // }
                    ?>
                </div>
                <div class="col">
                    <?php
                    if (is_active_sidebar('footer_contact')) { 
                        dynamic_sidebar('footer_contact'); 
                    }
                    ?>
                </div>
            </div>
        </div><!-- .site-info -->
    </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
