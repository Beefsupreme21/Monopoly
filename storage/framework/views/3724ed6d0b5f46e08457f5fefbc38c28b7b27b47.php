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
</div><?php /**PATH C:\xampp\Projects\Monopoly\resources\views/components/property-board.blade.php ENDPATH**/ ?>