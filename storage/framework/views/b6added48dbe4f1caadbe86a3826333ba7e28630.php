<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link rel="stylesheet" href="<?php echo e(asset('/css/app.css')); ?>">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    </head>
    <body>
        <div id="app">
            <router-view></router-view>
        </div>
    <script src="<?php echo e(asset('/js/app.js')); ?>"></script>
    </body>
</html>
<?php /**PATH /var/www/html/resources/views/smrusb.blade.php ENDPATH**/ ?>