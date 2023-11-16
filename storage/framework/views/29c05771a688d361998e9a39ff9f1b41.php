<?php if (isset($component)) { $__componentOriginal71c6471fa76ce19017edc287b6f4508c = $component; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.app','data' => ['titulo' => 'Principal','metaDescription' => 'Página principal','suma' => 2+3]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layouts.app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['titulo' => 'Principal','meta-description' => 'Página principal','suma' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute(2+3)]); ?>
    <h2 class="mt-3 text-center">Principal</h2>
    <form action="" method="GET" class="text-center">
        <div class="mt-5">
            <label for="name">Name: </label>
            <input class="ml-4" type="text" name="" id="name">
        </div>
        <div class="mt-3">
            <label for="name">Password: </label>
            <input class="ml-3" type="text" name="" id="password">
        </div>
        <div class="mb-3 mt-3"> 
            <input type="submit" value="Log In" />
            <a>Not register? Create an account</a>
        </div>
    </form>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal71c6471fa76ce19017edc287b6f4508c)): ?>
<?php $component = $__componentOriginal71c6471fa76ce19017edc287b6f4508c; ?>
<?php unset($__componentOriginal71c6471fa76ce19017edc287b6f4508c); ?>
<?php endif; ?><?php /**PATH /var/www/laravelapp/resources/views/principal.blade.php ENDPATH**/ ?>