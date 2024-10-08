<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Component extends Controller {
  public static function classicContent($data) {
    return [
      'titles' => Element::title($data),
      'content' => $data['content'],
      'button' => $data['button']
    ];
  }

  public static function flexibleClassicContent($data) {
    return [
      'data' => [
        'classic-content' => Component::classicContent($data),
      ]
    ];
  }

  public static function flexibleMedia($data) {
    return [
      'data' => [
        'media' => $data['media'],
        'image' => isset($data['image']) && !empty($data['image']) ? Element::image($data['image'], '50vw', NULL, true) : NULL,
        'video' => [
          'type' => isset($data['video']) && !empty($data['video']) ? get_post_mime_type($data['video']) : NULL,
          'video' => isset($data['video']) && !empty($data['video']) ? wp_get_attachment_url($data['video']) : NULL,
          'poster' => isset($data['image']) && !empty($data['image']) ? Element::image($data['image'], '50vw') : NULL
        ]
      ]
    ];
  }

  public static function cardPost($id) {
    return [
        'image' => get_post_thumbnail_id($id) ? Element::image(get_post_thumbnail_id($id), '50vw', NULL, true) : NULL,
    ];
  }

  public static function article($data) {
    $cards = [];

    foreach ($data['sidebar-articles'] as $post) {
      $cards[] = [
        'title' => get_the_title($post->ID),
        'image' => Element::image(get_post_thumbnail_id($post->ID), '109px'),
        'link' => get_permalink($post->ID),
      ];
    }

    return [ 'data' => $cards ];
  }

  public static function necrologie($data) {
    $cards = [];

    foreach ($data['sidebar-necrologies'] as $post) {
      $cards[] = [
        'title' => get_the_title($post->ID),
        'image' => Element::image(get_post_thumbnail_id($post->ID), '109px'),
        'link' => get_permalink($post->ID),
      ];
    }

    return [ 'data' => $cards ];
  }

  public static function texte($data) {
    return [
      'titles' => $data['title'],
      'content' => $data['texte']
    ];
  }
}
