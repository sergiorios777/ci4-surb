<?= $this->extend('layouts/paneladmi') ?>

<?= $this->section('contenido') ?>
    <?= $this->include('partials/_mensaje') ?>
    <h2>Panel de control.</h2>
    <ul>
        <li>Contenido del panel de contol.</li>
        <li>Tablas, formularios, imágenes u otros objetos.</li>
    </ul>
<?= $this->endSection() ?>