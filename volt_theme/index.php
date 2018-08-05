        <?php get_header(); ?>

        <!--CONTENT-->
        <content>
        	<div class="container">
                <?php if (is_active_sidebar('header-content')) : ?>
                    <?php dynamic_sidebar('header-content'); ?>
                <?php endif; ?>

                <div id="primary" class="content-area">
                    <main id="main" class="site-main" role="main">

                        <?php if (have_posts()) : ?>

                            <?php if (is_home() && !is_front_page()) : ?>
                                <header>
                                    <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
                                </header>
                            <?php endif; ?>

                            <?php
                            // Start the loop.
                            while (have_posts()) : the_post();

                                get_template_part('content', get_post_format());

                            // End the loop.
                            endwhile;

                            // Previous/next page navigation.
                            the_posts_pagination(array(
                                'prev_text' => __('Previous page', 'volt_theme'),
                                'next_text' => __('Next page', 'volt_theme'),
                                'before_page_number' => '<span class="meta-nav screen-reader-text">' . __('Page', 'volt_theme') . ' </span>',
                            ));

                        // If no content, include the "No posts found" template.
                        else :
                            get_template_part('content', 'none');

                        endif;
                        ?>

                    </main><!-- .site-main -->
                </div><!-- .content-area -->
				<hr class="lineStyle" align="middle"/>
                <?php if (is_active_sidebar('footer-content')) : ?>
                    <?php dynamic_sidebar('footer-content'); ?>
                <?php endif; ?>

            </div>

        </content>

    <?php get_footer(); ?>