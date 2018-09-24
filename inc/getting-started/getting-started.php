<?php
//about theme info
add_action( 'admin_menu', 'imperial_tours_gettingstarted' );
function imperial_tours_gettingstarted() {    	
	add_theme_page( esc_html__('About Imperial Tours', 'imperial-tours'), esc_html__('About Imperial Tours', 'imperial-tours'), 'edit_theme_options', 'imperial_tours_guide', 'imperial_tours_mostrar_guide');   
}

// Add a Custom CSS file to WP Admin Area
function imperial_tours_admin_theme_style() {
   wp_enqueue_style( 'imperial-tours-font', imperial_tours_admin_font_url(), array() );
   wp_enqueue_style('custom-admin-style', get_template_directory_uri() . '/inc/getting-started/getting-started.css');
   wp_enqueue_script('tabs', get_template_directory_uri() . '/inc/getting-started/js/tab.js');
}
add_action('admin_enqueue_scripts', 'imperial_tours_admin_theme_style');

// Theme Font URL
function imperial_tours_admin_font_url() {
	$font_url = '';
	$font_family = array();
	$font_family[] = 'Muli:300,400,600,700,800,900';

	$query_args = array(
		'family'	=> urlencode(implode('|',$font_family)),
	);
	$font_url = add_query_arg($query_args,'//fonts.googleapis.com/css');
	return $font_url;
}

