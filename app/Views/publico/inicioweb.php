<?= $this->extend('layouts/comunweb') ?>

<?= $this->section('titulo') ?>
    <?= $titulo ?>
<?= $this->endSection() ?>

<?= $this->section('header') ?>

    <h1><?= $titulo ?></h1>
    <p>Esta secci&oacute;n es el encabezado de la web.</p>
    <?= $this->include('partials/_mensaje') ?>

<?= $this->endSection() ?>

<?= $this->section('contenido') ?>

    <h2>Esta es la secci&oacute;n principal.</h2>
    <ul>
        <li>Contenido principal de la p&aacute;gina.</li>
        <li>Tablas, formularios, imágenes u otros objetos.</li>
    </ul>
<?= $this->endSection() ?>