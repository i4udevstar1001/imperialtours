<?php
/**
 * The template for displaying archive pages
 *
 * Used to display archive-type pages if nothing more specific matches a query.
 * For example, puts together date-based pages if no date.php file exists.
 *
 * If you'd like to further customize these archive views, you may create a
 * new template file for each one. For example, tag.php (Tag archives),
 * category.php (Category archives), author.php (Author archives), etc.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Imperial_Tours
 * @since Imperial Tours 1.0
 */

get_header(); ?>

<?php 
$request_uri = $_SERVER['REQUEST_URI'];
$term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
$arg = explode('/', $request_uri);

//print "<pre>"; print_r($term->taxonomy); print "</pre>";
?>

<?php //if(empty($arg[0]) && isset($arg[0]) && $arg[1] == 'blog' && isset($arg[2]) && $arg[2] == 'destinations') { ?>
<?php if(!empty(get_term_meta($term->term_id, 'wpcf-banner_image', true))) { ?>
<div id="taxonomy_banner_area"><img src="<?php print get_term_meta($term->term_id, 'wpcf-banner_image', true); ?>"/></div> 
<?php }else{ ?>
 <div id="taxonomy_banner_area"><img src="<?php print get_term_meta('5', 'wpcf-banner_image', true); ?>"/></div>
<?php } ?>
<div id="whole-content-area">
    <div id="content_top_area" class="">
       <div id="inner-page-title" class="whole_banner_page_title">
			<div class="banner_page_title">
				<h3 class="page-title" style="font-weight: 600;">
					<?php print @$term->name; ?>
				</h3>
				<span class="title_border"></span>
				<p>
					<?php print get_term_meta($term->term_id, 'wpcf-excerpts', true); ?>
				</p>
			</div>
		</div>
    </div>
</div>

