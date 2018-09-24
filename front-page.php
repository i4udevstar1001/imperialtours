

<?php get_header();  ?>



<div id="content-area" class="">
		<?php 
        	while ( have_posts() ) : the_post(); ?>
        		
        	<?php the_content();?>
        <?php endwhile; // end of the loop. ?>
        


<div id="whole-destination-area">
    <div id="inner-destination-left-area" class="col-sm-6">
    	<?php dynamic_sidebar('destinationleft'); ?>
    </div>
    
    <div id="inner-destination-right-area" class="col-sm-6">
    	<?php dynamic_sidebar('destinationright'); ?>
    </div>
</div> 
<div id="whole-comment-area">   
        <div id="inner-comment-area" class="">
        	<?php dynamic_sidebar('comment'); ?>
        </div>
</div> 
<div id="whole-private-jet-tours-area">     
        <div id="inner-private-jet-tours-area" class="">
        	<?php dynamic_sidebar('privatejettours'); ?>
        </div>
</div>  
  
<div id="whole-travelling-concierge-area">
        <div id="inner-travelling-concierge-area" class="">
        	<?php dynamic_sidebar('travellingconcierge'); ?>
        </div>
</div> 
   
<div id="whole-dream-area">    
        <div id="inner-dream-area" class="">
        	<?php dynamic_sidebar('dream'); ?>
        </div>
</div>

<div id="whole-phylosophy-area">        
        <div id="inner-phylosophy-area" class="">
        	<?php dynamic_sidebar('phylosophy'); ?>
        </div>
</div>  


<div id="whole-inquire-area">        
        <div id="inner-inquire-area" class="">
        	<?php dynamic_sidebar('inquire'); ?>
        </div>
</div>

<div id="whole-blogpost-area">
        <div id="inner-blogpost-area" class="container">
        	<?php dynamic_sidebar('blogpost'); ?>
        </div>
</div>

<div id="whole-footer-top-area">
        <div id="inner-footer-top-area" class="container">
        	<?php dynamic_sidebar('footertop'); ?>
        </div>
</div>

<?php get_footer();  ?>