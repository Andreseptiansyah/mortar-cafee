<div class="theme-offer">
	<?php 
        // Check if the demo import has been completed
        $mining_industry_demo_import_completed = get_option('mining_industry_demo_import_completed', false);

        // If the demo import is completed, display the "View Site" button
        if ($mining_industry_demo_import_completed) {
        echo '<p class="notice-text">' . esc_html__('Your demo import has been completed successfully.', 'mining-industry') . '</p>';
        echo '<span><a href="' . esc_url(home_url()) . '" class="button button-primary site-btn" target="_blank">' . esc_html__('View Site', 'mining-industry') . '</a></span>';
        }

		// POST and update the customizer and other related data
        if (isset($_POST['submit'])) {

        // Check if ibtana visual editor is installed and activated
        if (!is_plugin_active('ibtana-visual-editor/plugin.php')) {
          // Install the plugin if it doesn't exist
          $mining_industry_plugin_slug = 'ibtana-visual-editor';
          $mining_industry_plugin_file = 'ibtana-visual-editor/plugin.php';

          // Check if plugin is installed
          $mining_industry_installed_plugins = get_plugins();
          if (!isset($mining_industry_installed_plugins[$mining_industry_plugin_file])) {
              include_once(ABSPATH . 'wp-admin/includes/plugin-install.php');
              include_once(ABSPATH . 'wp-admin/includes/file.php');
              include_once(ABSPATH . 'wp-admin/includes/misc.php');
              include_once(ABSPATH . 'wp-admin/includes/class-wp-upgrader.php');

              // Install the plugin
              $mining_industry_upgrader = new Plugin_Upgrader();
              $mining_industry_upgrader->install('https://downloads.wordpress.org/plugin/ibtana-visual-editor.latest-stable.zip');
          }
          // Activate the plugin
          activate_plugin($mining_industry_plugin_file);
        }  

        // ------- Create Nav Menu --------
        $mining_industry_menuname = 'Main Menus';
        $mining_industry_bpmenulocation = 'primary';
        $mining_industry_menu_exists = wp_get_nav_menu_object($mining_industry_menuname);

        if (!$mining_industry_menu_exists) {
            $mining_industry_menu_id = wp_create_nav_menu($mining_industry_menuname);

            // Create Home Page
            $mining_industry_home_title = 'Home';
            $mining_industry_home = array(
                'post_type' => 'page',
                'post_title' => $mining_industry_home_title,
                'post_content' => '',
                'post_status' => 'publish',
                'post_author' => 1,
                'post_slug' => 'home'
            );
            $mining_industry_home_id = wp_insert_post($mining_industry_home);
            // Assign Home Page Template
            add_post_meta($mining_industry_home_id, '_wp_page_template', 'page-template/custom-home-page.php');
            // Update options to set Home Page as the front page
            update_option('page_on_front', $mining_industry_home_id);
            update_option('show_on_front', 'page');
            // Add Home Page to Menu
            wp_update_nav_menu_item($mining_industry_menu_id, 0, array(
                'menu-item-title' => __('Home', 'mining-industry'),
                'menu-item-classes' => 'home',
                'menu-item-url' => home_url('/'),
                'menu-item-status' => 'publish',
                'menu-item-object-id' => $mining_industry_home_id,
                'menu-item-object' => 'page',
                'menu-item-type' => 'post_type'
            ));


            // Create About Us Page with Dummy Content
            $mining_industry_about_title = 'About Us';
            $mining_industry_about_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...<br>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br>
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text.<br>
            All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
            $mining_industry_about = array(
                'post_type' => 'page',
                'post_title' => $mining_industry_about_title,
                'post_content' => $mining_industry_about_content,
                'post_status' => 'publish',
                'post_author' => 1,
                'post_slug' => 'about-us'
            );
            $mining_industry_about_id = wp_insert_post($mining_industry_about);
            // Add About Us Page to Menu
            wp_update_nav_menu_item($mining_industry_menu_id, 0, array(
                'menu-item-title' => __('About Us', 'mining-industry'),
                'menu-item-classes' => 'about-us',
                'menu-item-url' => home_url('/about-us/'),
                'menu-item-status' => 'publish',
                'menu-item-object-id' => $mining_industry_about_id,
                'menu-item-object' => 'page',
                'menu-item-type' => 'post_type'
            ));
             
            // Create Services Page with Dummy Content
            $mining_industry_about_title = 'Services';
            $mining_industry_about_content = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...<br>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br>
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isnt anything embarrassing hidden in the middle of text.<br>
            All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
            $mining_industry_about = array(
                'post_type' => 'page',
                'post_title' => $mining_industry_about_title,
                'post_content' => $mining_industry_about_content,
                'post_status' => 'publish',
                'post_author' => 1,
                'post_slug' => 'about-us'
            );
            $mining_industry_about_id = wp_insert_post($mining_industry_about);
            // Add Services Page to Menu
            wp_update_nav_menu_item($mining_industry_menu_id, 0, array(
                'menu-item-title' => __('Services', 'mining-industry'),
                'menu-item-classes' => 'about-us',
                'menu-item-url' => home_url('/about-us/'),
                'menu-item-status' => 'publish',
                'menu-item-object-id' => $mining_industry_about_id,
                'menu-item-object' => 'page',
                'menu-item-type' => 'post_type'
            ));

            // Create Pages Page with Dummy Content
            $mining_industry_pages_title = 'Pages';
            $mining_industry_pages_content = '
            Explore all the pages we have on our website. Find information about our services, company, and more.
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960 with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.<br>
            All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.';
            $mining_industry_pages = array(
                'post_type' => 'page',
                'post_title' => $mining_industry_pages_title,
                'post_content' => $mining_industry_pages_content,
                'post_status' => 'publish',
                'post_author' => 1,
                'post_slug' => 'pages'
            );
            $mining_industry_pages_id = wp_insert_post($mining_industry_pages);
            // Add Pages Page to Menu
            wp_update_nav_menu_item($mining_industry_menu_id, 0, array(
                'menu-item-title' => __('Pages', 'mining-industry'),
                'menu-item-classes' => 'pages',
                'menu-item-url' => home_url('/pages/'),
                'menu-item-status' => 'publish',
                'menu-item-object-id' => $mining_industry_pages_id,
                'menu-item-object' => 'page',
                'menu-item-type' => 'post_type'
            ));

            // Create Blog Page 
                $mining_industry_blog_page_title = 'Blog';

                $mining_industry_blog_page_query = new WP_Query(array(
                    'post_type'      => 'page',
                    'name'           => sanitize_title($mining_industry_blog_page_title),
                    'post_status'    => 'publish',
                    'posts_per_page' => 1
                ));
                if (!$mining_industry_blog_page_query->have_posts()) {
                    $mining_industry_blog_page = array(
                        'post_type'   => 'page',
                        'post_title'  => $mining_industry_blog_page_title,
                        'post_status' => 'publish',
                        'post_author' => 1,
                    );
                    $mining_industry_blog_page_id = wp_insert_post($mining_industry_blog_page);
                    update_option('page_for_posts', $mining_industry_blog_page_id);

                    wp_update_nav_menu_item($mining_industry_menu_id, 0, array(
                        'menu-item-title'      => __('Blog', 'mining-industry'),
                        'menu-item-url'        => get_permalink($mining_industry_blog_page_id),
                        'menu-item-status'     => 'publish',
                        'menu-item-object-id'  => $mining_industry_blog_page_id,
                        'menu-item-object'     => 'page',
                        'menu-item-type'       => 'post_type',
                    ));
                }

            // Set the menu location if it's not already set
            if (!has_nav_menu($mining_industry_bpmenulocation)) {
                $mining_industry_locations = get_theme_mod('nav_menu_locations'); // Use 'nav_menu_locations' to get locations array
                if (empty($mining_industry_locations)) {
                    $mining_industry_locations = array();
                }
                $mining_industry_locations[$mining_industry_bpmenulocation] = $mining_industry_menu_id;
                set_theme_mod('nav_menu_locations', $mining_industry_locations);
            }
        }

        // Set the demo import completion flag
		update_option('mining_industry_demo_import_completed', true);
		// Display success message and "View Site" button
		echo '<p class="notice-text">' . esc_html__('Your demo import has been completed successfully.', 'mining-industry') . '</p>';
		echo '<span><a href="' . esc_url(home_url()) . '" class="button button-primary site-btn" target="_blank">' . esc_html__('View Site', 'mining-industry') . '</a></span>';
        //end 

        // Header
        set_theme_mod( 'mining_industry_topbar_button_label', 'Book Now' );
        set_theme_mod( 'mining_industry_topbar_button_url', '#' );
        
        // Slider
        set_theme_mod( 'mining_industry_slide_number', '3' );
 
        for($mining_industry_i=1; $mining_industry_i<=3; $mining_industry_i++) {       
            set_theme_mod( 'mining_industry_slider_bg_img'.$mining_industry_i, get_template_directory_uri().'/assets/images/slider-bg' . $mining_industry_i . '.png' );
            set_theme_mod( 'mining_industry_slider_small_title'.$mining_industry_i, 'Mining WordPress Theme' );
            set_theme_mod( 'mining_industry_slider_title'.$mining_industry_i, 'Professional Team Delivering High-Quality Mining Services' );
            set_theme_mod( 'mining_industry_slider_text'.$mining_industry_i, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industrys standard dummy text ever since the 1500s, when an unknown printer took a galley of type.' );     
            set_theme_mod( 'mining_industry_banner_button_label'.$mining_industry_i, 'Explore More' );
            set_theme_mod( 'mining_industry_banner_button_url'.$mining_industry_i, '#' );
        }

        // Project Section
        set_theme_mod( 'mining_industry_project_section_text', 'Our Projects' );
        set_theme_mod( 'mining_industry_project_section_title', 'Our Incredible Projects' );
        set_theme_mod( 'mining_industry_project_section_content', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.' );
        set_theme_mod('mining_industry_project_category', 'Project1');

        // Define post category names and post titles
        $mining_industry_category_names = array('Project1', 'Project2');
        $mining_industry_title_array = array(
            array("Project Name Here", "Project Name Here", "Project Name Here", "Project Name Here","Project Name Here"),
            array("Project Name Here", "Project Name Here", "Project Name Here", "Project Name Here","Project Name Here"),
            array("Project Name Here", "Project Name Here", "Project Name Here", "Project Name Here","Project Name Here"),
            array("Project Name Here", "Project Name Here", "Project Name Here", "Project Name Here","Project Name Here")
        );

        foreach ($mining_industry_category_names as $mining_industry_index => $mining_industry_category_name) {
            // Create or retrieve the post category term ID
            $mining_industry_term = term_exists($mining_industry_category_name, 'category');
            if ($mining_industry_term === 0 || $mining_industry_term === null) {
                // If the term does not exist, create it
                $mining_industry_term = wp_insert_term($mining_industry_category_name, 'category');
            }
            if (is_wp_error($mining_industry_term)) {
                error_log('Error creating category: ' . $mining_industry_term->get_error_message());
                continue; // Skip to the next iteration if category creation fails
            }

            for ($mining_industry_i = 0; $mining_industry_i < 5; $mining_industry_i++) {
                // Create post content
                $mining_industry_title = $mining_industry_title_array[$mining_industry_index][$mining_industry_i];
                $mining_industry_content = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.';

                // Create post post object
                $mining_industry_my_post = array(
                    'post_title'    => wp_strip_all_tags($mining_industry_title),
                    'post_content'  => $mining_industry_content,
                    'post_status'   => 'publish',
                    'post_type'     => 'post', // Post type set to 'post'
                );

                // Insert the post into the database
                $mining_industry_post_id = wp_insert_post($mining_industry_my_post);

                if (is_wp_error($mining_industry_post_id)) {
                    error_log('Error creating post: ' . $mining_industry_post_id->get_error_message());
                    continue; // Skip to the next post if creation fails
                }

                // Assign the category to the post
                wp_set_post_categories($mining_industry_post_id, array((int)$mining_industry_term['term_id']));

                // Handle the featured image using media_sideload_image
                $mining_industry_image_url = get_template_directory_uri() . '/assets/images/service' . ($mining_industry_i + 1) . '.png';
                $mining_industry_image_id = media_sideload_image($mining_industry_image_url, $mining_industry_post_id, null, 'id');

                if (is_wp_error($mining_industry_image_id)) {
                    error_log('Error downloading image: ' . $mining_industry_image_id->get_error_message());
                    continue; // Skip to the next post if image download fails
                }
                // Assign featured image to post
                set_post_thumbnail($mining_industry_post_id, $mining_industry_image_id);
            }
        }
                echo "<script>window.location.href='" . admin_url('themes.php?page=mining_industry_guide') . "';</script>";
                //Copyright Text
                set_theme_mod( 'mining_industry_footer_text', 'By VWThemes' );       
        }
    ?>
  
	<p><?php esc_html_e('Please back up your website if it’s already live with data. This importer will overwrite your existing settings with the new customizer values for Mining Industry', 'mining-industry'); ?></p>
    <form action="<?php echo esc_url(home_url()); ?>/wp-admin/themes.php?page=mining_industry_guide" method="POST" onsubmit="return validate(this);">
        <?php if (!get_option('mining_industry_demo_import_completed')) : ?>
            <input class="run-import" type="submit" name="submit" value="<?php esc_attr_e('Run Importer', 'mining-industry'); ?>" class="button button-primary button-large">
        <?php endif; ?>
        <div id="spinner" style="display:none;">         
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/spinner.png" alt="" />
        </div>
    </form>
    <script type="text/javascript">
        function validate(form) {
            if (confirm("Do you really want to import the theme demo content?")) {
                // Show the spinner
                document.getElementById('spinner').style.display = 'block';
                // Allow the form to be submitted
                return true;
            } 
            else {
                return false;
            }
        }
    </script>
</div>
