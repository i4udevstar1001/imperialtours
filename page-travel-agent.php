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
        <div class="col-md-8 content_area">
            <?php while ( have_posts() ) : the_post(); ?>                
            <?php the_content();?>
            <?php endwhile; // end of the loop. ?>
            <div class="default-page">
                <?php echo dynamic_sidebar('[content]'); ?>
            </div>
        </div>
    </div>
</div>

      
<div class="container travel_agent_post">

  <?php
	$countries = get_terms([
      'taxonomy' => 'china_expert_location',
      'order' => 'ASC',
	  'orderby' => 'name',
	  'parent' => 0,
	  'hide_empty' => false,
	]);

	$states = array();
	if(isset($_POST['country']) && !empty($_POST['country']) && $_POST['country'] != 'Select Country') {
	  $term = get_term_by('slug', $_POST['country'], 'china_expert_location');
	  $selected_country = $term->term_id;
	  $states = get_terms([
        'taxonomy' => 'china_expert_location',
        'order' => 'ASC',
	    'orderby' => 'name',
	    'pad_counts'      => 1,
	    'hierarchical'    => 1,
		'parent' => $selected_country,
	    'hide_empty' => false,
	  ]);
	}
  ?>
  
  <div id="contents">
    <h1 class="header_title">Please Select A Country to find a china expert in your area</h1>
    <form name="form" method="post" action="<?php echo get_site_url(); ?>/travel-agent" id="SelectCountry">
  <!---    <label>Country: </label>   -->
  <div id="country_name">
	  <select name="country" class="country" id="countryName"  onChange="document.form.submit();">
	    <option>Select Country</option>
	    <?php foreach ( $countries as $country ) { ?>
		  <?php if(isset($_POST['country']) && !empty($_POST['country']) && $_POST['country'] == $country->slug) { ?>
			  <option value="<?php echo $country->slug; ?>" selected="selected"><?php echo $country->name; ?></option>
		  <?php }else { ?>
	          <option value="<?php echo $country->slug; ?>"><?php echo $country->name; ?></option>
		  <?php } ?>
	    <?php } ?>
	  </select>
   </div>
  <!---     <label>State: </label>   -->
   <div id="states_name">
	  <select name="state" class="state" id="stateName" onChange="document.form.submit();">
	    <option>Select a State</option>
	    <?php foreach ( $states as $state ) { ?>
		  <?php if(isset($_POST['state']) && !empty($_POST['state']) && $_POST['state'] == $state->slug) { ?>
			  <option value="<?php echo $state->slug; ?>" selected="selected"><?php echo $state->name; ?></option>
		  <?php }else { ?>
	          <option value="<?php echo $state->slug; ?>"><?php echo $state->name; ?></option>
		  <?php } ?>
	    <?php } ?>
	  </select>
    </div>
	 <!--- <input type="submit" value="Submit">   -->
    </form>
  </div>

  <?php
    $args = [
		'posts_per_page'   => 7,
		'orderby'          => 'date',
		'order'            => 'ASC',
		'post_type'        => 'travel_agent',
		'post_status'      => 'publish',
		'suppress_filters' => true,
		'fields'           => '',
	];

	//Set country in query
	if(isset($_POST['country']) && !empty($_POST['country']) && $_POST['country'] != 'Select Country') {
		$category_arg = array('tax_query' => array(array('taxonomy' => 'china_expert_location', 'field' => 'slug', 'terms' => $_POST['country'])));
		$args = array_merge($args, $category_arg);
	}

	//Set the statein query
	if(isset($_POST['state']) && !empty($_POST['state']) && $_POST['state'] != 'Select a State') {
		$category_arg = array('tax_query' => array(array('taxonomy' => 'china_expert_location', 'field' => 'slug', 'terms' => $_POST['state'])));
		$args = array_merge($args, $category_arg);
	}
	$posts = get_posts($args);
  ?>
	
	<?php foreach ( $posts as $post ) { ?>
	  <div class="travel_agent_lists_row col-sm-4">
	    <div class="travel_agent_master_scholar"><?php if(get_post_meta($post->ID, 'wpcf-is_a_master_scholar', true) == 1) echo "master scholar"; ?></div>
	    <div class="travel_agent_title"><?php echo $post->post_title; ?></div>
	    <div class="travel_agent_sub_title"><?php echo get_post_meta($post->ID, 'wpcf-sub_title', true); ?></div>
	    <div class="travel_agent_email"><i class="fa fa-envelope"></i><?php echo get_post_meta($post->ID, 'wpcf-email', true); ?></div>
	    <div class="travel_agent_phone"><i class="fa fa-phone-square"></i><?php echo get_post_meta($post->ID, 'wpcf-phone', true); ?></div>

	    <?php
	      $term_list = wp_get_post_terms($post->ID, 'china_expert_location', array("orderby" => "term_order", "order" => 'DESC',"fields" => "all"));
		  $locations = array();
	      foreach ( $term_list as $term ) {
	        $locations[] = $term->name;
	      }
		  if(!empty($locations) && sizeof($locations) > 1) {
			 unset($locations[0]);
		 ?>
		<div class="travel_agent_phone"><i class="fa fa-map-marker"></i><?php echo implode(', ', array_reverse($locations)); ?></div>	
		<?php } ?>
	    <div class="travel_agent_content"><?php echo $post->post_content; ?></div>		
	  </div>
	<?php } ?>
</div>
<?php get_footer(); ?>



<script>
$(function() {
      $('#countryName').change(function() {
            $('#SelectCountry').submit();
      });
});
$(function() {
      $('#countryName').change(function() {
            $('#stateName').submit();
      });
});
</script>
