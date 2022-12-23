{{--
  Template Name: Template Container
--}}

@php
  $field = get_fields(get_the_id());
  $data = Block::cover($block['data'] = $field);
@endphp

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <div data-router-view="page">
      @if ($data)
        <div class="page-head">
          @include('blocks/cover', ['data' => $data])
        </div>
      @endif

      <div class="template-container">
        <section class="b-gutenberg">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-22 offset-lg-1">
                {!! the_content() !!}
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  @endwhile
@endsection
