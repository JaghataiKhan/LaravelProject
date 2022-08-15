<section class="pt-20 lg:pt-[120px] pb-12 lg:pb-[90px] overflow-hidden">
    <div class="container">
        <div class="flex flex-wrap justify-between items-center -mx-4">
            <div class="w-full lg:w-6/12 px-4">
                <div class="flex items-center -mx-3 sm:-mx-4">
                    <div class="w-full xl:w-1/2 px-3 sm:px-4">
                        <div class="py-3 sm:py-4 w-full h-full">
                            <img
                                src="<?php echo e($about->image1_path); ?>"
                                alt=""
                                class="rounded-2xl w-full"
                            />
                        </div>
                        <div class="py-3 sm:py-4">
                            <img
                                src="<?php echo e($about->image2_path); ?>"
                                alt=""
                                class="rounded-2xl w-full"
                            />
                        </div>
                    </div>
                    <div class="w-full xl:w-1/2 px-3 sm:px-4">
                        <div class="my-4 relative z-10">
                            <img
                                src="<?php echo e($about->image3_path); ?>"
                                alt=""
                                class="rounded-2xl w-full"
                            />
                            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.about-dots','data' => []]); ?>
<?php $component->withName('about-dots'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full lg:w-1/2 xl:w-5/12 px-4">
                <div class="mt-10 lg:mt-0">
          <span class="font-semibold text-lg text-primary mb-2 block">
             <blockquote class="text-sm text-gray-500 italic py-2 px-3 border-l-4 border-lime-600">
                 "Everything is achievable with hard work"
             </blockquote>
          </span>
                    <h2 class="font-bold text-3xl sm:text-4xl dark:text-gray-200 mb-8">
                        О нас
                    </h2>
                    <p class="text-base mb-8 italic">
                        <?php echo $about->body; ?>









                    </p>
                    <a href="/about"
                       class="text-blue-500 py-2 uppercase font-medium">
                        УЗНАТЬ БОЛЬШЕ
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php /**PATH /var/www/html/LaravelProjects/impetus-1/resources/views/components/pages/about.blade.php ENDPATH**/ ?>