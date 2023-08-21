{{--
  Title: Liste de carte
  Description: A new template block.
  Category: template-blocks
  Icon: excerpt-view
  Post-Type: post page necrologies
  Keywords: liste card carte
--}}

@php
  $data = Block::listCard($block['data']);
@endphp

<section class="b-list-card u-margin">
  @if ($data['title'])
    <div class="b-list-card__title">
      @include('elements/title', ['data' => $data['title']])
    </div>
  @endif
  <div class="b-list-card__cards">
    @foreach ($data['cards'] as $item)
      <@if($item['link']){{ 'a href='.$item['link'] }}@else{{ 'div' }}@endif class="b-list-card__item">
        <div class="b-list-card__item-image">
          @include('elements/image', ['data' => $item['image']])
        </div>
        <div class="b-list-card__item-title">{{ $item['title'] }}</div>
      </@if($item['link']){{ 'a' }}@else{{ 'div' }}@endif>
    @endforeach
  </div>
  @if ($data['button'])
    <div class="b-list-card__button">
      @include('elements/button', ['data' => $data['button']])
    </div>
  @endif
</section>
