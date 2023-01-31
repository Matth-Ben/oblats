@php
  $data = Component::cardPost($id);
  $date = get_field('date_du_deces', $id);
@endphp

<a href="{{ get_the_permalink($id) }}" class="card-necrologie">
  <div class="card-necrologie__thumbnail">
    @include('elements/image', ['data' => $data['image']])
  </div>
  <div class="card-necrologie__body">
    <h3 class="card-necrologie__title">{{ get_the_title($id) }}</h3>
    <div class="card-necrologie__date">Date du décès : {{ $date }}<span></span></div>
    <div class="card-necrologie__button">En savoir plus</div>
  </div>
</a>
