<form id="form-registrar" method="post" action="actions/actions-usuarios.php">
    
<div class="modal-body">

    <div class="form-group">

        <div class="email_login">            
            
            <div class="form-group">
                <label>E-mail *</label>
                <input type="email" class="form-control login" id="email" name="email" value="<?= !empty($usuario) ? $usuario["email"] : ""?>" placeholder="E-mail">
            </div>

            <div class="form-group">
                <label>Repetir E-mail *</label>
                <input type="email" name="email_repetir" id="email_repetir" class="form-control login" placeholder="Repetir Email">
            </div>

            <div class="form-group">
                <label>Crear contraseña *</label>
                <input type="password" class="form-control login" id="clave" name = "clave" value="<?= !empty($usuario) ? $usuario["clave"] : ""?>" placeholder="Crear contraseña">
            </div>

            <div class="form-group">
                <label>Confirmar contraseña *</label>
                <input type="password" name="clave_repetir" id="clave_repetir" class="form-control login" placeholder="Confirmar contraseña">
            </div>
        </div>

    </div>

</div>

<div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
    <button type="submit" class="btn btn-primary">REGISTRAR CUENTA</button>
</div>

</form>