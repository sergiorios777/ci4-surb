<nav>
    <ul>
        <li><a href="<?= base_url() ?>">Inicio</a></li>
        <?php $session = session();
            if ($session->has('usuario')) { ?>

        <li><?= $session->usuario ?>(<?= $session->tipo ?>)</li>
        <li><a href="<?= base_url() ?>/login/logout">Cerrar sesi&oacute;n</a></li>
        
        <?php } ?>
    </ul>
</nav>