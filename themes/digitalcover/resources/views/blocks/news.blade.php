{{--
  Title: News
  Description: A new template block.
  Category: template-blocks
  Icon: editor-alignleft
  Post-Type: post page
  Keywords: news actualités
--}}

@php
  $data = Block::news($block['data']);
  $tax = get_term_by('id', $data['zone'], 'zones');
  $args = [
    'post_type' => 'post',
    'posts_per_page'=>'3',
    'tax_query' => [
      [
        'taxonomy' => 'zones',
        'field' => 'slug',
        'terms' => $tax->slug,
      ]
    ]
  ];
@endphp

<section class="b-news u-margin">
  <div class="b-news__head">
    <h2 class="b-news__head-title">{{ $data['title'] }}</h2>
    @if(!empty($data['button']))
      <div class="b-news__head-button">
        <a href="{{ $data['button']['url'] }}" class="button" @if($data['button']['target']){{ 'target="_blank" rel="noopener"' }}@endif>
          {!! $data['button']['title'] !!}
        </a>
      </div>
    @endif
  </div>
  <div class="b-news__body">
    @php
      $loop = new WP_Query($args);
    @endphp
    @if ($loop->have_posts())
      @while($loop->have_posts()) @php ($loop->the_post()) @endphp
        <div class="subcol-lg-5">
          @include('components/card-post', ['id' => get_the_ID()])
        </div>
      @endwhile
    @endif
  </div>
</section>
