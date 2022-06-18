<?= $this->extend('layouts/loginweb') ?>

<?= $this->section('titulo') ?>
    <?= $titulo ?>
<?= $this->endSection() ?>

<?= $this->section('contenido') ?>
    <?= $this->include('partials/_listaerrores') ?>
    <?= $this->include('partials/login/_form-nuevo') ?>
<?= $this->endSection() ?>