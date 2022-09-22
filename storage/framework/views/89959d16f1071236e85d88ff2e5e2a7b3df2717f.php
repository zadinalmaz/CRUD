<?php $__env->startSection('book_name', isset($author) ? 'Update '.$author->authorName : 'Create author'); ?>

<?php $__env->startSection('content'); ?>
    <a type="button" class="btn btn-secondary" href="/">Back to main</a>
    <form method="POST"
          <?php if(isset($author)): ?>
          action="<?php echo e(route('authors.update', $author)); ?>"
          <?php else: ?>
          action="<?php echo e(route('authors.store')); ?>"
          <?php endif; ?>
          class="mt-3">
        <?php echo csrf_field(); ?>
        <?php if(isset($author)): ?>
            <?php echo method_field('PUT'); ?>
        <?php endif; ?>
        <div class="row">
            <div class="col">
                <input name="authorName" value="<?php echo e(isset($author) ? $author->authorName : null); ?>"
                       type="text" class="form-control mt-3" placeholder="AuthorName" aria-label="AuthorName">
                <button type="submit" class="btn btn-success mt-3">Confirm</button>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/louisemi/Desktop/CRUD/resources/views/formAuthors.blade.php ENDPATH**/ ?>