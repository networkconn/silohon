<?php /**
 * Widget API: WP_Widget_Search class.
 * @package Silohon */

add_action('widgets_init', function(){
	register_widget( 'Silohon_Search_Widgets' );
	register_widget( 'Silohon_Popular_Posts_Widgets' );
	register_widget( 'Silohon_Recent_Posts_Widgets' );
});

/**=============================
 * Silohon Popular Posts ======
==============================*/
function silohon_save_post_veiws( $postID ){
    $metaKey = 'silohon_post_views';
    $views = get_post_meta( $postID, $metaKey, true );
    $count = ( empty( $views ) ? 0 : $views );
    $count++;

    update_post_meta( $postID, $metaKey, $count );
}
remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 );

class Silohon_Popular_Posts_Widgets extends WP_Widget{

	// Setup Popular Widgets
	public function __construct(){
		$widget_ops = array(
			'classname' => 'silohon-popular-posts-widget',
			'description' => 'Silohon Popular Posts Widgets',
		);
		parent::__construct('silohon_popular_posts', 'Silohon Popular Posts', $widget_ops);
	}

	// Display Popular Widgets on Back end
	public function form( $instance ){
		$title = ( !empty( $instance[ 'title' ] ) ? $instance[ 'title' ] : 'Popular Posts' );
		$tot = ( !empty( $instance[ 'tot' ] ) ? absint( $instance[ 'tot' ] ) : 4 );

		$output = '<p>';
		$output .= '<label for="'.esc_attr( $this->get_field_id('title') ).'">Title:</label>';
		$output .= '<input type="text" class="widefat" id="'.esc_attr( $this->get_field_id('title') ).'"
			name="'.esc_attr( $this->get_field_name('title') ).'"
			value="' .esc_attr( $title ). '" />';
		$output .= '</label>';

		$output .= '<p>';
		$output .= '<label for="'.esc_attr( $this->get_field_id('tot') ).'">Title:</label>';
		$output .= '<input type="number" class="widefat" id="'.esc_attr( $this->get_field_id('tot') ).'"
			name="'.esc_attr( $this->get_field_name('tot') ).'"
			value="' .esc_attr( $tot ). '" />';
		$output .= '</label>';

		echo $output;
	}
	public function update( $new_instance, $old_instance ){
		$instance = array();
		$instance['title'] = ( !empty( $new_instance['title']) ? strip_tags( $new_instance['title'] ) : '' );
		$instance[ 'tot' ] = ( !empty( $new_instance['tot']) ? absint( strip_tags( $new_instance['tot'] ) ) : 0 );

		return $instance;
	}

	// Display Popular Widgets on Front end
	public function widget( $args, $instance ){
		$tot = absint( $instance[ 'tot' ] );

		$posts_args = array(
			'post_type' => 'post',
			'posts_per_page' => $tot,
			'meta_key' => 'silohon_post_views',
			'orderby' => 'meta_value_num',
			'order' => 'DESC'
		);

		$post_query = new WP_Query( $posts_args );

		if( !empty( $instance['title'] ) ){
			echo '<div class="widget_title"><span class="silohon_widget_title">' . apply_filters( 'widgets_title', $instance['title'] ) . '</span></div>';
		}
		if( $post_query->have_posts() ) :
			echo '<div class="silohon_the_popular">';
			while( $post_query->have_posts() ) : $post_query->the_post(); ?>
				<a href="<?php the_permalink(); ?>" class="the_popular_link">
					<?php if(has_post_thumbnail()) : $lazyload_image = SILOHON_URI . '/img/lazy.jpg'; ?>
					<img width="90" height="90" src="<?php echo $lazyload_image; ?>" data-src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
					<?php else : ?>
					<img width="90" height="90" src="<?php echo $lazyload_image; ?>" alt="<?php the_title(); ?>">
					<?php endif; ?>
					<div class="the_popular_body">
						<span class="metas"><?php the_time('F d, Y'); ?></span>
						<?php the_title('<h2 class="the_popular_title">', '</h2>'); ?>
					</div>
				</a>
			<?php endwhile;
			echo '</div>';
		endif; wp_reset_query(); wp_reset_postdata();
	}
}

/**=============================
 * Silohon Recent Posts ======
==============================*/
class Silohon_Recent_Posts_Widgets extends WP_Widget{

	// Setup Recent Posts Widgets
	public function __construct(){
		$widget_ops = array(
			'classname' => 'silohon-recent-posts-widget',
			'description' => 'Silohon Recent Posts',
		);
		parent::__construct('silohon_recent_posts', 'Silohon Recent Posts', $widget_ops);
	}

