@php
  $data = Single::necrologie();
@endphp

<div data-router-view="page">
  <div class="single-necrologie single-necrologie__post">
    <section class="post-content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-22 col-lg-15 offset-1">
            <div class="single-necrologie__back button-back">
              <a class="button" href={{ get_post_type_archive_link('necrologies') }}>Retour</a>
            </div>
            <div class="single-necrologie__body">
              <div class="row">
                <div class="single-necrologie__thumbnail subcol-lg-6">
                  @include('elements/image', ['data' => $data['image']])
                </div>
                <div class="single-necrologie__content subcol-lg-8 offset-1">
                  <h1 class="single-necrologie__title">{{ $data['name'] }}</h1>
                  <ul>
                    <li>Age : <span><strong>{{ $data['age'] }}</strong></span></li>
                    <li>Date du décès : <span><strong>{{ $data['date_du_deces'] }}</strong></span></li>
                    <li>Lieu du décès : <span><strong>{{ $data['lieu_du_deces'] }}</strong></span></li>
                    <li>Date de naissance : <span><strong>{{ $data['date_de_naissance'] }}</strong></span></li>
                    <li>Premiers voeux : <span><strong>{{ $data['premiers_voeux'] }}</strong></span></li>
                    <li>Voeux perpetuels : <span><strong>{{ $data['voeux_perpetuels'] }}</strong></span></li>
                    <li>Ordination : <span><strong>{{ $data['ordination'] }}</strong></span></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-22 col-lg-7 offset-1">
            <div class="single-necrologie-sidebar sidebar">
              {!! dynamic_sidebar('sidebar-blog') !!}
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</div>
