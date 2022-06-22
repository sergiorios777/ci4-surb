<nav>
    <ul>
        <li><a href="<?= base_url() ?>">Inicio</a></li>
        <li><a href="<?= base_url() ?>/acerca-de">Acerca de</a></li>
        <li><a href="<?= base_url() ?>/login/registrarse">Registrarse</a></li>
        <?php if (! session()->has('usuario')) {?>
        <li><a href="<?= base_url() ?>/login/login">Iniciar sesi&oacute;n</a></li>
        <?php } else { ?>
        <li><a href="<?= base_url() ?>/aplicacion">Aplicaci&oacute;n</a></li>
        <li><a href="<?= base_url() ?>/login/logout">Cerrar sesi&oacute;n</a></li>
        <?php } ?>
    </ul>
</nav>