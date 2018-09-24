

(function($){
	//console.log('SCRIPT Working');
    $(document).ready( function(){
	
	if (document.getElementById('accordion')) { 
       $('#accordion .panel .panel-collapse').removeClass('in');
	   $('#accordion .panel .panel-heading .panel-title .accordion-toggle').addClass('collapsed');
    }
	
	if (document.getElementById('gallery-container')) {
       //$('#gallery-container').lightGallery();
	   //$(".gallery a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',theme:'light_square'});
    }
	
	var total_share = 0;
	$('li.theChampSharingRound').each(function() {
	  if ($(this).find('.theChampFacebookBackground').length ) {
		 total_share = total_share+$(this).find('.theChampFacebookBackground').attr('heateor-ss-fb-shares'); 
	  }  
	});
	$('<div class="total_share">'+total_share+'</div>').insertBefore('ul.the_champ_sharing_ul');
      
   $("#content_top_area ul.nav-tabs li").each(function(){
	   $(this).find("a").click(function(){
			 var href = $(this).attr("href");
			 var query_str = href.split('#');
			 $('body').removeClass('destination_guide');
	   		 $('body').removeClass('experts');
   			 $('body').removeClass('china_host');
			 $('body').addClass(query_str[1]);
	   }); 
   });
   
   $("body.tax-destinations #gallery-container .col-md-6").each(function(){
	   $(this).find(".gallery-item .highlights_image .image_overlay").click(function(){
			 $(this).next("img" ).trigger( "click" );
	   }); 
	   $(this).find(".gallery-item .highlights_title").click(function(){
			 $(this).parent().find('.highlights_image img' ).trigger( "click" );
	   });
   });
   
   $("#inner-destination-right-area section .front_destinations_list ul li").each(function(){
	   $(this).find(".image-shadow").click(function(){
			 var href = $(this).find("a").attr("href");
			 window.location.href = href;
	   }); 
   });
   
   $(".inner_destination_area .front_destinations_list ul li").each(function(){
	   $(this).find(".image-shadow").click(function(){
			 var href = $(this).find("a").attr("href");
			 window.location.href = href;
	   }); 
   });

   $("#newsletterwidget-3 form .tnp-email").attr("placeholder","Sign Up With Your Email");
   $("#search_box form #s").attr("placeholder","Search");  /*Blog Page Search */
   $("body.page-id-310 #whole-content-area #bredacrumb-section span:last-child span").text("FAQ");
   
   if (document.getElementsByClassName('blog_lists_container')) { 
        blogmaxHeight = $('body.single-blog .wp-bp-content-width .image_width').height();
        blog_details_height =  parseInt(blogmaxHeight) + parseInt(41);
		$('body.single-blog #inner_blog_content').css('padding-top',blog_details_height);
   }
  
	
   function windowSize() {

	if (document.getElementsByClassName('blog_lists_container')) { 
        blogmaxHeight = $('body.single-blog .wp-bp-content-width .image_width').height();
        blog_details_height =  parseInt(blogmaxHeight) + parseInt(41);
		$('body.single-blog #inner_blog_content').css('padding-top',blog_details_height);
    }
	
    if (document.getElementsByClassName('our_philosophy_lists_row')) { 
     $(".our_philosophy_lists_row").each(function(){
         maxHeight = $(this).find('.our_philosophy_content_area .philosophy_area').height();
		 $(this).find('.our_philosophy_content_area').height(maxHeight);
     });
    }
	
	if (document.getElementsByClassName('our_philosophy_listing_row')) { 
     $(".our_philosophy_listing_row").each(function(){
         maxHeight = $(this).find('.our_philosophy_listing_content_section .our_philosophy_content_container').height();
		 $(this).find('.our_philosophy_listing_content_section').height(maxHeight);
     });
    }
	
    $(".page-id-304 #show_more").click(function(){
		 $(this).parents('.tours_itinerary').find('.itinerary-row').css("display","block");
         $(this).hide();
		 $(this).next('button#hide_more').css("display","block");
     });
	 
	$(document).ready(function(){	
		$('video source').prop('type',"video/mp4");
	});	
		
	 $(".page-id-304 #hide_more").click(function(){
		 $(this).parents('.tours_itinerary').find('.itinerary-row').each(function(pos) {
			 if(pos > 5) {
				$(this).css("display","none");
			 }
		 });

    	 $(this).css("display","none");
		 $(this).prev('button#show_more').show();
     });
	
	 $("#row_section_hide").show();
	 
	 if (document.getElementById("whole_custom_itineraries_area")) { 
		 var x = document.getElementById("row_section_hide");
		if (x.style.display === "block") {
			x.style.display = "none";
		} else {
			x.style.display = "block";
		}
		 var button_change = document.getElementById("custom_itineraries_show_more");
		  if (button_change.innerHTML == "Show Less") {
			button_change.innerHTML = "Show More";
		  } else {
			button_change.innerHTML = "Show Less";
		  }
	}

    var width = $(window).width();
	var height = $(window).height();
	
	if(width <= 767){
		$('body.post-type-archive-blog .wp-bp-sidebar-width').insertBefore('.blog_post_content_area .wp-bp-content-width');
		$('.blog_lists_container .wp-bp-sidebar-width').insertBefore('.blog_lists_container .wp-bp-content-width');
	 }else {
		$('body.post-type-archive-blog .wp-bp-sidebar-width').insertAfter('.blog_post_content_area .wp-bp-content-width');
		$('.blog_lists_container .wp-bp-sidebar-width').insertAfter('.blog_lists_container .wp-bp-content-width');
	}
	
	if(width <= 1278){
		$('#whole-header-area video, #whole-header-area section img').height(height);
	}else {
		$('#whole-header-area video, #whole-header-area section img').height('');
	}
	
	if(height <= 480){
		$('#whole-header-area').addClass('video_height');
	}else {
		$('#whole-header-area').removeClass('video_height');
	}

	
	/*if (document.getElementsByClassName('front_destinations_list')) { 
     $(".front_destinations_list ul li").each(function(){
         maxHeight = $(this).find('.image-shadow').height();
		 Height = parseInt(37) + parseInt(maxHeight);
		 img_src = $(this).find('img').attr("src");
		 $(this).height(Height);
         $(this).css('background','url('+img_src+') no-repeat 50% 50% / cover');
     });
    }*/
		
	if (document.getElementsByClassName('widget_media_image')) { 
     $("#banner-area .widget_media_image img").each(function(){
         maxHeight = $(this).height();
         img_src = $(this).attr("src");
		 $('.whole_banner_page_title').height(maxHeight);
         if(width <= 767){
            $('.whole_banner_page_title').css('background','url('+img_src+') no-repeat 50% 50% / cover');
         }else {
            $('.whole_banner_page_title').css('background','');
         }
     });
    }

    if (document.getElementById('taxonomy_banner_area')) { 
     $("#taxonomy_banner_area img").each(function(){
         tax_maxHeight = $(this).height();
         tax_img_src = $(this).attr("src");
		 $('.whole_banner_page_title').height(tax_maxHeight);
         if(width <= 767){
            $('.whole_banner_page_title').css('background','url('+tax_img_src+') no-repeat 50% 50% / cover');
         }else {
            $('.whole_banner_page_title').css('background','');
         }
     });
    }
	
	
	
   }
 
   windowSize();
   $(window).resize(function(){
     windowSize();
   });
		$(document).ready(function () {
      		$('body.page-id-310 #whole_content_bottom_area a.accordion-toggle.collapsed').css('background', '#318b8b');
      });

	  $('.btnNext').click(function(){
  	  $('.nav-tabs > .active').next('li').find('a').trigger('click');
	  });

  	  $('.btnPrevious').click(function(){
  	  $('.nav-tabs > .active').prev('li').find('a').trigger('click');
  	  });
		
    });

})(jQuery);

