<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layout','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

    <style>
        .test {
            background-color: rgb(205, 230, 208);
        }
    </style>

    <a href="/" class="inline-block text-black ml-4 mb-4"
    ><i class="fa-solid fa-arrow-left"></i> Back
    </a>

    <div class="mx-4 flex justify-center items-center" >
        <div class="border-2 border-black w-[320px] h-[375px]">
            <div class="border-2 border-black bg-<?php echo e($property->color); ?>-600 text-center text-white m-2 p-2">
                <p>TITLE DEED</p>
                <h1 class="uppercase text-lg"><?php echo e($property->name); ?></h1>
            </div>
            <div class="m-2">
                <div class="text-center">
                    <p>Rent $<?php echo e($property->rent); ?>.</p>
                </div>
                <div class="flex justify-between px-3">
                    <p>With 1 House</p>
                    <p>$<?php echo e($property->rentOneHouse); ?>.</p>
                </div>
                <div class="flex justify-between px-3">
                    <p>With 2 Houses</p>
                    <p>$<?php echo e($property->rentTwoHouse); ?>.</p>
                </div>
                <div class="flex justify-between px-3">
                    <p>With 3 Houses</p>
                    <p>$<?php echo e($property->rentThreeHouse); ?>.</p>
                </div>
                <div class="flex justify-between px-3">
                    <p>With 4 Houses</p>
                    <p>$<?php echo e($property->rentFourHouse); ?>.</p>
                </div>
                <div class="text-center px-3">
                    <p>With HOTEL $<?php echo e($property->rentHotel); ?>.</p>
                </div>
                <div class="text-center px-3 pt-3">
                    <p>Mortgage Value $<?php echo e($property->mortgage); ?>.</p>
                </div>
                <div class="text-center px-3">
                    <p>Houses cost $<?php echo e($property->rentFourHouse); ?>. each</p>
                </div>
                <div class="text-center px-3">
                    <p>Hotels, $<?php echo e($property->rentFourHouse); ?>. plus 4 houses</p>
                </div>
                <div class="text-center p-3 text-xs">
                    <p>If a player owns ALL the lots of any Color-Group the rent is Doubled on Unimproved Lots in that group. </p>
                    <p>&copy Hasbro, Inc.</p>
                </div>
            </div>

        </div>
        <div class="ml-24 border-2 border-black w-[160px] h-[260px] test relative ">
            <div class="border-b-2 border-black bg-<?php echo e($property->color); ?>-600 text-center text-white h-[45px]"></div>
            <div class="flex-col justify-between text-center items-center">
                <div class="pt-4">
                    <div><?php echo e($property->name); ?></div>
                </div>
                <div class="absolute bottom-4 left-0 right-0 text-center">
                    <div>PRICE <s>M</s><?php echo e($property->cost); ?></div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-4 p-2 flex space-x-16 justify-center">
        <a href="/<?php echo e($property->id); ?>/edit">
            <i class="fa-solid fa-pencil"></i> Edit
        </a>

        <form method="POST" action="#">
            <?php echo csrf_field(); ?>
            <?php echo method_field('DELETE'); ?>
            <button class="text-red-500">
                <i class="fa-solid fa-trash"></i> Delete
            </button>
        </form>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH C:\xampp\Projects\Monopoly\resources\views/show.blade.php ENDPATH**/ ?>