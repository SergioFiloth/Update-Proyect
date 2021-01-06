<?php
$alert = '';
session_start();
if (!empty($_SESSION['active'])) {
  header('location: templates/nav.php');
} else {
  if (!empty($_POST)) {
    if (empty($_POST['correo']) || empty($_POST['clave'])) {
      $alert = '<div class="alert alert-danger" role="alert">
  Ingrese su usuario y su clave
</div>';
    } else {
      require_once "../../php/db.php";
      $correo = mysqli_real_escape_string($conexion, $_POST['correo']);
      $clave = md5(mysqli_real_escape_string($conexion, $_POST['clave']));
      $query = mysqli_query($conexion, "SELECT * FROM usuario u INNER JOIN rol r ON u.rol = r.idrol WHERE u.correo = '$correo' AND u.clave = '$clave'");
      mysqli_close($conexion);
      $resultado = mysqli_num_rows($query);
      if ($resultado > 0) {
        $dato = mysqli_fetch_array($query);
        $_SESSION['active'] = true;
        $_SESSION['idUser'] = $dato['idusuario'];
        $_SESSION['nombre'] = $dato['nombre'];
        $_SESSION['lname'] = $dato['lname'];
        $_SESSION['email'] = $dato['correo'];
        $_SESSION['rol'] = $dato['idrol'];
        $_SESSION['rol_name'] = $dato['rol'];
        $_SESSION['balance'] = $dato['balance'];
        header('location: ../../nav.php');
      } else {
        $alert = '<div class="alert alert-danger" role="alert">
              Usuario o Contraseña Incorrecta
            </div>';
        session_destroy();
      }
    }
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Here we add Roboto Font of Google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" id="fontsGoogle">
    <!-- Here we use fontawesome 5.15.1 -->
    <script src="js/allFontAwesome.js"></script>
    <!-- Here we use normalize.css for nomalizer the styles css -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- Principal Styles -->
    <link rel="stylesheet" href="css/styles.css">
    <!-- Styles of the pages -->
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <?php
        include("templates/nav.php")
    ?>
    <div class="loginC" id="fean">
        <div class="loginCF">
            <h2 class="titleF">
                Sign In
            </h2>
            <form action="" method="POST">
                <?php echo isset($alert) ? $alert : ""; ?>
                <label for="email" class="label">Email</label>
                <input type="email" name="email" id="email" placeholder="Example: info@yourcompany.com" class="input">
                <label for="password" class="label">Password</label>
                <input type="password" name="pass" id="password" placeholder="Password" class="input">
                <a href="#" class="lostP">Lost Password?</a>
                <div class="submit">
                    <input type="submit" value="Login Now" class="btn" name="register">
                </div>
            </form>
        </div>
        <?php
include "../../php/db.php";
if (!empty($_POST['register'])) {
    $alert = "";
    if (empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['email']) || empty($_POST['pass']) ) {
        $alert = '<div class="alert alert-primary" role="alert">
                    Todo los campos son obligatorios
                </div>';
    } else {

        $nombre = $_POST['fname'];
        $lname = $_POST['lname'];
        $email = $_POST['email'];
        $clave = md5($_POST['pass']);
 

        $query = mysqli_query($conexion, "SELECT * FROM usuario where correo = '$email'");
        $result = mysqli_fetch_array($query);

        if ($result > 0) {
            $logalert = '<div class="alert alert-danger" role="alert">
                        El correo ya existe
                    </div>';
        } else {
            $query_insert = mysqli_query($conexion, "INSERT INTO usuario(nombre,lname,correo,clave) values ('$nombre', '$lname', '$email', '$clave')");
            if ($query_insert) {
                $logalert = '<div class="alert alert-primary" role="alert">
                            Usuario registrado
                        </div>';
            } else {
                $logalert = '<div class="alert alert-danger" role="alert">
                        Error al registrar
                    </div>';
            }
        } 
    }
}
?>
        <div class="formStarted">
            <h2 class="titleF">
                Create New Account
            </h2>
            <?php
                include("../../templates/formRegister.php")
            ?>
        </div>
    </div>
    <div class="learn tac">
        <h2 class="learn__title">
            Want To Learn More?
        </h2>
        <p class="learn__description">
            Learn to use the BuySellGuestPost suite of products and tools with our easy-to-follow guides, articles and
            support documents.
        </p>
        <div class="learn__more">
            <div class="learnCard">
                <div class="learTitle">
                    <div class="iconLearn">
                        <i class="fas fa-newspaper"></i>
                    </div>
                    <h3>Read Articles</h3>
                </div>
                <p>
                    The latest news about the guest blogging and the BuySellGuestPost line of products and services.
                </p>
            </div>
            <a class="learnCard" id="linkM">
                <div class="learTitle">
                    <div class="iconLearn">
                        <i class="fas fa-cart-plus"></i>
                    </div>
                    <h3>View Marketplace</h3>
                </div>
                <p>
                    Get quality contextual backlinks, view guest blogging sites marketplace that includes 2500+ sites.
                </p>
            </a>
            <div class="learnCard">
                <div class="learTitle">
                    <div class="iconLearn">
                        <i class="fas fa-file-alt"></i>
                    </div>
                    <h3>Support Doc</h3>
                </div>
                <p>
                    Need any help regarding buying or selling guest posts, our experts ready to help you 24/7.
                </p>
            </div>
        </div>
    </div>
    <?php
        include("templates/footer.php")
    ?>
    <script src="js/main.js"></script>
</body>

</html>