<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1 class="text-center" style="color: white"><img  src="/images/aceleralatam.png"></h1>
   
            <br />
             <div class="panel panel-default">
                <div class="panel-heading"><?php echo app('translator')->getFromJson('quickadmin.login.titulo'); ?></div>
                <div class="panel-body">
                    <?php if(count($errors) > 0): ?>
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> Hay problemas con el ingreso:
                            <br><br>
                            <ul>
                                <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <li><?php echo e($error); ?></li>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </ul>
                        </div>
                    <?php endif; ?>

                    <form class="form-horizontal"
                          role="form"
                          method="POST"
                          action="<?php echo e(url('login')); ?>">
                        <input type="hidden"
                               name="_token"
                               value="<?php echo e(csrf_token()); ?>">

                        <div class="form-group">
                            <label class="col-md-4 control-label"><?php echo app('translator')->getFromJson('quickadmin.login.mail'); ?></label>

                            <div class="col-md-6">
                                <input type="email"
                                       class="form-control"
                                       name="email"
                                       value="<?php echo e(old('email')); ?>">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label"><?php echo app('translator')->getFromJson('quickadmin.login.contrasena'); ?></label>

                            <div class="col-md-6">
                                <input type="password"
                                       class="form-control"
                                       name="password">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <label>
                                    <input type="checkbox"
                                           name="remember"> Recuerdame 
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit"
                                        class="btn btn-primary">
                                     <?php echo app('translator')->getFromJson('quickadmin.login.ingresar'); ?>
                                </button>
                                <a href="<?php echo e(route('auth.register')); ?>"
                                        class="btn btn-default">
                                     <?php echo app('translator')->getFromJson('quickadmin.login.registro'); ?>
                                </a>
                                <br>
                                <a href="<?php echo e(route('auth.password.reset')); ?>"> <?php echo app('translator')->getFromJson('quickadmin.login.olvido'); ?></a>
                                <br>
                              <!--  
                                <br>
                                Or login with:
                                <br>
                                <a href="<?php echo e(route('oauth2google')); ?>"
                                        class="btn btn-info">
                                    Google
                                </a>
                                <a href="<?php echo e(route('oauth2facebook')); ?>"
                                        class="btn btn-info">
                                    Facebook
                                </a>
                                <a href="<?php echo e(route('oauth2github')); ?>"
                                        class="btn btn-info">
                                    GitHub
                                </a>
                               --> 
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="text-center" style="color: white">Modificado para Proyecto IS2</a></div>
          
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>