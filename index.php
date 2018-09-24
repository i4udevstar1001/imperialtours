<?php get_header(); ?>

	<?php if ( is_home() && ! is_front_page() ) : ?>
		<header class="page-header">
			<h1 class="page-title"><?php single_post_title(); ?></h1>
		</header>
	
	<?php endif; ?>

  <div id="whole-content-area">
	  	<div id="bredacrumb-section">
	      <?php	echo do_shortcode( '[breadcrumb]' ); ?>
        </div>
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
		  		<?php while ( have_posts() ) : the_post(); ?>                
                <?php the_content();?>
                <?php endwhile; ?>
                <?php dynamic_sidebar('content'); ?>
       </div>
</div>

<?php get_footer();
