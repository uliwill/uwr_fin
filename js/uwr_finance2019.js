// INICIALIZAÇÃO DO SISTEMA **********************************************************************************
$(function() {
    $("#conteudo").load("home.html");
})
// FIM - INICIALIZAÇÃO DO SISTEMA ****************************************************************************

// CARREGA LINKS MENU ****************************************************************************************
function CarregaPage(page) {
    // console.log(page);
    $("#conteudo").load(page);
    event.preventDefault();
}
// FIM - CARREGA LINKS MENU **********************************************************************************