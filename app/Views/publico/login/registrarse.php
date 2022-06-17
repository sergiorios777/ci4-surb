<?= $this->extend('layouts/loginweb') ?>

<?= $this->section('titulo') ?>
    <?= $titulo ?>
<?= $this->endSection() ?>

<?= $this->section('contenido') ?>
    <?= $titulo ?>
    <?= $this->include('partials/login/_form-nuevo') ?>
<?= $this->endSection() ?>