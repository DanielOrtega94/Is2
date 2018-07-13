@extends('layouts.app')

@section('content')
	<script>
        tablename = 'empresas';    

        function getChecked(){
            aq = document.querySelectorAll('thead > tr > th > input');
            colnames = '(';
            for (i=1;i<aq.length-1; i++){
                if (aq[i].checked == true){
                    colnames += aq[i].id + ',';
                }
            }
            colnames += aq[aq.length-1].id + ')';
            console.log(colnames);
            openUrl("/report?tablename="+tablename+"&colnames="+colnames);
        }

        function openUrl(url){
            console.log('opening url'+url);
            window.open(url);
        }
    </script>

    <button class="btn btn-success" type="button" onclick="getChecked();">Generar Reporte</button>


	<table class="table table-bordered table-striped dt-select">
            <thead>
                <tr>
                	<th>Seleccionar Todos</th>
                    <th style="text-align:center;"><input type="checkbox" id="select-all" /></th>
                </tr>
                <tr>
                    <th>@lang('quickadmin.empresa.fields.nombre')</th>
                    <th style="text-align:center;"><input type="checkbox" id="Nombre" checked></th>
                </tr>
                <tr>
                    <th>@lang('quickadmin.empresa.fields.correo')</th>
                    <th style="text-align:center;"><input type="checkbox" id="correo" checked></th>
                </tr>
                <tr>
                    <th>@lang('quickadmin.empresa.fields.direccion')</th>
                    <th style="text-align:center;"><input type="checkbox" id="direccion" checked></th>
                </tr>
                <tr>
                    <th>@lang('quickadmin.empresa.fields.telefono')</th>
                    <th style="text-align:center;"><input type="checkbox" id="telefono" checked></th>
                </tr>
                <tr>
                    <th>@lang('quickadmin.empresa.fields.etapa')</th>
                    <th style="text-align:center;"><input type="checkbox" id="etapa" checked></th>
                </tr>
                <tr>
                    <th>@lang('quickadmin.empresa.fields.nota')</th>
                    <th style="text-align:center;"><input type="checkbox" id="nota" checked></th>
                </tr>   
                <tr>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
    </table>
@endsection