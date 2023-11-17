<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.app','data' => ['titulo' => 'Principal','metaDescription' => 'Página principal','suma' => 2+3]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['titulo' => 'Principal','meta-description' => 'Página principal','suma' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(2+3)]); ?>

    <form action="" method="GET">
        <h2>Log In</h2>
        <div>
            <label for="name">Name: </label>
            <input type="text" name="" id="name">
        </div>
        <div>
            <label for="pass">Password: </label>
            <input type="text" name="" id="password">
        </div>
        <div> 
            <a href="<?php echo e(route('tab')); ?>"><input type="submit" value="Log In" /></a>
            <p>No tienes cuenta? <a href='<?php echo e(route('reg')); ?>'>Create an account</a></p>
        </div>
    </form>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?><?php /**PATH /var/www/laravelapp/resources/views/principal.blade.php ENDPATH**/ ?>