//guidline for about theme
function imperial_tours_mostrar_guide() { 
	//custom function about theme customizer
	$return = add_query_arg( array()) ;
	$theme = wp_get_theme( 'imperial-tours' );
?>

<div class="wrapper-info">
    <div class="col-left">
    	<h2><?php esc_html_e( 'Welcome to Imperial Tours', 'imperial-tours' ); ?> <span class="version">Version: <?php echo esc_html($theme['Version']);?></span></h2>
    	<p><?php esc_html_e('All our WordPress themes are modern, minimalist, 100% responsive, seo-friendly,feature-rich, and multipurpose that best suit designers, bloggers and other professionals who are working in the creative fields.','imperial-tours'); ?></p>
    </div>
    <div class="col-right">
    	<div class="logo">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/final-logo.png" alt="" />
		</div>
		<div class="update-now">
			<h4><?php esc_html_e('Buy VW Corporate at 10% Discount','imperial-tours'); ?></h4>
			<h4><?php esc_html_e('Use Coupon','imperial-tours'); ?> ( <span><?php esc_html_e('vwten2018','imperial-tours'); ?></span> ) </h4> 
			<div class="info-link">
				<a href="<?php echo esc_url( imperial_tours_BUY_NOW ); ?>" target="_blank"> <?php esc_html_e( 'Upgrade to Pro', 'imperial-tours' ); ?></a>
			</div>
		</div>
    </div>

    <div class="tab-sec">
		<div class="tab">
		  <button class="tablinks" onclick="openCity(event, 'lite_theme')"><?php esc_html_e( 'Getting Started', 'imperial-tours' ); ?></button>		  
		  <button class="tablinks" onclick="openCity(event, 'pro_theme')"><?php esc_html_e( 'Get Premium', 'imperial-tours' ); ?></button>
		  <button class="tablinks" onclick="openCity(event, 'free_pro')"><?php esc_html_e( 'Support', 'imperial-tours' ); ?></button>
		</div>

		<!-- Tab content -->
		<div id="lite_theme" class="tabcontent open">
			<h3><?php esc_html_e( 'Lite Theme Information', 'imperial-tours' ); ?></h3>
			<hr class="h3hr">
		  	<p><?php esc_html_e('VW Corporate Lite is a unique and optimized multipurpose corporate WordPress theme with simple and a beautiful, professional design and well-structured information. It is an amazingly conceptualized corporate theme. It is a Free Corporate WordPress theme, with an uncomplicated yet beautiful professional design. Anybody can use this theme to build powerful websites for startups and medium sized companies, marketing, promoting your business online, corporate business, business websites, business agencies, creative agencies, digital agencies, corporate houses and other creative websites such as construction, travel, restaurant, hotel, digital agency, real estate, photography, spa, gym, architecture, magazine, art, design, health, portfolio, product showcase, organizations, e-commerce and other types of websites. Also, it can be used by individuals such as shop owners, business owners, bloggers, travelers, etc. to make event, gallery, lifestyle, listing, yoga, wedding, school, university, sports, and other websites. It is a completely mobile friendly and SEO friendly theme with secure and clean code that engages more clients. It is compatible with multiple browsers. Its features are highly user-friendly that helps you make professional websites very easily. Some of its features are It is compatible with woocommerce, testimonial section, Call to Action Button (CTA), integration of social media, etc. Built upon Bootstrap, this theme makes strong websites along with utilizing all the personalization options and optimized codes. You get faster page load time with it. The available short-codes are add-ons to customize the pages and posts. The team, banner, search bar, sponsors, services are some of the sections on its homepage. You can begin developing stunning websites with this beautiful, multipurpose and highly interactive business WordPress theme.','imperial-tours'); ?></p>
		  	<div class="col-left-inner">
		  		<h4><?php esc_html_e( 'Theme Documentation', 'imperial-tours' ); ?></h4>
				<p><?php esc_html_e( 'If you need any assistance regarding setting up and configuring the Theme, our documentation is there.', 'imperial-tours' ); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( imperial_tours_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'imperial-tours' ); ?></a>
				</div>
				<hr>
				<h4><?php esc_html_e('Theme Customizer', 'imperial-tours'); ?></h4>
				<p> <?php esc_html_e('To begin customizing your website, start by clicking "Customize".', 'imperial-tours'); ?></p>
				<div class="info-link">
					<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'imperial-tours'); ?></a>
				</div>
				<hr>				
				<h4><?php esc_html_e('Having Trouble, Need Support?', 'imperial-tours'); ?></h4>
				<p> <?php esc_html_e('Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme.', 'imperial-tours'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( imperial_tours_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'imperial-tours'); ?></a>
				</div>
				<hr>
				<h4><?php esc_html_e('Reviews & Testimonials', 'imperial-tours'); ?></h4>
				<p> <?php esc_html_e('All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'imperial-tours'); ?>  </p>
				<div class="info-link">
					<a href="<?php echo esc_url( imperial_tours_REVIEW ); ?>" target="_blank"><?php esc_html_e('Reviews', 'imperial-tours'); ?></a>
				</div>
		  	  	<div class="link-customizer">
					<h3><?php esc_html_e( 'Link to customizer', 'imperial-tours' ); ?></h3>
					<hr class="h3hr">
					<div class="first-row">
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-format-image"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','imperial-tours'); ?></a>
							</div>
							<div class="row-box2">
								<span class="dashicons dashicons-admin-customizer"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=imperial_tours_typography') ); ?>" target="_blank"><?php esc_html_e('Typography','imperial-tours'); ?></a>
							</div>
						</div>
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-images-alt"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=imperial_tours_slidersettings') ); ?>" target="_blank"><?php esc_html_e('Slider Settings','imperial-tours'); ?></a>
							</div>
							<div class="row-box2">
								<span class="dashicons dashicons-align-center"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=imperial_tours_topbar_icon') ); ?>" target="_blank"><?php esc_html_e('Topbar Settings','imperial-tours'); ?></a>
							</div>
						</div>
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-editor-table"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=imperial_tours_our_services') ); ?>" target="_blank"><?php esc_html_e('Services Section','imperial-tours'); ?></a>
							</div>
							<div class="row-box2">
								<span class="dashicons dashicons-editor-aligncenter"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','imperial-tours'); ?></a>
							</div>
						</div>
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','imperial-tours'); ?></a>
							</div>
							<div class="row-box2">
								<span class="dashicons dashicons-admin-links"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=imperial_tours_topbar_header') ); ?>" target="_blank"><?php esc_html_e('Add Social Icon','imperial-tours'); ?></a>
							</div>
						</div>
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-welcome-write-blog"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=imperial_tours_left_right') ); ?>" target="_blank"><?php esc_html_e('Blog Layout','imperial-tours'); ?></a>
							</div>
							<div class="row-box2">
								<span class="dashicons dashicons-align-center"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=imperial_tours_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','imperial-tours'); ?></a>
							</div>
						</div>
					</div>
				</div>
		  	</div>
			<div class="col-right-inner">
				<h3 class="page-template"><?php esc_html_e('How to set up Home Page Template','imperial-tours'); ?></h3>
			  	<hr class="h3hr">
				<p><?php esc_html_e('Follow these instructions to setup Home page.','imperial-tours'); ?></p>
                <ul>
                	<li><?php esc_html_e('1. Create a Page to set template:  Go to ','imperial-tours'); ?>
                  	<b><?php esc_html_e('Dashboard &gt;&gt; Pages &gt;&gt; Add New Page','imperial-tours'); ?></b>.
                  	<p><?php esc_html_e('Label it "home" or anything as you wish. Then select template "home-page" from template dropdown.','imperial-tours'); ?></p></li>
                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/home-page-template.png" alt="" />
                  	<p></p><span class="strong"><?php esc_html_e('2. Set the front page:','imperial-tours'); ?></span><?php esc_html_e(' Go to ','imperial-tours'); ?>
				  	<b><?php esc_html_e(' Settings -&gt; Reading --&gt; Set the front page display static page to home page ','imperial-tours'); ?></b></p>
                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/set-front-page.png" alt="" />
                  	<p><?php esc_html_e(' Once you are done with this, you can see all the demo content on front page. ','imperial-tours'); ?></p>
                </ul>
		  	</div>
		</div>	

		<div id="pro_theme" class="tabcontent">
		  	<h3><?php esc_html_e( 'Premium Theme Information', 'imperial-tours' ); ?></h3>
			<hr class="h3hr">
		    <div class="col-left-pro">
		    	<p><?php esc_html_e('Our premium corporate WordPress theme is a combo of elegance and professional design. Corporate sector hires the best, so why settle for anything lesser than the best corporate WP theme? We know how the corporate sector works, in there, performers they stay and slackers are weeded out. So it becomes important to be at our optimal best at all times. Our multipurpose corporate WordPress theme is that best performing theme, which you just cant afford to miss out on. The content is indeed the king and promoting it ensures the users extended stay at your website, which leads to increased sales.','imperial-tours'); ?></p>
		    	<div class="pro-links">
			    	<a href="<?php echo esc_url( imperial_tours_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'imperial-tours'); ?></a>
					<a href="<?php echo esc_url( imperial_tours_BUY_NOW ); ?>"><?php esc_html_e('Buy Pro', 'imperial-tours'); ?></a>
					<a href="<?php echo esc_url( imperial_tours_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'imperial-tours'); ?></a>
				</div>
		    </div>
		    <div class="col-right-pro">
		    	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/vw-corporate-theme.png" alt="" />
		    </div>
		    <div class="featurebox">
			    <h3><?php esc_html_e( 'Theme Features', 'imperial-tours' ); ?></h3>
				<hr class="h3hr">
				<div class="table-image">
					<table class="tablebox">
						<thead>
							<tr>
								<th></th>
								<th><?php esc_html_e('Free Themes', 'imperial-tours'); ?></th>
								<th><?php esc_html_e('Premium Themes', 'imperial-tours'); ?></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php esc_html_e('Theme Customization', 'imperial-tours'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Responsive Design', 'imperial-tours'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Logo Upload', 'imperial-tours'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Social Media Links', 'imperial-tours'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Slider Settings', 'imperial-tours'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Number of Slides', 'imperial-tours'); ?></td>
								<td class="table-img"><?php esc_html_e('4', 'imperial-tours'); ?></td>
								<td class="table-img"><?php esc_html_e('Unlimited', 'imperial-tours'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Template Pages', 'imperial-tours'); ?></td>
								<td class="table-img"><?php esc_html_e('3', 'imperial-tours'); ?></td>
								<td class="table-img"><?php esc_html_e('6', 'imperial-tours'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Home Page Template', 'imperial-tours'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'imperial-tours'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'imperial-tours'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Contact us Page Template', 'imperial-tours'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('1', 'imperial-tours'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Blog Templates & Layout', 'imperial-tours'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('3(Full width/Left/Right Sidebar)', 'imperial-tours'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Page Templates & Layout', 'imperial-tours'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('2(Left/Right Sidebar)', 'imperial-tours'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Full Documentation', 'imperial-tours'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Latest WordPress Compatibility', 'imperial-tours'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Woo-Commerce Compatibility', 'imperial-tours'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Support 3rd Party Plugins', 'imperial-tours'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Secure and Optimized Code', 'imperial-tours'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Exclusive Functionalities', 'imperial-tours'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Section Enable / Disable', 'imperial-tours'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Google Font Choices', 'imperial-tours'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Gallery', 'imperial-tours'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Simple & Mega Menu Option', 'imperial-tours'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Support to add custom CSS / JS ', 'imperial-tours'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Shortcodes', 'imperial-tours'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Custom Background, Colors, Header, Logo & Menu', 'imperial-tours'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Premium Membership', 'imperial-tours'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Budget Friendly Value', 'imperial-tours'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Priority Error Fixing', 'imperial-tours'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Custom Feature Addition', 'imperial-tours'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td><?php esc_html_e('All Access Theme Pass', 'imperial-tours'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Seamless Customer Support', 'imperial-tours'); ?></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/w-arrow.png" alt="" /></td>
								<td class="table-img"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getting-started/images/right-arrow.png" alt="" /></td>
							</tr>
							<tr>
								<td></td>
								<td class="table-img"></td>
								<td class="update-link"><a href="<?php echo esc_url( imperial_tours_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade to Pro', 'imperial-tours'); ?></a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div id="free_pro" class="tabcontent">
		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-star-filled"></span><?php esc_html_e('Pro Version', 'imperial-tours'); ?></h4>
				<p> <?php esc_html_e('To gain access to extra theme options and more interesting features, upgrade to pro version.', 'imperial-tours'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( imperial_tours_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Get Pro', 'imperial-tours'); ?></a>
				</div>
		  	</div>
		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-cart"></span><?php esc_html_e('Pre-purchase Queries', 'imperial-tours'); ?></h4>
				<p> <?php esc_html_e('If you have any pre-sale query, we are prepared to resolve it.', 'imperial-tours'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( imperial_tours_CONTACT ); ?>" target="_blank"><?php esc_html_e('Question', 'imperial-tours'); ?></a>
				</div>
		  	</div>
		  	<div class="col-3">		  		
		  		<h4><span class="dashicons dashicons-admin-customizer"></span><?php esc_html_e('Child Theme', 'imperial-tours'); ?></h4>
				<p> <?php esc_html_e('For theme file customizations, make modifications in the child theme and not in the main theme file.', 'imperial-tours'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( imperial_tours_CHILD_THEME ); ?>" target="_blank"><?php esc_html_e('About Child Theme', 'imperial-tours'); ?></a>
				</div>
		  	</div>

		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-admin-comments"></span><?php esc_html_e('Frequently Asked Questions', 'imperial-tours'); ?></h4>
				<p> <?php esc_html_e('We have gathered top most, frequently asked questions and answered them for your easy understanding. We will list down more as we get new challenging queries. Check back often.', 'imperial-tours'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( imperial_tours_FAQ ); ?>" target="_blank"><?php esc_html_e('View FAQ','imperial-tours'); ?></a>
				</div>
		  	</div>

		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-sos"></span><?php esc_html_e('Post-purchase Queries', 'imperial-tours'); ?></h4>
				<p> <?php esc_html_e('If you have any queries after purchase, you can contact us. We are eveready to help you out.', 'imperial-tours'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( imperial_tours_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Contact Us', 'imperial-tours'); ?></a>
				</div>
		  	</div>

		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-media-text"></span><?php esc_html_e('Theme Demo Content', 'imperial-tours'); ?></h4>
				<p> <?php esc_html_e('We are providing the demo content file within the theme folder.  You will require an importer plugin to import the demo content.', 'imperial-tours'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( imperial_tours_DEMO_DATA ); ?>" target="_blank"><?php esc_html_e('Demo Content', 'imperial-tours'); ?></a>
				</div>
		  	</div>
		</div>
	</div>
</div>
<?php } ?>