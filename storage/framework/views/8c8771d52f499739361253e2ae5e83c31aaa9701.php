<a
    href="<?php echo e($href); ?>"
    <?php echo e($attributes->class([
        'py-4 px-6 md:px-9 lg:px-6 xl:px-9 rounded-full leading-normal border inline-block transition rounded-lg',
        'hover:bg-primary hover:border-primary hover:text-white text-white' => $variant === 'outline-primary',
        'hover:bg-red-700 hover:border-red-700 hover:text-white' => $variant === 'outline-red',
        'bg-red-700 border-red-700 text-white hover:bg-gray-800 hover:border-gray-800 ' => $variant === 'red',
        'bg-gray-900 border-gray-700 text-white hover:bg-gray-800 ' => $variant === 'dark',
        'bg-primary border-primary text-white hover:bg-secondary focus:bg-secondary hover:border-secondary focus:border-secondary' => $variant === 'primary',
        'bg-amber-500 border-amber-500 text-white hover:bg-gray-800 hover:border-gray-800 ' => $variant === 'amber'
      ])); ?>

>
    <div class="font-bold text-lg">
        <?php echo e($slot); ?>

    </div>
</a>

<?php /**PATH /var/www/html/LaravelProjects/impetus-1/resources/views/components/button-link.blade.php ENDPATH**/ ?>