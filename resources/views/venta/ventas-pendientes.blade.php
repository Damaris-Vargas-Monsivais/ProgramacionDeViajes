@extends('adminlte::page')

@section('title', 'Ventas Pendientes')

@section('content_header')
<h1></h1>
@stop

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Ventas en Curso</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="index">Home</a></li>
          <li class="breadcrumb-item active">Ventas en Curso</li>
        </ol>
      </div>
    </div>
  </div>
</section>

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Ventas en proceso</h3>

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
              <th> </th>
              <th>Carta de instrucción</th>
              <th>Factura</th>
              <th>Fecha de factura</th>
              <th>Venta</th>
              <th>Pago del operador</th>
              <th>Moneda</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>   
                <a class="btn btn-app bg-success" href="datos-venta">
                  <i class="fas fa-edit"></i>
                </a>
                <a class="btn btn-app bg-danger">
                  <i class="fas fa-trash-alt"></i>
                </a>
              </td>
              <td>DT-20-872</td>
              <td>B8039</td>
              <td>09/12/2020</td>
              <td>36800</td>
              <td>36800</td>
              <td>MXN</td>              
            </tr>
            <tr>
              <td>   
                <a class="btn btn-app bg-success" href="datos-venta">
                  <i class="fas fa-edit"></i>
                </a>
                <a class="btn btn-app bg-danger">
                  <i class="fas fa-trash-alt"></i>
                </a>
              </td>
              <td>DT-20-878</td>
              <td>B8042</td>
              <td>09/12/2020</td>
              <td>32000</td>
              <td>29000</td>
              <td>MXN</td>              
            </tr>
            <tr>
              <td>   
                <a class="btn btn-app bg-success" href="datos-venta">
                  <i class="fas fa-edit"></i>
                </a>
                <a class="btn btn-app bg-danger">
                  <i class="fas fa-trash-alt"></i>
                </a>
              </td>
              <td>DT-20-911</td>
              <td>B8063</td>
              <td>19/12/2020</td>
              <td>20000</td>
              <td>20000</td>
              <td>MXN</td>              
            </tr>
            <tr>
              <td>   
                <a class="btn btn-app bg-success" href="datos-venta">
                  <i class="fas fa-edit"></i>
                </a>
                <a class="btn btn-app bg-danger">
                  <i class="fas fa-trash-alt"></i>
                </a>
              </td>
              <td>DT-20-919</td>
              <td>B8081</td>
              <td>02/01/2021</td>
              <td>26000</td>
              <td>25000</td>
              <td>MXN</td>              
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