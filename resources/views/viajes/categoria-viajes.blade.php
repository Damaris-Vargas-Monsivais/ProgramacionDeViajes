@extends('adminlte::page')

@section('title', 'Clasificación de viajes')

@section('content_header')
<h1></h1>
@stop

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1> </h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index">Home</a></li>
                    <li class="breadcrumb-item active">Clasificación de Viajes</li>
                </ol>
            </div>
        </div>
    </div>
</section>

        <!-- Content -->
        <div class="col-lg-12">
          <div class="mt-2">
            <div class="row">
              <div class="col-lg-12 order-md-2">                
                <div class="row">
                    <div class="col-md-6 col-12">
                      <div class="alert alert-warning alert-dismissible text-center margin-bottom-1x">
                        
                        <i class='far fa-fw fa-solid fa-clock'></i>&nbsp;&nbsp;
                        <a href="viajes-pendientes" class="text-medium">PENDIENTES</a>
                      </div>
                    </div>
                    
                    <div class="col-md-6 col-12">
                      <div class="alert alert-success alert-dismissible text-center margin-bottom-1x">
                   
                      <i class="fas fa-check-circle"></i>&nbsp;&nbsp;
                        <a href="clasificacion-viajes" class="text-medium">ENTREGADOS</a>                                  
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End content -->
      </div>
    </div>
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
<link rel="stylesheet" href="{{ asset('css/tablas.css') }}">



<link rel="stylesheet" href="{{ asset('css/styles.min.css') }}">

@stop

@section('js')
<script>
  console.log('Hi!');
</script>
@stop