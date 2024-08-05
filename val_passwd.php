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

    $password = validate('md5',$_POST['password']);
    $re_password = validate('md5',$_POST['re_password']);

    $hash_psswd = password_hash($password, PASSWORD_DEFAULT);
    $hash_re_psswd = password_hash($re_password, PASSWORD_DEFAULT);
    
    if($hash_psswd != $hash_re_password){
        header("Location: reset_pass.php?error=Las contraseñas no coinciden");
        exit();
    }
    else{
        if(empty($password) && empty($re_password)){
            header("Location: reset_pass.php?error=Debe llenar ambos campos");
            exit();
        }
        elseif(empty($password)){
            header("Location: reset_pass.php?error=Debe llenar el campo de $password");
            exit();
        }
        elseif(empty($re_password)){
            header("Location: reset_pass.php?error=Debe llenar la confirmación de contraseña");
            exit();
        }
        else{
            $sql = "UPDATE bd_users SET pass='$password' WHERE id_user=".$_SESSION['id_user'];
            $result = mysqli_query($conexion, $sql);
            if($result){
                header("Location: ./HTML CSS Y JS/");
                exit();
            }
            else{
                header("Location: reset_pass.php?error=Error al cambiar la contraseña");
                exit();
            }
        }
    }

}