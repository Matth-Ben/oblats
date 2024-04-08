{{--
  Title: Liste de lien
  Description: A new template block.
  Category: template-blocks
  Icon: excerpt-view
  Post-Type: post page necrologies
  Keywords: liste card carte
--}}

@php
  $data = Block::listPost($block['data']);
  // var_dump($data);
@endphp

<section class="b-list-post u-margin">
  <div class="b-list-post__cards">
    @if ($data['display'])
      @foreach ($data['list'] as $item)
        <a class="b-list-post__card" href="{{$item['link']}}">
          @include('elements/image', ['data' => $item['image']])
        </a>
      @endforeach
    @else
      @foreach ($data['list'] as $item)
        <a class="b-list-post__item" href="{{$item['link']}}">
          @include('elements/image', ['data' => $item['image']])
          <div class="card__last-post-title">{{ $item['title'] }}</div>
        </a>
      @endforeach   
    @endif
    {{-- @foreach ($data['cards'] as $item)
      <@if($item['link']){{ 'a href='.$item['link'] }}@else{{ 'div' }}@endif class="b-list-card__item">
        <div class="b-list-card__item-image">
          @include('elements/image', ['data' => $item['image']])
        </div>
        <div class="b-list-card__item-title">{{ $item['title'] }}</div>
      </@if($item['link']){{ 'a' }}@else{{ 'div' }}@endif>
    @endforeach --}}
  </div>
</section>
