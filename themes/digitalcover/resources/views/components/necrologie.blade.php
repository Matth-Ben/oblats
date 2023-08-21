
<div div class="widget widget-necrologie">
  <h3>Necrologie</h3>

  @foreach ($data['data'] as $post)
    <div class="widget widget__necrologie">
      <a href="{{ $post['link'] }}" class="widget card__last-post">
        <div class="widget__necrologie-thumbnail">
          @include('elements/image', ['data' => $post['image']])
        </div>
        <div class="widget__necrologie-body">
          <div class="widget__necrologie-title">{{ $post['title'] }}</div>
          {{-- <div class="card__last-post-excerpt">$excerpt</div> --}}
          <div class="widget__necrologie-link">En savoir plus</div>
        </div>
      </a>
    </div>
  @endforeach
  {{-- @include('components/classic-content', ['data' => $data['classic-content']]) --}}
</div>
