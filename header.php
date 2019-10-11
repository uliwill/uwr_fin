<!-- HEADER - BEGIN -->
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark"  role="navigation">
        <a class="navbar-brand" href="#">UWR Finance</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        

        <div class="collapse navbar-collapse" id="navbarToggler">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="CarregaPage('cont_home.php')">HOME</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        CADASTROS
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#" onclick="CarregaPage('cad_tipo_despesa.html')">Tipos de despesa</a>
                        <a class="dropdown-item" href="#" onclick="CarregaPage('cad_tipo_receita.html')">Tipos de receita</a>
                        <a class="dropdown-item" href="#" onclick="CarregaPage('cad_usuario.html')">Usuários</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    LANÇAMENTOS
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                        <a class="dropdown-item" href="#" onclick="CarregaPage('lanc_n_despesa.html')">Nova despesa</a>
                        <a class="dropdown-item" href="#" onclick="CarregaPage('lanc_n_receita.html')">Nova receita</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    CONSULTAS
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                        <a class="dropdown-item" href="#" onclick="CarregaPage('cons_despesa.html')">Despesas</a>
                        <a class="dropdown-item" href="#" onclick="CarregaPage('cons_receita.html')">Receitas</a>
                        <a class="dropdown-item" href="#" onclick="CarregaPage('cons_resumo.html')">Resumo</a>
                    </div>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown4" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        MANUTENÇÃO
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                        <a class="dropdown-item" href="#" onclick="CarregaPage('manut_tipo_despesa.html')">Tipos de despesa</a>
                        <a class="dropdown-item" href="#" onclick="CarregaPage('manut_tipo_receita.html')">Tipos de receita</a>
                        <a class="dropdown-item" href="#" onclick="CarregaPage('manut_despesa.html')">Despesas</a>
                        <a class="dropdown-item" href="#" onclick="CarregaPage('manut_receita.html')">Receitas</a>
                        <a class="dropdown-item" href="#" onclick="CarregaPage('manut_usuario.html')">Usuários</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="sair.php">SAIR</a>
                </li>
            </ul>
        </div>
    </nav>
</header>
<!-- HEADER - END -->