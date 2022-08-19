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

<a href="#">
    <div class="border border-gray-200 rounded p-6">
        <div class="border-2 border-black w-[320px] h-[185px] bg-orange-600">
            <h1>Chance</h1>
            <h2><?php echo e($chanceCard->message); ?></h2>
        </div>
    </div>
</a>

<?php /**PATH C:\xampp\Projects\Monopoly\resources\views/components/chance-card.blade.php ENDPATH**/ ?>