@extends('layouts.app')

@php
  $field = get_fields(get_queried_object_id('post'));
  $data = Block::cover($block['data'] = $GLOBALS['options']['necrologie']);
  $paged = ( get_query_var('paged') ) ? get_query_var('paged') : 1;
  $args = [
    'numberposts'   => -1,
    'post_type' => 'necrologies',
    'meta_key' => 'deces',
    'meta_value' => '1',
    'posts_per_page' => 9,
    'paged' => $paged
  ];
  $the_query = new WP_Query( $args );
@endphp

@section('content')
  <div data-router-view="page">
    <div class="necrologie">
      <div class="necrologie-head">
        @include('blocks/cover', ['data' => $data])
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-22 col-lg-15 offset-1">
            <div class="necrologie-body u-margin">
              <div class="necrologie-posts">
                @if ( $the_query->have_posts() )
                  @while ($the_query->have_posts()) @php($the_query->the_post())
                    @include('components/card-necrologie', ['id' => get_the_ID()])  
                  @endwhile
                @endif
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
