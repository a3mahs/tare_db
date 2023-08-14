@extends('layouts.main', ['activePage' => 'inmuebles', 'titlePage' => 'Categoria Inmueble'])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Categoria Inmueble</h4>
            <p class="card-category">Lista de inmuebles registrados en la base de datos</p>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-12 text-right">
                @can('inmueble_create')
                <a href="{{ route('inmuebles.create') }}" class="btn btn-sm btn-facebook">Añadir categoria inmueble</a>
                @endcan
              </div>
            </div>
            <div class="table-responsive">
              <table class="table ">
                <thead class="text-primary">
                  <th> ID </th>
                  <th> Categoria Inmueble</th>
                  <th class="text-right"> Acciones </th>
                </thead>
                <tbody>
                  @forelse ($inmuebles as $inmueble)
                  <tr>
                    <td>{{ $inmueble->id }}</td>
                    <td>{{ $inmueble->categoria_inmueble }}</td>
                    <td class="td-actions text-right">
                    @can('inmueble_show')
                      <a href="{{ route('inmuebles.show', $inmueble->id) }}" class="btn btn-info"> <i
                          class="material-icons">person</i> </a>
                    @endcan
                    @can('inmueble_edit')
                      <a href="{{ route('inmuebles.edit', $inmueble->id) }}" class="btn btn-success"> <i
                          class="material-icons">edit</i> </a>
                    @endcan
                    @can('inmueble_destroy')
                      <form action="{{ route('inmuebles.destroy', $inmueble->id) }}" method="post"
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
            {{ $inmuebles->links() }}
          </div>
          <!--End footer-->
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
