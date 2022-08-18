<?php foreach($attributes->onlyProps(['properties']) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $attributes = $attributes->exceptProps(['properties']); ?>
<?php foreach (array_filter((['properties']), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
} ?>
<?php $__defined_vars = get_defined_vars(); ?>
<?php foreach ($attributes as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
} ?>
<?php unset($__defined_vars); ?>



<div x-data="{ properties: <?php echo e(json_encode($properties)); ?> }">
    <template x-for="property in properties">
        <h2 x-text="property.name"></h2>
    </template>
</div>

<?php /**PATH C:\xampp\Projects\Monopoly\resources\views/components/properties-index.blade.php ENDPATH**/ ?>