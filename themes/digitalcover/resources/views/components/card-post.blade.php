@php
  $data = Component::cardPost($id);
@endphp

<a href="{{ get_the_permalink($id) }}" class="card-post">
  <div class="card-post__thumbnail">
    @include('elements/image', ['data' => $data['image']])
  </div>
  <div class="card-post__body">
    <div class="card-post__title">
      {{ get_the_title($id) }}
    </div>
    <div class="card-post__excerpt">{{ get_the_excerpt($id) }}</div>
    <div class="card-post__button button">En savoir plus</div>
  </div>
</a>
