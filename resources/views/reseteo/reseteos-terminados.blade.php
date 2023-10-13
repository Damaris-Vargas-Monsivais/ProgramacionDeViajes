@extends('adminlte::page')

@section('title', 'Viajes Terminados')

@section('content_header')
<h1></h1>
@stop

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Reseteos Finalizadas</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index">Home</a></li>
                    <li class="breadcrumb-item active">Reseteos Finalizadas</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Reseteos Terminados</h3>

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

            <div class="card-body">
                <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12 col-md-6">
                            <div class="dt-buttons btn-group flex-wrap">
                                <button class="btn btn-secondary buttons-excel buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>Excel</span></button>
                                <button class="btn btn-secondary buttons-pdf buttons-html5" tabindex="0" aria-controls="example1" type="button"><span>PDF</span></button>
                                <button class="btn btn-secondary buttons-print" tabindex="0" aria-controls="example1" type="button"><span>Print</span></button>
                            </div>
                        </div>
                    </div>
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
                                        <div class="icheck-primary">
                                            <input type="checkbox" value="" id="check1">
                                            <label for="check1"></label>
                                        </div>
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
                                        <div class="icheck-primary">
                                            <input type="checkbox" value="" id="check1">
                                            <label for="check1"></label>
                                        </div>
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
                                        <div class="icheck-primary">
                                            <input type="checkbox" value="" id="check1">
                                            <label for="check1"></label>
                                        </div>
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
                                        <div class="icheck-primary">
                                            <input type="checkbox" value="" id="check1">
                                            <label for="check1"></label>
                                        </div>
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
                            <tfoot>
                                <tr>
                                    <th rowspan="1" colspan="1"> </th>
                                    <th rowspan="1" colspan="1">Fecha de carga de diesel inicial</th>
                                    <th rowspan="1" colspan="1" style>Proveedor</th>
                                    <th rowspan="1" colspan="1" style>Linker</th>
                                    <th rowspan="1" colspan="1" style>Litros de carga inicial</th>
                                    <th rowspan="1" colspan="1" style>Pesos</th>
                                    <th rowspan="1" colspan="1" style>Litros metrica</th>
                                    <th rowspan="1" colspan="1" style>Kilometro inicial</th>
                                    <th rowspan="1" colspan="1" style>Kilometro final</th>
                                    <th rowspan="1" colspan="1" style>Kilometro recorridos</th>
                                    <th rowspan="1" colspan="1" style>Odometro</th>
                                    <th rowspan="1" colspan="1" style>Peso</th>
                                    <th rowspan="1" colspan="1" style>Báscula</th>
                                    <th rowspan="1" colspan="1" style>Litros cargados en viaje</th>
                                    <th rowspan="1" colspan="1" style>Importe</th>
                                    <th rowspan="1" colspan="1" style>Fecha de carga de litros de diesel</th>
                                    <th rowspan="1" colspan="1" style>Rendimiento insite</th>
                                    <th rowspan="1" colspan="1" style>Kilometros recorridos</th>
                                    <th rowspan="1" colspan="1" style>Litros consumidos</th>
                                    <th rowspan="1" colspan="1" style>Carga de diesel</th>
                                    <th rowspan="1" colspan="1" style>km recorr/carga diesel</th>
                                    <th rowspan="1" colspan="1" style>Diferencia real vs Inside</th>
                                    <th rowspan="1" colspan="1" style>Porcentaje de consumo</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-5">
                            <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">Mostrando 1 a 10 de 57 entradas</div>
                        </div>
                        <div class="col-sm-12 col-md-7">
                            <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                <ul class="pagination">
                                    <li class="paginate_button page-item previous disabled" id="example1_previous"><a href="#" aria-controls="example1" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                    <li class="paginate_button page-item active"><a href="#" aria-controls="example1" data-dt-idx="1" tabindex="0" class="page-link">1</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="2" tabindex="0" class="page-link">2</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="3" tabindex="0" class="page-link">3</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="4" tabindex="0" class="page-link">4</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="5" tabindex="0" class="page-link">5</a></li>
                                    <li class="paginate_button page-item "><a href="#" aria-controls="example1" data-dt-idx="6" tabindex="0" class="page-link">6</a></li>
                                    <li class="paginate_button page-item next" id="example1_next"><a href="#" aria-controls="example1" data-dt-idx="7" tabindex="0" class="page-link">Next</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
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

<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
@stop

@section('css')
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
<link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/tablas.css') }}">


@stop

@section('js')
<script>
    console.log('Hi!');
</script><!---
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('plugins/jszip/jszip.min.js') }}"></script>
<script src="{{ asset('plugins/pdfmake/pdfmake.min.js') }}"></script>
<script src="{{ asset('plugins/pdfmake/vfs_fonts.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
<script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
<script src="{{ asset('dist/js/demo.js') }}"></script>---->
@stop