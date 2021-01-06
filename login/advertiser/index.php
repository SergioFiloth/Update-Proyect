<?php
session_start();
if (empty($_SESSION['active'])) {
	header('location: ../');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Advertiser Dashboard</title>
    <!-- Here we add Roboto Font of Google -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" id="fontsGoogle">
    <!-- Here we use fontawesome 5.15.1 -->
    <script src="../../js/allFontAwesome.js"></script>
    <!-- Here we use normalize.css for nomalizer the styles css -->
    <link rel="stylesheet" href="../../css/normalize.css">
    <!-- Principal Styles -->
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="../css/panel.css">
</head>

<body id="advertiserB">
    <?php
        include("../../templates/nav.php")
    ?>
    <div class="main mN" id="fean">
        <h1 class="title">
            Advertiser <span class="sT">» Dashboard</span>
        </h1>
    </div>
    <div class="main container">
        <?php
            include("../../templates/asideA.php")
        ?>
        <div class="main principal">
            <div class="info">
                <div>
                    <div class="contI">
                        <h3 class="tC">
                            Total purchases
                        </h3>
                        <div class="value">
                            $nValue
                        </div>
                    </div>
                </div>
                <div>
                    <div class="contI">
                        <h3 class="tC">
                            Complete Orders
                        </h3>
                        <div class="value">
                            $nValue
                        </div>
                    </div>
                </div>
                <div>
                    <div class="contI">
                        <h3 class="tC">
                            Active orders
                        </h3>
                        <div class="value">
                            $nValue
                        </div>
                    </div>
                </div>
            </div>
            <?php
                include("../../templates/orders.php")
            ?>
            <div class="cBO">
                <a href="orders/" class="btnO">Go to Orders Page</a>
            </div>
        </div>
    </div>
    <?php
        include("../../templates/footer.php")
    ?>
    <script src="../../js/main.js"></script>
    <script src="../main.js"></script>
</body>

</html>