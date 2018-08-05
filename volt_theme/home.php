<?php get_header(); ?>


<main>



<!--CONTENT-->
<content>

	<div class="container">
            
            <?php if ( is_active_sidebar( 'header-content' ) ) : ?>
                            <?php dynamic_sidebar( 'header-content' ); ?>
            <?php endif; ?>
	
            <div id="primary" class="content-area">
                    <main id="main" class="site-main" role="main">

                    <?php
                    // Start the loop.
                    while ( have_posts() ) : the_post();

                            // Include the page content template.
                            get_template_part( 'content', 'page' );

                            // If comments are open or we have at least one comment, load up the comment template.
                            if ( comments_open() || get_comments_number() ) :
                                    comments_template();
                            endif;

                    // End the loop.
                    endwhile;
                    ?>

                    </main><!-- .site-main -->
            </div><!-- .content-area -->
            <hr class="lineStyle" align="middle"/>	
            <?php if ( is_active_sidebar( 'footer-content' ) ) : ?>
                            <?php dynamic_sidebar( 'footer-content' ); ?>
            <?php endif; ?>
        </div>
    
</content>




</main>


<?php get_footer(); ?>