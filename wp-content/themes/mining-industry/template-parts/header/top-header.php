<?php
/**
 * The template part for Top Header
 *
 * @package Mining Industry 
 * @subpackage mining-industry
 * @since mining-industry 1.0
 */
?>

<div class="main-header <?php if( get_theme_mod( 'mining_industry_sticky_header', false) == 1) { ?> header-sticky"<?php } else { ?>close-sticky <?php } ?>">
  <div class="container">
    <div class="main-topbar py-3">
      <div class="row">
        <div class="col-xxl-2 col-xl-2 col-lg-2 col-md-4 col-sm-4 col-9 align-self-center">
          <div class="logo pb-0 pb-md-0">
            <?php if ( has_custom_logo() ) : ?>
              <div class="site-logo"><?php the_custom_logo(); ?></div>
            <?php endif; ?>
            <?php $mining_industry_blog_info = get_bloginfo( 'name' ); ?>
              <?php if ( ! empty( $mining_industry_blog_info ) ) : ?>
                <?php if ( is_front_page() && is_home() ) : ?>
                  <?php if( get_theme_mod('mining_industry_logo_title_hide_show',true) == 1){ ?>
                    <p class="site-title mb-0 text-start"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                  <?php } ?>
                <?php else : ?>
                  <?php if( get_theme_mod('mining_industry_logo_title_hide_show',true) == 1){ ?>
                    <p class="site-title mb-0 text-start"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                  <?php } ?>
                <?php endif; ?>
              <?php endif; ?>
              <?php
                $mining_industry_description = get_bloginfo( 'description', 'display' );
                if ( $mining_industry_description || is_customize_preview() ) :
              ?>
              <?php if( get_theme_mod('mining_industry_tagline_hide_show',false) == 1){ ?>
                <p class="site-description mb-0 text-start">
                  <?php echo esc_html($mining_industry_description); ?>
                </p>
              <?php } ?>
            <?php endif; ?>
          </div>
        </div>
        <div class="col-xxl-7 col-xl-6 col-lg-6 col-md-2 col-sm-2 col-3 align-self-center">
          <?php get_template_part('template-parts/header/navigation'); ?>
        </div>
        <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12 align-items-center d-flex justify-content-lg-end justify-content-md-end justify-content-sm-end justify-content-center gap-1 top-icons">
          <div class="search-box">
            <?php get_search_form(); ?>
          </div>
          <?php if ( get_theme_mod('mining_industry_topbar_button_url') != '' || get_theme_mod('mining_industry_topbar_button_label') != '' ) {?>
            <div class ="topbar-btn text-end">
              <a href="<?php echo esc_url(get_theme_mod('mining_industry_topbar_button_url'));?>" class="text-capitalize"><?php echo esc_html(get_theme_mod('mining_industry_topbar_button_label'));?>
              </a>
            </div>
          <?php }?>
        </div>
      </div>
    </div>
  </div>
</div>