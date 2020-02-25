<nav role="navigation" class="navbar navbar-dark bg-dark navbar-expand-lg fixed-top">
    <a class="sr-only sr-only-focusable text-white" href="#content" tabindex="1">pule para o conteúdo </a>
    <div class="container">
        <a class="navbar-brand logo mx-auto" href="index.php" tabindex="2">
            <img src="img/logo_nav.png" width="170" alt="imgm do logotipo do site, clique para ir para a home" id="inicio">
        </a>
        <button aria-label="menu hamburguer" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" tabindex="3">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?php if($pagina=='home'){echo 'active';}?> ">
                    <a class="nav-link text-white" href="home.php" tabindex="4">Home</a>
                </li>
                <li class="nav-item <?php if($pagina=='quemsomos'){echo 'active';}?>">
                    <a class="nav-link text-white" href="quemsomosing.php" tabindex="5">Who we are</a>
                </li>

                <li class="nav-item <?php if($pagina=='estilos'){echo 'active';}?>">
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-label="styles, press Enter to open" tabindex="6">
                           
Styles
                        </a>

                        <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdownMenuLink">
                          <li class="dropdown-submenu bg-dark"><a class="dropdown-item dropdown-toggle" href="#" tabindex="7">Pop</a>
                            <ul class="dropdown-menu bg-dark">
                              <li><a class="dropdown-item" href="artistaspoping.php" tabindex="8" aria-label="pop artists">Artists</a></li>
                              <li><a class="dropdown-item" href="historiapoping.php" tabindex="9" aria-label="pop history">History</a></li>
                              <li><a class="dropdown-item" href="poping.php" tabindex="10" aria-label="pop news">News</a></li>
                            </ul>
                          </li>
                            <li class="dropdown-submenu bg-dark"><a class="dropdown-item dropdown-toggle" href="#" tabindex="11">Dance</a>
                            <ul class="dropdown-menu bg-dark">
                              <li><a class="dropdown-item" href="artistasdanceing.php" tabindex="12" aria-label="dance artists">Artists</a></li>
                              <li><a class="dropdown-item" href="historiadanceinging.php" tabindex="13" aria-label="dance history">History</a></li>
                              <li><a class="dropdown-item" href="danceing.php" tabindex="14" aria-label="dance news">News</a></li>
                            </ul>
                          </li>
                            <li class="dropdown-submenu bg-dark"><a class="dropdown-item dropdown-toggle" href="#" tabindex="15">Punk</a>
                            <ul class="dropdown-menu bg-dark">
                              <li><a class="dropdown-item" href="Punking.php" tabindex="16">Highlights of Punk</a></li>
                              <li><a class="dropdown-item" href="ramonesNewing.php" tabindex="17">Ramones & NFG</a></li>
                              <li><a class="dropdown-item" href="gdoing.php" tabindex="18">Green Day</a></li>
                            </ul>
                          </li>
                            <li class="dropdown-submenu bg-dark"><a class="dropdown-item dropdown-toggle disabled" href="#" tabindex="-1">Jazz</a>
                            <ul class="dropdown-menu bg-dark">
                              <li><a class="dropdown-item" href="jazzing.php">History of Jazz</a></li>
                              <li><a class="dropdown-item" href="melhorescomposicoesjazzing.php">Compositions</a></li>
                              <li><a class="dropdown-item" href="artistasjazzing.php">
Artists</a></li>
                            </ul>
                          </li>
                             <li class="dropdown-submenu bg-dark"><a class="dropdown-item dropdown-toggle disabled" href="#" tabindex="-1">Gospel</a>
                            <ul class="dropdown-menu bg-dark">
                              <li><a class="dropdown-item" href="gospeling.php">News</a></li>
                              <li><a class="dropdown-item" href="novidadesing.php">Information</a></li>
                              <li><a class="dropdown-item" href="lancamentosing.php">New Releases</a></li>
                            </ul>
                          </li>
                             <li class="dropdown-submenu bg-dark"><a class="dropdown-item dropdown-toggle disabled" href="#" tabindex="-1">Reggae</a>
                            <ul class="dropdown-menu bg-dark">
                              <li><a class="dropdown-item" href="reggaeing.php">Reggae</a></li>
                              <li><a class="dropdown-item" href="historiareggaeing.php">History of Reggae</a></li>
                              
                            </ul>
                          </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item <?php if($pagina=='termos'){echo 'active';}?>">
                    <a class="nav-link text-white" href="termosing.php" tabindex="19">Terms</a>
                </li>
                <li class="nav-item <?php if($pagina=='contatos'){echo 'active';}?>">
                    <a class="nav-link text-white" href="contatosing.php" tabindex="20">Contact</a>
                </li>
                <div>
                <a class="navbar-brand logo mx-auto" href="index.php" tabindex="21" aria-label="Switch language to Brazilian Portuguese">
            <img src="img/brasil.png" width="" height="32" alt="Flag of Brazil">
        </a>
                </div>
            </ul>
        </div>
    </div>
</nav>