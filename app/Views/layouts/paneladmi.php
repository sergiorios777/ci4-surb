<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de control</title>
</head>
<body>

    <?= $this->include('partials/app/_navegacion_app') ?>
    
    <aside>
        <?= $this->include('partials/app/_menu_lateral') ?>
    </aside>
    
    <main>
        <?= $this->renderSection('contenido') ?>
    </main>

</body>
</html>