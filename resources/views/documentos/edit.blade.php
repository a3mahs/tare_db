@extends('layouts.main', ['activePage' => 'documentos', 'titlePage' => 'Editar documento'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="POST" action="{{ route('documentos.update', $documento->id) }}" class="form-horizontal">
                        @csrf
                        @method('PUT')
                        <div class="card">
                            <!--Header-->
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Editar documento</h4>
                                <p class="card-category">Editar datos de documento</p>
                            </div>
                            <!--End header-->
                            <!--Body-->
                            <div class="card-body">
                                <div class="row">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <input type="text" class="form-control" name="tipo_documento"
                                                    placeholder="Tipo documento" value="{{ old('tipo_documento', $documento->tipo_documento) }}" autocomplete="off" autofocus>
                                            </div>
                
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End body-->
                            <!--Footer-->
                            <div class="card-footer ml-auto mr-auto">
                                <a href="{{ route('documentos.index') }}" class="btn btn-sm btn-success mr-3"> Volver </a>
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
