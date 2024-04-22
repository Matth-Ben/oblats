@extends('layouts.app')

@php
  $field = get_fields(get_queried_object_id());
  $data = Block::cover($block['data'] = $field);
  $categories = get_categories();
  $zones = get_terms(['taxonomy' => 'zones']);
  $dataSidebar = $field['custom_sidebar'];
@endphp

@section('content')
  <div data-router-view="page">
    <section class="news">
      <div class="news-head">
        @include('blocks/cover', ['data' => $data])
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-22 @if ($dataSidebar) col-lg-15 @endif offset-1">
            <div class="news-body u-margin">
              <div class="news-filter"></div>
              <div class="news-posts">
                @while(have_posts()) @php the_post() @endphp
                  <div class="subcol-xxs-22 @if ($dataSidebar) subcol-lg-7 @else subcol-lg-4 @endif">
                    @include('components/card-post', ['id' => get_the_ID()])
                  </div>
                @endwhile
              </div>
            </div>
          </div>
          @if ($dataSidebar)
            <div class="col-22 col-lg-7 offset-1">
              <div class="single-necrologie-sidebar sidebar">
                @include('blocks/sidebar', ['data' => $dataSidebar])
              </div>
            </div>
          @endif
        </div>
      </div>

      <div class="news-pagination">
        @include('components/pagination')
      </div>
    </div>
  </div>
@endsection
