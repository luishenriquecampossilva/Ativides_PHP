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
                    <a class="nav-link text-white" href="home.php">Home</a>
                </li>
                <li class="nav-item <?php if($pagina=='quemsomos'){echo 'active';}?>">
                    <a class="nav-link text-white" href="quemsomosing.php">Who we are</a>
                </li>

                <li class="nav-item <?php if($pagina=='estilos'){echo 'active';}?>">
                    <div class="dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-label="clique para abrir">
                           
Styles
                        </a>

                        <ul class="dropdown-menu bg-dark" aria-labelledby="navbarDropdownMenuLink">
                          <li class="dropdown-submenu bg-dark"><a class="dropdown-item dropdown-toggle" href="#">Pop</a>
                            <ul class="dropdown-menu bg-dark">
                              <li><a class="dropdown-item" href="artistaspoping.php">Artists</a></li>
                              <li><a class="dropdown-item" href="historiapoping.php">History</a></li>
                              <li><a class="dropdown-item" href="poping.php">News</a></li>
                            </ul>
                          </li>
                            <li class="dropdown-submenu bg-dark"><a class="dropdown-item dropdown-toggle" href="#">Dance</a>
                            <ul class="dropdown-menu bg-dark">
                              <li><a class="dropdown-item" href="artistasdanceing.php">Artists</a></li>
                              <li><a class="dropdown-item" href="historiadanceinging.php">History</a></li>
                              <li><a class="dropdown-item" href="danceing.php">News</a></li>
                            </ul>
                          </li>
                            <li class="dropdown-submenu bg-dark"><a class="dropdown-item dropdown-toggle" href="#">Punk</a>
                            <ul class="dropdown-menu bg-dark">
                              <li><a class="dropdown-item" href="Punking.php">Highlights of Punk</a></li>
                              <li><a class="dropdown-item" href="ramonesNewing.php">Ramones & NFG</a></li>
                              <li><a class="dropdown-item" href="gdoing.php">Green Day</a></li>
                            </ul>
                          </li>
                            <li class="dropdown-submenu bg-dark"><a class="dropdown-item dropdown-toggle" href="#">Jazz</a>
                            <ul class="dropdown-menu bg-dark">
                              <li><a class="dropdown-item" href="jazzing.php">History of Jazz</a></li>
                              <li><a class="dropdown-item" href="melhorescomposicoesjazzing.php">Compositions</a></li>
                              <li><a class="dropdown-item" href="artistasjazzing.php">
Artists</a></li>
                            </ul>
                          </li>
                             <li class="dropdown-submenu bg-dark"><a class="dropdown-item dropdown-toggle" href="#">Gospel</a>
                            <ul class="dropdown-menu bg-dark">
                              <li><a class="dropdown-item" href="gospeling.php">News</a></li>
                              <li><a class="dropdown-item" href="novidadesing.php">Information</a></li>
                              <li><a class="dropdown-item" href="lancamentosing.php">New Releases</a></li>
                            </ul>
                          </li>
                             <li class="dropdown-submenu bg-dark"><a class="dropdown-item dropdown-toggle" href="#">Reggae</a>
                            <ul class="dropdown-menu bg-dark">
                              <li><a class="dropdown-item" href="reggaeing.php">Reggae</a></li>
                              <li><a class="dropdown-item" href="historiareggaeing.php">History of Reggae</a></li>
                              
                            </ul>
                          </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item <?php if($pagina=='termos'){echo 'active';}?>">
                    <a class="nav-link text-white" href="termosing.php">Terms</a>
                </li>
                <li class="nav-item <?php if($pagina=='contatos'){echo 'active';}?>">
                    <a class="nav-link text-white" href="contatosing.php">Contact</a>
                </li>
                <div>
                <a class="navbar-brand logo mx-auto" href="index.php">
            <img src="img/brasil.png" width="" height="32" alt="imgm do logotipo do site, clique para ir para a home">
        </a>
                </div>
            </ul>
        </div>
    </div>
</nav>