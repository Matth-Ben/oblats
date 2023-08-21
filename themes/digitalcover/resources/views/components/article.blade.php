
<div div class="f-articles widget widget-last-posts">
    <h3>Nos articles</h3>

    @foreach ($data['data'] as $post)
      <div class="f-articles__post">
        <a href="{{ $post['link'] }}" class="widget card__last-post">
          <div class="card__last-post-thumbnail">
            @include('elements/image', ['data' => $post['image']])
          </div>
          <div class="card__last-post-body">
            <div class="card__last-post-title">{{ $post['title'] }}</div>
            {{-- <div class="card__last-post-excerpt">$excerpt</div> --}}
            <div class="card__last-post-link">En savoir plus</div>
          </div>
        </a>
      </div>
    @endforeach
    {{-- @include('components/classic-content', ['data' => $data['classic-content']]) --}}
  </div>
  