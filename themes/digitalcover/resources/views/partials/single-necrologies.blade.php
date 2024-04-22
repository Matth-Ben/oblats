@php
  $data = Single::necrologie();
  $dataSidebar = get_field('custom_sidebar');
@endphp

<div data-router-view="page">
  <div class="single-necrologie single-necrologie__post">
    <section class="post-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-22 @if ($dataSidebar) col-lg-15 @endif offset-1">
            <div class="single-necrologie__back button-back">
              <a class="button" href={{ get_post_type_archive_link('necrologies') }}>Retour</a>
            </div>
            <div class="single-necrologie__body">
              <h1 class="single-necrologie__title">{{ $data['name'] }}</h1>
              <div class="row">
                <div class="single-necrologie__thumbnail subcol-lg-6">
                  @include('elements/image', ['data' => $data['image']])
                </div>
                <div class="single-necrologie__content subcol-lg-8 offset-1">
                  <div>
                    <p>Nous vous informons que <strong>{{ $data['name'] }}</strong> est décédé {{ $data['date_du_deces'] }} à {{ $data['lieu_du_deces'] }}. Il avait {{ $data['age'] }} ans.</p>
                    <p>{{ $data['name'] }} était né {{ $data['date_de_naissance'] }}</p>
                    @if ($data['voeux_perpetuels'])
                      <p>Il avait prononcé ses vœux ches les OMI {{ $data['voeux_perpetuels'] }}</p>
                    @endif
                    @if ($data['ordination'])
                      <p>Il avait été ordonné prêtre {{ $data['ordination'] }}</p>
                    @endif
                  </div>
                </div>
              </div>
              {!! the_content() !!}
            </div>
          </div>
          @if ($dataSidebar)
            <div class="col-22 col-lg-7 offset-1">
              <div class="single-necrologie-sidebar sidebar">
                @include('blocks/sidebar', ['data' => $dataSidebar])
              </div>
            </div>
          @endif
        </div>
      </div>
    </section>
  </div>
</div>
