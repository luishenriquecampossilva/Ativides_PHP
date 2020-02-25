<nav role="navigation" class="navbar navbar-dark bg-dark navbar-expand-lg fixed-top">
    <a class="sr-only sr-only-focusable text-white" href="#content" tabindex="1">pule para o conteúdo </a>
    <div class="container">
        <a class="navbar-brand logo mx-auto" href="index.php" tabindex="2" id="inicio">
            <img src="img/logo_nav.png" width="170" alt="imgm do logotipo do site, clique para ir para a home">
        </a>
        <button aria-label="menu hamburguer" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" tabindex="3">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?php if($pagina=='home'){echo 'active';}?> ">
                    <a class="nav-link text-white" alt="Home" href="index.php" tabindex="4">Home</a>
                </li>
                <li class="nav-item <?php if($pagina=='quemsomos'){echo 'active';}?>">
                    <a class="nav-link text-white" href="quemsomos.php" tabindex="5">Quem somos</a>
                </li>

                <li class="nav-item <?php if($pagina=='estilos'){echo 'active';}?>">
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-label="estilos,pressione Enter para abrir" tabindex="6">
                            Estilos
                        </a>

                        <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdownMenuLink">
                          <li class="dropdown-submenu bg-dark"><a class="dropdown-item dropdown-toggle" href="#" tabindex="7">Pop</a>
                            <ul class="dropdown-menu bg-dark">
                              <li><a class="dropdown-item" href="artistaspop.php" tabindex="8" aria-label="Artistas pop">Artistas</a></li>
                              <li><a class="dropdown-item" href="historiapop.php" tabindex="9" aria-label="História pop">Historia</a></li>
                              <li><a class="dropdown-item" href="pop.php" tabindex="10" aria-label="Notícias pop">Notícias</a></li>
                            </ul>
                          </li>
                            <li class="dropdown-submenu bg-dark"><a class="dropdown-item dropdown-toggle" href="#" tabindex="11">Dance</a>
                            <ul class="dropdown-menu bg-dark">
                              <li><a class="dropdown-item" href="artistasdance.php" tabindex="12" aria-label="Artistas dance">Artistas</a></li>
                              <li><a class="dropdown-item" href="historiadance.php" tabindex="13" aria-label="História dance">Historia</a></li>
                              <li><a class="dropdown-item" href="dance.php" tabindex="14" aria-label="Notícias dance">Notícia</a></li>
                            </ul>
                          </li>
                            <li class="dropdown-submenu bg-dark"><a class="dropdown-item dropdown-toggle" href="#" tabindex="15">Punk</a>
                            <ul class="dropdown-menu bg-dark">
                              <li><a class="dropdown-item" href="Punk.php" tabindex="16">Destaques Do Punk</a></li>
                              <li><a class="dropdown-item" href="ramonesNew.php" tabindex="17" aria-label="Ramones e NFG">Ramones & NFG</a></li>
                              <li><a class="dropdown-item" href="gdo.php" tabindex="18">Green Day</a></li>
                            </ul>
                          </li>
                            <li class="dropdown-submenu bg-dark"><a class="dropdown-item dropdown-toggle disabled" href="#" tabindex="-1">Jazz</a>
                            <ul class="dropdown-menu bg-dark">
                              <li><a class="dropdown-item" href="jazz.php">Historia do Jazz</a></li>
                              <li><a class="dropdown-item" href="melhorescomposicoesjazz.php">Composições</a></li>
                              <li><a class="dropdown-item" href="artistasjazz.php">Artistas</a></li>
                            </ul>
                          </li>
                             <li class="dropdown-submenu bg-dark"><a class="dropdown-item dropdown-toggle disabled" href="#" tabindex="-1">Gospel</a>
                            <ul class="dropdown-menu bg-dark">
                              <li><a class="dropdown-item" href="gospel.php">Notícias</a></li>
                              <li><a class="dropdown-item" href="novidades.php">Novidades</a></li>
                              <li><a class="dropdown-item" href="lancamentos.php">Lançamentos</a></li>
                            </ul>
                          </li>
                             <li class="dropdown-submenu bg-dark"><a class="dropdown-item dropdown-toggle disabled" href="#" tabindex="-1">Reggae</a>
                            <ul class="dropdown-menu bg-dark">
                              <li><a class="dropdown-item" href="reggae.php">Reggae</a></li>
                              <li><a class="dropdown-item" href="historiareggae.php">Historia Reggae</a></li>
                              
                            </ul>
                          </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item <?php if($pagina=='termos'){echo 'active';}?>">
                    <a class="nav-link text-white" href="termos.php" tabindex="19">Termos</a>
                </li>
                <li class="nav-item <?php if($pagina=='contatos'){echo 'active';}?>">
                    <a class="nav-link text-white" href="contatos.php" tabindex="20">Contato</a>
                </li>
                <div>
        <a class="navbar-brand logo mx-auto" href="home.php" tabindex="21">
            <img src="img/estadosunidos.png" width="32" height="32" alt="Precione enter para alterar o idioma para inglês">
        </a>
                </div>
            </ul>
        </div>
    </div>
</nav>