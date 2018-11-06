<?php
    session_start();
	include 'base.php';
	
    mysqli_set_charset($mysqli,"utf8");
    /* comprobar la conexión */
    if ($mysqli->connect_errno) {
        printf("Falló la conexión: %s\n", $mysqli->connect_error);
        exit();
    }else{
        $query = "SELECT * FROM user where email='".$_POST["email"]."' and password='".md5($_POST["psw"])."'";
        $result = mysqli_query($mysqli, $query);
        mysqli_close($mysqli);
        /* array numérico y asociativo */
        if($fila = mysqli_fetch_array($result, MYSQLI_BOTH)){
            $_SESSION["user_ID"]=$fila["ID"];
            $_SESSION["user_name"]=$fila["name"];
            $_SESSION["user_type"]=$fila["type"];
            $_SESSION["user_conf"]=$fila["confirmado"];
            if(isset($_POST["recordar"])){
                //setcookie("user_ID",$fila["ID"]);
                //setcookie("user_name",$fila["name"]);
                //setcookie("user_type",$fila["type"]);
                //setcookie("user_conf",$fila["confirmado"]);
            }
            print "<script>window.history.back(-1);</script>";
        }
    }	
   
?>
