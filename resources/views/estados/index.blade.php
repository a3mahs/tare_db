@extends('layouts.main', ['activePage' => 'estados', 'titlePage' => 'Estado'])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Estado Propiedad</h4>
            <p class="card-category">Lista de estados registrados en la base de datos</p>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-12 text-right">
                @can('estado_create')
                <a href="{{ route('estados.create') }}" class="btn btn-sm btn-facebook">Añadir estado</a>
                @endcan
              </div>
            </div>
            <div class="table-responsive">
              <table class="table ">
                <thead class="text-primary">
                  <th> ID </th>
                  <th> Categoria estado</th>
                  <th class="text-right"> Acciones </th>
                </thead>
                <tbody>
                  @forelse ($estados as $estado)
                  <tr>
                    <td>{{ $estado->id }}</td>
                    <td>{{ $estado->estado_propiedad }}</td>
                    <td class="td-actions text-right">
                    @can('estado_show')
                      <a href="{{ route('estados.show', $estado->id) }}" class="btn btn-info"> <i
                          class="material-icons">person</i> </a>
                    @endcan
                    @can('estado_edit')
                      <a href="{{ route('estados.edit', $estado->id) }}" class="btn btn-success"> <i
                          class="material-icons">edit</i> </a>
                    @endcan
                    @can('estado_destroy')
                      <form action="{{ route('estados.destroy', $estado->id) }}" method="post"
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
            {{ $estados->links() }}
          </div>
          <!--End footer-->
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
