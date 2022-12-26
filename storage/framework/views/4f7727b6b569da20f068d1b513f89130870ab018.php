<div class="p2">
    <div class="form-group">
        <input type="text" name="name" id="name" value="<?php echo e($data->name); ?>" class="form-control" placeholder="name product">
        <input type="text" name="alamat" id="alamat" value="<?php echo e($data->alamat); ?>" class="form-control" placeholder="alamat product">
        <input type="text" name="email" id="email" value="<?php echo e($data->email); ?>" class="form-control" placeholder="email product">
    </div>
    <div class="form-group mt-2">
        <button class="btn btn-warning" onClick="update(<?php echo e($data->id); ?>)">Exit</button>
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\CRUD-Laravel8-with-ajax\resources\views/view.blade.php ENDPATH**/ ?>