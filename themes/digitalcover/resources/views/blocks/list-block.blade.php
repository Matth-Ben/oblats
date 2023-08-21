{{--
  Title: Liste de bloc
  Description: A new template block.
  Category: template-blocks
  Icon: editor-alignleft
  Post-Type: post page necrologies
  Keywords: liste block
--}}

@php
  $data = Block::listBlock($block['data']);
@endphp

<section class="b-list-block u-margin">
  <div class="b-list-block__body">
    @foreach ($data['lists'] as $item)
      <div class="b-list-block__item subcol-sm-15 subcol-lg-5">
        <a class="b-list-block__link" href="{!! $item['url'] !!}">
          <div class="b-list-block__thumbnail">@include('elements/image', ['data' => $item['image']])</div>
          <div class="b-list-block__title">{{ $item['title'] }}</div>
        </a>
      </div>
    @endforeach
  </div>
</section>
