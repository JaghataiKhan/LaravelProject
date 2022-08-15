<?php $attributes = $attributes->exceptProps(['item']); ?>
<?php foreach (array_filter((['item']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>
<li>
    <a href="/<?php echo e($item->slug); ?>"
       class="text-base font-medium text-dark hover:text-primary py-2 lg:inline-flex flex lg:ml-7 space-x-4">
        <?php echo e($item->name); ?>

    </a>
</li>
<?php /**PATH /var/www/html/LaravelProjects/impetus-1/resources/views/components/elements/navbar-item.blade.php ENDPATH**/ ?>