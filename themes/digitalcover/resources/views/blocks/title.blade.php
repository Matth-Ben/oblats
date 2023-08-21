{{--
  Title: Titre
  Description: A new template block.
  Category: template-blocks
  Icon: slides
  Post-Type: post page necrologies
  Keywords: titre title
--}}

@php
  $data = Block::title($block['data']);
@endphp

<section class="b-title">
  <{{ $data['hn'] }}>{{ $data['title'] }}</{{ $data['hn'] }}>
</section>
