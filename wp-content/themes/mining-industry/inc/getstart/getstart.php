<?php
//about theme info
add_action( 'admin_menu', 'mining_industry_gettingstarted' );
function mining_industry_gettingstarted() {
	add_theme_page( esc_html__('About Mining Industry', 'mining-industry'), esc_html__('Theme Demo Import', 'mining-industry'), 'edit_theme_options', 'mining_industry_guide', 'mining_industry_mostrar_guide');
}

// Add a Custom CSS file to WP Admin Area
function mining_industry_admin_theme_style() {
	wp_enqueue_style('mining-industry-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getstart/getstart.css');
	wp_enqueue_script('mining-industry-tabs', esc_url(get_template_directory_uri()) . '/inc/getstart/js/tab.js');

	// Admin notice code START
	wp_register_script('mining-industry-notice', esc_url(get_template_directory_uri()) . '/inc/getstart/js/notice.js', array('jquery'), time(), true);
	wp_enqueue_script('mining-industry-notice');
	// Admin notice code END
}
add_action('admin_enqueue_scripts', 'mining_industry_admin_theme_style');

//guidline for about theme
function mining_industry_mostrar_guide() { 
	//custom function about theme customizer
	$mining_industry_return = add_query_arg( array()) ;
	$mining_industry_theme = wp_get_theme( 'mining-industry' );
?>

<div class="wrapper-info">
    <div class="col-left sshot-section">
    	<h2><?php esc_html_e( 'Welcome to Mining Industry ', 'mining-industry' ); ?> <span class="version"><?php esc_html_e( 'Version', 'mining-industry' ); ?>: <?php echo esc_html($mining_industry_theme['Version']);?></span></h2>
    	<p><?php esc_html_e('All our WordPress themes are modern, minimalist, 100% responsive, seo-friendly,feature-rich, and multipurpose that best suit designers, bloggers and other professionals who are working in the creative fields.','mining-industry'); ?></p>
    </div>

    <div class="col-right coupen-section">
    	<div class="logo-section">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/screenshot.png" alt="" />
		</div>
		<div class="logo-right">			
			<div class="update-now">
				<div class="theme-info">
					<div class="theme-info-left">
						<h2><?php esc_html_e('TRY PREMIUM','mining-industry'); ?></h2>
						<h4><?php esc_html_e('MINING INDUSTRY THEME','mining-industry'); ?></h4>
					</div>	
					<div class="theme-info-right"></div>
				</div>	
				<div class="dicount-row">
					<div class="disc-sec">	
						<h5 class="disc-text"><?php esc_html_e('GET THE FLAT DISCOUNT OF','mining-industry'); ?></h5>
						<h1 class="disc-per"><?php esc_html_e('20%','mining-industry'); ?></h1>	
					</div>
					<div class="coupen-info">
						<h5 class="coupen-code"><?php esc_html_e('"VWPRO20"','mining-industry'); ?></h5>
						<h5 class="coupen-text"><?php esc_html_e('USE COUPON CODE','mining-industry'); ?></h5>
						<div class="info-link">						
							<a href="<?php echo esc_url( MINING_INDUSTRY_BUY_NOW ); ?>" target="_blank"> <?php esc_html_e( 'UPGRADE TO PRO', 'mining-industry' ); ?></a>
						</div>	
					</div>	
				</div>				
			</div>
		</div>
		
    </div>

    <div class="tab-sec">
    	<div class="tab">
    		<button class="tablinks" onclick="mining_industry_open_tab(event, 'theme_offer')"><?php esc_html_e( 'Demo Importer', 'mining-industry' ); ?></button>
			<button class="tablinks" onclick="mining_industry_open_tab(event, 'lite_theme')"><?php esc_html_e( 'Setup With Customizer', 'mining-industry' ); ?></button>
			<button class="tablinks" onclick="mining_industry_open_tab(event, 'theme_pro')"><?php esc_html_e( 'Get Premium', 'mining-industry' ); ?></button>
  			<button class="tablinks" onclick="mining_industry_open_tab(event, 'free_pro')"><?php esc_html_e( 'Free VS Premium', 'mining-industry' ); ?></button>
  			<button class="tablinks" onclick="mining_industry_open_tab(event, 'get_bundle')"><?php esc_html_e( 'Get 500+ Themes Bundle at $119', 'mining-industry' ); ?></button>
		</div>

		<?php 
			$mining_industry_plugin_custom_css = '';
			if(class_exists('Ibtana_Visual_Editor_Menu_Class')){
				$mining_industry_plugin_custom_css ='display: block';
			}
		?>

		<div id="theme_offer" class="tabcontent open">
			<div class="demo-content">
				<h3><?php esc_html_e( 'Click the below run importer button to import demo content', 'mining-industry' ); ?></h3>
				<?php 
				/* Get Started. */ 
				require get_parent_theme_file_path( '/inc/getstart/demo-content.php' );
			 	?>
			</div> 	
		</div>

		<div id="lite_theme" class="tabcontent">
			<?php  if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
				$plugin_ins = Mining_Industry_Plugin_Activation_Settings::get_instance();
				$mining_industry_actions = $plugin_ins->recommended_actions;
				?>
				<div class="mining-industry-recommended-plugins">
				    <div class="mining-industry-action-list">
				        <?php if ($mining_industry_actions): foreach ($mining_industry_actions as $key => $mining_industry_actionValue): ?>
				                <div class="mining-industry-action" id="<?php echo esc_attr($mining_industry_actionValue['id']);?>">
			                        <div class="action-inner">
			                            <h3 class="action-title"><?php echo esc_html($mining_industry_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($mining_industry_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($mining_industry_actionValue['link']); ?>
			                            <a class="ibtana-skip-btn" get-start-tab-id="lite-theme-tab" href="javascript:void(0);"><?php esc_html_e('Skip','mining-industry'); ?></a>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php } ?>
			<div class="lite-theme-tab" style="<?php echo esc_attr($mining_industry_plugin_custom_css); ?>">
				<h3><?php esc_html_e( 'Lite Theme Information', 'mining-industry' ); ?></h3>
				<hr class="h3hr">
				<p><?php esc_html_e('The Mining Industry theme is a powerful and visually appealing template designed for businesses and professionals keen on establishing a website in the mining sector. It encompasses various areas including underground mining, open-pit mining, surface mining, mineral exploration, mineral extraction, and mining equipment supply. This theme meets the needs of companies involved in gold mining, coal mining, rare earth mining, metal mining, quarrying, mining logistics, and resource development, as well as mining contractors, consultants, engineers, suppliers, and junior mining companies. Featuring modern design elements, bold typography, industry-specific icons, and versatile layout options, it effectively presents essential aspects like drilling rigs, heavy machinery, geological surveys, mineral processing plants, and mine safety protocols. Additionally, it includes support for service sections, project portfolios, ESG initiatives, case studies, video backgrounds, and image galleries, which are perfect for showcasing mining consultancy, equipment manufacturing, and operational achievements. Optimized for responsiveness and SEO, it guarantees exceptional performance across devices and search engines. With real-time customization, one-click demo import, and interactive contact forms that integrate smoothly with the Contact Form 7 plugin, this theme facilitates seamless communication and lead generation. Ideal for crafting an industrial company profile, global mining project showcases, or a professional mining business website, it positions your brand as a leader in the international mining market, fostering trust, investments, and sustainable growth. Demo: https://www.vwthemes.net/mining-industry-pro/.','mining-industry'); ?></p>
			  	<div class="col-left-inner">
			  		<h4><?php esc_html_e( 'Theme Documentation', 'mining-industry' ); ?></h4>
					<p><?php esc_html_e( 'If you need any assistance regarding setting up and configuring the Theme, our documentation is there.', 'mining-industry' ); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( MINING_INDUSTRY_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'mining-industry' ); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Theme Customizer', 'mining-industry'); ?></h4>
					<p> <?php esc_html_e('To begin customizing your website, start by clicking "Customize".', 'mining-industry'); ?></p>
					<div class="info-link">
						<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'mining-industry'); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Having Trouble, Need Support?', 'mining-industry'); ?></h4>
					<p> <?php esc_html_e('Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme.', 'mining-industry'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( MINING_INDUSTRY_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'mining-industry'); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Reviews & Testimonials', 'mining-industry'); ?></h4>
					<p> <?php esc_html_e('All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'mining-industry'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( MINING_INDUSTRY_REVIEW ); ?>" target="_blank"><?php esc_html_e('Reviews', 'mining-industry'); ?></a>
					</div>

					<div class="link-customizer">
						<h3><?php esc_html_e( 'Link to customizer', 'mining-industry' ); ?></h3>
						<hr class="h3hr">
						<div class="first-row">
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','mining-industry'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-category"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=mining_industry_top_bar') ); ?>" target="_blank"><?php esc_html_e('Header','mining-industry'); ?></a>
								</div>
							</div>

							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-slides"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=mining_industry_slider_section') ); ?>" target="_blank"><?php esc_html_e('Slider Settings','mining-industry'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-category"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=mining_industry_project_section') ); ?>" target="_blank"><?php esc_html_e('Project Section','mining-industry'); ?></a>
								</div>
							</div>
						
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=mining_industry_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','mining-industry'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','mining-industry'); ?></a>
								</div>
							</div>
							
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=mining_industry_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','mining-industry'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=mining_industry_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','mining-industry'); ?></a>
								</div>
							</div>

							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','mining-industry'); ?></a>
								</div>
							</div>
						</div>
					</div>
			  	</div>
				<div class="col-right-inner">
					<h3 class="page-template"><?php esc_html_e('How to set up Home Page Template','mining-industry'); ?></h3>
				  	<hr class="h3hr">
					<p><?php esc_html_e('Follow these instructions to setup Home page.','mining-industry'); ?></p>
                  	<p><span class="strong"><?php esc_html_e('1. Create a new page :','mining-industry'); ?></span><?php esc_html_e(' Go to ','mining-industry'); ?>
					  	<b><?php esc_html_e(' Dashboard >> Pages >> Add New Page','mining-industry'); ?></b></p>
                  	<p><?php esc_html_e('Name it as "Home" then select the template "Custom Home Page".','mining-industry'); ?></p>
                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/home-page-template.png" alt="" />
                  	<p><span class="strong"><?php esc_html_e('2. Set the front page:','mining-industry'); ?></span><?php esc_html_e(' Go to ','mining-industry'); ?>
					  	<b><?php esc_html_e(' Settings >> Reading ','mining-industry'); ?></b></p>
				  	<p><?php esc_html_e('Select the option of Static Page, now select the page you created to be the homepage, while another page to be your default page.','mining-industry'); ?></p>
                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/set-front-page.png" alt="" />
                  	<p><?php esc_html_e(' Once you are done with setup, then follow the','mining-industry'); ?> <a class="doc-links" href="<?php echo esc_url( MINING_INDUSTRY_FREE_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation','mining-industry'); ?></a></p>
			  	</div>
			</div>
		</div>

		<div id="theme_pro" class="tabcontent">
		  	<h3><?php esc_html_e( 'Premium Theme Information', 'mining-industry' ); ?></h3>
			<hr class="h3hr">
		    <div class="col-left-pro">
		    	<p><?php esc_html_e('Designed specifically for companies and professionals in the mining industry, the Mining WordPress Theme delivers a modern and sophisticated online presence tailored to mineral extraction, geological surveys, and mining operations. Whether you’re in underground mining, surface mining, coal mining, or rare earth mining, this theme provides a clean and responsive layout that highlights your services, equipment, and project accomplishments. With retina-ready visuals, optimized code, and SEO-friendly features, it ensures fast load times and enhanced visibility. Showcase heavy machinery, mining trucks, drilling rigs, crushers, and mineral processing units effortlessly. Its customization options allow easy branding for mining contractors, consultants, and engineers. The theme supports testimonials, contact forms, and banners to engage clients, promote safety gear, and offer insights into mine planning or environmental impact assessments. Its also ideal for promoting sustainable mining practices and green mining initiatives. Integrated with social media and built on a secure, mobile-friendly framework, it’s perfect for any mining company aiming to stay ahead in the global mining market.','mining-industry'); ?></p>
		    </div>
		    <div class="col-right-pro">
		    	<div class="pro-links">
			    	<a href="<?php echo esc_url( MINING_INDUSTRY_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'mining-industry'); ?></a>
					<a href="<?php echo esc_url( MINING_INDUSTRY_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'mining-industry'); ?></a>
					<a href="<?php echo esc_url( MINING_INDUSTRY_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'mining-industry'); ?></a>
					<a href="<?php echo esc_url( MINING_INDUSTRY_THEME_BUNDLE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Get 500+ Themes Bundle at $119', 'mining-industry'); ?></a>
				</div>
		    	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/responsive.png" alt="" />
		    </div>
		</div>

		<div id="free_pro" class="tabcontent">
		  	<div class="featurebox">
			    <h3><?php esc_html_e( 'Theme Features', 'mining-industry' ); ?></h3>
				<hr class="h3hr">
				<div class="table-image">
					<table class="tablebox">
						<thead>
							<tr>
								<th> <?php esc_html_e('Features', 'mining-industry'); ?></th>
								<th><?php esc_html_e('Free Themes', 'mining-industry'); ?></th>
								<th><?php esc_html_e('Premium Themes', 'mining-industry'); ?></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php esc_html_e('Theme Customization', 'mining-industry'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Responsive Design', 'mining-industry'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Logo Upload', 'mining-industry'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Social Media Links', 'mining-industry'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Banner Settings', 'mining-industry'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Template Pages', 'mining-industry'); ?></td>
								<td class="table-img"><?php esc_html_e('3', 'mining-industry'); ?></td>
								<td class="table-img"><?php esc_html_e('10', 'mining-industry'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Home Page Template', 'mining-industry'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'mining-industry'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'mining-industry'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Theme sections', 'mining-industry'); ?></td>
								<td class="table-img"><?php esc_html_e('2', 'mining-industry'); ?></td>
								<td class="table-img"><?php esc_html_e('13', 'mining-industry'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Contact us Page Template / Support Templates', 'mining-industry'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('1', 'mining-industry'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Blog Templates & Layout', 'mining-industry'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('3(Full width/Left/Right Sidebar)', 'mining-industry'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Page Templates & Layout', 'mining-industry'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('3(Left/Right Sidebar)', 'mining-industry'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Color Pallete For Particular Sections', 'mining-industry'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Global Color Option', 'mining-industry'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Reordering', 'mining-industry'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Demo Importer', 'mining-industry'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Allow To Set Site Title, Tagline, Logo', 'mining-industry'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Enable Disable Options On All Sections, Logo', 'mining-industry'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Full Documentation', 'mining-industry'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Latest WordPress Compatibility', 'mining-industry'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Support 3rd Party Plugins', 'mining-industry'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Secure and Optimized Code', 'mining-industry'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Exclusive Functionalities', 'mining-industry'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Enable / Disable', 'mining-industry'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Section Google Font Choices', 'mining-industry'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Video Gallery', 'mining-industry'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Simple & Mega Menu Option', 'mining-industry'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Support to add custom CSS / JS ', 'mining-industry'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Shortcodes', 'mining-industry'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Background, Colors, Header, Logo & Menu', 'mining-industry'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Premium Membership', 'mining-industry'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Budget Friendly Value', 'mining-industry'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Priority Error Fixing', 'mining-industry'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Feature Addition', 'mining-industry'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('All Access Theme Pass', 'mining-industry'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Seamless Customer Support', 'mining-industry'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Mining Industry ', 'mining-industry'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Detail Services', 'mining-industry'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('About Business Page', 'mining-industry'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Team Member Page', 'mining-industry'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Project Description Page', 'mining-industry'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Support Page', 'mining-industry'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td></td>
								<td class="table-img"></td>
								<td class="update-link"><a href="<?php echo esc_url( MINING_INDUSTRY_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade to Pro', 'mining-industry'); ?></a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div id="get_bundle" class="tabcontent">		  	
		   	<div class="col-left-pro">
		   		<h3><?php esc_html_e( 'WP Theme Bundle', 'mining-industry' ); ?></h3>
		    	<p><?php esc_html_e('Enhance your website effortlessly with our WP Theme Bundle. Get access to 500+ premium WordPress themes and 5+ powerful plugins, all designed to meet diverse business needs. Enjoy seamless integration with any plugins, ultimate customization flexibility, and regular updates to keep your site current and secure. Plus, benefit from our dedicated customer support, ensuring a smooth and professional web experience.','mining-industry'); ?></p>
		    	<div class="feature">
		    		<h4><?php esc_html_e( 'Features:', 'mining-industry' ); ?></h4>
		    		<p><?php esc_html_e('500+ Premium Themes & 5+ Plugins.', 'mining-industry'); ?></p>
		    		<p><?php esc_html_e('Seamless Integration.', 'mining-industry'); ?></p>
		    		<p><?php esc_html_e('Customization Flexibility.', 'mining-industry'); ?></p>
		    		<p><?php esc_html_e('Regular Updates.', 'mining-industry'); ?></p>
		    		<p><?php esc_html_e('Dedicated Support.', 'mining-industry'); ?></p>
		    	</div>
		    	<p><?php esc_html_e('Upgrade now and give your website the professional edge it deserves, all at an unbeatable price of $119!', 'mining-industry'); ?></p>
		    	<div class="pro-links">
					<a href="<?php echo esc_url( MINING_INDUSTRY_THEME_BUNDLE_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Now', 'mining-industry'); ?></a>
					<a href="<?php echo esc_url( MINING_INDUSTRY_THEME_BUNDLE_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation', 'mining-industry'); ?></a>
				</div>
		   	</div>
		   	<div class="col-right-pro">
		    	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/bundle.png" alt="" />
		   	</div>		    
		</div>
	</div>
</div>

<?php } ?>