<form id="form-login" action ="actions/action-login.php" method="post">
    <div class="modal fade iniciar-sesion">
                         
                                <div class="modal-dialog">
                                    
                                    <div class="modal-content">
                                    
                                        <div class="modal-header">

                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            
                                            <h4 class="modal-title">INICIAR SESION:</h4>

                                        </div>

                                        <div class="modal-body">

                                            <div class="form-group">

                                                <div class="email_login">
                                                    <div id="message-login"></div>
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="email" name="login_email" id="login_email" class="form-control login" placeholder="Email">
                                                    </div>

                                                    <div class="form-group">
                                                        <label>Contraseña</label>
                                                        <input type="password" name="login_clave" id="login_clave" class="form-control login" id="exampleInputPassword1" placeholder="Contraseña">
                                                    </div>

                                                </div>

                                                <div class="chkRecordarme">
                                                    <label>
                                                            <input type="checkbox" checked="true"> Recordarme
                                                    </label>
                                                    <br>
                                                    <a href="recuperarPassword.php">Olvide mi contraseña</a>            
                                                </div>

                                            </div>

                                        </div>

                                        <div class="modal-footer">

                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                                            <button type="submit" class="btn btn-primary">INGRESAR</button>

                                        </div>

                                    </div>
                                    
                                </div>
                                
                            </div>
    </form>