@extends('adminlte::page')

@section('title', 'Años y meses')

@section('content_header')

@stop

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Viajes por mes y año</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index">Home</a></li>
                    <li class="breadcrumb-item active">Viajes por mes y año</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Clasificación por mes</h3>
              </div>
              <div class="card-body">
                <ul class="pagination pagination-month justify-content-center">
                  <li class="page-item"><a class="page-link" href="#">«</a></li>
                  <li class="page-item">
                      <a class="page-link" href="viajes-terminados">
                          <p class="page-month">Jan</p>
                          <p class="page-year">2023</p>
                      </a>
                  </li>
                  <li class="page-item active">
                      <a class="page-link" href="viajes-terminados">
                          <p class="page-month">Feb</p>
                          <p class="page-year">2023</p>
                      </a>
                  </li>
                  <li class="page-item">
                      <a class="page-link" href="viajes-terminados">
                          <p class="page-month">Mar</p>
                          <p class="page-year">2023</p>
                      </a>
                  </li>
                  <li class="page-item">
                      <a class="page-link" href="viajes-terminados">
                          <p class="page-month">Apr</p>
                          <p class="page-year">2023</p>
                      </a>
                  </li>
                  <li class="page-item">
                      <a class="page-link" href="viajes-terminados">
                          <p class="page-month">May</p>
                          <p class="page-year">2023</p>
                      </a>
                  </li>
                  <li class="page-item">
                      <a class="page-link" href="viajes-terminados">
                          <p class="page-month">Jun</p>
                          <p class="page-year">2023</p>
                      </a>
                  </li>
                  <li class="page-item">
                      <a class="page-link" href="viajes-terminados">
                          <p class="page-month">Jul</p>
                          <p class="page-year">2023</p>
                      </a>
                  </li>
                  <li class="page-item">
                      <a class="page-link" href="viajes-terminados">
                          <p class="page-month">Aug</p>
                          <p class="page-year">2023</p>
                      </a>
                  </li>
                  <li class="page-item">
                      <a class="page-link" href="viajes-terminados">
                          <p class="page-month">Sep</p>
                          <p class="page-year">2023</p>
                      </a>
                  </li>
                  <li class="page-item">
                      <a class="page-link" href="viajes-terminados">
                          <p class="page-month">Oct</p>
                          <p class="page-year">2023</p>
                      </a>
                  </li>
                  <li class="page-item">
                      <a class="page-link" href="viajes-terminados">
                          <p class="page-month">Nov</p>
                          <p class="page-year">2023</p>
                      </a>
                  </li>
                  <li class="page-item">
                      <a class="page-link" href="viajes-terminados">
                          <p class="page-month">Dec</p>
                          <p class="page-year">2023</p>
                      </a>
                  </li>
                  <li class="page-item"><a class="page-link" href="#">»</a></li>
                </ul>
              </div>
            </div>
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
@stop

@section('js')
<script>
  console.log('Hi!');
</script>
@stop