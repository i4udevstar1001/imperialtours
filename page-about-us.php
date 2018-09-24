<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Imperial_Tours
 * @since Imperial Tours 1.0
 */

setPostViews(get_the_ID()); // Add this function for store the total views of the post...
get_header();  ?>

    <div id="whole-content-area">
        <div id="top_content_area" class="container">
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
				<?php while ( have_posts() ) : the_post(); ?>                
                <?php the_content();?>
                <?php endwhile; ?>
        </div>
    
    <!-- Fetch Comments shortcode... -->
        <div id="whole-comment-area">   
            <div id="inner-comment-area" class="container">
                <?php echo do_shortcode('[sc name="about-us-comment"]'); ?>
            </div>
        </div>
    
    <!-- Fetch Associations & Awards for about us page... -->
        <div id="inner-comment-bottom-area">
            <div class="container"><?php echo do_shortcode('[sc name="about_us_associations_awards_header"]'); ?></div>
        </div>
    	<div id="associations_awards_posts" class="container-fluid">
    		<?php echo do_shortcode('[about_us_associations_awards_posts]'); ?>
    	</div>
        <!-- Fetch About Us social contribution... -->
        <div id="social_contribution" class="container-fluid">
            <div class="inner_social_contribution"><?php echo do_shortcode('[sc name="about-us-social-contribution"]'); ?></div>
        </div>
        <!-- Fe
        tch About Us page Work with us section content. -->
 </div>
        <div id="working_with_us" class="container-fluid">
                <div class="inner_working_with_us">
                    <div class="col-sm-12 text-center"><?php echo do_shortcode('[sc name="about-us-work-with-us"]'); ?></div>
                    <div class="col-sm-6 left_section"><?php echo do_shortcode('[sc name="about-us-china-hosts"]'); ?></div>
                    <div class="col-sm-6 right_section"><?php echo do_shortcode('[sc name="about-us-tour-guides"]'); ?></div>
                </div>
       </div>

<?php get_footer(); ?>
