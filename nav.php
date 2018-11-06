<!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="/">Moth gaming</a>
            <!--<img src="img/cabecera.jpeg" alt="Pagina principal" height="42" width="42">-->
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="ownteams.php">Equipos moth gaming</a>
                    </li>
                    <!--<li class="nav-item">
                        <a class="nav-link" href="">Equipos liga ameteur</a>
                    </li>-->
                    <!--<li class="nav-item">
                        <a class="nav-link" href="">Solo player</a>
                    </li>-->
                    <li class="nav-item">
                        <a class="nav-link" href="tournaments.php">Torneos</a>
                    </li>
                    <!--<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Torneo
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                            <a class="dropdown-item" href="">Incribete</a>
                            <a class="dropdown-item" href="">Modificar equipo</a>
                        </div>
                    </li>-->
                    <!--<li class="nav-item">
                        <a class="nav-link" href="">Registrate</a>
                    </li>-->
                    <?PHP 
                        if(!isset($_SESSION['user_ID'])){
                            echo '<li class="nav-item">
                                <a class="nav-link" href="login.php">Iniciar sesión</a>
                            </li>';
                            echo '<li class="nav-item">
                                <a class="nav-link" href="registro.php">Registrate</a>
                            </li>';
                        }else{
                            echo '<li class="nav-item">
                                <a class="nav-link" href="cerrarsesion.php">Cerrar sesión</a>
                            </li>';
                            echo '<li class="nav-item">
                                <a class="nav-link" href="cerrarsesion.php">Gestionar equipo</a>
                            </li>';
                        }
                    ?>
                    
                    <!--<li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownBlog" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Idiomas
                        </a>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownBlog">
                            <a class="dropdown-item" href="">Español</a>
                            <a class="dropdown-item" href="">Ingles</a>
                        </div>
                    </li>-->
                </ul>
            </div>
        </div>
    </nav>