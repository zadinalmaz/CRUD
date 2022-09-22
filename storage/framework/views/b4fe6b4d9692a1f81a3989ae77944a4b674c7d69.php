<?php $__env->startSection("book_name", "Book ".$book->book_name); ?>

<?php $__env->startSection("content"); ?>
    <a type="button" class="btn btn-secondary" href="<?php echo e(route("books.index")); ?>">Back to books</a>
    <div class="card mt-3" style="width: 18rem;">
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Id: <?php echo e($book->id); ?></li>
            <li class="list-group-item">Book: <?php echo e($book->book_name); ?></li>
            <li class="list-group-item">Author: <?php echo e($book->author_name); ?></li>
            <li class="list-group-item">Count: <?php echo e($book->count); ?></li>
            <li class="list-group-item">Author_id: <?php echo e($book->author_id); ?></li>
            <li class="list-group-item">Created: <?php echo e($book->created_at->format("d/m/y H:i:s")); ?></li>
            <li class="list-group-item">Updated: <?php echo e($book->updated_at->format("d/m/y H:i:s")); ?></li>
        </ul>
    </div>
    <form method="POST" class="mt-3" action="<?php echo e(route("books.destroy", $book)); ?>" >
        <a type="button" class="btn btn-warning" href="<?php echo e(route("books.edit", $book)); ?>">Edit</a>
        <?php echo csrf_field(); ?>
        <?php echo method_field("DELETE"); ?>
        <button class="btn btn-danger" type="submit">Delete</button>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/louisemi/Desktop/CRUD/resources/views/show.blade.php ENDPATH**/ ?>