<?php $__env->startSection('content'); ?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <h3 class="page-title"><?php echo app('translator')->getFromJson('quickadmin.questions.title'); ?></h3>
    <?php echo Form::open(['method' => 'POST', 'route' => ['questions.store']]); ?>


    <div class="panel panel-default">
        <div class="panel-heading">
            <?php echo app('translator')->getFromJson('quickadmin.create'); ?>
        </div>

        <div class="panel-body">
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('Nombre', 'Etapa*', ['class' => 'control-label']); ?>

                    <?php echo Form::select('Nombre', $etapas, old('Nombre'), ['class' => 'form-control']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('topic_id')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('topic_id')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('topic_id', 'Topic*', ['class' => 'control-label']); ?>

                    <?php echo Form::select('topic_id', $topics, old('topic_id'), ['class' => 'form-control']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('topic_id')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('topic_id')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>           
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('question_text', 'Question text*', ['class' => 'control-label']); ?>

                    <?php echo Form::textarea('question_text', old('question_text'), ['class' => 'form-control ', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('question_text')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('question_text')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="table-responsive">  

                <table class="table table-bordered" id="dynamic_field">  

                    <tr>  

                        <td><input type="text" name="name[]" placeholder="Ingrese opción" class="form-control name_list" /></td>  

                        <td><button type="button" name="add" id="add" class="btn btn-success">Añadir más</button></td>  

                    </tr>  

                </table>  

            </div>



           <!--
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('code_snippet', 'Code snippet', ['class' => 'control-label']); ?>

                    <?php echo Form::textarea('code_snippet', old('code_snippet'), ['class' => 'form-control ', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('code_snippet')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('code_snippet')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
        -->
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('answer_explanation', 'Answer explanation*', ['class' => 'control-label']); ?>

                    <?php echo Form::textarea('answer_explanation', old('answer_explanation'), ['class' => 'form-control ', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('answer_explanation')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('answer_explanation')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('more_info_link', 'More info link', ['class' => 'control-label']); ?>

                    <?php echo Form::text('more_info_link', old('more_info_link'), ['class' => 'form-control', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('more_info_link')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('more_info_link')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>
              <div class="row">
                <div class="col-xs-12 form-group">
                    <?php echo Form::label('ponderation', 'ponderation', ['class' => 'control-label']); ?>

                    <?php echo Form::text('ponderation', old('ponderation'), ['class' => 'form-control', 'placeholder' => '']); ?>

                    <p class="help-block"></p>
                    <?php if($errors->has('ponderation')): ?>
                        <p class="help-block">
                            <?php echo e($errors->first('ponderacion')); ?>

                        </p>
                    <?php endif; ?>
                </div>
            </div>

        </div>
    </div>
    <?php echo Form::submit(trans('quickadmin.save'), ['class' => 'btn btn-danger']); ?>

    <?php echo Form::close(); ?>




<script type="text/javascript">

    $(document).ready(function(){  


      var postURL = "<?php echo url('addmore'); ?>";

      var i=1;  


      $('#add').click(function(){  

           i++;  

           $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added"><td><input type="text" name="name[]" placeholder="Ingrese opción" class="form-control name_list" /></td><td><button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">X</button></td></tr>');  

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
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>