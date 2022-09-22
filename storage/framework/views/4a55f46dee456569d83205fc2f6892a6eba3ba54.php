<?php $__env->startSection("book_name", "Books"); ?>

<?php $__env->startSection("content"); ?>
    <a class="btn btn-primary"  role="button" href="<?php echo e(route("books.create")); ?>">Create book</a>

    <table class="table table-sm">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Book</th>
            <th scope="col">Author</th>
            <th scope="col">Actions</th>
        </tr>
        </thead>
        <tbody>







                <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row"><?php echo e($book->id); ?></th>
                <td>
                    <a href="<?php echo e(route("books.show", $book)); ?>"><?php echo e($book->book_name); ?></a>
                </td>
                <td>
                    <a href="<?php echo e(route("books.show", $book)); ?>"><?php echo e($book->author_name); ?></a>
                </td>
                <td>
                    <form method="POST" action="<?php echo e(route("books.destroy", $book)); ?>" >
                        <a type="button" class="btn btn-warning" href="<?php echo e(route("books.edit", $book)); ?>">Edit</a>
                        <?php echo csrf_field(); ?>
                        <?php echo method_field("DELETE"); ?>
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
    <?php echo e($books->links()); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/louisemi/Desktop/CRUD/resources/views/index.blade.php ENDPATH**/ ?>