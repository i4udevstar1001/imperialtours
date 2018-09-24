<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
<title> <?php /* wp_title('', true,''); */ ?> </title>
</head>

<body <?php body_class(); ?> >

<?php if ( is_front_page() ) { ?>

<div id="whole-header-area" >
	<?php // dynamic_sidebar('headerbg'); ?>
    <?php  echo do_shortcode( '[video id=397]' ); ?>
	<div id="inner-header-area">
    	<div id="header-area" class="container">
        
            <div class="header-logo">
           <a href="<?php echo get_home_url(); ?>"> <?php $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                    if ( has_custom_logo() ) {
                            echo '<img src="'. esc_url( $logo[0] ) .'">';
                    } else {
                            echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
                    }
            ?></a>
            </div>
            <div class="header-menu hidden-xs">
				<?php dynamic_sidebar('topmenu'); ?>
			</div>	
            <div class="header-menu hidden-sm hidden-lg hidden-md">
				<div id="mySidenav" class="sidenav">
				<a href="javascript:void(0)" class="closebtn" onClick="closeNav()">&times;</a> 
                  <?php dynamic_sidebar('topmenu'); ?>
				 </div> 
				<span style="font-size:0px;cursor:pointer" onClick="openNav()">&#9776 </span> 
            </div>
            <div id="headertext-area" class="">
    			<?php dynamic_sidebar('headertext'); ?>
    		</div>
         </div>
    </div>
</div>

<?php }else { ?>

<div id="inner-page-header-area">
    	<div id="inner-header-area" class="container">
        
            <div class="inner-header-logo">
           <a href="<?php echo get_home_url(); ?>"> <?php $custom_logo_id = get_theme_mod( 'custom_logo' );
                    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                    if ( has_custom_logo() ) {
                            echo '<img src="'. esc_url( $logo[0] ) .'">';
                    } else {
                            echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
                    }
            ?></a>
            </div>
           
            <div class="inner-header-menu col-sm-9 hidden-xs">
                  <?php dynamic_sidebar('topmenu'); ?>
            </div>
			<div class="inner-header-menu col-sm-9 hidden-sm hidden-lg hidden-md">
				<div id="mySidenav" class="sidenav">
				<a href="javascript:void(0)" class="closebtn" onClick="closeNav()">&times;</a> 
                  <?php dynamic_sidebar('topmenu'); ?>
				 </div> 
				<span style="font-size:0px;cursor:pointer" onClick="openNav()">&#9776 </span> 
            </div>
          <!---  <div class="header-inquire"><a href="">Inquire</a></div>  -->
           
         </div>
</div>

<div id="banner-area">
    <div class="image-shadow">
      <?php  dynamic_sidebar('banner'); ?>
    </div>
</div>

<?php } ?>
</head>
<body>
<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>

