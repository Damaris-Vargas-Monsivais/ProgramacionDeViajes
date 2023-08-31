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
        <h1>Registro de Viaje</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Registro de Viaje</li>
        </ol>
      </div>
    </div>
  </div>
</section>

<section class="content">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-md-12">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Nuevo Viaje</h3>
          </div>

          <form>
            <div class="card-body">
              <label for="exampleInputName">Fecha de carga</label>
              <div class="col-md-3 input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                </div>
                <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" inputmode="numeric">
              </div>

              <label for="exampleInputName">Fecha de salida</label>
              <div class="col-md-3 input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                </div>
                <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" inputmode="numeric">
              </div>

              <label for="exampleInputName">Fecha de llegada</label>
              <div class="col-md-3 input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                </div>
                <input type="text" class="form-control" data-inputmask-alias="datetime" data-inputmask-inputformat="dd/mm/yyyy" data-mask="" inputmode="numeric">
              </div>

              <div class="col-md-3 form-group">
                <label>Estado</label>
                <select class="form-control select2 select2-danger select2-hidden-accessible" data-dropdown-css-class="select2-danger" style="width: 100%;" data-select2-id="12" tabindex="-1" aria-hidden="true">
                  <option selected="selected" data-select2-id="14">Zacatecas</option>
                  <option data-select2-id="61">Sonora</option>
                  <option data-select2-id="62">Sinaloa</option>
                  <option data-select2-id="63">Durango</option>
                  <option data-select2-id="64">Tamailipas</option>
                  <option data-select2-id="65">Chihuahua</option>
                  <option data-select2-id="66">Tabasco</option>
                </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="13" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-zldc-container"><span class="select2-selection__rendered" id="select2-zldc-container" role="textbox" aria-readonly="true" title="Alabama">Alabama</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
              </div>

              <div class="col-md-3 form-group">
                <label>Semana</label>
                <select class="form-control select2 select2-danger select2-hidden-accessible" data-dropdown-css-class="select2-danger" style="width: 100%;" data-select2-id="12" tabindex="-1" aria-hidden="true">
                  <option selected="selected" data-select2-id="14">1</option>
                  <option data-select2-id="61">2</option>
                  <option data-select2-id="62">3</option>
                  <option data-select2-id="63">4</option>
                  <option data-select2-id="64">5</option>
                  <option data-select2-id="65">6</option>
                  <option data-select2-id="66">7</option>
                  <option data-select2-id="61">2</option>
                  <option data-select2-id="62">3</option>
                  <option data-select2-id="63">4</option>
                  <option data-select2-id="64">5</option>
                  <option data-select2-id="65">6</option>
                  <option data-select2-id="66">7</option>
                  <option data-select2-id="61">2</option>
                  <option data-select2-id="62">3</option>
                  <option data-select2-id="63">4</option>
                  <option data-select2-id="64">5</option>
                  <option data-select2-id="65">6</option>
                  <option data-select2-id="66">7</option>
                  <option data-select2-id="61">2</option>
                  <option data-select2-id="62">3</option>
                  <option data-select2-id="63">4</option>
                  <option data-select2-id="64">5</option>
                  <option data-select2-id="65">6</option>
                  <option data-select2-id="66">7</option>
                  <option data-select2-id="61">2</option>
                  <option data-select2-id="62">3</option>
                  <option data-select2-id="63">4</option>
                  <option data-select2-id="64">5</option>
                  <option data-select2-id="65">6</option>
                  <option data-select2-id="66">7</option>
                </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="13" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-zldc-container"><span class="select2-selection__rendered" id="select2-zldc-container" role="textbox" aria-readonly="true" title="Alabama">Alabama</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
              </div>

              <div class="col-md-3 form-group">
                <label>Nombre del operador</label>
                <select class="form-control select2 select2-danger select2-hidden-accessible" data-dropdown-css-class="select2-danger" style="width: 100%;" data-select2-id="12" tabindex="-1" aria-hidden="true">
                  <option selected="selected" data-select2-id="14">Zacatecas</option>
                  <option data-select2-id="61">Sonora</option>
                  <option data-select2-id="62">Sinaloa</option>
                  <option data-select2-id="63">Durango</option>
                  <option data-select2-id="64">Tamailipas</option>
                  <option data-select2-id="65">Chihuahua</option>
                  <option data-select2-id="66">Tabasco</option>
                </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="13" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-zldc-container"><span class="select2-selection__rendered" id="select2-zldc-container" role="textbox" aria-readonly="true" title="Alabama">Alabama</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
              </div>

              <div class="col-md-3 form-group">
                <label>Numero de tracto</label>
                <select class="form-control select2 select2-danger select2-hidden-accessible" data-dropdown-css-class="select2-danger" style="width: 100%;" data-select2-id="12" tabindex="-1" aria-hidden="true">
                  <option selected="selected" data-select2-id="14">Zacatecas</option>
                  <option data-select2-id="61">Sonora</option>
                  <option data-select2-id="62">Sinaloa</option>
                  <option data-select2-id="63">Durango</option>
                  <option data-select2-id="64">Tamailipas</option>
                  <option data-select2-id="65">Chihuahua</option>
                  <option data-select2-id="66">Tabasco</option>
                </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="13" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-zldc-container"><span class="select2-selection__rendered" id="select2-zldc-container" role="textbox" aria-readonly="true" title="Alabama">Alabama</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
              </div>

              <div class="col-md-3 form-group">
                <label>Numero de remolque</label>
                <select class="form-control select2 select2-danger select2-hidden-accessible" data-dropdown-css-class="select2-danger" style="width: 100%;" data-select2-id="12" tabindex="-1" aria-hidden="true">
                  <option selected="selected" data-select2-id="14">Zacatecas</option>
                  <option data-select2-id="61">Sonora</option>
                  <option data-select2-id="62">Sinaloa</option>
                  <option data-select2-id="63">Durango</option>
                  <option data-select2-id="64">Tamailipas</option>
                  <option data-select2-id="65">Chihuahua</option>
                  <option data-select2-id="66">Tabasco</option>
                </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="13" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-zldc-container"><span class="select2-selection__rendered" id="select2-zldc-container" role="textbox" aria-readonly="true" title="Alabama">Alabama</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
              </div>

              <div class="col-md-3 form-group">
                <label>Nombre del cliente</label>
                <select class="form-control select2 select2-danger select2-hidden-accessible" data-dropdown-css-class="select2-danger" style="width: 100%;" data-select2-id="12" tabindex="-1" aria-hidden="true">
                  <option selected="selected" data-select2-id="14">Zacatecas</option>
                  <option data-select2-id="61">Sonora</option>
                  <option data-select2-id="62">Sinaloa</option>
                  <option data-select2-id="63">Durango</option>
                  <option data-select2-id="64">Tamailipas</option>
                  <option data-select2-id="65">Chihuahua</option>
                  <option data-select2-id="66">Tabasco</option>
                </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="13" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-zldc-container"><span class="select2-selection__rendered" id="select2-zldc-container" role="textbox" aria-readonly="true" title="Alabama">Alabama</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
              </div>

              <div class="col-md-3 form-group">
              <label>Estado de Origen</label>
                <select class="form-control select2 select2-danger select2-hidden-accessible" data-dropdown-css-class="select2-danger" style="width: 100%;" data-select2-id="12" tabindex="-1" aria-hidden="true">
                  <option selected="selected" data-select2-id="14">Zacatecas</option>
                  <option data-select2-id="61">Sonora</option>
                  <option data-select2-id="62">Sinaloa</option>
                  <option data-select2-id="63">Durango</option>
                  <option data-select2-id="64">Tamailipas</option>
                  <option data-select2-id="65">Chihuahua</option>
                  <option data-select2-id="66">Tabasco</option>
                </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="13" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-zldc-container"><span class="select2-selection__rendered" id="select2-zldc-container" role="textbox" aria-readonly="true" title="Alabama">Alabama</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
              </div>

              <div class="col-md-3 form-group">
              <label>Ciudad de Origen</label>
                <select class="form-control select2 select2-danger select2-hidden-accessible" data-dropdown-css-class="select2-danger" style="width: 100%;" data-select2-id="12" tabindex="-1" aria-hidden="true">
                  <option selected="selected" data-select2-id="14">Zacatecas</option>
                  <option data-select2-id="61">Sonora</option>
                  <option data-select2-id="62">Sinaloa</option>
                  <option data-select2-id="63">Durango</option>
                  <option data-select2-id="64">Tamailipas</option>
                  <option data-select2-id="65">Chihuahua</option>
                  <option data-select2-id="66">Tabasco</option>
                </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="13" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-zldc-container"><span class="select2-selection__rendered" id="select2-zldc-container" role="textbox" aria-readonly="true" title="Alabama">Alabama</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
              </div>

              <div class="col-md-3 form-group">
              <label>Estado De Destino</label>
                <select class="form-control select2 select2-danger select2-hidden-accessible" data-dropdown-css-class="select2-danger" style="width: 100%;" data-select2-id="12" tabindex="-1" aria-hidden="true">
                  <option selected="selected" data-select2-id="14">Zacatecas</option>
                  <option data-select2-id="61">Sonora</option>
                  <option data-select2-id="62">Sinaloa</option>
                  <option data-select2-id="63">Durango</option>
                  <option data-select2-id="64">Tamailipas</option>
                  <option data-select2-id="65">Chihuahua</option>
                  <option data-select2-id="66">Tabasco</option>
                </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="13" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-zldc-container"><span class="select2-selection__rendered" id="select2-zldc-container" role="textbox" aria-readonly="true" title="Alabama">Alabama</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
              </div>

              <div class="col-md-3 form-group">
              <label>Ciudad de Destino</label>
                <select class="form-control select2 select2-danger select2-hidden-accessible" data-dropdown-css-class="select2-danger" style="width: 100%;" data-select2-id="12" tabindex="-1" aria-hidden="true">
                  <option selected="selected" data-select2-id="14">Zacatecas</option>
                  <option data-select2-id="61">Sonora</option>
                  <option data-select2-id="62">Sinaloa</option>
                  <option data-select2-id="63">Durango</option>
                  <option data-select2-id="64">Tamailipas</option>
                  <option data-select2-id="65">Chihuahua</option>
                  <option data-select2-id="66">Tabasco</option>
                </select><span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="13" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-zldc-container"><span class="select2-selection__rendered" id="select2-zldc-container" role="textbox" aria-readonly="true" title="Alabama">Alabama</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
              </div>
              
              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Guardar</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

</section>


@stop

@section('css')
<link rel="stylesheet" href="{{ asset('css/main.css') }}">
<link rel="stylesheet" href="{{ asset('css/tablas.css') }}"> 
<link rel="stylesheet" href="{{ asset('css/viajes.css') }}"> 




@stop

@section('js')
<script>
  console.log('Hi!');
</script>
@stop