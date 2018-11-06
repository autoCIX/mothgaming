<?PHP
    session_start();
    if(isset($_SESSION['user_ID'])){
        header('Location: /');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Moth Gaming</title>
    <?PHP include 'meta.php';?>

    <link href="css/login.css" rel="stylesheet">
    <link href="css/login_all.css" rel="stylesheet">
</head>

<body>

    <header>
        <?PHP include 'nav.php';
        ?>
    </header>

    <!-- Page Content -->
    <div class="container wrapper">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card card-signin my-5">
                    <div class="card-body">
                        <h5 class="card-title text-center">Registrate</h5>
                        <form class="form-signin" action="realizar_registro.php" method="post" onsubmit="return comprobarClave()">
                            <div class="form-label-group">
                                <input type="text" id="inputName" class="form-control" placeholder="Nombre de usuario" required autofocus name="name">
                                <label for="inputName">Nombre del usuario</label>
                            </div>
                            <div class="form-label-group">
                                <input type="email" id="inputEmail" class="form-control" placeholder="Dirección de correo electrónico" required autofocus name="email">
                                <label for="inputEmail">Dirección de correo electrónico</label>
                            </div>

                            <div class="form-label-group">
                                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required name="psw">
                                <label for="inputPassword">Contraseña</label>
                            </div>
                            <div class="form-label-group">
                                <input type="password" id="inputPassword2" class="form-control" placeholder="Password" required>
                                <label for="inputPassword2">Repetir Contraseña</label>
                            </div>

                            <div id="oculto" class="alert alert-warning" style="display:none">
                                <strong>Cuidado!</strong> Ambas contraseñas han de ser exactas.
                            </div>

                            <div class="custom-control custom-checkbox mb-3">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label" for="customCheck1">Recordar contraseña</label>
                            </div>
                            <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Entrar</button>
                            <hr class="my-4">
                            <button class="btn btn-lg btn-google btn-block text-uppercase" type="submit"> Entrar con Google</button>
                            <button class="btn btn-lg btn-facebook btn-block text-uppercase" type="submit">Entrar con Facebook</button>
                        </form>
                        <script>
                            function comprobarClave() {
                                clave1 = $('#inputPassword').val();
                                clave1 = $('#inputPassword2').val();

                                if (!clave1 == clave2) {
                                    $('#oculto').show(200);
                                    return false;
                                } else {
                                    $('#oculto').hide(200);
                                    return true;
                                }


                            }

                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?PHP include 'footer.php';?>

</body>

</html>
