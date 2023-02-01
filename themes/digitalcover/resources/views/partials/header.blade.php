<header class="header">
  <div class="header-top">
    <div class="container-fluid">
      <div class="header-top__wrapper">
        <div class="header-top__nav ">
          <a class="header-top__button body-sm" href="{!! $GLOBALS['options']['header']['button']['url'] !!}">{!! $GLOBALS['options']['header']['button']['title'] !!}</a>
          <a class="header-top__button login body-sm" href="{!! $GLOBALS['options']['header']['login']['url'] !!}">{!! $GLOBALS['options']['header']['login']['title'] !!}</a>
        </div>
      </div>
    </div>
  </div>
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
        <div class="header-nav__list">
          @foreach ($GLOBALS['navigation']['primary_navigation'] as $item)
            <div class="header-nav__item @if($item['children']){{'dropdown'}}@endif">
              @if ($item['children'])
                <div href="{{ $item['url'] }}" class="header-nav__item-link">
                  {!! $item['title'] !!}
                  <span>{{ display_svg('arrow') }}</span>
                </div>
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
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</header>
