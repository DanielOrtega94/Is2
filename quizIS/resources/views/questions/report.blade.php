@extends('layouts.app')

@section('content')
	<script>
        tablename = 'questions';    

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
                    <th style="text-align:center;"><button onclick="" checked/></th>
                </tr>
                <tr>
                    <th>@lang('quickadmin.questions.fields.id')</th>
                    <th><input type="checkbox" id="id" checked></th>
                </tr>
                <tr>
                    <th>@lang('quickadmin.questions.fields.etapa')</th>
                    <th><input type="checkbox" id="etapa_id" checked></th>
                </tr>
                <tr>
                    <th>@lang('quickadmin.questions.fields.topic')</th>
                    <th><input type="checkbox" id="topic_id" checked></th>
                </tr>
                <tr>
                    <th>@lang('quickadmin.questions.fields.question-text')</th>
                    <th><input type="checkbox" id="question_text" checked></th>
                </tr> 
                <tr>
                    <th>@lang('quickadmin.questions.fields.answer-explanation')</th>
                    <th><input type="checkbox" id="answer-explanation" checked></th>
                </tr>   
                <tr>
                    <th>@lang('quickadmin.questions.fields.ponderation')</th>
                    <th><input type="checkbox" id="ponderation" checked></th>
                </tr>   
                <tr>
                    <th>@lang('quickadmin.questions.fields.tipo')</th>
                    <th><input type="checkbox" id="tipo" checked></th>
                </tr>   
                <tr>
                    <th>&nbsp;</th>
                    <th>&nbsp;</th>
                </tr>
            </thead>
    </table>
@endsection