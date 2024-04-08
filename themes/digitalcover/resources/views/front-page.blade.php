@extends('layouts.app')

@php
  $field = get_field('slides', get_the_id());
  $data = Block::coverSlider($block['data'] = $field);
  $dataSidebar = get_field('custom_sidebar');
@endphp

@section('content')
  <div data-router-view="page">
    <div class="home">
      <div class="home-head">
        @include('blocks/cover-slider', ['data' => $data])
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-22 @if ($dataSidebar) col-lg-15 @endif offset-1">
            {!! the_content() !!}
          </div>
          @if ($dataSidebar)
            <div class="col-22 col-lg-7 offset-1">
              <div class="home-sidebar sidebar">
                  @include('blocks/sidebar', ['data' => $dataSidebar])
              </div>
            </div>
          @endif
        </div>
      </div>
    </div>
  </div>
@endsection
