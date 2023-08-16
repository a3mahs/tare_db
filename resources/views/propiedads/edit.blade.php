@extends('layouts.main', ['activePage' => 'propiedads', 'titlePage' => 'Editar Propiedad'])
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <form method="POST" action="{{ route('propiedads.update', $propiedad->id) }}" class="form-horizontal">
                        @csrf
                        @method('PUT')
                        <div class="card">
                            <!--Header-->
                            <div class="card-header card-header-primary">
                                <h4 class="card-title">Editar propiedad</h4>
                                <p class="card-category">Editar datos del propiedad</p>
                            </div>
                            <!--End header-->
                            <!--Body-->
                            <div class="card-body">
                                <h6 class="card-subtitle mb-2 text-muted text-center">DATOS INMUEBLE</h6>
                                <div class="row">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <select class="form-control" name="categoria" required>
                                                    <option value="0">Tipo Inmueble</option>
                                                    @foreach ($inmuebles as $inmueble)
                                                        @if ($propiedad->categoria == $inmueble['id'])
                                                            <option value="{{ $inmueble['id'] }}" selected>
                                                                {{ $inmueble['categoria_inmueble'] }}</option>
                                                        @else
                                                            <option value="{{ $inmueble['id'] }}">
                                                                {{ $inmueble['categoria_inmueble'] }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-sm">
                                                <input type="text" class="form-control" name="construccion"
                                                    placeholder="Año"
                                                    value="{{ old('construccion', $propiedad->construccion) }}"
                                                    autocomplete="off" autofocus>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm">
                                                <select class="form-control" name="estado" required>
                                                    <option value="0">Estado</option>
                                                    @foreach ($estados as $estado)
                                                        @if ($propiedad->estado == $estado['id'])
                                                            <option value="{{ $estado['id'] }}" selected>
                                                                {{ $estado['estado_propiedad'] }}</option>
                                                        @else
                                                            <option value="{{ $estado['id'] }}">
                                                                {{ $estado['estado_propiedad'] }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-sm">
                                                <input type="text" class="form-control" name="direccion"
                                                    placeholder="Dirección"
                                                    value="{{ old('direccion', $propiedad->direccion) }}"
                                                    autocomplete="off" autofocus>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm">
                                                <input type="text" class="form-control" name="barrio"
                                                    placeholder="Barrio/Zona"
                                                    value="{{ old('barrio', $propiedad->barrio) }}" autocomplete="off"
                                                    autofocus>
                                            </div>
                                            <div class="col-sm">
                                                <input type="text" class="form-control" name="estrato"
                                                    placeholder="Estrato" value="{{ old('estrato', $propiedad->estrato) }}"
                                                    autocomplete="off" autofocus>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm">
                                                <input type="text" class="form-control" name="ciudad"
                                                    placeholder="Ciudad" value="{{ old('ciudad', $propiedad->ciudad) }}"
                                                    autocomplete="off" autofocus required>
                                            </div>
                                            <div class="col-sm">
                                                <input type="text" class="form-control" name="valor"
                                                    placeholder="Valor" value="{{ old('valor', $propiedad->valor) }}"
                                                    autocomplete="off" autofocus>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm">
                                                <input type="text" class="form-control" name="contacto1"
                                                    placeholder="Contacto1"
                                                    value="{{ old('contacto1', $propiedad->contacto1) }}"
                                                    autocomplete="off" autofocus required>
                                            </div>
                                            <div class="col-sm">
                                                <input type="text" class="form-control" name="contacto2"
                                                    placeholder="Contacto2"
                                                    value="{{ old('contacto2', $propiedad->contacto2) }}"
                                                    autocomplete="off" autofocus>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <h6 class="card-subtitle mb-2 text-muted text-center">DATOS PRPIETARIO</h6>
                                <div class="row">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <input type="text" class="form-control" name="propietario"
                                                    placeholder="Propietario"
                                                    value="{{ old('propietario', $propiedad->propietario) }}"
                                                    autocomplete="off" autofocus>
                                            </div>
                                            <div class="col-sm">
                                                <select class="form-control" name="tipo_documento" required>
                                                    <option value="0">Tipo de Documento</option>
                                                    @foreach ($documentos as $documento)
                                                        @if ($propiedad->tipo_documento == $documento['id'])
                                                            <option value="{{ $documento['id'] }}" selected>
                                                                {{ $documento['documento_per'] }}</option>
                                                        @else
                                                            <option value="{{ $documento['id'] }}">
                                                                {{ $documento['documento_per'] }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm">
                                                <input type="text" class="form-control" name="documento"
                                                    placeholder="Número"
                                                    value="{{ old('documento', $propiedad->documento) }}"
                                                    autocomplete="off" autofocus>
                                            </div>
                                            <div class="col-sm">
                                                <input type="text" class="form-control" name="contacto1_propietario"
                                                    placeholder="Contacto1 de propietario"
                                                    value="{{ old('contacto1_propietario', $propiedad->contacto1_propietario) }}"
                                                    autocomplete="off" autofocus required>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-sm">
                                                <input type="text" class="form-control" name="contacto2_propietario"
                                                    placeholder="Contacto2 de propietario"
                                                    value="{{ old('contacto2_propietario', $propiedad->contacto2_propietario) }}"
                                                    autocomplete="off" autofocus>
                                            </div>
                                            <div class="col-sm">
                                                <input type="text" class="form-control" name="direccion_propietario"
                                                    placeholder="Dirección de propietario"
                                                    value="{{ old('direccion_propietario', $propiedad->direccion_propietario) }}"
                                                    autocomplete="off" autofocus>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm">
                                                <input type="text" class="form-control" name="correo"
                                                    placeholder="Correo" value="{{ old('correo', $propiedad->correo) }}"
                                                    autocomplete="off" autofocus>
                                            </div>
                                            <div class="col-sm">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <h6 class="card-subtitle mb-2 text-muted text-center">OBSERVACIONES</h6>
                                <div class="row">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <input type="text" class="form-control" name="observacion"
                                                    placeholder="Observación"
                                                    value="{{ old('observacion', $propiedad->observacion) }}"
                                                    autocomplete="off" autofocus>
                                            </div>
                                            <div class="col-sm">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End body-->
                            <!--Footer-->
                            <div class="card-footer ml-auto mr-auto">
                                <a href="{{ route('propiedads.index') }}" class="btn btn-success"> Volver
                                </a>
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                </div>
                <!--End footer-->
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
