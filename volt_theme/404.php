        <?php get_header(); ?>

        <!--CONTENT-->
        <content>
        	<div class="container">
                <?php if (is_active_sidebar('header-content')) : ?>
                    <?php dynamic_sidebar('header-content'); ?>
                <?php endif; ?>

                <div id="primary" class="content-area">
                    <main id="main" class="site-main" role="main">
						<section class="error-404 not-found">
							<header class="page-header">
								<h1 class="page-title"><?php _e( 'Oops! That page can&rsquo;t be found.', 'twentyfifteen' ); ?></h1>
							</header><!-- .page-header -->

							<div class="page-content">
							<!--404-->
								<div class="container">
									<div class="row">
										<div class="col">
											<a href="http://localhost/wordpress/">
											  <div class="d-none d-lg-block col-lg-12" align="middle"><img src="http://localhost/wordpress//wp-content/themes/volt_theme/img/404.jpg" align="middle" class="img-fluid"></div>
											</a>
										</div>
									</div>
								</div>
							</div><!-- .page-content -->
						</section><!-- .error-404 -->
                    </main><!-- .site-main -->
                </div><!-- .content-area -->
				<hr class="lineStyle" align="middle"/>
                <?php if (is_active_sidebar('footer-content')) : ?>
                    <?php dynamic_sidebar('footer-content'); ?>
                <?php endif; ?>

            </div>

        </content>

    <?php get_footer(); ?>