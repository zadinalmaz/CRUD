<?php $__env->startSection('book_name', 'Authors'); ?>

<?php $__env->startSection('content'); ?>
    <table class="table mt-3">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">AuthorName</th>
            <th scope="col">Books amount</th>
        </tr>
        </thead>
        <tbody>
        <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $author): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <th scope="row"><?php echo e($author->id); ?></th>
                <th>
                    <a href="<?php echo e(route('authors.show', $author)); ?>"><?php echo e($author->authorName); ?></a>
                </td>
                <td>
                    <a href="<?php echo e(route('authors.show', $author)); ?>"> <?php echo e($author->count ?? 0); ?></a>
                </td>
                <td>
                    <form method="POST" action="<?php echo e(route('authors.destroy', $author)); ?>">
                        <a type="button" class="btn btn-success" href="<?php echo e(route('authors.edit', $author)); ?>">Edit</a>
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </tbody>
    </table>
    <tr>
        <td>
            <a class="btn btn-primary" role="button" href="<?php echo e(route('authors.create')); ?>">Add new author</a>
        </td>
        <td>
            <a type="button" class="btn btn-secondary" href="/">Back to main</a>
        </td>
    </tr>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/louisemi/Desktop/CRUD/resources/views/indexAuthors.blade.php ENDPATH**/ ?>