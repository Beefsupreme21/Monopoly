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
            <h2 class="text-2xl font-bold uppercase mb-3">Add a new Chance Card</h2>
        </header>

        <form method="POST" action="/chance" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="mb-6">
                <p class="text-lg mb-1">Type of Monopoly Game</p>
                <div>
                    <div class="mb-6 flex justify-start">
                        <div>
                            <input type="radio" id="original" name="type" value="original">
                            <label for="original">Original</label><br>
                        </div>
                        <div class="ml-4">
                            <input type="radio" id="nflopoly" name="type" value="nflopoly">
                            <label for="nflopoly">NFL-Opoly</label><br>
                        </div>


                    </div>
                </div>
            </div>

            <div class="mb-6">
                <label for="message" class="inline-block text-lg mb-1">Message</label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="message"
                    placeholder="Park Place"
                    value="<?php echo e(old('type')); ?>"
                />

                <?php $__errorArgs = ['message'];
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
                <label for="image" class="inline-block text-lg mb-1">Image</label>
                <input
                    type="file"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="image"
                />

                <?php $__errorArgs = ['image'];
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
                <label for="amount" class="inline-block text-lg mb-2">Amount</label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="amount"
                    placeholder="$350"
                    value="<?php echo e(old('amount')); ?>"
                />

                <?php $__errorArgs = ['amount'];
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
                <p class="mb-2">Can you hold?</p>
                <div class="flex">
                    <div class="mb-6 flex-column">
                        <input type="radio" id="purple" name="canHold" value="purple">
                        <label for="purple">True</label><br>

                        <input type="radio" id="lightBlue" name="canHold" value="cyan">
                        <label for="lightBlue">False</label><br>
                    </div>
                </div>
                <?php $__errorArgs = ['canHold'];
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
                <label for="goToProperty" class="inline-block text-lg mb-2">Go to Property</label>
                <input
                    type="text"
                    class="border border-gray-200 rounded p-2 w-full"
                    name="goToProperty"
                    placeholder="$35"
                    value="<?php echo e(old('goToProperty')); ?>"
                />

                <?php $__errorArgs = ['goToProperty'];
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
                <button class="bg-laravel text-white rounded py-2 px-4 bg-black">
                    Create Card!
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
<?php endif; ?><?php /**PATH C:\xampp\Projects\Monopoly\resources\views/chanceCard/create.blade.php ENDPATH**/ ?>