@extends('layouts.main', ['activePage' => 'propiedads', 'titlePage' => 'Inmuebles'])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Inmuebles</h4>
            <p class="card-category">Lista de inmuebles registrados en la base de datos</p>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-12 text-right">
                @can('propiedad_create')
                <a href="{{ route('propiedads.create') }}" class="btn btn-sm btn-facebook">Añadir propiedad</a>
                @endcan
              </div>
            </div>
            <div class="table-responsive">
              <table class="table ">
                <thead class="text-primary">
                  <th> ID </th>
                  <th> Inmueble </th>
                  {{-- <th> Año de Construcción </th> --}}
                  <th> Estado </th>
                  <th> Dirección </th>
                  <th> Estrato </th>
                  <th> Barrio </th>
                  <th> Ciudad </th>
                  {{-- <th> Valor </th> --}}
                  <th> Contacto1 </th>
                  {{-- <th> Propietario </th> --}}
                  {{-- <th> Tipo Documento </th> --}}
                  {{-- <th> Numero </th> --}}
                  {{-- <th> Contactos Propietario </th> --}}
                  {{-- <th> Direccion Propietario </th> --}}
                  {{-- <th> Correo </th> --}}
                  {{-- <th> Nota </th> --}}
                  <th> Observación</th>
                  {{-- <th> Fecha de creación </th> --}}
                  <th class="text-right"> Acciones </th>
                </thead>
                <tbody>
                  @forelse ($propiedads as $propiedad)
                  <tr>
                    <td>{{ $propiedad->id }}</td>
                    <td>{{ $inmuebles[$propiedad->categoria-1]['categoria_inmueble'] }}</td>
                    {{-- <td>{{ $propiedad->construccion }}</td> --}}
                    <td>{{ $estados[$propiedad->estado-1]['estado_propiedad'] }}</td>
                    <td>{{ $propiedad->direccion }}</td>
                    <td>{{ $propiedad->estrato }}</td>
                    <td>{{ $propiedad->barrio }}</td>
                    <td>{{ $propiedad->ciudad }}</td>
                    {{-- <td>{{'$'}}{{ $propiedad->valor }}</td> --}}
                    <td>{{ $propiedad->contacto1 }}</td>
                    {{-- <td>{{ $propiedad->propietario }}</td> --}}
                    {{-- <td>{{ $propiedad->tipo_documento }}</td> --}}
                    {{-- <td>{{ $propiedad->documento }}</td> --}}
                    {{-- <td>{{ $propiedad->contactos_propietario }}</td> --}}
                    {{-- <td>{{ $propiedad->direccion_propietario }}</td> --}}
                    {{-- <td>{{ $propiedad->correo }}</td> --}}
                    {{-- <td>
                      @if ($propiedad->nota) @foreach($propiedad->nota as $value)
                          {{$value}},
                      @endforeach
                      @endif
                  </td> --}}
                    <td>{{ $propiedad->observacion }}</td>
                    <td class="td-actions text-right">
                    @can('propiedad_show')
                      <a href="{{ route('propiedads.show', $propiedad->id) }}" class="btn btn-info"> <i
                          class="material-icons">person</i> </a>
                    @endcan
                    @can('propiedad_edit')
                      <a href="{{ route('propiedads.edit', $propiedad->id) }}" class="btn btn-success"> <i
                          class="material-icons">edit</i> </a>
                    @endcan
                    @can('propiedad_destroy')
                      <form action="{{ route('propiedads.destroy', $propiedad->id) }}" method="post"
                        onsubmit="return confirm('¿Desea eliminar el registro?')" style="display: inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" rel="tooltip" class="btn btn-danger">
                          <i class="material-icons">close</i>
                        </button>
                      </form>
                      @endcan
                    </td>
                  </tr>
                  @empty
                  <tr>
                    <td colspan="2">Sin registros.</td>
                  </tr>
                  @endforelse
                </tbody>
              </table>
              {{-- {{ $users->links() }} --}}
            </div>
          </div>
          <!--Footer-->
          <div class="card-footer mr-auto">
            {{ $propiedads->links() }}
          </div>
          <!--End footer-->
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
