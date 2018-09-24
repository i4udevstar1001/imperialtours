<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage Imperial_Tours
 * @since Imperial Tours 1.0
 */

setPostViews(get_the_ID()); // Add this function for store the total views of the post...
get_header(); ?>
		
<?php global $post; ?>

<div class="blog_lists_container">
	<div class="row">
		<div class="col-md-8 wp-bp-content-width">
			<div class="blog_row"><p class="image_width"><img src="<?php print get_post_meta($post->ID, 'wpcf-upload_image', true); ?>" /></p>
            	<div id="inner_blog_content" class="content_container">
				<div class="share_button">
					<?php echo do_shortcode('[addtoany]'); ?>
				</div>
                    <h3><?php the_title(); ?></h3>
                    <div class="blog_list_author_time">
                        <ul>
                          <li><i class="fa fa-user-circle"></i><?php the_author_meta( 'display_name', $post->post_author); ?></li>
                          <li><i class="fa fa-clock-o" aria-hidden="true"></i><?php print date('F j, Y', get_post_meta($post->ID, 'wpcf-post-date', true)); ?></li>
                        </ul>
                    </div>
                    <div class="blog_list_terms"><?php if(!empty(wp_get_post_terms($post->ID,'blog_category',array("fields" => "all")))) { ?><i class="fa fa-tag"></i> <?php } ?>
                     <ul>
                      <?php
                        $term_list = wp_get_post_terms($post->ID, 'blog_category', array("fields" => "all"));
                        foreach ( $term_list as $term ) {
                          echo '<li>'.$term->name.'<span>, </span></li>';
                        }
                      ?>
                     </ul>
                    </div>
                    <div id="blog_details_paragraph">
                    	<p><?php print $post->post_content; ?></p>
                    </div>
                </div>
			</div>

			<div class="navigation">
				<div class="inner-navigation">
				  <?php previous_post_link('%link', '<i class="fa fa-angle-left"></i>Prev'); ?>
				  <a href="/blog">Blog Index</a>
				  <?php next_post_link('%link', 'Next<i class="fa fa-angle-right"></i>'); ?>
				</div>
			</div>
		</div>
		 <div class="col-md-4 wp-bp-sidebar-width">
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
		 </div>
	</div>
</div>

<?php get_footer(); ?>