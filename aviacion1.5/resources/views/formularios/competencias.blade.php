@extends('plantillas.plantilla')

@section('title')

@section('head','Centro Industrial y Aviacion')

@section('content')
        
  
                      
    <div class="box-header">
      <h3 class="box-title">Registrar Competencia</h3>
    </div><!-- /.box-header -->

    <div id="notificacion_resul_fanu"></div>

    <form method="post" action="agregar_competencia" class="form-horizontal form_entrada" >                
                       
      <div class="box-body col-xs-12">

        <div class="form-group col-sm-12 col-md-6 col-lg-6">
                    <label>Demoninacion</label>
                    <input type="Text" class="form-control" id="" placeholder="Programa" required >
        </div>
      
        <div class="form-group col-sm-12 col-md-6 col-lg-6">
                  <label>Codigo</label>
                  <input type="number" class="form-control" id=""  placeholder="Digite Codigo" required >
        </div>

        <div class="form-group col-sm-12 col-md-6 col-lg-6">
                  <label>Duracion</label>
                  <input type="date" class="form-control" id=""  placeholder="" required >
        </div>
     
       
     
    </div>

        <div class="box-footer col-xs-12 ">
                   <button type="submit" class="btn btn-success">Guardar</button>
        </div>

    </form>

  

@endsection