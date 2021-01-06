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
    <script src="../../../js/allFontAwesome.js"></script>
    <!-- Here we use normalize.css for nomalizer the styles css -->
    <link rel="stylesheet" href="../../../css/normalize.css">
    <!-- Principal Styles -->
    <link rel="stylesheet" href="../../../css/styles.css">
    <link rel="stylesheet" href="../../css/panel.css">
</head>

<body id="dadrB">
    <?php
        include("../../../templates/nav.php")
    ?>
    <div class="main mN" id="fean">
        <h1 class="title">
            Advertiser <span class="sT">» Service Orders</span>
        </h1>
    </div>
    <div class="main container">
        <?php
            include("../../../templates/asideA.php")
        ?>
        <div class="main principal">
            <a href="" class="btnTO active">
                Pedding
            </a>
            <a href="" class="btnTO">
                In Procces
            </a>
            <a href="" class="btnTO">
                Completed
            </a>
            <table class="tableO">
                <tbody class="bodyT">
                    <tr class="trH" colspan="6">
                        <th>DADR Services Orders</th>
                    </tr>
                    <tr class="trD">
                        <td>Trans ID</td>
                        <td>Services Plan</td>
                        <td>Price</td>
                        <td>Websites</td>
                        <td>Status</td>
                        <td>Date</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <?php
        include("../../../templates/footer.php")
    ?>
    <script src="../../../js/main.js"></script>
    <script src="../../main.js"></script>
</body>

</html>