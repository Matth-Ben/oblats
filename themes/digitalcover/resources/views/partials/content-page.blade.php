@php
  $field = get_fields(get_the_id());
  $data = Block::cover($block['data'] = $field);
  $dataSidebar = get_field('custom_sidebar');
@endphp

<div class="page" data-router-view="page">
  <div class="page-head">
    @if ($data["title"])
      @include('blocks/cover', ['data' => $data])
    @endif
  </div>

  <div class="container-fluid">
    <div class="row">
      <div class="col-22 @if ($dataSidebar) col-lg-15 @endif offset-1">{!! the_content() !!}</div>
      @if ($dataSidebar)
        <div class="col-22 col-lg-7 offset-1">
          <div class="single-sidebar sidebar">
            @include('blocks/sidebar', ['data' => $dataSidebar])
          </div>
        </div>
      @endif
    </div>
  </div>
</div>
