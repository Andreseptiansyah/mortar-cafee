<?php
/**
 * Custom Social Widget
 */

class Mining_Industry_Social_Widget extends WP_Widget {
	
	function __construct() {
		parent::__construct(
			'Mining_Industry_Social_Widget',
			__('VW Social Icon', 'mining-industry'),
			array( 'description' => __( 'Widget for Social icons section', 'mining-industry' ), ) 
		);
	}

	public function widget( $mining_industry_args, $mining_industry_instance ) { ?>
		<div class="widget">
			<?php
			$mining_industry_title = isset( $mining_industry_instance['title'] ) ? $mining_industry_instance['title'] : '';
			$mining_industry_facebook = isset( $mining_industry_instance['facebook'] ) ? $mining_industry_instance['facebook'] : '';
			$mining_industry_twitter = isset( $mining_industry_instance['twitter'] ) ? $mining_industry_instance['twitter'] : '';
			$mining_industry_instagram = isset( $mining_industry_instance['instagram'] ) ? $mining_industry_instance['instagram'] : '';
			$mining_industry_youtube = isset( $mining_industry_instance['youtube'] ) ? $mining_industry_instance['youtube'] : '';
			$mining_industry_dribbal = isset( $mining_industry_instance['dribbal'] ) ? $mining_industry_instance['dribbal'] : '';
			$mining_industry_linkedin = isset( $mining_industry_instance['linkedin'] ) ? $mining_industry_instance['linkedin'] : '';
			$mining_industry_pinterest = isset( $mining_industry_instance['pinterest'] ) ? $mining_industry_instance['pinterest'] : '';
			$mining_industry_tumblr = isset( $mining_industry_instance['tumblr'] ) ? $mining_industry_instance['tumblr'] : '';
			

	        echo '<div class="custom-social-icons">';

	        if(!empty($mining_industry_title) ){ ?><h3 class="custom_title"><?php echo esc_html($mining_industry_title); ?></h3><?php } ?>
	        <?php if(!empty($mining_industry_facebook) ){ ?><p class="mb-0"><a class="custom_facebook fff" target= "_blank" href="<?php echo esc_url($mining_industry_facebook); ?>"><i class="fab fa-facebook-f"></i><span class="screen-reader-text"><?php esc_html_e( 'Facebook','mining-industry' );?></span></a></p><?php } ?>

	        <?php if(!empty($mining_industry_twitter) ){ ?><p class="mb-0"><a class="custom_twitter" target= "_blank" href="<?php echo esc_url($mining_industry_twitter); ?>"><i class="fa-brands fa-x-twitter"></i><span class="screen-reader-text"><?php esc_html_e( 'Twitter','mining-industry' );?></span></a></p><?php } ?>
	        
	        <?php if(!empty($mining_industry_instagram) ){ ?><p class="mb-0"><a class="custom_instagram" target= "_blank" href="<?php echo esc_url($mining_industry_instagram); ?>"><i class="fab fa-instagram"></i><span class="screen-reader-text"><?php esc_html_e( 'Instagram','mining-industry' );?></span></a></p><?php } ?>

	        <?php if(!empty($mining_industry_youtube) ){ ?><p class="mb-0"><a class="custom_youtube" target= "_blank" href="<?php echo esc_url($mining_industry_youtube); ?>"><i class="fab fa-youtube"></i><span class="screen-reader-text"><?php esc_html_e( 'Youtube','mining-industry' );?></span></a></p><?php } ?>

	        <?php if(!empty($mining_industry_dribbal) ){ ?><p class="mb-0"><a class="custom_dribbal" target= "_blank" href="<?php echo esc_url($mining_industry_dribbal); ?>"><i class="fa-solid fa-basketball"></i><span class="screen-reader-text"><?php esc_html_e( 'Dribbal','mining-industry' );?></span></a></p><?php } ?>

	        <?php if(!empty($mining_industry_linkedin) ){ ?><p class="mb-0"><a class="custom_linkedin" target= "_blank" href="<?php echo esc_url($mining_industry_linkedin); ?>"><i class="fab fa-linkedin-in"></i><span class="screen-reader-text"><?php esc_html_e( 'Linkedin','mining-industry' );?></span></a></p><?php } ?>
	        

	        <?php if(!empty($mining_industry_pinterest) ){ ?><p class="mb-0"><a class="custom_pinterest" target= "_blank" href="<?php echo esc_url($mining_industry_pinterest); ?>"><i class="fab fa-pinterest-p"></i><span class="screen-reader-text"><?php esc_html_e( 'Pinterest','mining-industry' );?></span></a></p><?php } ?>
	        

	        <?php if(!empty($mining_industry_tumblr) ){ ?><p class="mb-0"><a class="custom_tumblr" target= "_blank" href="<?php echo esc_url($mining_industry_tumblr); ?>"><i class="fab fa-tumblr"></i><span class="screen-reader-text"><?php esc_html_e( 'Tumblr','mining-industry' );?></span></a></p><?php } ?>

	        <?php echo '</div>';
			?>
		</div>
		<?php
	}
	
