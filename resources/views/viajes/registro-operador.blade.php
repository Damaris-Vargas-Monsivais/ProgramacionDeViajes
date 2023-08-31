@extends('adminlte::page')
<!-----Implementa la vista de adminlte------>
@section('title', 'DUMA')
<!-----Aqui podemos agregar un titulo a nuestra pagina------>
@section('content_header')

@stop
<!-----Agregamos un header a nuestra pagina------>
@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Registro de Operadores</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Registro de Operadores</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-6">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Operador Nuevo</h3>
                    </div>


                    <form>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputName">Nombre del Operador</label>
                                <input type="name" class="form-control" id="exampleInputName" placeholder="Nombre">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputLicencia">Matrícula de la licencia</label>
                                <input type="password" class="form-control" id="exampleInputLicencia" placeholder="Numero de licencia">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputRFC">RFC</label>
                                <input type="RFC" class="form-control" id="exampleInputRFC" placeholder="RFC">
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card card-default">
                                        <div class="card-header">
                                            <h3 class="card-title">Foto del operador</h3>
                                        </div>
                                        <div class="card-body">
                                            <div id="actions" class="row">
                                                <div class="col-lg-6">
                                                    <div class="btn-group w-100">
                                                        <span class="btn btn-success col fileinput-button dz-clickable">
                                                            <i class="fas fa-plus"></i>
                                                            <span>Añadir foto</span>
                                                        </span>
                                                        <button type="submit" class="btn btn-primary col start">
                                                            <i class="fas fa-upload"></i>
                                                            <span>Start upload</span>
                                                        </button>
                                                        <button type="reset" class="btn btn-warning col cancel">
                                                            <i class="fas fa-times-circle"></i>
                                                            <span>Cancelar</span>
                                                        </button>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 d-flex align-items-center">
                                                    <div class="fileupload-process w-100">
                                                        <div id="total-progress" class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0">
                                                            <div class="progress-bar progress-bar-success" style="width: 100%;" data-dz-uploadprogress=""></div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="table table-striped files" id="previews">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Guardar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>



@stop
<!-----Aqui termina el contenido de nuestra pagina------>
<!-----Aqui agregamos css------>
@section('css')
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
<link rel="stylesheet" href="{{ asset('css/tablas.css') }}">
<link rel="stylesheet" href="{{ asset('css/operadores.css') }}">
@stop
<!-----aqui agregamos Java Script------>
@section('js')
<script>
    console.log('Hi!');
</script>
@stop