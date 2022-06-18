<?= $this->extend('layouts/loginweb') ?>

<?= $this->section('titulo') ?>
    <?= $titulo ?>
<?= $this->endSection() ?>

<?= $this->section('contenido') ?>
    <?= $titulo ?>
    <?= $this->include('partials/_listaerrores') ?>
    <?= $this->include('partials/login/_iniciar-sesion') ?>
    <div>
        <p>&iquest;No tiene usuario? <a href="<?= base_url() ?>/usuario/new">Registrarse</a></p>
    </div>
<?= $this->endSection() ?>