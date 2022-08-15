















<section class="text-gray-600 body-font">
    <div class="w-full h-full bg-no-repeat bg-cover bg-left bg-fixed" style="background-image: url(<?php echo e($hero->image_path); ?>);">
    <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col">
        <div class="text-center lg:w-2/3 w-full">
            <h1 class="text-xl mb-8 sm:text-2xl md:text-3xl lg:text-4xl text-center text-white dark:text-white font-black leading-7 md:leading-10">
            <?php echo $hero->tagline; ?>

            </h1>
            <p class="mb-8 leading-relaxed text-white"><?php echo e($hero->body); ?></p>
            <div class="flex justify-center">
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.button-link','data' => ['href' => '/products','variant' => 'outline-primary','class' => 'rounded-lg']]); ?>
<?php $component->withName('button-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => '/products','variant' => 'outline-primary','class' => 'rounded-lg']); ?>
                    НАША ПРОДУКЦИЯ
                 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            </div>
        </div>
    </div>
    </div>
</section>
<?php /**PATH /var/www/html/LaravelProjects/impetus-1/resources/views/components/pages/hero.blade.php ENDPATH**/ ?>