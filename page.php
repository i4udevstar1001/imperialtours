<?php get_header(); ?>



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
            <div class="container">
				<?php while ( have_posts() ) : the_post(); ?>                
                <?php the_content();?>
                <?php endwhile; // end of the loop. ?>
                <div class="default-page">
                    <?php echo dynamic_sidebar('[content]'); ?>
                </div>
            </div>
        </div>
    </div>

<?php get_footer(); ?>