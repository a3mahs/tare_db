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
                                <div class="row">
                                    <div class="container">
                                        {{-- <label for="title" class="col-sm-2 col-form-label">Title</label> --}}
                                        <div class="row">
                                            {{-- <label for="title" class="col-sm-2 col-form-label">Post title</label> --}}
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
                                        </div>

                                        <div class="row">
                                            {{-- <label for="title" class="col-sm-2 col-form-label">Post title</label> --}}
                                            <div class="col-sm">
                                                <input type="text" class="form-control" name="direccion"
                                                    placeholder="Dirección"
                                                    value="{{ old('direccion', $propiedad->direccion) }}"
                                                    autocomplete="off" autofocus>
                                            </div>
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
                                            {{-- <label for="title" class="col-sm-2 col-form-label">Post title</label> --}}
                                            <div class="col-sm">
                                                <input type="text" class="form-control" name="ciudad"
                                                    placeholder="Ciudad" value="{{ old('ciudad', $propiedad->ciudad) }}"
                                                    autocomplete="off" autofocus>
                                            </div>
                                            <div class="col-sm">
                                                <input type="text" class="form-control" name="valor"
                                                    placeholder="Valor" value="{{ old('valor', $propiedad->valor) }}"
                                                    autocomplete="off" autofocus>
                                            </div>
                                            <div class="col-sm">
                                                <input type="text" class="form-control" name="contactos"
                                                    placeholder="Contactos"
                                                    value="{{ old('contactos', $propiedad->contactos) }}"
                                                    autocomplete="off" autofocus>
                                            </div>
                                        </div>

                                        <div class="row">
                                            {{-- <label for="title" class="col-sm-2 col-form-label">Post title</label> --}}
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
                                            <div class="col-sm">
                                                <input type="text" class="form-control" name="documento"
                                                    placeholder="Número"
                                                    value="{{ old('documento', $propiedad->documento) }}"
                                                    autocomplete="off" autofocus>
                                            </div>
                                        </div>

                                        <div class="row">
                                            {{-- <label for="title" class="col-sm-2 col-form-label">Post title</label> --}}
                                            <div class="col-sm">
                                                <input type="text" class="form-control" name="contacto1_propietario"
                                                    placeholder="Contacto de propietario"
                                                    value="{{ old('contactos_propietario', $propiedad->contactos_propietario) }}"
                                                    autocomplete="off" autofocus>
                                            </div>
                                            <div class="col-sm">
                                                <input type="text" class="form-control" name="contacto2_propietario"
                                                    placeholder="Contacto de propietario"
                                                    value="{{ old('contactos_propietario', $propiedad->contactos_propietario) }}"
                                                    autocomplete="off" autofocus>
                                            </div>
                                            <div class="col-sm">
                                                <input type="text" class="form-control" name="direccion_propietario"
                                                    placeholder="Dirección de propietario"
                                                    value="{{ old('direccion_propietario', $propiedad->direccion_propietario) }}"
                                                    autocomplete="off" autofocus>
                                            </div>
                                            <div class="col-sm">
                                                <input type="text" class="form-control" name="correo"
                                                    placeholder="Correo" value="{{ old('correo', $propiedad->correo) }}"
                                                    autocomplete="off" autofocus>
                                            </div>
                                        </div>

                                        {{-- <div class="row">
                                            <label for="nota" class="col-sm-2 col-form-label">Lista Notas</label>
                                            <div class="col-sm-7">
                                                <div class="form-group">
                                                    <div class="tab-content">
                                                        <div class="tab-pane active">
                                                            <table class="table">
                                                                <tbody>
                                                                    @foreach ($propiedad as $id => $nota)
                                                                    <tr>
                                                                        <td>
                                                                            <div class="form-check">
                                                                                <label class="form-check-label">
                                                                                    <input class="form-check-input" type="checkbox" name="nota[]"
                                                                                        value="{{ $id }}"
                                                                                    >
                                                                                    <span class="form-check-sign">
                                                                                        <span class="check"></span>
                                                                                    </span>
                                                                                </label>
                                                                            </div>
                                                                        </td>
                                                                        <td>
                                                                            {{ $propiedad }}
                                                                        </td>
                                                                    </tr>
                                                                    @endforeach
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div> --}}

                                        <div class="row"> 
                                            <label for="nota" class="col-sm-2 col-form-label">Lista Notas</label>                                          
                                            <div class="col-sm">
                                                <input type="text" class="form-control" name="observacion"
                                                    placeholder="Observación"
                                                    value="{{ old('observacion', $propiedad->observacion) }}"
                                                    autocomplete="off" autofocus>
                                              
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--End body-->
                            <!--Footer-->
                            <div class="card-footer ml-auto mr-auto">
                                <a href="{{ route('propiedads.index') }}" class="btn btn-sm btn-success mr-3"> Volver
                                </a>
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
