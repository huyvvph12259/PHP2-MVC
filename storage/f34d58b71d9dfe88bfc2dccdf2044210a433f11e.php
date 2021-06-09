
<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-6 offset-3">
            <form action="" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Chon anh</label>
                    <input type="file" name="image[]" multiple class="form-control">
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-sm btn-success">Upload</button>
                </div>
            </form>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\PHP2\lesson5\app\views/admin/product/upload-form.blade.php ENDPATH**/ ?>