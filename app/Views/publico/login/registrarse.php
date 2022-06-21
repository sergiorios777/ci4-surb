<?= $this->extend('layouts/loginweb') ?>

<?= $this->section('titulo') ?>
    <?= $titulo ?>
<?= $this->endSection() ?>

<?= $this->section('contenido') ?>
    <?= $this->include('partials/_mensaje') ?>
    <?= $this->include('partials/_listaerrores') ?>
    <?= $this->include('partials/login/_form-nuevo') ?>
    <div>
        <p>&iquest;Tiene usuario? <a href="<?= base_url() ?>/login/login">Iniciar sesi&oacute;n</a></p>
    </div>
<?= $this->endSection() ?>