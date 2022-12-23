@extends('layouts.app')

@section('content')
  <div data-router-view="page">
    <section class="news">
      <div class="news-head">
        {{-- @include('blocks/cover-slider', ['data' => $data]) --}}
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-22 col-lg-15 offset-1">
            <div class="news-body u-margin">
              <div class="news-posts">
                {{-- {!! $content !!} --}}
                @while(have_posts()) @php the_post() @endphp
                  <div class="subcol-lg-5">
                    @include('components/card-post', ['id' => get_the_ID()])
                  </div>
                @endwhile
              </div>
            </div>
          </div>
          <div class="col-22 col-lg-7 offset-1">
            <div class="news-body u-margin">
              {!! dynamic_sidebar('sidebar-primary') !!}
            </div>
          </div>
        </div>
      </div>

      <div class="news-pagination">
        {{-- {!! posts_nav_link(' ',
          '<span class="prev">',
          '<span class="next">'
        ) !!} --}}
      </div>
    </div>
  </div>
@endsection
