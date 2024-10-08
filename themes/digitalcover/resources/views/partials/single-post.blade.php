@php
  $thumbnail_id = get_post_thumbnail_id(get_the_ID());
  $data = Block::cover($block['data'] = [
    'display-breadcrumb' => true,
    'image' => $thumbnail_id,
    'title' => get_the_title(),
  ]);
  $dataSidebar = get_field('custom_sidebar');
@endphp

<div data-router-view="page">
  <div class="single single-post">
    <section class="post-content">
      <div class="single-head">
        @include('blocks/cover', ['data' => $data])
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-22 @if ($dataSidebar) col-lg-15 @endif offset-1">
            <div class="single-back button-back">
              <a class="button" href={{ get_post_type_archive_link('post') }}>Retour</a>
            </div>
            <div class="single-body">
              {!! the_content() !!}
            </div>
          </div>
          @if ($dataSidebar)
            <div class="col-22 col-lg-7 offset-1">
              <div class="single-sidebar sidebar">
                  @include('blocks/sidebar', ['data' => $dataSidebar])
              </div>
            </div>
          @endif
        </div>
      </div>
    </section>
  </div>
</div>
