<header class="header">
  <div class="header-nav">
    <div class="container-fluid">
      <div class="row align-items-center">
        <a href="{{ home_url() }}" aria-label="Accueil" class="header-nav__logo">
          @include('elements/image', ['data' => $GLOBALS['options']['header']['logo']])
        </a>
        <div class="header-nav__toggler">
          <span style="--transition-order: 0"></span>
          <span style="--transition-order: 1"></span>
          <span style="--transition-order: 2"></span>
          <div style="--transition-order: 0"></div>
          <div style="--transition-order: 1"></div>
        </div>
        <ul class="header-nav__list">
          @foreach ($GLOBALS['navigation']['primary_navigation'] as $item)
            <li class="header-nav__item">
              @if ($item['children'])
                <a href="{{ $item['url'] }}" class="header-nav__item-link @if($item['children']){{'dropdown'}}@endif">
                  {!! $item['title'] !!}
                  <span>{{ display_svg('arrow') }}</span>
                </a>
                <div class="header-nav__item-dropdown">
                  <ul class="header-nav__item-dropdown__list">
                    @foreach ($item['children'] as $it)
                      <li class="header-nav__item-dropdown__item"><a href="{{ $it['url'] }}">{{ $it['title'] }}</a></li>
                    @endforeach
                  </ul>
                </div>
              @else
                <a href="{{ $item['url'] }}" class="header-nav__item-link">
                  {!! $item['title'] !!}
                </a>
              @endif
            </li>
          @endforeach
        </ul>
      </div>
    </div>
  </div>
</header>
