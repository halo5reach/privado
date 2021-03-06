@extends('plantillas.plantilla')

@section('title')

@section('head','Centro Industrial y Aviacion')

@section('content')
        
  
                      
      <div class="box-header">
        <h3 class="box-title">Editar El Aprendiz: {{ $aprendiz->nombre }} </h3>
      </div><!-- /.box-header -->
          @include('errors.request')
          <div id="notificacion_resul_fanu"></div>



        <form  method="POST" action="{{ route('aprendiz.update',$aprendiz->id) }}" class="form-horizontal form_entrada" >                
           {{ csrf_field() }}
           <input type="hidden" name="_method" value="PUT">﻿    
          <div class="box-body col-xs-12">
            <div class="form-group col-sm-12 col-md-6 col-lg-6">
                      <label for="nombre">Nombres</label>
                      <input type="text" class="form-control" id="nombre" name="nombres" value="{{ $aprendiz->nombre }}" placeholder="Nombre Completo" required >
            </div>

            <div class="form-group col-sm-12 col-md-6 col-lg-6">
                        <label>Tipo De Documento</label>
                        <select id="tipo" name="tipodocumento" value="{{ $aprendiz->t_documento }}" class="form-control" required>
                            @if($aprendiz->t_documento == "cedula")
                                <option value="cedula" selected>Cedula</option>
                            @elseif($aprendiz->t_documento == "t_identidad")
                                <option value="t_identidad" selected>Tarjeta de Identidad</option>
                            @elseif($aprendiz->t_documento == "c_extranjera")
                                <option value="c_extranjera" selected>Cedula Extragera</option>
                            @endif                          
                            <option value="cedula" >Cedula</option>
                            <option value="t_identidad" >Tarjeta de Identidad</option>
                            <option value="c_extranjera">Cedula Extragera</option>
                       
                        </select>                 
            </div>
            
            <div class="form-group col-sm-12 col-md-6 col-lg-6">
                      <label for="documento">Numero de Documento</label>
                      <input type="text" value="{{ $aprendiz->documento }}" class="form-control"  name="documento" placeholder="Nombre Completo" required >
            </div>

            <div class="form-group col-sm-12 col-md-6 col-lg-6">
                      <label for="fecha">Fecha de Nacimiento</label>
                      <input type="date" value="{{ $aprendiz->fecha_nacimiento }}" class="form-control"  name="fecha" placeholder="Fecha de Nacimiento" required >
            </div>




            <div class="form-group col-sm-12 col-md-6 col-lg-6">
                        <label for="email">Correo</label>
                        <input type="email" value="{{ $aprendiz->email }}" class="form-control"  name="email" placeholder="Digite su correo" required>
            </div>

            <div class="form-group col-sm-12 col-md-6 col-lg-6">
                        <label>Telefono</label>
                        <input type="number" value="{{ $aprendiz->telefono }}" class="form-control"  name="telefono" placeholder="Digite su telefono" required >
            </div>

          </div>

            <div class="box-footer col-xs-12 ">
                       <button type="submit" class="btn btn-success">Guardar</button>
            </div>

        </form>

  

@endsection




