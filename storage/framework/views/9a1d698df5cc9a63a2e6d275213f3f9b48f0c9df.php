<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="text-center">
        <h1>Edit a Post</h1>
    </div>
    <div class="col-xs-8 col-xs-offset-2">
        <form class="form-horizontal" method="post" action="/Journal/public/edit/<?php echo e($id->id); ?>">
            <?php echo e(csrf_field()); ?>

            <input type="hidden" name="id" value="<?php echo e($id->id); ?>">
            <div class="form-group<?php echo e($errors->has('body') ? ' has-error' : ''); ?>">
                <input type="text" class="form-control" value="<?php echo e($id->title); ?>" name="title" required>
                <?php if($errors->has('title')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('title')); ?></strong>
                    </span>
                <?php endif; ?>
            </div>
            <div class="form-group<?php echo e($errors->has('body') ? ' has-error' : ''); ?>">
                <textarea type="text" class="form-control" name="body" required><?php echo e($id->body); ?></textarea>
                <?php if($errors->has('body')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('body')); ?></strong>
                    </span>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <input type="submit" class="btn btn-primary" value="Save">
                <a href="/Journal/public/posts/<?php echo e($id->id); ?>" class="btn btn-primary"><?php echo e($id->title); ?></a>
            </div>
        </form>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>