<?php
// Creating the widget
class wpb_widget extends WP_Widget {

	function __construct() {
		parent::__construct(
// Base ID of your widget
			'recent_news_items',

// Widget name will appear in UI
			__('Recent News Items', 'recent_news_items'),

// Widget description
			array( 'description' => __( 'Displays recent posts with featured image & excerpt', 'recent_news_items' ), )
			);
	}

// Creating widget front-end
// This is where the action happens
	public function widget( $args, $instance ) {
		$title = apply_filters( 'widget_title', $instance['title'] );

		// open widget wrapper (defined in functions.php)
		echo $args['before_widget'];
		if ( ! empty( $title ) );
		echo '<a href="' . get_permalink(30) . '">';
		echo '<div>';
		echo '<h6>' . $title . '</h6>';
		echo ('</a>');
		$args['after_title'];
	// This is where you run the code and display the output
		$the_query = new WP_Query('showposts=3&orderby=post_date&order=desc');
		echo '<ul>';
		while ($the_query->have_posts()) : $the_query->the_post();
		// Trim the Excerpt
		$content = get_the_excerpt();
		if(strlen($content) > 100) {
			$pos = strpos($content, ' ', 100);
		}
		$content = substr($content,0,$pos );
		if(strlen(get_the_excerpt()) > 100){
			$content .= "...";
		}

		// Title
		echo '<li>';
		echo '<a href="' . get_permalink() . '">'; echo the_title(); echo ('</a>');
		echo ('<p class="excerpt">'); echo $content; echo ('</p>');
		echo ('<p class="date">'); the_time('d F, Y'); echo ('</p>');
		echo ('</li>');
		endwhile;
		echo '<ul>';
		echo '</div>';
		wp_reset_query();
		// close out widget
		echo $args['after_widget'];
	}

	// Widget Backend
	public function form( $instance ) {
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		}
		else {
			$title = __( 'New title', 'wpb_widget_domain' );
		}
// Widget admin form
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>
		<?php
	}

// Updating widget replacing old instances with new
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
		return $instance;
	}
} // Class wpb_widget ends here

// Register and load the widget
function wpb_load_widget() {
	register_widget( 'wpb_widget' );
}
add_action( 'widgets_init', 'wpb_load_widget' );