jQuery('img.svg').each(function(){
    var $img = jQuery(this);
    var imgID = $img.attr('id');
    var imgClass = $img.attr('class');
    var imgURL = $img.attr('src');

    jQuery.get(imgURL, function(data) {
        // Get the SVG tag, ignore the rest
        var $svg = jQuery(data).find('svg');

        // Add replaced image's ID to the new SVG
        if(typeof imgID !== 'undefined') {
            $svg = $svg.attr('id', imgID);
        }
        // Add replaced image's classes to the new SVG
        if(typeof imgClass !== 'undefined') {
            $svg = $svg.attr('class', imgClass+' replaced-svg');
        }

        // Remove any invalid XML tags as per http://validator.w3.org
        $svg = $svg.removeAttr('xmlns:a');

        // Check if the viewport is set, if the viewport is not set the SVG wont't scale.
        if(!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
            $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
        }

        // Replace image with new SVG
        $img.replaceWith($svg);

    }, 'xml');

});

function show_more_function() {
	

    var x = document.getElementById("row_section_hide");
    if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
	var change = document.getElementById("custom_itineraries_show_more");
	  if (change.innerHTML == "Show More") {
		change.innerHTML = "Show Less";
	  } else {
		change.innerHTML = "Show More";
	  }
	  
	  /*if (change.innerHTML == "Show Less") {
		change.innerHTML = "Show More";
	  } else {
		change.innerHTML = "Show Less";
	  }*/
}