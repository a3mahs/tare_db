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
                                                <input type="text" class="form-control" name="categoria"
                                                    placeholder="Categoria" value="{{ old('categoria', $propiedad->categoria) }}" autocomplete="off" autofocus>
                                            </div>
                                            <div class="col-sm">
                                                <input type="text" class="form-control" name="construccion"
                                                    placeholder="Año" value="{{ old('construccion', $propiedad->construccion) }}" autocomplete="off" autofocus>
                                            </div>
                                            <div class="col-sm">
                                                <input type="text" class="form-control" name="estado"
                                                    placeholder="Estado" value="{{ old('estado', $propiedad->estado) }}" autocomplete="off" autofocus>
                                            </div>
                                        </div>

                                        <div class="row">
                                          {{-- <label for="title" class="col-sm-2 col-form-label">Post title</label> --}}
                                          <div class="col-sm">
                                              <input type="text" class="form-control" name="direccion"
                                                  placeholder="Dirección" value="{{ old('direccion', $propiedad->direccion) }}" autocomplete="off" autofocus>
                                          </div>
                                          <div class="col-sm">
                                            <input type="text" class="form-control" name="barrio"
                                                placeholder="Barrio/Zona" value="{{ old('barrio', $propiedad->barrio) }}" autocomplete="off" autofocus>
                                        </div>
                                          <div class="col-sm">
                                              <input type="text" class="form-control" name="estrato"
                                                  placeholder="Estrato" value="{{ old('estrato', $propiedad->estrato) }}" autocomplete="off" autofocus>
                                          </div> 
                                      </div>

                                      <div class="row">
                                          {{-- <label for="title" class="col-sm-2 col-form-label">Post title</label> --}}
                                          <div class="col-sm">
                                              <input type="text" class="form-control" name="ciudad"
                                                  placeholder="Ciudad" value="{{ old('ciudad', $propiedad->ciudad) }}" autocomplete="off" autofocus>
                                          </div>
                                          <div class="col-sm">
                                              <input type="text" class="form-control" name="valor"
                                                  placeholder="Valor" value="{{ old('valor', $propiedad->valor) }}" autocomplete="off" autofocus>
                                          </div>
                                          <div class="col-sm">
                                              <input type="text" class="form-control" name="contactos"
                                                  placeholder="Contactos" value="{{ old('contactos', $propiedad->contactos) }}" autocomplete="off" autofocus>
                                          </div>
                                      </div>

                                      <div class="row">
                                          {{-- <label for="title" class="col-sm-2 col-form-label">Post title</label> --}}
                                          <div class="col-sm">
                                              <input type="text" class="form-control" name="propietario"
                                                  placeholder="Propietario" value="{{ old('propietario', $propiedad->propietario) }}" autocomplete="off" autofocus>
                                          </div>
                                          <div class="col-sm">
                                              <input type="text" class="form-control" name="tipo_documento"
                                                  placeholder="Tipo documento" value="{{ old('tipo_documento', $propiedad->tipo_documento) }}" autocomplete="off" autofocus>
                                          </div>
                                          <div class="col-sm">
                                              <input type="text" class="form-control" name="documento"
                                                  placeholder="Número documento" value="{{ old('documento', $propiedad->documento) }}" autocomplete="off" autofocus>
                                          </div>
                                      </div>

                                      <div class="row">
                                          {{-- <label for="title" class="col-sm-2 col-form-label">Post title</label> --}}
                                          <div class="col-sm">
                                              <input type="text" class="form-control" name="contactos_propietario"
                                                  placeholder="Contacto de propietario" value="{{ old('contactos_propietario', $propiedad->contactos_propietario) }}" autocomplete="off" autofocus>
                                          </div>
                                          <div class="col-sm">
                                              <input type="text" class="form-control" name="direccion_propietario"
                                                  placeholder="Dirección de propietario" value="{{ old('direccion_propietario', $propiedad->direccion_propietario) }}" autocomplete="off" autofocus>
                                          </div>
                                          <div class="col-sm">
                                              <input type="text" class="form-control" name="correo"
                                                  placeholder="Correo" value="{{ old('correo', $propiedad->correo) }}" autocomplete="off" autofocus>
                                          </div>
                                      </div>

                                      <div class="row">
                                          {{-- <label for="title" class="col-sm-2 col-form-label">Post title</label> --}}
                                          <div class="col-sm">
                                              <input type="text" class="form-control" name="nota"
                                                  placeholder="Nota" value="{{ old('nota', $propiedad->nota) }}" autocomplete="off" autofocus>
                                          </div>
                                          <div class="col-sm">
                                              <input type="text" class="form-control" name="observacion"
                                                  placeholder="Observación" value="{{ old('observacion', $propiedad->observacion) }}" autocomplete="off" autofocus>
                                          </div>

                                      </div>
                                        {{-- <div class="col-sm-7">
                                            <input type="text" class="form-control" name="title"
                                                placeholder="Ingrese el title" value="{{ old('title', $propiedad->title) }}"
                                                autocomplete="off" autofocus>
                                        </div> --}}
                                    </div>
                                </div>
                            </div>
                            <!--End body-->
                            <!--Footer-->
                            <div class="card-footer ml-auto mr-auto">
                                <a href="{{ route('propiedads.index') }}" class="btn btn-sm btn-success mr-3"> Volver </a>
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
