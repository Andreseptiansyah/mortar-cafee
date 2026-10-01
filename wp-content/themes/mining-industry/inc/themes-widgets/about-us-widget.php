<?php
/**
 * Custom About us Widget
 */

class Mining_Industry_About_Widget extends WP_Widget {
	function __construct() {
		parent::__construct(
			'Mining_Industry_About_Widget',
			__('VW About us', 'mining-industry'),
			array( 'description' => __( 'Widget for about us section in sidebar', 'mining-industry' ), ) 
		);
	}
	
	public function widget( $mining_industry_args, $mining_industry_instance ) {
		?>
		<aside class="widget">
			<?php
			$mining_industry_title = isset( $mining_industry_instance['title'] ) ? $mining_industry_instance['title'] : '';
			$mining_industry_author = isset( $mining_industry_instance['author'] ) ? $mining_industry_instance['author'] : '';
			$mining_industry_designation = isset( $mining_industry_instance['designation'] ) ? $mining_industry_instance['designation'] : '';
			$mining_industry_description = isset( $mining_industry_instance['description'] ) ? $mining_industry_instance['description'] : '';
			$mining_industry_read_more_url = isset( $mining_industry_instance['read_more_url'] ) ? $mining_industry_instance['read_more_url'] : '';
			$mining_industry_read_more_text = isset( $mining_industry_instance['read_more_text'] ) ? $mining_industry_instance['read_more_text'] : '';
			$mining_industry_upload_image = isset( $mining_industry_instance['upload_image'] ) ? $mining_industry_instance['upload_image'] : '';

	        echo '<div class="custom-about-us">';
	        if(!empty($mining_industry_title) ){ ?><h3 class="custom_title"><?php echo esc_html($mining_industry_title); ?></h3><?php } ?>
		        <?php if($mining_industry_upload_image): ?>
	      			<img src="<?php echo esc_url($mining_industry_upload_image); ?>" alt="">
				<?php endif; ?>
				<?php if(!empty($mining_industry_author) ){ ?><p class="custom_author"><?php echo esc_html($mining_industry_author); ?></p><?php } ?>
				<?php if(!empty($mining_industry_designation) ){ ?><p class="custom_designation"><?php echo esc_html($mining_industry_designation); ?></p><?php } ?>
		        <?php if(!empty($mining_industry_description) ){ ?><p class="custom_desc"><?php echo esc_html($mining_industry_description); ?></p><?php } ?>
		        <?php if(!empty($mining_industry_read_more_url) ){ ?><div class="more-button"><a class="custom_read_more" href="<?php echo esc_url($mining_industry_read_more_url); ?>"><?php if(!empty($mining_industry_read_more_text) ){ ?><?php echo esc_html($mining_industry_read_more_text); ?><?php } ?></a></div><?php } ?>
	        <?php echo '</div>';
			?>
		</aside>
		<?php
	}
	
