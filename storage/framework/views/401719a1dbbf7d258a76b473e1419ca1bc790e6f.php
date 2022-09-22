<?php $__env->startSection("book_name", isset($book) ? "Update ".$book->book_name : "Create book "); ?>

<?php $__env->startSection("content"); ?>
    <a type="button" class="btn btn-secondary" href="<?php echo e(route("books.index")); ?>">Back to books</a>
    <form method="POST"
          <?php if(@isset($book)): ?>
          action="<?php echo e(route("books.update", $book )); ?>"
          <?php else: ?>
          action="<?php echo e(route("books.store")); ?>"
          <?php endif; ?>
          class="mt-3">
        <?php echo csrf_field(); ?>
        <?php if(isset($book)): ?>
            <?php echo method_field("PUT"); ?>
        <?php endif; ?>
        <div class="row">
            <div class="row mt-3">
                <div class="col">
                    <input name="book_name"
                           value="<?php echo e(old("book_name", isset($book) ? $book->book_name : null )); ?>"
                           type="text" class="form-control" placeholder="book_name" aria-label="book_name">
                    <?php $__errorArgs = ["book_name"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="alert alert-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <input name="author_name"
                           value="<?php echo e(old("author_name", isset($book) ? $book->author_name : null )); ?>"
                           type="text" class="form-control" placeholder="author_name" aria-label="author_name">
                    <?php $__errorArgs = ["author_name"];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="alert alert-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <button type="submit" class="btn btn-success">Create</button>
            </div>
        </div>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make("layout", \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/louisemi/Desktop/CRUD/resources/views/form.blade.php ENDPATH**/ ?>