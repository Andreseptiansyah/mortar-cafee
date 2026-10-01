<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Mining Industry 
 */
?>
<div  class="sidebar <?php if( get_theme_mod( 'mining_industry_sticky_sidebar', false) == 1) { ?> sidebar-sticky"<?php } else { ?>close-sticky <?php } ?>">
    <div class="footer <?php if( get_theme_mod( 'mining_industry_sticky_sidebar', false) == 1) { ?> sidebar-sticky"<?php } else { ?>close-sticky <?php } ?>">
        <div id="sidebar" class="wow zoomInUp delay-1000" data-wow-duration="2s" <?php if( is_page_template('blog-post-left-sidebar.php')){?> style="float:left;"<?php } ?>>    
            <?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>
                <aside id="search" class="widget" role="complementary" aria-label="<?php esc_attr_e( 'firstsidebar', 'mining-industry' ); ?>">
                    <h3 class="widget-title"><?php esc_html_e( 'Search', 'mining-industry' ); ?></h3>
                    <?php get_search_form(); ?>
                </aside>
                <aside id="archives" class="widget" role="complementary" aria-label="<?php esc_attr_e( 'secondsidebar', 'mining-industry' ); ?>">
                    <h3 class="widget-title"><?php esc_html_e( 'Archives', 'mining-industry' ); ?></h3>
                    <ul>
                        <?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
                    </ul>
                </aside>
                <aside id="meta" class="widget" role="complementary" aria-label="<?php esc_attr_e( 'thirdsidebar', 'mining-industry' ); ?>">
                    <h3 class="widget-title"><?php esc_html_e( 'Meta', 'mining-industry' ); ?></h3>
                    <ul>
                        <?php wp_register(); ?>
                        <li><?php wp_loginout(); ?></li>
                        <?php wp_meta(); ?>
                    </ul>
                </aside>
                <aside id="categories" class="widget" role="complementary" aria-label="<?php esc_attr_e( 'forthsidebar', 'mining-industry' ); ?>"> 
                    <h3 class="widget-title"><?php esc_html_e( 'Categories', 'mining-industry' ); ?></h3>          
                    <ul>
                        <?php wp_list_categories('title_li=');  ?>
                    </ul>
                </aside>
                <aside id="categories-dropdown" class="widget" role="complementary" aria-label="<?php esc_attr_e( 'fifthsidebar', 'mining-industry' ); ?>">
                    <h3 class="widget-title"><?php esc_html_e( 'Dropdown Categories', 'mining-industry' ); ?></h3>
                    <ul>
                        <?php wp_dropdown_categories('title_li=');  ?>
                    </ul>
                </aside>
                <aside id="tag-cloud-sec" class="widget" role="complementary" aria-label="<?php esc_attr_e( 'sixthsidebar', 'mining-industry' ); ?>">
                    <h3 class="widget-title"><?php esc_html_e( 'Tag Cloud', 'mining-industry' ); ?></h3>
                    <ul>
                        <?php wp_tag_cloud('title_li=');  ?>
                    </ul>
                </aside>
            <?php endif; ?>
        </div> 
    </div>  
</div>      