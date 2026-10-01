<?php
/**
 * Custom Contact us Widget
 */

class Mining_Industry_Contact_Widget extends WP_Widget {
	function __construct() {
		parent::__construct(
			'Mining_Industry_Contact_Widget', 
			__('VW Contact us', 'mining-industry'),
			array( 'description' => __( 'Widget for contact us section in sidebar', 'mining-industry' ), ) 
		);
	}
	
	public function widget( $mining_industry_args, $mining_industry_instance ) {
		?>
		<aside class="widget">
			<?php
			$mining_industry_title = isset( $mining_industry_instance['title'] ) ? $mining_industry_instance['title'] : '';
			$mining_industry_phone = isset( $mining_industry_instance['phone'] ) ? $mining_industry_instance['phone'] : '';
			$mining_industry_email = isset( $mining_industry_instance['email'] ) ? $mining_industry_instance['email'] : '';
			$mining_industry_address = isset( $mining_industry_instance['address'] ) ? $mining_industry_instance['address'] : '';
			$mining_industry_timing = isset( $mining_industry_instance['timing'] ) ? $mining_industry_instance['timing'] : '';
			$mining_industry_longitude = isset( $mining_industry_instance['longitude'] ) ? $mining_industry_instance['longitude'] : '';
			$mining_industry_latitude = isset( $mining_industry_instance['latitude'] ) ? $mining_industry_instance['latitude'] : '';
			$mining_industry_contact_form = isset( $mining_industry_instance['contact_form'] ) ? $mining_industry_instance['contact_form'] : '';

	        echo '<div class="custom-contact-us">';
	        if(!empty($mining_industry_title) ){ ?><h3 class="custom_title1"><?php echo esc_html($mining_industry_title); ?></h3><?php } ?>
		        <?php if(!empty($mining_industry_phone) ){ ?>
		        	<div class="row contact-detail">
		        		<div class="col-lg-2 col-md-2 align-self-center">
		        			<span class="custom_details"><i class="fa-solid fa-phone-volume me-2"></i></span>
		        		</div>
		        		<div class="col-lg-10 col-md-10 align-self-center">
		        			<span class="contact-title"><?php echo esc_html('Contact', 'mining-industry'); ?></span><span class="custom_desc"><?php echo esc_html($mining_industry_phone); ?></span>
		        		</div>		        		
		        	</div>
		        <?php } ?>
		        <?php if(!empty($mining_industry_email) ){ ?>
		        	<div class="row contact-detail">
		        		<div class="col-lg-2 col-md-2 align-self-center">
		        			<span class="custom_details"><i class="fa-regular fa-envelope me-2"></i></span>
		        		</div>
		        		<div class="col-lg-10 col-md-10 align-self-center">
		        			<span class="contact-title"><?php echo esc_html('Mail Address', 'mining-industry'); ?></span><span class="custom_desc"><?php echo esc_html($mining_industry_email); ?></span>
		        		</div>
		        	</div>
		        <?php } ?>
		        <?php if(!empty($mining_industry_address) ){ ?>
		        	<div class="row contact-detail">
		        		<div class="col-lg-2 col-md-2 align-self-center">
		        			<span class="custom_details"><i class="fa-solid fa-location-dot me-2"></i></span>
		        		</div>
			        	<div class="col-lg-10 col-md-10 align-self-center">
			        		<span class="contact-title"><?php echo esc_html('Location', 'mining-industry'); ?></span><span class="custom_desc"><?php echo esc_html($mining_industry_address); ?></span>
			        	</div>
			        </div>
			    <?php } ?> 
		        <?php if(!empty($mining_industry_timing) ){ ?><p><span class="custom_details"><?php esc_html_e('Opening Time: ','mining-industry'); ?></span><span class="custom_desc"><?php echo esc_html($mining_industry_timing); ?></span></p><?php } ?>
		        <?php if(!empty($mining_industry_longitude) ){ ?><embed width="100%" height="200px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=<?php echo esc_html($mining_industry_longitude); ?>,<?php echo esc_html($mining_industry_latitude); ?>&hl=es;z=14&amp;output=embed"></embed><?php } ?>
		        <?php if(!empty($mining_industry_contact_form) ){ ?><?php echo do_shortcode($mining_industry_contact_form); ?><?php } ?>
	        <?php echo '</div>';
			?>
		</aside>
		<?php
	}
	
