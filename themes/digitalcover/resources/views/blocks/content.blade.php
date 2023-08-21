{{--
  Title: Paragraphe
  Description: A new template block.
  Category: template-blocks
  Icon: slides
  Post-Type: post page necrologies
  Keywords: paragraphe content contenu
--}}

@php
  $data = Block::content($block['data']);
@endphp

<section class="b-content u-margin">
  {!! wpautop($data['content']) !!}
</section>
