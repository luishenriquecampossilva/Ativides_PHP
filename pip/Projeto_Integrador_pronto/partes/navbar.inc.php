<nav role="navigation" class="navbar navbar-dark bg-dark navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand logo mx-auto" href="index.php">
            <img src="img/logo_nav.png" width="170" alt="imgm do logotipo do site, clique para ir para a home">
        </a>
        <button aria-label="menu hamburguer" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?php if($pagina=='home'){echo 'active';}?> ">
                    <a class="nav-link text-white" href="index.php">Home</a>
                </li>
                <li class="nav-item <?php if($pagina=='quemsomos'){echo 'active';}?>">
                    <a class="nav-link text-white" href="quemsomos.php">Quem somos</a>
                </li>

                <li class="nav-item <?php if($pagina=='estilos'){echo 'active';}?>">
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-label="clique para abrir">
                            Estilos
                        </a>

                        <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdownMenuLink">
                          <li class="dropdown-submenu bg-dark"><a class="dropdown-item dropdown-toggle" href="#">Pop</a>
                            <ul class="dropdown-menu bg-dark">
                              <li><a class="dropdown-item" href="artistaspop.php">Artistas</a></li>
                              <li><a class="dropdown-item" href="historiapop.php">Historia</a></li>
                              <li><a class="dropdown-item" href="pop.php">Notícias</a></li>
                            </ul>
                          </li>
                            <li class="dropdown-submenu bg-dark"><a class="dropdown-item dropdown-toggle" href="#">Dance</a>
                            <ul class="dropdown-menu bg-dark">
                              <li><a class="dropdown-item" href="artistasdance.php">Artistas</a></li>
                              <li><a class="dropdown-item" href="historiadance.php">Historia</a></li>
                              <li><a class="dropdown-item" href="dance.php">Notícia</a></li>
                            </ul>
                          </li>
                            <li class="dropdown-submenu bg-dark"><a class="dropdown-item dropdown-toggle" href="#">Punk</a>
                            <ul class="dropdown-menu bg-dark">
                              <li><a class="dropdown-item" href="Punk.php">Destaques Do Punk</a></li>
                              <li><a class="dropdown-item" href="ramonesNew.php">Ramones & NFG</a></li>
                              <li><a class="dropdown-item" href="gdo.php">Green Day</a></li>
                            </ul>
                          </li>
                            <li class="dropdown-submenu bg-dark"><a class="dropdown-item dropdown-toggle" href="#">Jazz</a>
                            <ul class="dropdown-menu bg-dark">
                              <li><a class="dropdown-item" href="jazz.php">Historia do Jazz</a></li>
                              <li><a class="dropdown-item" href="melhorescomposicoesjazz.php">Composições</a></li>
                              <li><a class="dropdown-item" href="artistasjazz.php">Artistas</a></li>
                            </ul>
                          </li>
                             <li class="dropdown-submenu bg-dark"><a class="dropdown-item dropdown-toggle" href="#">Gospel</a>
                            <ul class="dropdown-menu bg-dark">
                              <li><a class="dropdown-item" href="gospel.php">Notícias</a></li>
                              <li><a class="dropdown-item" href="novidades.php">Novidades</a></li>
                              <li><a class="dropdown-item" href="lancamentos.php">Lançamentos</a></li>
                            </ul>
                          </li>
                             <li class="dropdown-submenu bg-dark"><a class="dropdown-item dropdown-toggle" href="#">Reggae</a>
                            <ul class="dropdown-menu bg-dark">
                              <li><a class="dropdown-item" href="reggae.php">Reggae</a></li>
                              <li><a class="dropdown-item" href="historiareggae.php">Historia Reggae</a></li>
                              
                            </ul>
                          </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item <?php if($pagina=='termos'){echo 'active';}?>">
                    <a class="nav-link text-white" href="termos.php">Termos</a>
                </li>
                <li class="nav-item <?php if($pagina=='contatos'){echo 'active';}?>">
                    <a class="nav-link text-white" href="contatos.php">Contato</a>
                </li>
                <div>
        <a class="navbar-brand logo mx-auto" href="home.php">
            <img src="img/estadosunidos.png" width="32" height="32" alt="imgm do logotipo do site, clique para ir para a home">
        </a>
                </div>
            </ul>
        </div>
    </div>
</nav>