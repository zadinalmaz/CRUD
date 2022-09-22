<?php $__env->startSection('content'); ?>
    <section class="flex justify-content-space-between align-items-center">
        <h1>Booker</h1>
        <a href="<?php echo e(route('dashboard')); ?>" >go to dashboard</a>
    </section>
    <hr>
    <h3>Books (<?php echo e(count($data)); ?>)</h3>

    <div class="flex flex-wrap wfull justify-content-center align-items-end">
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <section class="flex flex-column flex-basis-200 p8 align-items-center">
                <img src="<?php echo e($book['cover']); ?>" class="wfull" alt="">
                <h3 class="np nm pt16"><?php echo e($book['book_name']); ?></h3>
                <p class="np nm pt4"><?php echo e($book['author_name']); ?></p>
            </section>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/louisemi/Desktop/CRUD/resources/views/welcome.blade.php ENDPATH**/ ?>