	// Widget Backend 
	public function form( $mining_industry_instance ) {

		$mining_industry_title= ''; $mining_industry_facebook = ''; $mining_industry_twitter = ''; $mining_industry_linkedin = '';  $mining_industry_pinterest = '';$mining_industry_tumblr = ''; $mining_industry_instagram = ''; $mining_industry_youtube = ''; 

		$mining_industry_title = isset( $mining_industry_instance['title'] ) ? $mining_industry_instance['title'] : '';
		$mining_industry_facebook = isset( $mining_industry_instance['facebook'] ) ? $mining_industry_instance['facebook'] : '';
		$mining_industry_instagram = isset( $mining_industry_instance['instagram'] ) ? $mining_industry_instance['instagram'] : '';
		$mining_industry_twitter = isset( $mining_industry_instance['twitter'] ) ? $mining_industry_instance['twitter'] : '';
		$mining_industry_youtube = isset( $mining_industry_instance['youtube'] ) ? $mining_industry_instance['youtube'] : '';
		$mining_industry_dribbal = isset( $mining_industry_instance['dribbal'] ) ? $mining_industry_instance['dribbal'] : '';
		$mining_industry_linkedin = isset( $mining_industry_instance['linkedin'] ) ? $mining_industry_instance['linkedin'] : '';
		$mining_industry_pinterest = isset( $mining_industry_instance['pinterest'] ) ? $mining_industry_instance['pinterest'] : '';
		$mining_industry_tumblr = isset( $mining_industry_instance['tumblr'] ) ? $mining_industry_instance['tumblr'] : '';
		
		?>
		<p>
        <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:','mining-industry'); ?></label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($mining_industry_title); ?>">
    	</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('facebook')); ?>"><?php esc_html_e('Facebook:','mining-industry'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('facebook')); ?>" name="<?php echo esc_attr($this->get_field_name('facebook')); ?>" type="text" value="<?php echo esc_attr($mining_industry_facebook); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('twitter')); ?>"><?php esc_html_e('Twitter:','mining-industry'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('twitter')); ?>" name="<?php echo esc_attr($this->get_field_name('twitter')); ?>" type="text" value="<?php echo esc_attr($mining_industry_twitter); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('instagram')); ?>"><?php esc_html_e('Instagram:','mining-industry'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('instagram')); ?>" name="<?php echo esc_attr($this->get_field_name('instagram')); ?>" type="text" value="<?php echo esc_attr($mining_industry_instagram); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('youtube')); ?>"><?php esc_html_e('Youtube:','mining-industry'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('youtube')); ?>" name="<?php echo esc_attr($this->get_field_name('youtube')); ?>" type="text" value="<?php echo esc_attr($mining_industry_youtube); ?>">
		</p>
		<label for="<?php echo esc_attr($this->get_field_id('dribbal')); ?>"><?php esc_html_e('Dribbal:','mining-industry'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('dribbal')); ?>" name="<?php echo esc_attr($this->get_field_name('dribbal')); ?>" type="text" value="<?php echo esc_attr($mining_industry_dribbal); ?>">
		</p>

		<label for="<?php echo esc_attr($this->get_field_id('linkedin')); ?>"><?php esc_html_e('Linkedin:','mining-industry'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('linkedin')); ?>" name="<?php echo esc_attr($this->get_field_name('linkedin')); ?>" type="text" value="<?php echo esc_attr($mining_industry_linkedin); ?>">
		</p>
		<p>
		
		<label for="<?php echo esc_attr($this->get_field_id('pinterest')); ?>"><?php esc_html_e('Pinterest:','mining-industry'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('pinterest')); ?>" name="<?php echo esc_attr($this->get_field_name('pinterest')); ?>" type="text" value="<?php echo esc_attr($mining_industry_pinterest); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('tumblr')); ?>"><?php esc_html_e('Tumblr:','mining-industry'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('tumblr')); ?>" name="<?php echo esc_attr($this->get_field_name('tumblr')); ?>" type="text" value="<?php echo esc_attr($mining_industry_tumblr); ?>">
		</p>
		<p>
		
		<?php 
	}
	
	public function update( $mining_industry_new_instance, $mining_industry_old_instance ) {
		$mining_industry_instance = array();
		$mining_industry_instance['title'] = (!empty($mining_industry_new_instance['title']) ) ? strip_tags($mining_industry_new_instance['title']) : '';	
        $mining_industry_instance['facebook'] = (!empty($mining_industry_new_instance['facebook']) ) ? esc_url_raw($mining_industry_new_instance['facebook']) : '';
        $mining_industry_instance['twitter'] = (!empty($mining_industry_new_instance['twitter']) ) ? esc_url_raw($mining_industry_new_instance['twitter']) : '';
        $mining_industry_instance['instagram'] = (!empty($mining_industry_new_instance['instagram']) ) ? esc_url_raw($mining_industry_new_instance['instagram']) : '';
        $mining_industry_instance['youtube'] = (!empty($mining_industry_new_instance['youtube']) ) ? esc_url_raw($mining_industry_new_instance['youtube']) : '';
        $mining_industry_instance['dribbal'] = (!empty($mining_industry_new_instance['dribbal']) ) ? esc_url_raw($mining_industry_new_instance['dribbal']) : '';
        $mining_industry_instance['linkedin'] = (!empty($mining_industry_new_instance['linkedin']) ) ? esc_url_raw($mining_industry_new_instance['linkedin']) : '';
        $mining_industry_instance['pinterest'] = (!empty($mining_industry_new_instance['pinterest']) ) ? esc_url_raw($mining_industry_new_instance['pinterest']) : '';
        $mining_industry_instance['tumblr'] = (!empty($mining_industry_new_instance['tumblr']) ) ? esc_url_raw($mining_industry_new_instance['tumblr']) : '';
		return $mining_industry_instance;
	}
}

function mining_industry_custom_load_widget() {
	register_widget( 'Mining_Industry_Social_Widget' );
}
add_action( 'widgets_init', 'mining_industry_custom_load_widget' );