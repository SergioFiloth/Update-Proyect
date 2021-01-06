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
    <link rel="stylesheet" href="funds.css">
</head>

<body id="fundsB">
    <?php
        include("../../../templates/nav.php")
    ?>
    <div class="main mN" id="fean">
        <h1 class="title">
            Advertiser <span class="sT">» Deposit Funds</span>
        </h1>
    </div>
    <div class="main">
        <?php
            include("../../../templates/asideA.php")
        ?>
        <div class="main principal">
            <div class="upSection">
                <form action="" class="form">
                    <label for="amount">Enter Amount For Deposit Funds</label>
                    <input type="number" name="amount" id="amount" class="amount">
                    <label>Select Method:</label>
                    <div class="radio">
                        <input type="radio" name="pay" id="pay">
                        <img src="paypal.svg" class="imgF">
                    </div>
                </form>
                <table>
                    <tbody>
                        <tr>
                            <td class="titlesT">Method</td>
                            <td>$method</td>
                        </tr>
                        <tr>
                            <td>Amount</td>
                            <td class="tTable">$Amount</td>
                        </tr>
                        <tr>
                            <td>Processing Fee </td>
                            <td>amount+=10%</td>
                        </tr>
                        <tr>
                            <td class="tTable">Sub Total</td>
                            <td class="totalT">$total</td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="cBtn">
                <a href="" class="btn">
                    Procced to Deposit
                </a>
            </div>
        </div>
    </div>
    <?php
        include("../../../templates/footer.php")
    ?>
    <script src="../../../js/main.js"></script>
    <script src="../../main.js"></script>

</body>

</html>