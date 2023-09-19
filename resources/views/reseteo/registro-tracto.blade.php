@extends('adminlte::page')

@section('title', 'Tractos')

@section('content_header')
<h1></h1>
@stop

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Registro de Tractos</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index">Home</a></li>
                    <li class="breadcrumb-item active">Registro de Tractos</li>
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
                        <h3 class="card-title">Nuevo Tracto</h3>
                    </div>


                    <form>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputTracto">Numero de Tracto</label>
                                <input type="name" class="form-control" id="exampleInputTracto" placeholder="Tracto">
                            </div>
                        </div>
                        <div class="card-footer">
                                <button type="submit" class="btn btn-primary-G">Guardar</button>
                        </div>
                    </form>
                </div>    
            </div>    
        </div>
    </div>
</section>    
<footer class="main-footer">
    <div class="float-end d-none d-sm-inline">
       <a href="www.gduma.com">Pagina web de Duma</a>.
    </div>
    <strong>Copyright &copy; <b>Todos los derechos reservados</b>.</strong>
</footer>
@stop

@section('css')
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
<link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/formulario.css') }}">
@stop

@section('js')
<script>
  console.log('Hi!');
</script>
@stop