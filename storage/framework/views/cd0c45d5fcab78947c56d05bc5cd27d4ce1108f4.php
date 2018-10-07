<?php $__env->startSection('content'); ?>

<div class="container-fluid">
    <div class="row">
        <div class="panel panel-default col-lg-8 col-lg-offset-2">
            <div class="panel-heading">
                <h1><?php echo e($post->title); ?></h1>
            </div>
            <div class="panel-body">
                <p class="pre"><?php echo e($post->body); ?></p>
                <?php if($post->user->id == Auth::id()): ?>
                    <a href="/Journal/public/edit/<?php echo e($post->id); ?>" class="btn btn-primary">Edit Post</a>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <hr>

    <div class="col-lg-8 col-lg-offset-2">
    	<div class="panel-group">
            <h1>Comments</h1>
            <?php if(auth()->guard()->check()): ?>
            <hr>
            <div class="panel">
                <div class="panel-heading">
                    <h3>Comment Here</h3>
                </div>
                <div class="panel-body">
                    <form method="post" class="" action="/posts/<?php echo e($post->id); ?>/comment">
                        <?php echo e(csrf_field()); ?>

                        <div class="form-group">
                            <input type="text" class="form-control" name="body" placeholder="Your comment here.">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Post Comment" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
            <?php endif; ?>
            <hr>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>