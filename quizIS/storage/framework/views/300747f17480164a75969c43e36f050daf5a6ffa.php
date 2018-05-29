<?php $__env->startSection('content'); ?>
    <h3 class="page-title"><?php echo app('translator')->getFromJson('quickadmin.questions.title'); ?></h3>
    
    <div class="panel panel-default">
        <div class="panel-heading">
            <?php echo app('translator')->getFromJson('quickadmin.view'); ?>
        </div>
        
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                    <tr><th><?php echo app('translator')->getFromJson('quickadmin.questions.fields.topic'); ?></th>
                    <td><?php echo e(isset($question->topic->title) ? $question->topic->title : ''); ?></td></tr><tr><th><?php echo app('translator')->getFromJson('quickadmin.questions.fields.question-text'); ?></th>
                    <td><?php echo $question->question_text; ?></td></tr><tr><th><?php echo app('translator')->getFromJson('quickadmin.questions.fields.code-snippet'); ?></th>
                    <td><?php echo $question->code_snippet; ?></td></tr><tr><th><?php echo app('translator')->getFromJson('quickadmin.questions.fields.answer-explanation'); ?></th>
                    <td><?php echo $question->answer_explanation; ?></td></tr><tr><th><?php echo app('translator')->getFromJson('quickadmin.questions.fields.more-info-link'); ?></th>
                    <td><?php echo e($question->more_info_link); ?></td></tr>
                    </table>
                </div>
            </div>

            <p>&nbsp;</p>

            <a href="<?php echo e(route('questions.index')); ?>" class="btn btn-default"><?php echo app('translator')->getFromJson('quickadmin.back_to_list'); ?></a>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>