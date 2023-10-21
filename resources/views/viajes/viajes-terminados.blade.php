@extends('adminlte::page')

@section('title', 'Viajes terminados')

@section('content_header')
<h1></h1>
@stop

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Viajes Finalizados</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index">Home</a></li>
                    <li class="breadcrumb-item active">Viajes Finalizados</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h3 class="card-title">Viajes Finalizados</h3>

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
                                    <th>ID</th>
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
                                        <div class="icheck-primary">
                                            <input type="checkbox" value="" id="check1">
                                            <label for="check1"></label>
                                        </div>
                                    </td>
                                    <td>TR11-081</td>
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
                                        <div class="icheck-primary">
                                            <input type="checkbox" value="" id="check1">
                                            <label for="check1"></label>
                                        </div>
                                    </td>
                                    <td>TR14-087</td>
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
                                        <div class="icheck-primary">
                                            <input type="checkbox" value="" id="check1">
                                            <label for="check1"></label>
                                        </div>
                                    </td>
                                    <td>TR07-081</td>
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
                                        <div class="icheck-primary">
                                            <input type="checkbox" value="" id="check1">
                                            <label for="check1"></label>
                                        </div>
                                    </td>
                                    <td>TR06-037</td>
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
                            <tfoot>
                                <tr>
                                    <th rowspan="1" colspan="1"> </th>
                                    <th rowspan="1" colspan="1">ID</th>
                                    <th rowspan="1" colspan="1" style>Fecha de Carga</th>
                                    <th rowspan="1" colspan="1" style>Fecha de Salida</th>
                                    <th rowspan="1" colspan="1" style>Fecha de Llegada</th>
                                    <th rowspan="1" colspan="1" style>Estado de la Carga</th>
                                    <th rowspan="1" colspan="1" style>Semana</th>
                                    <th rowspan="1" colspan="1" style>Nombre del Operador</th>
                                    <th rowspan="1" colspan="1" style>Número de Trácto</th>
                                    <th rowspan="1" colspan="1" style>Número de Remolque</th>
                                    <th rowspan="1" colspan="1" style>Nombre del Cliente</th>
                                    <th rowspan="1" colspan="1" style>Estado de Origen</th>
                                    <th rowspan="1" colspan="1" style>Ciudad de Origen</th>
                                    <th rowspan="1" colspan="1" style>Estado de Destino</th>
                                    <th rowspan="1" colspan="1" style>Ciudad de Destino</th>
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

@stop