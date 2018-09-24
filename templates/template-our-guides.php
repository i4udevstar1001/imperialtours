<?php

/*
Template Name: Our Guides
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
        <div class="page_content container">
            <?php while ( have_posts() ) : the_post(); ?>                
                <?php the_content();?>
            <?php endwhile; ?>
         </div>
    
        <ul class="nav nav-tabs container">
            <li class="active"><a data-toggle="tab" href="#china_host ">China Host </a></li>
            <li><a data-toggle="tab" href="#destination_guide">Destination Guide</a></li>
            <li><a data-toggle="tab" href="#experts">Experts</a></li>
        </ul>
    
        <div class="tab-content">
        
            <div id="china_host" class="tab-pane fade in active">
                <div class="giude_description container">
                    <div class="left_description col-sm-6">
                        <?php echo do_shortcode('[sc name="our_guides_description_left"]'); ?>
                    </div>
                    <div class="right_description col-sm-6">
                        <?php echo do_shortcode('[sc name="our_guides_description_right"]'); ?>
                    </div>
                </div>
                <div id="whole-comment-area">
                    <div class="comment_content container">
                        <?php echo do_shortcode('[sc name="our_guides_comment"]'); ?>
                    </div>
                </div>
                <div class="giude_content">
                    <div class="giude_imagine_header container" >
                        <?php echo do_shortcode('[sc name="china-host-imagine-section-header"]'); ?>
                    </div>
                    <div class="imagine_post container">
                        <?php echo do_shortcode('[china_host_imagine_posts]'); ?>
                    </div>
                    <div class="giude_post container">
                        <?php echo do_shortcode('[china_host_posts]'); ?>
                    </div>
                </div>
            </div>
            
            
            <div id="destination_guide" class="tab-pane fade">
                <div class="giude_description container">
                    <div class="left_description col-sm-6">
                        <?php echo do_shortcode('[sc name="destination_guides_left_description"]'); ?>
                    </div>
                    <div class="right_description col-sm-6">
                        <?php echo do_shortcode('[sc name="destination_guides_right_description"]'); ?>
                    </div>
                </div>
                <div id="whole-comment-area">
                    <div class="comment_content container">
                        <?php echo do_shortcode('[sc name="destination_guides_comment"]'); ?>
                    </div>
                </div>
                
                
                <div class="giude_content">
                    <div class="giude_imagine_header container">
                        <?php echo do_shortcode('[sc name="china-host-imagine-section-header"]'); ?>
                    </div>
                    <div class="imagine_post container">
                        <?php echo do_shortcode('[destination_guide_imagine_posts]'); ?>
                    </div>
                    <div class="giude_post container">
                        <?php echo do_shortcode('[destination_guide_posts]'); ?>
                    </div>
                </div>
               <?php // echo do_shortcode('[destination_guide_imagine_posts]'); ?>
               <?php // echo do_shortcode('[destination_guide_posts]'); ?>
            </div>
            
            
            <div id="experts" class="tab-pane fade">
                <div class="giude_description container">
                    <div class="left_description col-sm-6">
                        <?php echo do_shortcode('[sc name="experts_left_description"]'); ?>
                    </div>
                    <div class="right_description col-sm-6">
                        <?php echo do_shortcode('[sc name="experts_right_description"]'); ?>
                    </div>
                </div>
                <div id="whole-comment-area">
                    <div class="comment_content container">
                        <?php echo do_shortcode('[sc name="experts_comment"]'); ?>
                    </div>
                </div>
                
                <div class="giude_content">
                    <div class="giude_imagine_header container">
                        <?php echo do_shortcode('[sc name="china-host-imagine-section-header"]'); ?>
                    </div>
                    <div class="imagine_post container">
                        <?php echo do_shortcode('[experts_imagine_posts]'); ?>
                    </div>
                    <div class="giude_post container">
                        <?php echo do_shortcode('[experts_posts]'); ?>
                    </div>
                </div>
                <?php // echo do_shortcode('[experts_imagine_posts]'); ?>
                <?php // echo do_shortcode('[experts_posts]'); ?>
            </div>
            
        </div>
    
    </div>
</div>
<div id="whole-footer-top-area">
        <div id="inner-footer-top-area" class="container">
        	<?php dynamic_sidebar('footertop'); ?>
        </div>
</div>
    
<?php get_footer(); ?>


