<section id="tutorials" class="dark:bg-slate-800 pt-24 pb-16">
    <div class="container">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full px-4">
                <div class="text-center mx-auto mb-[60px] max-w-[560px]">
                    <h2 class="font-bold text-3xl text-emerald-600 mb-4">
                        ОТЗЫВЫ НАШИХ КЛИЕНТОВ
                    </h2>
                    <p class="text-base text-body-color">
                        Фермеры по всей республики довольны качеством нашей продукции
                    </p>
                </div>
            </div>
        </div>
        <div class="flex flex-wrap -mx-4">
            <?php $__currentLoopData = $videos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $video): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.video-section-item','data' => ['video' => $video]]); ?>
<?php $component->withName('video-section-item'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['video' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($video)]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <div class="flex justify-center">
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.button-link','data' => ['href' => 'https://www.youtube.com/channel/UCBNCiQj3kzUKmi0BwjdoltQ','variant' => 'red','class' => 'rounded-lg']]); ?>
<?php $component->withName('button-link'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['href' => 'https://www.youtube.com/channel/UCBNCiQj3kzUKmi0BwjdoltQ','variant' => 'red','class' => 'rounded-lg']); ?>
                Наш YouTube канал
             <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
        </div>
    </div>
</section>
<?php /**PATH /var/www/html/LaravelProjects/impetus-1/resources/views/components/pages/video-section.blade.php ENDPATH**/ ?>