	// Back end Display Settings
	public function form( $instance ){
		$title = ( !empty( $instance[ 'title' ] ) ? $instance[ 'title' ] : 'Latest Posts' );
		$tot = ( !empty( $instance[ 'tot' ] ) ? absint( $instance[ 'tot' ] ) : 4 );

		$output = '<p>';
		$output .= '<label for="'.esc_attr( $this->get_field_id('title') ).'">Title:</label>';
		$output .= '<input type="text" class="widefat" id="'.esc_attr( $this->get_field_id('title') ).'"
			name="'.esc_attr( $this->get_field_name('title') ).'"
			value="' .esc_attr( $title ). '" />';
		$output .= '</label>';

		$output .= '<p>';
		$output .= '<label for="'.esc_attr( $this->get_field_id('tot') ).'">Title:</label>';
		$output .= '<input type="number" class="widefat" id="'.esc_attr( $this->get_field_id('tot') ).'"
			name="'.esc_attr( $this->get_field_name('tot') ).'"
			value="' .esc_attr( $tot ). '" />';
		$output .= '</label>';

		echo $output;
	}

	public function update( $new_instance, $old_instance ){
		$instance = array();
		$instance['title'] = ( !empty( $new_instance['title']) ? strip_tags( $new_instance['title'] ) : '' );
		$instance[ 'tot' ] = ( !empty( $new_instance['tot']) ? absint( strip_tags( $new_instance['tot'] ) ) : 0 );

		return $instance;
	}

	// Front end
	public function widget( $args, $instance ){
		$tot = absint( $instance[ 'tot' ] );

		$recent_args = array(
			'post_type' => 'post',
			'posts_per_page' => $tot,
		);

		$post_query = new WP_Query( $recent_args );

		if( !empty( $instance['title'] ) ){
			echo '<div class="widget_title"><span class="silohon_widget_title">' . apply_filters( 'widgets_title', $instance['title'] ) . '</span></div>';
		}
		if( $post_query->have_posts() ) :
			echo '<div class="silohon_the_popular">';
			while( $post_query->have_posts() ) : $post_query->the_post(); ?>
				<a href="<?php the_permalink(); ?>" class="the_popular_link">
					<?php if(has_post_thumbnail()) : $lazyload_image = SILOHON_URI . '/img/lazy.jpg'; ?>
					<img width="90" height="90" src="<?php echo $lazyload_image; ?>" data-src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>">
					<?php else : ?>
					<img width="90" height="90" src="<?php echo $lazyload_image; ?>" alt="<?php the_title(); ?>">
					<?php endif; ?>
					<div class="the_popular_body">
						<span class="metas"><?php the_time('F d, Y'); ?></span>
						<?php the_title('<h2 class="the_popular_title">', '</h2>'); ?>
					</div>
				</a>
			<?php endwhile;
			echo '</div>';
		endif; wp_reset_query(); wp_reset_postdata();
	}
}


/**=============================
 * Silohon Search Widgets ======
==============================*/
class Silohon_Search_Widgets extends WP_Widget{

	// Setup Search Widgets
	public function __construct(){
		$widget_ops = array(
			'classname' => 'silohon-search-widget',
			'description' => 'Silohon Search Widgets',
		);
		parent::__construct('silohon_search', 'Silohon Search', $widget_ops);
	}

	// Display For Back End
	public function form( $instance ){
		$title = ( !empty( $instance[ 'title' ] ) ? $instance[ 'title' ] : 'Seach' );
		$output = '<p>';
		$output .= '<label for="'.esc_attr( $this->get_field_id('title') ).'">Title:</label>';
		$output .= '<input type="text" class="widefat" id="'.esc_attr( $this->get_field_id('title') ).'"
			name="'.esc_attr( $this->get_field_name('title') ).'"
			value="' .esc_attr( $title ). '" />';
		$output .= '</label>';

		echo $output;
	}

	// Update Option
	public function update( $new_instance, $old_instance ){
		$instance = array();
		$instance['title'] = ( !empty( $new_instance['title']) ? strip_tags( $new_instance['title'] ) : '' );

		return $instance;
	}

	// Display for Front end
	public function widget( $args, $instance ){ ?>
	<?php if( !empty( $instance['title'] ) ){
			echo '<div class="widget_title"><span class="silohon_widget_title">' . apply_filters( 'widgets_title', $instance['title'] ) . '</span></div>';
		} ?>
	<form action="<?php echo home_url('/'); ?>" method="get" class="silohon_search">
		<input type="text" id="s" name="s" value="<?php the_search_query(); ?>" placeholder="Search Here.." />
		<button type="submit">
			<?php $icon_search = SILOHON_URI . '/img/search.svg';
			echo '<img src="'.$icon_search.'" />'; ?>
		</button>
	</form>

	<?php }
}