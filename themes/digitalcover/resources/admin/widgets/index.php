<?php

require_once dirname(__DIR__) . '/widgets/widget_last_posts.php';
require_once dirname(__DIR__) . '/widgets/widget_last_resources.php';
require_once dirname(__DIR__) . '/widgets/widget_necrologie.php';

function register_custom_widget() {
  register_widget( 'last_posts_widget' );
  register_widget( 'last_resources_widget' );
  register_widget( 'necrologie_widget' );
}
add_action( 'widgets_init', 'register_custom_widget' );
