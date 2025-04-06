<!DOCTYPE html>
<html>

<head>
    <title>Upload Roster</title>
</head>

<body>
    <h1>Upload Roster File</h1>

    <?php if(session('success')): ?>
    <p style="color: green"><?php echo e(session('success')); ?></p>
    <?php endif; ?>

    <?php if($errors->any()): ?>
    <ul style="color: red">
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    <?php endif; ?>

    <form action="<?php echo e(url('/rosters')); ?>" method="POST" enctype="multipart/form-data">

        <?php echo csrf_field(); ?>
        <input type="file" name="roster" accept=".txt,.pdf,.html,.xls,.xlsx" required>
        <br><br>
        <button type="submit">Upload Roster</button>
    </form>
</body>

</html><?php /**PATH C:\xampp\htdocs\airline-roster-parser\resources\views/upload.blade.php ENDPATH**/ ?>