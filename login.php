<?php

    session_start();

    include("Conexion.php");

    if(isset($_POST['user']) && isset($_POST['password'])){
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $user = validate($_POST['user']);
        $password = validate($_POST['password']);
        
        if(empty($user) && empty($password)){
            header("Location: index.php?error=Usuario y contraseña son requeridos");
            exit();
        }
        elseif(empty($user)){
            header("Location: index.php?error=Usuario es requerido");
            exit();
        }
        elseif(empty($password)){
            header("Location: index.php?error=Contraseña es requerida");
            exit();
        }
        else{


            $sql = "SELECT * FROM bd_users WHERE usuario='$user' AND pass='$password'";
            $result = mysqli_query($conexion, $sql);

            if(mysqli_num_rows($result) === 1){
                $row = mysqli_fetch_assoc($result);
                if($row['usuario'] === $user && $row['pass'] === $password){
                    $_SESSION['usuario'] = $row['usuario'];
                    $_SESSION['pass'] = $row['pass'];
                    $_SESSION['id_user'] = $row['id_user'];
                    header("Location: ./HTML CSS Y JS");
                    exit();
                }
                else{
                    header("Location: index.php?error=Usuario o contraseña incorrectos");
                    exit();
                }
            }
            else{
                header("Location: index.php?error=Usuario o contraseña incorrectos");
                exit();
            }
        }
    }