	// Widget Backend 
	public function form( $mining_industry_instance ) {

		$mining_industry_title= ''; $mining_industry_phone= ''; $mining_industry_email = ''; $mining_industry_address = ''; $mining_industry_timing = ''; $mining_industry_longitude = ''; $mining_industry_latitude = ''; $mining_industry_contact_form = ''; 
		
		$mining_industry_title = isset( $mining_industry_instance['title'] ) ? $mining_industry_instance['title'] : '';
		$mining_industry_phone = isset( $mining_industry_instance['phone'] ) ? $mining_industry_instance['phone'] : '';
		$mining_industry_email = isset( $mining_industry_instance['email'] ) ? $mining_industry_instance['email'] : '';
		$mining_industry_address = isset( $mining_industry_instance['address'] ) ? $mining_industry_instance['address'] : '';
		$mining_industry_timing = isset( $mining_industry_instance['timing'] ) ? $mining_industry_instance['timing'] : '';
		$mining_industry_longitude = isset( $mining_industry_instance['longitude'] ) ? $mining_industry_instance['longitude'] : '';
		$mining_industry_latitude = isset( $mining_industry_instance['latitude'] ) ? $mining_industry_instance['latitude'] : '';
		$mining_industry_contact_form = isset( $mining_industry_instance['contact_form'] ) ? $mining_industry_instance['contact_form'] : '';
		
		?>

		<p>
        	<label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:','mining-industry'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($mining_industry_title); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('phone')); ?>"><?php esc_html_e('Phone Number:','mining-industry'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('phone')); ?>" name="<?php echo esc_attr($this->get_field_name('phone')); ?>" type="text" value="<?php echo esc_attr($mining_industry_phone); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('email')); ?>"><?php esc_html_e('Email id:','mining-industry'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('email')); ?>" name="<?php echo esc_attr($this->get_field_name('email')); ?>" type="text" value="<?php echo esc_attr($mining_industry_email); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('address')); ?>"><?php esc_html_e('Address:','mining-industry'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('address')); ?>" name="<?php echo esc_attr($this->get_field_name('address')); ?>" type="text" value="<?php echo esc_attr($mining_industry_address); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('timing')); ?>"><?php esc_html_e('Opening Time:','mining-industry'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('timing')); ?>" name="<?php echo esc_attr($this->get_field_name('timing')); ?>" type="text" value="<?php echo esc_attr($mining_industry_timing); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('longitude')); ?>"><?php esc_html_e('Longitude:','mining-industry'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('longitude')); ?>" name="<?php echo esc_attr($this->get_field_name('longitude')); ?>" type="text" value="<?php echo esc_attr($mining_industry_longitude); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('latitude')); ?>"><?php esc_html_e('Latitude:','mining-industry'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('latitude')); ?>" name="<?php echo esc_attr($this->get_field_name('latitude')); ?>" type="text" value="<?php echo esc_attr($mining_industry_latitude); ?>">
    	</p>
    	<p>
        	<label for="<?php echo esc_attr($this->get_field_id('contact_form')); ?>"><?php esc_html_e('Contact Form Shortcode:','mining-industry'); ?></label>
        	<input class="widefat" id="<?php echo esc_attr($this->get_field_id('contact_form')); ?>" name="<?php echo esc_attr($this->get_field_name('contact_form')); ?>" type="text" value="<?php echo esc_attr($mining_industry_contact_form); ?>">
    	</p>
		
		<?php 
	}
	
	// Updating widget replacing old instances with new
	public function update( $mining_industry_new_instance, $mining_industry_old_instance ) {
		$mining_industry_instance = array();	
		$mining_industry_instance['title'] = (!empty($mining_industry_new_instance['title']) ) ? strip_tags($mining_industry_new_instance['title']) : '';
		$mining_industry_instance['phone'] = (!empty($mining_industry_new_instance['phone']) ) ? mining_industry_sanitize_phone_number($mining_industry_new_instance['phone']) : '';
		$mining_industry_instance['email'] = (!empty($mining_industry_new_instance['email']) ) ? sanitize_email($mining_industry_new_instance['email']) : '';
		$mining_industry_instance['address'] = (!empty($mining_industry_new_instance['address']) ) ? strip_tags($mining_industry_new_instance['address']) : '';
		$mining_industry_instance['timing'] = (!empty($mining_industry_new_instance['timing']) ) ? strip_tags($mining_industry_new_instance['timing']) : '';
		$mining_industry_instance['longitude'] = (!empty($mining_industry_new_instance['longitude']) ) ? strip_tags($mining_industry_new_instance['longitude']) : '';
		$mining_industry_instance['latitude'] = (!empty($mining_industry_new_instance['latitude']) ) ? strip_tags($mining_industry_new_instance['latitude']) : '';
		$mining_industry_instance['contact_form'] = (!empty($mining_industry_new_instance['contact_form']) ) ? strip_tags($mining_industry_new_instance['contact_form']) : '';
        
		return $mining_industry_instance;
	}
}
// Register and load the widget
function mining_industry_contact_custom_load_widget() {
	register_widget( 'Mining_Industry_Contact_Widget' );
}
add_action( 'widgets_init', 'mining_industry_contact_custom_load_widget' );