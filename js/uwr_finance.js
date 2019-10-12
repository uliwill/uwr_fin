// INICIALIZAÇÃO DO SISTEMA **********************************************************************************
$(function() {
    $('#log_email').focus();
    setTimeout(function() {
        $('#avisoerrologin').attr('class', 'nao_exibir');
    }, 3000);
})
// FIM - INICIALIZAÇÃO DO SISTEMA ****************************************************************************

// CARREGA LINKS MENU ****************************************************************************************
/* function CarregaPage(page) {
    $("#conteudo").load(page);
    event.preventDefault();
    
} */
// LINK PARA HOME
$('#link_home').click(function() {
    $('#tela_home').attr('class', '');
    $('#tela_cad_td').attr('class', 'nao_exibir');
    $('#tela_cad_tr').attr('class', 'nao_exibir');
});
// LINK PARA TELA DE CADASTRO DE TIPO DE DESPESA
$('#link_cad_td').click(function() {
    $('#tela_home').attr('class', 'nao_exibir');
    $('#tela_cad_td').attr('class', '');
    $('#tela_cad_tr').attr('class', 'nao_exibir');
});
// LINK PARA TELA DE CADASTRO DE TIPO DE RECEITA
$('#link_cad_tr').click(function() {
    $('#tela_home').attr('class', 'nao_exibir');
    $('#tela_cad_td').attr('class', 'nao_exibir');
    $('#tela_cad_tr').attr('class', '');
});
// FIM - CARREGA LINKS MENU **********************************************************************************

$('#btn_login').click(function() {
    var campo_vazio = false;

    if($('#log_email').val() == '') {
        $('#log_email').css({'border-color': '#A94442'});
        campo_vazio = true;
        $('#log_email').focus();
    } else {
        $('#log_email').css({'border-color': '#CCC'});
    }
    if($('#log_senha').val() == '') {
        $('#log_senha').css({'border-color': '#A94442'});
        campo_vazio = true;
    } else {
        $('#log_senha').css({'border-color': '#CCC'});
    }
    if(campo_vazio) {
        return false;
    }
});

// TRANSIÇÃO DE TELAS LOGIN / REGISTRO DE USUÁRIO ************************************************************
$('#btn_registre').click(function() {
    $('#tela_login').attr('class', 'nao_exibir');
    $('#tela_cad_usu').attr('class', 'card text-center');
    $('#usu_nome').focus();
});
function CadUsuarioEfetuado() {
    $('#tela_login').attr('class', 'card text-center');
    $('#tela_cad_usu').attr('class', 'nao_exibir');
    $('#log_email').focus();
}
// FIM TRANSIÇÃO DE TELAS ************************************************************************************

// CADASTRO DE USUÁRIOS **************************************************************************************
$('#btn_cad_usu').click(function() {
    
    var campo_vazio = false;
    if($('#usu_nome').val() == '') {
        campo_vazio = true;
    }
    if($('#usu_email').val() == '') {
        campo_vazio = true;
    }
    if($('#usu_senha').val() == '') {
        campo_vazio = true;
    }
    if(campo_vazio) {
        return false;
    } else {
        $.ajax({
            url: '/uwr_fin/cad_usuario.php',
            method: 'post',
            data: $('#form_cad_usuario').serialize(),
            beforeSend: function() {
                $('#msn_cad_usuario').html("Carregando...");
            },
            success: function(data) {
                $('#msn_cad_usuario').html("Cadastrado com sucesso!");
            },
            error: function(data) {
                $('#msn_cad_usuario').html("Erro ao cadastrar usuário!");
            }
        });
    }
    CadUsuarioEfetuado();
    ExibeAvisos('Usuário cadastrado com sucesso!','alert alert-success text-center',3000);    
});
// FIM CADASTRO DE USUÁRIOS **********************************************************************************

// AVISO DE CADASTRO, EDIÇÃO OU EXCLUSÃO
function ExibeAvisos(texto, classe, tempo) {
    $('#telaavisos').html(texto);
    $('#telaavisos').attr('class', classe);
    setTimeout(OcAvisos, tempo); 
}
function OcAvisos() {
    $('#telaavisos').attr('class', 'nao_exibir');
}
// FIM AVISO DE CADASTRO, EDIÇÃO OU EXCLUSÃO



$('#btn_cad_td').click(function() {
    var campo_vazio = false;
    if($('#td_nome').val() == '') {
        campo_vazio = true;
    }
    if(campo_vazio) {
        ExibeAvisos('Preencha o tipo de despesa!','alert alert-danger text-center',3000);
        return false;
    }
});

$('#btn_teste').click(function() {
 alert('js funcionando');
});

