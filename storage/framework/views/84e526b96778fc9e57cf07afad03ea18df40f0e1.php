<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
    <link rel="stylesheet" href=<?php echo e(asset('css/app.css')); ?>>
    <title>Impetus</title>

</head>
<body class="antialiased text-gray-800">
<div class="min-h-screen pt-24 bg-neutral-50">
    <?php echo e($slot); ?>

</div>

<script src="<?php echo e(asset('js/app.js')); ?>"></script>

</body>
</html>
<?php /**PATH /var/www/html/LaravelProjects/impetus-1/resources/views/components/layout.blade.php ENDPATH**/ ?>