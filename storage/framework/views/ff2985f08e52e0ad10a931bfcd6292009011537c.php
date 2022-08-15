<header
    x-data="{navbarOpen: false}"
    class="fixed left-0 top-0 z-50 bg-white w-full flex items-center shadow-md h-24"
>
    <div class="container">
        <div class="flex -mx-4 items-center justify-between relative">
            <div class="pr-4 w-60 max-w-full">
                <a href="/" class="w-full flex items-center py-2">
                    <img
                        src="<?php echo e(url("img/impetus.png")); ?>"
                        alt="logo"
                        class="w-full"
                    />
                </a>
            </div>
            <div class="flex px-4 justify-end items-center w-full">
                <div>
                    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.elements.navbar-hamburger','data' => ['@click' => 'navbarOpen = !navbarOpen','xBind:class' => 'navbarOpen && \'navbarTogglerActive\'']]); ?>
<?php $component->withName('elements.navbar-hamburger'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['@click' => 'navbarOpen = !navbarOpen','x-bind:class' => 'navbarOpen && \'navbarTogglerActive\'']); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                    <nav
                        :class="!navbarOpen && 'hidden' "
                        id="navbarCollapse"
                        class="absolute right-0 top-full bg-white py-5 px-6 z-50 shadow rounded-lg w-full lg:px-0 lg:max-w-full lg:w-full lg:right-4 lg:block lg:static lg:shadow-none">
                        <ul class="block lg:flex lg:items-center">
                            <?php $__currentLoopData = $navbarItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.elements.navbar-item','data' => ['item' => $item]]); ?>
<?php $component->withName('elements.navbar-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['item' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($item)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<?php /**PATH /var/www/html/LaravelProjects/impetus-1/resources/views/components/elements/navbar.blade.php ENDPATH**/ ?>