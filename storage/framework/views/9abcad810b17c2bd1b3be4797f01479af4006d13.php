<?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.layout','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
        <header class="text-center">
            <h2 class="text-2xl font-bold uppercase mb-1">Edit Property</h2>
        </header>

        <form method="POST" action="/<?php echo e($property->id); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="mb-6">
                <label for="name" class="inline-block text-lg mb-1">Name</label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="name"
                    value="<?php echo e($property->name); ?>"
                />

                <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="mb-6">
                <label for="cost" class="inline-block text-lg mb-2">Cost</label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="cost"
                    placeholder="$300"
                    value="<?php echo e($property->cost); ?>"
                />

                <?php $__errorArgs = ['cost'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            

            <div>
                <p class="mb-2">Choose Color</p>
                <div class="flex justify-evenly">
                    <div class="mb-6 flex-column">
                        <input type="radio" id="purple" name="color" value="purple">
                        <label for="purple">Purple</label><br>
                        <input type="radio" id="lightBlue" name="color" value="cyan">
                        <label for="lightBlue">Light Blue</label><br>
                        <input type="radio" id="pink" name="color" value="pink">
                        <label for="pink">Pink</label><br>
                        <input type="radio" id="orange" name="color" value="orange">
                        <label for="orange">Orange</label><br>
                    </div>
        
                    <div class="mb-6 flex-column">
                        <input type="radio" id="red" name="color" value="red">
                        <label for="red">Red</label><br>
                        <input type="radio" id="yellow" name="color" value="yellow">
                        <label for="yellow">Yellow</label><br>
                        <input type="radio" id="green" name="color" value="green">
                        <label for="green">Green</label><br>
                        <input type="radio" id="blue" name="color" value="blue">
                        <label for="blue">Blue</label><br>
                    </div>
                </div>
            </div>

            <div class="mb-6">
                <label for="rent" class="inline-block text-lg mb-2">Rent</label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="rent"
                    placeholder="$40"
                    value="<?php echo e($property->rent); ?>"
                />

                <?php $__errorArgs = ['rent'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>


            <div class="mb-6">
                <label for="rentOneHouse" class="inline-block text-lg mb-2">Rent with 1 House</label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="rentOneHouse"
                    placeholder="$300"
                    value="<?php echo e($property->rentOneHouse); ?>"
                />

                <?php $__errorArgs = ['rentOneHouse'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="mb-6">
                <label for="rentTwoHouse" class="inline-block text-lg mb-2">Rent with 2 Houses</label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="rentTwoHouse"
                    placeholder="$300"
                    value="<?php echo e($property->rentTwoHouse); ?>"
                />

                <?php $__errorArgs = ['rentTwoHouse'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="mb-6">
                <label for="rentThreeHouse" class="inline-block text-lg mb-2">Rent with 3 Houses</label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="rentThreeHouse"
                    placeholder="$300"
                    value="<?php echo e($property->rentThreeHouse); ?>"
                />

                <?php $__errorArgs = ['rentThreeHouse'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="mb-6">
                <label for="rentFourHouse" class="inline-block text-lg mb-2">Rent with 4 Houses</label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="rentFourHouse"
                    placeholder="$300"
                    value="<?php echo e($property->rentFourHouse); ?>"
                />

                <?php $__errorArgs = ['rentFourHouse'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="mb-6">
                <label for="rentHotel" class="inline-block text-lg mb-2">Rent with Hotel</label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="rentHotel"
                    placeholder="$300"
                    value="<?php echo e($property->rentHotel); ?>"
                />

                <?php $__errorArgs = ['rentHotel'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="mb-6">
                <label for="mortgage" class="inline-block text-lg mb-2">Mortgage</label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="mortgage"
                    placeholder="$300"
                    value="<?php echo e($property->mortgage); ?>"
                />

                <?php $__errorArgs = ['mortgage'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="mb-6">
                <label for="houseCost" class="inline-block text-lg mb-2">House Cost</label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="houseCost"
                    placeholder="$50"
                    value="<?php echo e($property->houseCost); ?>"
                />

                <?php $__errorArgs = ['houseCost'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="mb-6">
                <label for="position" class="inline-block text-lg mb-2">Position</label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="position"
                    placeholder="$50"
                    value="<?php echo e($property->position); ?>"
                />

                <?php $__errorArgs = ['position'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <p class="text-red-500 text-xs mt-1"><?php echo e($message); ?></p>
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            </div>

            <div class="mb-6">
                <button class="bg-laravel bg-black text-white rounded py-2 px-4 hover:bg-black">
                    Update Card
                </button>

                <a href="/" class="text-black ml-4"> Back </a>
            </div>
        </form>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?><?php /**PATH C:\xampp\Projects\Monopoly\resources\views/edit.blade.php ENDPATH**/ ?>