	// Widget Backend 
	public function form( $mining_industry_instance ) {	

		$mining_industry_title= ''; $mining_industry_author = ''; $mining_industry_designation = ''; $mining_industry_description= ''; $mining_industry_read_more_text = ''; $mining_industry_read_more_url = ''; $mining_industry_upload_image = '';

		$mining_industry_title = isset( $mining_industry_instance['title'] ) ? $mining_industry_instance['title'] : '';
		$mining_industry_author = isset( $mining_industry_instance['author'] ) ? $mining_industry_instance['author'] : '';
		$mining_industry_designation = isset( $mining_industry_instance['designation'] ) ? $mining_industry_instance['designation'] : '';
		$mining_industry_description = isset( $mining_industry_instance['description'] ) ? $mining_industry_instance['description'] : '';
		$mining_industry_read_more_url = isset( $mining_industry_instance['read_more_url'] ) ? $mining_industry_instance['read_more_url'] : '';
		$mining_industry_read_more_text = isset( $mining_industry_instance['read_more_text'] ) ? $mining_industry_instance['read_more_text'] : '';
		$mining_industry_upload_image = isset( $mining_industry_instance['upload_image'] ) ? $mining_industry_instance['upload_image'] : '';
	?>
		<p>
        <label for="<?php echo esc_attr($this->get_field_id('title')); ?>"><?php esc_html_e('Title:','mining-industry'); ?></label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('title')); ?>" name="<?php echo esc_attr($this->get_field_name('title')); ?>" type="text" value="<?php echo esc_attr($mining_industry_title); ?>">
    	</p>
    	<p>
        <label for="<?php echo esc_attr($this->get_field_id('author')); ?>"><?php esc_html_e('Author Name:','mining-industry'); ?></label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('author')); ?>" name="<?php echo esc_attr($this->get_field_name('author')); ?>" type="text" value="<?php echo esc_attr($mining_industry_author); ?>">
    	</p>
    	<p>
        <label for="<?php echo esc_attr($this->get_field_id('designation')); ?>"><?php esc_html_e('Designation:','mining-industry'); ?></label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('designation')); ?>" name="<?php echo esc_attr($this->get_field_name('designation')); ?>" type="text" value="<?php echo esc_attr($mining_industry_designation); ?>">
    	</p>
    	<p>
        <label for="<?php echo esc_attr($this->get_field_id('description')); ?>"><?php esc_html_e('Description:','mining-industry'); ?></label>
        <input class="widefat" id="<?php echo esc_attr($this->get_field_id('description')); ?>" name="<?php echo esc_attr($this->get_field_name('description')); ?>" type="text" value="<?php echo esc_attr($mining_industry_description); ?>">
    	</p>
    	<p>
		<label for="<?php echo esc_attr($this->get_field_id('read_more_text')); ?>"><?php esc_html_e('Button Text:','mining-industry'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('read_more_text')); ?>" name="<?php echo esc_attr($this->get_field_name('read_more_text')); ?>" type="text" value="<?php echo esc_attr($mining_industry_read_more_text); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id('read_more_url')); ?>"><?php esc_html_e('Button Url:','mining-industry'); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id('read_more_url')); ?>" name="<?php echo esc_attr($this->get_field_name('read_more_url')); ?>" type="text" value="<?php echo esc_attr($mining_industry_read_more_url); ?>">
		</p>
		<p>
		<label for="<?php echo esc_attr($this->get_field_id( 'upload_image' )); ?>"><?php esc_html_e( 'Image Url:','mining-industry'); ?></label>
		<?php
			if ( $mining_industry_upload_image != '' ) :
			echo '<img class="custom_media_image" src="' . esc_url($mining_industry_upload_image) . '" style="margin:10px 0;padding:0;max-width:100%;float:left;display:inline-block" /><br />';
			endif;
		?>
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'upload_image' ) ); ?>" name="<?php echo esc_attr($this->get_field_name( 'upload_image' )); ?>" type="text" value="<?php echo esc_url( $mining_industry_upload_image ); ?>" />
	   	</p>
		<?php 
	}
	
	// Updating widget replacing old instances with new
	public function update( $mining_industry_new_instance, $mining_industry_old_instance ) {
		$mining_industry_instance = array();	
		$mining_industry_instance['title'] = (!empty($mining_industry_new_instance['title']) ) ? strip_tags($mining_industry_new_instance['title']) : '';
		$mining_industry_instance['author'] = ( ! empty( $mining_industry_new_instance['author'] ) ) ? strip_tags($mining_industry_new_instance['author']) : '';
		$mining_industry_instance['designation'] = ( ! empty( $mining_industry_new_instance['designation'] ) ) ? strip_tags($mining_industry_new_instance['designation']) : '';
		$mining_industry_instance['description'] = (!empty($mining_industry_new_instance['description']) ) ? strip_tags($mining_industry_new_instance['description']) : '';
        $mining_industry_instance['read_more_text'] = (!empty($mining_industry_new_instance['read_more_text']) ) ? strip_tags($mining_industry_new_instance['read_more_text']) : '';
        $mining_industry_instance['read_more_url'] = (!empty($mining_industry_new_instance['read_more_url']) ) ? esc_url_raw($mining_industry_new_instance['read_more_url']) : '';
        $mining_industry_instance['upload_image'] = ( ! empty( $mining_industry_new_instance['upload_image'] ) ) ? strip_tags($mining_industry_new_instance['upload_image']) : '';

		return $mining_industry_instance;
	}
}
// Register and load the widget
function mining_industry_about_custom_load_widget() {
	register_widget( 'Mining_Industry_About_Widget' );
}
add_action( 'widgets_init', 'mining_industry_about_custom_load_widget' );