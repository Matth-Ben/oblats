@php
  $pagination = get_the_posts_pagination([
    'screen_reader_text' => ' ',
    'mid_size'  => 2,
    'prev_text' => '<div class="c-pagination__button">'. __('Page précédente', 'digitalcover') .'</div>',
    'next_text' => '<div class="c-pagination__button">'. __('Page suivante', 'digitalcover') .'</div>'
  ]);
@endphp

@if ($pagination)
  <div class="c-pagination">
    {!! $pagination !!}
  </div>
@endif
