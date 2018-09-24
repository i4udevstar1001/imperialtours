<?php

/*
Template Name: Inqiure
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
			<div id="bredacrumb-section" class="container">
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

<div id="whole_content_bottom_area" class="container">
     <div class="left_content_area col-sm-7">
     	<div class="tab_section">
            <ul>
                <li><a href="/contact">Contact Us</a></li>
                <li class="active"><a href="/inquire">Inquire</a></li>
            </ul>
        </div>
        <div class="form_section">
        	<?php echo do_shortcode('[wpforms id="386" title="false" description="false"]'); ?>
        </div>
     </div>
     <div class="right_content_area col-sm-5">
        <?php
          $terms = get_terms([
              'taxonomy' => 'faq',
			  'meta_key'   => 'wpcf-weight',
	          'orderby'    => 'meta_value_num',
              'order' => 'ASC',
              'hide_empty' => false,
          ]);
        ?>
    
          <div class="faq_header">
          	<h2>Frequently Asked Questions</h2>
          </div>
          <div class="panel-group" id="accordion">
    
          <?php
          foreach ( $terms as $term ) {
			
			$faqtype =  get_term_meta( $term->term_id, 'wpcf-faqtype', true);
			foreach($faqtype as $type) {
			if(current($type) == 2) {
            
			$posts = get_posts([
                'posts_per_page'   => -1,
                'orderby'          => 'date',
                'order'            => 'ASC',
                'post_type'        => 'faq',
                'post_status'      => 'publish',
                'suppress_filters' => true,
                'fields'           => '',
				'tax_query' => array(array('taxonomy' => 'faq', 'field' => 'slug', 'terms' => $term->slug)),
            ]); 
            ?>
    
            <div class="panel panel-default">
              <div class="panel-heading">
                <div class="panel-title">
                  <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#term-<?php print $term->term_id; ?>">
                    <?php print $term->name; ?> 
                  </a>
                </div>
              </div>
            
              <div id="term-<?php print $term->term_id; ?>" class="panel-collapse collapse">
                <div class="panel-body">
                  <?php foreach ( $posts as $post ) { 
				   $post_faqtypes =  get_post_meta( $post->ID, 'wpcf-post_faqtype', true);
				   foreach($post_faqtypes as $post_faqtype) {
				   if(current($post_faqtype) == 2) { ?>
                    <div class="faq_row">
                      <div class="faq_question"><?php print $post->post_title; ?></div>
                      <div class="faq_answer"><?php print $post->post_content; ?></div>
                    </div>
                  <?php } } } ?>
                </div>
              </div>
            </div>
          <?php } } }  ?>
          </div>
          <div class="view_all">
          	<a href="/faq">View All FAQ</a>
          </div>
    </div>
</div>
<?php get_footer(); ?>


