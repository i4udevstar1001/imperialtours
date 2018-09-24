<?php

/*
Template Name: Art & Culture
*/
?>
<?php

setPostViews(get_the_ID()); // Add this function for store the total views of the post...
get_header();  ?>

<div id="whole-content-area">    
    <div id="content_top_area">
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
            <?php dynamic_sidebar('content'); ?>
	</div>
</div>


<div id="destination_area">
	<div class="inner_destination_area container">
        <div class="header_section">
            <h1>Recommended Destinations</h1>
            <span class="title_border" style=" border-color: #595b5b; "></span>
            <p>A selection a some of the many incredible experiences that await you</p>
        </div>
        <div class="content_list">
            <?php echo do_shortcode('[art_culture_destinations_list]'); ?>
        </div>
    </div>
</div>
    
<div id="experiences_area">
    <div class="inner_experiences_area container">
        <div class="header_section">
            <h1>Experiences</h1>
            <span class="title_border" style=" border-color: #595b5b; "></span>
            <p>A Selection of Past Art & Culture Experiences</p>
        </div>
        <div class="content_list">
            <?php echo do_shortcode('[experiences_posts]'); ?>
        </div>
    </div>
</div>
    
<div id="whole-travelling-concierge-area">
    <div id="inner-travelling-concierge-area">
        <?php dynamic_sidebar('travellingconcierge'); ?>
    </div>
</div> 
       
<div class="our_philosophy_lists_container">
    <div class="our_philosophy_inquire"><a href="/inquire">Inquire</a></div>
</div>  
    
<div id="traveling_styles_area">
    <div class="inner_traveling_styles_area container">
        <div class="header_section">
            <h1>similiar traveling styles</h1>
            <span class="title_border" style=" border-color: #595b5b; "></span>
            <p>Other traveling styles you may be interested in exploring</p>
        </div>
        <div class="content_list">
            <?php echo do_shortcode('[traveling_styles_posts]'); ?>
        </div>
    </div>
</div>
    
    
<div id="whole-footer-top-area">
    <div id="inner-footer-top-area" class="container">
		<?php dynamic_sidebar('footertop'); ?>
    </div>
</div>


<?php get_footer(); ?>


