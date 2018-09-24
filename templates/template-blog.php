<?php

/*
Template Name: Blog Post
*/
?>
<?php

setPostViews(get_the_ID()); // Add this function for store the total views of the post...
get_header();  ?>


<div id="whole-content-area">
    <div id="content_top_area" class="">
       <div id="inner-page-title" class="whole_banner_page_title">
            	<div class="banner_page_title">
                    <h3 class="page-title" style="font-weight: 600;">
                        <?php wp_title();  ?>
                    </h3>
                	<span class="title_border"></span>
                    <p>
                        <?php the_excerpt();?>
                    </p>
                </div>
            </div>
        <div id="bredacrumb-section">
            <?php if(function_exists('bcn_display'))
					{
						bcn_display();
					}
			?>
        </div>
    </div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-8 wp-bp-content-width">
			<div id="primary" class="content-area">
				<main id="main" class="site-main">

					<?php while ( have_posts() ) : the_post(); ?>                
					<?php the_content();?>
					<?php endwhile; ?>
					<?php dynamic_sidebar('content'); ?>
					<?php// echo do_shortcode('[blog_page_blog_posts]'); ?>

                </main><!-- #main -->
            </div><!-- #primary -->
        </div>
            <!-- /.col-md-8 -->

        <div class="col-md-4 wp-bp-sidebar-width">
        	<div class="destinations_list">
				<?php echo do_shortcode('[blog_page_destinations_list]'); ?>
            </div>
            <div class="blog_categories_list">
            	<?php echo do_shortcode('[blog_page_blog_list]'); ?>
            </div>
        </div>
            <!-- /.col-md-4 -->
	</div>
        <!-- /.row -->
</div>
    <!-- /.container -->


<?php get_footer(); ?>


