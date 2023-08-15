@extends('layouts.main', ['activePage' => 'documentos', 'titlePage' => 'Documento'])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Tipo Documento</h4>
            <p class="card-category">Lista de tipo de documento registrados en la base de datos</p>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-12 text-right">
                @can('documento_create')
                <a href="{{ route('documentos.create') }}" class="btn btn-sm btn-facebook">Añadir documento</a>
                @endcan
              </div>
            </div>
            <div class="table-responsive">
              <table class="table ">
                <thead class="text-primary">
                  <th> ID </th>
                  <th> Tipo Documento</th>
                  <th class="text-right"> Acciones </th>
                </thead>
                <tbody>
                  @forelse ($documentos as $documento)
                  <tr>
                    <td>{{ $documento->id }}</td>
                    <td>{{ $documento->documento_per }}</td>
                    <td class="td-actions text-right">
                    @can('documento_show')
                      <a href="{{ route('documentos.show', $documento->id) }}" class="btn btn-info"> <i
                          class="material-icons">person</i> </a>
                    @endcan
                    @can('documento_edit')
                      <a href="{{ route('documentos.edit', $documento->id) }}" class="btn btn-success"> <i
                          class="material-icons">edit</i> </a>
                    @endcan
                    @can('documento_destroy')
                      <form action="{{ route('documentos.destroy', $documento->id) }}" method="post"
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
            {{ $documentos->links() }}
          </div>
          <!--End footer-->
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
