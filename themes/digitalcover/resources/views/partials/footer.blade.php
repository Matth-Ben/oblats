<footer class="footer">
  <div class="container-fluid">
    <div class="row">
      <div class="col-22 col-lg-12 offset-1 offset-lg-0">
        @if ($GLOBALS['options']['footer']['logo']['url'])
          <div class="footer-logo">
            <a href="{{ home_url() }}" aria-label="Accueil" class="footer-logo__img">
              @include('elements/image', ['data' => $GLOBALS['options']['footer']['logo']])
            </a>
            @if ($GLOBALS['options']['footer']['description'])
              <div class="footer-description">{{ $GLOBALS['options']['footer']['description'] }}</div>
            @endif
          </div>
        @endif
        <div class="footer-copyright">Copyright © 2021 Oblats france. Site créé par Matthias BENOIT</div>
      </div>
      <div class="col-22 col-lg-5 offset-1">
        <div class="footer-list">
          @foreach ($GLOBALS['navigation']['footer_navigation'] as $item)
            <div class="footer-list__item">
              <a href="{{ $item['url'] }}" class="footer-list__item-link">
                {!! $item['title'] !!}
              </a>
            </div>
          @endforeach
        </div>
      </div>
      <div class="col-22 col-lg-6 offset-1 offset-lg-0">
        <div class="footer-list">
          @foreach ($GLOBALS['navigation']['primary_navigation'] as $item)
            <div class="footer-list__item">
              <a href="{{ $item['url'] }}" class="footer-list__item-link">
                {!! $item['title'] !!}
              </a>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</footer>
