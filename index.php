<?php
	$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;
?>
<!DOCTYPE HTML>
<html lang="pt-br">

<?php
    include_once("head.html");
?>
<body>
<main class="main">
    
<div class="container">
    
    <div class="card text-center" id="tela_login">
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
                                <label class="col-md-12 control-label" for="log_email"></label>  
                                <div class="col-md-12">
                                    <input id="log_email" name="log_email" type="text" placeholder="E-mail" class="form-control input-md" required > 
                                </div>
                            </div>

                            <!-- Password input-->
                            <div class="form-group">
                                <label class="col-md-12 control-label" for="log_senha"></label>
                                <div class="col-md-12">
                                    <input id="log_senha" name="log_senha" type="password" placeholder="Senha" class="form-control input-md" required >
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
            Não tem uma conta? <a href="#" id="btn_registre">Registre-se agora!</a>
        </div>
    </div>

    <?php
		if($erro==1) {
			echo '<div class="alert alert-danger text-center" role="alert">';
			echo 'Usuário ou senha inválidos.';
			echo '</div>';
		}
	?>

    <div class="nao_exibir" id="tela_cad_usu">
        <div class="card-header bg-dark texto_branco rounded-top">CADASTRO</div>
        <div class="card-body">
            <div class="row">
                <div class="col-3"></div>
                <div class="col-6">
                    <form class="form-horizontal" id="form_cad_usuario" name="form_cad_usuario" method="POST">
                        <fieldset>
                            <!-- Text input-->
                            <div class="form-group">  
                                <div class="col-md-12">
                                    <input id="usu_nome" name="usu_nome" type="text" placeholder="Nome completo" class="form-control input-md" tabindex="1"> 
                                </div>
                            </div>
                            <!-- Text input-->
                            <div class="form-group">  
                                <div class="col-md-12">
                                    <input id="usu_email" name="usu_email" type="text" placeholder="E-mail" class="form-control input-md" tabindex="2">
                                </div>
                            </div>
                            <!-- Password input-->
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input id="usu_senha" name="usu_senha" type="password" placeholder="Senha" class="form-control input-md" tabindex="3">
                                </div>
                            </div>
                            <!-- Button -->
                            <div class="form-group">
                                <div class="col-md-12">
                                    <button type="button" id="btn_cad_usu" name="btn_cad_usu" class="btn btn-primary btn-lg btn-block" tabindex="4">Cadastrar</button>
                                </div>
                                <div class="col-md-12" id="msn_cad_usuario">
                                </div>  
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="col-3"></div>
            </div>
        </div>
    </div>
</div>

</main>
<?php
    include_once("footer.html");
?>
</body>
</html>