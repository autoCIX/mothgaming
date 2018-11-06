<?php
	session_start();

		include('base.php');
		mysqli_set_charset($mysqli,"utf8");
		/* comprobar la conexión */
		if ($mysqli->connect_errno) {
			printf("Falló la conexión: %s\n", $mysqli->connect_error);
			exit();
		}else{
			$query = "INSERT INTO user(email,password,name) VALUES('".$_POST["email"]."','".md5($_POST["psw"])."','".$_POST["name"]."')";
			$result = mysqli_query($mysqli, $query);
		
			$query = "SELECT ID,name,type,confirmado FROM user where email='".$_POST["email"]."'";
			print $query;
			$result = mysqli_query($mysqli, $query);
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
			}
            if(isset($_POST["email"])){
                $para      = $_POST['email'];
                $titulo    = 'Moth Gaming - Confirmacion correo electronico';
                $mensaje="www.mothgaming.com/confirmarusuario.php?correousr=".$para;
                $cabeceras = 'From: mothgaming@mothgaming.com' . "\r\n" .
                    'Reply-To: mothgaming@mothgaming.com' . "\r\n" .
                    'X-Mailer: PHP/' . phpversion();

                $bool = mail($para, $titulo, $mensaje, $cabeceras);
                if($bool){
                    echo "Mensaje enviado";
                }else{
                    echo "Mensaje no enviado";
                }
            }
            if($bool){
                 print "
                    <script>
                        window.location.assign('/correoenviado.php?correousr=".$_POST["email"]."');
                    </script>
                    ";
            }
            
		}
?>
