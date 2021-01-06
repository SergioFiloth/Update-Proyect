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
    <link rel="stylesheet" href="orders.css">
</head>

<body id="ordersP">
    <?php
        include("../../../templates/nav.php")
    ?>
    <div class="main mN" id="fean">
        <h1 class="title">
            Publisher <span class="sT">» Orders</span>
        </h1>
    </div>
    <div class="main container">
        <?php
            include("../../../templates/asideP.php")
        ?>
        <form class="main principal">
            <button href="" class="btnTO active">
                Active
            </button>
            <button href="" class="btnTO">
                Delivered
            </button>
            <button href="" class="btnTO">
                Complete
            </button>
            <button href="" class="btnTO">
                Cancelled
            </button>
            <button href="" class="btnTO">
                Show All
            </button>
            <table class="tableO">
                <tbody class="bodyT">
                    <tr class="trH">
                        <th colspan="3">DADR Services Orders</th>
                        <th colspan="2"><input type="text" placeholder="Search Website" class="fSearch"></th>
                    </tr>
                    <tr class="trD">
                        <td>ORDER</td>
                        <td>GUEST POST WEBSITE</td>
                        <td>Price</td>
                        <td>Date</td>
                        <td>Status</td>
                    </tr>
                </tbody>
            </table>
            <div class="navC">
                <button href="" class="btnTO numberNav">1</button>
            </div>
        </form>
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