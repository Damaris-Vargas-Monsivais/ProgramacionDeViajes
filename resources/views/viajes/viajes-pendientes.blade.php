@extends('adminlte::page')

@section('title', 'Viajes Pendientes')

@section('content_header')
<h1></h1>
@stop

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Viajes Pendientes</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="index">Home</a></li>
          <li class="breadcrumb-item active">Viajes Pendientes</li>
        </ol>
      </div>
    </div>
  </div>
</section>

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Viajes en proceso</h3>

        <div class="card-tools">
          <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

            <div class="input-group-append">
              <button type="submit" class="btn btn-default">
                <i class="fas fa-search"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- /.card-header -->
      <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap">
          <thead>
            <tr>
              <th>Acción</th>
              <th>ID</th>
              <th>Progreso</th>
              <th style="width: 40px">Porcentaje</th>
              <th>Fecha de Carga</th>
              <th>Fecha de Salida</th>
              <th>Fecha de Llegada</th>
              <th>Estado de la Carga</th>
              <th>Semana</th>
              <th>Nombre del Operador</th>
              <th>Número de Trácto</th>
              <th>Número de Remolque</th>
              <th>Nombre del Cliente</th>
              <th>Estado de Origen</th>
              <th>Ciudad de Origen</th>
              <th>Estado de Destino</th>
              <th>Ciudad de Destino</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>   
                <a class="btn btn-app bg-success" href="registro-viaje">
                  <i class="fas fa-edit"></i>
                </a>
                <a class="btn btn-app bg-danger">
                  <i class="fas fa-trash-alt"></i>
                </a>
              </td>
              <td>TR11-081</td>
              <td>
                <div class="progress progress-xs">
                  <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                </div>
              </td>
              <td><span class="badge bg-danger">55%</span></td>
              <td>11-7-2023</td>
              <td>12-7-2023</td>
              <td>15-7-2023</td>
              <td>Cargado</td>
              <td>50</td>
              <td>JAIME JARAMILLO RUVALCABA</td>
              <td>11</td>
              <td>8</td>
              <td>EQUIPOS INOXIDABLES DEL NORTE</td>
              <td>Nuevo Leon</td>
              <td>Escobedo</td>
              <td>Durango</td>
              <td>Gomez Palacio</td>
            </tr>
            <tr>
              <td>   
              <a class="btn btn-app bg-success" href="registro-viaje">
                  <i class="fas fa-edit"></i>
                </a>
                <a class="btn btn-app bg-danger">
                  <i class="fas fa-trash-alt"></i>
                </a>
              </td>
              <td>TR14-087</td>
              <td>
                <div class="progress progress-xs progress-striped active">
                  <div class="progress-bar bg-success" style="width: 90%"></div>
                </div>
              </td>
              <td><span class="badge bg-success">90%</span></td>
              <td>11-7-2023</td>
              <td>12-7-2023</td>
              <td>15-7-2023</td>
              <td>Cargado</td>
              <td>60</td>
              <td>EDGAR ALEJANDRO RODRIGUEZ</td>
              <td>7</td>
              <td>35</td>
              <td>METAL MECANICA MACON</td>
              <td>Nuevo Leon</td>
              <td>Escobedo</td>
              <td>Durango</td>
              <td>Gomez Palacio</td>
            </tr>
            <tr>
              <td>   
              <a class="btn btn-app bg-success" href="registro-viaje">
                  <i class="fas fa-edit"></i>
                </a>
                <a class="btn btn-app bg-danger">
                  <i class="fas fa-trash-alt"></i>
                </a>
              </td>
              <td>TR07-081</td>
              <td>
                <div class="progress progress-xs progress-striped active">
                  <div class="progress-bar bg-primary" style="width: 30%"></div>
                </div>
              </td>
              <td><span class="badge bg-primary">30%</span></td>
              <td>11-7-2023</td>
              <td>12-7-2023</td>
              <td>15-7-2023</td>
              <td>Cargado</td>
              <td>35</td>
              <td>LUIS ORTIZ MEDINA</td>
              <td>11</td>
              <td>2</td>
              <td>RENOVANZ SA DE CV</td>
              <td>Nuevo Leon</td>
              <td>Escobedo</td>
              <td>Durango</td>
              <td>Gomez Palacio</td>
            </tr>
            <tr>
              <td>   
              <a class="btn btn-app bg-success" href="registro-viaje">
                  <i class="fas fa-edit"></i>
                </a>
                <a class="btn btn-app bg-danger">
                  <i class="fas fa-trash-alt"></i>
                </a>
              </td>
              <td>TR06-037</td>
              <td>
                <div class="progress progress-xs">
                  <div class="progress-bar bg-warning" style="width: 70%"></div>
                </div>
              </td>
              <td><span class="badge bg-warning">70%</span></td>
              <td>11-7-2023</td>
              <td>12-7-2023</td>
              <td>15-7-2023</td>
              <td>Cargado</td>
              <td>68</td>
              <td>JUAN JOSE DAVILA CORONADO</td>
              <td>14</td>
              <td>55</td>
              <td>METALPOL </td>
              <td>Nuevo Leon</td>
              <td>Escobedo</td>
              <td>Durango</td>
              <td>Gomez Palacio</td>
            </tr>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
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
<link rel="stylesheet" href="{{ asset('css/viajes-proceso.css') }}">
@stop

@section('js')
<script>
  console.log('Hi!');
</script>
@stop