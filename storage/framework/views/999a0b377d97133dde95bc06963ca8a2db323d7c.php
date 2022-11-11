<?php $__env->startSection('content'); ?>

<?php if (isset($component)) { $__componentOriginal380e9d9a29421f515f4983447525f49b01021983 = $component; } ?>
<?php $component = App\View\Components\UserDataLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('UserDataLayout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\UserDataLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal380e9d9a29421f515f4983447525f49b01021983)): ?>
<?php $component = $__componentOriginal380e9d9a29421f515f4983447525f49b01021983; ?>
<?php unset($__componentOriginal380e9d9a29421f515f4983447525f49b01021983); ?>
<?php endif; ?>

    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/ayodhya/Desktop/websales/resources/views/admindash/info.blade.php ENDPATH**/ ?>