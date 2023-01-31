<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class Single extends Controller
{
  public static function necrologie() {
    $thumbnail_id = get_post_thumbnail_id(get_the_ID());

    $return = [
      'image' => Element::image($thumbnail_id, '500px', null, true),
      'name' => get_the_title(),
      'age' => get_field('age', get_the_ID()),
      'date_du_deces' => get_field('date_du_deces', get_the_ID()),
      'lieu_du_deces' => get_field('lieu_du_deces', get_the_ID()),
      'date_de_naissance' => get_field('date_de_naissance', get_the_ID()),
      'premiers_voeux' => get_field('premiers_voeux', get_the_ID()),
      'voeux_perpetuels' => get_field('voeux_perpetuels', get_the_ID()),
      'ordination' => get_field('ordination', get_the_ID())
    ];

    return $return;
  }
}
