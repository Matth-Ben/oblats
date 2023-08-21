{{--
  Title: Sidebar
  Description: Contenu de la sidebar custom
  Category: template-blocks
  Icon: columns
  Post-Type:
  Keywords:
--}}

@php
  $data = Block::customSidebar($data);
@endphp

<section class="custom-sidebar">
    @foreach ($data['components'] as $component)
      <div class="">
        @include('components/' . $component['name'], ['data' => $component])
      </div>
    @endforeach
</section>
