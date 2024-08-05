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
    <div class="overlay"></div>
    <h1>Inicio de Sesión</h1>

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
        <form action="login.php" method="POST">
            <img class="fa-solid fa-user" src="" alt="">
            <label for="text">Usuario / Correo</label>
            <input type="text" name="user" id="user">
    
            <img class="fa-solid fa-unlock" src="" alt="">
            <label for="password">Contraseña</label>
            <input type="password" name="password" id="password">
            
            <button type="submit">Iniciar Sesión</button>
        </form>
        <a class="recuperar" href="recuperar-pass.php"><button class="btn-recover">¿Has olvidado tu contraseña?</button></a>
    </div>
</body>
</html>