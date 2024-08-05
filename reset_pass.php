<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="styles.css">
    <!-- <meta http-equiv="refresh" content="5"> -->
    <title>Inicio de Sesión</title>
</head>
<body>
    <div class="background-image"></div>
    <div class="overlay_2"></div>
    <h1>Cambio de contraseña</h1>
    <br>
    <div class="disclaimer">
        <p class="disclaimer_p">Es necesario cambiar tu contraseña por motivos de seguridad. Al cambiar tu contraseña periódicamente, reduces el riesgo de que alguien acceda a tu cuenta sin autorización. Además, al utilizar contraseñas fuertes y únicas, aumentas la protección de tu información personal. Recuerda que la seguridad de tu cuenta es fundamental para mantener tus datos seguros y protegidos. Recuerda tambien utilizar parámetros de seguridad tales como incluir mayúsculas y minúsculas, números y/o algun caractér especial para aumentar la seguridad de tu cuenta. Es requisito que cambie su contraseña al primer inicio de sesión.</p>
    </div>
    <?php
        if(isset($_GET['error'])){
        ?>
        <div class="alert alert-danger" role="alert">
            <p class="error" >
                <?php 
                    echo $_GET['error']; 
                ?>
            </p>
        </div>
        <?php
        }
        ?>

    <div class="form-container">
        <form action="val_passwd.php" method="POST">
    
            <img class="fa-solid fa-unlock" src="" alt="">
            <label for="password">Ingrese una nueva contraseña</label>
            <input type="password" name="password" id="password">

            <img class="fa-solid fa-rotate" src="" alt="">
            <label for="password">Vuelva a introducir su contraseña</label>
            <input type="password" name="re-password" id="re-password">
            
            <button type="submit">Iniciar Sesión</button>
        </form>
        
    </div>
</body>
</html>