@extends('layouts.main', ['activePage' => 'propiedads', 'titlePage' => 'Detalles Propiedad'])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <!--Header-->
          <div class="card-header card-header-primary">
            <h4 class="card-title">Propiedad</h4>
            <p class="card-category">Vista detallada de {{ $propiedad->categoria }}</p>
          </div>
          <!--End header-->
          <!--Body-->
          <div class="card-body">
            <div class="row">
              <!-- first -->
              <div class="col-md-4">
                <div class="card card-user">
                  <div class="card-body">
                    <p class="card-text">
                      <div class="author">
                        <div class="block block-one"></div>
                        <div class="block block-two"></div>
                        <div class="block block-three"></div>
                        <div class="block block-four"></div>
                        <a href="#">
                          <img class="avatar" src="{{ asset('/img/default-avatar.png') }}" alt="">
                          <h5 class="title mt-3">
                            {{ _('Propietario:') }} {{ $propiedad->propietario }}<br>
                            {{ _('Tipo de documento:') }} {{ $documentos[$propiedad->tipo_documento-1]['documento_per'] }}<br>
                            {{ _('Número documento:') }} {{ $propiedad->documento }} <br>
                            {{ _('Contacto propietario:') }} {{ $propiedad->contactos_propietario }} <br>
                            {{ _('Dirección propietario:') }} {{ $propiedad->direccion_propietario }} <br>
                            {{ _('Correo:') }} {{ $propiedad->correo }} <br>
                          </h5>
                        </a>
                        <p class="description">
                          {{ _('ID Propiedad:') }} {{ $propiedad->id }} <br>
                          {{ _('Tipo de propiedad:') }} {{ $propiedad->inmueble->categoria_inmueble }} <br>
                          {{ _('Año:') }} {{ $propiedad->construccion }} <br>
                          {{ _('Estado:') }} {{ $estados[$propiedad->estado-1]['estado_propiedad'] }} <br>
                          {{ _('Dirección:') }} {{ $propiedad->direccion }} <br>
                          {{ _('Estrato:') }} {{ $propiedad->estrato }} <br>
                          {{ _('Barrio:') }} {{ $propiedad->barrio }} <br>
                          {{ _('Ciudad:') }} {{ $propiedad->ciudad }} <br>
                          {{ _('Valor:') }} {{'$'}}{{ $propiedad->valor }} <br>
                          {{ _('Contacto:') }} {{ $propiedad->contactos }} <br>                         
                          {{ _('Notas:') }} @foreach($propiedad->nota as $value)
                                 {{$value}},
                          @endforeach <br>
                          {{ _('Observaciones:') }} {{ $propiedad->observacion }} <br>

                          {{ $propiedad->created_at }}
                        </p>
                      </div>
                    </p>
                  </div>
                  <div class="card-footer">
                    <div class="button-container">
                      <a href="{{ route('propiedads.index') }}" class="btn btn-sm btn-success mr-3"> Volver </a>
                      <a href="{{ route('propiedads.edit', $propiedad->id) }}" class="btn btn-sm btn-primary"> Editar </a>
                      {{-- <button type="submit" class="btn btn-sm btn-primary">Editar</button> --}}
                    </div>
                  </div>
                </div>
              </div>
              <!--end first-->
            </div>
            <!--end row-->
          </div>
          <!--End card body-->
        </div>
        <!--End card-->
      </div>
    </div>
  </div>
</div>
@endsection