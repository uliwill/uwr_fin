// INICIALIZAÇÃO DO SISTEMA **********************************************************************************
$(function() {
    $("#conteudo").load("home.html");
    $('#usu_usuario').focus();
})
// FIM - INICIALIZAÇÃO DO SISTEMA ****************************************************************************

// CARREGA LINKS MENU ****************************************************************************************
function CarregaPage(page) {
    $("#conteudo").load(page);
    event.preventDefault();
}
// FIM - CARREGA LINKS MENU **********************************************************************************

$('#btn_login').click(function() {
    var campo_vazio = false;

    if($('#usu_usuario').val() == '') {
        $('#usu_usuario').css({'border-color': '#A94442'});
        campo_vazio = true;
        $('#usu_usuario').focus();
    } else {
        $('#usu_usuario').css({'border-color': '#CCC'});
    }
    if($('#usu_senha').val() == '') {
        $('#usu_senha').css({'border-color': '#A94442'});
        campo_vazio = true;
    } else {
        $('#usu_senha').css({'border-color': '#CCC'});
    }
    if(campo_vazio) return false;
});