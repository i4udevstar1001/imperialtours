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
        
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#china_host ">China Host </a></li>
                <li><a data-toggle="tab" href="#destination_guide">Destination Guide</a></li>
                <li><a data-toggle="tab" href="#experts">Experts</a></li>
            </ul>
        
            <div class="tab-content">
            	<div id="china_host" class="tab-pane fade in active">
					<?php echo do_shortcode('[china_host_imagine_posts]'); ?>
                    <?php echo do_shortcode('[china_host_posts]'); ?>
            	</div>
            	<div id="destination_guide" class="tab-pane fade">
				   <?php echo do_shortcode('[destination_guide_imagine_posts]'); ?>
                   <?php echo do_shortcode('[destination_guide_posts]'); ?>
            	</div>
            	<div id="experts" class="tab-pane fade">
					<?php echo do_shortcode('[experts_imagine_posts]'); ?>
                    <?php echo do_shortcode('[experts_posts]'); ?>
            	</div>
        	</div>
        
        </div>
    </div>
<?php get_footer(); ?>
