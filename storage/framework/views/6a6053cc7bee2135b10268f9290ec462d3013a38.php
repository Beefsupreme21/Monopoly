<?php foreach($attributes->onlyProps(['chanceCard']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['chanceCard']); ?>
<?php foreach (array_filter((['chanceCard']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>


<div class="bg-gray-50 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24">
    <header class="text-center">
        <h2 class="text-2xl font-bold uppercase mb-1">Add a new Chance Card</h2>
    </header>

    <form method="POST" action="/" enctype="multipart/form-data">
        <?php echo csrf_field(); ?>

        <input x-on:click="property = true, chance = false, communityChest = false" type="radio" name="type" value="property" checked="checked">
        <label for="html">Property</label><br>

        <input x-on:click="property = false, chance = true, communityChest = false" type="radio" name="type" value="chance">
        <label for="css">Chance</label><br>

        <input x-on:click="property = false, chance = false, communityChest = true" type="radio" name="type" value="communityChest">
        <label for="javascript">Community Chest</label><br>
        
        <div class="mb-6">
            <label for="name" class="inline-block text-lg mb-1">Name</label>
            <input
                type="text"
                class="border border-gray-200 rounded p-2 w-full"
                name="name"
                placeholder="Park Place"
                value="<?php echo e(old('name')); ?>"
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
                placeholder="$350"
                value="<?php echo e(old('cost')); ?>"
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
                placeholder="$35"
                value="<?php echo e(old('rent')); ?>"
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
                placeholder="$175"
                value="<?php echo e(old('rentOneHouse')); ?>"
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
                placeholder="$500"
                value="<?php echo e(old('rentTwoHouse')); ?>"
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
                placeholder="$1100"
                value="<?php echo e(old('rentThreeHouse')); ?>"
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
                placeholder="$1300"
                value="<?php echo e(old('rentFourHouse')); ?>"
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
                placeholder="$1500"
                value="<?php echo e(old('rentHotel')); ?>"
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
                placeholder="$175"
                value="<?php echo e(old('mortgage')); ?>"
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
                placeholder="$200"
                value="<?php echo e(old('houseCost')); ?>"
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
                placeholder="idk yet"
                value="<?php echo e(old('position')); ?>"
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
            <button class="bg-laravel text-white rounded py-2 px-4 bg-black">
                Create Card!
            </button>

            <a href="/" class="text-black ml-4"> Back </a>
        </div>
    </form>
</div><?php /**PATH C:\xampp\Projects\Monopoly\resources\views/components/create-communityChest.blade.php ENDPATH**/ ?>