<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-10">
            <div class="panel panel-default">
                <div class="panel-heading"><?php echo app('translator')->getFromJson('quickadmin.home.bienvenida'); ?></div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-md-3 text-center">
                            <h1><?php echo e($questions); ?></h1>
                            <?php echo app('translator')->getFromJson('quickadmin.home.preguntas'); ?>
                        </div>
                        <div class="col-md-3 text-center">
                            <h1><?php echo e($users); ?></h1>
                            <?php echo app('translator')->getFromJson('quickadmin.home.registrado'); ?>
                        </div>
                        <div class="col-md-3 text-center">
                            <h1><?php echo e($quizzes); ?></h1>
                            <?php echo app('translator')->getFromJson('quickadmin.home.encuestas'); ?>
                        </div>
                        <div class="col-md-3 text-center">
                            <h1><?php echo e(number_format($average, 2)); ?> / 10</h1>
                           <?php echo app('translator')->getFromJson('quickadmin.home.promedio'); ?>
                        </div>
                    </div>
                </div>
            </div>
            <a href="<?php echo e(route('tests.index')); ?>" class="btn btn-success"> <?php echo app('translator')->getFromJson('quickadmin.home.exito'); ?> </a>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>