<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>แจ้งข้อร้องเรียน เสนอแนะ แนะนำบริการ</title>
    <link rel="shortcut icon" href="<?php echo e(asset('storage/img/h.png')); ?>">
    <?php echo \Livewire\Livewire::styles(); ?>

    <?php echo htmlScriptTagJsApi(); ?>

    <?php echo app('Illuminate\Foundation\Vite')(['resources/sass/app.scss', 'resources/js/app.js']); ?>
</head>
<body>
    <?php echo $__env->make('sweetalert::alert', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('report', [])->html();
} elseif ($_instance->childHasBeenRendered('2NW34w1')) {
    $componentId = $_instance->getRenderedChildComponentId('2NW34w1');
    $componentTag = $_instance->getRenderedChildComponentTagName('2NW34w1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('2NW34w1');
} else {
    $response = \Livewire\Livewire::mount('report', []);
    $html = $response->html();
    $_instance->logRenderedChild('2NW34w1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
  
    <?php echo \Livewire\Livewire::scripts(); ?>

  </body>
</html><?php /**PATH C:\laragon\www\report\resources\views/index.blade.php ENDPATH**/ ?>