<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Block extends Controller {
  // public static function example($data) {
  //     return [
  //         'title' => Element::title($data),
  //         'image' => Element::image($data['image'], '1920px')
  //     ];
  // }

  public static function flexibleContent($data) {
    $fields = get_field($data['_blocks']);
    $index = 0;
    $components = [];

    foreach ($fields as $block) {
      $component_function = toCamelCase($block['acf_fc_layout']);
      $components[
        $block['acf_fc_layout'] . '_' . $index
      ] = Component::$component_function($block);
      $components[$block['acf_fc_layout'] . '_' . $index]['name'] =
        $block['acf_fc_layout'];
      $index++;
    }

    return [
      'size' => $data['image_size'],
      'components' => $components,
    ];
  }

  public static function title($data) {
    return [
      'title' => $data['title'],
      'hn' => $data['hn']
    ];
  }

  public static function content($data) {
    return [
      'content' => $data['content']
    ];
  }

  public static function form($data) {
    return [
      'id' => $data['id-form'],
    ];
  }

  public static function coverSlider($data) {
    $return = [
      'slides' => [],
    ];

    foreach ($data as $key => $item) {
      $return['slides'][] = [
        'image' => Element::image($item['image'], '1920px', null, true),
        'title' => $item['title'],
        'content' => $item['content'],
        'button' => $item['button'],
      ];
    }
    return $return;
  }

  public static function cover($data) {
    if ($data) {
      return [
        'display' => $data['display-breadcrumb'] ? $data['display-breadcrumb'] : false,
        'image' => $data['image'] ? Element::image($data['image'], '1920px', null, true) : '',
        'title' => $data['title'] ? $data['title'] : '',
      ];
    }
  }

  public static function news($data) {
    return [
      'title' => $data['titles'],
      'zone' => $data['zones'][0],
      'button' => $data['button'],
    ];
  }

  public static function coverText($data) {
    return [
      'title' => Element::title($data),
      'image' => Element::image($data['image'], '1920px', null, true),
      'button' => $data['button'],
    ];
  }

  public static function listCard($data) {
    $cards = [];

    for ($i = 0; $i < $data['repeater']; $i++) {
      $cards[] = [
        'title' => $data['repeater_' . $i . '_title']
          ? $data['repeater_' . $i . '_title']
          : '',
        'image' => $data['repeater_' . $i . '_image']
          ? Element::image($data['repeater_' . $i . '_image'], '109px')
          : '',
        'link' => $data['repeater_' . $i . '_link']
          ? $data['repeater_' . $i . '_link']['url']
          : '',
      ];
    }

    return [
      'title' => Element::title($data),
      'cards' => $cards,
      'button' => $data['button'],
    ];
  }

  public static function listPost($data) {
    if ($data['display-list-post']) {
      for ($i = 0; $i < $data['repeater-list-custom']; $i++) {
        $posts[] = [
          'image' => $data['repeater-list-custom_' . $i . '_image-list-custom']
            ? Element::image($data['repeater-list-custom_' . $i . '_image-list-custom'], '109px')
            : '',
          'link' => $data['repeater-list-custom_' . $i . '_link-list-custom']
            ? $data['repeater-list-custom_' . $i . '_link-list-custom']
            : '',
        ];
      }
    } else {
      for ($i=0; $i < count($data['relation-list-post']); $i++) { 
        $posts[$i] = [
          'title' => get_the_title($data['relation-list-post'][$i]),
          'image' => Element::image(get_post_thumbnail_id($data['relation-list-post'][$i]), '109px'),
          'link' => get_permalink($data['relation-list-post'][$i]),
        ];
      }
      foreach ($data['relation-list-post'] as $post) {
        
      }
    }

    return [
      'display' => $data['display-list-post'],
      'list' => $posts
    ];
  }

  public static function testimonial($data) {
    return [
      'position' => $data['position'],
      'content' => $data['content'],
      'name' => $data['name'],
      'image' => $data['image'] ? Element::image($data['image'], '415px') : '',
    ];
  }

  public static function contact($data) {
    $contacts = [];

    for ($i = 0; $i < $data['repeater']; $i++) {
      $contacts[] = [
        'title' => $data['repeater_' . $i . '_title']
          ? $data['repeater_' . $i . '_title']
          : '',
        'mail' => $data['repeater_' . $i . '_mail']
          ? $data['repeater_' . $i . '_mail']
          : '',
        'address' => $data['repeater_' . $i . '_address']
          ? $data['repeater_' . $i . '_address']
          : '',
        'phone' => $data['repeater_' . $i . '_phone']
          ? $data['repeater_' . $i . '_phone']
          : '',
      ];
    }

    return ['contacts' => $contacts];
  }

  public static function listBlock($data) {
    $blocks = [];

    for ($i = 0; $i < $data['repeater']; $i++) {
      $blocks[] = [
        'title' => $data['repeater_' . $i . '_link']
          ? $data['repeater_' . $i . '_link']['title']
          : '',
        'url' => $data['repeater_' . $i . '_link']
          ? $data['repeater_' . $i . '_link']['url']
          : '',
        'image' => $data['repeater_' . $i . '_image']
          ? Element::image($data['repeater_' . $i . '_image'], '386px')
          : '',
      ];
    }

    return [ 'lists' => $blocks ];
  }

  public static function customSidebar($data) {
    $index = 0;

    foreach ($data as $block) {
      $component_function = toCamelCase($block['acf_fc_layout']);
      $components[
        $block['acf_fc_layout'] . '_' . $index
      ] = Component::$component_function($block);
      $components[$block['acf_fc_layout'] . '_' . $index]['name'] =
        $block['acf_fc_layout'];
      $index++;
    }

    return [ 'components' => $components ];
  }

  // generated function here
}
