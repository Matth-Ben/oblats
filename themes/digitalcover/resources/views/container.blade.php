{{--
  Template Name: Conteneur
--}}

@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <div data-router-view="page">
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
