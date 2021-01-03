<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- CSS -->
    <link rel="stylesheet" href="css/estilos.css">
</head>
<body id="particles-js">

    <main class="form">
        <div class="form__box">
          <form action="config/signIn.php" method="POST">
            <div class="form__group">
              <h1 class="form__title">Sign Up</h1>
              <input type="text" name="name" class="form__input" placeholder="Escriba el nombre">
              <input type="password" name="password" class="form__input" placeholder="Escriba la contraseña">
              <button class="form__btn">Sign up</button>
            </div>
          </form>
        </div>
    </main>

<script src="js/particles.js"></script>
<script src="js/particlesApp.js"></script>
</body>
</html>