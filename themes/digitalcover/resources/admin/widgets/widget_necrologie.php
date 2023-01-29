<?php

class necrologie_widget extends WP_Widget {
  function __construct() {
    parent::__construct(
      // widget ID
      'necrologie_widget',
      // widget name
      __('Nécrologie Widget', ' necrologie_widget_domain'),
      // widget description
      array( 'description' => __( 'Nécrologie Widget Tutorial', 'necrologie_widget_domain' ), )
    );
  }

  public function widget( $args, $instance ) {
    $title = apply_filters( 'widget_title', $instance['title'] );
    $args = [
      'post_type' => 'necrologies',
      'posts_per_page' => 1,
    ];

    echo '<section class="widget widget-necrologie">';
    if ( ! empty( $title ) ) {
      echo '<h3>'. $title .'</h3>';
    }

    $query = new WP_Query( $args );
    if( $query->have_posts() ) :
      while( $query->have_posts() ) : $query->the_post();
        $title = get_the_title();
        $url = get_the_permalink();
        $date = get_field('date_du_deces', get_the_ID());
        $img = get_the_post_thumbnail_url();
        $html = <<<EOF
        <a href="$url" class="widget card__necrologie">
          <div class="card__necrologie-thumbnail">
            <img src="$img" width="150" height="200">
          </div>
          <div class="card__necrologie-body">
            <div class="card__necrologie-title">$title</div>
            <div class="card__necrologie-date">Date du décès : <span>$date</span></div>
            <div class="card__necrologie-link">Voir le mémorial</div>
          </div>
        </a>
        EOF;
        echo $html;
      endwhile;
    endif;

    echo '</section>';
  }

  public function form( $instance ) {
    if ( isset( $instance[ 'title' ] ) )
      $title = $instance[ 'title' ];
    else
      $title = __( 'Default Title', 'necrologie_widget_domain' );
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
