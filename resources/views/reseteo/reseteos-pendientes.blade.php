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
        <h1>Reseteos en Curso</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="index">Home</a></li>
          <li class="breadcrumb-item active">Reseteos en Curso</li>
        </ol>
      </div>
    </div>
  </div>
</section>

<div class="row">
  <div class="col-12">
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Reseteos en proceso</h3>

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
              <th>Fecha de carga de diesel inicial</th>
              <th>Proveedor</th>
              <th>Linker</th>
              <th>Litros de carga inicial</th>
              <th>Pesos</th>
              <th>Litros metrica</th>
              <th>Kilometro inicial</th>
              <th>Kilometro final</th>
              <th>Kilometro recorridos</th>
              <th>Odometro</th>
              <th>Peso</th>
              <th>Báscula</th>
              <th>Litros cargados en viaje</th>
              <th>Importe</th>
              <th>Fecha de carga de litros de diesel</th>
              <th>Rendimiento insite</th>
              <th>Kilometros recorridos</th>
              <th>Litros consumidos</th>
              <th>Carga de diesel</th>
              <th>km recorr/carga diesel</th>
              <th>Diferencia real vs Inside</th>
              <th>Porcentaje de consumo</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <a class="btn btn-app bg-success" href="registro-reseteo">
                  <i class="fas fa-edit"></i>
                </a>
                <a class="btn btn-app bg-danger">
                  <i class="fas fa-trash-alt"></i>
                </a>
              </td>
              <td>11/3/2021</td>
              <td>Punto Gas</td>
              <td>-</td>
              <td>780.64</td>
              <td>16,752.62</td>
              <td>-</td>
              <td>620,417.51</td>
              <td>623,981.68</td>
              <td>3, 564.17</td>
              <td>623,981.00</td>
              <td>-</td>
              <td>-</td>
              <td>500</td>
              <td>10,695.00</td>
              <td>10/3/2021</td>
              <td>2.85</td>
              <td>3564.16</td>
              <td>1,248.84</td>
              <td>1280.64</td>
              <td>2.78</td>
              <td>-31.80</td>
              <td>-2.48%</td>
            </tr>
            <tr>
              <td>
                <a class="btn btn-app bg-success" href="registro-reseteo">
                  <i class="fas fa-edit"></i>
                </a>
                <a class="btn btn-app bg-danger">
                  <i class="fas fa-trash-alt"></i>
                </a>
              </td>
              <td>11/3/2021</td>
              <td>Punto Gas</td>
              <td>-</td>
              <td>780.64</td>
              <td>16,752.62</td>
              <td>-</td>
              <td>620,417.51</td>
              <td>623,981.68</td>
              <td>3, 564.17</td>
              <td>623,981.00</td>
              <td>-</td>
              <td>-</td>
              <td>500</td>
              <td>10,695.00</td>
              <td>10/3/2021</td>
              <td>2.85</td>
              <td>3564.16</td>
              <td>1,248.84</td>
              <td>1280.64</td>
              <td>2.78</td>
              <td>-31.80</td>
              <td>-2.48%</td>
            </tr>
            <tr>
              <td>
                <a class="btn btn-app bg-success" href="registro-reseteo">
                  <i class="fas fa-edit"></i>
                </a>
                <a class="btn btn-app bg-danger">
                  <i class="fas fa-trash-alt"></i>
                </a>
              </td>
              <td>11/3/2021</td>
              <td>Punto Gas</td>
              <td>-</td>
              <td>780.64</td>
              <td>16,752.62</td>
              <td>-</td>
              <td>620,417.51</td>
              <td>623,981.68</td>
              <td>3, 564.17</td>
              <td>623,981.00</td>
              <td>-</td>
              <td>-</td>
              <td>500</td>
              <td>10,695.00</td>
              <td>10/3/2021</td>
              <td>2.85</td>
              <td>3564.16</td>
              <td>1,248.84</td>
              <td>1280.64</td>
              <td>2.78</td>
              <td>-31.80</td>
              <td>-2.48%</td>
            </tr>
            <tr>
              <td>
                <a class="btn btn-app bg-success" href="registro-reseteo">
                  <i class="fas fa-edit"></i>
                </a>
                <a class="btn btn-app bg-danger">
                  <i class="fas fa-trash-alt"></i>
                </a>
              </td>
              <td>11/3/2021</td>
              <td>Punto Gas</td>
              <td>-</td>
              <td>780.64</td>
              <td>16,752.62</td>
              <td>-</td>
              <td>620,417.51</td>
              <td>623,981.68</td>
              <td>3, 564.17</td>
              <td>623,981.00</td>
              <td>-</td>
              <td>-</td>
              <td>500</td>
              <td>10,695.00</td>
              <td>10/3/2021</td>
              <td>2.85</td>
              <td>3564.16</td>
              <td>1,248.84</td>
              <td>1280.64</td>
              <td>2.78</td>
              <td>-31.80</td>
              <td>-2.48%</td>
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