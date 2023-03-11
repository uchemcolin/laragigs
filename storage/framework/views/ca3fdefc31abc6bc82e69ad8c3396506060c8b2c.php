

<?php $__env->startSection("content"); ?>

    <a href="/" class="inline-block text-black ml-4 mb-4"
        ><i class="fa-solid fa-arrow-left"></i> Back
    </a>
    <!--<div class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4">-->
        
    <!--</div>-->

    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.card','data' => []]); ?>
<?php $component->withName('card'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
        <div
            class="flex flex-col items-center justify-center text-center"
        >
            <!--<img
                class="w-48 mr-6 mb-6"
                src="<?php echo e(asset('images/acme.png')); ?>"
                alt=""
            />-->

            <img
                class="w-48 mr-6 mb-6"
                src="<?php echo e($listing->logo ? asset('storage/'. $listing->logo) : asset('/images/no-image.png')); ?>" 
                alt=""
            />

            <h3 class="text-2xl mb-2"><a href="/listings/<?php echo e($listing["id"]); ?>">Senior Laravel Developer</a></h3>
            <div class="text-xl font-bold mb-4">Acme Corp</div>

            <?php
                $listing_tags = $listing["tags"];
            ?>
            
            <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.listing-tags','data' => ['tagsCsv' => $listing_tags]]); ?>
<?php $component->withName('listing-tags'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes(['tagsCsv' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($listing_tags)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
            
            <div class="text-lg my-4">
                <i class="fa-solid fa-location-dot"></i> <?php echo e($listing->location); ?>

            </div>
            <div class="border border-gray-200 w-full mb-6"></div>
            <div>
                <h3 class="text-3xl font-bold mb-4">
                    Job Description
                </h3>
                <div class="text-lg space-y-6">
                    <p>
                        <?php echo e($listing->description); ?>

                    </p>
                    <!--<p>
                        Lorem, ipsum dolor sit amet consectetur
                        adipisicing elit. Quaerat praesentium eos
                        consequuntur ex voluptatum necessitatibus
                        odio quos cupiditate iste similique rem in,
                        voluptates quod maxime animi veritatis illum
                        quo sapiente.
                    </p>-->

                    <a
                        href="mailto:test@test.com"
                        class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80"
                        ><i class="fa-solid fa-envelope"></i>
                        Contact Employer</a
                    >

                    <a
                        href="https://test.com"
                        target="_blank"
                        class="block bg-black text-white py-2 rounded-xl hover:opacity-80"
                        ><i class="fa-solid fa-globe"></i> Visit
                        Website</a
                    >
                </div>
            </div>
        </div>
    <!--</div>-->
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>

    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\mysites\laragigs\resources\views/listings/show.blade.php ENDPATH**/ ?>