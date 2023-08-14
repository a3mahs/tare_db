@extends('layouts.main', ['activePage' => 'documentos', 'titlePage' => 'Detalles de tipo documentos'])
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <!--Header-->
          <div class="card-header card-header-primary">
            <h4 class="card-title">Documento</h4>
            <p class="card-category">Vista detallada de {{ $documento->tipo_documento }}</p>
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
                            {{ _('Detalles') }}<br>
                          </h5>
                        </a>
                        <p class="description">
                          {{ _('ID Documento:') }} {{ $documento->id }} <br>
                          {{ _('Tipo Documento:') }} {{ $documento->tipo_documento }} <br>
                          {{ $documento->created_at }}
                        </p>
                      </div>
                    </p>
                  </div>
                  <div class="card-footer">
                    <div class="button-container">
                      <a href="{{ route('documentos.index') }}" class="btn btn-sm btn-success mr-3"> Volver </a>
                      <a href="{{ route('documentos.edit', $documento->id) }}" class="btn btn-sm btn-primary"> Editar </a>
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