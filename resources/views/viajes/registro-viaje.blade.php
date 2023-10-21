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
        <h1>Registro de Viaje</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="index">Home</a></li>
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
                  <form class="">
                    <div class="form-group">
                      <input type="date" class="form-control" placeholder="dd/mm/yyyy">
                    </div>
                  </form>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Fecha de salida</label>
                  <form class="">
                    <div class="form-group">
                      <input type="date" class="form-control" placeholder="dd/mm/yyyy">
                    </div>
                  </form>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Fecha de llegada</label>
                  <form class="">
                    <div class="form-group">
                      <input type="date" class="form-control" placeholder="dd/mm/yyyy">
                    </div>
                  </form>
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
                  <div class="form-group">
                      <input type="week" class="form-control" value="yyyy-W00">
                    </div>
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
                    <option>7</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                  </select>
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Número de Remolque</label>
                  <select class="form-control select2 select2-danger" data-dropdown-css-class="select2-danger" style="width: 100%;">
                    <option selected="selected">1</option>
                    <option>2</option>
                    <option>4</option>
                    <option>6</option>
                    <option>8</option>
                    <option>9</option>
                    <option>12</option>
                    <option>13</option>
                    <option>15</option>
                    <option>35</option>
                    <option>36</option>
                    <option>55</option>
                    <option>56</option>
                    <option>58</option>
                    <option>87</option>
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
                  <select class="form-control select2" style="width: 100%;">
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