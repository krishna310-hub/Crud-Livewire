<!DOCTYPE html>
<html>
    <head>
        <title>Laravel Livewire CRUD</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
        <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::styles(); ?>

    </head>
    <body>
        <div class="container">
            <br>
            <h1>Livewire CRUD</h1>
            <?php
$__split = function ($name, $params = []) {
    return [$name, $params];
};
[$__name, $__params] = $__split('posts');

$__html = app('livewire')->mount($__name, $__params, 'lw-668904940-0', $__slots ?? [], get_defined_vars());

echo $__html;

unset($__html);
unset($__name);
unset($__params);
unset($__split);
if (isset($__slots)) unset($__slots);
?>
        </div>
        <?php echo \Livewire\Mechanisms\FrontendAssets\FrontendAssets::scripts(); ?>

    </body>
</html>
<?php /**PATH C:\LProjects\livewire-crud\resources\views/welcome.blade.php ENDPATH**/ ?>