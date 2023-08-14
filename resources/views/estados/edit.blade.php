@extends('layouts.main', ['activePage' => 'estados', 'titlePage' => 'Editar estado'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="POST" action="{{ route('estados.update', $estado->id) }}" class="form-horizontal">
                        @csrf
                        @method('PUT')
                        <div class="card">
                            <!--Header-->
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Editar estado</h4>
                                <p class="card-category">Editar datos de estado</p>
                            </div>
                            <!--End header-->
                            <!--Body-->
                            <div class="card-body">
                                <div class="row">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <input type="text" class="form-control" name="estado_propiedad"
                                                    placeholder="Estado Propiedad" value="{{ old('estado_propiedad', $estado->estado_propiedad) }}" autocomplete="off" autofocus>
                                            </div>
                
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End body-->
                            <!--Footer-->
                            <div class="card-footer ml-auto mr-auto">
                                <a href="{{ route('estados.index') }}" class="btn btn-sm btn-success mr-3"> Volver </a>
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                        <!--End footer-->
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
