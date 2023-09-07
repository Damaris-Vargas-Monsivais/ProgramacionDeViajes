@extends('adminlte::page')

@section('title', 'DUMA')

@section('content_header')
<h1></h1>
@stop

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Registro de Clientes</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Registro de Clientes</li>
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
                        <h3 class="card-title">Cliente Nuevo</h3>
                    </div>


                    <form>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputName">Nombre del Cliente</label>
                                <input type="name" class="form-control" id="exampleInputName" placeholder="Empresa">
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
<footer class="m-footer">
    <div class="float-right d-none d-sm-block">
        <b>Grupo Duma</b>
    </div>
    <strong>Copyright &copy; <a href="www.gduma.com">Pagina web de Duma</a>.</strong>
</footer>
@stop

@section('css')
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
<link rel="stylesheet" href="{{ asset('css/tablas.css') }}">
@stop

@section('js')
<script>
  console.log('Hi!');
</script>
@stop