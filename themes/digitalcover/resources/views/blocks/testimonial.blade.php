{{--
  Title: Témoignage
  Description: A new template block.
  Category: template-blocks
  Icon: testimonial
  Post-Type: post page necrologies
  Keywords: testimonial témoignage
--}}

@php
  $data = Block::testimonial($block['data']);
@endphp

<section class="b-testimonial b-testimonial__position-{{ $data['position'] }} u-margin">
  <div class="b-testimonial__body">
    <div class="b-testimonial__card u-o1">
      <div class="b-testimonial__card-content">{{ $data['content'] }}</div>
      <div class="b-testimonial__card-name">{{ $data['name'] }}</div>
    </div>
    <div class="b-testimonial__thumbnail u-o2">
      @include('elements/image', ['data' => $data['image']])
    </div>
  </div>
</section>
