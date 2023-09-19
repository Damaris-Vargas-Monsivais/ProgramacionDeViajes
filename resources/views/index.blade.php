@extends('adminlte::page')
<!-----Implementa la vista de adminlte------>
@section('title', 'Index')
<!-----Aqui podemos agregar un titulo a nuestra pagina------>
@section('content_header')

@stop
<!-----Agregamos un header a nuestra pagina------>
@section('content')
<div class="content-wrapper-i " style="min-height: 809.531px;">

  <div class="content">
    <div class="container-fluid">
      <div class="perfil_data">
        <a class="logo-portada">
          <img height="250" width="450" src="http://127.0.0.1:8000/img/viajes.gif" alt="Duma">
        </a>
      </div>
      <div class="perfil_letras">
        <h1 class="perfil_title">Bienvenido a Programación de viajes y Reseteos</h1>
        <h4 class="perfil_subtitle">En este sistema podrás encontrar la programación de viajes y reseteos que realiza Duma y todo lo referente a dichos viajes y sus clientes</h4>
      </div>

      <footer class="main-footer">
        <div class="float-end d-none d-sm-inline">
          <a href="www.gduma.com">Pagina web de Duma</a>.
        </div>
        <strong>Copyright © <b>Todos los derechos reservados</b>.</strong>
      </footer>
    </div>
  </div>
</div>
@stop
<!-----Aqui termina el contenido de nuestra pagina------>
<!-----Aqui agregamos css------>
@section('css')
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
<link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
<link rel="stylesheet" href="{{ asset('css/portada.css') }}">
@stop
<!-----aqui agregamos Java Script------>
@section('js')
<script>
  console.log('Hi!');
</script>
@stop