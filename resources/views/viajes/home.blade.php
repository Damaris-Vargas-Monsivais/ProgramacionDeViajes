@extends('adminlte::page')

@section('title', 'DUMA')

@section('content_header')
<h1></h1>
@stop

@section('content')
        <!-- Content -->
        <div class="col-lg-9">
         

          <div class="mt-2">
            <div class="row">
              <div class="col-lg-12 order-md-2">                
                <div class="row">
                    <div class="col-md-6 col-12">
                      <div class="alert alert-warning alert-dismissible text-center margin-bottom-1x">
                        
                        <i class="icon-clock"></i>&nbsp;&nbsp;
                        <a href="viajes-pendientes" class="text-medium">PENDIENTES</a>
                        
                      </div>
                    </div>
                    

                    <div class="col-md-6 col-12">
                      <div class="alert alert-success alert-dismissible text-center margin-bottom-1x">
                        
                        <i class="icon-check-circle"></i>&nbsp;&nbsp;
                        <a href="viajes-terminados" class="text-medium">ENTREGADOS</a>
                        
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
    <footer class="m-footer">
  <div class="float-right d-none d-sm-block">
    <a href="www.gduma.com">Pagina web de Duma</a>.
  </div>
  <strong>Copyright &copy; <b>Todos los derechos reservados</b>.</strong>
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