<div class="page_container">
	<div id="primary" >
		<main id="main" class="site-main">
		<div class="container bredacrumb-section" >
		<div id="bredacrumb-section" >
			<ul>
				<li><a href="<?php print home_url(); ?>" title="Home"><i class="fa fa-home"></i></a><span class="separator"><i class="fa fa-angle-right"></i></span></li>
				<li><a href="<?php print "/".$term->taxonomy; ?>" title="<?php print $term->taxonomy; ?>"><?php print $term->taxonomy; ?> </a><span class="separator"><i class="fa fa-angle-right"></i></span></li>
				<li><span class="current_page"><?php print $term->slug; ?></span></li>
			</ul>
        </div>
		</div>
		<?php if ( !empty(get_term_meta($term->term_id, 'wpcf-description', true)) ) { ?>
        <div class="top_page_desc container">
			<?php print get_term_meta($term->term_id, 'wpcf-description', true); ?>
         </div>
		 <?php } ?>

			<?php //while ( have_posts() ) : the_post(); ?>                
			<?php //the_content();?>
			<?php //endwhile; ?>
			<?php //echo do_shortcode('[blog_page_blog_posts taxonomy="destinations" category="'.$term->slug.'"]'); ?>

			<!-- Highlights Section START -->
			<?php
			  $posts = get_posts([
				'posts_per_page'   => -1,
				'meta_key'    => 'wpcf-set-weight',
		        'orderby'     => 'meta_value',
		        'order'       => 'ASC',
				'post_type'   => 'destination',
				'post_status' => 'publish',
				'tax_query'   => array(array('taxonomy' => 'destinations' , 'field' => 'slug', 'terms' => $term->slug)),
			  ]);
			?>
            <?php if ( !empty($posts) ) { ?>
			<div class="highlights_list ">
			  <div class="top_content container">
				   <div class="header_section">
					   <h2 class="widget-title"><?php print $term->slug; ?> HIGHLIGHTS</h2>
					   <p>A selection a some of the many incredible experiences that await you</p>
					</div>
				  <div class="gallery-container gallery" id="gallery-container">
					<?php foreach ( $posts as $post ) { ?>
                      <?php $caption = "<p class='gallery_title'>".$post->post_title."</p>"; ?>
                      <?php $caption1 = "<p class='gallery_content'>".$post->post_content."</p>"; ?>
					 <?php /*?> <div class="col col-md-6" data-src="<?php print get_post_meta($post->ID, 'wpcf-upload_image', true); ?>" data-sub-html="<?php print $caption.$caption1; ?>"><?php */?>
                     
                      <div class="col col-md-6">
                      <a class="example-image-link" data-lightbox="example-set" href="<?php print get_post_meta($post->ID, 'wpcf-upload_image', true); ?>" data-title="<?php print $caption.$caption1; ?>">
					  <div class="gallery-item">
						<div class="highlights_image"><div class='image_overlay'></div><img class="example-image gallery-img" src="<?php print get_post_meta($post->ID, 'wpcf-upload_image', true); ?>" alt="<?php echo $post->post_title.'~'.$post->post_content; ?>" />
						</div>
						<div class="highlights_title"><h3><?php print $post->post_title; ?></h3>
						<span class="read_more_design">Read More</span></div>
					  </div>
                      </a>
					  </div>
					<?php } ?>
				  </div>
			  </div>
			</div>
			<?php } ?>
			<!-- Highlights Section END -->

            <!-- Comment Section START -->
			
			<?php
			  $posts = get_posts([
				'posts_per_page'   => 1,
				'post_type'        => 'destination_comments',
				'post_status'      => 'publish',
				'tax_query' => array(array('taxonomy' => 'destinations' , 'field' => 'slug', 'terms' => $term->slug)),
			  ]);
			?>
			<?php if ( !empty($posts) ) { ?>
			<div id="whole-comment-area">
				<div class="comment_content container">
					<?php foreach ( $posts as $post ) { ?>
						<p><?php print $post->post_content; ?></p>
						<p><?php print $post->post_title; ?></p>
					<?php } ?>
				</div>
			</div>
			<?php } ?>
			<!-- Comment Section END -->

			<!-- Custom Itineraries Section START -->
			
			<?php
			  $posts = get_posts([
				'posts_per_page'   => 1,
				'post_type'        => 'custom_itineraries',
				'post_status'      => 'publish',
				'tax_query' => array(array('taxonomy' => 'destinations' , 'field' => 'slug', 'terms' => $term->slug)),
			  ]);
			?>
			<?php if ( !empty($posts) ) { ?>
			<div id="whole_custom_itineraries_area" class="container">
			<div class="header_section">
				<h2 class="widget-title">Custom Itineraries</h2>
				<p>Explore <span><?php print $term->slug; ?></span> through the eyes of a local</p>
			</div>
			
			<?php foreach ( $posts as $post ) { 
				
				$itinerary = get_post_meta($post->ID, '_custom_itineraries', true); ?>
                <div class="whole_itineraries_content_area">
                    <div class="custom_itineraries_content"><p><?php print $post->post_content; ?></p>
                    <div class="show_buttton"><a href="/inquire" class="start_your_journey">Start Your Journey Today</a></div></div>
                    <div class="itinerary_right_mark_section">
                            <?php 
                            $count=0;
                            foreach($itinerary as $index) {
                                $count++; 
                                if ($count == 4){
                                    echo '<div id="row_section_hide" style="display: none;">';
                                }
                                ?>
                                    <div id="row_section-<?php print $count; ?>" class="row_section_area">
                                        <div class="day_section"><?php print 'Day<span>'.$index['day'].'</span>'; ?></div>
                                        
                                        <div class="destination_description_section">
                                            <div class="destination_name_section"><?php print $index['destination_name']; ?></div>
                                            <div class="description_section"><?php print $index['description']; ?></div>
                                         </div>
                                    </div>
                        <?php } ?>
                        </div>
                    </div>
                </div>
				<div class="custom_itineraries_show_more">
                	<button id="custom_itineraries_show_more" type="button" class="btn btn-default" onclick="show_more_function()">Show More</button>
                </div>
			<?php } ?> 
			</div>
			<?php } ?>
			<!-- Custom Itineraries Section END -->


			<!-- Laxury Accomodations Section START -->
			<?php
			  $posts = get_posts([
				'posts_per_page'   => -1,
				'meta_key'    => 'wpcf-set-weight',
		        'orderby'     => 'meta_value',
		        'order'       => 'ASC',
				'post_type'   => 'laxury_accomodations',
				'post_status' => 'publish',
				'tax_query'   => array(array('taxonomy' => 'destinations' , 'field' => 'slug', 'terms' => $term->slug)),
			  ]);
			?>
             <?php if ( !empty($posts) ) { ?>
			<div class="laxury_accomodations_list">
			  <div class="container">
				   
				   <div class="header_section">
						<h2 class="widget-title">Luxury Accommodations</h2>
						<p>Our luxury accommodations are not simple 5-star hotels in each destinations; they are carefully curated luxury hotels selected to provide you with the ultimate experience during your China holiday.</p>
						<a href="/our-philosophy/#post-133" class="destination_help_link">Learn More</a>
					</div>
					
				  <div class="laxury_accomodations_container">
					<?php foreach ( $posts as $post ) { ?>
					  <div class="col col-md-6">
						<div class="laxury_accomodations_image"><img src="<?php print get_post_meta($post->ID, 'wpcf-upload_image', true); ?>" /></div>
						<div class="laxury_accomodations_content">
							<div class="laxury_inner_content">
								<div class="laxury_accomodations_title"><h3><?php print $post->post_title; ?></h3></div>
								<div class="laxury_accomodations_excerpt"><p><?php print $post->post_excerpt; ?></p></div>
							</div>
					    </div>
					  </div>
					<?php } ?>
				  </div>
			  </div>
			</div>
			<?php } ?>
			<!-- Laxury Accomodations Section END -->


			<!-- Your Personal Traveling Concierge Section START -->
            <div class="our_guides_whole_section">
				<div class="our_guides_section container">
					<div class="header_section">
						<h2 class="widget-title">Your Personal Traveling Concierge</h2>
					</div>
                    <div id="our_guide_content_area">
                        <div class="right_section col-sm-6">
                            <?php
                            $posts = get_posts([
                                'posts_per_page'   => 3,
                                'order'            => 'ASC',
                                'post_type'        => 'our_guides',
                                'post_status'      => 'publish',
                                'tax_query' => array(array('taxonomy' => 'our_guides' , 'field' => 'slug', 'terms' => 'china_host')),
                                ]);
                            ?>
                            <div class="image_section">
                                <?php
                                foreach ( $posts as $post ) { ?>
                                 <div class="inner_image_section col-sm-4"><img src="<?php print get_post_meta($post->ID, 'wpcf-upload_guide_image', true);?>" /></div>
                                <?php } ?>
                            </div>
                            <div class="desc_section">
                            <div class="our_host_guides_title"><h3><?php print "Our China Hosts"; ?></h3></div>
                                <?php echo do_shortcode('[sc name="destination_detail_page_china_host_description"]'); ?>
                            </div>
                        </div>
                        
                        <div class="left_section col-sm-6">
                            <?php
                            $posts = get_posts([
                                'posts_per_page'   => -1,
                                'post_type'        => 'our_guides',
                                'post_status'      => 'publish',
                                'tax_query' => array(array('taxonomy' => 'destinations' , 'field' => 'slug', 'terms' => $term->slug)),
                                ]);
                             ?>
    
                            <div class="our_guides_container">
                                <?php 
                                foreach ( $posts as $post ) { ?>
                                 <div class="guides_post_row">
                                      <div class="image_section" style="text-align: center;"><img src="<?php print get_post_meta($post->ID, 'wpcf-upload_guide_image', true);?>" /></div>
                                      <div class="content_section">
                                          <div class="our_guides_title"><h3><?php print "suggested guide: ".$post->post_title; ?></h3></div>
                                          <div class="our_guides_content"><?php print $post->post_content ?></div></div>
                                      </div>
                                <?php } ?>
                            </div>
                        </div>
                       </div>
					<div class="learn_more"><a href="/our-guides" class="destination_help_link">Learn More</a></div>
				</div>
			</div>

			<!-- Your Personal Traveling Concierge Section END -->

			<!-- Your Fine Dining & Authentic Cuisine Section START -->
			
			<?php
			  $posts = get_posts([
				'posts_per_page'   => 1,
				'post_type'        => 'fine_dining',
				'post_status'      => 'publish',
				'tax_query' => array(array('taxonomy' => 'destinations' , 'field' => 'slug', 'terms' => $term->slug)),
			  ]);
			?>
		  <?php if ( !empty($posts) ) { ?>

		  <div class="whole_fine_dining_section">
			  <div class="fine_dining_section container">
				  <div class="header_section">
					  <h2 class="widget-title">Fine Dining & Authentic Cuisine</h2>
					  <p>Experience the finest in Chinese and Western cuisine</p>
				  
				  <?php } ?>
				  
					<?php foreach ( $posts as $post ) { ?>
						<div class="fine_dining_excerpt"><p><?php print $post->post_excerpt; ?></p></div>
						<div class="fine_dining_more_link"><a href="/our-philosophy/#post-135">Learn More</a></div>
						</div>
						<div class="fine_dining_container">
						<ul>
						<?php 
							$images = get_post_meta( get_the_ID(),'wpcf-multipule-upload-image');
							foreach($images as $index => $image_path) { ?>
							<li class="image_section"><img src="<?php print $image_path;?>" /></li>
						<?php } ?>
						</ul>
					<?php } ?>
				  </div>
			  </div>
		  </div>

			<!-- Fine Dining & Authentic Cuisine Section END -->

            <!-- Quick Facts, Weather, and Related Blog Posts Section START -->
			
			<div class="quick_fact_section container">

				<div class="tab-container">
					<div class="tab-section">
						<ul class="nav nav-tabs container">
							<li class="active"><a data-toggle="tab" href="#quick_facts ">Quick Facts</a></li>
							<li><a data-toggle="tab" href="#weather">Weather</a></li>
							<li><a data-toggle="tab" href="#related_blog_posts">Related Blog Posts</a></li>
						</ul>
					</div>

					<div class="navigation-section">
						<a class="btnPrevious" ><i class="fa fa-caret-up"></i></a>
						<a class="btnNext" ><i class="fa fa-caret-down"></i></a>
					</div>
				</div>
			
				<div class="tab-content">
				
					<div id="quick_facts" class="tab-pane fade in active">
						<?php
						  $posts = get_posts([
							'posts_per_page'   => 1,
							'post_type'        => 'quick_facts',
							'post_status'      => 'publish',
							'tax_query' => array(array('taxonomy' => 'destinations' , 'field' => 'slug', 'terms' => $term->slug)),
							]);
						?>
					
						<?php foreach ( $posts as $post ) { 
							$demographics = get_post_meta($post->ID, '_demographics', true); ?>
							<div class="demographics_container">
							<div class="demographics_title"><?php print '<h3>Demographics</h3>'; ?></div>
							<div class="destination_section"><?php print $demographics; ?></div>
							</div>

							<?php
							$brief_history = get_post_meta($post->ID, '_brief_history', true); ?>
							<div class="brief_history_container">
							<div class="brief_history_title"><?php print '<h3>Brief History</h3>'; ?></div>
							<div class="brief_history_section"><?php print $brief_history ; ?></div>
							</div>

							<?php
							$geography = get_post_meta($post->ID, '_geography', true); ?>
							<div class="geography_container">
							<div class="geography_title"><?php print '<h3>Geography</h3>'; ?></div>
							<div class="geography_section"><?php print $geography; ?></div>
							</div>
						<?php } ?>
					</div>
					
					<div id="weather" class="tab-pane fade">
						<?php
						  $posts = get_posts([
							'posts_per_page'   => 1,
							'post_type'        => 'weather',
							'post_status'      => 'publish',
							'tax_query' => array(array('taxonomy' => 'destinations' , 'field' => 'slug', 'terms' => $term->slug)),
							]);
						
						foreach ( $posts as $post ) { ?>
							 <div class="image_section"><?php print $post->post_content;?></div>
							<?php } ?>
					</div>
					
					
					<div id="related_blog_posts" class="tab-pane fade">
						<?php
						  $posts = get_posts([
							'posts_per_page'   => -1,
							'post_type'        => 'blog',
							'post_status'      => 'publish',
							'tax_query' => array(array('taxonomy' => 'destinations' , 'field' => 'slug', 'terms' => $term->slug)),
							]);
						  if ( !empty($posts) ) { ?>
							<div class="recent_blog_lists_container">
							<?php
							foreach ( $posts as $post ) { ?>
								<div class="recent_blog_lists_row col-sm-6">
									<div class="recent_blog_created_date"><?php print date('F j, Y', strtotime($post->post_date)); ?></div>
									<div class="recent_blog_title"><h3><a href="<?php print  get_permalink( $post ); ?>"> <?php print $post->post_title; ?></a></h3></div>
									<?php
									if (strlen($post->post_content) > 250){
									$str = substr($post->post_content, 0, 250);		
									}
									else
									$str = $post->post_content;	?>	
									<div class="popular_blog_desc"><?php print $str; ?></div>
									<div class="recent_blog_more_link"><a href="<?php print get_permalink( $post ); ?>">Read More</a></div>
								</div>
							<?php  } ?>
							</div>
						  <?php } ?>
					</div>
					
				</div>
			</div>
 
			 <!-- Quick Facts, Weather, and Related Blog Posts Section END -->

               <!-- Inquire Section START -->
			   <div class="whole_inquire_section"><div class="inquire_section container"><a href="/inquire">Inquire</a></div></div>
			   <!-- Inquire Section END -->



			<!-- RECOMMENDED DESTINATION Section START -->

			<div class="recommended_destinations_list">
				<div class="container inner">
					<div class="header_section">
						<h2 class="widget-title">Recommended Destinations</h2>
						<p>After your time spent exploring <span><?php print $term->slug; ?></span> you may want to consider these other recommended destinations</p>
						<a href="/faq/" class="destination_help_link">Help Me Decide</a>
					</div>
					<div class="inner_recommended_destinations_list">
						<ul>
						<?php
						   $ids = array(17,14,20,18); 
						   foreach ( $ids as $id ) {
							$term = get_term_by('id', $id, 'destinations');
							$term_link = get_term_link( $term ); ?>
							<li>
								<div class="destination_content">
									<?php
									if (function_exists('z_taxonomy_image_url')) {
										$image_url =  z_taxonomy_image_url($term->term_id); ?>
										<a class="destinations_detail_link" href="<?php print $term_link; ?>"><img width="360px" height="230px" src="<?php print $image_url; ?>" /></a>
									<?php  } ?>
									<div class="destinations_desc">
									<h4 class="destinations_title"><a class="destinations_detail_link" href="<?php print $term_link ; ?>"><?php print $term->name; ?></a></h4>
									<?php
									if (strlen($term->description) > 160){
									$str = substr($term->description, 0, 157);
									$str = $str.'...';
									}
									else
									$str = $term->description; ?>
									<p><?php print $str; ?></p>
									</div>
								</div>
							</li>
						<?php } ?>
						</ul>
					</div>
					<div class="view_all_destination"><a href="/destinations">View All Destinations</a></div>
				</div>
			</div>

            <!-- RECOMMENDED DESTINATION Section END -->
			
			<!-- Footer Blog Section START -->
			<div id="whole-footer-top-area">
				<div id="inner-footer-top-area" class="container">
        			<?php dynamic_sidebar('footertop'); ?>
				</div>
		    </div>
			<!-- Footer Blog Section END -->


		</main><!-- #main -->
	</div><!-- #primary -->
</div>
    <!-- /.container -->
<?php get_footer(); ?>
<?php //} ?> <!-- IF CLOSE -->

