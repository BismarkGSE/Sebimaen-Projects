<?php
    require "code-login.php";
?>


<!DOCTYPE html>
<html lang="en">
  <head>
      <meta charset="UTF-8">
      <title>Login - Sebimaen</title>
      <link rel="stylesheet" href="../css/login-styles.css">
      <link rel="stylesheet" href="../css/main-styles.css">
      <link href="https://fonts.googleapis.com/css?family=Merienda|Montserrat" rel="stylesheet">
      <link rel="icon" href="../img/favicon00.png">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
      <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="../js/menu_ham.js"></script>
      <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  </head>
  <body class="visible_menu">
    <header>
      <div class="logo1" id="svg1">
        <a href="../index.html"><img src="../img/Sebimaen_Logo2.png" alt="logo"></a>
      </div>
      <div class="Contacte">
        <p id="esp-txt"><strong>Telf:</strong> 903 56 54 58</p>
        <p><strong>E-mail:</strong> sebimaen@sebimaen.com</p>
      </div>
    </header>
    <nav class="sticky-top">
      <div class="menu_ham" id="btn-menu">
        <span class="linea linea1"></span>
        <span class="linea linea2"></span>
        <span class="linea linea3"></span>
      </div>
      <div class="barra">
        <ul class="sub_menu">
          <li><a href="../index.html">INICI</a></li>
          <li><a href="https://selenabravovioque.wixsite.com/sebimaen" target="_blank">BLOG</a></li>
          <li><a href="https://sebimaen.com/tienda-de-componentes/" target="_blank">BOTIGA</a></li>
          <li><a href="index.php">LOGIN</a></li>
        </ul>
      </div>
    </nav>
    <section class="espacio">
      <div class="container-all">
        <div class="ctn-form">
          <img src="../img/Sebimaen_logo.png" alt="" class="logo">
          <h1 class="title">Iniciar Sesión</h1>
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="">Email</label>
            <input type="text" name="email">
            <span class="msg-error"><?php echo $email_err; ?></span>
            <label for="">Contraseña</label>
            <input type="password" name="password">
            <span class="msg-error"><?php echo $password_err; ?></span>
            <input type="submit" value="Iniciar">
          </form>
          <span class="text-footer">¿Aún no te has regsitrado?
            <a href="register.php">Registrate</a>
          </span>
        </div>
        <div class="ctn-text">
          <div class="capa"></div>
          <h1 class="title-description">Benvingut a Sebimaen</h1>
          <p class="text-description">La vostra tenda de components de confiança per qualsevol compra o reembols</p>
        </div>
      </div>
    </section>
  </body>
</html>
