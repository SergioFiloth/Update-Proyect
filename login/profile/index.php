<?php
include "../../php/db.php";
if (!empty($_POST)) {
  $alert = "";
  if (empty($_POST['nombre']) || empty($_POST['correo']) || empty($_POST['usuario']) || empty($_POST['clave']) ) {
    $alert = '<p class"error">Todo los campos son requeridos</p>';
  } else {
    $idusuario = $_GET['id'];
    $nombre = $_POST['nombre'];
    $lname = $_POST['lname'];
    $number = $_POST['phone'];
    $skype = $_POST['skype'];
    $facebook = $_POST['facebook'];
    $correo = $_POST['correo'];
    $clave = $_POST['clave'];

    $sql_update = mysqli_query($conexion, "UPDATE usuario SET nombre = '$nombre', lname = '$lname', phone = '$number', skype = '$skype', facebook = '$facebook', correo = '$correo' , clave = $clave WHERE idusuario = $idusuario");
    $alert = '<p>Usuario Actualizado</p>';
  }
}

// Mostrar Datos

if (empty($_REQUEST['id'])) {
  header("Location: ../../nav.php");
}
$idusuario = $_REQUEST['id'];
$sql = mysqli_query($conexion, "SELECT * FROM usuario WHERE idusuario = $idusuario");
$result_sql = mysqli_num_rows($sql);
if ($result_sql == 0) {
  header("Location: ../../nav.php");
} else {
  if ($data = mysqli_fetch_array($sql)) {
    $idcliente = $data['idusuario'];
    $nombre = $data['nombre'];
    $lname = $data['lname'];
    $number = $data['phone'];
    $skype = $data['skype'];
    $facebook = $data['facebook'];
    $correo = $data['correo'];
    $clave = $data['clave'];
    $value = $data['balance'];
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publisher Dashboard</title>
    <!-- Here we add Roboto Font of Google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" id="fontsGoogle">
    <!-- Here we use fontawesome 5.15.1 -->
    <script src="../../js/allFontAwesome.js"></script>
    <!-- Here we use normalize.css for nomalizer the styles css -->
    <link rel="stylesheet" href="../../../css/normalize.css">
    <!-- Principal Styles -->
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="../css/panel.css">
    <!-- <link rel="stylesheet" href="../publisher.css"> -->
    <link rel="stylesheet" href="profile.css">
</head>

<body>
    <?php
        include("../../templates/nav.php")
    ?>
    <div class="main" id="fean">
        <h1 class="title">
            My Account
        </h1>
        <div class="principalF">
            <div class="cB">
                <div class="balance">
                    <div class="tB">
                        Account Balance
                    </div>
                    <div class="cantB">
                        $<?php echo $value; ?> USD
                    </div>
                </div>
            </div>
            <form class="" action="" method="post">
                <?php echo isset($alert) ? $alert : ''; ?>
                <input type="hidden" name="id" value="<?php echo $idusuario; ?>">
                <div class="firstBlock">
                    <div class="fN">
                        <label for="fName">First Name</label>
                        <input type="text" name="nombre" id="fName" value="<?php echo $nombre; ?>">
                    </div>
                    <div class="lN">
                        <label for="lName">Last Name</label>
                        <input type="text" name="lname" id="lName" value="<?php echo $lname; ?>">
                    </div>
                    <div class="pF">
                        <label for="phone">Phone</label>
                        <input type="number" name="phone" id="phone" placeholder="Phone No"
                            value="<?php echo $number; ?>">
                    </div>
                </div>
                <div class="secondBlock">
                    <div class="sF">
                        <label for="skype">Skype</label>
                        <input type="text" name="skype" id="skype" placeholder="info@example.com"
                            value="<?php echo $skype; ?>">
                    </div>
                    <div class="fF">
                        <label for="facebook">Facebook</label>
                        <input type="text" name="facebook" id="facebook" placeholder="Facebook Profile Link"
                            value="<?php echo $facebook; ?>">
                    </div>
                </div>
                <div class="treeBlock">
                    <div class="eF">
                        <label for="email">Email <a href="">(Edit)</a></label>
                        <input type="email" name="email" id="email" placeholder="example@your.com"
                            value="<?php echo $correo; ?>">
                    </div>
                    <div class="psF">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" placeholder="Passqord"
                            value="<?php echo $clave; ?>">
                    </div>
                </div>
                <div class="cBtn">
                    <a type="submit" class="btn">Update Account</a>
                </div>
            </form>
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
        include("../../../templates/footer.php")
    ?>
    <script src="../../../js/main.js"></script>
    <script>
        fean.style.marginTop = `${hNavbar}px`;
    </script>
</body>

</html>