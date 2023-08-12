@extends('layouts.main', ['activePage' => 'propiedads', 'titlePage' => 'Nuevo Post'])

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
                                <h4 class="card-title">Propiedad</h4>
                                <p class="card-category">Ingresar datos del la nueva propiedad</p>
                            </div>
                            <!--End header-->
                            <!--Body-->
                            <div class="card-body">
                                <div class="row">
                                    <div class="container">
                                        <div class="row">
                                            {{-- <label for="title" class="col-sm-2 col-form-label">Post title</label> --}}
                                            <div class="col-sm">
                                                <input type="text" class="form-control" name="categoria"
                                                    placeholder="Categoria" autocomplete="off" autofocus>
                                            </div>
                                            <div class="col-sm">
                                                <input type="text" class="form-control" name="construccion"
                                                    placeholder="Año" autocomplete="off" autofocus>
                                            </div>
                                            <div class="col-sm">
                                                <input type="text" class="form-control" name="estado"
                                                    placeholder="Estado" autocomplete="off" autofocus>
                                            </div>
                                        </div>

                                        <div class="row">
                                            {{-- <label for="title" class="col-sm-2 col-form-label">Post title</label> --}}
                                            <div class="col-sm">
                                                <input type="text" class="form-control" name="direccion"
                                                    placeholder="Dirección" autocomplete="off" autofocus>
                                            </div>
                                            <div class="col-sm">
                                              <input type="text" class="form-control" name="barrio"
                                                  placeholder="Barrio/Zona" autocomplete="off" autofocus>
                                          </div>
                                            <div class="col-sm">
                                                <input type="text" class="form-control" name="estrato"
                                                    placeholder="Estrato" autocomplete="off" autofocus>
                                            </div> 
                                        </div>

                                        <div class="row">
                                            {{-- <label for="title" class="col-sm-2 col-form-label">Post title</label> --}}
                                            <div class="col-sm">
                                                <input type="text" class="form-control" name="ciudad"
                                                    placeholder="Ciudad" autocomplete="off" autofocus>
                                            </div>
                                            <div class="col-sm">
                                                <input type="text" class="form-control" name="valor"
                                                    placeholder="Valor" autocomplete="off" autofocus>
                                            </div>
                                            <div class="col-sm">
                                                <input type="text" class="form-control" name="contactos"
                                                    placeholder="Contactos" autocomplete="off" autofocus>
                                            </div>
                                        </div>

                                        <div class="row">
                                            {{-- <label for="title" class="col-sm-2 col-form-label">Post title</label> --}}
                                            <div class="col-sm">
                                                <input type="text" class="form-control" name="propietario"
                                                    placeholder="Propietario" autocomplete="off" autofocus>
                                            </div>
                                            <div class="col-sm">
                                                <input type="text" class="form-control" name="tipo_documento"
                                                    placeholder="Tipo documento" autocomplete="off" autofocus>
                                            </div>
                                            <div class="col-sm">
                                                <input type="text" class="form-control" name="documento"
                                                    placeholder="Número documento" autocomplete="off" autofocus>
                                            </div>
                                        </div>

                                        <div class="row">
                                            {{-- <label for="title" class="col-sm-2 col-form-label">Post title</label> --}}
                                            <div class="col-sm">
                                                <input type="text" class="form-control" name="contactos_propietario"
                                                    placeholder="Contacto de propietario" autocomplete="off" autofocus>
                                            </div>
                                            <div class="col-sm">
                                                <input type="text" class="form-control" name="direccion_propietario"
                                                    placeholder="Dirección de propietario" autocomplete="off" autofocus>
                                            </div>
                                            <div class="col-sm">
                                                <input type="text" class="form-control" name="correo"
                                                    placeholder="Correo" autocomplete="off" autofocus>
                                            </div>
                                        </div>

                                        <div class="row">
                                            {{-- <label for="title" class="col-sm-2 col-form-label">Post title</label> --}}
                                            <div class="col-sm">
                                                <input type="text" class="form-control" name="nota"
                                                    placeholder="Nota" autocomplete="off" autofocus>
                                            </div>
                                            <div class="col-sm">
                                                <input type="text" class="form-control" name="observacion"
                                                    placeholder="Observación" autocomplete="off" autofocus>
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
