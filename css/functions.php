<?php

/* Adding Custom Logo*/

add_theme_support( 'custom-logo' );

function imperialtours_custom_logo_setup() {
    $defaults = array(
        'height'      => 32,
        'width'       => 440,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'imperialtours_custom_logo_setup' );

add_post_type_support( 'page', 'excerpt' );

/*Homepage Title Starts*/
if ( !function_exists( 'imperialtours_setup' ) ) {
    function imperialtours_setup() {
        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support( 'title-tag' );

    add_action( 'after_setup_theme', 'imperialtours_setup' );
}


/*Homepage Title Ends*/





/* Adding Menu */

function imperialtours_new_menu() {
    register_nav_menus(
    array(
      'primary-menu' => __( 'Header Menu' )
    )
);
    
}
add_action( 'init', 'imperialtours_new_menu' );

// Adding Stylesheet
add_action( 'wp_enqueue_scripts', 'imperialtours_scripts' );
function imperialtours_scripts() {  
  wp_enqueue_style( 'bootstrap-min', get_template_directory_uri() . '/css/bootstrap.min.css');
  wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css', array(),null);
  wp_enqueue_style( 'main-style', get_template_directory_uri() . '/css/main-style.css',array(),null);

  //wp_enqueue_style( 'theme', get_template_directory_uri() . '/css/theme.css',array(),time());
  wp_enqueue_style( 'theme', get_template_directory_uri() . '/css/theme.css',array(),null);
  wp_enqueue_style( 'mobile', get_template_directory_uri() . '/css/mobile.css',array(),null);
  wp_enqueue_style( 'ipad', get_template_directory_uri() . '/css/ipad.css',array(),null);
  //wp_enqueue_style( 'styles_pop_up', get_template_directory_uri() . '/css/styles_pop_up.css',array(),null);
  //wp_enqueue_style( 'lightbox_gallery', get_template_directory_uri() . '/css/lightbox_gallery.css',array(),null);
  wp_enqueue_style( 'lightbox.min', get_template_directory_uri() . '/css/lightbox.min.css',array(),null);
  
  //wp_enqueue_script( 'jquery' );
  wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), true );
  wp_enqueue_script( 'script', get_template_directory_uri() . '/js/script.js', array('jquery'), true);
  //wp_enqueue_script( 'lightbox', get_template_directory_uri() . '/js/lightbox.js', array('jquery'), true, true);
  wp_enqueue_script( 'lightbox-plus-jquery.min', get_template_directory_uri() . '/js/lightbox-plus-jquery.min.js', array('jquery'), true, true);
  //wp_enqueue_script( 'lightbox-plus-jquery.min', get_template_directory_uri() . '/js/lightbox_gallery.js', array('jquery'), true, true);
  //wp_enqueue_script( 'lightgallery_min', get_template_directory_uri() . '/js/lightgallery_min.js', array('jquery'), true, true);
  //wp_enqueue_script( 'jquery_mousewheel_min', get_template_directory_uri() . '/js/jquery_mousewheel_min.js', array('jquery'), true, true);
  

 
 
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
      wp_enqueue_script( 'comment-reply' );
    }
}



/* Adding Widget */

