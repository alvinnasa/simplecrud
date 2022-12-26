<table class="table">
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Alamat</th>
        <th>Email</th>
        <th>Action</th>
    </tr>
    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($item->id); ?></td>
            <td><?php echo e($item->name); ?></td>
            <td><?php echo e($item->alamat); ?></td>
            <td><?php echo e($item->email); ?></td>
            <td>
                <!-- <button type="button" class="btn btn-success" href="<?php echo e(url('view')); ?>" >View</button> -->
                <button class="btn btn-warning" onClick="show(<?php echo e($item->id); ?>)">Edit</button>
                <button class="btn btn-danger" onClick="destroy(<?php echo e($item->id); ?>)">Delete</button>
            </td>
        </tr>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</table>
<?php /**PATH C:\xampp\htdocs\CRUD-Laravel8-with-ajax\resources\views/read.blade.php ENDPATH**/ ?>