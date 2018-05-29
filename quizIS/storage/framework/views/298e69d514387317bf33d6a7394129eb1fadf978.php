<?php $__env->startSection('content'); ?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <h3 class="page-title"><?php echo app('translator')->getFromJson('quickadmin.questions.title'); ?></h3>
    <?php echo Form::open(['method' => 'POST', 'route' => ['questions.select']]); ?>


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
         
    <?php echo Form::submit('Buscar', ['class' => 'btn btn-success']); ?>

    <?php echo Form::close(); ?>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>