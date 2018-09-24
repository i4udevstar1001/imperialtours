<?php get_header();  ?>
<?php $blog_page_id = 702; ?>
<div id="whole-content-area">
    <div id="content_top_area" class="">
       <div id="inner-page-title" class="whole_banner_page_title">
            	<div class="banner_page_title">
                    <h3 class="page-title" style="font-weight: 600;">
                        <?php print get_the_title( $blog_page_id );  ?>
                    </h3>
                	<span class="title_border"></span>
                    <p><?php print wp_strip_all_tags( get_the_excerpt($blog_page_id) ); ?></p>
                </div>
            </div>
            <!--- <div id="bredacrumb-section">
				<?php /* if(function_exists('bcn_display'))
					{
						bcn_display();
					}   */
				?>
			</div>  --->
    

        <div class="blog_post_content_area container">
            <div class="row">
                <div class="col-md-8 wp-bp-content-width">
                    <div id="primary" class="content-area">
                        <main id="main" class="site-main">
                            <?php echo do_shortcode('[blog_page_blog_posts]'); ?>
                        </main><!-- #main -->
                    </div><!-- #primary -->
                </div>
                    <!-- /.col-md-8 -->
        
                <div class="col-md-4 wp-bp-sidebar-width right_sidebar">
					<div class="inner-sidebar-width">
						<div id="search_box">
							 <?php get_search_form(); ?>
						</div>
						<div class="blog_categories_list">
							<h1><?php echo 'Categories'; ?></h1>
							<?php echo do_shortcode('[blog_page_blog_list]'); ?>
						</div>
						<div class="destinations_list">
							<h1><?php echo 'Destinations'; ?></h1>
							<?php echo do_shortcode('[blog_page_destinations_list]'); ?>
						</div>
						<div class="featured_post_list">
							<h1><?php echo 'Featured Posts'; ?></h1>
							<?php echo do_shortcode('[blog_page_featured_post]'); ?>
						</div>
					</div>
                </div><!-- /.col-md-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
	</div>
</div>
<?php get_footer(); ?>


