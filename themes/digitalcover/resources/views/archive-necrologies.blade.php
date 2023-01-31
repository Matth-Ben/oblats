@extends('layouts.app')

@php
  $field = get_fields(get_queried_object_id('post'));
  $data = Block::cover($block['data'] = $GLOBALS['options']['necrologie']);
@endphp

@section('content')
  <div data-router-view="page">
    <section class="necrologie">
      <div class="necrologie-head">
        @include('blocks/cover', ['data' => $data])
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-22 col-lg-15 offset-1">
            <div class="necrologie-body u-margin">
              <div class="necrologie-posts">
                @while(have_posts()) @php the_post() @endphp
                  @include('components/card-necrologie', ['id' => get_the_ID()])
                @endwhile
              </div>
            </div>
          </div>
          <div class="col-22 col-lg-7 offset-1">
            <div class="necrologie-body sidebar">
              {!! dynamic_sidebar('sidebar-primary') !!}
            </div>
          </div>
        </div>
      </div>

      <div class="necrologie-pagination">
        @include('components/pagination')
      </div>
    </div>
  </div>
@endsection
