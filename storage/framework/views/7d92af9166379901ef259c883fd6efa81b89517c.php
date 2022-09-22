<?php $__env->startSection('authorName', $author->authorName); ?>

<?php $__env->startSection('content'); ?>
    <a type="button" class="btn btn-secondary mt-3" href="<?php echo e(route('authors.index')); ?>">< Back to main page</a>
    <div class="card text-bg-light mt-3" style="max-width: 18rem;">
        <div class="card-header">AuthorName: <?php echo e($author->authorName); ?></div>
        <div class="card-body">
            <h5 class="card-title">Books amount: <?php echo e($author->books_amount); ?></h5>
        </div>
    </div>

    <form method="POST" action="<?php echo e(route('authors.destroy', $author)); ?>">
        <a type="button" class="btn btn-success mt-3" href="<?php echo e(route('authors.edit', $author)); ?>">Edit</a>
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <button class="btn btn-danger mt-3" type="submit">Delete</button>
    </form>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/louisemi/Desktop/CRUD/resources/views/showAuthors.blade.php ENDPATH**/ ?>