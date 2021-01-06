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
    <script src="../../../js/allFontAwesome.js"></script>
    <!-- Here we use normalize.css for nomalizer the styles css -->
    <link rel="stylesheet" href="../../../css/normalize.css">
    <!-- Principal Styles -->
    <link rel="stylesheet" href="../../../css/styles.css">
    <link rel="stylesheet" href="../../css/panel.css">
    <link rel="stylesheet" href="../publisher.css">
    <link rel="stylesheet" href="earning.css">
</head>

<body id="earningP">
    <?php
        include("../../../templates/nav.php")
    ?>
    <div class="main mN" id="fean">
        <h1 class="title">
            Publisher <span class="sT">» Earning</span>
        </h1>
    </div>
    <div class="main container">
        <?php
            include("../../../templates/asideP.php")
        ?>
        <div class="main principal">
            <div class="info">
                <div class="contI">
                    <div class="tC">
                        <h3>Net Income</h3>
                        <a href="" class="detail">Details</a>
                    </div>
                    <div class="value">
                        $nValue
                    </div>
                </div>
                <div class="contI">
                    <div class="tC">
                        <h3>Pending Clearance</h3>
                        <a href="" class="detail">Details</a>
                    </div>
                    <div class="value">
                        $nValue
                    </div>
                </div>
                <div class="contI">
                    <div class="tC">
                        <h3>Available for Withdrawal</h3>
                    </div>
                    <div class="value">
                        $nValue
                    </div>
                </div>
                <div class="contI">
                    <div class="tC">
                        <h3>Pending withdrawal</h3>
                        <a href="" class="detail">Details</a>
                    </div>
                    <div class="value">
                        $nValue
                    </div>
                </div>
            </div>
            <div class="cantM">
                <span class="money">$value</span> are you available for withdrawal
            </div>
            <div class="method">
                <p class="pMethod">Method: </p>
                <a class="imgM">
                    <img src="paypal.png" alt="Paypal Logo" class="mImg">
                </a>
            </div>
            <table class="tableO">
                <tbody class="bodyT">
                    <tr class="trH">
                        <th>Earning Details</th>
                    </tr>
                    <tr class="trD">
                        <td>For</td>
                        <td>Date </td>
                        <td>Clearance Date</td>
                        <td>Status</td>
                        <td>Amount</td>
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