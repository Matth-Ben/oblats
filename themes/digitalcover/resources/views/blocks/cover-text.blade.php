{{--
  Title: Image avec text
  Description: A new template block.
  Category: template-blocks
  Icon: slides
  Post-Type: post page necrologies
  Keywords: cover text image contenu
--}}

@php
  $data = Block::coverText($block['data']);
@endphp

<section class="b-cover-text u-margin">
  @if ($data['button']['url'])
    <a href="{{ $data['button']['url'] }}">
  @endif
  <div class="b-cover-text__body">
    <div class="b-cover-text__thumbnail">
      @include('elements/image', ['data' => $data['image']])
    </div>
  </div>
  <div class="b-cover-text__content">
    @if ($data['title'])
      <div class="b-cover-text__title">
        @include('elements/title', ['data' => $data['title']])
      </div>
    @endif
  </div>
  @if ($data['button']['url'])
    </a>
  @endif
</section>