function imperialtours_widgets_init() {
    
	register_sidebar( array(
		'name'          => __( 'Header Logo Area', 'imperialtours' ),
		'id'            => 'headerlogo',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );	
	
    
	register_sidebar( array(
		'name'          => __( 'Header Background Area', 'imperialtours' ),
		'id'            => 'headerbg',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );	
    
	register_sidebar( array(
		'name'          => __( 'Top Menu Area', 'imperialtours' ),
		'id'            => 'topmenu',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );	
		
    
	register_sidebar( array(
		'name'          => __( 'Header Text Area', 'imperialtours' ),
		'id'            => 'headertext',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );	
		
    
	register_sidebar( array(
		'name'          => __( 'Banner Area', 'imperialtours' ),
		'id'            => 'banner',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );	
    
    
	register_sidebar( array(
		'name'          => __( 'Destination Left Area', 'imperialtours' ),
		'id'            => 'destinationleft',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );		
    	
    
    
	register_sidebar( array(
		'name'          => __( 'Destination Right Area', 'imperialtours' ),
		'id'            => 'destinationright',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );	
    
	register_sidebar( array(
		'name'          => __( 'Comment Area', 'imperialtours' ),
		'id'            => 'comment',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );		
    
    
	register_sidebar( array(
		'name'          => __( 'Private Jet Tours Area', 'imperialtours' ),
		'id'            => 'privatejettours',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );			
    
    
	register_sidebar( array(
		'name'          => __( 'Traveling Concierge Area', 'imperialtours' ),
		'id'            => 'travellingconcierge',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );				
    
    
	register_sidebar( array(
		'name'          => __( 'Your Dream Section Area', 'imperialtours' ),
		'id'            => 'dream',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );				
    
    
	register_sidebar( array(
		'name'          => __( 'Our Philosophy Area', 'imperialtours' ),
		'id'            => 'phylosophy',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );					
    
    
	register_sidebar( array(
		'name'          => __( 'Inquire Area', 'imperialtours' ),
		'id'            => 'inquire',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );					
    
    
	register_sidebar( array(
		'name'          => __( 'Blog Post Area', 'imperialtours' ),
		'id'            => 'blogpost',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );		
    
    
	register_sidebar( array(
		'name'          => __( 'Content Area', 'imperialtours' ),
		'id'            => 'content',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );	
	
	
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'imperialtours' ),
		'description'   => __( 'Sidebar Area', 'imperialtours' ),
		'id'            => 'sidebar',
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	
	register_sidebar( array(
		'name'          => __( 'Footer Top Area', 'imperialtours' ),
		'id'            => 'footertop',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );	

	
	register_sidebar( array(
		'name'          => __( 'Footer Area', 'imperialtours' ),
		'id'            => 'footer',
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );	

}
add_action( 'widgets_init', 'imperialtours_widgets_init' );



add_filter( 'widget_text', 'do_shortcode' );
add_filter( 'wp_video_extensions', 'add_new_wp_video_extensions');
function add_new_wp_video_extensions($exts) {
	$exts[] = 'mov';
    return $exts;
}

/**
 * Custom template for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

// Include Custom shortcodes...
require get_template_directory() . '/inc/custom-shortcodes.php';

// Fetch destinations category for front page...
add_shortcode( 'front_destinations_list', 'get_front_destinations_list' );
function get_front_destinations_list() {

	$ids = array(5,9,18,14,17,13);
	$data = '<div class="front_destinations_list"><ul>';
	foreach ( $ids as $id ) {
		$term = get_term_by('id', $id, 'destinations');
		$term_link = get_term_link( $term );
		$data .= '<li> <div class="image-shadow">';
		if (function_exists('z_taxonomy_image_url')) {
			$image_url =  z_taxonomy_image_url($term->term_id);
			$data .= '<a class="image_link" href="' . $term_link . '"><img width="338" height="250" src="'.$image_url.'" /></a>';
		}

		$data .= '<div class="gallery_title_area"><a class="title" href="' . $term_link . '">' .$term->name.'</a>';

		// The $term is an object, so we don't need to specify the $taxonomy.
		$data .= '<a class="circle" href="' . $term_link . '">Read More</a></div>';
		$data .= '</div></li>';
	}
	$data .= '</ul>';
	$data .= '<div class="view_all_destination"><a href="/destinations">View All Destinations</a></div></div>';

	return $data;
}

// Fetch destinations category for Art & Culture page...
add_shortcode( 'art_culture_destinations_list', 'get_art_culture_destinations_list' );
function get_art_culture_destinations_list() {

	$ids = array(5,17,9,14,8,16);
	$data = '<div class="front_destinations_list"><ul>';
	foreach ( $ids as $id ) {
		$term = get_term_by('id', $id, 'destinations');	
		$term_link = get_term_link( $term );
		$data .= '<li> <div class="image-shadow">';			
		if (function_exists('z_taxonomy_image_url')) {
			$image_url =  z_taxonomy_image_url($term->term_id);
			$data .= '<a href="' . $term_link . '"><img width="338" height="250" src="'.$image_url.'" />';
		}
	    $data .= '</a>';
		$data .= '<div class="gallery_title_area"><h4>' .$term->name.'</h4>';

		// The $term is an object, so we don't need to specify the $taxonomy.
		$term_link = get_term_link( $term );
		$data .= '<a href="' . $term_link . '">Read More</a></div>';
		$data .= '</div></li>';
	}
	$data .= '</ul></div>';
	return $data;
}


// Fetch Our China Host posts for front page...
add_shortcode( 'front_recent_our_guides_posts', 'get_front_our_guides_posts' );
function get_front_our_guides_posts() {

	$posts = array(259,255,253,257);
	
	$data = '<div class="our_guides_container">';
	foreach ( $posts as $post ) {
	  $image_url = get_post_meta($post, 'wpcf-upload_guide_image', true);
	  $data .= '<div class="col-sm-3 col-xs-3"><img src="'.$image_url.'" /></div>';
	}
	$data .= '</div>';

	return $data;
}

// Fetch Our China Host posts for Our Guids page...
add_shortcode( 'china_host_posts', 'get_china_host_posts' );
function get_china_host_posts() {

	$posts = get_posts([
		'posts_per_page'   => -1,
		'meta_key'    => 'wpcf-set-weight',
		'orderby'     => 'meta_value',
		'order'       => 'ASC',
		'post_type'   => 'our_guides',
		'post_status' => 'publish',
		'tax_query'   => array(array('taxonomy' => 'our_guides' , 'field' => 'slug', 'terms' => 'china_host')),
	]);
	

	$data = '<div class="china_host_container">';
	foreach ( $posts as $post ) { 
	  $image_url = get_post_meta($post->ID, 'wpcf-upload_guide_image', true);
	  $data .='<div class="col-sm-12 guides_post_row">';
	  $data .= '<div class="col-sm-3 image_section"><img src="'.$image_url.'" /></div><div class="col-sm-9 content_section">';
	  $data .= '<div class="our_guides_title"><h3>'.$post->post_title.'</h3></div>';
	  $data .= '<div class="our_guides_content">'.$post->post_content.'</div></div>';
	  $data .='</div>';
	}
	$data .= '</div>';

	return $data;
}

// Fetch Destination Guide posts for Our Guids page...
add_shortcode( 'destination_guide_posts', 'get_destination_guide_posts' );
function get_destination_guide_posts() {

	$posts = get_posts([
		'posts_per_page'   => -1,
		'meta_key'    => 'wpcf-set-weight',
		'orderby'     => 'meta_value_num',
		'order'       => 'ASC',
		'post_type'   => 'our_guides',
		'post_status' => 'publish',
		'tax_query'   => array(array('taxonomy' => 'our_guides' , 'field' => 'slug', 'terms' => 'destination_guide')),
	]);
	

	$data = '<div class="destination_guide_container">';
	foreach ( $posts as $post ) {
	  $image_url = get_post_meta($post->ID, 'wpcf-upload_guide_image', true);
	  $data .='<div class="col-sm-12 guides_post_row">';
	  $data .= '<div class="col-sm-3 image_section"><img src="'.$image_url.'" /></div><div class="col-sm-9 content_section">';

	  $term_list = wp_get_post_terms($post->ID, 'destinations', array("fields" => "all"));
	  $term_name = current($term_list)->name;

	  $data .= '<div class="destination_guide_title"><h3>'.$term_name.' guide: '.$post->post_title.'</h3></div>';
	  $data .= '<div class="destination_guide_content">'.$post->post_content.'</div></div>';
	  $data .='</div>';
	}
	$data .= '</div>';

	return $data;
}

// Fetch Experts posts for Our Guids page...
add_shortcode( 'experts_posts', 'get_experts_posts' );
function get_experts_posts() {

	$posts = get_posts([
		'posts_per_page'   => -1,
		'meta_key'    => 'wpcf-set-weight',
		'orderby'     => 'meta_value',
		'order'       => 'ASC',
		'post_type'   => 'our_guides',
		'post_status' => 'publish',
		'tax_query'   => array(array('taxonomy' => 'our_guides' , 'field' => 'slug', 'terms' => 'experts')),
	]);
	

	$data = '<div class="experts_posts_container">';
	foreach ( $posts as $post ) { 
	  $image_url = get_post_meta($post->ID, 'wpcf-upload_guide_image', true);
	  $data .='<div class="col-sm-12 guides_post_row">';
	  $data .= '<div class="col-sm-3 image_section"><img src="'.$image_url.'" /></div><div class="col-sm-9 content_section">';
	  $data .= '<div class="experts_posts_title"><h3>'.$post->post_title.'</h3></div>';
	  $data .= '<div class="experts_posts_content">'.$post->post_content.'</div></div>';
	  $data .='</div>';
	}
	$data .= '</div>';

	return $data;
}


/*********************************************** Imagine section ***************************************************************************/

// Fetch Our China Host Imagine posts for Our Guids page...
add_shortcode( 'china_host_imagine_posts', 'get_china_host_imagine_posts' );
function get_china_host_imagine_posts() {

	$posts = get_posts([
		'posts_per_page'   => 6,
		'order'            => 'ASC',
		'post_type'        => 'our_guides_imagine',
		'post_status'      => 'publish',
		'tax_query' => array(array('taxonomy' => 'our_guides' , 'field' => 'slug', 'terms' => 'china_host')),
	]);
	

	$data = '<div class="imagine_container">';
	foreach ( $posts as $post ) {
	  $image_url = get_post_meta($post->ID, 'wpcf-upload_image', true);
	  $data .='<div class="imagine_content col-sm-4"  display: inline-block;">';
	  $data .= '<div class="image_section"><img src="'.$image_url.'" /></div><div class="content_section">';
	  $data .= '<div class="our_guides_content">'.$post->post_content.'</div></div>';
	  $data .='</div>';
	}
	$data .= '</div>';

	return $data;
}

// Fetch Destination Guide Imagine posts for Our Guids page...
add_shortcode( 'destination_guide_imagine_posts', 'get_destination_guide_imagine_posts' );
function get_destination_guide_imagine_posts() {

	$posts = get_posts([
		'posts_per_page'   => 6,
		'order'            => 'ASC',
		'post_type'        => 'our_guides_imagine',
		'post_status'      => 'publish',
		'tax_query' => array(array('taxonomy' => 'our_guides' , 'field' => 'slug', 'terms' => 'destination_guide')),
	]);
	

	$data = '<div class="imagine_container">';
	foreach ( $posts as $post ) {
	  $image_url = get_post_meta($post->ID, 'wpcf-upload_image', true);
	  $data .='<div class="imagine_content" style="width:33.33%; display: inline-block;">';
	  $data .= '<div class="image_section"><img src="'.$image_url.'" /></div><div class="content_section">';
	  $data .= '<div class="destination_guide_content">'.$post->post_content.'</div></div>';
	  $data .='</div>';
	}
	$data .= '</div>';

	return $data;
}

// Fetch Experts Imagine posts for Our Guids page...
add_shortcode( 'experts_imagine_posts', 'get_experts_imagine_posts' );
function get_experts_imagine_posts() {

	$posts = get_posts([
		'posts_per_page'   => 6,
		'order'            => 'ASC',
		'post_type'        => 'our_guides_imagine',
		'post_status'      => 'publish',
		'tax_query' => array(array('taxonomy' => 'our_guides' , 'field' => 'slug', 'terms' => 'experts')),
	]);
	

	$data = '<div class="imagine_container">';
	foreach ( $posts as $post ) {
	  $image_url = get_post_meta($post->ID, 'wpcf-upload_image', true);
	  $data .='<div class="imagine_content" style="width:33.33%; display: inline-block;">';
	  $data .= '<div class="image_section"><img src="'.$image_url.'" /></div><div class="content_section">';
	  $data .= '<div class="experts_posts_content">'.$post->post_content.'</div></div>';
	  $data .='</div>';
	}
	$data .= '</div>';

	return $data;
}




// Fetch Our Philosophy posts for front page...
add_shortcode( 'front_our_philosophy_posts', 'get_front_our_philosophy_posts' );
function get_front_our_philosophy_posts() {

	$posts = get_posts([
		'posts_per_page'   => 7,
		'orderby'          => 'date',
		'order'            => 'ASC',
		'post_type'        => 'our_philosophy',
		'post_status'      => 'publish',
		'suppress_filters' => true,
		'fields'           => '',
	]);
	//print "<pre>"; print_r($posts); print "</pre>"; die;
	
	foreach ( $posts as $post ) {
		$data .= '<div class="our_philosophy_lists_row">';
		$image_url = get_post_meta($post->ID, 'wpcf-upload_image', true);
		$data .= '<div class="our_philosophy_image "><img src="'.$image_url.'" /></div>';
		$data .= '<div class="our_philosophy_content_area"><div class="philosophy_area"><div class="our_philosophy_title"><a href="our-philosophy/#post-' .$post->ID. '">'.$post->post_title.'</a></div>';
		$data .= '<div class="our_philosophy_content"><a href="our-philosophy/#post-' .$post->ID. '">'.$post->post_excerpt.'</a></div>';
		$data .= '<div class="our_philosophy_more_link"><a href="our-philosophy/#post-' .$post->ID. '">Read More</a></div></div></div>';
		$data .= '</div>';
	}
	$data .= '<div class="our_philosophy_inquire"><a href="/inquire">Inquire</a></div>';

	return $data;
}


// Fetch recent blog posts for front page...
add_shortcode( 'front_recent_blog_posts', 'get_front_recent_blog_posts' );
function get_front_recent_blog_posts() {

	$posts = get_posts([
		'posts_per_page'   => 4,
		'offset'           => 0,
		'category'         => '',
		'category_name'    => '',
		'meta_key' => 'wpcf-post-date',
		'orderby'   => 'meta_value', //or 'meta_value_num'
		//'orderby'          => 'date',
		'order'            => 'ASC',
		'include'          => '',
		'exclude'          => '',
		'meta_key'         => '',
		'meta_value'       => '',
		'post_type'        => 'blog',
		'post_mime_type'   => '',
		'post_parent'      => '',
		'author'	   => '',
		'author_name'	   => '',
		'post_status'      => 'publish',
		'suppress_filters' => true,
		'fields'           => '',
	]);
	//print "<pre>"; print_r($posts); print "</pre>"; die;

	$data = '<div class="recent_blog_lists_container">';
	foreach ( $posts as $post ) { 
		$data .= '<div class="recent_blog_lists_row">';
		$data .= '<div class="recent_blog_created_date">'.date('F j', get_post_meta($post->ID, 'wpcf-post-date', true)).'</div>';
		$data .= '<div class="recent_blog_title"><h3><a href="' . get_permalink( $post ) . '">'.$post->post_title.'</a></h3></div>';
		if (strlen($post->post_content) > 250){
        $str = substr($post->post_content, 0, 250);		
		}
		else
		$str = $post->post_content;		
		$data .= '<div class="popular_blog_desc">'.$str.'</div>';
		$data .= '<div class="recent_blog_more_link"><a href="' . get_permalink( $post ) . '">Read More</a></div>';
		$data .= '</div>';
	}
	$data .= '</div>';

	return $data;
}

// Fetch recent blog posts title for footer blog list for front page...
add_shortcode( 'footer_recent_blog_title', 'get_footer_recent_blog_title' );
function get_footer_recent_blog_title() {

	$posts = get_posts([
		'posts_per_page'   => 1,
		'offset'           => 0,
		'orderby'          => 'date',
		'order'            => 'DESC',
		'post_type'        => 'blog',
		'post_status'      => 'publish',
		'suppress_filters' => true,
	]);

	foreach ( $posts as $post ) {
		$data .='<div class="textwidget">';
		$data .= '<a href="' . get_permalink( $post ) . '" class="blog_link">'.$post->post_title.'</a>';
		$data .= '<p><a href="/blog">Read Our Blog</a></p>';
		$data .= '</div>';
	}

	return $data;
}


// Fetch  blog posts for blog page...
add_shortcode('blog_page_blog_posts', 'get_blog_page_blog_posts');
function get_blog_page_blog_posts() {

	//Set the query offset & pager
	$paged = ( get_query_var( 'page' ) ) ? get_query_var( 'page' ) : 1;
	$posts_per_page = 2;
	$offset = ( $paged - 1 ) * $posts_per_page;

	$args = [
		'posts_per_page'   => $posts_per_page,
		'paged'            => $paged,
		'offset'           => $offset,
		'category'         => '',
		'category_name'    => '',
		'orderby'          => 'date',
		'order'            => 'DESC',
		'include'          => '',
		'exclude'          => '',
		'meta_key'         => '',
		'meta_value'       => '',
		'post_type'        => 'blog',
		'post_mime_type'   => '',
		'post_parent'      => '',
		'author'	   => '',
		'author_name'	   => '',
		'post_status'      => 'publish',
		'suppress_filters' => true,
		'fields'           => '',
	];


	//Set the query offset & pager
	$category = $_GET['category'];
	if(!empty($category)) {
		$category_arg = array('tax_query' => array(array('taxonomy' => 'blog_category', 'field' => 'slug', 'terms' => $category)));
		$args = array_merge($args, $category_arg);
	}

	//Set the query offset & pager
	$destinations = $_GET['_destinations'];
	if(!empty($destinations)) {
		$category_arg = array('tax_query' => array(array('taxonomy' => 'destinations', 'field' => 'slug', 'terms' => $destinations)));
		$args = array_merge($args, $category_arg);
	}


	// The Query
	$query = new WP_Query( $args );

	// The Loop
	$data = '<div class="blog_lists_container">';
	if ( $query->have_posts() ) {
	  while ( $query->have_posts() ) {
        $post = $query->the_post();
	    $term_list = wp_get_post_terms(get_the_ID(), 'blog_category', array("fields" => "all"));
		$image_url = get_post_meta(get_the_ID(), 'wpcf-upload_image', true);
		$data .= '<div class="blog_row">';
		$data .= '<div class="blog_image"><a href="' . get_permalink( $post ) . '"><img src="'.$image_url.'" /></a></div>';
		$data .= '<div class="blog_title"><a href="' . get_permalink( $post ) . '">'.get_the_title( get_the_ID() ).'</a></div>';
		$data .= '<div class="blog_author_time"><ul><li><i class="fa fa-user-circle"></i>'.get_the_author_meta( 'display_name',$post->post_author).'</li><li><i class="fa fa-clock-o" aria-hidden="true"></i>'.date('F j, Y', get_post_meta(get_the_ID(), 'wpcf-post-date', true)).'</li></ul></div>';
		$data .= '<div class="blog_terms">';
		if(!empty(wp_get_post_terms(get_the_ID(), 'blog_category', array("fields" => "all")))){
		$data .='<i class="fa fa-tag"></i>';
		}
		$data .='<ul>';
		foreach ( $term_list as $term ) {
		  $data .= '<li>'.$term->name.'<span>,&nbsp; </span></li>';
	    }
		$data .= '</ul></div>';
		$data .= '<div class="blog_short_desc">'. wp_strip_all_tags( get_the_excerpt(get_the_ID()) ).'</div>';
		$data .= '<a href="' . get_permalink( $post ) . '">Read More</a>';
		$data .= '</div><div class="blog_row_items"></div>';
	  }

	}else {
 	  $data .= '<div class="no_found">No post found</div>';
    }
    $data .= '</div>';

	print $data;

	// Apply Pagination
	if ($query->max_num_pages > 1){

        $current_page = max(1, get_query_var('page'));

        ?> <div id="pager_section"> <?php
		echo paginate_links(array(
            'format' => '?page=%#%',
            'current' => $current_page,
            'total' => $query->max_num_pages,
            'prev_text'    => __('<i class="fa fa-angle-left"></i>'),
            'next_text'    => __('<i class="fa fa-angle-right"></i>'),
        )); ?>
		</div> <?php
	  }

	// clean up after our query
    wp_reset_postdata();
}

function wpbeginner_numeric_posts_nav($query) {
 
    /*if( is_singular() )
        return;*/
 
    global $wp_query;
    if( !empty($query) ) {
	  $wp_query = $query;
	}
 
    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;
 
    $paged = get_query_var( 'page' ) ? absint( get_query_var( 'page' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );
 
    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;
 
    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }
 
    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }
 
    echo '<div class="navigation"><ul>' . "\n";
 
    /** Previous Post Link */
    if ( get_previous_posts_link() )
        printf( '<li>%s</li>' . "\n", get_previous_posts_link() );
 
    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';
 
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
 
        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
    }
 
    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }
 
    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";
 
        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }
 
    /** Next Post Link */
    if ( get_next_posts_link() )
        printf( '<li>%s</li>' . "\n", get_next_posts_link() );
 
    echo '</ul></div>' . "\n";
 
}

/*add_filter( 'paginate_links', function( $link )
{
    return  
       filter_input( INPUT_GET, 'page' )
       ? remove_query_arg( 'page', $link )
       : $link;
} );*/


// Fetch Featured post list  for blog page...
add_shortcode( 'blog_page_featured_post', 'get_blog_page_featured_post');
function get_blog_page_featured_post() {
	$posts = get_posts([
		'posts_per_page'   => -1,
		'offset'           => 0,
		'category'         => '',
		'category_name'    => '',
		'order'            => 'DESC',
		'include'          => '',
		'exclude'          => '',
		'meta_value'       => '',
		'post_type'        => 'blog',
		'post_mime_type'   => '',
		'post_parent'      => '',
		'author'	   => '',
		'author_name'	   => '',
		'post_status'      => 'publish',
		'suppress_filters' => true,
		'fields'           => '',
	]);
	//print "<pre>"; print_r($post); print "</pre>"; die;

	foreach ( $posts as $post ) {
		if (get_post_meta($post->ID, 'wpcf-featured-postsfeatured-post', true) == '1'){
		$data .= '<div class="featured_post_link"><a href="' . get_permalink( $post ) . '">'.$post->post_title.'</a></div>';
		}
	}
	return $data; 
}

// Fetch destinations category for blog page...
add_shortcode( 'blog_page_destinations_list', 'get_blog_page_destinations_list');
function get_blog_page_destinations_list() {
	$terms = get_terms([
		'child_of'            => 0,
		'current_category'    => 0,
		'post_type'           => 'blog',
		'depth'               => 0,
		'echo'                => 1,
		'exclude'             => '',
		'exclude_tree'        => '',
		'feed'                => '',
		'feed_image'          => '',
		'feed_type'           => '',
		'hide_empty'          => 0,
		'hide_title_if_empty' => false,
		'hierarchical'        => true,
		'order'               => 'ASC',
		'orderby'             => 'name',
		'separator'           => '<br />',
		'show_count'          => 0,
		'show_option_all'     => '',
		'show_option_none'    => __( 'No categories' ),
		'style'               => 'list',
		'taxonomy'            => 'destinations',
		'title_li'            => __( 'Destinations' ),
		'use_desc_for_title'  => 1,
	]);
	//print "<pre>"; print_r($terms); print "</pre>"; die;

	$data = '<div class="blog_page_destinations_category_list"><ul>';
	foreach ( $terms as $term ) {
		$data .= '<li><a href="/blog/?_destinations='.$term->slug.'">'. $term->name .'</a></li>';
	}
	$data .= '</ul></div>';
	return $data; 
}
// Fetch Blog category for blog page...
add_shortcode( 'blog_page_blog_list', 'get_blog_page_blog_list');
function get_blog_page_blog_list() {
	$terms = get_terms([
		'child_of'            => 0,
		'current_category'    => 0,
		'post_type'           => 'blog',
		'depth'               => 0,
		'echo'                => 1,
		'exclude'             => '',
		'exclude_tree'        => '',
		'feed'                => '',
		'feed_image'          => '',
		'feed_type'           => '',
		'hide_empty'          => 0,
		'hide_title_if_empty' => false,
		'hierarchical'        => true,
		'meta_key'   => 'wpcf-weight',
	    'orderby'    => 'meta_value_num',
		'order'               => 'ASC',
		'separator'           => '<br />',
		'show_count'          => 0,
		'show_option_all'     => '',
		'show_option_none'    => __( 'No categories' ),
		'style'               => 'list',
		'taxonomy'            => 'blog_category',
		'title_li'            => __( 'Categories' ),
		'use_desc_for_title'  => 1,
	]);

	$data = '<div class="blog_page_destinations_category_list"><ul>';
	foreach ( $terms as $term ) {
		$data .= '<li><a href="/blog/?category='.$term->slug.'">'. $term->name .'</a></li>';
	}
	$data .= '</ul></div>';
	return $data;
}



// Fetch popular blog posts for front page...
add_shortcode( 'front_popular_blog_posts', 'get_front_popular_blog_posts' );
function get_front_popular_blog_posts() {

	$posts = get_posts([
		'posts_per_page'   => 4,
		'offset'           => 0,
		'category'         => '',
		'category_name'    => '',
		'orderby'          => 'meta_value_num',
		'order'            => 'DESC',
		'include'          => '',
		'exclude'          => '',
		'meta_key'         => 'post_views_count',
		'meta_value'       => '',
		'post_type'        => 'blog',
		'post_mime_type'   => '',
		'post_parent'      => '',
		'author'	   => '',
		'author_name'	   => '',
		'post_status'      => 'publish',
		'suppress_filters' => true,
		'fields'           => '',
	]);

	$data = '<div class="popular_blog_lists_container">';
	foreach ( $posts as $post ) {
		$data .= '<div class="popular_blog_lists_row">';
		$data .= '<div class="popular_blog_created_date">'.date('F j, Y', get_post_meta($post->ID, 'wpcf-post-date', true)).'</div>';
		$data .= '<div class="popular_blog_title"><h3><a href="' . get_permalink( $post ) . '">'.$post->post_title.'</a></h3></div>';
		if (strlen($post->post_content) > 250){
        $str = substr($post->post_content, 0, 250);
		
		}
		else
		$str = $post->post_content;		
		$data .= '<div class="popular_blog_desc">'.$str.'</div>';
		$data .= '<div class="popular_blog_more_link"><a href="' . get_permalink( $post ) . '">Read More</a></div>';
		$data .= '</div>';
	}
	$data .= '</div>';

	return $data;
}

/*
 * Set post views count using post meta
 */
function setPostViews($postID) {
    $countKey = 'post_views_count';
    $count = get_post_meta($postID, $countKey, true);
    if($count==''){
        $count = 0;
        delete_post_meta($postID, $countKey);
        add_post_meta($postID, $countKey, '0');
    }else{
        $count++;
        update_post_meta($postID, $countKey, $count);
    }
}

// Fetch destinations category for /destinations page...
add_shortcode( 'destinations_page_category_list', 'get_destinations_page_category_list' );
function get_destinations_page_category_list() {

	$taxonomy = 'destinations';
	$terms = get_terms([
      'taxonomy'   => $taxonomy,
	  'meta_key'   => 'wpcf-weight',
	  'orderby'    => 'meta_value_num',
	  'order'      => 'ASC',
      'hide_empty' => false,
	]);

	$data = '<div class="destinations_page_category_list"><ul>';
	foreach ( $terms as $term ) {
		$term_link = get_term_link( $term );
		$data .= '<li>';
		if (function_exists('z_taxonomy_image_url')) {
			$image_url =  z_taxonomy_image_url($term->term_id);
			$data .= '<a class="destinations_detail_link" href="' . $term_link . '"><img width="360px" height="230px" src="'.$image_url.'" /></a>';
		}
		$data .='<div class="destinations_desc">';
		$data .= '<h4 class="destinations_title"><a class="destinations_detail_link" href="' . $term_link . '">'. $term->name .'</a></h4>' ;
		if (strlen($term->description) > 150){
        $str = substr($term->description, 0, 147);
		$str = $str.'...';
		}
		else
		$str = $term->description;
		$data .= '<p>'. $str .'</p>' ;
		$data .='</div>';
		
		// The $term is an object, so we don't need to specify the $taxonomy.
		//$term_link = get_term_link( $term );
		//$data .= '<a class="destinations_detail_link" href="' . $term_link . '">Read More</a>';
		$data .= '</li>';
	}
	$data .= '</ul></div>';

	return $data;
}

// Fetch Associations & Awards for about us page...
add_shortcode('about_us_associations_awards_posts', 'get_about_us_associations_awards_posts' );
function get_about_us_associations_awards_posts() {

	$posts = get_posts([
		'posts_per_page'   => -1,
		'orderby'          => 'date',
		'order'            => 'ASC',
		'post_type'        => 'associations_awards',
		'post_status'      => 'publish',
		'suppress_filters' => true,
		'fields'           => '',
	]);
	
	$data = '<div class="about_us_associations_awards_container">';
	foreach ( $posts as $post ) {
		$data .= '<div class="about_us_associations_awards_row ">';
		$data .= '<div class="about_us_section">';
		$image_url = get_post_meta($post->ID, 'wpcf-upload_image', true);
		$data .= '<div class="about_us_associations_awards_image text-center"><img src="'.$image_url.'" /></div>';
		$data .= '<div class="about_us_post_dec">';
		$data .= '<div class="about_us_associations_awards_title">'.$post->post_title.'</div>';
		$data .= '<div class="about_us_associations_awards_content">'.$post->post_content.'</div>';
		$data .= '</div>';
		$data .= '</div>';
		$data .= '</div>';
	}
	$data .= '</div>';

	return $data;
}

// Fetch Experiences posts for Art & Culture page...
add_shortcode( 'experiences_posts', 'get_experiences_posts' );
function get_experiences_posts() {

	$posts = get_posts([
		'posts_per_page'   => 6,
		'orderby'          => 'date',
		'order'            => 'ASC',
		'post_type'        => 'experiences',
		'post_status'      => 'publish',
		'suppress_filters' => true,
		'fields'           => '',
	]);
	//print "<pre>"; print_r($posts); print "</pre>"; die;
	
	foreach ( $posts as $post ) {
		$data .= '<div class="experiences_lists_row">';
		$image_url = get_post_meta($post->ID, 'wpcf-upload_guide_image', true);
		$data .= '<div class="inner_experiences_row"><div class="experiences_image "><img src="'.$image_url.'" /></div>';
		$data .= '<div class="experiences_content_area">'.$post->post_title.'</div>';
		$data .= '<div class="experiences_content">'.$post->post_content.'</div>';
		$data .= '</div></div>';
	}

	return $data;
}

// Fetch Traveling Styles posts for Art & Culture page...
add_shortcode( 'traveling_styles_posts', 'get_traveling_styles_posts' );
function get_traveling_styles_posts() {

	$posts = get_posts([
		'posts_per_page'   => 3,
		'orderby'          => 'date',
		'order'            => 'ASC',
		'post_type'        => 'traveling_styles',
		'post_status'      => 'publish',
		'suppress_filters' => true,
		'fields'           => '',
	]);
	//print "<pre>"; print_r($posts); print "</pre>"; die;
	
	foreach ( $posts as $post ) {
		$data .= '<div class="traveling_styles_lists_row">';
		$image_url = get_post_meta($post->ID, 'wpcf-upload_guide_image', true);
		$data .= '<div class="traveling_styles_image "><img src="'.$image_url.'" /></div>';
		$data .= '<div class="traveling_styles_content_title">'.$post->post_title.'</div>';
		$data .= '<div class="traveling_styles_content">'.$post->post_content.'</div>';
		$data .= '</div>';
	}

	return $data;
}

// Fetch private jet tours posts for template page...
add_shortcode( 'private_jet_tours', 'get_private_jet_tours' );
function get_private_jet_tours() {

	$posts = get_posts([
		'posts_per_page'   => 3,
		'orderby'          => 'date',
		'order'            => 'ASC',
		'post_type'        => 'private_jet_tours',
		'post_status'      => 'publish',
		'suppress_filters' => true,
		'fields'           => '',
	]);
	//print "<pre>"; print_r($posts); print "</pre>"; die; '.date('M Y', strtotime($post->post_date)).'
	
	foreach ( $posts as $post ) {
		$data .= '<div class="tours_jets_row ">';					
		$data .= '<div class="tours_date">';			
		if(get_post_meta($post->ID, 'wpcf-date', true) != '') { 
		$data .= date("F Y", get_post_meta($post->ID, 'wpcf-date', true));}
		$data .= '</div>';	
		$data .= '<div class="tours_title">'.$post->post_title.'</div>';	
		$data .= '</div>';
	}
	

	return $data;
}

// Fetch private jet tours posts for template page...
add_shortcode( 'private_jet', 'get_private_jet' );
function get_private_jet() {

	$posts = get_posts([
		'posts_per_page'   => 3,
		'orderby'          => 'date',
		'order'            => 'ASC',
		'post_type'        => 'private_jet_tours',
		'post_status'      => 'publish',
		'suppress_filters' => true,
		'fields'           => '',

	
	]);
	$counter = 0;
	foreach ( $posts as $post ) {
		$counter++;
		//print "<pre>"; print_r(get_post_meta($post->ID)); print "</pre>"; die; 
		//$itinerary = get_post_meta($post->ID, '_Itinerary', true);
		 //print "<pre>"; print_r($itinerary); print "</pre>"; die;
		$data .= '<div class="tours_jets_whole_section tour_row_'. $counter .'">';
	    $data .= '<div class="tours_jets_row container">';	
		$data .= '<div class="tours_jets_row_image">';
			
		$image_url = get_post_meta($post->ID, 'wpcf-multipule-upload-image', true);
		$data .= '<div class="traveling_styles_image_one col-sm-6"><img src="'.$image_url.'" /></div>';	
		$image_url = get_post_meta($post->ID, 'wpcf-upload-image-2', true);
		$data .= '<div class="traveling_styles_image_two col-sm-6"><img src="'.$image_url.'" /></div>';	
		
		$data .= '</div>';

		$data .= '<div class="private_tour_title_date text-center">';
		$data .= '<div class="tours_title">'.$post->post_title.'</div><span class="title_border"></span>';	
		$data .= '<div class="tours_date">';
		
		if(get_post_meta($post->ID, 'wpcf-date', true) != '') { 
		$data .= date("F Y", get_post_meta($post->ID, 'wpcf-date', true));}	
		$data .= '</div>';	
		$data .= '</div>';	

		$data .= '<div class="private_tour_content_area">';
		$data .= '<div class="private_tour_content col-sm-6">'.$post->post_content.'</div>';
	
		$data .= '<div class="tours_what_includes col-sm-6"><div class="what_title"><h4>What’s Included</h4></div>';			
		$data .= get_post_meta($post->ID, 'wpcf-what-s-included', true);		
		$data .= '</div></div>';
		$data .= '<div class="private_jet_inquire"><a href="/inquire">Inquire</a></div>';
		
		$data .= '<div class="whole_tours_itinerary_area">';
		$data .= '<div class="tours_itinerary col-sm-6">';
			$data .= '<div id="tours_itinerary_box">';
				$data .= '<div class="itinerary_title"><h4>Itinerary</h4></div>';
				
				$itinerary = get_post_meta($post->ID, '_Itinerary', true);
				$count=0;
				foreach ( $itinerary as $i) {
				$count++;
				if($count >6){
				$data .= '<div id="itinerary-row-'.$count.'" class="itinerary-row" style="display:none;">';
				}
				else {
				$data .= '<div id="itinerary-row-'.$count.'" class="itinerary-row ">';
				}
				$data .= '<div class="col-sm-3 day_section"><div class="day"><h3>Day</h3></div><div class="tours_day">'.$i['day'].'</div></div>';
				
				$data .= '<div class="col-sm-9 title_des_section"><div class="tours_day_title">'.$i['title'].'</div>';	
				$data .= '<div class="tours_day_descriptions">'. $i['description'].'</div></div></div>';	
				}
			$data .= '</div>'; /*Close #tours_itinerary_box */
		$data .= '<div class="more_buttons"><button id="show_more" type="button" class="btn btn-default">Show More</button>
		<button id="hide_more" type="button" class="btn btn-default" style="display:none;">Show less</button></div>';
		$data .= '</div>';	
		
			
		$data .= '<div class="tours_journeys_feature col-sm-6"><div class="journeys_feature_title"><h4>All Journeys Feature</h4></div>';
		$data .= get_post_meta($post->ID, 'wpcf-all-journeys-feature', true);
		$data .= '<div class="tours_tour_price"><div class="tour_price_title"><h4>Not included in the tour price</h4></div>';
		$data .= get_post_meta($post->ID, 'wpcf-not-included-in-the-tour-price', true);
		$data .= '</div>';	
		$data .= '</div>';			
		$data .= '</div>';
		$data .= '</div>';
		$data .= '</div>';
	}
	
	

	return $data;
}
require_once('custom-shortcodes.php');
require_once('taxonomy/taxonomy_functions.php');
?>