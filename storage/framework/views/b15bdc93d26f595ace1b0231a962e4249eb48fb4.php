<?php foreach($attributes->onlyProps(['property']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['property']); ?>
<?php foreach (array_filter((['property']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>

<div class="border border-gray-200 rounded p-6">
    <div class="border-2 border-black w-[320px] h-[385px]">
        <div class="border-2 border-black bg-<?php echo e($property->color); ?>-600 text-center text-white m-2 p-2">
            <p>TITLE DEED</p>
            <h2><?php echo e($property->name); ?></h2>
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
</div><?php /**PATH C:\xampp\Projects\Monopoly\resources\views/components/property-card.blade.php ENDPATH**/ ?>