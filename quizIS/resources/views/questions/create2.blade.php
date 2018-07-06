@extends('layouts.app')

@section('content')
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <h3 class="page-title">@lang('quickadmin.questions.title')</h3>
    {!! Form::open(['method' => 'POST', 'route' => ['questions.store']]) !!}

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('quickadmin.create')
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    <kbd>{!! Form::label('Nombre', 'Etapa*', ['class' => 'control-label']) !!}</kbd>
                    {!! Form::select('Nombre', $etapas, old('Nombre'), ['class' => 'form-control'] ) !!}
                    <p class="help-block"></p>
                    @if($errors->has('topic_id'))
                        <p class="help-block">
                            {{ $errors->first('Nombre') }}
                        </p>
                    @endif
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 form-group">
                    <kbd>{!! Form::label('topic_id', 'Topico*', ['class' => 'control-label']) !!}</kbd>
                    {!! Form::select('topic_id', $topics, old('topic_id'), ['class' => 'form-control']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('topic_id'))
                        <p class="help-block">
                            {{ $errors->first('topic_id') }}
                        </p>
                    @endif
                </div>
            </div>           
            <div class="row">
                <div class="col-xs-12 form-group">
                    <kbd>{!! Form::label('question_text', 'Pregunta*', ['class' => 'control-label']) !!}</kbd>
                    {!! Form::text('question_text', old('question_text'), ['class' => 'form-control ', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('question_text'))
                        <p class="help-block">
                            {{ $errors->first('question_text') }}
                        </p>
                    @endif
                </div>
            </div>
            <div id="id2" class="table-responsive">  
                <table class="table table-bordered" id="dynamic_field">
                <label class="control-label"><kbd>Opciones*</label>  
                    <tr>  
                        <div class="row">
                            <td><input type="text" name="name[]" placeholder="Ingrese opción" class="form-control name_list" /></td>
                            <td><input type="number" name="value[]" placeholder="Puntaje" class="form-control  "></td>  
                        </div>
                        <td><button type="button" name="add" id="add" class="btn btn-success">Añadir más</button></td>  
                    </tr>  
                </table>  
            </div>

            <div class="row">
                <div class="col-xs-12 form-group">
                    <kbd>{!! Form::label('answer_explanation', 'Explicación Respuesta*', ['class' => 'control-label']) !!}</kbd>
                    {!! Form::textarea('answer_explanation', old('answer_explanation'), ['class' => 'form-control ', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('answer_explanation'))
                        <p class="help-block">
                            {{ $errors->first('answer_explanation') }}
                        </p>
                    @endif
                </div>
            </div>
           
              <div class="row">
                <div class="col-xs-12 form-group">
                    <kbd>{!! Form::label('ponderation', 'Ponderacion*', ['class' => 'control-label']) !!}</kbd>
                    {!! Form::number('ponderation', old('ponderation'), ['class' => 'form-control', 'placeholder' => '']) !!}
                    <p class="help-block"></p>
                    @if($errors->has('ponderation'))
                        <p class="help-block">
                            {{ $errors->first('ponderacion') }}
                        </p>
                    @endif
                </div>
            </div>

                   

        </div>
    </div>
    {!! Form::submit(trans('quickadmin.save'), ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}


<script type="text/javascript">
    $(document).ready(function(){  
      var postURL = "<?php echo url('addmore'); ?>";
      var i=1;  
      $('#add').click(function(){  
           i++;  
           $('#dynamic_field').append(
            '<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="name[]" placeholder="Ingrese opción" class="form-control name_list"/> </td><td><input type="number" name="value[]" placeholder="Puntaje" class="form-control"></td>  <td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  
      });  
      $(document).on('click', '.btn_remove', function(){  
           var button_id = $(this).attr("id");   
           $('#row'+button_id+'').remove();  
      });  


      $.ajaxSetup({
          headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
      });
      $('#submit').click(function(){            
           $.ajax({  
                url:postURL,  
                method:"POST",  
                data:$('#add_name').serialize(),
                type:'json',
                success:function(data)  
                {
                    if(data.error){
                        printErrorMsg(data.error);
                    }else{
                        i=1;
                        $('.dynamic-added').remove();
                        $('#add_name')[0].reset();
                        $(".print-success-msg").find("ul").html('');
                        $(".print-success-msg").css('display','block');
                        $(".print-error-msg").css('display','none');
                        $(".print-success-msg").find("ul").append('<li>Record Inserted Successfully.</li>');
                    }
                }  
           });  
      });  

      function printErrorMsg (msg) {
         $(".print-error-msg").find("ul").html('');
         $(".print-error-msg").css('display','block');
         $(".print-success-msg").css('display','none');
         $.each( msg, function( key, value ) {
            $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
         });
      }
    });  
</script>
@stop