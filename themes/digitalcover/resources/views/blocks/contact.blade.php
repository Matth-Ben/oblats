{{--
  Title: Contact
  Description: A new template block.
  Category: template-blocks
  Icon: editor-alignleft
  Post-Type: post page necrologies
  Keywords: contact
--}}

@php
  $data = Block::contact($block['data']);
@endphp

<section class="b-contact u-margin">
  <div class="b-contact__list">
    @foreach ($data['contacts'] as $item)
      <div class="b-contact__item">
        <h2 class="b-contact__title">{{ $item['title'] }}</h2>
        <div class="b-contact__body">
          <div class="b-contact__mail">Email : <span><a href="mailto:{!! $item['mail'] !!}">{{ $item['mail'] }}</a></span></div>
          <div class="b-contact__address">Adresse : <span>{{ $item['address'] }}</span></div>
          <div class="b-contact__phone">Tel : <span><a href="tel:{!! $item['phone'] !!}">{{ $item['phone'] }}</a></span></div>
        </div>
      </div>
    @endforeach
  </div>
</section>
