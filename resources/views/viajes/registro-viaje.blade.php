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
        <h1>Registro de Viaje</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Registro de Viaje</li>
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
            <h3 class="card-title">Viaje Nuevo</h3>
          </div>

          <div class="card-body">
            <div class="row">
              <div class="col-sm-6">
                 <!-- Date -->
                <div class="form-group">
                    <label>Fecha de carga</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Fecha de salida</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                  </div>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-6">
              <div class="form-group">
                  <label>Fecha de llegada</label>
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask>
                  </div>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Estado de la Carga</label>
                  <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                    <option selected="selected">Cargado</option>
                    <option>Vacio</option>
                    <option>Accidente</option>
                    <option>Robo</option>
                    <option>Otro...</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Semana</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Nombre del Operador</label>
                  <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                    <option selected="selected">Jose Luis</option>
                    <option>Ramon</option>
                    <option>Felipe</option>
                    <option>Toño</option>
                    <option>Lucio</option>
                    <option>Benjamin</option>
                    <option>Ignacio</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Número de Trácto</label>
                  <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                    <option selected="selected">1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Número de Remolque</label>
                  <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                    <option selected="selected">1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Nombre del Cliente</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">METARPOL SA DE CV</option>
                    <option>CAU SA DE CV</option>
                    <option>RACKS Y LAMINADOS SA DE CV</option>
                    <option>INDIGO TRADE MEXICO, SA DE CV</option>
                    <option>J&J PRINTING</option>
                    <option>VENTACERO</option>
                    <option>KLEAN AIR</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-6">
              <div class="form-group">
                  <label>Estado de Origen</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Coahuila</option>
                    <option>Queretaro</option>
                    <option>Tabasco</option>
                    <option>Guanajuato</option>
                    <option>Cd. de México</option>
                    <option>Veracruz</option>
                    <option>Puebla</option>
                  </select>
                </div>                           
              </div>
            </div>

            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Ciudad de Origen</label>
                  <select class="form-control select2"  style="width: 100%;">
                    <option selected="selected">Torreón</option>
                    <option>Gomez Palacio</option>
                    <option>Lerdo</option>
                    <option>Matamoros</option>
                    <option>Pesqueria</option>
                    <option>Fresnillo</option>
                    <option>San Pedro</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Estado de Destino</label>
                  <select class="form-control select2" style="width: 100%;">
                    <option selected="selected">Hidalgo</option>
                    <option>Tamaulipas</option>
                    <option>Sonora</option>
                    <option>Michoacan</option>
                    <option>Guadalajara</option>
                    <option>Chihuahua</option>
                    <option>Quintana Roo</option>
                  </select>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Ciudad de Destino</label>
                  <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                    <option selected="selected">Pesqueria</option>
                    <option>Gomez Palacio</option>
                    <option>Lerdo</option>
                    <option>Matamoros</option>
                    <option>Torreón</option>
                    <option>Fresnillo</option>
                    <option>San Pedro</option>
                  </select>
                </div>
              </div>
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
<link rel="stylesheet" href="{{ asset('css/viajes.css') }}">


<!-- Select2 -->
<link rel="stylesheet" href="{{ asset('plugins/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">


<!-- Theme style -->
<link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">


<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>

<!-- Select2 -->
<script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>

@stop

@section('js')
<script>
  console.log('Hi!');
</script>
@stop