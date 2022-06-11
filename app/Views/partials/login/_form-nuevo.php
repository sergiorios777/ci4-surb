<form action="<?= base_url() ?>/usuarios/create" method="post">
    <caption hidden>Registrar usuario nuevo</caption>
    <fieldset>
        <legend>información del usuario nuevo</legend>
        <label for="usuario">Usuario:<abbr title="requerido" aria-label="required">*</abbr></label>
        <input id="usuario" type="text" name="usuario" placeholder="Nombre de usuario">
        <label for="correo">Correo:<abbr title="requerido" aria-label="required">*</abbr></label>
        <input id="correo" type="email" name="correo" placeholder="correo@algo.com">
        <label for="password">Contraseña:<abbr title="requerido" aria-label="required">*</abbr></label>
        <input id="password" type="password" name="password" placeholder="Entre 3 y 14 caracteres">
        <label for="password2">Repetir contraseña:<abbr title="requerido" aria-label="required">*</abbr></label>
        <input id="password2" type="password" name="password2" placeholder="Entre 3 y 14 caracteres">
    </fieldset>
    <button type="submit">Crear usuario</button>
</form>