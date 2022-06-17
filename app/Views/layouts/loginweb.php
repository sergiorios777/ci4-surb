<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Web de pruebas de ci4">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $this->renderSection('titulo') ?></title>
</head>
<body>

<?= $this->include('partials/_navegacion') ?>

<main>
    <?= $this->renderSection('contenido') ?>
</main>


</body>
</html>