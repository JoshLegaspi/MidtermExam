<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>midterm - Legaspi</title>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />

</head>
<body>

    <div class="container mt-4">
        <table class="table table-striped table-bordered">
        <h1 class="text-3xl mb-4">Laravel Features</h1>
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Feature</th>
                    <th scope="col">Description</th>
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $features; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $feature): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($feature->id); ?></td>
                        <td><?php echo e($feature->name); ?></td>
                        <td><?php echo e($feature->description); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html><?php /**PATH D:\midterm-exam\resources\views/features.blade.php ENDPATH**/ ?>