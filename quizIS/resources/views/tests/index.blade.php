@extends('layouts.app')

@section('content')
    <h3 class="page-title">Conoce tu etapa</h3>

    <div class="panel panel-default" id="panelpls">
        <div class="panel-heading">

            <h4>Conteste las siguientes preguntas para conocer en que etapa se encuentra su proyecto.   
            </h4>
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    <div id="mn">
                        <label class="control-label"><strong>Tiene usted un modelo de negocios definido?</strong></label><br>
                        <select id="modelneg" class="form-control">
                            <option value="">--Seleccione una opción--</option>
                            <option value="Si">Si</option>
                            <option value="No">No</option>
                        </select>
                    </div>
                    <div id="Si" class="pregunta1" style="display: none;">
                        <label class="control-label"><strong>Posee usted un Producto Minimo Viable</strong></label><br>
                        <select class="form-control" id="pmv">
                            <option value="">--Seleccione una opción--</option>
                            <option value="yes">Si</option>
                            <option value="no">No</option>
                        </select>
                    </div>
                    <div id="yes" class="pregunta2" style="display: none;">
                        <label class="control-label"><strong>Posee usted ventas?</strong></label><br>
                        <select class="form-control" id="venta">
                            <option value="">--Seleccione una opción--</option>
                            <option value="yeah">Si</option>
                            <option value="Nope">No</option>
                        </select>
                    </div>
                    <div id="yeah" class="pregunta3" style="display: none;"> 
                        <label class="control-label"><strong>Cuánto genera en ventas anualmente aprox?</strong></label><br>
                        <select class="form-control" id="monto">
                            <option value="">--Seleccione una opción--</option>
                            <option value="low">$216731</option>
                            <option value="mid">$1276376123</option>
                            <option value="high">$1123819239276376123</option>
                        </select>
                    </div>
                </div>
            </div>
            <button class="btn btn-success" onclick="clasificar()">Enviar</button>
        </div>
    </div>
    
@stop

@section('javascript')
    @parent
    <script src="{{ url('quickadmin/js') }}/timepicker.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-ui-timepicker-addon/1.4.5/jquery-ui-timepicker-addon.min.js"></script>
    <script src="https://cdn.datatables.net/select/1.2.0/js/dataTables.select.min.js"></script>
    <script>
        $('.datetime').datetimepicker({
            autoclose: true,
            dateFormat: "{{ config('app.date_format_js') }}",
            timeFormat: "hh:mm:ss"
        });
    </script>
    <script type="text/javascript">
        $(function () {
            $('#modelneg').change(function(){
                $('.pregunta1').hide();
                $('.pregunta2').hide();
                $('.pregunta3').hide();
                if ($(this).val() == 'Si' ){ $('#' + $(this).val()).show();}
                
            });
        });
        $(function () {
            $('#pmv').change(function(){
                $('.pregunta2').hide();
                $('.pregunta3').hide();
                if ($(this).val() == 'yes' ){ $('#' + $(this).val()).show();}
            });
        });
         $(function () {
            $('#venta').change(function(){
                $('.pregunta3').hide();
                if ($(this).val() == 'yeah' ){ $('#' + $(this).val()).show();}
            });
        });
         function clasificar(){
            var a = document.getElementById("modelneg");
            var valA = a.options[a.selectedIndex].value;
            var b = document.getElementById("pmv");
            var valB = b.options[b.selectedIndex].value;
            var c = document.getElementById("venta");
            var valC = c.options[c.selectedIndex].value;
            var d = document.getElementById("monto");
            var valD = d.options[d.selectedIndex].value;
            
            var etapa = "Idea";
            var id = 1;
            if (valA  == 'Si') {
                etapa = "Semilla";
                id =2;
                if(valB == 'yes'){
                    etapa = "Temprana";
                    id=3;
                    if (valC == 'yeah') {
                        if(valD == 'low'){
                            etapa = "Expansión";
                            id=4;
                        }
                        else if(valD == 'mid'){
                            etapa = "Internacionalizacion";
                            id=5;
                        }
                        else if(valD == "high"){
                            etapa = "Retorno/Declive";
                            id=6;
                        }
                    }
                }
            }

            var html = "<form action='tests/select/" + id + "' method='post'><input type='hidden' name='_token' value='{{ csrf_token() }}'><div class='panel-heading'><h4>ENHORABUENA<br>Tu proyecto se encuentra en la etapa : " + etapa + ".</h4><br><button class='btn btn-success' onclick='location.href={{route('tests.select',["+id+"])}}'>Realizar Diagnóstico</button></div></form>";

            document.getElementById("panelpls").innerHTML = html;

         }
         
    </script>

@stop
