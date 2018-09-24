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

<?php get_footer(); ?>
