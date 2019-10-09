<?php
    include_once("conn.php");
?>
<html lang="pt-br">

<?php
    include_once("head.html");
?>
<body>

<div class="container">
    
    
    <div class="card text-center">
        <div class="card-header bg-dark texto_branco rounded-top">
            CONTROLE DE ACESSO
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    <form class="form-horizontal" action="valida_acesso.php" method="post" id="form_login">
                        <fieldset>
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-12 control-label" for="usu_usuario"></label>  
                                <div class="col-md-12">
                                    <input id="usu_usuario" name="usu_usuario" type="text" placeholder="Nome de usuário" class="form-control input-md" required > 
                                </div>
                            </div>

                            <!-- Password input-->
                            <div class="form-group">
                                <label class="col-md-12 control-label" for="usu_senha"></label>
                                <div class="col-md-12">
                                    <input id="usu_senha" name="usu_senha" type="password" placeholder="Senha" class="form-control input-md" required >
                                </div>
                            </div>

                            <!-- Button -->
                            <div class="form-group">
                                <label class="col-md-12 control-label" for="btn_login"></label>
                                <div class="col-md-12">
                                    <button id="btn_login" name="btn_login" class="btn btn-primary btn-lg btn-block">Entrar</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="col-3"></div>
            </div>
        </div>
        <div class="card-footer text-muted rounded-bottom">
            Não tem uma conta? <a href="#">Registre-se agora!</a>
        </div>
    </div>
</div>
<?php
    include_once("footer.html");
?>
</body>
</html>