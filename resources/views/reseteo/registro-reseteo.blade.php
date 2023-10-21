@extends('adminlte::page')

@section('title', 'Viaje nuevo')

@section('content_header')
<h1></h1>
@stop

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Registro de Reseteo</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="index">Home</a></li>
          <li class="breadcrumb-item active">Registro de Reseteo</li>
        </ol>
      </div>
    </div>
  </div>
</section>

<section class="content">
  <div class="container-fluid">
    <div class="row">

      <div class="col-md-12">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Reseteo Nuevo</h3>
          </div>

          <div class="card-body">
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Fecha de carga de diesel inicial</label>
                  <form class="">
                    <div class="form-group">
                      <input type="date" class="form-control" value="yyyy-mm-dd">
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Proveedor</label>
                  <input type="text" class="form-control" placeholder="Proveedor de diesel">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Linker</label>
                  <input type="text" class="form-control" placeholder="...">
                </div>
              </div>
              <div class="col-sm-6">
                <label>Litros de carga inicial</label>
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Litros de diesel">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-gas-pump"></i></span>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-6">
                <label>Pesos</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="fas fa-dollar-sign"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Litros metrica</label>
                  <input type="text" class="form-control" placeholder="...">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-6">
                <label>Kilometro inicial</label>
                <div class="input-group mb-3">
                  <input type="text" class="form-control">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-fw fa-tachometer-alt"></i></span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <label>Kilometro final</label>
                <div class="input-group mb-3">
                  <input type="text" class="form-control">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-fw fa-tachometer-alt"></i></span>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-6">              
                <label>Kilometro recorridos</label>
                <div class="input-group mb-3">
                  <input type="text" class="form-control" placeholder="Diferencia de kilometros recorridos" disabled="">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-fw fa-tachometer-alt"></i></span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Odometro</label>
                  <input type="text" class="form-control" placeholder="...">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Peso</label>
                  <input type="text" class="form-control" placeholder="...">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Báscula</label>
                  <input type="text" class="form-control" placeholder="Nombre de la báscula">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-6">
                <label>Litros cargados en viaje</label>
                <div class="input-group mb-3">
                  <input type="text" class="form-control">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-gas-pump"></i></span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <label>Importe</label>
                <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="fas fa-dollar-sign"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Fecha de carga de litros de diesel</label>
                  <form class="">
                    <div class="form-group">
                      <input type="date" class="form-control" placeholder="dd/mm/yyyy">
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Rendimiento insite</label>
                  <input type="text" class="form-control" placeholder="...">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-6">
              <label>Kilometros recorridos</label>
                <div class="input-group mb-3">
                  <input type="text" class="form-control">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-fw fa-tachometer-alt"></i></span>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
              <label>Litros consumidos</label>
                <div class="input-group mb-3">
                  <input type="text" class="form-control">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-gas-pump"></i></span>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-6">
                <label>Carga de diesel</label>
                <div class="input-group mb-3">
                  <input type="text" class="form-control">
                  <div class="input-group-append">
                    <span class="input-group-text"><i class="fas fa-gas-pump"></i></span>
                  </div>
                </div>                
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>km recorr/carga diesel</label>
                  <input type="text" class="form-control" placeholder="Kmtrs" disabled="">
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Diferencia real vs Inside</label>
                  <input type="text" class="form-control" placeholder="Perdida" disabled="">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Porcentaje de consumo</label>
                  <input type="text" class="form-control" placeholder="Porcentaje" disabled="">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-6">
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary-G">Guardar</button>
                </div>
              </div>
            </div>

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
<link rel="stylesheet" href="{{ asset('css/viajes.css') }}">

<!-- Select2 -->
<link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">

<!-- Theme style -->
<link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
@stop

@section('js')
<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

<!-- Select2 -->
<script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
@stop