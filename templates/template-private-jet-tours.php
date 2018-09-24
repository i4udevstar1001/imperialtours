<?php
/*
Template Name:Private Jet Tours
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
		<div class="col-sm-8 content_section_left">
			<?php while ( have_posts() ) : the_post(); ?>                
            <?php the_content();?>
            <?php endwhile; ?>
		</div>
		<div class="col-sm-4 content_section_right">
			<h3>Private Jet Tour Itinerary</h3>
			<span class="title_border text-center"></span>
			<?php  echo do_shortcode('[private_jet_tours]'); ?></div>
     </div>
</div>  
 		<?php  echo do_shortcode('[private_jet]'); ?>
<div id="whole-footer-top-area">
    <div id="inner-footer-top-area" class="container">
        <?php dynamic_sidebar('footertop'); ?>
    </div>
</div>
<?php get_footer(); ?>


