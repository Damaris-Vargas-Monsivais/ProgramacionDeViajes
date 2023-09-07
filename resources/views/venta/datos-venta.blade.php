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
                <h1>Datos de venta</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Datos de venta</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">

            <div class="col-md-6">

                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Nueva Venta</h3>
                    </div>


                    <form>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputName">Numero de carta de instrucción</label>
                                <input type="name" class="form-control" id="exampleInputName" placeholder="Numero">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputFactura">Factura</label>
                                <input type="number" class="form-control" id="exampleInputFactura" placeholder="Numero de Factura">
                            </div>

                            <div class="form-group">
                                <label>Fecha de factura</label>
                                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                    <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate">
                                    <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                </div>
                            </div>
                            <script>
                                //Date picker
                                $('#reservationdate').datetimepicker({
                                    format: 'L'
                                });
                            </script>

                            <label for="exampleInputRFC">Venta</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">$</span>
                                </div>
                                <input type="text" class="form-control">
                                <div class="input-group-append">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputOperador">Pago del operador</label>
                                <input type="name" class="form-control" id="exampleInputOperador" placeholder="Monto monetario">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputMoneda">Moneda</label>
                                <input type="money" class="form-control" id="exampleInputMoneda" placeholder="MXN">
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary-G">Guardar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</section>
<footer class="m-footer">
    <div class="float-right d-none d-sm-block">
        <b>Grupo Duma</b>
    </div>
    <strong>Copyright &copy; <a href="www.gduma.com">Pagina web de Duma</a>.</strong>
</footer>
@stop

@section('css')
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
<link rel="stylesheet" href="{{ asset('css/tablas.css') }}">
<link rel="stylesheet" href="{{ asset('css/venta.css') }}">
@stop

@section('js')
<script>
    console.log('Hi!');
</script>
<!-- Tempusdominus Bootstrap 4 -->
<link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
<!-- Font Awesome -->
<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
<!-- jQuery -->
<script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Select2 -->
<script src="{{ asset('plugins/select2/js/select2.full.min.js') }}"></script>
<!-- InputMask -->
<script src="{{ asset('plugins/moment/moment.min.js') }}"></script>
<script src="{{ asset('plugins/inputmask/jquery.inputmask.min.js') }}"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="{{ asset('plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}"></script>
@stop