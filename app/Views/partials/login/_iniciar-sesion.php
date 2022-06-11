<form action="<?= base_url() ?>/login" method="post">
    <fieldset>
        <legend>Credenciales del usuario</legend>
        <label for="identidad">Usuario o correo:<abbr title="requerido" aria-label="required">*</abbr></label>
        <input id="identidad" type="text" name="identidad" placeholder="Nombre de usuario o correo">
        <label for="password">Contrase&ntilde;a:<abbr title="requerido" aria-label="required">*</abbr></label>
        <input id="password" type="password" name="password" placeholder="Ingrese la contrase&ntilde;a">
    </fieldset>
    <button type="submit">Iniciar sesi&oacute;n</button>
</form>