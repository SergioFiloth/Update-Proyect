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
    <link rel="stylesheet" href="../../css/normalize.css">
    <!-- Principal Styles -->
    <link rel="stylesheet" href="../../css/styles.css">
    <link rel="stylesheet" href="../css/panel.css">
    <link rel="stylesheet" href="publisher.css">
</head>

<body id="publisherP">
    <?php
        include("../../templates/nav.php")
    ?>
    <div class="main mN" id="fean">
        <h1 class="title">
            Publisher <span class="sT">» Dashboard</span>
        </h1>
    </div>
    <div class="main container">
        <?php
            include("../../templates/asideP.php")
        ?>
        <div class="main principal">
            <div class="info">
                <div>
                    <div class="contI">
                        <div class="tC">
                            <h3>Total purchases</h3>
                            <a href="earning/" class="detail">Details</a>
                        </div>
                        <div class="value">
                            $nValue
                        </div>
                    </div>
                </div>
                <div>
                    <div class="contI">
                        <div class="tC">
                            <h3>Active Orders</h3>
                            <a href="orders/" class="detail">Details</a>
                        </div>
                        <div class="value">
                            $nValue
                        </div>
                    </div>
                </div>
                <div>
                    <div class="contI">
                        <div class="tC">
                            <h3>Total Websites</h3>
                            <a href="websites/" class="detail">Details</a>
                        </div>
                        <div class="value">
                            $nValue
                        </div>
                    </div>
                </div>
            </div>
            <table class="tableO">
                <tbody class="bodyT">
                    <tr class="trH">
                        <th>Orders</th>
                    </tr>
                    <tr class="trD">
                        <td>Order</td>
                        <td>GUEST POST WEBSITE </td>
                        <td>Price</td>
                        <td>DATE</td>
                        <td>Status</td>
                    </tr>
                </tbody>
            </table>
            <div class="cBO">
                <a href="" class="btnO">Load More</a>
            </div>
            <table class="tableO twoTable">
                <tbody class="bodyT">
                    <tr class="trH tTH">
                        <th class="thT">
                            <span>
                                Your Properties (<a href="websites/" class="lTable">View All</a>)
                            </span>
                        </th>
                        <th>
                            <a href="websiteAdd" class="lTable addW">+ Submit Website</a>
                        </th>
                    </tr>
                    <tr class="trD tTD">
                        <td>Website</td>
                        <td>Status</td>
                        <td>Actions</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <?php
        include("../../templates/footer.php")
    ?>
    <script src="../../js/main.js"></script>
    <script src="../main.js"></script>
</body>

</html>