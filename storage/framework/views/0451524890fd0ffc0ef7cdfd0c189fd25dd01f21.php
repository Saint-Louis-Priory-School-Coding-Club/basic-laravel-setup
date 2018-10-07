<?php $__env->startSection('content'); ?>

<div class="container-fluid">

    <div class="text-center">
        <h1>Welcome</h1>
    </div>

    <div class="panel-group col-lg-8 col-lg-offset-2">
        <?php $__currentLoopData = Auth::user()->posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h1><a href="/Journal/public/posts/<?php echo e($post->id); ?>"><?php echo e($post->title); ?></a></h1>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>

</div>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>