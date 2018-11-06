<!DOCTYPE html>
<html lang="en">

<head>
    <title>Moth Gaming</title>
    <?PHP include 'meta.php';?>
</head>

<body>
    
    <header>
        <?PHP include 'nav.php';?>
    </header>

    <!-- Page Content -->
    <div class="container">

        <h1 class="my-4">Nuestros equipos conpiten en:</h1>
        <?php
            session_start();
            include 'base.php';

            mysqli_set_charset($mysqli,"utf8");
            /* comprobar la conexión */
            if ($mysqli->connect_errno) {
                printf("Falló la conexión: %s\n", $mysqli->connect_error);
                exit();
            }else{
                $query = "SELECT * FROM `team-game` T INNER JOIN `game` G on G.ID=T.game where team=1 LIMIT 0,3";
                $result = mysqli_query($mysqli, $query);
                mysqli_close($mysqli);
                
                echo '<div class="row">';
                
                /* array numérico y asociativo */
                while($fila = mysqli_fetch_array($result, MYSQLI_BOTH)){
                    echo '<div class="col-lg-4 mb-4">';
                        echo '<div class="card h-100">';
                            echo '<h4 class="card-header">'.$fila["name"].'</h4>';
                            echo '<div class="card-body">';
                                echo '<p class="card-text">'.$fila["description"].'</p>';
                            echo '</div>';
                            echo '<div class="card-footer">
                                    <a href="#" class="btn btn-primary">Nuestro equipo</a>
                                </div>';
                        echo '</div>';
                    echo '</div>';
                    }
                
                echo '</div>';
            }	

        ?>

        <hr>

        <?PHP include 'contact.php';?>

    </div>
    <!-- /.container -->

    <?PHP include 'footer.php';?>

</body>

</html>