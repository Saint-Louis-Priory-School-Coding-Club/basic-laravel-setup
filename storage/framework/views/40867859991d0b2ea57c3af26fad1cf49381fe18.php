<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <div class="text-center">
        <h1>Create a Post</h1>
    </div>
    <div class="col-xs-8 col-xs-offset-2">
        <form class="form-horizontal" method="post" action="/Journal/public/create">
            <?php echo e(csrf_field()); ?>

            <div class="form-group<?php echo e($errors->has('body') ? ' has-error' : ''); ?>">
                <input type="text" class="form-control" placeholder="Your title" name="title" required autofocus>
                <?php if($errors->has('title')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('title')); ?></strong>
                    </span>
                <?php endif; ?>
            </div>
            <div class="form-group<?php echo e($errors->has('body') ? ' has-error' : ''); ?>">
                <textarea type="text" class="form-control" placeholder="The body of your post" name="body" required></textarea>
                <?php if($errors->has('body')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('body')); ?></strong>
                    </span>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Post">
            </div>
        </form>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>