<?php

class last_resources_widget extends WP_Widget {
  function __construct() {
    parent::__construct(
      // widget ID
      'last_resources_widget',
      // widget name
      __('Last resources Widget', ' last_resources_widget_domain'),
      // widget description
      array( 'description' => __( 'Last resources Widget Tutorial', 'last_resources_widget_domain' ), )
    );
  }

  public function widget( $args, $instance ) {
    $title = apply_filters( 'widget_title', $instance['title'] );
    $args = [
      'post_type' => 'resources',
      'posts_per_page' => 4,
    ];

    echo '<section class="widget widget-last-posts">';
    if ( ! empty( $title ) ) {
      echo '<h3>'. $title .'</h3>';
    }

    echo '<div class="card__last-posts">';

    $query = new WP_Query( $args );
    if( $query->have_posts() ) :
      while( $query->have_posts() ) : $query->the_post();
        $title = get_the_title();
        $url = get_the_permalink();
        $excerpt = get_the_excerpt();
        $img = get_the_post_thumbnail_url();
        $html = <<<EOF
        <a href="$url" class="widget card__last-resources">
          <div class="card__last-resources-thumbnail">
            <img src="$img" width="150" height="200">
          </div>
          <div class="card__last-resources-body">
            <div class="card__last-resources-title">$title</div>
            <div class="card__last-resources-excerpt">$excerpt</div>
            <div class="card__last-resources-link">En savoir plus</div>
          </div>
        </a>
        EOF;
        echo $html;
      endwhile;
    endif;
    echo '</div>';
    echo '<a href="#" class="button">En voir plus</a>';
    echo '</section>';
  }

  public function form( $instance ) {
    if ( isset( $instance[ 'title' ] ) )
      $title = $instance[ 'title' ];
    else
      $title = __( 'Default Title', 'last_resources_widget_domain' );
    ?>
    <p>
      <label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e( 'Title:' ); ?></label>
      <input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
    </p>
    <?php
  }

  public function update( $new_instance, $old_instance ) {
    $instance = array();
    $instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';
    return $instance;
  }
}
