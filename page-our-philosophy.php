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
            <div id="bredacrumb-section">
		 		<?php if(function_exists('bcn_display'))
					{
						bcn_display();
					}
				?>
			</div>

              <!-- Fetch content left content shortcode. -->
              <div class="our_philosophy_content">
                  <div class="our_philosophy_content_left">
                    <?php echo do_shortcode('[sc name="our_philosophy_content_left"]'); ?>
                  </div>
    
                  <div class="our_philosophy_content_right">
                    <?php while ( have_posts() ) : the_post(); ?>                
                      <?php the_content();?>
                    <?php endwhile; ?>
                  </div>
              </div>
    	</div>

	<?php
	  $posts = get_posts([
		'posts_per_page'   => -1,
		'orderby'          => 'date',
		'order'            => 'ASC',
		'post_type'        => 'our_philosophy',
		'post_status'      => 'publish',
		'suppress_filters' => true,
		'fields'           => '',
	  ]);
	  $count = 1; 
	?>

	<div class="our_philosophy_toc_container">
	  <ul>
	    <?php foreach ( $posts as $post ) { ?>
		  <li><a href="#post-<?php print $post->ID; ?>"> <?php if($post->ID =='135') print substr($post->post_title,0,11); else print $post->post_title; ?></a></li>
	    <?php } ?>
	  </ul>
	</div>
	
	<div class="our_philosophy_listing_container">
	<?php foreach ( $posts as $post ) { $row_class = 'odd'; if($count%2 == 0) $row_class = 'even'; ?>
		<div id="post-<?php print $post->ID; ?>" class="our_philosophy_listing_row <?php print $row_class; ?>">
		    <div class="our_philosophy_listing_content_section">
              <div class="our_philosophy_content_container">
                  <div class="our_philosophy_title"><?php if($post->ID =='135') print substr($post->post_title,0,11); else print $post->post_title; ?></div>
                  <div class="our_philosophy_content"><?php print $post->post_content; ?></div>
              </div>
		    </div>
		    <div class="our_philosophy_listing_image_section"><img src="<?php print get_post_meta($post->ID, 'wpcf-upload_image', true); ?>" /></div>
		</div>
	<?php $count++; } ?>
	</div>

</div>
<?php get_footer(); ?>
