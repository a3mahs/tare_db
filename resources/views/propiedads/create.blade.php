@extends('layouts.main', ['activePage' => 'propiedads', 'titlePage' => 'Nuevo Inmueble'])

@section('content')
    <div class="content">
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-12">
                    <form method="POST" action="{{ route('propiedads.store') }}" class="form-horizontal">
                        @csrf
                        <div class="card ">
                            <!--Header-->
                            <div class="card-header card-header-primary">
                                <p class="card-category">Ingresar datos</p>
                            </div>
                            <!--End header-->
                            <!--Body-->

                            <div class="card-body">
                                @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <div class="li">{{$error}}</div>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif
                                <h6 class="card-subtitle mb-2 text-muted text-center">DATOS INMUEBLE</h6>
                                <div class="row">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <select class="form-control" name="categoria" required>
                                                    <option value="">Tipo Inmueble</option>
                                                    @foreach ($inmuebles as $inmueble)
                                                        @if ($inmueble['id'] == old('categoria'))
                                                            <option value="{{ $inmueble['id'] }}" selected>
                                                                {{ $inmueble['categoria_inmueble'] }}</option>
                                                        @else
                                                            <option value="{{ $inmueble['id'] }}">
                                                                {{ $inmueble['categoria_inmueble'] }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('categoria'))
                                                    <span class="error text-danger"
                                                        for="input-categoria">{{ $errors->first('categoria') }}</span>
                                                @endif
                                            </div>
                                            {{--  --}}
                                            <div class="col-sm">
                                                <input type="number" class="form-control" name="construccion"
                                                    placeholder="Año" autocomplete="off" value="{{old('construccion')}}" autofocus pattern="[0-9]{1,4}"
                                                    title="Ejemplo: 2023">
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-sm">
                                                <select class="form-control" name="estado" required>
                                                    <option value="">Estado</option>
                                                    @foreach ($estados as $estado)
                                                        @if ($estado['id'] == old('estado'))
                                                            <option value="{{ $estado['id'] }}" selected>
                                                                {{ $estado['estado_propiedad'] }}</option>
                                                        @else
                                                            <option value="{{ $estado['id'] }}">
                                                                {{ $estado['estado_propiedad'] }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('estado'))
                                                    <span class="error text-danger"
                                                        for="input-estado">{{ $errors->first('estado') }}</span>
                                                @endif
                                            </div>

                                            <div class="col-sm">
                                                <input type="text" class="form-control" name="direccion"
                                                    placeholder="Dirección" value="{{old('direccion')}}" autocomplete="off" autofocus>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-sm">
                                                <input type="text" class="form-control" name="barrio"
                                                    placeholder="Barrio/Zona" value="{{old('barrio')}}" autocomplete="off" autofocus
                                                    pattern="[A-Za-z]{4-16}">
                                            </div>
                                            <div class="col-sm">
                                                <input type="number" class="form-control" name="estrato"
                                                    placeholder="Estrato" value="{{old('estrato')}}" autocomplete="off" autofocus pattern="[0-9]{10}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm">
                                                <input type="text" class="form-control" name="ciudad"
                                                    placeholder="Ciudad" autocomplete="off" value="{{old('ciudad')}}" autofocus
                                                    pattern="[A-Za-z]{4-16}" required>
                                            </div>
                                            <div class="col-sm">
                                                <input type="text" class="form-control" name="valor"
                                                    placeholder="Valor" value="{{old('valor')}}" autocomplete="off" autofocus pattern="[0-9]{1-16}">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm">
                                                <input type="number" class="form-control" name="contacto1"
                                                    placeholder="Contacto1" value="{{old('contacto1')}}" autocomplete="off" autofocus pattern="[0-9]{10}"
                                                    required>
                                            </div>
                                            <div class="col-sm">
                                                <input type="number" class="form-control" name="contacto2"
                                                    placeholder="Contacto2" autocomplete="off" value="{{old('contacto2')}}" autofocus
                                                    pattern="[0-9]{10}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <h6 class="card-subtitle mb-2 text-muted text-center">DATOS PROPIETARIO</h6>
                                <div class="row">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm">
                                                <input type="text" class="form-control" name="propietario"
                                                    placeholder="Propietario" value="{{old('propietario')}}" autocomplete="off" autofocus>
                                            </div>
                                            <div class="col-sm">
                                                <select class="form-control" name="tipo_documento" required>
                                                    <option value="">Tipo de Documento</option>
                                                    @foreach ($documentos as $documento)
                                                        @if ($documento['id'] == old('tipo_documento'))
                                                            <option value="{{ $documento['id'] }}" selected>
                                                                {{ $documento['documento_per'] }}</option>
                                                        @else
                                                            <option value="{{ $documento['id'] }}">
                                                                {{ $documento['documento_per'] }}</option>
                                                        @endif
                                                    @endforeach
                                                </select>
                                                @if ($errors->has('tipo_documento'))
                                                    <span class="error text-danger"
                                                        for="input-tipo_documento">{{ $errors->first('tipo_documento') }}</span>
                                                @endif
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-sm">
                                                <input type="number" class="form-control" name="documento"
                                                    placeholder="Número documento" value="{{old('documento')}}" autocomplete="off" autofocus
                                                    pattern="[0-9]{10}">
                                            </div>
                                            <div class="col-sm">
                                                <input type="number" class="form-control" name="contacto1_propietario"
                                                    placeholder="Contacto1 de propietario" value="{{old('contacto1_propietario')}}" autocomplete="off" autofocus
                                                    pattern="[0-9]{10}" required>
                                            </div>
                                        </div><br>
                                        <div class="row">
                                            <div class="col-sm">
                                                <input type="number" class="form-control" name="contacto2_propietario"
                                                    placeholder="Contacto2 de propietario" value="{{old('contacto2_propietario')}}" autocomplete="off" autofocus
                                                    pattern="[0-9]{10}">
                                            </div>
                                            <div class="col-sm">
                                                <input type="text" class="form-control" name="direccion_propietario"
                                                    placeholder="Dirección de propietario" value="{{old('direccion_propietario')}}" autocomplete="off" autofocus>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm">
                                                <input type="email" class="form-control" name="correo"
                                                    placeholder="Correo" autocomplete="off" value="{{old('correo')}}" autofocus
                                                    pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
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
                                            {{-- <label for="notas" class="col-sm-2 col-form-label">Notas:</label>
                                            <div class="col-sm">
                                                <ul class="list-group list-group-flush">
                                                    <li class="list-group-item"><input type="checkbox" name="nota[]"
                                                            value="Llamar"> Llamar</li>
                                            </div> --}}
                                            <div class="col-sm">
                                                <textarea class="form-control" name="observacion" value="{{old('observacion')}}" placeholder="Observación..." autocomplete="off" autofocus></textarea>
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
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                            <!--End footer-->
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
@endsection
