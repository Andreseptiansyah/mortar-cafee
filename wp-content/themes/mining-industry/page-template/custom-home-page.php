<?php
/**
 * Template Name: Custom Home Page
 */
get_header();

?>
<!-- banner section -->
<main id="maincontent" role="main">
  
  <?php do_action( 'mining_industry_above_slider' ); ?>
  <?php if (get_theme_mod('mining_industry_hide_show_slider_section', true)) { ?>
    <?php 
      $mining_industry_number = get_theme_mod('mining_industry_slide_number');
      if($mining_industry_number != ''){
    ?>
    <section class="slider-section position-relative">
      <div id="slider" class="mw-100 m-auto p-0">
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-bs-ride="carousel" data-interval="false" data-bs-pause="false">
          <!-- Slider Items -->
          <div class="carousel-inner" role="listbox">
            <?php for ($mining_industry_i = 1; $mining_industry_i <= $mining_industry_number; $mining_industry_i++) { ?>
              <div class="carousel-item <?php echo esc_attr($mining_industry_i) == 1 ? 'active' : ''; ?>">
                <?php if (get_theme_mod('mining_industry_slider_bg_img' . $mining_industry_i) != "") { ?>
                  <div class="slider-img position-relative">
                    <img class="slider-carousel-img" src="<?php echo esc_url(get_theme_mod('mining_industry_slider_bg_img' . $mining_industry_i)); ?>" alt="<?php echo esc_attr( sprintf( __( 'Slide %d', 'mining-industry' ), $mining_industry_i ) ); ?>">
                    <div class="slider-overlay position-absolute"></div>
                  </div>
                <?php } ?>
                <div class="carousel-caption">
                  <div class="container">
                    <div class="inner_carousel text-start">
                      <?php if (get_theme_mod('mining_industry_slider_small_title' . $mining_industry_i) != '') { ?>
                        <p class="slider-small-title text-capitalize"><?php echo esc_html(get_theme_mod('mining_industry_slider_small_title' . $mining_industry_i)); ?></p>
                      <?php } ?>
                      <?php if (get_theme_mod('mining_industry_slider_title' . $mining_industry_i) != '') { ?>
                        <h1 class="slider-title text-capitalize"><?php echo esc_html(get_theme_mod('mining_industry_slider_title' . $mining_industry_i)); ?></h1>
                      <?php } ?>
                      <?php if (get_theme_mod('mining_industry_slider_text' . $mining_industry_i) != '') { ?>
                        <p class="slider-text mt-3 mb-5"><?php echo esc_html(get_theme_mod('mining_industry_slider_text' . $mining_industry_i)); ?></p>
                      <?php } ?>
                      <?php if ( get_theme_mod('mining_industry_banner_button_label'.$mining_industry_i) != '' ) {?>
                        <div class ="banner-btn">
                          <a href="<?php echo esc_url(get_theme_mod('mining_industry_banner_button_url'.$mining_industry_i));?>" class="text-capitalize"><?php echo esc_html(get_theme_mod('mining_industry_banner_button_label'.$mining_industry_i));?>
                          </a>
                        </div>
                      <?php }?>
                    </div>
                  </div>
                </div>
              </div>
            <?php } ?>
          </div>
          <!-- Pagination Counter -->
          <div class="slider-pagination">
            <span id="slider-current">01</span> / <span id="slider-total"><?php echo str_pad($mining_industry_number, 2, '0', STR_PAD_LEFT); ?></span>
          </div>
          <!-- Navigation Controls -->
          <div class="slider-main-nav position-absolute">
            <div class="slider-navigation">
              <div class="slider-arrows">
                <a class="carousel-control-prev" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev" role="button">
                  <span class="carousel-control-prev-icon w-auto h-auto" aria-hidden="true"><i class="<?php echo esc_attr(get_theme_mod('mining_industry_slider_previous_icon','fa-solid fa-caret-left')); ?>" ></i></span>
                  <span class="screen-reader-text"><?php esc_html_e( 'Previous','mining-industry' );?></span>
                </a>
              </div>
              <div class="slider-indicator carousel-indicators text-center carousel slide"  class="carousel slide" data-bs-ride="carousel">
                <?php for ($mining_industry_i=1; $mining_industry_i<=$mining_industry_number; $mining_industry_i++) {?>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="<?php echo esc_html($mining_industry_i-1); ?>" <?php if ($mining_industry_i == 1) { echo 'class="indicator active"'; } ?> >
                    <?php if( get_theme_mod('mining_industry_slider_bg_img'.$mining_industry_i)) { ?>
                      <div class="dot-image">
                        <img src="<?php echo esc_url(get_theme_mod('mining_industry_slider_bg_img'.$mining_industry_i)); ?>" alt="<?php echo esc_attr('Slider Image', 'mining-industry'); ?>">
                      </div>
                    <?php }?>
                 </button>
               <?php }?>
              </div>
              <div class="slider-arrows">
                <a class="carousel-control-next" data-bs-target="#carouselExampleIndicators" data-bs-slide="next" role="button">
                  <span class="carousel-control-next-icon w-auto h-auto" aria-hidden="true"><i class="<?php echo esc_attr(get_theme_mod('mining_industry_slider_next_icon','fa-solid fa-caret-right')); ?>" ></i></span>
                  <span class="screen-reader-text"><?php esc_html_e( 'Next','mining-industry' );?></span>
                </a> 
              </div> 
            </div>
          </div>
        </div>
      </div>
    </section>
  <?php }}?>
  <?php do_action( 'mining_industry_below_slider' ); ?>

  <!-- Project Section -->
  <?php if (get_theme_mod('mining_industry_project_section_hide_show', true)){ ?>
    <section id="project-section" class="py-5">
      <div class="container">
        <div class="project-sec-content mb-4">
          <?php if(get_theme_mod('mining_industry_project_section_text') != '') {?>
            <p class="small-text mb-2 text-capitalize"><?php echo esc_html(get_theme_mod('mining_industry_project_section_text')) ?></p>
          <?php }?>
          <?php if(get_theme_mod('mining_industry_project_section_title') != '') {?>
            <h2 class="section-title text-capitalize my-2"><?php echo esc_html(get_theme_mod('mining_industry_project_section_title')) ?></h2>
          <?php }?>
          <?php if(get_theme_mod('mining_industry_project_section_content') != '') {?>
            <p class="section-content"><?php echo esc_html(get_theme_mod('mining_industry_project_section_content')) ?></p>
          <?php }?>
        </div>
        <div class="owl-carousel">
          <?php
            $mining_industry_catdata=  get_theme_mod('mining_industry_project_category');
            if($mining_industry_catdata){
            $mining_industry_page_query = new WP_Query(array(
              'category_name' => esc_html($mining_industry_catdata, 'mining-industry')
            ));  
          ?>         
          <?php while( $mining_industry_page_query->have_posts() ) : $mining_industry_page_query->the_post(); ?>
            <div class="project-box">
              <div class="project-img mb-3">
                <?php if(has_post_thumbnail()){ ?>
                  <?php the_post_thumbnail(); ?>
                <?php } else {?>
                  <img src="<?php echo esc_url(get_template_directory_uri()) ?>/assets/images/post-image.png" alt="<?php echo esc_attr('Post Image', 'mining-industry'); ?>">
                <?php }?>
              </div>
              <div class="articles">
                <h5 class="project-title text-capitalize"><a href="<?php the_permalink(); ?>"><?php the_title();?><span class="screen-reader-text"><?php the_title(); ?></span></a></h5>
                <p class="post-para mb-0">
                  <?php 
                    $mining_industry_excerpt = get_the_excerpt(); 
                    echo esc_html(wp_trim_words($mining_industry_excerpt, 10)); 
                  ?>
                </p>
              </div>
            </div>
          <?php endwhile;
            wp_reset_postdata();
          }?>
        </div>
      </div>
    </section>
  <?php }?>
  <?php do_action( 'mining_industry_after_service' ); ?>

  <div id="content-vw" class="entry-content">
    <div class="container">
      <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; // end of the loop. 
      ?>
    </div>
  </div>
</main>

<?php get_footer(); ?> 