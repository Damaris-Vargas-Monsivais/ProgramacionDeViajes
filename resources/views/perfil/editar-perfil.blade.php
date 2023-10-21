@extends('adminlte::page')

@section('title', 'Configuración de la cuenta')

@section('content_header')

@stop

@section('content')
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1> </h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="index">Home</a></li>
                    <li class="breadcrumb-item active">Perfil</li>
                </ol>
            </div>
        </div>
    </div>
</section>

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">

                <!-- PERFIL -->
                <div class="card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">
                            <img class="profile-user-img img-fluid img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">
                        </div>

                        <h3 class="profile-username text-center">Nina Mcintire</h3>

                        <p class="text-muted text-center">Tránsito</p>

                        <strong><i class="fas fa-solid fa-envelope"></i> Email</strong>
                        <p class="text-muted">
                            duma@gduma.com
                        </p>
                        <hr>
                        <strong><i class="fa fa-solid fa-phone"></i> Télefono</strong>
                        <p class="text-muted">8712345768</p>

                    </div>
                </div>

            </div>
            <!----TABS DEL PERFIL---->
            <div class="col-md-9">
                <div class="card card-primary card-tabs">
                    <div class="card-header p-0 pt-1">
                        <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="custom-tabs-one-perfil-tab" data-toggle="pill" href="#custom-tabs-one-perfil" role="tab" aria-controls="custom-tabs-one-perfil" aria-selected="true">Perfil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="custom-tabs-one-settings-tab" data-toggle="pill" href="#custom-tabs-one-settings" role="tab" aria-controls="custom-tabs-one-settings" aria-selected="false">Configuración</a>
                            </li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content" id="custom-tabs-one-tabContent">
                            <div class="tab-pane fade show active" id="custom-tabs-one-perfil" role="tabpanel" aria-labelledby="custom-tabs-one-perfil-tab">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-3 col-xs-6 b-r">
                                            <strong>Nombre</strong>
                                            <br>
                                            <p class="text-muted">Johnathan Deo</p>
                                        </div>
                                        <div class="col-md-3 col-xs-6 b-r">
                                            <strong>Télefono</strong>
                                            <br>
                                            <p class="text-muted">(123) 456 7890</p>
                                        </div>
                                        <div class="col-md-3 col-xs-6 b-r">
                                            <strong>Email</strong>
                                            <br>
                                            <p class="text-muted">johnathan@admin.com</p>
                                        </div>
                                        <!---<div class="col-md-3 col-xs-6">
                                            <strong>Location</strong>
                                            <br>
                                            <p class="text-muted">London</p>
                                        </div>---->
                                    </div>
                                    <hr>
                                    <p class="mt-4">
                                        Donec pede justo, fringilla vel, aliquet nec, vulputate
                                        eget, arcu. In enim justo, rhoncus ut, imperdiet a,
                                        venenatis vitae, justo. Nullam dictum felis eu pede
                                        mollis pretium. Integer tincidunt.Cras dapibus. Vivamus
                                        elementum semper nisi. Aenean vulputate eleifend tellus.
                                        Aenean leo ligula, porttitor eu, consequat vitae,
                                        eleifend ac, enim.
                                    </p>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="custom-tabs-one-settings" role="tabpanel" aria-labelledby="custom-tabs-one-settings-tab">
                                <form class="form-horizontal form-material">
                                    <div class="mb-3">
                                        <label class="col-md-12">Nombre</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="Johnathan Doe" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="example-email" class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="email" placeholder="johnathan@admin.com" class="form-control form-control-line" name="example-email" id="example-email">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-md-12">Contraseña</label>
                                        <div class="col-md-12">
                                            <input type="password" value="password" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-md-12">Número de télefono</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="123 456 7890" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-md-12">Mensaje</label>
                                        <div class="col-md-12">
                                            <textarea rows="5" class="form-control form-control-line"></textarea>
                                        </div>
                                    </div>



                                    <div class="mb-3">
                                        <label class="col-sm-12">Subir foto </label>
                                        <div class="dropify-wrapper">
                                            <div class="dropify-message"><span class='fas fa-cloud-upload-alt' style="font-size:36px;"></span>
                                                <p>Drag and drop a file here or click</p>
                                                <p class="dropify-error">Ooops, something wrong appended.</p>
                                            </div>
                                            <div class="dropify-loader" style="display: none;"></div>
                                            <div class="dropify-errors-container">
                                                <ul></ul>
                                            </div><input type="file" id="input-file-now" class="dropify"><button type="button" class="dropify-clear">Remove</button>
                                            <div class="dropify-preview" style="display: none;"><span class="dropify-render"></span>
                                                <div class="dropify-infos">
                                                    <div class="dropify-infos-inner">
                                                        <p class="dropify-filename"><span class="file-icon"></span> <span class="dropify-filename-inner">ECharts.png</span></p>
                                                        <p class="dropify-infos-message">Drag and drop or click to replace</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="col-sm-12">
                                            <button class="btn btn-success">
                                                Actualizar información personal
                                            </button>
                                        </div>
                                    </div>
                                </form>
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
<link rel="stylesheet" href="{{ asset('css/tablas.css') }}">
<link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
<link rel="stylesheet" href="{{ asset('css/perfil.css') }}">
<link rel="stylesheet" href="./css/adminlte.css">
<link rel="stylesheet" href="{{ asset('css/dropify.min.css') }}">

@stop

@section('js')

@stop